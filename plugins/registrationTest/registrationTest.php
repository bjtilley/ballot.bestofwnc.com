<?php

class registrationTest extends PluginBase
{
    protected $storage = 'DbStorage';
    protected static $name = 'registrationTest';
    protected static $description = 'Test to intercept registration submit';

    const APCU_KEY = 'disposable_email_domains';
    const APCU_KEY_REFERER = 'referer_blocklist';
    const APCU_TTL = 86400; // 24 hours

    public function init()
    {
        $this->subscribe('beforeRegister', 'beforeRegister');
        $this->subscribe('beforeWelcomePageRender', 'beforeWelcomePageRender');
        $this->subscribe('beforeSurveyPage', 'beforeSurveyPage');
    }

    /**
     * Resolve the path to disposable_email.txt.
     * Production: /var/www/shared/blocklists/disposable_email.txt
     * Local dev:  <repo_root>/shared/blocklists/disposable_email.txt
     */
    private function getBlocklistPath()
    {
        $production = '/var/www/shared/blocklists/disposable_email.txt';
        if (file_exists($production)) {
            return $production;
        }
        return __DIR__ . '/../../shared/blocklists/disposable_email.txt';
    }

    /**
     * Load the disposable domain list as a hash map (domain => true) for O(1) lookup.
     * Cached in APCu for 24 hours when available; falls back to reading the file directly.
     */
    private function getDisposableDomains()
    {
        $useApcu = function_exists('apcu_fetch') && ini_get('apc.enabled');

        if ($useApcu) {
            $success = false;
            $cached  = apcu_fetch(self::APCU_KEY, $success);
            if ($success) {
                return $cached;
            }
        }

        $path = $this->getBlocklistPath();
        if (!file_exists($path)) {
            return [];
        }

        $lines   = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $domains = array_fill_keys($lines, true);

        if ($useApcu) {
            apcu_store(self::APCU_KEY, $domains, self::APCU_TTL);
        }

        return $domains;
    }

    private function getRefererTerms()
    {
        $useApcu = function_exists('apcu_fetch') && ini_get('apc.enabled');

        if ($useApcu) {
            $success = false;
            $cached  = apcu_fetch(self::APCU_KEY_REFERER, $success);
            if ($success) {
                return $cached;
            }
        }

        $blocklist_path = $this->getBlocklistPath();
        $path = str_replace('disposable_email.txt', 'referer_blocklist.txt', $blocklist_path);
        if (!file_exists($path)) {
            return [];
        }

        $terms = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if ($useApcu) {
            apcu_store(self::APCU_KEY_REFERER, $terms, self::APCU_TTL);
        }

        return $terms;
    }

    private function blockResponse()
    {
        throw new CHttpException(404, Yii::t('registrationTest', 'The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect. Please contact webmaster@mountainx.com if you believe this is an error.'));
    }

    /**
     * @see beforeRegister
     */
    public function beforeRegister()
    {
        // Honeypot fields - filled by bots, left empty by humans
        if (!empty($_POST['register_attribute_1']) || !empty($_POST['register_attribute_2'])) {
            $this->blockResponse();
        }

        $date        = new DateTime();
        $string_date = $date->format('Y-m-d h:i:s');
        $file_date   = $date->format('Y-m-d_H.i.s');

        // Log registration attempt for bot troubleshooting
        $log_dir  = __DIR__ . '/../../tmp/runtime/log/';
        $log_file = $log_dir . $file_date . '--' . uniqid('', true) . '.json';
        if (!empty($_POST)) {
            $log_data = [
                'date'      => $string_date,
                '$_REQUEST' => $_REQUEST,
                '$_SERVER'  => $_SERVER,
            ];
            if (!is_dir($log_dir)) {
                mkdir($log_dir, 0775, true);
            }
            $file = fopen($log_file, 'a');
            if ($file !== false) {
                fwrite($file, json_encode($log_data));
                fclose($file);
            }
        }

        // Block non-US submissions (Cloudflare country header)
        if (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] !== 'US') {
            $this->blockResponse();
        }

        // Block disposable / temporary email domains
        if (!empty($_POST['register_email'])) {
            $email = strtolower(trim($_POST['register_email']));
            $atPos = strpos($email, '@');
            if ($atPos !== false) {
                $domain  = substr($email, $atPos + 1);
                $domains = $this->getDisposableDomains();
                if (isset($domains[$domain])) {
                    $this->blockResponse();
                }
            }
        }
    }

    /**
     * @see beforeWelcomePageRender
     */
    public function beforeWelcomePageRender()
    {
        // Reserved for future use
    }

    /**
     * @see beforeSurveyPage
     */
    public function beforeSurveyPage()
    {
        $http_referer = $_SERVER['HTTP_REFERER'] ?? '';

        // Block non-US submissions (Cloudflare country header)
        if (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] !== 'US') {
            $this->blockResponse();
        }

        // Block known disposable email service referers
        if (!empty($http_referer)) {
            $referer_terms = $this->getRefererTerms();
            if ($this->containsAny($http_referer, $referer_terms)) {
                $this->blockResponse();
            }
        }
    }

    private function containsAny($str, array $terms)
    {
        foreach ($terms as $term) {
            if (stripos($str, $term) !== false) {
                return true;
            }
        }
        return false;
    }
}

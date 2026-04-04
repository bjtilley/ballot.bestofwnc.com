<?php

class registrationTest extends PluginBase
{
    protected $storage = 'DbStorage';
    protected static $name = 'registrationTest';
    protected static $description = 'Test to intercept registration submit';

    public function init()
    {
        $this->subscribe('beforeRegister', 'beforeRegister');
        $this->subscribe('beforeWelcomePageRender', 'beforeWelcomePageRender');
        $this->subscribe('beforeSurveyPage', 'beforeSurveyPage');
    }

    /**
     * Resolve the path to disposable_email.txt.
     * Production: /var/www/shared/blocklists/disposable_domains.txt
     * Local dev:  <repo_root>/shared/blocklists/disposable_email.txt
     */
    private function getBlocklistPath()
    {
        $production = '/var/www/shared/blocklists/disposable_domains.txt';
        if (file_exists($production)) {
            return $production;
        }
        return __DIR__ . '/../../shared/blocklists/disposable_email.txt';
    }

    /**
     * Check if a domain exists in the sorted disposable_email.txt via binary search.
     * Reads only O(log n) bytes from disk — no full file load into memory.
     * Requires: the file must be sorted alphabetically, one domain per line.
     */
    private function isDisposableDomain($domain)
    {
        $path = $this->getBlocklistPath();
        if (!file_exists($path)) {
            return false;
        }

        $fh = fopen($path, 'r');
        if ($fh === false) {
            return false;
        }

        $lo = 0;
        $hi = filesize($path);

        while ($lo < $hi) {
            $mid = (int)(($lo + $hi) / 2);
            fseek($fh, $mid);

            // Skip the partial line we may have landed in the middle of
            if ($mid > 0) {
                fgets($fh);
            }

            $lineStart = ftell($fh);

            if (feof($fh) || $lineStart >= $hi) {
                // No complete line in this half; shrink upper bound
                $hi = $mid;
                continue;
            }

            $line = rtrim(fgets($fh), "\r\n");
            $cmp  = strcmp($domain, $line);

            if ($cmp === 0) {
                fclose($fh);
                return true;
            }

            if ($cmp < 0) {
                $hi = $lineStart;
            } else {
                $lo = ftell($fh);
            }
        }

        // Check the final candidate position
        fseek($fh, $lo);
        if (!feof($fh)) {
            $line = rtrim(fgets($fh), "\r\n");
            if ($line === $domain) {
                fclose($fh);
                return true;
            }
        }

        fclose($fh);
        return false;
    }

    private function blockResponse()
    {
        throw new CHttpException(404, Yii::t('registrationTest', 'The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect. Please contact webmaster@mountainx.com if you believe this is an error.'));
    }

    private function writeLog(array $data)
    {
        $log_dir = __DIR__ . '/../../tmp/runtime/log/';
        if (!is_dir($log_dir)) {
            mkdir($log_dir, 0775, true);
        }
        $file_date = (new DateTime())->format('Y-m-d_H.i.s');
        $log_file  = $log_dir . $file_date . '--' . uniqid('', true) . '.json';
        $fh = fopen($log_file, 'a');
        if ($fh !== false) {
            fwrite($fh, json_encode($data, JSON_PRETTY_PRINT));
            fclose($fh);
        }
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

        // Log registration attempt for bot troubleshooting (TEMPORARY)
        /*
        $blocklist_path   = $this->getBlocklistPath();
        $blocklist_exists = file_exists($blocklist_path);
        $email_raw        = $_POST['register_email'] ?? '';
        $email_normalized = strtolower(trim($email_raw));
        $atPos            = strpos($email_normalized, '@');
        $domain_extracted = $atPos !== false ? substr($email_normalized, $atPos + 1) : null;
        $is_disposable    = $domain_extracted !== null ? $this->isDisposableDomain($domain_extracted) : null;

        $this->writeLog([
            'hook'             => 'beforeRegister',
            'date'             => $string_date,
            'blocklist_exists' => $blocklist_exists,
            'domain'           => $domain_extracted,
            'is_disposable'    => $is_disposable,
            'cf_ipcountry'     => $_SERVER['HTTP_CF_IPCOUNTRY'] ?? null,
            'honeypot_blocked' => !empty($_POST['register_attribute_1']) || !empty($_POST['register_attribute_2']),
        ]);
        */

        // Block non-US submissions (Cloudflare country header)
        if (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] !== 'US') {
            $this->blockResponse();
        }

        // Block disposable / temporary email domains
        if (!empty($_POST['register_email'])) {
            $email = strtolower(trim($_POST['register_email']));
            $atPos = strpos($email, '@');
            if ($atPos !== false) {
                $domain = substr($email, $atPos + 1);
                if ($this->isDisposableDomain($domain)) {
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
        // Log page hit for bot troubleshooting (TEMPORARY)
        /*
        $this->writeLog([
            'hook'         => 'beforeSurveyPage',
            'date'         => (new DateTime())->format('Y-m-d h:i:s'),
            'cf_ipcountry' => $_SERVER['HTTP_CF_IPCOUNTRY'] ?? null,
        ]);
        */

        // Block non-US submissions (Cloudflare country header)
        if (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] !== 'US') {
            $this->blockResponse();
        }
    }
}

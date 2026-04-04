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

        /*
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
        // Block non-US submissions (Cloudflare country header)
        if (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] !== 'US') {
            $this->blockResponse();
        }
    }
}

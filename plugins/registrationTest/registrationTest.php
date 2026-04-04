<?php

class registrationTest extends PluginBase
{
    protected $storage = 'DbStorage';
    protected static $name = 'registrationTest';
    protected static $description = 'Test to intercept registration submit';

    const APCU_KEY = 'disposable_email_domains';
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

    private function blockResponse()
    {
        throw new CHttpException(404, Yii::t('registrationTest', 'The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.'));
    }

    /**
     * @see beforeRegister
     */
    public function beforeRegister()
    {
        // Honeypot fields — filled by bots, left empty by humans
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
        $blocklist_path = $this->getBlocklistPath();
        $referer_blocklist_path = str_replace('disposable_email.txt', 'referer_blocklist.txt', $blocklist_path);
        if (!empty($http_referer) && file_exists($referer_blocklist_path)) {
            $referer_terms = file($referer_blocklist_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
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

    protected $storage = 'DbStorage';
    protected static $name = 'registrationTest';
    protected static $description = 'Test to intercept registration submit';

    const APCU_KEY    = 'disposable_email_domains';
    const APCU_TTL    = 3600; // 1 hour
    const BLOCK_MSG   = "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.  If you feel that this is an error, please reach out to the Ballot Administrator at webmaster@mountainx.com";
    const HONEYPOT_MSG = "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.";

    public function init()
    {
        $this->subscribe('beforeRegister', 'beforeRegister');
        $this->subscribe('beforeWelcomePageRender', 'beforeWelcomePageRender');
        $this->subscribe('beforeSurveyPage', 'beforeSurveyPage');
    }

    /**
     * Resolve the path to disposable_email.json.
     * Production: /var/www/shared/blocklists/disposable_email.json
     * Local dev:  <plugin_root>/../../shared/blocklists/disposable_email.json
     */
    private function getBlocklistPath()
    {
        $production = '/var/www/shared/blocklists/disposable_email.json';
        if (file_exists($production)) {
            return $production;
        }
        return __DIR__ . '/../../shared/blocklists/disposable_email.json';
    }

    /**
     * Load the disposable domain list as a lookup array (domain => true).
     * Uses APCu when available, with a 1-hour TTL.
     * Falls back to reading the file directly on every call if APCu is absent.
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

        $json    = file_get_contents($path);
        $decoded = json_decode($json, true);
        if (!is_array($decoded)) {
            return [];
        }

        // Convert flat array to hash for O(1) lookup
        $domains = array_fill_keys($decoded, true);

        if ($useApcu) {
            apcu_store(self::APCU_KEY, $domains, self::APCU_TTL);
        }

        return $domains;
    }

    /**
     * @see beforeRegister
     */
    public function beforeRegister()
    {
        // Honeypot fields — bots fill these, humans don't
        if (!empty($_POST['register_attribute_1'])) {
            throw new CHttpException(404, self::HONEYPOT_MSG);
        }
        if (!empty($_POST['register_attribute_2'])) {
            throw new CHttpException(404, self::HONEYPOT_MSG);
        }

        $date        = new DateTime();
        $string_date = $date->format("Y-m-d h:i:s");
        $file_date   = $date->format("Y-m-d_H.i.s");

        $ip_address_log = [];
        if (!empty($_REQUEST)) {
            $ip_address_log['$_REQUEST'] = $_REQUEST;
        }
        if (!empty($_SERVER)) {
            $ip_address_log['$_SERVER'] = $_SERVER;
        }

        // Quick log for bot registration troubleshooting
        $log_dir  = __DIR__ . '/../../tmp/runtime/log/';
        $log_file = $log_dir . $file_date . '--' . uniqid('', true) . '.json';
        if (!empty($ip_address_log) && !empty($_POST)) {
            $ip_address_log['date'] = $string_date;
            if (!is_dir($log_dir)) {
                mkdir($log_dir, 0775, true);
            }
            $file = fopen($log_file, "a");
            if ($file !== false) {
                fwrite($file, json_encode($ip_address_log));
                fclose($file);
            }
        }

        // Not a US submission
        if (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] !== 'US') {
            throw new CHttpException(404, self::BLOCK_MSG);
        }

        // Disposable / blocked email domain check
        if (!empty($_POST['register_email'])) {
            $email  = strtolower(trim($_POST['register_email']));
            $atPos  = strpos($email, '@');
            if ($atPos !== false) {
                $domain  = substr($email, $atPos + 1);
                $domains = $this->getDisposableDomains();
                if (isset($domains[$domain])) {
                    throw new CHttpException(404, self::BLOCK_MSG);
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
        $blacklisted_referer_domains = [
            'inboxes'            => 'inboxes',
            'temp'               => 'temp',
            'maildax'            => 'maildax',
            'thefree'            => 'thefree',
            'fakemailgenerator'  => 'fakemailgenerator',
            'smailpro'           => 'smailpro',
            'mail-vanish'        => 'mail-vanish',
            'anonymmail'         => 'anonymmail',
            'emailnator'         => 'emailnator',
            'inspacebox'         => 'inspacebox',
        ];

        $http_referer = $_SERVER['HTTP_REFERER'] ?? '';
        if (
            (!empty($http_referer) && $this->contains($http_referer, $blacklisted_referer_domains))
            || (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] !== 'US')
        ) {
            throw new CHttpException(404, self::BLOCK_MSG);
        }
    }

    private function contains($str, array $arr)
    {
        foreach ($arr as $a) {
            if (stripos($str, $a) !== false) {
                return true;
            }
        }
        return false;
    }
}

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
     * @see beforeRegister
     */
    public function beforeRegister()
    {
        if(!empty($_POST['register_attribute_1'])) {
            throw new CHttpException(404, "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.");
        }
        if(!empty($_POST['register_attribute_2'])) {
            throw new CHttpException(404, "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.");
        }
        
        $date = new DateTime();
        $string_date = $date->format("Y-m-d h:i:s");
        $file_date = $date->format("Y-m-d_H.i.s");
        
        $ip_address_log = [];
        if(!empty($_REQUEST)) {
            $ip_address_log['$_REQUEST'] = $_REQUEST;
        }
        if(!empty($_SERVER)) {
            $ip_address_log['$_SERVER'] = $_SERVER;
        }
        
                // Quick log for bot registration troubleshooting
        $log_dir = __DIR__ . '/../../tmp/runtime/log/';
        $log_file = $log_dir . $file_date . '--' . uniqid('', true) . '.json';
        if(!empty($ip_address_log) && !empty($_POST)) {
            $ip_address_log['date'] = $string_date;
            if(!is_dir($log_dir)) {
                mkdir($log_dir, 0775, true);
            }
            $file = fopen($log_file, "a");
            if($file !== false) {
                fwrite($file, json_encode($ip_address_log));
                fclose($file);
            }
        }
        
        
        // Not a US submission
        if(!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] != 'US') {
            throw new CHttpException(404, "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.  If you feel that this is an error, please reach out to the Ballot Administrator at webmaster@mountainx.com");
        }
        
        $blacklisted_email_domains = [
            'asciibinder.net' => 'asciibinder.net',
            'azuretechtalk.net' => 'azuretechtalk.net',
            'ptct.net' => 'ptct.net',
            'provko.com' => 'provko.com',
            'cyclelove.cc' => 'cyclelove.cc',
            'dreamclarify.org' => 'dreamclarify.org',
            'logsmarter.net' => 'logsmarter.net',
            'thetechnext.net' => 'thetechnext.net',
            'polkaroad.net' => 'polkaroad.net',
            'noroasis.com' => 'noroasis.com',
            'fusioninbox.com' => 'fusioninbox.com',
            'mailmagnet.co' => 'mailmagnet.co',
            'vwhins.com' => 'vwhins.com',
            'zvvzuv.com' => 'zvvzuv.com',
            'ibolinva.com' => 'ibolinva.com',
            'osxofulk.com' => 'osxofulk.com',
            'cmhvzylmfc.com' => 'cmhvzylmfc.com',
            'knmcadibav.com' => 'knmcadibav.com',
            'tidissajiiu.com' => 'tidissajiiu.com',
            'mailpro.live' => 'mailpro.live',
            'lesotica.com' => 'lesotica.com',
            'dygovil.com' => 'dygovil.com',
            '1sworld.com' => '1sworld.com',
            'wywnxa.com' => 'wywnxa.com',
            'emailtik.com' => 'emailtik.com',
            'voguetrail.fashion' => 'voguetrail.fashion',
            'dotzi.net' => 'dotzi.net',
            'disposableemaihub.com' => 'disposableemaihub.com',
            'tempmailninja.com' => 'tempmailninja.com	',
            'yopmail.com' => 'yopmail.com',
            'trashmail.win' => 'trashmail.win',
            'naobk.com' => 'naobk.com',
            'cxnlab.com' => 'cxnlab.com',
            'f5url.com' => 'f5url.com',
            'asaption.com' => 'asaption.com',
            'agiuse.com' => 'agiuse.com',
            'tempmailto.org' => 'tempmailto.org',
            'nhmvn.com' => 'nhmvn.com',
            'nick-ao.com' => 'nick-ao.com',
            'upsnab.net' => 'upsnab.net',
            'voxinh.net' => 'voxinh.net',
            'nuoifb.com' => 'nuoifb.com',
            'chamconnho.com' => 'chamconnho.com',
            '123clone.com' => '123clone.com',
            'camera47.net' => 'camera47.net',
            'dulich84.com' => 'dulich84.com',
            'acc1s.net' => 'acc1s.net',
            'connho.net' => 'connho.net',
            'muadaingan.com' => 'muadaingan.com',
            'vobau.net' => 'vobau.net',
            'cloudtempmail.net' => 'cloudtempmail.net',
            'email-68.com' => 'email-68.com',
            'embekhoe.com' => 'embekhoe.com',
            'accclone.com' => 'accclone.com',
            'nickmxh.com' => 'nickmxh.com',
            'coffeejadore.com' => 'coffeejadore.com',
            'kenhbanme.com' => 'kenhbanme.com',
            '4save.net' => '4save.net',
            'zozozo123.com' => 'zozozo123.com',
            'coffeeazzan.com' => 'coffeeazzan.com',
            'azzancoffee.com' => 'azzancoffee.com',
            'tinpho.com' => 'tinpho.com',
            'mikrotikvn.com' => 'mikrotikvn.com',
            'tiktakgrabber.com' => 'tiktakgrabber.com',
            'hiemail.net' => 'hiemail.net',
            'sonphuongthinh.com' => 'sonphuongthinh.com',
            'tatadidi.com' => 'tatadidi.com',
            'uiemail.com' => 'uiemail.com',
            'xehop.org' => 'xehop.org',
            'mikrotikvietnam.com' => 'mikrotikvietnam.com',
            'giodaingan.com' => 'giodaingan.com',
            'diemhenvn.com' => 'diemhenvn.com',
            'elaelo.net' => 'elaelo.net',
            'corekilo.net' => 'corekilo.net',
            'gonida.co.uk' => 'gonida.co.uk',
            'dmxs8.com' => 'dmxs8.com',
            'auhit.com' => 'auhit.com',
            'gonida.com' => 'gonida.com',
            'rotomails.co.uk' => 'rotomails.co.uk',
            'gonida.uk' => 'gonida.uk',
            'dumalu.com' => 'dumalu.com',
            'zonelima.net' => 'zonelima.net',
            'oscartop.net' => 'oscartop.net',
            'centerghost.com' => 'centerghost.com',
            'plusxmail.net' => 'plusxmail.net',
            'pointxmail.org' => 'pointxmail.org',
            'tmxttvmail.com' => 'tmxttvmail.com',
            'opemails.com' => 'opemails.com',
            'nethubmail.net' => 'nethubmail.net',
            'honesthirianinda.net' => 'honesthirianinda.net',
            'phimteen.net' => 'phimteen.net',
            'bestphonefarm.com' => 'bestphonefarm.com',
            'rotomails.com' => 'rotomails.com',
            'linxues.com' => 'linxues.com',
            'zkadem.edu.pl' => 'zkadem.edu.pl',
            'lushosa.com' => 'lushosa.com',
            'vertexinbox.com' => 'vertexinbox.com',
            'hostingkeluarga.com' => 'hostingkeluarga.com',
            'kangpisang.id' => 'kangpisang.id',
            'koletter.com' => 'koletter.com',
            'kangpisang.store' => 'kangpisang.store',
            'fbhotro.com' => 'fbhotro.com',
            'zonebmail.org' => 'zonebmail.org',
            'topcloak.com' => 'topcloak.com',
            'briefomega.com' => 'briefomega.com',
            'smallntm.lol' => 'smallntm.lol',
            'linksonata.com' => 'linksonata.com',
            'networksmatrix.com' => 'networksmatrix.com',
            'plusxmail.com' => 'plusxmail.com',
            'vaulthyper.com' => 'vaulthyper.com',
            'cloudbmail.net' => 'cloudbmail.net',
            'techyforte.com' => 'techyforte.com',
            'privatejuliet.org' => 'privatejuliet.org',
            'novaxmail.com' => 'novaxmail.com',
            'signalveil.org' => 'signalveil.org',
            'instantcalculus.com' => 'instantcalculus.com',
            'marketemail.org' => 'marketemail.org',
            'moduleopera.com' => 'moduleopera.com',
            'linkchorus.com' => 'linkchorus.com',
            'hubvortex.com' => 'hubvortex.com',
            'romeoprime.com' => 'romeoprime.com',
            'pointxmail.com' => 'pointxmail.com',
            'zonebmail.com' => 'zonebmail.com',
            'scopesoprano.com' => 'scopesoprano.com',
            'briefalpha.com' => 'briefalpha.com',
            'nowxmail.com' => 'nowxmail.com',
            'oscartop.com' => 'oscartop.com',
            'wavevps.com' => 'wavevps.com',
            'miracle3.com' => 'miracle3.com',
            'ingitel.com' => 'ingitel.com',
            'cyluna.com' => 'cyluna.com',
            'hedotu.com' => 'hedotu.com',
            'bauscn.com' => 'bauscn.com',
            'cotigz.com' => 'cotigz.com',
            'nowxmail.org' => 'nowxmail.org',
            'corekilo.org' => 'corekilo.org',
            'briefomega.org' => 'briefomega.org',
            'huongdanfb.com' => 'huongdanfb.com',
            'globalsoprano.com' => 'globalsoprano.com',
            'topcloak.net' => 'topcloak.net',
            'briefalpha.org' => 'briefalpha.org',
            
            'novakilo.com' => 'novakilo.com',
            'plusveil.com' => 'plusveil.com',
            'xraybase.com' => 'xraybase.com',
            'plusxmail.org' => 'plusxmail.org',
            'oscartop.org' => 'oscartop.org',
            'tinytimer.org' => 'tinytimer.org',
            'freetimer.online' => 'freetimer.online',
            'mailisia.com' => 'mailisia.com',
            'smartemailbox.co' => 'smartemailbox.co',
            'edupolska.edu.pl' => 'edupolska.edu.pl',
            'thshyo.org' => 'thshyo.org',
            'gukox.org' => 'gukox.org',
            
            //fudier.com
        ];
        
        if(!empty($_POST['register_email'])) {
            $domain = substr($_POST['register_email'], strpos($_POST['register_email'], '@') + 1);
            if(isset($blacklisted_email_domains[$domain])) {
                throw new CHttpException(404, "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.  If you feel that this is an error, please reach out to the Ballot Administrator at webmaster@mountainx.com");
            }
        }
    }
    
    /**
     * @see beforeWelcomePageRender
     */
    public function beforeWelcomePageRender() {
        //throw new CHttpException(404, "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.  If you feel that this is an error, please reach out to the Ballot Administrator at webmaster@mountainx.com");
    }
    
    /**
     * @see beforeSurveyPage
     */
    public function beforeSurveyPage() {
        $blacklisted_referer_domains = [
            'inboxes' => 'inboxes',
            'temp' => 'temp',
            'maildax' => 'maildax',
            'thefree' => 'thefree',
            'fakemailgenerator' => 'fakemailgenerator',
            'smailpro' => 'smailpro',
            'mail-vanish' => 'mail-vanish',
            'anonymmail' => 'anonymmail',
            'emailnator' => 'emailnator',
            'inspacebox' => 'inspacebox',
            //'localhost' => 'localhost',
        ];
        
        $blacklisted_ip_address = [
            '89.187.173.68' => '89.187.173.68',
            '138.199.12.82' => '138.199.12.82',
        ];
        $black_listed_ip_address_starts_with = [
            '104.247' => '104.247',
            '23.146' => '23.146',
            '5.62' => '5.62',
            '102.129' => '102.129',
            '192.252' => '192.252',
            '181.214' => '181.214',
            '131.100' => '131.100',
            '23.105' => '23.105',
            '23.81' => '23.81',
            '23.108' => '23.108',
            '23.83' => '23.83',
            '212.102' => '212.102',
            '198.134' => '198.134',
            '207.244' => '207.244',
            '23.82' => '23.82',
            '209.58' => '209.58',
            '107.181' => '107.181',
            '67.201' => '67.201',
            '162.253' => '162.253',
            '198.203' => '198.203',
            '79.110' => '79.110',
            '15.204' => '15.204',
            '209.212' => '209.212',
            '204.15.' => '204.15.',
            '76.164' => '76.164',
            '142.214' => '142.214',
            '79.127' => '79.127',
            
            '198.98' => '198.98',
            '135.148' => '135.148',
            '138.199' => '138.199',
            '95.142' => '95.142',
            '195.181' => '195.181',
            '209.239' => '209.239',
            '38.242' => '38.242',
            '69.64' => '69.64',
            '77.234' => '77.234',
            '38.146' => '38.146',
            '156.146' => '156.146',
            '154.47' => '154.47',
            '66.115' => '66.115',
            '64.31' => '64.31',
            '208.115' => '208.115',
            '154.3' => '154.3',
        ];
        
        
        $http_referer = $_SERVER['HTTP_REFERER'];
        if(
            (!empty($http_referer) && $this->contains($http_referer, $blacklisted_referer_domains))
            || (!empty($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] != 'US')
            || (!empty(($_SERVER['HTTP_CF_CONNECTING_IP']) && $this->contains($_SERVER['HTTP_CF_CONNECTING_IP'], $blacklisted_ip_address)))
            || (!empty(($_SERVER['HTTP_X_FORWARDED_FOR']) && $this->contains($_SERVER['HTTP_X_FORWARDED_FOR'], $blacklisted_ip_address)))
            || (!empty(($_SERVER['HTTP_CF_CONNECTING_IP']) && $this->starts_with($_SERVER['HTTP_CF_CONNECTING_IP'], $black_listed_ip_address_starts_with)))
            || (!empty(($_SERVER['HTTP_X_FORWARDED_FOR']) && $this->starts_with($_SERVER['HTTP_X_FORWARDED_FOR'], $black_listed_ip_address_starts_with)))
        ) {
            throw new CHttpException(404, "The survey in which you are trying to participate does not seem to exist. It may have been deleted or the link you were given is outdated or incorrect.  If you feel that this is an error, please reach out to the Ballot Administrator at webmaster@mountainx.com");
        }
    }
    
    private function contains($str, array $arr) {
        foreach($arr as $a) {
            if (stripos($str,$a) !== false) {
                return true;
            }
        }
        return false;
    }
    
    private function starts_with($str, array $arr) {
        foreach($arr as $a) {
            if (str_starts_with($str, $a)) {
                return true;
            }
        }
        return false;
    }
    
}
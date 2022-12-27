<?php

namespace NgatNgay;

class T_Firewall
{

    /**
     * Cấu hình ứng dụng
     *
     * @var array $config
     */
    private $config = array();

    /**
     * BOT cần bỏ qua
     *
     * @var string[] $excludes
     */
    private $excludes = array();

    public function __construct($config, $excludes = [])
    {
        $this->config = $config;

        if (empty($excludes)) {
            $this->excludes = array(
                'Googlebot',
                'msnbot',
                'slurp',
                'fast-webcrawler',
                'Googlebot-Image',
                'teomaagent1',
                'directhit',
                'lycos',
                'ia_archiver',
                'gigabot',
                'whatuseek',
                'Teoma',
                'scooter',
                'Ask Jeeves',
                'slurp@inktomi',
                'gzip(gfe) (via translate.google.com)',
                'Mediapartners-Google',
                'crawler@alexa.com'
            );
        } else {
            $this->excludes = $excludes;
        }

        $_SESSION['___firewall_wait_allow'] = $this->config['firewall_wait_allow'];
        $this->run();
    }


    /**
     * Kiểm tra xem lưu được cookie hay không
     *
     * @return bool
     */
    private function checkCookie()
    {
        if (setcookie('___FIREWALL_Check', md5('T_FIREWALL'), time() + 360)) {
            if (isset($_COOKIE['___FIREWALL_Check'])) {
                return true;
            }
        }

        return false;
    }

    private function check2ndLayer()
    {
        $_SESSION['___firewall_firewall_request_wait']   = $_SESSION['___firewall_firewall_request_wait'] ?? 0;
        $_SESSION['___firewall_firewall_request_bcount'] = $_SESSION['___firewall_firewall_request_bcount'] ?? 0;
        $_SESSION['___firewall_blocked']                 = $_SESSION['___firewall_blocked'] ?? false;

        if ($_SESSION['___firewall_firewall_request_wait'] <= time()) {
            $_SESSION['___firewall_firewall_request_bcount'] = 0;
            $_SESSION['___firewall_firewall_request_wait']   = time() + 60;
            $_SESSION['___firewall_blocked']                 = '';
        }

        if ($_SESSION['___firewall_blocked'] == 'ok') {
            require('template/template-deny.php');
            exit;
        } else {
            $_SESSION['___firewall_firewall_request_bcount']++;

            if ($_SESSION['___firewall_firewall_request_bcount'] == $this->config['firewall_request_to_block_in_min']) {
                $_SESSION['___firewall_blocked']               = 'ok';
                $_SESSION['___firewall_firewall_request_wait'] = time() + 86400;

                require('template/template-deny.php');
                exit;
            }
        }

        if ($this->config['firewall_2nd_layer'] == 1) {
            $_SESSION['___firewall_firewall_penalty_count']          = $_SESSION['___firewall_firewall_penalty_count'] ?? 0;
            $_SESSION['___firewall_firewall_wait_time']              = $_SESSION['___firewall_firewall_wait_time'] ?? 0;
            $_SESSION['___firewall_firewall_last_request_timestamp'] = $_SESSION['___firewall_firewall_last_request_timestamp'] ?? 0;

            if ($_SESSION['___firewall_firewall_penalty_count'] > $this->config['firewall_penalty_allow']) {
                if ($_SESSION['___firewall_firewall_wait_time'] > time() - $this->config['firewall_wait_time']) {
                    $_SESSION['___firewall_seconds'] = $this->config['firewall_wait_time'] - (time() - $_SESSION['___firewall_firewall_wait_time']);

                    if ($_SESSION['___firewall_seconds'] < 2) {
                        $_SESSION['___firewall_firewall_penalty_count'] = 0;
                        unset($_SESSION['___shfirewall']);
                    }

                    // echo "<center><b style='color:red'>Multiple Requests have been directly targeted our forum, as the result the current access is temporarily restricted for ".$seconds." second(s)</b></center>";
                    require('template/template-wait.php');
                    exit;
                }
            }

            if ((time() - $_SESSION['___firewall_firewall_last_request_timestamp']) < 1) {
                $_SESSION['___firewall_firewall_penalty_count'] = $_SESSION['___firewall_firewall_penalty_count'] + 1;
                $_SESSION['___firewall_firewall_wait_time']     = time();
            }

            if ((time() - $_SESSION['___firewall_firewall_last_request_timestamp']) > 2) {
                $_SESSION['___firewall_firewall_penalty_count'] = 0;
            }

            $_SESSION['___firewall_firewall_last_request_timestamp'] = time();
        }
    }

    private function run()
    {
        // Loại trừ BOT
        $exclude    = 0;
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        foreach ($this->excludes as $Agent) {
            if (strpos($user_agent, $Agent) !== false && !$this->checkCookie()) {
                $exclude++;
            }
        }

        // Nếu không phải BOT
        if ($exclude == 0) {
            self::check2ndLayer();

            if (empty($_SESSION['___shfirewall'])) {
                if (!empty($_POST['firewall_firewall']) and !empty($_SESSION['___temp'])) {
                    $Domain_Allowed = 0;
                    $user_refer     = $_SERVER['HTTP_REFERER'] ?? '';

                    foreach ($this->config['firewall_domains'] as $Domain) {
                        if (strpos($user_refer, $Domain) !== false) {
                            $Domain_Allowed++;
                        }
                    }

                    if ($Domain_Allowed > 0) {
                        $_SESSION['___shfirewall'] = 'ready';
                        header('Location: ' . $_POST['firewall_firewall']);
                    } else {
                        require('template/template-deny.php');
                        exit;
                    }
                } else {
                    require('template/template-default.php');
                    $_SESSION['___temp'] = 1;
                    exit;
                }
            }
        }
    }
}

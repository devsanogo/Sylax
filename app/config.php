<?php
    /**
     * Config - General Platform Template
     *
     * @author     Anzoumana SANOGO
     */

    require '.env.php';

    switch(ENVIRONMENT) {
    case 'DEV':
        error_reporting(-1);
        init_set('display_errors', 1);
        break;
    case 'PROD' :
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.3', '>=')) {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        }
        else {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
    }

    //Variables & Functions
    require_once APP_PATH . 'includes/var.globals.inc.php';
    require_once APP_PATH . 'includes/var.meta.inc.php';
    require_once APP_PATH . 'includes/functions.inc.php';
    
    date_default_timezone_set('Africa/Abidjan');
    session_start();
    
?>
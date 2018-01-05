    <?php
    /**
     * Header - General Platform Template
     *
     * @author      Anzoumana SANOGO
     */

    define('LOCAL_SITE', 'localhost');
    define('LIVE_SITE', 'monsite.com');

    //Live Server
    if ($_SERVER['HTTP_HOST'] == LIVE_SITE) {

        define('APP_URL', 'http://monsite.com/');
        define('DISPLAY_ERROR', 'ALL');
        define('ENVIRONMENT', 'prod');
        define('STATIC_URL', 'http://monsite.com/');
        define('BASE_DIR', '/');

    }

    //Dev Environment
    else if ($_SERVER['HTTP_HOST'] == LOCAL_SITE) {

        define('APP_URL', 'http://localhost/sylax/');
        define('APP_URL_RAW', 'http://localhost/sylax');
        define('DISPLAY_ERROR', 'ALL');
        define('ENVIRONMENT', 'dev');
        define('STATIC_URL', 'http://localhost/');
        define('BASE_DIR', '/sylax/');

    }

    else {
        echo 'Cannot localize the server';
        exit();
    }
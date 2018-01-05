<?php
    /**
     * Config - General Platform Template
     *
     * @author     SANOGO ANZOUMANA
     */ 

    //Application Variables
    define('APP_PATH', str_replace(DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, dirname(__FILE__) . DIRECTORY_SEPARATOR));

    //General Config File
    require_once APP_PATH . 'app/config.php';

    // definition des constantes
    define('ROOT', dirname(__FILE__));
    define('DS', DIRECTORY_SEPARATOR);
    define('CORE', ROOT.DS.'includes');

    // insertion des fichiers du router

    require ROOT.DS.'router/Router.php';
    require ROOT.DS.'src/Controller/Controller.php';
    require ROOT.DS.'src/Controller/TestController.php';

    require ROOT.DS.'router/web.php';
    
?>

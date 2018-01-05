<?php

/**
 * Functions - General Platform Template
 *
 * @author    Marc KOUAKOU
 */

    function head_file($array_js, $array_css, $admin=false) {
        $js_dir = 'js';
        $css_dir = 'css';

        $text = '';

        //css
        if (count($array_css)) {
                foreach ($array_css as $file) {
                        $css_url = CSS_DIR.$file;
                        $text .= '<link rel="stylesheet" href="'.$css_url.'" type="text/css" media="screen" />'."\r\n";
                }
        }
        //js
        if (count($array_js)) {
                foreach ($array_js as $file) {
                        $js_url = JS_DIR.$file;
                        $text .= '<script type="text/javascript" src="'.$js_url.'" /></script>'."\r\n";
                }
        }

        echo $text;
    }

    function header_location($file = BASE_DIR) {

        header("location: ".$file);
        exit();
    }

    function sendmail($receiver,  $object, $message, $sender="") { //formatte les entetes et envoie un mail
        $sendername = "stommy2011@gmail.com";
        $admin = ADMIN_MAIL;
        $name = 'Sylax PHP framework';
        if ($sender !='') {
            //$admin = $sender;
            $name = $sender;
        }
        $content = $message;
        
        $from  = "From:".$name." <$admin>\n"; 
        $from .= "MIME-version: 1.0\n"; 
        $from .= "Content-type: text/html; charset= utf-8\n";
        @mail($receiver, $object, $message, $from);
    }

    //check visitor's IP address
    function locateIp(){

        $ip = $_SERVER['REMOTE_ADDR'];

        return array('ip' => $ip);
    }

    function frenchDate($time, $short = false) {
        $months = array("janvier", "f&eacute;vrier", "mars", "avril", "mai", "juin", "juillet", "ao&ucirc;t", "septembre", "octobre", "novembre", "d&eacute;cembre");
        $months_short = array("janv", "f&eacute;v", "mars", "avr", "mai", "juin", "juil", "ao&ucirc;t", "sept", "oct", "nov", "d&eacute;c");
        
        if ($short) $months = $months_short;
        $month = date("m", $time) - 1;
        
        return date("d", $time).' '.ucwords($months[$month]).' '.date("Y", $time);
    }

    function getExtension ($filename) {
        $parts = pathinfo($filename);
        return strtolower($parts["extension"]);
    }
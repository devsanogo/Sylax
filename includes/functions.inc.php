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
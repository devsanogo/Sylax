<?php

/**
 * Functions - General Platform Template
 *
 * @author    Anzoumana SANOGO
 */


/**
* Helpers class for elementary functions
*/
class Helper
{

	/*
	 * internal url helper function
	 */
	public static function path($link , $param = array()) {

		if (!empty($link)) {

			if (empty($param)) {

				echo APP_URL.$link;

			}else {
				$all_param = '';
				foreach ($param as $key => $value) {
					if ($key == count($all_param) -1) {
						$all_param .= $value;
					}else{
						$all_param .= $value.'/' ;
					}
				}

				$final_link = APP_URL.$link.'/'.$all_param;

				echo $final_link;
			}

		}
	}

	/*
	 * link to static files
	 */
	public static function asset($file , $type = 'img') {

		if (empty($file)) {
			echo "veuillez inserer un lien";
		}else {
			switch ($type) {
				case 'img':
					echo IMG_DIR.$file;
					break;
				case 'js':
					echo CSS_DIR.$file;
					break;
				case 'css':
					echo JS_DIR.$file;
					break;
				
				default:
					echo "fichier inconnu";
					break;
			}

		}
	}


	/*
	 * Date to french format
	 */
	public static function frenchDate($time, $short = false) {

        $months = array("janvier", "f&eacute;vrier", "mars", "avril", "mai", "juin", "juillet", "ao&ucirc;t", "septembre", "octobre", "novembre", "d&eacute;cembre");
        $months_short = array("janv", "f&eacute;v", "mars", "avr", "mai", "juin", "juil", "ao&ucirc;t", "sept", "oct", "nov", "d&eacute;c");
        
        if ($short) $months = $months_short;
        $month = date("m", $time) - 1;
        
        return date("d", $time).' '.ucwords($months[$month]).' '.date("Y", $time);
    }


	/*
	 * helper redirection function
	 */
    public static function header_location($file = BASE_DIR) {

        header("location: ".$file);
        exit();
    }


	/*
	 * send mail helper function
	 */
    public static function sendmail($receiver,  $object, $message, $sender="") { //formatte les entetes et envoie un mail
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


    /*
	 * check visitor's IP address
	 */
    public static function locateIp(){

        $ip = $_SERVER['REMOTE_ADDR'];

        return array('ip' => $ip);
    }


    /*
	 * get file extension
	 */
    public static function getExtension ($filename) {
        $parts = pathinfo($filename);
        return strtolower($parts["extension"]);
    }

}
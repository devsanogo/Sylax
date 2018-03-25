<?php 

/**
 * Functions - General Platform Template
 *
 * @author    Anzoumana SANOGO
 */


/**
 * Session class
 */
class Session
{
	
	/*
	 * set values sessions 
	 */
	public static function setSession($keys = array()) {

		if (!empty($keys)) {

			foreach ($keys as $k => $v) {

				if (!in_array($k, $_SESSION)) {
					$_SESSION[$k] = $v;
				}
			}
		}else{
			echo "Vous devez ajouter des valeurs";
		}

	}

	/*
	 * get sessions values by keys
	 */
	public static function getSessionByKey($keys = array()) {
		
		$_results = []; 
		$_sessionKeys = [];


		foreach ($_SESSION as $key => $value) {
			$_sessionKeys[] = $key;
		}		

		if (!empty($keys)) {

			foreach ($keys as $v) {

				if (in_array($v, $_sessionKeys)) {
					$_results[] = [$v => $_SESSION[$v]];
				}

			}
		}else{
			echo "Vous devez ajouter des valeurs";
		}

		return $_results;

	}

	/*
	 * get all sessions  
	 */
	public static function getSession() {
		
		$_sessionKeys = [];

		foreach ($_SESSION as $key => $value) {
			$_sessionKeys[] = [$key => $value];
		}

		return $_sessionKeys;
	}

	/*
	 * remove sessions by keys
	 */
	public static function removeSession($keys = array()) {

		$_results = [];
		$_sessionKeys = [];
		
		if (!empty($keys)) {
			
			foreach ($_SESSION as $key => $value) {
				$_sessionKeys[] = $key;
			}

			foreach ($keys as $k => $v) {
				if (in_array($v, $_sessionKeys)) {
					$_results[] = $v;
				}
			}

			foreach ($_results as $k => $v) {
				unset($_SESSION[$v]);
			}

		}else{
			echo "Veuillez entrer des données";
		}

	}

	/*
	 * destroy all sessions  
	 */
	public static function destroySession() {

		$_SESSION = array();
    	session_destroy();

	}

}
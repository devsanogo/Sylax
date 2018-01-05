<?php
/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */

class Router
{
	private $_uri = array();
	private $_method = array();
	private $param;

	public function add($uri, $method = null)
	{
		$this->_uri[] = '/' . trim($uri, '/');
		
		if ($method != null) {
			$this->_method[] = $method;
		}
	}

	public function getParam(){

		$p = explode('/', $_GET['uri']);
		$param = end($p);

		if (is_numeric($param)) {
			if ($param != null) {
				$this->param = $param;
			}
		}
		
		return $this->param;
	}
	
	// fonction permettant d'extraire la methode dans l'url
	public function strstr_after($haystack, $needle, $case_insensitive = false) {
	    $strpos = ($case_insensitive) ? 'stripos' : 'strpos';
	    $pos = $strpos($haystack, $needle);
	    if (is_int($pos)) {
	        return substr($haystack, $pos + strlen($needle));
	    }
	    return $pos;
	}

	public function submit()
	{

		$uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';

		if (in_array($uriGetParam, $this->_uri)) {

			foreach ($this->_uri as $key => $value) 
			{
				if (preg_match("#^$value$#", $uriGetParam)) 
				{
					$useMethod = $this->_method[$key];

					$domain = strstr($useMethod, '@', true);
					$action = $this->strstr_after($useMethod, '@');

					if (is_string($useMethod)) {
						$domain = strstr($useMethod, '@', true);
						$controller = $domain.'Controller';
						$called = new $controller();
						$called->$action();
					}else{
						call_user_func($useMethod);
					}
				}
			}
		}else{
			$called = new Controller();
			$called->error();
		}
	}
}
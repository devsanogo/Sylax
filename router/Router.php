<?php
/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */			


/**
 *
 *
 * @internal	Inspired by Klein @ https://github.com/chriso/klein.php
 */

class Router
{

	private $_uri = array();
	private $_method = array();
	private $_trim = '/\^$';
		

	public function add($uri, $method = null)
	{
		$uri = trim($uri, $this->_trim);
		$this->_uri[] = $uri;
		if ($method != null) {
			$this->_method[] = $method;
		}
	}


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
		$uri = isset($_GET['uri']) ? $_GET['uri'] : '/';
		$uri = trim($uri, $this->_trim);

		$addParam = array();

		foreach ($this->_uri as $listKey => $listUri)
		{
			if (preg_match("#^$listUri$#", $uri))
			{
			   	$realUri = explode('/', $uri);
				$fakeUri = explode('/', $listUri);

				$useMethod = $this->_method[$listKey];


				foreach ($fakeUri as $key => $value) 
				{
					if ($value == '.+') 
					{
						$addParam[] = $realUri[$key];
					}
				}

				if (is_string($useMethod)) {

					$domain = strstr($useMethod, '@', true);
					$action = $this->strstr_after($useMethod, '@');
					
					$domain = strstr($useMethod, '@', true);
					$controller = $domain.'Controller';
					$called = new $controller();
					$called->$action($addParam);
				}else{

					call_user_func_array($useMethod, $addParam);
				}
			}
			
		}
		
	}
	
}












<?php 
/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */

class Controller
{
	protected $param = array();

	public function entityManager(){
		return require ROOT.DS.'bootstrap.php';
	}

	public function render($view, $array = []){

		if (!empty($array)) {
			foreach ($array as $key => $value) {
				$this->param[$key] = $value;
			}
		}

		extract($this->param);

		$view = ROOT.DS.'src/views/pages/'.$view.'.php';
		ob_start();
		require($view);
		$layout_content = ob_get_clean();

		require ROOT.DS.'src/views/base.php';
	}

	public function error(){	

		$this->render('error'); 
	}
}
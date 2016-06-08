<?php
	class Bootstrap
	{

		function __construct()
		{
	        $url = explode('/', rtrim(isset($_GET['url'])?$_GET['url']:null, '/'));
	        
			//print_r($url);

			if(empty($url[0])){
				require PATH_SITE .'/controllers/Index_Controller.php';
				$controller = new Index_Controller();
				$controller->Index();
				return false;
			}

			$url[0] = ucfirst($url[0]) . '_Controller';
			$file = PATH_SITE.'/controllers/'.$url[0] .'.php';
			if(file_exists($file)){
				require $file;
			}else{
				require PATH_SITE . '/controllers/Error_Controller.php';
				$controller = new Error_Controller();
				$controller->Index();
				return false;
			}
			$controller = new $url[0];
			call_user_func_array ([$controller, $url[1] ?: 'index'],  array_slice($url, 2));
			
		}
	}
?>
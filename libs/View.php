<?php 
	/**
	* 
	*/
	class View{
		function __construct(){

		}

		function render($nameTrademark = null,$noInclude = false){
			if ($noInclude == true) 
			{
				require PATH_SITE.'/views/'.$nameTrademark.'.php';
			}
			else
			{
				$strUrl = strstr($nameTrademark , 'detail');
				if($strUrl == 'detail' || $nameTrademark == 'order' || $nameTrademark == 'signup' || $nameTrademark == 'signin' || $nameTrademark == 'card')
				{
					require PATH_SITE.'/views/header.php';
					require PATH_SITE.'/views/livesearch.php';
					require PATH_SITE.'/views/'.$nameTrademark.'.php';
					require PATH_SITE.'/views/footer.php';
				}
				else
				{
					require PATH_SITE.'/views/header.php';
					require PATH_SITE.'/views/livesearch.php';
					require PATH_SITE.'/views/feature.php';
					require PATH_SITE.'/views/'.$nameTrademark.'.php';
					require PATH_SITE.'/views/footer.php';
				}
			}
		}
	}
?>
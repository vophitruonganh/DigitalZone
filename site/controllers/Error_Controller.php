<?php
	class Error_Controller extends Controller
	{
		function __construct(){
			parent::__construct();
		}

		function Index(){
			header("LOCATION:".URL_SITE);
		}
	}
?>
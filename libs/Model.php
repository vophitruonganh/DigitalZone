<?php 
	class Model
	{
		function __construct(){
			require PATH.'/libs/Database.php';
			$this->db = new Database();
		}
	}
?>
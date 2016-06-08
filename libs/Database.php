<?php 
	class Database{
		private $conn;
		
		function __construct(){

		}

		public function connect(){
			if($this->conn  = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME)){
				if(mysqli_connect_errno()){
					 die("Failed to connect to MySQL: " . mysqli_connect_error());
				}
				mb_internal_encoding('UTF-8');
			}
		}

		public function excuteQuery($sql_query){
			$listResult = new ArrayObject();
			mysqli_query($this->conn,
					 "SET character_set_results = 'utf8', 
					 character_set_client = 'utf8',
					 character_set_connection = 'utf8',
					 character_set_database = 'utf8',
					 character_set_server = 'utf8'"
			);
			
			$result = mysqli_query($this->conn,$sql_query);
				if($countRows  = mysqli_num_rows($result)){
					while($row = mysqli_fetch_object($result)){
						$listResult->append($row);
					}
				}

			return $listResult;
		}
		public function insertQuery($sql_query){
			mysqli_query($this->conn,
					 "SET character_set_results = 'utf8', 
					 character_set_client = 'utf8',
					 character_set_connection = 'utf8',
					 character_set_database = 'utf8',
					 character_set_server = 'utf8'"
			);
			if(mysqli_query($this->conn,$sql_query) === TRUE){
				return true;
			}else{
				return false;
			}
		}

		public function updateQuery($sql_query){
			mysqli_query($this->conn,
					 "SET character_set_results = 'utf8', 
					 character_set_client = 'utf8',
					 character_set_connection = 'utf8',
					 character_set_database = 'utf8',
					 character_set_server = 'utf8'"
			);
			if(mysqli_query($this->conn,$sql_query) === TRUE){
				return true;
			}else{
				return false;
			}
		}
		public function disconnet(){
			mysqli_close($this->conn);
		}
	}
?>
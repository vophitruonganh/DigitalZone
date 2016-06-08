<?php 
	class User_Model extends Model
	{
		function __construct(){
			parent::__construct();		
			$controller = new Controller();
		}
		/*=====================================================================================
		==================================== FUNCTION LOGIN ===================================
		=======================================================================================*/
		// Kiem tra user co online hay khong
		function userOnline($userName , $passWord){
			$this->db->connect();
			$user = $this->db->excuteQuery(
				"select * from user where user_name = '$userName' and user_password = '$passWord' and user_status = 1");
			$this->db->disconnet();
			if(sizeof($user) > 0){
				return true;
			}else{
				return false;
			}
		}

		function userLogin($userName , $passWord){
			$this->db->connect();
			$users = $this->db->excuteQuery(
				"select * from user where user_name = '$userName' and user_password = '$passWord'");
				//print_r($users);
			if(sizeof($users) > 0 && $this->userOnline($userName,$passWord) == false){
				$id = 0;
				foreach($users as $key=>$values)
					$id = $values->user_id;
				print_r($values->user_name);
				$this->db->updateQuery("UPDATE user SET user_status = 1 WHERE user_id = '$id'");
			}
			$this->db->disconnet();
			return $users;
		}

		function userGetInfo($userName = null , $passWord = null){
			$this->db->connect();
			if($userName != null && $passWord != null)
			{
				if(userLogin($userName , $passWord) == true){
					$userInfo = $this->db->excuteQuery(
						"SELECT * FROM user WHERE user_name = '$userName' and user_password = '$passWord'");
						$this->db->disconnet();
					return $userInfo;
				}
			}
			
		}
		/*=====================================================================================
		==================================== FUNCTION REGISTER ===================================
		=======================================================================================*/

		function userCheck($userName, $passWord){
			$this->db->connect();
			$row = $this->db->excuteQuery(
				"SELECT * FROM user WHERE user_name = '$userName' and user_password = '$passWord'"
			);
			if($row.size() > 0){
				return true;
			}else{
				return false;
			}
			$this->db->disconnet();
		}

		function userRegister($firstName,$lastName,$userName,$passWord,$address,$userIdcard,$userDob,$userSex,$userEmail){
			$this->db->connect();
			if(userCheck($userName) == false){
				$this->db->excuteQuery(
					"insert into user (
						user_name,
						user_password,
						user_fname,
						user_lname,
						user_address,
						user_idcard,
						user_dob,
						user_sex,
						user_email
					) values(
						'".$userName."',
						'".$passWord."',
						'".$firstName."',
						'".$lastName."',
						'".$address."',
						'".$userIdcard."',
						'".$userDob."',
						'".$user_sex."',
						'".$userEmail."',
					)"
				);
				return true;
			}else{
				return false;
			}
			$this->db->disconnet();
		}
	}
	
?>
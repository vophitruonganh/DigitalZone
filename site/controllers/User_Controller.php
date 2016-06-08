<?php 
	class User_Controller extends Controller{
		function __construct(){
			parent::__construct();
			

			require PATH_SITE.'/models/User_Model.php';
		
		}

		function Index(){
			header("LOCATION:".URL_SITE);
		}

		function Login($userName = null,$passWord = null){
			$userModel = new User_Model();
			if($userName != null && $passWord != null){
				$user = $userModel->userLogin($userName,$passWord);
				if(sizeof($user) > 0){
					if($userModel->userOnline($userName,$passWord) == false){
						foreach($user as $key=>$value)
						{
							echo '<li class="dropdown" id="menuLogin">';
							echo    '<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">'.$value->user_fname.' '.$value->user_lname.'</a>';
							echo    '<div class="dropdown-menu" style="padding:17px;">';
							echo      '<form class="form" id="formLogin" method="post"> ';
							echo        '<label>Username</label><input class="form-control" name="username" id="username" placeholder="Username" type="text"> ';
							echo        '<label>Password</label><input class="form-control" name="password" id="password" placeholder="Password" type="password"><br>';
							        
							echo        '<div class="btn-group">';
							echo          '<a class="btn btn-success" id="btnLogin">LOGIN</a>';
							echo          '<a class="btn btn-danger" id="btnRegister">REGISTER</a>';
							echo        '</div>
							      </form>
							    </div>
							  </li>';
						}
					}else{
						echo 'Tài khoản đang được đăng nhập';
				
					}
				}else{
					echo 'Tài Khoản Hoặc Mật Khẩu Không Đúng';
				}
			}
		}

		
	}
?>
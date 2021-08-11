<?php

class AuthController{ 
  
	function __construct(){

		session_start();

		include('model/Auth.php');

		$this->model = new AuthModel();

	}

	function login(){
		$get_user_data = $this->model->login();
	}
	function register(){ 
	 
		$get_user_data = $this->model->register();
		include('view/register.php');
	}

	function submitlogin(){

		if(isset($_POST['alllogin']) && $_POST['alllogin'] !="" && $_POST['alllogin'] ==='Login'){

			$username = $this->model->test_input($_POST['username']);
		     $password = $this->model->test_input($_POST['password']);

			$get_login_data = $this->model->login($username);

			 $count = count($get_login_data);

				if($count === 1){
					$get_login_data = $get_login_data[0];
					
					$db_password = $get_login_data['password'];
					// echo "<br>";
					 $decode_pass = base64_decode($db_password);
					
						if($password === $decode_pass){

							 $_SESSION["login_email"] = $get_login_data['email']; 
							 $_SESSION["login_role"] = $get_login_data['role']; 
							 $_SESSION["login_success"] = 1;

							 header('location:home');

						}else{
							$_SESSION["login_error"] = "Enter correct password";
							header('location:home');
							exit();
						}
				}else{
					$_SESSION["login_error"] ="Enter correct email";
					header('location:home');
					exit();
				}

			
		}
		
	}

	function logout(){
		session_destroy();
		header('location:home');
		exit();
	}

	
}

?>
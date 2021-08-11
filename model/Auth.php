<?php

class AuthModel{
	public $conn; 
	function __construct(){ 
		include('connection/config.php');
		include('db_function.php'); 

		$this->func_obj = new MyFunction();

	}

	 function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $data = mysqli_real_escape_string($this->conn,$data);;
      return $data;
    }

	function login($username=''){

		 $newdata = $this->func_obj->selectallwhere('login',"Where email = '".$username."'",$this->conn);
		
		  return $newdata;
		

	}

	function register(){

	}

	
}


?>
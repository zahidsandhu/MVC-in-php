<?php

class homeController{

	function __construct(){
		session_start();

		include('model/home.php');

		$this->model = new homeModel();

	}
 
	function home(){

		include('view/home.php');
	}

	function about(){
		
		include('view/about.php');
	}
	function contact(){
		include('view/contact.php');
	}
	function privacypolicy(){
		include('view/privacypolicy.php');
	}
}

?>
<?php

class homeController{

	function __construct(){

		include('model/home.php');

		$this->model = new homeModel();

	}

	function home(){
		 $home_ary = ['title'=>"Home",'data'=>"Home page data"];

		 // $get_route = explode('/',$_SERVER['REQUEST_URI']);
 		 // $route = $get_route[3];

		// return $home;
		$get_user_data = $this->model->home();
		
		include('view/header.php');
		include('view/home.php');
		include('view/footer.php');
	}

	function about(){
		$get_model_data = $this->model->about();
		include('view/header.php');
		include('view/about.php');
		include('view/footer.php');
	}
	function contact(){
		$model_data1 = $this->model->contact();
		include('view/header.php');
		include('view/contact.php');
		include('view/footer.php');
	}
}

?>
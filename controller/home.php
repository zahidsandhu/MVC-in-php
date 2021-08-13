<?php

class homeController{
public $html;
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
	function employee_designation(){

		 if(isset($_POST['designation']) && $_POST['designation'] !="" && isset($_FILES['file_icon']) && $_FILES['file_icon']['error'] == 0){

		 	$dir_path= "assets/picture/designation/";
 			
 			$designation = $_POST['designation'];
 			$user_type= "employee";

				if($_FILES['file_icon']['error'] == 0){
					$file_img =$_FILES['file_icon'];
				$designation_data = $this->model->employee_designation($file_img,$dir_path,$designation,$user_type);

				return "success";

	 			
			}

		 }
		
		$designation_data = $this->model->employee_designation();
		 
		include('view/dashboard-employee-designation.php');
	}
	function user_designation(){
		 
		 	 

			if(isset($_POST['designation']) && $_POST['designation'] !="" && isset($_FILES['file_icon']) && $_FILES['file_icon']['error'] == 0){

		 	$dir_path= "assets/picture/designation/";
 			
 			$designation = $_POST['designation'];
 			$user_type= "user";

				if($_FILES['file_icon']['error'] == 0){
					$file_img =$_FILES['file_icon'];
				$designation_data = $this->model->user_designation($file_img,$dir_path,$designation,$user_type);
				$inc = 1;
				foreach($designation_data as $value){
					$img= $value["icon"];
					$html = "<tr>";

				$html .="<td> ".$inc++;
				$html .="</td>";
				$html .="<td> 
						<figure>
						<img src='assets/picture/designation/".$img."' alt='img description'>
						</figure>";

				$html .="</td>";
				$html .="<td> ".$value['designation_title'];
				$html .="</td>";

				$html .="<td class='text-center'>
							<div class='wt-actionbtn'>
							<a href='dashboard-manange-access.php' class='wt-addinfo wt-skillsaddinfo'><i class='lnr lnr-pencil'></i></a>
								</div>";
				$html .="</td>";

				$html .= "</tr>";
				}
				
				echo $html;
				
			}

		 }else{
		 	$designation_data = $this->model->user_designation();
			include('view/dashboard-user-designation.php');	
		 }

		
	}
	function guard_designation(){
		include('view/dashboard-guard-designation.php');
	}
}

?>
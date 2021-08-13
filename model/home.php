<?php

class homeModel{
	public $conn;
	function __construct(){ 
		
		include('connection/config.php');
		include('db_function.php'); 

		$this->func_obj = new MyFunction();
	}

	function home(){ 

	}
	function about(){
		
	}
	function contact(){
		
	}
	function privacypolicy(){
		
	}
	function employee_designation($file_img="",$dir_path="",$designation="",$user_type=""){
		if($designation !=""){
			$img_name = $this->func_obj->img_upload($file_img,$dir_path);
			if($img_name == "10-MB"){
				return "your can not upload file size is more than 10-MB";
			}else if($img_name == "file extentions"){
				return "Only JPEG , PNG , JPG this type of file extentions are allowed";
			}else{
				// insert data after image upload
				$insert_status = $this->func_obj->insert("designation","designation_title,icon,user_type"," '".$designation."', '".$img_name."', '".$user_type."' ",$this->conn);
				// check status of data insert or not
				if($insert_status){
						$get_data = $this->func_obj->selectallwhere("designation","WHERE user_type='employee' ",$this->conn);
						return $get_data;
				}else{
					return "Error data not save";
				}
				
			}
		}else{
			$get_data = $this->func_obj->selectallwhere("designation","WHERE user_type='employee' ",$this->conn);
						return $get_data;
		}
		
	}

	function user_designation($file_img="",$dir_path="",$designation="",$user_type=""){
		if($designation !=""){
			$img_name = $this->func_obj->img_upload($file_img,$dir_path);
			if($img_name == "10-MB"){
				return "your can not upload file size is more than 10-MB";
			}else if($img_name == "file extentions"){
				return "Only JPEG , PNG , JPG this type of file extentions are allowed";
			}else{
				// insert data after image upload
				$insert_status = $this->func_obj->insert("designation","designation_title,icon,user_type"," '".$designation."', '".$img_name."', '".$user_type."' ",$this->conn);
				// check status of data insert or not
				if($insert_status){
						$get_data = $this->func_obj->selectallwhere("designation ","WHERE user_type='user' ",$this->conn);
						return $get_data;
				}else{
					return "Error data not save";
				}
				
			}
		}else{
			$get_data = $this->func_obj->selectallwhere("designation"," WHERE user_type='user' ORDER BY id desc ",$this->conn);
						return $get_data;
		}
		
	}
}


?>
<?php

class homeModel{
	public $conn;
	function __construct(){ 

		$this->conn = mysqli_connect('localhost','root','','rest_api_db');
		// Check connection
			if (!$this->conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}
		

	}

	function home($id=''){

		 $sql = "SELECT * FROM users";
		
		
		$result = mysqli_query($this->conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			  // output data of each row
		
			  while($row = mysqli_fetch_assoc($result)) {
			    $get_data []=$row; 
			  }
			} else {
			  echo "0 results";
			}

			mysqli_close($this->conn);
		
			return $get_data;

		
	}
	function about(){
		$about = ['title'=>"About",'data'=>"About page data"];
		return $about;
	}
	function contact(){
		$contact = ['title'=>"Contact",'data'=>"Contact page data"];
		return $contact;
	}
}


?>
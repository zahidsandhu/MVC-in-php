<?php
	
	$this->conn = mysqli_connect('localhost','root','','farnek_security_db');
		// Check connection
			if (!$this->conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}

?>
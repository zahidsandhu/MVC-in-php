<?php

 $get_route = explode('/',$_SERVER['REQUEST_URI']);

  $route = $get_route[2]; 
  
 if($route == "login"){ 
 
 	$controller="Auth"; 
	$function="login";
	include_once("route/web.php");
	
 }
 if($route == "register"){ 
 
 	$controller="Auth"; 
	$function="register";
	include_once("route/web.php");
	
 }
 if($route == "home"){

 	$controller="home"; 
	$function="home";
	include_once("route/web.php");
	
 }
 if($route == "about"){

 	$controller="home"; 
	$function="about";
	include_once("route/web.php");
	
 }
 if($route == "contact"){

 	$controller="home";
	$function="contact";
	include_once("route/web.php");
	
 }
 if($route == "privacypolicy"){

 	$controller="home";
	$function="privacypolicy";
	include_once("route/web.php");
	
 }
 if($route == "submitlogin"){

 	$controller="auth";
	$function="submitlogin";
	include_once("route/web.php");
	
 }
 if($route == "logout"){

 	$controller="auth";
	$function="logout";
	include_once("route/web.php");
	
 }


?>
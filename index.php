<?php

 $get_route = explode('/',$_SERVER['REQUEST_URI']);

  $route = $get_route[2];
 
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


?>
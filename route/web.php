<?php
if(file_exists('controller/'.$controller.'.php')){


	include('controller/'.$controller.'.php');
	$class = $controller."Controller";
	$obj = new $class;
	if(method_exists($class,$function)){

			$obj->$function();
	}else{
		include('404.php');
	echo "<h2 style='text-align: center;'>Function <span style='color:red;'>".$function."</span> Not Found</h2>";
	}
	}else{
		include('404.php');
		echo "<h2 style='text-align: center;'>Controller <span style='color:red;'>".$controller."</span> Not Found</h2>";
	}

?>
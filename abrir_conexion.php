<?php

	$server="bayjfbagagjr10j6uxy6-mysql.services.clever-cloud.com";
	$db="bayjfbagagjr10j6uxy6";
	$user="un5v81dhnzgts8zh";
	$pass="SQi5xP8vUNtn6z5BZU0w";
	
	
	$conexion = new mysqli($server, $user, $pass, $db);

	if($conexion->connect_error){
		die("No se pudo conectar");}
	


?>



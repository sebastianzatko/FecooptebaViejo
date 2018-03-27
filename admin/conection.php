<?php
	$con=mysqli_connect("sql146.main-hosting.eu.","u519469703_admin","jPGrKf8EXClW","u519469703_fecop");
	if (!$con){
		die("Connection failed:".mysqli_connect_error());
		echo "No se pudo conectar con el servidor";
	}
?>
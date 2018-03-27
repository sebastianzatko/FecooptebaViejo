<?php
	session_start();
	$usuario=$_POST["usuario"];
	$contrasena=$_POST["contraseña"];
	$mensaje="Autenticando...";
	echo $mensaje;

	require 'conection.php';

	
	$consulta="SELECT * FROM user WHERE nick='$usuario' AND contrasena='$contrasena'";
	
	
	$resultado=mysqli_query($con,$consulta) or die(mysqli_error($con));
	$contando=mysqli_num_rows($resultado);
	
	
	
	if($contando == 1){
		$_SESSION["username"]=$usuario;
		header("location: index1.php");
		
	}
	else{
		$mensaje="Ese usuario no existe";
		echo $mensaje;
	}

?>
<html>
	<head>
		<title>Procesando...</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<style>
		body{
			background-color:white;
		}
		.recarga{
			width:50%;
			margin:0 auto;
		}
		.fa-3x{
		font-size:10em;
		color:#2B6DD8;
		width:100%;
		}
		</style>
	</head>
	<body>
	<div class="recarga">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<span class="sr-only">Loading...</span>
	</div>
	</body>
</html>
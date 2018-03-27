 <!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php
	
	require "conection.php";
	$sql="SELECT email FROM asociado WHERE categoria=0";
	$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
	$fila=mysqli_fetch_array($texto);
	
	$mail =utf8_decode($_POST['mensaje']);
	$dirreccion=utf8_decode($_POST['email']);
	//Titulo
	$titulo =utf8_decode($_POST['nombre']);
	//cabecera
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	//dirección del remitente 
	$headers .= "From: paginaweb >\r\n";
	//Enviamos el mensaje a tu_dirección_email 
	$bool = mail($fila[0],$titulo,$mail,$headers);
	if($bool){
	    header("Location:index8.php");
	}else{
	    header("Location:index8.php");
	}
	?>
	
</body>
</html>


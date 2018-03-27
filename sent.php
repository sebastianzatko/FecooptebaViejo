 <!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php
	
	require "admin/conection.php";
	$sql="SELECT mail FROM asociado WHERE categoria=0";
	$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
	$fila=mysqli_fetch_array($texto);
	
	$mail =utf8_decode($_POST['mensaje']);
	$dirreccion=utf8_decode($_POST['email']);
	//Titulo
	$titulo =utf8_decode($_POST['nombre']);
	//cabecera
	
	
	$to      = $fila[0];
    $subject = 'Mensaje de la pagina';
    $message = $mail;
    $headers = 'From: '.$dirreccion. "\r\n" .
    'Reply-To:'.$dirreccion. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $bool=mail($to, $subject, $message, $headers);
	
	
	
	if($bool){
	    header("Location:index8.php");
	}else{
	    header("Location:index8.php");
	}
	?>
	
</body>
</html>


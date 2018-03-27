<html>
<head>
	
</head>
<body>
	<?php
	
	
	$mail =utf8_decode($_POST['mensaje']);
	
	//Titulo
	
	//cabecera
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	//dirección del remitente 
	$headers .= "From: fecoopteba@gmail.com >\r\n";
	//Enviamos el mensaje a tu_dirección_email 
	$bool = mail("kubocuantico@gmail.com","Consulta tecnica Fecoopteba",$mail,$headers);
	if($bool){
	    header("Location:consultas.php?var=1");
	}else{
	    header("Location:consultas.php?var=2");
	}
	?>
	
</body>
</html>


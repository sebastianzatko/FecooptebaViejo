<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<?php if (login_check($mysqli) == true) : ?>

<?php
	echo "Guardando";
	$nombre=$_POST['nombre'];
	$matricula=$_POST['matricula'];
	$dirrecion=$_POST['dirreccion'];
	$mail=$_POST['mail'];
	$telefono=$_POST['telefono'];
	
	function obtenerExtencion($str){
		$nose=explode('.',$str);
		$se=end($nose);
		return $se;
	}

	require 'conection.php';
	
	$mayor="SELECT max(id_coopteva) FROM coopteba";
	$obtener=mysqli_query($con,$mayor) or die(mysqli_error($con));
	$ida=mysqli_fetch_array($obtener);
	$id=$ida['0']+1;
	$ruta='files/coopteba/'.$id."/";
	mkdir($ruta,0777,true);
	$extension=obtenerExtencion($_FILES['logo']['name']);
	$archivo=$ruta."logo.".$extension;
	@move_uploaded_file($_FILES['logo']["tmp_name"],$archivo);
	
	$query="INSERT INTO `coopteba`(`nombre`, `matricula`,`telefono`,`mail`,`logo`,`direccion`) VALUES ('$nombre','$matricula','$telefono','$mail','$archivo','$dirrecion')";
	
	
	mysqli_query($con,$query) or die(mysqli_error($con));
	
	
	
	echo "Realizado";
	


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
<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
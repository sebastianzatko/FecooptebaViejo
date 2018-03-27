<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
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
	<?php if (login_check($mysqli) == true) : ?>
	<div class="recarga">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<span class="sr-only">Loading...</span>
	</div>
	</body>
</html>
<?php
	$categoria=isset($_POST['categoria'])? $_POST['categoria']:null;
	$nombre=isset($_POST['nombre'])? $_POST['nombre']:null;

	
	function obtenerExtencion($str){
		$nose=explode('.',$str);
		$se=end($nose);
		return $se;
	}

	require 'conection.php';

	$ruta='files/documentos/';
	$archivo=$ruta.$_FILES['doc']['name'];
	@move_uploaded_file($_FILES['doc']['tmp_name'],$archivo);
	
	$query="INSERT INTO `documento`(`categoria`, `nombre`,`rutadoc`) VALUES ('$categoria','$nombre','$archivo')";
	
	
	mysqli_query($con,$query) or die(mysqli_error($con));
	
	
	
	header("location:guardardocumento.php?var=1");
?>
	<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>

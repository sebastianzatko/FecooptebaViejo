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
	require 'conection.php';
	if(!isset($_GET['doc'])):
	?>
		<script> 
			window.onpageshow = function(event) {
			history.go(-1);
		</script>
	<?php
	
	else:
		$id=$_GET['doc'];
	endif;
	
	
	
	$categoria=isset($_POST['categoria'])? $_POST['categoria']:null;
	$nombre=isset($_POST['nombre'])? $_POST['nombre']:null;
	
	function obtenerExtencion($str){
		$nose=explode('.',$str);
		$se=end($nose);
		return $se;
	}
	
	if(isset($_FILES['doc']) && !empty($_FILES["doc"])){
		$query3="SELECT * from documento WHERE id_documento=$id";
		$texto3=mysqli_query($con,$query3) or die(mysqli_error($con));
		$fila3=mysqli_fetch_array($texto3);
		$archivo3=$fila3['2'];
		unlink($archivo3);
		
		
		
		$ruta='files/documentos/';
		$archivo=$ruta.$_FILES['doc']['name'];
		@move_uploaded_file($_FILES['doc']['tmp_name'],$archivo);
	}else{
		$query="SELECT * from documento WHERE id_documento=$id";
		$texto=mysqli_query($con,$query) or die(mysqli_error($con));
		$fila=mysqli_fetch_array($texto);
		$archivo=$fila['2'];
	}
	
	$query1="UPDATE `documento` SET `categoria`='$categoria',`nombre`='$nombre',`rutadoc`='$archivo' WHERE id_documento=$id";
	
	
	mysqli_query($con,$query1) or die(mysqli_error($con));
	header("location:modificardoc.php?var=1&doc=$id");
?>
	<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
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
	if(!isset($_GET['asoc'])&&!isset($_GET['cate'])):
	?>
		<script> 
			window.onpageshow = function(event) {
			history.go(-1);
		</script>
	<?php
		
	else:
		$id=$_GET['asoc'];
		$cate=$_GET['cate'];
	endif;
	
	$nombre=isset($_POST['nombre'])? $_POST['nombre']:null;
	$matricula=isset($_POST['matricula'])? $_POST['matricula']:null;
	$dirrecion=isset($_POST['dirreccion'])? $_POST['dirreccion']:null;
	$mail=isset($_POST['mail'])? $_POST['mail']:null;
	$telefono=isset($_POST['telefono'])? $_POST['telefono']:null;
	$lat=isset($_POST['latitud'])? $_POST['latitud']:null;
	$long=isset($_POST['longuitud'])? $_POST['longuitud']:null;
	
	$pagina=isset($_POST['pagina'])? $_POST['pagina']:null;
	$facebook=isset($_POST['face'])? $_POST['face']:null ;
	$twiiter=isset($_POST['twit'])? $_POST['twit']:null;
	$instagram=isset($_POST['insta'])? $_POST['insta']:null;
	$youtube=isset($_POST['you'])? $_POST['you']:null;
	
	
	function obtenerExtencion($str){
		$nose=explode('.',$str);
		$se=end($nose);
		return $se;
	}

	require 'conection.php';
	
	if(isset($_FILES['files']) && !empty($_FILES["files"])){
		$query2="SELECT * from asociado WHERE id_asociado=$id";
		$text3=mysqli_query($con,$query2) or die(mysqli_error($con));
		$fila2=mysqli_fetch_array($text3);
		$archivo2=$fila2['3'];
		unlink($archivo2);
		
		$ruta='files/documentos/';
		$archivo=$ruta.$_FILES['files']['name'];
		@move_uploaded_file($_FILES['files']['tmp_name'],$archivo);
	}else{
		$query1="SELECT * from asociado WHERE id_asociado=$id";
		$text2=mysqli_query($con,$query1) or die(mysqli_error($con));
		$fila=mysqli_fetch_array($text2);
		$archivo=$fila['3'];
	}
	
	$query="UPDATE `asociado` SET `nombre`='$nombre',`matricula`='$matricula',`telefono`='$telefono',`mail`='$mail',`logo`='$archivo',`direccion`='$dirrecion',`lat`='$lat',`lon`='$long',`categoria`='$cate',`facebook`='$facebook',`twitter`='$twiiter',`instagram`='$instagram',`yotubue`='$youtube',`paginaweb`='$pagina' WHERE `id_asociado`='$id'";
	
	
	mysqli_query($con,$query) or die(mysqli_error($con));
	
	header("location:modificarasoc.php?var=1&asociado=$id&cate=$cate");
	
?>
	<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>

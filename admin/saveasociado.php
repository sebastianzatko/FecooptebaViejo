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
	
	$cate=$_GET['cate'];
	
	
	$nombre=isset($_POST['nombre'])? $_POST['nombre']:null;
	$matricula=isset($_POST['matricula'])? $_POST['matricula']:null;
	$dirrecion=isset($_POST['dirreccion'])? $_POST['dirreccion']:null;
	$mail=isset($_POST['mail'])? $_POST['mail']:null;
	$telefono=isset($_POST['telefono'])? $_POST['telefono']:null;
	$lat=isset($_POST['latitud'])? $_POST['latitud']:null;
	$long=isset($_POST['longuitud'])? $_POST['longuitud']:null;
	
	$pagina=isset($_POST['pagina'])? $_POST['pagina']:null;
	$facebook=isset($_POST['face'])? $_POST['face']:null;
	$twiiter=isset($_POST['twit'])? $_POST['twit']:null;
	$instagram=isset($_POST['insta'])? $_POST['insta']:null;
	$youtube=isset($_POST['you'])? $_POST['you']:null;
	
	function obtenerExtencion($str){
		$nose=explode('.',$str);
		$se=end($nose);
		return $se;
	}

	require 'conection.php';
	
	$mayor="SELECT max(id_asociado) FROM asociado";
	$obtener=mysqli_query($con,$mayor) or die(mysqli_error($con));
	$ida=mysqli_fetch_array($obtener);
	$id=$ida['0']+1;
	$ruta='files/asociado/'.$id."/";
	mkdir($ruta,0777,true);
	$extension=obtenerExtencion($_FILES['logo']['name']);
	$archivo=$ruta."logo.".$extension;
	@move_uploaded_file($_FILES['logo']["tmp_name"],$archivo);
	
	$query="INSERT INTO `asociado`(`nombre`, `matricula`,`telefono`,`mail`,`logo`,`direccion`,`lat`,`lon`,`categoria`,`facebook`,`twitter`,`instagram`,`yotubue`,`paginaweb`) VALUES ('$nombre','$matricula','$telefono','$mail','$archivo','$dirrecion','$lat','$long','$cate','$facebook','$twiiter','$instagram','$youtube','$pagina')";
	
	
	mysqli_query($con,$query) or die(mysqli_error($con));
	
	
	
	header("location:crearasociado.php?var=1&cate=$cate");
	


?>
<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>

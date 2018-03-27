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
	$texto=isset($_POST['noticia'])? $_POST['noticia']:null;
	$titulo=isset($_POST['titulo'])? $_POST['titulo']:null;
	$sinp=isset($_POST['sinop'])? $_POST['sinop']:null;
	$tamano=isset($_POST['tamano'])? $_POST['tamano']:null;
	if(isset($_POST['actividad'])){
		$actividad=$_POST['actividad'];
	}else{
		$actividad=0;
	}

	if(isset($_POST['destacada'])){
		$destacada=$_POST['destacada'];
	}else{
		$destacada=0;
	}
	if(isset($_POST['slider'])){
		$slider=$_POST['slider'];
	}else{
		$slider=0;
	}
	
	function obtenerExtencion($str){
		$nose=explode('.',$str);
		$se=end($nose);
		return $se;
	}

	require 'conection.php';
	
	$mayor="SELECT max(id_noticia) FROM noticia";
	$obtener=mysqli_query($con,$mayor) or die(mysqli_error($con));
	$ida=mysqli_fetch_array($obtener);
	$id=$ida['0']+1;
	$ruta='files/noticia/'.$id."/";
	mkdir($ruta,0777,true);
	$extension=obtenerExtencion($_FILES['files']['name']);
	$archivo=$ruta."portada.".$extension;
	@move_uploaded_file($_FILES['files']["tmp_name"],$archivo);
	
	
	if(!isset($_POST['prioridad'])){
		$prioridad=0;
	}else{
		$relevancia=$_POST["prioridad"];
		if($relevancia=="max"){
			$mayorprioridad="SELECT max(prioridad) FROM noticia";
			$take=mysqli_query($con,$mayorprioridad) or die(mysqli_error($con));
			$go=mysqli_fetch_array($take);
			$prioridad=$go[0]+1;
		}elseif($relevancia=="med"){
			$medioprioridad="SELECT max(prioridad) FROM noticia";
			$take=mysqli_query($con,$medioprioridad) or die(mysqli_error($con));
			$go=mysqli_fetch_array($take);
			$prioridad=$go[0]/2;
		}elseif($relevancia=="min"){
			$minprioridad="SELECT min(prioridad) FROM noticia";
			$take=mysqli_query($con,$minprioridad) or die(mysqli_error($con));
			$go=mysqli_fetch_array($take);
			$prioridad=$go[0]+1;
		}elseif($relevancia=="none"){
			$prioridad=0;
		}
	}
	$fecha=isset($_POST["fecha"])? $_POST["fecha"]:null;
	
	if($fecha==null){
		$query="INSERT INTO `noticia`(`id_noticia`,`sinopsis`, `texto`,`titulo`,`portada`,`destacada`,`actividad`,`slider`,`prioridad`,`tamaño`) VALUES ('$id','$sinp','$texto','$titulo','$archivo','$destacada','$actividad','$slider','$prioridad','$tamano')";
	}else{
		$query="INSERT INTO `noticia`(`id_noticia`,`sinopsis`, `texto`,`titulo`,`portada`,`destacada`,`actividad`,`slider`,`prioridad`,`fecha`,`tamaño`) VALUES ('$id','$sinp','$texto','$titulo','$archivo','$destacada','$actividad','$slider','$prioridad','$fecha','$tamano')";
	}
	
	
	mysqli_query($con,$query) or die(mysqli_error($con));
	
	foreach($_POST['asociates'] as $asociado=>$idasociado){
		$query2="INSERT INTO `noticiaasociado` (`id_noticia`,`id_asociado`) VALUES ('$id','$idasociado')";
		mysqli_query($con,$query2) or die(mysqli_error($con));
	}
	
	
	
	header("location: nuevanoti.php?var=1");
?>
<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
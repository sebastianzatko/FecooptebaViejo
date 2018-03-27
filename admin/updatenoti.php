<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<?php if (login_check($mysqli) == true) : ?>
<?php
	if(!isset($_GET['noticia'])):
	?>
		<script> 
			window.onpageshow = function(event) {
			history.go(-1);
		</script>
	
	<?php
	else:
		$idea=$_GET['noticia'];
	endif;

	
	
	
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
	
	
	require 'conection.php';
	
	
	echo isset($_FILES['files']);
	echo !empty($_FILES['files']);
	if(isset($_FILES['files']) && !empty($_FILES['files']['name'])){
		$query4="SELECT portada from noticia WHERE id_noticia=$idea";
		$texto4=mysqli_query($con,$query4) or die(mysqli_error($con));
		$fila4=mysqli_fetch_array($texto4);
		$archivo4=$fila4['0'];
		unlink($archivo4);
		function obtenerExtencion($str){
		    $nose=explode('.',$str);
			$se=end($nose);
			return $se;
	    }
		echo $_FILES['files']['name'];
		$ruta='files/noticia/'.$idea."/";
        $extension=obtenerExtencion($_FILES['files']['name']);
		$archivo=$ruta."portada.".$extension;
		echo $archivo;
		echo $extension;
		
		@move_uploaded_file($_FILES['files']['tmp_name'],$archivo);
	}else{
		$query="SELECT portada from noticia WHERE id_noticia=$idea";
		$texto1=mysqli_query($con,$query) or die(mysqli_error($con));
		$fila=mysqli_fetch_array($texto1);
		$archivo=$fila['0'];
	}
	
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
		$query="UPDATE `noticia` SET `sinopsis`='$sinp',`texto`='$texto',`titulo`='$titulo',`portada`='$archivo',`destacada`='$destacada',`actividad`='$actividad',`prioridad`='$prioridad',`tamaño`='$tamaño' WHERE id_noticia=$idea";
	}else{
		$query="UPDATE `noticia` SET `sinopsis`='$sinp',`texto`='$texto',`titulo`='$titulo',`portada`='$archivo',`destacada`='$destacada',`actividad`='$actividad',`prioridad`='$prioridad',`fecha`='$fecha',`tamaño`='$tamano' WHERE id_noticia=$idea";
	}
	
	$sqlre="SELECT * FROM noticiaasociado WHERE id_noticia=$idea";
	
	mysqli_query($con,$query) or die(mysqli_error($con));
	$resultado1=mysqli_query($con,$sqlre) or die(mysqli_error($con));
	
	if($resultado1!=NULL){
		while($asociado1 = mysqli_fetch_array($resultado1)){
			$query3="DELETE FROM `noticiaasociado` WHERE id_noticia=$idea AND id_asociado=$asociado1[1]";
			mysqli_query($con,$query3) or die(mysqli_error($con));
		}
	}
	foreach($_POST['asociates'] as $asociado=>$idasociado){
		$query2="INSERT INTO `noticiaasociado` (`id_noticia`,`id_asociado`) VALUES ('$idea','$idasociado')";
		mysqli_query($con,$query2) or die(mysqli_error($con));
	}
	
	header("location:modificarnoti.php?var=1&noticia=$idea");
	
	
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
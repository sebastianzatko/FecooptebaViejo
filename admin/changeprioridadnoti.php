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
	$x=$_POST['amodificar'];
	$anterior=$_GET['ant'];
	require 'conection.php';
	
	$z=array_filter($x);
	if(count($z)==0){
		if($anterior=="noti"){
			header("location: noticiaprioridad.php?var=3");
		}else if($anterior=="dest"){
			header("location: prioridadnoticiadestacada.php?var=3");
		}else if($anterior=="sli"){
			header("location: prioridadnoticiaslider.php?var=3");
		}else{
			header("location: redireccion.php");
		}
	}else{
		foreach($x as $y){
			if(!empty($y)){
				echo $y;
				list($id,$prioridad)=explode("-",$y);
				$sql="UPDATE noticia SET prioridad=$prioridad WHERE id_noticia=$id";
				mysqli_query($con,$sql) or die(mysqli_error($con));
				}
			}
	
			if($anterior=="noti"){
				header("location: noticiaprioridad.php?var=1");
			}else if($anterior=="dest"){
				header("location: prioridadnoticiadestacada.php?var=1");
			}else if($anterior=="sli"){
				header("location: prioridadnoticiaslider.php?var=1");
			}else{
				header("location: redireccion.php");
			}
				
		}
	
	

?>
<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
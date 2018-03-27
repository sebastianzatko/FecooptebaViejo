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
		if(!isset($_GET["comision"])):
		?>
			<script> 
				window.onpageshow = function(event) {
				history.go(-1);
			</script>
		<?php
		
		else:
			$id=$_GET["comision"];
		endif;
		
		
		$texto=isset($_POST["contentcomision"])? $_POST["contentcomision"]:null;
		$titulo=isset($_POST["titulocomision"])? $_POST["titulocomision"]:null;
		
		$query="UPDATE `comision` SET `content`='$texto',`nombrecomision`,'$titulo' WHERE id_comision='$id'";
		require 'conection.php';
		mysqli_query($con,$query) or die(mysqli_error($con));
		header("Location:modificarcomi?publicacion=".$id."&var=1");
	
	?>
	<?php else : ?>
		<?php
			header("Location:index.php");
		?>
		
	<?php endif; ?>
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
	$texto=isset($_POST['contact'])? $_POST['contact']:null;
	$lat=isset($_POST['latitud'])? $_POST['latitud']:null;
	$lon=isset($_POST['longuitud'])? $_POST['longuitud']:null;
	$mail=isset($_POST['mail'])? $_POST['mail']:null;
	
	
	require 'conection.php';
	$query="UPDATE `texto` SET `texto`='$texto' WHERE `id_texto`=24";
	
	$query2="UPDATE `asociado` SET `lat`='$lat',`lon`='$lon',`mail`='$mail' WHERE categoria=0";
	
	mysqli_query($con,$query) or die(mysqli_error($con));
	
	mysqli_query($con,$query2) or die(mysqli_error($con));
	header("location:contacto.php?var=1");
	
?>
	<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>

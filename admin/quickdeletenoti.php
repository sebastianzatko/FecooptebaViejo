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
		
		if(!isset($_GET["noticia"])):
		?>
			<script> 
				window.onpageshow = function(event) {
				history.go(-1);
			</script>
		<?php
		
		else:
			$id=$_GET["noticia"];
		endif;
		$query2="DELETE FROM `noticia` WHERE id_noticia='$id'";
		mysqli_query($con,$query2) or die(mysqli_error($con));
		
	?>
		<script> 
			window.onpageshow = function(event) {
				history.go(-1);
			};
		</script>
	<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
	<?php endif; ?>
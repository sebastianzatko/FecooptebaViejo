<html>
    <head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
    </head
    ><body>
        <?php
            $ver=$_GET["coopteba"];
			require 'conection.php';
            $sql = "SELECT * FROM coopteba WHERE id_coopteva='$ver'";
            $texto=mysqli_query($con,$sql) or die(mysqli_error($con));
            $fila=mysqli_fetch_array($texto);
        ?>
            <h2><?php echo $fila['1']; ?></h2>
            <p><?php echo $fila['2']; ?></p>
            <p><?php echo $fila['3']; ?></p>
            <p><?php echo $fila['4']; ?></p>
            <p><?php echo $fila['6']; ?></p>
            <img src="<?php echo $fila['5']; ?>" />
		<section class="footer">
			<footer>
				<p>&copy KuboCuantico</p>
				<a href="https://www.facebook.com/KuboCuantico/"><span class="socialicon"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></span></a>
				<a href="https://twitter.com/KuboCuantico"><span class="socialicon"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></span></a>
				<a href="https://www.youtube.com/channel/KuboCuantico"><span class="socialicon"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></span></a>
			</footer>
		</section>
    <body>
</html>
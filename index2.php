<?php
	require "admin/functiones.php";
?>
<html>
	<head>
		<title>Quienes Somos?</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		
		<link rel="stylesheet" href="admin/styleuser.css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<link rel="stylesheet" href="admin/fonts.css" />
		
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="admin/main.js"></script>
	</head>
	<body>
	<header>
	<div >
		<div class="menu_bar">
		<img src="admin/logonav.svg" class="logo3" />	
		<a href="#" class="bt-menu"><img src="icons/menu.svg" class="logo65" /></a>
		</div>
		
		<nav>
			<div class="logo"><a href="index.php"> <img src="logonav.svg" class="logo2" /> </a>	</div>
				<ul>
				<li ><a href="index.php"><img src="icons/botonhogar5.svg" class="logo56" /><p class="pmenu">INICIO</p></a></li>
				<li ><a href="index2.php"><img src="icons/grupo69.svg" class="logonosotros" /><p class="pmenu">SOBRE NOSOTROS</p></a></li>
				<li ><a href="index3.php"><img src="icons/documento5.svg" class="logodocumento" /><p class="pmenu">DOCUMENTOS</p></a></li>
				<li ><a href="index4.php"><img src="icons/comisiones5.svg" class="logocoopteba" /><p class="pmenu">COMISIONES</p></a></li>
				<li ><a href="index5.php"><img src="icons/noticia5.svg" class="logonoticia" /><p class="pmenu">NOTICIAS</p></a></li>
				<li ><a href="index6.php"><img src="icons/usuario5.svg" class="logocoopteba" /><p class="pmenu">COOPTEBAS</p></a></li>
				<li ><a href="index7.php"><img src="icons/vinculo5.svg" class="logocontacto" /><p class="pmenu">VINCULOS</p></a></li>
				<li ><a href="index8.php"><img src="icons/contacto5.svg" class="logocontacto" /><p class="pmenu">CONTACTO</p></a></li>
						
				</ul>		
			</nav>
	</div>	
	</header>

		
		<?php 
			require 'admin/conection.php';
			$sql = "SELECT texto FROM texto WHERE localizacion='historia'";
			$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$historia = mysqli_fetch_array($texto);
			
			if(!empty($historia['0'])){
				echo "<section class='hist'><h2 class='encabezao'><img src='admin/icons/historia.png' class='iconitos'/>Historia</h2><div class='histex'>".$historia['0']."</div></section>";
			}
		?>
		
			
		
				
		<?php
				$sql3 = "SELECT texto FROM texto WHERE localizacion='objetivo'";
				$texto3=mysqli_query($con,$sql3) or die(mysqli_error($con));
				
				$objetivo = mysqli_fetch_array($texto3);
				if(!empty($objetivo[0])){
					echo "<section class='obj'><h2 class='encabezao'><img src='admin/icons/objetivo3.png' class='iconitos'/>Objetivos</h2><div class='objtex'>".$objetivo[0]."</div></section>";
				}

		
		
		?>
		
		
		
			
			
		<?php
			$sql1 = "SELECT id_noticia,titulo,sinopsis,portada FROM noticia WHERE actividad=1 ORDER BY prioridad DESC LIMIT 3";
			$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
			
			if(mysqli_num_rows($texto2)==0){
				
			}
			else{
				echo "<section class='act'><h2 class='title'>Actividades</h2>";
				while($actividades = mysqli_fetch_array($texto2)){
					
					echo "<div class='index2caja'><img class='imgct' src='admin/".$actividades['3']."'><div class='actparrafo'>".cortar($actividades['2'],135)."</div><div class='overlay3'><div class='text3'>".cortar($actividades['1'],30)."</br></br><a class='link' href='display.php?noticia=".$actividades['0']."'>LEER MAS</a></div></div></div>";
                }
				echo "</section>";
			}
	
	
		?>
				

		
			
			
		<section class="footer">
			<footer>
			<div class="social">
				<a href="https://www.facebook.com/KuboCuantico/"><span class="socialicon"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></span></a>
				<a href="https://twitter.com/KuboCuantico"><span class="socialicon"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></span></a>
				<a href="https://www.youtube.com/channel/KuboCuantico"><span class="socialicon"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></span></a>
			</div>
			<hr class="endofline">
			<div class="footercont">
				<p>Federacion de Cooperativas de Viviendas y Consumo </br>de los Trabajadores de la Educacion </br>Provincia de Buenos Aires</br>Matricula Nacional:55161 "Fecoopteba LTDA"</p>
				
			</div>	
			<p class="kubo">&copy KuboCuantico</p>
			</footer>
		</section>
	</body>
</html>
<?php
	require "admin/functiones.php";
?>
<html>
	<head>
		<title>FeCoopteba</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans:300|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Lato|Noto+Serif" rel="stylesheet">
		<link rel="stylesheet" href="admin/styleuser.css"/>
		
		
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="admin/image/x-icon"/>
		<script src="admin/jquery-3.2.1.js"></script>
		<script src="admin/main.js"></script>
		<style>
			
			.slidesjs-container{
				width:100%!important;
			}
			.slidesjs-control{
				width:100%!important;
			}
			.chiquito{
				width:30px;
				height:30px;
			}
			
			/* Estilos del modal*/
			
			/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: fixed; /* Stay in place */
				z-index: 100000000000000000; /* Sit on top */
				padding-top: 100px; /* Location of the box */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow: auto; /* Enable scroll if needed */
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content */
			.modal-content {
				background-color: #fefefe;
				margin: auto;
				padding: 20px;
				border: 1px solid #888;
				width: 80%;
			}

			/* The Close Button */
			.close {
				color: #aaaaaa;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}
			.close2{
				float:right;
				font-size:18px;
			}

			.close:hover,
			.close:focus {
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}
		</style>
		
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
		$sql = "SELECT id_noticia,titulo,sinopsis,portada FROM noticia WHERE slider=1 ORDER BY prioridad DESC LIMIT 8";
		$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
		if(count($texto)!=0  && mysqli_num_rows($texto)>=2){
			echo "<div class='main'><section class='slides'>";
			while($noticiaslider = mysqli_fetch_array($texto)){
				
				echo "<div class='sliderpadre'> <img src='admin/".$noticiaslider['3']."' alt='' /><div class='sliderecuadro' ><h2>".cortar($noticiaslider['1'],50)."</h2><p>".cortar($noticiaslider['2'],100)."</p><a href='display.php?noticia=".$noticiaslider['0']."'' class='link3'>Ver Mas</a></div></div>";
			}
			echo "</section></div>";
			
		}	
		?>
		
	
			
		<?php
					require 'admin/conection.php';
					$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,fecha FROM noticia WHERE destacada=1 ORDER BY prioridad DESC LIMIT 10";
					$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
					if(count($texto2)!=0){
						echo "<section class='notisec'>";
						$x=rand(1, 3);
						while($noticiadestacada = mysqli_fetch_array($texto2)){
							$dia=date_create($noticiadestacada['4']);
							$daa=date_format($dia,'d/m/Y');
							if($x==1){
								echo "<div class='contenedor-img ejemplo-3'><img src='admin/".$noticiadestacada['3']."' /><div class='mascara'><p class='date'>".$daa."</p><h2>".cortar($noticiadestacada['1'],27)."</h2><p class='date'>".cortar($noticiadestacada['2'],100)."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}elseif($x==2){
								echo "<div class='contenedor-img2 ejemplo-3'><img src='admin/".$noticiadestacada['3']."' /><div class='mascara2'><p class='date'>".$daa."</p><h2 class='nose3'>".cortar($noticiadestacada['1'],27)."</h2><p>".cortar($noticiadestacada['2'],100)."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}elseif($x==3){
								echo "<div class='contenedor-img3 ejemplo-3'><img src='admin/".$noticiadestacada['3']."' /><div class='mascara3'><p class='date'>".$daa."</p><h2>".cortar($noticiadestacada['1'],27)."</h2><p>".cortar($noticiadestacada['2'],100)."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}
							if($x==3){
								$x=1;
							}else{
								$x=$x+1;
							}
						}
						echo "</section>";
					}else{
						
					}
				?>
				
				
			<?php
					$consulado="SELECT texto FROM texto WHERE localizacion='publicacionprincipal'";
					$acerca=mysqli_query($con,$consulado) or die(mysqli_error($con));
					$popup = mysqli_fetch_array($acerca);
					if(!empty($popup['0'])){
						echo "<div id='myModal' class='modal'><div class='modal-content'><span id='cierrate' class='close2'>3</span>".$popup[0]."</div></div>";
					}
					
					
				?>		
		

			
		
			<?php
				$queryfija="SELECT content FROM publicaciones UNION SELECT id_asociado FROM asociado WHERE portada=1";
				$devueltas=mysqli_query($con,$queryfija) or die(mysqli_error($con));
				
				if(count($devueltas)!=0){
					echo "<section class='publicaciones'>";
					while($publicacion=mysqli_fetch_array($devueltas)){
						if(is_numeric($publicacion[0])){
							$id=$publicacion[0];
							$consulado="SELECT logo FROM asociado WHERE id_asociado='$id'";
							$vepaella=mysqli_query($con,$consulado) or die(mysqli_error($con));
							$filasz=mysqli_fetch_array($vepaella);
							echo "<a href='verasociado.php?asociado=".$id."'><img src='admin/".$filasz[0]."' class='vinculorelacionado'/></div><a/>";
						}else{
							
							echo "<div class='cajafija3'>".$publicacion[0]."</div>";
						}
							
					
					}
					echo "</section>";
				}else{
					
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
		<div class="firma">
		<a href="https://www.facebook.com/KuboCuantico/" class="kubo" style="    text-decoration-color: white;
color: white;
margin-left: 1%;">&copy KuboCuantico</a>
			</div>
		</footer>
	</section>
		
		
		
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="admin/js/jquery.slides.js"></script>
		<script >
			$(function(){
			  $(".slides").slidesjs({
				play: {
				  active: true,
					// [boolean] Generate the play and stop buttons.
					// You cannot use your own buttons. Sorry.
				  effect: "slide",
					// [string] Can be either "slide" or "fade".
				  interval: 3000,
					// [number] Time spent on each slide in milliseconds.
				  auto: true,
					// [boolean] Start playing the slideshow on load.
				  swap: true,
					// [boolean] show/hide stop and play buttons
				  pauseOnHover: false,
					// [boolean] pause a playing slideshow on hover
				  restartDelay: 2500
					// [number] restart delay on inactive slideshow
				}
			  });
			});
					
		</script>
		<script>
			var modal = document.getElementById('myModal');
			var span;
			
			 


			
			$( document ).ready(function() {
				modal.style.display = "block";
				var tm=setInterval(function(){ countdown(); },1000);
				
				function countdown() {

				var i = document.getElementById('cierrate');
				i.classList.remove('close');
				i.innerHTML = parseInt(i.innerHTML)-1;

				 if (parseInt(i.innerHTML)<=0) {

				  i.innerHTML="&times;";
				  i.classList.add("close");
				  span = document.getElementsByClassName("close")[0];
				  span.onclick = function() {
						modal.style.display = "none";
					}
				  clearInterval(tm);
					
				 }
				}
				
			});
			
			
		
		</script>
		
	</body>
</html>
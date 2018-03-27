<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	require 'functiones.php';
	sec_session_start();
	
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
		<link rel="stylesheet" href="styleuser.css"/>
		
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="main.js"></script>
		

        <script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
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
		<?php if (login_check($mysqli) == true) : ?>
		<section class="oja">
			<span id="botonmenu" class="fa fa-arrow-right"></span>
            <nav class="barra">
                <ul class="lista1">
                    <li class="inicio">Opciones Modo Administrador</li>
					<li menu="0"><a href="redireccion.php"><i class="fa fa-home"></i> Home</a>
                    <li class="item-sublista" menu="1"><a href="#"><i class="fa fa-plus-square"></i> Crear</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-plus-square"></i> Crear</li>
                            <li class="atras">Back</li>
                            <li><a href="nuevanoti.php"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                            <li><a href="crearasociado.php?cate=1"><i class="fa fa-user-plus"></i> Vinculo</a></li>
                            <li><a href="crearasociado.php?cate=2"><i class="fa fa-user-plus"></i> Coopteba</a></li>
                            <li><a href="guardardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
							<li><a href="crearcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="publicaciones.php"><i class="fa fa-align-left"></i> Publicaciones</a></li>
                        </ul>
                    </li>    
                    <li class="item-sublista" menu="2"><a href="#"><i class="fa fa-edit"></i> Modificar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-edit"></i> Modificar</li>
                            <li class="atras">Back</li>
                            <li><a href="modificarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Vinculo</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Coopteba</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
							<li><a href="modificarpublicacion.php"><i class="fa fa-align-left"></i> Publicacion</a></li>
							<li><a href="modificarcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="vinculosasociados.php"><i class="fa fa-users"></i> Publicar Entes</a></li>
                        </ul>
                    </li>
					<li class="item-sublista" menu="3"><a href="#"><i class="fa fa-th-large"></i> Secciones</a>
						<ul class="sublista">
							<li class="inicio"><i class="fa fa-th-large"></i> Secciones</li>
                            <li class="atras">Back</li>
							<li><a href="contacto.php"><i class="fa fa-phone-square"></i> Contacto</a></li>
                            <li><a href="guardarobjetivos.php"><i class="fa fa-line-chart"></i> Objetivos</a></li>
                            <li><a href="historia.php"><i class="fa fa-archive"></i> Historia</a></li>
							<li><a href="publicacionprincipal.php"><i class="fa fa-object-group"></i> Pop-up</a></li>
							<li><a href="documentostexto.php"><i class="fa fa-file"></i> Texto Documentos</a></li>
							<li><a href="documentostexto.php"><i class="fa fa-book"></i> Texto Legislacion</a></li>
						</ul>
					</li>
                    <li class="item-sublista" menu="4"><a href="#"><i class="fa fa-minus-square"></i> Eliminar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-minus-square"></i> Eliminar</li>
                            <li class="atras">Back</li>
                            <li><a href="eliminarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Vinculo</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Coopteba</a></li>
                            <li><a href="eliminardoc.php"><i class="fa fa-file"></i> Documento</a></li>
							<li><a href="eliminardoc.php"><i class="fa fa-book"></i> Legislacion</a></li>
							<li><a href="eliminarcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="eliminarpublicacion.php"><i class="fa fa-align-left"></i> Publicacion</a></li>
							<li><a href="eliminarseccion.php"><i class="fa fa-th-large"></i> Seccion</a></li>
                        </ul>
                    </li>
                    <li class="item-sublista" menu="5"><a href="#"><i class="fa fa-sort"></i> Cambiar Relevancia</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-sort"></i> Cambiar Relevancia</li>
                            <li class="atras">Back</li>
                            <li><a href="noticiaprioridad.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="prioridadnoticiadestacada.php"><i class="fa fa-newspaper-o"></i> Noticia Destacada</a></li>
                            <li><a href="prioridadnoticiaslider.php"><i class="fa fa-newspaper-o"></i> Noticia Carrusel</a></li>
                            <li><a href="documentoprioridad.php"><i class="fa fa-file"></i> Documento</a></li>
                            <li><a href="legislacionprioridad.php"><i class="fa fa-book"></i> Legislacion</a></li>
                        </ul>
                    </li>
					<li menu="0"><a href="logout.php"><i class="fa fa-times-circle"></i> Cerrar Sesion</a>
                </ul>
            </nav>
        </section>
		
		<header>
		<div >
			<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
			</div>
			
			<nav>
				<div class="logo"><a href="index1.php"> <img src="logonav.svg" class="logo2" /> </a>	</div>
					<ul>
					<li ><a href="index1.php"><img src="icons/botonhogar5.svg" class="logo56" />INICIO</a></li>
					<li ><a href="index2.php"><img src="icons/grupo69.svg" class="logonosotros" />SOBRE NOSOTROS</a></li>
					<li ><a href="index3.php"><img src="icons/documento5.svg" class="logodocumento" />DOCUMENTOS</a></li>
					<li ><a href="index4.php"><img src="icons/comisiones5.svg" class="logocoopteba" />COMISIONES</a></li>
					<li ><a href="index5.php"><img src="icons/noticia5.svg" class="logonoticia" />NOTICIAS</a></li>
					<li ><a href="index6.php"><img src="icons/usuario5.svg" class="logocoopteba" />COOPTEBAS</a></li>
					<li ><a href="index7.php"><img src="icons/vinculo5.svg" class="logocontacto" />VINCULOS</a></li>
					<li ><a href="index8.php"><img src="icons/contacto5.svg" class="logocontacto" />CONTACTO</a></li>
							
					</ul>		
				</nav>
		</div>	
		</header>

			
		
		<?php 
		require 'conection.php';
		$sql = "SELECT id_noticia,titulo,sinopsis,portada FROM noticia WHERE slider=1 ORDER BY prioridad DESC LIMIT 8";
		$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
		if(count($texto)!=0  && mysqli_num_rows($texto)>=2){
			echo "<div class='main'><section class='slides'>";
			while($noticiaslider = mysqli_fetch_array($texto)){
				
				echo "<div class='sliderpadre'> <img src='".$noticiaslider['3']."' alt='' /><div class='sliderecuadro' ><h2>".cortar($noticiaslider['1'],50)."</h2><p>".cortar($noticiaslider['2'],100)."</p><a href='display.php?noticia=".$noticiaslider['0']."'' class='link3'>Ver Mas</a></div></div>";
			}
			echo "</section></div>";
		}
		?>
					
		
	
			
		<?php
					require 'conection.php';
					$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,fecha FROM noticia WHERE destacada=1 ORDER BY prioridad DESC LIMIT 10";
					$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
					if(count($texto2)!=0){
						echo "<section class='notisec'>";
						$x=rand(1, 3);
						while($noticiadestacada = mysqli_fetch_array($texto2)){
							$dia=date_create($noticiadestacada['4']);
							$daa=date_format($dia,'d/m/Y');
							$titulo=cortar($noticiadestacada['1'],27);
							$sinopsis=cortar($noticiadestacada['2'],100);
							if($x==1){
								echo "<div class='contenedor-img ejemplo-3'><img src='".$noticiadestacada['3']."' /><div class='mascara'><p class='date'>".$daa."</p><h2>".$titulo."</h2><p class='date'>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a><div class='icon'><a href='modificarnoti.php?noticia=".$noticiadestacada[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti.php?noticia=".$noticiadestacada['0']."'><i id='bas' class='fa fa-trash'></i></a></div></div></div>";
								
							}elseif($x==2){
								echo "<div class='contenedor-img2 ejemplo-3'><img src='".$noticiadestacada['3']."' /><div class='mascara2'><p class='date'>".$daa."</p><h2 class='nose3'>".$titulo."</h2><p>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a><div class='icon'><a href='modificarnoti.php?noticia=".$noticiadestacada[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti.php?noticia=".$noticiadestacada['0']."'><i id='bas' class='fa fa-trash'></i></a></div></div></div>";
								
							}elseif($x==3){
								echo "<div class='contenedor-img3 ejemplo-3'><img src='".$noticiadestacada['3']."' /><div class='mascara3'><p class='date'>".$daa."</p><h2>".$titulo."</h2><p>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a><div class='icon'><a href='modificarnoti.php?noticia=".$noticiadestacada[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti.php?noticia=".$noticiadestacada['0']."'><i id='bas' class='fa fa-trash'></i></a></div></div></div>";
								
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
							echo "<a href='verasociado.php?asociado=".$id."'><img src=".$filasz[0]." class='vinculorelacionado'/></div><a/>";
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
		<script src="js/jquery.slides.js"></script>
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
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
		
	</body>
</html>
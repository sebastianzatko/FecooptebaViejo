<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	require "functiones.php";
	sec_session_start();
	
?>
<html>
	<head>
		<title>Quienes Somos?</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		
		<link rel="stylesheet" href="styleuser.css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<link rel="stylesheet" href="fonts.css" />
		
		<meta name="viewport" content="width=device-width">
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
                            <li class="atras">Volver</li>
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
                            <li class="atras">Volver</li>
                            <li><a href="modificarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Vinculo</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Coopteba</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-book"></i> Legislaciones</a></li>
							<li><a href="modificarpublicacion.php"><i class="fa fa-align-left"></i> Publicacion</a></li>
							<li><a href="modificarcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="vinculosasociados.php"><i class="fa fa-users"></i> Publicar Entes</a></li>
                        </ul>
                    </li>
					<li class="item-sublista" menu="3"><a href="#"><i class="fa fa-th-large"></i> Secciones</a>
						<ul class="sublista">
							<li class="inicio"><i class="fa fa-th-large"></i> Secciones</li>
                            <li class="atras">Volver</li>
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
                            <li class="atras">Volver</li>
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
                            <li class="atras">Volver</li>
                            <li><a href="noticiaprioridad.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="prioridadnoticiadestacada.php"><i class="fa fa-newspaper-o"></i> Noticia Destacada</a></li>
                            <li><a href="prioridadnoticiaslider.php"><i class="fa fa-newspaper-o"></i> Noticia Carrusel</a></li>
                            <li><a href="documentoprioridad.php"><i class="fa fa-file"></i> Documento</a></li>
                            <li><a href="legislacionprioridad.php"><i class="fa fa-book"></i> Legislacion</a></li>
                        </ul>
                    </li>
                   
					<li menu="0"><a href="consultas.php"><i class="fa fa-wrench"></i> Consultas</a>
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
			$sql = "SELECT texto FROM texto WHERE localizacion='historia'";
			$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$historia = mysqli_fetch_array($texto);
			
			if(!empty($historia['0'])){
				echo "<section class='hist'><h2 class='encabezao'><img src='icons/historia.png' class='iconitos'/>Historia<div class='icon'><a href='historia.php'><i id='edi' class='fa fa-pencil'></i></a></div></h2><div class='histex'>".$historia['0']."</div></section>";
			}
		?>
		
			
		
				
		<?php
				$sql3 = "SELECT texto FROM texto WHERE localizacion='objetivo'";
				$texto3=mysqli_query($con,$sql3) or die(mysqli_error($con));
				
				$objetivo = mysqli_fetch_array($texto3);
				if(!empty($objetivo[0])){
					echo "<section class='obj'><h2 class='encabezao'><img src='icons/objetivo3.png' class='iconitos'/>Objetivos<div class='icon'><a href='guardarobjetivos.php'><i id='edi' class='fa fa-pencil'></i></a></div></h2><div class='objtex'>".$objetivo[0]."</div></section>";
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
					
					echo "<div class='index2caja'><img class='imgct' src='".$actividades['3']."'><div class='actparrafo'>".cortar($actividades['2'],135)."</div><div class='overlay3'><div class='text3'>".cortar($actividades['1'],30)."</br></br><a class='link' href='display.php?noticia=".$actividades['0']."'>LEER MAS</a><div class='icon'><a href='modificarnoti.php?noticia=".$actividades[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti?noticia=".$actividades['0']."'><i id='bas' class='fa fa-trash'></i></a></div></div></div></div>";
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
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>
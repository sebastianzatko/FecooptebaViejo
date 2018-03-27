<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	
	sec_session_start();
	
?>
<!DOCTYPE html>
<html>
	<?php 
		
	?>
<head>
	<title>Contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="styleuser.css">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="icon" href="favicon.png" type="image/x-icon"/>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="main.js"></script>
	<style>
		#map{
			width:100%;
			height:30%;
			display:block;
		}
		.linea{
			width:100%;
			height:3%;
			
			background:#023859;
		}
		.footer{
			margin-top:3%;
		}
		.encabezao2{
			color:white;
		}
	</style>
	
	
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
					$sql = "SELECT texto FROM texto WHERE localizacion='contacto'";
					$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
					
					$contacto = mysqli_fetch_array($texto);
					if(!empty($contacto[0])){
						echo "<section class='documentos' ><div ><h1 class='encabezaox'><img src='icons/dondecontacto.png' class='iconitos'/>Donde Contactarnos?<div class='icon'><a href='contacto.php'><i id='edi' class='fa fa-pencil'></i></a></div></h1><br><div class='objtex'><p>".$contacto[0]."</p></div></div></section>";
					}
				

			
			
		?>
			
		
		
		<section class="texin">
			<center><h2 class="encabezao"><img src="icons/contacto.png" class="iconitos"/>Envianos un Correo</h2></center>
			<form action="sent.php" method="POST">
				<h3 class="consigna">Nombre:</h3>
					<input type="text" maxlength="30" class="output" required>
				<h3 class="consigna">Correo:</h3>
					<input type="text"  maxlength="50" class="output" required>
				<h3 class="consigna">Mensaje:</h3>
					<textarea rows="8" cols="42" maxlength="300" required></textarea>
				<input type="submit" name="Enviar" class="botonenviar" style="margin: 5%;">
			</form>
		</section>
		
		
		<?php
			
			
			require 'conection.php';
			$sql1 = "SELECT lat,lon FROM asociado WHERE categoria=0";
			$texto=mysqli_query($con,$sql1) or die(mysqli_error($con));
			$fila=mysqli_fetch_array($texto);
			
			if(empty($fila[0]) or empty($fila[1])){
				
			}
			else{
				echo "<hr class='linea'><div id='map'></div><hr class='linea'>";
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
	
	<script
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeDjRqDrHHpnjYrXT3lO0nwmgyNwMzcsg&callback=initMap">
		</script>
		<script
		  src="js/cargarmap.js">
		</script>
		<script>
			var map=new google.maps.Map(document.getElementById('map'),{
				center:{
					lat:<?php if(isset($fila['0'])){ echo $fila['0']; }else{ echo "-34.6162667"; } ?>,
					lng:<?php if(isset($fila['1'])){ echo $fila['1']; }else{ echo "-58.3774951"; } ?>
				},
				zoom:12
			});
			var marker=new google.maps.Marker({
			
			position:{
				lat:<?php if(isset($fila['0'])){ echo $fila['0']; }else{ echo "-34.6162667"; } ?>,
				lng:<?php if(isset($fila['1'])){  echo $fila['1']; }else{ echo "-58.3774951";} ?>
			},
			map:map,
			draggable:false
			});
			
		</script>
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
</body>
</html>
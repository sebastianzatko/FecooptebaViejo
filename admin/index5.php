<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	require "functiones.php";
	sec_session_start();
	
?>
<html>
	<head>
		<title>Noticias</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="styleuser.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="main.js"></script>
		<script src="js/filtrar.js"></script>
		
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
		<style>
			
			.slidesjs-container{
				width:100%!important;
			}
			.slidesjs-control{
				width:100%!important;
			}
			.orden{
			    position:absolute;
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
		<section class="buscar">
				<h2 class="encabezado"><img src="icons/noticias.png" class="iconitos2"/>Noticias</h2>
				<section class="buscador">
					<form class="formbus" action="busqueda.php" method="GET">
						<input name="word" type="text" size="15" maxlength="50" class="seach" placeholder="Buscar..." required maxlength='120'>
						<span class="xcom"><input type="submit" value="&#xf002" class="fa fa-input"></span>
					</form>
				</section>
				
			

			</div>
		</section>
		<br>
		<?php
					if(isset($_GET['bol'])){
						$bol=$_GET['bol'];
					}else{
						$bol=1;
					}
					
					if(isset($_GET['orden'])){
						if($_GET['orden']==1){
							if($bol==1){
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=2'>Fecha?</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}else{
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha?</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}
						}else if($_GET['orden']==2){
							if($bol==1){
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=2'>Alfabeticamente?</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}else{
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente?</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}
							
						}else if($_GET['orden']==3){
							if($bol==1){
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div><div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div><div class='relev'><a href='index5.php?orden=3&bol=2'>Relevancia?</a></div></div>";
							}else{
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia?</a></div></div>";
							}
							
						}else{
							echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=2'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
						}
					}else{
						echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=2'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
					}
					
					echo "<div></section><br>";
				
					require 'conection.php';
					$pagina=isset($_GET['pag'])? $_GET['pag'] :1;
					if($pagina=="" || $pagina=="1"){
						$pagina1=0;
					}
					else{
						$pagina1=($pagina*4)-4;
					}
					
					
					
					if(isset($_GET['orden'])){
						$order=$_GET['orden'];
						if($order==1){
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY fecha DESC limit $pagina1,4";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY fecha ASC limit $pagina1,4";
							}
						}else if($order==2){
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY titulo ASC limit $pagina1,4";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY titulo DESC limit $pagina1,4";
							}
						}else{
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY prioridad DESC limit $pagina1,4";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY prioridad ASC limit $pagina1,4";
							}
						}
					}else{
						$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY prioridad DESC limit $pagina1,4";
						$order=4;
					}
					
					
					
					$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
					if(count($texto2)!=0){
						echo "<section class='notise'";
						echo "<div id='list'>";
						$x=rand(1, 3);
						while($noticiadestacada = mysqli_fetch_array($texto2)){
							$dia=date_create($noticiadestacada['5']);
							$daa=date_format($dia,'d/m/Y');
							$titulo=cortar($noticiadestacada['1'],27);
							$sinopsis=cortar($noticiadestacada['2'],100);
							if($x==1){
								echo "<div class='contenedor-img ejemplo-3'><img src='".$noticiadestacada['3']."' /><div class='mascara'><p class='date'>".$daa."</p><h2>".$titulo."</h2><p class='date'>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a><div class='icon'><a href='modificarnoti.php?noticia=".$noticiadestacada[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti.php?noticia=".$noticiadestacada['0']."'><i id='bas' class='fa fa-trash'></i></a></div></div></div>";
								
							}elseif($x==2){
								echo "<div class='contenedor-img2 ejemplo-3'><img src='".$noticiadestacada['3']."' /><div class='mascara2'><p class='date'>".$daa."</p><h2 class='nose3'>".$titulo."</h2><p>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a><div class='icon'><a href='modificarnoti.php?noticia=".$noticiadestacada[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti.php?noticia=".$noticiadestacada['0']."'><i id='bas' class='fa fa-trash'></i></a></div></div></div>";
								
							}elseif($x==3){
								echo "<div class='contenedor-img3 ejemplo-3'><img src='".$noticiadestacada['3']."' /><div class='mascara3'><p class='date'>".$daa."</p><h2>".$titulo."</h2><p>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a><div class='icon'><a href='modificarnoti.php?noticia=".$noticiadestacada[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti?noticia.php=".$noticiadestacada['0']."'><i id='bas' class='fa fa-trash'></i></a></div></div></div>";
								
							}
							if($x==3){
								$x=1;
							}else{
								$x=$x+1;
							}
						}
						echo "</div>";
						
						echo "<br><br>";
						$sql2 = "SELECT id_noticia FROM noticia";
						$res=mysqli_query($con,$sql2) or die(mysqli_error($con));
						$countador=mysqli_num_rows($res);
						$a=$countador/4;
						$a= ceil($a);
						echo "<div class='rapido'>";
						for($b=1;$b<=$a;$b++){
							echo "<div class='nmros'><a href='index5.php?pag=".$b."&orden=".$order."&bol=".$bol."' style=' text-decoration:none; '>".$b."</a></div>";
						}
						echo "</div>";
						echo "</section>";
					}else{
						
					}
				?>
			
		</section>
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
		</section>
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>
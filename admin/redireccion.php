<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="styleuser.css"/>
		<link href="estilo.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="main.js"></script>
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
		<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
		<style>
			.newtabla{
				margin-top:20px;
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
		<table class="newtabla" >
			<tr>
				<th>Crear</th>
				<th>Modificar</th>
				<th>Eliminar</th>
				<th>Cambiar Relevancia</th>
			</tr>
			<tr>
				<td><a href="nuevanoti.php">Noticia</a></td><td><a href="contacto.php">Contacto</a></td><td><a href="eliminarnoticia.php">Noticia</a></td><td><a href="noticiaprioridad.php">Noticia</a></td>
			</tr>
			<tr>
				<td><a href="crearasociado.php?cate=1">Asociado</a></td><td><a href="guardarobjetivos.php">Objetivos</a></td><td><a href="eliminarasociados.php">Asociado</a></td><td><a href="prioridadnoticiadestacada.php">Noticia Destacada</a></td>
			</tr>
			<tr>
				<td><a href="crearasociado.php?cate=2">Coopteba</a></td><td><a href="historia.php">Historia</a></td><td><a href="eliminarasociados.php">Coopteba</a></td><td><a href="prioridadnoticiaslider.php">Noticia Slider</a></td>
			</tr>
			<tr>
				<td><a href="guardardocumento.php">Documento</a></td><td><a href="modificarpublicacion.php">Publicaciones</a></td><td><a href="eliminardoc.php">Documento</a></td><td><a href="documentoprioridad.php">Documento</a></td>
			</tr>
			<tr>
				<td><a href="crearcomision.php">Comision</a></td><td><a href="modificarcomision.php">Comision</a></td><td><a href="eliminarcomision.php">Comision</a></td><td><a href="legislacionprioridad.php">Legislacion</a></td>
			</tr>
			<tr>
				<td><a href="publicaciones.php">Publicacion</a></td><td><a href="modificarnoticia.php">Noticia</a></td><td><a href="eliminarpublicacion.php">Publicacion</a></td><td><a href=""></a></td>
			</tr>
			<tr>
				<td><a href=""></a></td><td><a href="modificarasociado.php">Asociado</a></td><td><a href="eliminarseccion.php">Seccion</a></td><td></td>
			</tr>
			<tr>
				<td><a href=""></a></td><td><a href="modificarasociado.php">Coopteba</a></td><td><a href=""></a></td><td></td>
			</tr>
			<tr>
				<td><a href=""></a></td><td><a href="modificardocumento.php">Documento</a></td><td><a href=""></a></td><td></td>
			</tr>
			<tr>
				<td><a href=""></a></td><td><a href="publicacionprincipal.php">Pop-up</a></td><td><a href=""></a></td><td></td>
			</tr>
			<tr>
				<td><a href=""></a></td><td><a href="documentostexto.php">Texto Documentos</a></td><td><a href=""></a></td><td></td>
			</tr>
			<tr>
				<td><a href=""></a></td><td><a href="documentostexto.php">Texto Legislacion</a></td><td><a href=""></a></td><td></td>
			</tr>
			<tr>
				<td><a href=""></a></td><td><a href="vinculosasociados.php">Vinculos Asociados</a></td><td><a href=""></a></td><td></td>
			</tr>
		</table>
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>
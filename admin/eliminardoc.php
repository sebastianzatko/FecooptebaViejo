<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>

<html>
	<head>
		<title>Borrar Documentos</title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
		<script src="jquery-3.2.1.js"></script>
		<script src="notify.js"></script>
		<link rel="stylesheet" href="styleuser.css"/>
		<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
		<style>
			.chiquito{
				width:100px;
				height:100px;
			}
			.divtabla1{
				width:45%!important; 
				height:60%!important;
				overflow-y: scroll!important;
				display: inline!important;
				font-family: 'Montserrat', sans-serif!important;
			}
			.checkatr{
				width:30px;
				height:30px;
				background:#006bbd;
			}
			.tablaatr{
				width:100%;
			}
			#izq{
				float:right;
			}
			#der{
				float:left;
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
		<form method="POST" action="deletedoc.php">
			<div class="divtabla1" style="margin-bottom: 10%; margin-top: 7%;background: #f5f5f5;padding: 3%;" id="der">
				<center><h2 class="h2atr">Documentos</h2></center>
				<table class="tablaatr">
					<tr>
						<th class="thatr">Nombre del Documento</th>
						<th class="thatr">Eliminar</th>
						
					</tr>
					<?php
						require 'conection.php';
						$sql = "SELECT id_documento,nombre,rutadoc FROM documento WHERE categoria=1";
						$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
						while($documento = mysqli_fetch_array($texto)){
							echo "<tr><td class='tituloatr'>".$documento['1']."</td><td><input class='checkatr' type='checkbox' name='documentos[]' value='".$documento['0']."'></td></tr>";
						}
					?>
				</table>
			</div>
			<div class="divtabla1" style="margin-bottom: 10%; margin-top: 7%;background: #f5f5f5;padding: 3%;" id="izq">
				<center><h2 class="h2atr">Legislacion</h2></center>
				<table class="tablaatr">
					<tr>
						<th class="thatr">Nombre del Documento</th>
						<th class="thatr">Eliminar</th>
						
					</tr>
					<?php
						require 'conection.php';
						$sql = "SELECT id_documento,nombre,rutadoc FROM documento WHERE categoria=2";
						$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
						while($documento = mysqli_fetch_array($texto)){
							echo "<tr><td class='tituloatr'>".$documento['1']."</td><td><input class='checkatr' type='checkbox' name='documentos[]' value='".$documento['0']."'></td></tr>";
						}
					?>
				</table>
			</div>
			<div class="botons">
				<input class="canc" type="button" value="Cancelar" onclick="window.history.back()" name="action"/>
				<input class="boton" type="submit" />
			</div>
		</form>
		<script>
			var $_GET=[];
			window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
			var nombrevar=$_GET['var'];
			console.log(nombrevar);
			if (nombrevar == 1){
				$.notify("Se han eliminado los datos correctamente","success");
			}
			else if (nombrevar == 2){
				$.notify("Ha ocurrido un error","error");
			}
			else if (nombrevar == 3){
				$.notify("No se han realizado cambios","warn");
			}
			else {

			}
		</script>
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>
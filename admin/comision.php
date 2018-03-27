<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<html>
	<head>
			<meta charset="UTF-8"/>
			<script src="jquery-3.2.1.js"></script>
			
			<link href="estilo.css" rel="stylesheet" type="text/css" />
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
			<link rel="stylesheet" href="styleuser.css"/>
			<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
			<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
			
			<script src="https://code.jquery.com/jquery-latest.js"></script>
			<script src="main.js"></script>
			
			<script src="mainbarra.js"></script>
			<link rel="stylesheet" href="barrastyle.css">
			<script src="notify.js"></script>
	</head>
	<body>
	<?php if (login_check($mysqli) == true) : ?>
	<section class="oja">
			<span id="botonmenu" class="fa fa-bars"></span>
            <nav class="barra">
                <ul class="lista1">
                    <li class="inicio">Opciones Modo Administrador</li>
					<li menu="0"><a href="redireccion.php"><i class="fa fa-home"></i> Home</a>
                    <li class="item-sublista" menu="1"><a href="#"><i class="fa fa-plus-square"></i> Crear</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-plus-square"></i> Crear</li>
                            <li class="atras">Back</li>
                            <li><a href="nuevanoti.php"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                            <li><a href="crearasociado.php?cate=1"><i class="fa fa-user-plus"></i> Asociado</a></li>
                            <li><a href="crearasociado.php?cate=2"><i class="fa fa-user-plus"></i> Coopteba</a></li>
                            <li><a href="guardardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
                        </ul>
                    </li>    
                    <li class="item-sublista" menu="2"><a href="#"><i class="fa fa-edit"></i> Modificar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-edit"></i> Modificar</li>
                            <li class="atras">Back</li>
                            <li><a href="modificarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Asociado</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Coopteba</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
                        </ul>
                    </li>
					<li class="item-sublista" menu="3"><a href="#"><i class="fa fa-th-large"></i> Secciones</a>
						<ul class="sublista">
							<li class="inicio"><i class="fa fa-th-large"></i> Secciones</li>
                            <li class="atras">Back</li>
							<li><a href="contacto.php"><i class="fa fa-phone-square"></i> Contacto</a></li>
                            <li><a href="guardarobjetivos.php"><i class="fa fa-line-chart"></i> Objetivos</a></li>
                            <li><a href="historia.php"><i class="fa fa-archive"></i> Historia</a></li>
                            <li><a href="publicaciones.php"><i class="fa fa-image"></i> Publicaciones</a></li>
                            <li><a href="comision.php"><i class="fa fa-users"></i> Comision</a></li>
						</ul>
					</li>
                    <li class="item-sublista" menu="4"><a href="#"><i class="fa fa-minus-square"></i> Eliminar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-minus-square"></i> Eliminar</li>
                            <li class="atras">Back</li>
                            <li><a href="eliminarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Asociado</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Coopteba</a></li>
                            <li><a href="eliminardoc.php"><i class="fa fa-file"></i> Documento</a></li>
                        </ul>
                    </li>
                    <li class="item-sublista" menu="5"><a href="#"><i class="fa fa-sort"></i> Cambiar Relevancia</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-sort"></i> Cambiar Relevancia</li>
                            <li class="atras">Back</li>
                            <li><a href="noticiaprioridad.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="prioridadnoticiadestacada.php"><i class="fa fa-newspaper-o"></i> Noticia Destacada</a></li>
                            <li><a href="prioridadnoticiaslider.php"><i class="fa fa-newspaper-o"></i> Noticia Slider</a></li>
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
				<li ><a href="index1.php"><img src="icons/casadenegro.svg" class="logo56" />INICIO</a></li>
				<li ><a href="index2.php"><img src="icons/somosnegros.svg" class="logonosotros" />SOBRE NOSOTROS</a></li>
				<li ><a href="index3.php"><img src="icons/documentonegro.svg" class="logodocumento" />DOCUMENTOS</a></li>
				<li ><a href="index4.php"><img src="icons/comisionesnegro.svg" class="logocoopteba" />COMISIONES</a></li>
				<li ><a href="index5.php"><img src="icons/noticianegro.svg" class="logonoticia" />NOTICIAS</a></li>
				<li ><a href="index6.php"><img src="icons/coopnegro.svg" class="logocoopteba" />COOPTEBAS</a></li>
				<li ><a href="index7.php"><img src="icons/vinculonegro.svg" class="logocontacto" />VINCULOS</a></li>
				<li ><a href="index8.php"><img src="icons/contactonegro.svg" class="logocontacto" />CONTACTO</a></li>
						
				</ul>		
			</nav>
		</div>	
		</header>
	<?php
		$quey="SELECT texto FROM texto WHERE localizacion='comision'";
		require 'conection.php';
		$texto=mysqli_query($con,$quey) or die(mysqli_error($con));
		$fila=mysqli_fetch_array($texto);
	?>

		<form action="POST" method="savecomision.php">
		<hr style='margin-top:3%;width:90%;margin-left:5%;margin-bottom:5%; '>
			<textarea name="comision"><?php echo $fila['0']; ?></textarea>
			<div class="botons">
				<input class="canc" type="button" value="Cancelar" onclick="window.history.back()" name="action"/>
				<input class="boton" type="submit" value="Cargar"/>
			</div>
		</form>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
		
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>
		<script>
			var $_GET=[];
			window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
			var nombrevar=$_GET['var'];
			console.log(nombrevar);
			if (nombrevar == 1){
				$.notify("Se han cargado los datos correctamente","success");
			}
			else if (nombrevar == 2){
				$.notify("Ha ocurrido un error","error");
			}
			else {

			}
		</script>
		
		<script> $(function() { $('textarea').froalaEditor() }); </script>		
	</body>
</html>
<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
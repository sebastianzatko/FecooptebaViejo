<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	require "functiones.php";
	sec_session_start();
	
?>
   <?php
	require 'conection.php';
	$id=$_GET['noticia'];
	$sql = "SELECT id_noticia,titulo,texto,sinopsis,portada,fecha FROM noticia WHERE id_noticia='$id'";
	$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
	$fila=mysqli_fetch_array($texto);
  
  ?>
 <html>

        </section>
	 <head>
	 <?php
			$titulo=$fila[1];
			if(!empty($titulo)){
				echo "<title>".$titulo."</title>";
			}else{
				echo "<title>Noticia Desconocida</title>";
			}
		
		?>
		<link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />
		<meta property="fb:app_id" content="1994418274173450" />
		<meta property="fb:admins" content="10207372383019635"/>
		
		
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="styleuser.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="main.js"></script>
		<style>
		
		.date{
			color: #023859;
    		margin: 3%;
		}
		.encabezao2{
			color:white;
		}
		</style>
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
		<script type="text/javascript">
		function codeAddress() {
			var lol=document.URL;
			document.getElementById("jinju").src='https://www.facebook.com/plugins/share_button.php?href='+lol+'&layout=button_count&size=small&mobile_iframe=true&appId=1994418274173450&width=123&height=20';
		}
		window.onload = codeAddress;
		</script>
		<link rel="stylesheet" href="stylee.css">
	 </head>
	 <body>
	 <?php if (login_check($mysqli) == true) : ?>
	 <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId=1994418274173450&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script></div>
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
		<section class="contenidonoticia">
			<div class="fr-view">
				<?php 
					
					if(empty($fila)){
						echo "<section class='error404'><img src='images/202381_poster_.png' alt='Logotipo de HTML5' class='errorimg' ><div CLASS='errorcaja'><h2>Opps! Lo sentimos</h2><p>No encontramos lo que buscabas</p></div></section> ";
					}else{
						$dia=date_create($fila['5']);
						$daa=date_format($dia,'d/m/Y');
						echo "<section class='cuadronoticia'><img src='".$fila[4]."' class='detalleportada' /><center><h2 class='titulodetalle'>".$titulo."</h2></center><p class='date'>".$daa."</p><div class='noticiadetalle'>".$fila[3]."</div><div class='textodetalle'>".$fila[2]."</div><div class='icon'><a href='modificarnoti.php?noticia=".$fila[0]."'><i id='edi' class='fa fa-pencil'></i></a><a href='quickdeletenoti.php?noticia=".$id."'><i id='bas' class='fa fa-trash'></i></a></div></section>";
					}
				?>
				
				
				
					

					<?php 
						$sql1="SELECT id_noticia,titulo,portada FROM noticia WHERE id_noticia!='$id' ORDER BY prioridad LIMIT 4";
						$consulta=mysqli_query($con,$sql1) or die(mysqli_error($con));
						$lol=mysqli_fetch_array($consulta);
						if(count($lol)!=0){
							echo "<section class='otrasnoti'><center><h3 class='otrasnotitulo'>Otras Noticias</h3></center>";
							$otravez=mysqli_query($con,$sql1) or die(mysqli_error($con));
							while($noticias = mysqli_fetch_array($otravez)){
								echo "<div class='fija3'><img src='".$noticias['2']."' class='detalleimagen'/><div class='escondido'><p class='tituloextra'>".cortar($noticias['1'],30)."</p><a class='see' href='display.php?noticia=".$noticias['0']."'>LEER</a></div></div>";
							}
							echo "</div></br></section>";
						}
					?>
			<section class="undivparamarkzuckerberg">		
					<div class="fb-comments" data-href="www.pruebaskubocuantico.com.ar/display.php?noticia=<?php echo $id; ?>" data-numposts="5"></div>
					</section>		
							<?php
								$sql3="SELECT id_asociado FROM noticiaasociado WHERE id_noticia='$id'";
								$consulta4=mysqli_query($con,$sql3) or die(mysqli_error($con));
								$check=mysqli_fetch_array($consulta4);
								if(!empty($check)){
									echo "<section class='relacionados'><h2 class='encabezao2'>Entes Relacionados</h2>";
									$consulta6=mysqli_query($con,$sql3) or die(mysqli_error($con));
									while($check=mysqli_fetch_array($consulta6)){
										$sql5="SELECT id_asociado,nombre,logo FROM asociado WHERE id_asociado='".$check[0]."'";
										$consulta5=mysqli_query($con,$sql5) or die(mysqli_error($con));
										while($entes = mysqli_fetch_array($consulta5)){
											echo "<div class='cajaasociados'><img class='imgasociados' src='".$entes[2]."'/><div class='overlay'><div class='text'>".cortar($entes[1],30)." <br><a href='verasociado.php?asociado=".$entes[0]."' class='link'>VER</a></div></div></div>";
										}
									}
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
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	 </body>
 </html>
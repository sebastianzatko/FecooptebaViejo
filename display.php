   <?php
	require 'admin/conection.php';
	require "admin/functiones.php";
	$id=$_GET['noticia'];
	$sql = "SELECT titulo,texto,sinopsis,portada,fecha FROM noticia WHERE id_noticia='$id'";
	$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
	$fila=mysqli_fetch_array($texto);
  
  ?>
 <html>
	 <head>
	 <?php
			$titulo=$fila[0];
			if(!empty($titulo)){
				echo "<title>".$titulo."</title>";
			}else{
				echo "<title>Noticia Desconocida</title>";
			}
		
		?>
		<link href="../admin/css/froala_style.min.css" rel="stylesheet" type="text/css" />
		
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="admin/styleuser.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="admin/main.js"></script>
		<style>
		
		.date{
			color:#FDECEF;
		
		}
		.encabezao2{
			color:white;
		}
		</style>
		<style>
			.compartir{margin-top:3%}
		</style>
		<link rel="stylesheet" href="admin/stylee.css">
		<script type="text/javascript">
		function codeAddress() {
			var lol=document.URL;
			document.getElementById("jinju").src='https://www.facebook.com/plugins/share_button.php?href='+lol+'&layout=button_count&size=small&mobile_iframe=true&appId=1994418274173450&width=123&height=20';
		}
		window.onload = codeAddress;
		</script>
	 </head>
	 <body>
	  <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId=1994418274173450&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script></div>
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
		<section class="contenidonoticia">
			<div class="fr-view">
				<?php 
					$correcion=0;
					if(empty($fila)){
						echo "<section class='error404'><img src='admin/images/202381_poster_.png' alt='Logotipo de HTML5' class='errorimg' ><div CLASS='errorcaja'><h2>Opps! Lo sentimos</h2><p>No encontramos lo que buscabas</p></div></section> ";
						$correcion=1;
					}else{
						$dia=date_create($fila['4']);
						$daa=date_format($dia,'d/m/Y');
						echo "<section class='cuadronoticia'><img src='admin/".$fila[3]."' class='detalleportada' /><center><h2 class='titulodetalle'>".$titulo."</h2></center><p class='date'>".$daa."</p><div class='noticiadetalle'>".$fila[2]."</div><div class='textodetalle'>".$fila[1]."</div><div class='compartir'><iframe id='jinju' src='' width='123' height='20' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowTransparency='true'></iframe><a href='https://twitter.com/share?ref_src=twsrc%5Etfw' class='twitter-share-button' data-show-count='false'>Tweet</a><script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script></div></section>";
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
								echo "<div class='fija3'><img src='admin/".$noticias['2']."' class='detalleimagen'/><div class='escondido'><p class='tituloextra'>".cortar($noticias['1'],30)."</p><a class='see' href='display.php?noticia=".$noticias['0']."'>LEER</a></div></div>";
							}
							echo "</div></br></section>";
						}
					?>
				
			</div>
		</section>
		<section class="undivparamarkzuckerberg">
				<?php
				if($correcion!=1){
					echo "<div class='fb-comments' data-href='https://fecoopteba.coop/display.php?noticia=<?php echo $id; ?>' data-numposts='5'></div>";
				}else{
					
				}
				
				?>
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
											echo "<div class='cajaasociados'><img class='imgasociados' src='admin/".$entes[2]."'/><div class='overlay'><div class='text'>".substr($entes[1],0,30)." <br><a href='verasociado.php?asociado=".$entes[0]."' class='link'>VER</a></div></div></div>";
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
			<p class="kubo">&copy KuboCuantico</p>
			</footer>
		</section>
	 </body>
 </html>
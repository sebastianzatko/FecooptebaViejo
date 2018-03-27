<?php
	$ver=$_GET["asociado"];
	require 'admin/conection.php';
	$sql = "SELECT nombre,matricula,logo,direccion,telefono,mail,paginaweb,lat,lon,facebook,twitter,instagram,yotubue FROM asociado WHERE id_asociado='$ver'";
	$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
	$fila=mysqli_fetch_array($texto);
	

?>
<html>
    <head>
	<?php
			$nombre=$fila[0];
			if(!empty($nombre)){
				echo "<title>".$nombre."</title>";
			}else{
				echo "<title>Asociado Desconocido</title>";
			}
		
		?>
		<link rel="stylesheet" href="admin/styleuser.css" />
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans:300|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="admin/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<link rel="stylesheet" href="admin/stylee.css">
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
                
				if(empty($fila)){
					echo "<section class='error404'><img src='admin/images/202381_poster_.png' alt='Logotipo de HTML5' class='errorimg' ><div CLASS='errorcaja'><h2>ERROR 404. Not Found</h2><p>Archivo no encontrado.</p></div></section>";
				}else{
					if($fila[8]==0 && $fila[7]==0){
						echo "<section class='detalleasociado'><img class='imgcoop23' src='admin/".$fila[2]."' /><div><div class='data'><h2 clss='nombredetalleasociado'>".$nombre."</h2><hr>";
					}else{
						echo "<section class='detalleasociado'><img class='imgcoop23' src='admin/".$fila[2]."' /><div class='mapa' id='map'></div><div><div class='data'><h2 clss='nombredetalleasociado'>".$nombre."</h2><hr>";
					}
					if(!empty($fila['1'])){
						echo "<span class='spandata'><img class='icondata' src='img/licence.png'><p class='pdata'>Matricula:<b>".$fila['1']."</b></p></span>"; 
						} 
					if(!empty($fila['4'])){
						echo "<span class='spandata'><img class='icondata' src='img/telephone.png'><p class='pdata'>Telefono:<b>".$fila['4']."</b></p></span>"; 
						} 
					if(!empty($fila['3'])){
						echo "<span class='spandata'><img class='icondata' src='img/home.png'><p class='pdata'>Direccion:<b>".$fila['3']."</b></p></span>"; 
						}
					if(!empty($fila['5'])){ 
						echo "<span class='spandata'><img class='icondata' src='img/mail2.png'><p class='pdata'>Correo:<b>".$fila['5']."</b></p></span>";
						} 
					if(!empty($fila['6'])){
						echo "<span class='spandata'><img class='icondata' src='img/www2.png'><p class='pdata'>Pagina Web:<b>".$fila['6']."</b></p></span>"; 
						}
					if(!empty($fila['9'])){
						echo "<span class='spandata'><img class='icondata' src='img/facebook.png'><p class='pdata'>Facebook:<b>".$fila['9']."</b></p></span>"; 
					}
					if(!empty($fila['10'])){
						echo "<span class='spandata'><img class='icondata' src='img/twitter.png'><p class='pdata'>Twitter:<b>".$fila['10']."</b></p></span>"; 
					}
					if(!empty($fila['11'])){
						echo "<span class='spandata'><img class='icondata' src='img/insta.png'><p class='pdata'>Instagram:<b>".$fila['11']."</b></p></span>"; 
					}
					if(!empty($fila['12'])){
						echo "<span class='spandata'><img class='icondata' src='img/yotube.png'><p class='pdata'>Youtube:<b>".$fila['12']."</b></p></span>"; 
					}
					echo "</div></section>";
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
		  src="admin/js/cargarmap.js">
		</script>
		<script>
			var map=new google.maps.Map(document.getElementById('map'),{
				center:{
					lat:<?php echo $fila['7'] ?>,
					lng:<?php echo $fila['8'] ?>
				},
				zoom:12
			});
			var marker=new google.maps.Marker({
			
			position:{
				lat:<?php echo $fila['7'] ?>,
				lng:<?php echo $fila['8'] ?>
			},
			map:map,
			draggable:false
			});
			
		</script>
    </body>
</html>
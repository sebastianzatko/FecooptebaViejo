<?php
	require "admin/functiones.php";
?>
<html>
	<head>
		<title>Noticias-Resultados</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="admin/styleuser.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="admin/main.js"></script>
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
		<section class="buscar">
				<h2 class="encabezado"><img src="admin/icons/noticiasazul.png" class="iconitos2"/>Noticias</h2>
				<section class="buscador">
					<form class="formbus" action="busqueda.php" method="GET">
						<input name="word" type="text" size="15" maxlength="50" class="seach" placeholder="Buscar...">
						<span class="xcom"><input type="submit" value="&#xf002" class="fa fa-input"></span>
					</form>
				</section>
				
			</div>
		</section>
		<br>
		<?php
					$pagina=isset($_GET['pag'])? $_GET['pag'] :1;
					
					if($pagina=="" || $pagina=="1"){
						$pagina1=0;
					}
					else{
						$pagina1=($pagina*4)-4;
					}
					
					$palabra=$_GET['word'];
					
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
				
				?>

			</div>
		</section>
		<br>
		<section class="notise">
				<?php
				
					
					
					
					
					
					require 'admin/conection.php';
					
					
					
					
					if(isset($_GET['orden'])){
						$order=$_GET['orden'];
						if($order==1){
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%' ORDER BY fecha DESC limit $pagina1,4";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%' ORDER BY fecha ASC limit $pagina1,4";
							}
						}else if($order==2){
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%' ORDER BY titulo ASC limit $pagina1,4";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%' ORDER BY titulo DESC limit $pagina1,4";
							}
						}else{
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%' ORDER BY prioridad DESC limit $pagina1,4";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%' ORDER BY prioridad ASC limit $pagina1,4";
							}
						}
					}else{
						$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%'  ORDER BY prioridad DESC limit $pagina1,4";
						$order=4;
					}
					
					
					
					$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
					
					
					$x=rand(1, 3);
					while($noticiadestacada = mysqli_fetch_array($texto2)){
						$dia=date_create($noticiadestacada['5']);
						$daa=date_format($dia,'d/m/Y');
						if($x==1){
								echo "<div class='contenedor-img ejemplo-3'><img src='admin/".$noticiadestacada['3']."' /><div class='mascara'><p class='date'>".$daa."</p><h2>".cortar($noticiadestacada['1'],27)."</h2><p class='date'>".cortar($noticiadestacada['2'],100)."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}elseif($x==2){
								echo "<div class='contenedor-img2 ejemplo-3'><img src='admin/".$noticiadestacada['3']."' /><div class='mascara2'><p class='date'>".$daa."</p><h2 class='nose3'>".cortar($noticiadestacada['1'],27)."...</h2><p>".cortar($noticiadestacada['2'],100)."...</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}elseif($x==3){
								echo "<div class='contenedor-img3 ejemplo-3'><img src='admin/".$noticiadestacada['3']."' /><div class='mascara3'><p class='date'>".$daa."</p><h2>".cortar($noticiadestacada['1'],27)."...</h2><p>".cortar($noticiadestacada['2'],100)."...</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}
							if($x==3){
								$x=1;
							}else{
								$x=$x+1;
							}
					}
					
					echo "<br><br>";
					$sql2 = "SELECT id_noticia FROM noticia WHERE texto LIKE '%".$palabra."%' OR titulo LIKE '%".$palabra."%'";
					$res=mysqli_query($con,$sql2) or die(mysqli_error($con));
					$countador=mysqli_num_rows($res);
					
					$a=$countador/4;
					$a= ceil($a);
					echo "<div class='rapido'>";
					for($b=1;$b<=$a;$b++){
						echo "<div class='nmros'><a href='busqueda.php?pag=".$b."&orden=".$order."&bol=".$bol."&word=".$palabra."' style=' text-decoration:none; '>".$b."</a></div>";
					}
					echo "</div>";
					
					
				
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
	</body>
</html>
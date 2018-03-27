<html>
	<head>
		<title>Comisiones</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="admin/styleuser.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="admin/main.js"></script>
		
		<style>
			.encabezao2{
				margin-bottom:5%;
			}
			.slidesjs-container{
				width:100%!important;
			}
			.slidesjs-control{
				width:100%!important;
			}
			div.text-container {
				margin: 0 auto;
				width: 75%;
				background: #023859;
				padding: 2%;
				color: white;
				margin-bottom: 1%;   
				font-family: 'Montserrat', sans-serif;
			}

			.hideContent {
				overflow: hidden;
				line-height: 1em;
				height: 2em;
			}

			.showContent {
				line-height: 1em;
				color:black;
				background:#f5f5f5 ;
				background-size: 100% auto;
				background-repeat: no-repeat;
				padding: 2%;
				background-position: center;
			}
			.showContent{
				height: auto;
			}

			h1 {
				font-size: 24px;        
			}
			p {
				padding: 10px 0;
			}
			.show-more {
				padding: 10px 0;
				text-align: center;
			}
			
			.encabezao2{
				color:#006bbd;
			}
			
			
		</style>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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
					require 'admin/conection.php';
					$sql = "SELECT content,nombrecomision FROM comision";
					$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
					if(count($texto)!=0){
						echo "<h2 class='encabezao2' style='{color:blue;!important margin-top:3%;MARGIN-BOTTOM: 5%;!important}'><img src='icons/comisionazul.png' class='iconitos2'/>Comisiones</h2>";
						while($comision = mysqli_fetch_array($texto)){;
							
							
						echo "<div class='text-container'><h3>".$comision[1]."<h3><div class='content hideContent' >".$comision[0]."</div><div class='show-more'><a href='#'style='text-decoration: none;color: grey;text-transform: uppercase;font-family: 'Montserrat', sans-serif;' >Mostrar</a></div></div>";
							
						}
					}else{
						
					}
				?>
				<script>
					$(".show-more a").on("click", function() {
						var $this = $(this); 
						var $content = $this.parent().prev("div.content");
						var linkText = $this.text();  
							
						
						if(linkText === "Mostrar"){
							linkText = "Esconder";
							$content.switchClass("hideContent", "showContent", 400);
						} else {
							linkText = "Mostrar";
							$content.switchClass("showContent", "hideContent", 400);
						};

						$this.text(linkText);
					});
				</script>
		
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
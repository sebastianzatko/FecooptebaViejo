<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<html>
	<head>
		<title>FeCoopteba</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans:300|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Lato|Noto+Serif" rel="stylesheet">
		<link rel="stylesheet" href="styleedicion.css"/>
		<link rel="stylesheet" href="styleuser.css"/>
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="main.js"></script>
		
		
	</head>
	<body>
	<?php if (login_check($mysqli) == true) : ?>
		<header>
		<div >
			<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
			</div>
			
				<nav>
				<div class="logo"><a href="index1.php"> <img src="logonav.png" class="logo2" /> </a>	</div>
					<ul>
							<li ><a href="index1.php"><span class="icon-house"></span>INICIO</a></li>
							<li ><a href="index2.php"><span class="icon-suitcase"></span>SOBRE NOSOTROS</a></li>
							<li ><a href="index3.php"><span class="icon-house"></span>DOC/LEG</a></li>
							<li ><a href="index4.php"><span class="icon-suitcase"></span>COMISIONES</a></li>
							<li ><a href="index5.php"><span class="icon-house"></span>NOTICIAS</a></li>
							<li ><a href="index6.php"><span class="icon-suitcase"></span>ASOCIADOS</a></li>
							<li ><a href="index7.php"><span class="icon-house"></span>COOPTEBAS</a></li>
							<li ><a href="index8.php"><span class="icon-suitcase"></span>CONTACTO</a></li>
							
					</ul>		
				</nav>
		</div>	
		</header>
		<div>
			<div>
			 <img src="img/photo1.jpg" class="principalmain" />
				<div class="hijomain">
					
					<form action="savecoopteva.php" method="POST" enctype="multipart/form-data" >
						<div class="user"><h2 class="mensaje">Nombre de Coopteba</h2><input type="text" placeholder="Nombre de Usuario" name="nombre"/></div>
						<div class="user"><h2 class="mensaje">Matricula</h2><input type="text"  name="matricula"/></div>
						<div class="user"><h2 class="mensaje">Telefono de Coopteba</h2><input type="text"  name="telefono"/></div>
						<div class="user"><h2 class="mensaje">Email</h2><input type="text"  name="mail"/></div>
						<div class="user"><h2 class="mensaje">Pagina Web</h2><input type="text" name="mail"/></div>
						<div class="user"><h2 class="mensaje">Direccion</h2><input type="text" name="dirreccion"/></div>
						
						<div></div>
						<input class="fantasma"/>
						<input class="fantasma"/>    
						
					
				
			
							
							
							<div class="user3"><h2 class="mensaje">Logo de Coopteba</h2><input type="file" id="files" name="files[]" />
								<br />
							<output id="list"></output>
							</div>
							<div class="user4"><h2 class="mensaje">MAPS</h2></div>
							<input type="submit" class="logon" value="Ingresar" />
							
						</form>
					</div>
				</div>	
		</div>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.slides.js"></script>
		<script >
			$(function(){
			  $(".slides").slidesjs({
				play: {
				  active: true,
					// [boolean] Generate the play and stop buttons.
					// You cannot use your own buttons. Sorry.
				  effect: "slide",
					// [string] Can be either "slide" or "fade".
				  interval: 3000,
					// [number] Time spent on each slide in milliseconds.
				  auto: true,
					// [boolean] Start playing the slideshow on load.
				  swap: true,
					// [boolean] show/hide stop and play buttons
				  pauseOnHover: false,
					// [boolean] pause a playing slideshow on hover
				  restartDelay: 2500
					// [number] restart delay on inactive slideshow
				}
			  });
			});
					
		</script>
		<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>
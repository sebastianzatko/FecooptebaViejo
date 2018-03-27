<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();

	if (login_check($mysqli) == true) {
		$logged = 'in';
	} else {
		$logged = 'out';
	}
	
?>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans:300|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<title>Fecoopteba-Log In</title>
		<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
		<script type="text/JavaScript" src="js/sha512.js"></script> 
		<script type="text/JavaScript" src="js/forms.js"></script> 
		<link rel="stylesheet" href="styleslog.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
		<script src="notify.js"></script>
	</head>
	<body>
		
		<section class="recuadro">
			<form method="POST" action="includes/process_login.php" name="login_form" autocomplete="off">
				 <img src="logonav.svg" class="logo69"/> 
				
				<h2 class="mensaje">Nombre de Usuario</h2><input type="text" class="user" placeholder="Nombre de Usuario" name="email" autocomplete="off" maxlength="30"/>
				<h2 class="mensaje">Contraseña</h2><input type="password" class="contra" placeholder="Contraseña" name="password"  id="password" autocomplete="off" maxlength="30"/>
				<input type="submit" class="logon" value="Ingresar" onclick="formhash(this.form, this.form.password);" />
			</form>
		</section>
	</body>
	<script>
			var $_GET=[];
			window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
			var nombrevar=$_GET['error'];
			console.log(nombrevar);
			
			if (nombrevar == 1){
				$.notify("Usuario incorrecto","error");
			}
			else {

			}
		</script>

</html>
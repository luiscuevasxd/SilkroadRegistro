<!DOCTYPE html>
<html>
<head>
	<title>Completacion - Silkroad Slifer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonticons/css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/completar_reg.js"></script>
	</head>
<body>



<?php
	$codigo_email=$_POST['verificar'];
/*	if(user::accountExists($_POST['username']) == 1){
		header("accountExists.php");.
	}
	else {
		core::$sql -> exec("insert into TB_User (StrUserID,password,reg_ip,sec_content,sec_primary, email) values('$_POST[username]','".md5($_POST['contra'])."','".$_SERVER['REMOTE_ADDR']."','3','3','$_POST[email]')");
		
		$nJID = user::accountJIDbyUsername($_POST['username']);
		$szAvatarDefault = "img/noavatar.png";

		core::$sql -> exec("insert into SK_Silk(JID,silk_own,silk_gift,silk_point) values('$nJID','0','0','0')");

		core::$sql -> exec("insert into srcms_userprofiles(JID,gender,skype,sec_question,sec_answer,avatar,whois, ispublic) values('$nJID','0','None','$_POST[p_secreta]','$_POST[r_secreta]','$szAvatarDefault','user','1')");
		
	}

*/
?>
<form method="post" id="form-reg3" class="form-reg" action="verificar.php" style="background-image: url(img/cabezado_reg.jpg); background-repeat: no-repeat; background-size: 100% 15%;">
	<center><img src="img/confirmacion-email.png" class="img-verificacion"><br>
		<p class="reg-let">Felicitaciones: usted no es un Bot.<br>Complete el Proceso de Registro.</p></center>
	<h3 id="h3-border" align="center">Paso 3: Completacion</h3>
	<table align="center" style="width: 93%">
		<tr>
		<td><label class="reg-let">Nombre de Usuario</label></td>
		<td><label class="reg-let">Correo Electronico</label></td>
		</tr> 
		<tr>
			<td><a title="Nombre del Usuario Registrado." class="tooltip"><span class="add-on"><i class = "fa fa-user" style="color: #fff;"></i></span></a><input type="text" name="username2" placeholder="Nombre de Usuario" id="reg-user2" autocomplete="off" disabled="on" style="width: 85%"></td>
			<td><a title="Correo Electronico del usuario Registrado." class="tooltip"><span class="add-on"><i class = "fa fa-envelope-o" style="color: #fff;"></i></span></a><input type="email" name="email2" placeholder="Correo Electronico" id="reg-email2" autocomplete="off" disabled="on" style="width: 85%"></td> 
		</tr>
		<tr>
			<td><label class="reg-let">Tu Nombre</label></td>
			<td><label class="reg-let">Apodo</label></td>
		</tr>
		<tr>
			<td><a title="Nombre Real Completo del Usuario, solos se permiten letras." class="tooltip"><span class="add-on"><i class="fa fa-hand-o-right" style="color: #fff;"></i></span></a><input type="text" name="nombre" placeholder="Tu Nombre Real" id="nombre" autocomplete="off" required="on" style="width: 84%;"></td>
			<td><a title="Apodo para ser usado en nuestra sala de Chat." class="tooltip"><span class="add-on"><i class="fa fa-users" style="color: #fff;"></i></span></a><input type="text" name="apodo" placeholder="Tu Alias o Apodo" id="apodo" autocomplete="off" required="on" style="width: 85%;"></td>
		</tr>
		<tr>
		<td><label class="reg-let">Genero</label></td>
		<td><label class="reg-let">Pregunta Secreta</label></td>
		</tr>
		<tr>
			<td>
				<a title="Elige tu Genero no puede quedar vacio el campo." class="tooltip"><span class="add-on"><i class="fa fa-list" style="color: #fff;"></i></span></a><select class="m-f" id="genero" style="width: 87%;">
				<option>Selecciona una Opcion</option>
				<option value="masculino" id="masculino">Masculino</option>
				<option value="femenino" id="femenino">Femenino</option>
				</select>
			</td>
			<td><a title="Pregunta que se le hara cuando olvide su contraseña y desee recuperarla" class="tooltip"><span class="add-on"><i class="fa fa-unlock" style="color: #fff;"></i></span></a><input type="text" name="p_secreta" id="p_secreta" placeholder="Pregunta Secreta" autocomplete="off" required="on" style="width: 85%;"></td>
		</tr>
		<tr>
			<td><label class="reg-let">Respuesta Secreta</label></td>
		</tr>
		<tr>
			<td><a title="Respuesta que debe de responder para la recuperacion desu Contraseña" class="tooltip"><span class="add-on"><i class="fa fa-lock" style="color: #fff;"></i></span></a><input type="password" name="r_secreta" id="r_secreta" placeholder="Respuesta Secreta" autocomplete="off" required="on" style="width: 85%;"></td>
			<td><input type="submit" name="enviar3" class="reg-enviar1" id="reg-enviar3" value="Registro Completado" style="width: 90%"></td>
		</tr>
	</table>
</form>
</body>
</html>
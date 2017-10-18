<?php
	if ($_POST['enviar1']=='Registrarse') {
		if(user::accountExists($_POST['username']) == 1)
			{
				header("Location: accExists.php");
			}
		else{
			core::$sql -> changeDB("website");
			core::$sql -> exec("insert into TB_User(username,pw,email) values('$_POST[username]','".md5($_POST['contra'])."','$_POST[email]')");
		}
	}
// recibimos las variables por post
$username=$_POST['username'];
$email=$_POST['email'];
// Funcion para sacar el valor aleatorio
function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//llamada de funcion
$genera=generateRandomString();
echo $genera;
$enlace='https://www.facebook.com/'.$genera;
// configuramos la cabecera que llevara el correo
$titulo    = 'Código de Verificación';
$contenido = '<!DOCTYPE html>
<html>
<head>
	<title>Silkroad Slifer</title>
	<meta charset="utf-8">
	<style type="text/css">
			body{
					background: rgba(197,197,196,0.9);
			}
		.fondo-marco{
			background: rgba(235,219,182,1);
			background: -webkit-linear-gradient(top left,rgba(86,74,45,1), rgba(57,44,12,0.6));
			background: -moz-linear-gradient(top left,rgba(235,219,182,1), rgba(131,115,77,0.6));
			background: -ms-linear-gradient(top left,rgba(235,219,182,1), rgba(131,115,77,0.6));
			background: -o-linear-gradient(top left,rgba(235,219,182,1), rgba(131,115,77,0.6));
			width: 80%;
			height: 80%;
			margin: 3% auto;
			border-radius: 10px;
			padding: 5px;
			box-shadow: 0px 0px 20px rgba(86,74,45,1);
		}
		.marco{
			background: rgba(61,52,30,0.7);
			width: 80%;
			height: 80%;
			margin: 40px auto;
			padding: 20px 0px;
			border-radius: 10px;
		}
		.contenedor{
			width: 100%;
			height: 18%;
			margin:3% 0% 0% 0%;
			background: rgba(45,36,13,1);
			padding-top:3px;
		}
		.letras1{
			font-family:Vegur, "PT Sans", Verdana, Sans-serif;
			font-size: 18px;
			color: rgba(137,116,65,1);
			text-align: left;
			padding-left: 40px;
			padding-bottom: 10px;
		}
		.letras2{
			font-family:Vegur, "PT Sans", Verdana, Sans-serif;
			font-size: 14px;
			color: rgba(137,116,65,1);
			text-align: left;
			padding-left: 40px;
			padding-bottom: 10px;
		}
		.letra3{
			font-family:Vegur, "PT Sans", Verdana, Sans-serif;
			font-size: 25px;
			color: rgba(137,116,65,1);
			text-align: left;
			padding-left: 60px;
			padding-bottom: 10px;
		}
		.enlace{
			text-decoration: none;
			font-size:14px;
			font-family:Vegur, "PT Sans", Verdana, Sans-serif;
			color:rgb(215,175,76);
		}
		.enlace:hover{
			text-decoration: underline;
		}
		.enlace:visited{
			color:rgb(86,29,40);
		}
	</style>
</head>
<body>
	<div class="fondo-marco">
		<div class="marco">
			<br><label class="letras1">Código de Verificación</label><br><br>
			<label class="letras1">Detalles de Cuenta</label><br><br>
			<label class="letras1">ID del usuario: </label><label class="letras2">'.$username.'</label><br>
			<label class="letras1">Email del usuario: </label><label class="letra2">'.$email.'</label><br><br>
			<label class="letras2">¡Acabas de Unirte a Silkroad Slifer.<br></label><label class="letras2">Se parte de ella y disfruta con tus amigos!</label><br><br>
			<label class="letras2">¡Verifica tu Correo no pierdas tiempo!</label><br>
			<div class="contenedor">
				<label class="letra3">'.$genera.'</label>
			</div><br>
			<label class="letras2">O has click en el siguiente enlace: <a href="'.$enlace.'" class="enlace">Click Aqui.</a></label><br><br>
			<label class="letras2">Si este correo no es para usted, Perdón por las molestias Causadas.</label><br><br>
			<label class="letras2">¡Simplemente Ignore este mensaje!</label>
		</div>
	</div>
</body>
</html>';

$encabezado = "MINE-Version: 1.0\r\n";
$encabezado .= "Content-type: text/html; charset=UTF-8\r\n";
$encabezado .= "From: Silkroad Slifer <soporte@silkroadslifer.com>\r\n";
$encabezado .= "Reply-To: soporte@silkroadslifer.com\r\n";
 
 	mail($email,$titulo,$contenido,$encabezado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verificar - Silkroad Slifer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonticons/css/font-awesome.css">

	<script src="js/jquery.js"></script>
	<script src="codigo.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var codigo = $("#verificar-email");
			var genera_codigo ='<?php echo $genera;?>';

			function validarCodigo() {
				if(codigo.val() != genera_codigo){
					codigo.addClass("error");
					return false;
				}
				else if (!codigo.val().match(/^[0-9a-zA-Z]+$/)){
					codigo.addClass("error");
					return false;
				}
				else{
					codigo.removeClass("error");
					codigo.addClass("correcto");
					return true;
				}

			}

			codigo.blur(validarCodigo);
			codigo.keyup(validarCodigo);

			$("#form-reg2").submit(function(){
				if(validarCodigo())
					return true;
				else 
					return false;
		});


		$('#verificar-email').attr('placeholder',genera_codigo);
});
</script>
</head>
<body>
<form method="post" id="form-reg2"  class="form-reg" action="completacion.php" style="background-image: url(img/cabezado_reg.jpg); background-repeat: no-repeat; background-size: 100% 15%;">

	<h3 id="h3-border" align="center">Paso 2: Verificar Cuenta</h3>
	<center><img src="img/logo-email.png" class="img-verificar"></center>
	<center><p class="reg-let">Hola! <strong><?php echo $username;?></strong>.<br>¡Bienvenido a Silkroad Slifer! Ya has completado el primer paso del Registro.<br>
		Ahora debes de confirmar tu Dirrecion de Correo Electronico: <strong><?php echo $email; ?></strong><br>Se ha enviado un mensaje solo necesitas ingresar el codigo para completar el registro.<br><br></p></center>
	<div class="control"><label class="reg-let">Activacion de Codigo: </label><br>
	<a title="Se necesita buscar el Codigo enviado al Correo y agregarlo en la casilla." class="tooltip"> <span class="add-on"><i class="fa fa-key" style="color: #fff;"></i></span></a><input type="text" name="verificar" id="verificar-email" autocomplete="off" required="on" placeholder="Introduzca el Codigo de Verificacion" style="width: 90%;">
	</div>
	<center><input type="submit" name="enviar2" class="reg-enviar1" id="reg-enviar2" style="width: 92%" value="Confirmar Codigo" style="margin-top: 5px;"></center>
</form>
</body>
</html>
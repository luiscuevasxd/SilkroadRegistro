
<!DOCTYPE html>
<html>
<head>
	<title>Registro - Silkroad Slifer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" href="">
	<link rel="stylesheet" type="text/css" href="fonticons/css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/validar_reg.js"></script>
</head>
<body>
<?php
require_once('../config.inc.php');
require_once('../core/core.inc.php');
global $core;
$core = new core();
core::$sql-> changeDB('acc');

		
?>
<form method="post" id="form-reg" class="form-reg" action="verificar.php" style="background-image: url(img/cabezado_reg.jpg); background-repeat: no-repeat; background-size: 100% 15%;">
	<h3 id="h3-border" align="center">Paso 1: Registro</h3>

	<table align="center" style="width: 93%">
		<tr>
		<td><label class="reg-let">Nombre de Usuario</label></td>
		<td><label class="reg-let">Correo Electronico</label></td>
		</tr> 
		<tr>
			<td><a title="No se permiten caracteres que no sean AlfaNumericos y un minimo de 4 a 16 caracteres." class="tooltip" ><span class="add-on"><i class = "fa fa-user" style="color: #fff;"></i></span></a><input type="text" name="username" placeholder="Nombre de Usuario" id="reg-user" autocomplete="off" required="on" style="width: 85%"></td>
			<td><a title="Dirreccion de correo valido para la verificacion de la cuenta." class="tooltip"><span class="add-on"><i class = "fa fa-envelope-o" style="color: #fff;"></i></span></a><input type="email" name="email" placeholder="Correo Electronico" id="reg-email" autocomplete="off" required="on" style="width: 85%"></td> 
		</tr>
		<tr>
			<td><label class="reg-let">Contraseña</label></td>
			<td><label class="reg-let">Confirmar Contraseña</label></td>
		</tr>
		<tr>
			<td><a title="No se permiten caracteres que no sean AlfaNumericos y un minimo de 4 a 16 caracteres." class="tooltip"><span class="add-on"><i class = "fa fa-lock" style="color: #fff;"></i></span></a><input type="password" name="contra" placeholder="Contraseña" id="reg-pw" autocomplete="off" required="on" style="width: 85%"></td>
			<td><a title="Debe de coincidir con la Contraseña." class="tooltip"><span class="add-on"><i class = "fa fa-lock" style="color: #fff;"></i></span></a><input type="password" name="conficontra" placeholder="Confirmar Contraseña" id="reg-pw-conf" autocomplete="off" required="on" style="width: 85%"></td> 
		</tr>
		<tr>
			<td><label class="reg-let">Terminos y Acuerdos</label></td>
		</tr>
		<tr>
			<td colspan="2"><span><i></i></span>
				<div class="acuerdos" style="width: 90%">
					Términos de servicio 
					<br>
					<br>
					¡IMPORTANTE! ¡POR FAVOR, LEA ESTE DOCUMENTO DETENIDAMENTE! 
					<br>
					<br>
					Toda persona que se registre dentro de nuestro sitio y accede al servidor de "Silkroad Zero", está sujeta a los siguientes términos  sin excepción, cualquier termino contrario al aquí presentado queda expresamente prohibido. Usted declara ser una persona física, aceptando las presentes condiciones de uso. 
					<br>
					<br>
					1. Acceso al servicio:
					<br>
					Usted debe registrarse y acceder con una cuenta creada en nuestro sitio oficial http://www.silkroadslifer.com para jugar "Silkroad Zero" o alguno de nuestros servidores alternativos, la descarga del cliente se realizara en el mismo sitio en la sección de descarga y de manera periódica se colocaran las actualizaciones necesarias para jugar.
					<br> 
					"Silkroad Zero" se deslinda de cualquier descarga ajena a nuestro sitio oficial http://www.silkroadslifer.com
					<br>
					<br>
					2. Normas de conducta de "Silkroad Zero":
					<br>
					Como muchas cosas en el mundo "Silkroad Zero" se rige por normas de conducta que todos los usuarios de "Silkroad Zero" deben observar. Usted tiene la obligación de conocer, comprender y cumplir dichas normas de conducta. "Silkroad Zero" se reserva el derecho a determinar que conducta se considera contraria al espíritu de juego y a emprender medidas disciplinarias. "Silkroad Zero" se reserva el derecho de modificar dichas normas en cualquier momento. 
					<br>
					<br>
					a. Normas de conducta relativa al nombre del personaje:
					<br>
					Dentro de "Silkroad Zero" todo usuario elegirá un nombre para su personaje así como para su propio gremio. Cuando se seleccione el nombre de un personaje, guild o cualquier otro signo que pueda ser visto por otros jugadores de "Silkroad Zero" se deberán tener en cuenta los siguientes criterios. En caso de que "Silkroad Zero" considere que dicho signo es ofensivo o inadecuado dispondrá de las medidas disciplinarias correspondientes. 
					<br>
					En particular no podrán utilizarse nombres: 
					<br>
					-Que pertenezcan a otra persona con el intento de hacerse pasar por ella, eso incluye al staff de "Silkroad Zero". 
					<br>
					-Que incorporen insultos o lenguaje ofensivo, difamatorio, vulgar, obsceno, que induzca al odio o que sea reprobable por asuntos raciales o étnicos. 
					<br>
					-Relacionados con las drogas, el sexo, el alcohol o actividades delictivas. 
					<br>
					b. Normas de conducta relativa al uso del "Chat":
					<br>
					Transmitir o publicar contenido que "Silkroad Zero" a su sola discreción considere ofensivo, ilegal, perjudicial, amenazante, insultante, acosador, difamatorio, vulgar, obsceno, que incite al odio, sexualmente explícito o que sea racial o étnicamente reprobable, así mismo usted no podrá utilizar ortografía incorrecta o alternativa para burlar las restricciones citadas anteriormente.
					<br>
					Llevar acabo cualquier acción susceptible de causar un mal funcionamiento como por ejemplo, provocar que el chat se deslice demasiado rápido (flood), impidiendo que otros usuarios puedan leer. 
										<br>
					Comunicar o publicar información personal de cualquier jugador de "Silkroad Zero" en sitios web o foros relacionados con este último. No obstante, los usuarios de "Silkroad Zero" podrán compartir información personal en un mensaje personal dirigido a un solo usuario. 
					<br>
					<br>
					3. Normas de conducta general:
					<br>
					Acosar, amenazar, molestar avergonzar, provocar molestar o incomodidad a cualquier usuario y/o staff de "Silkroad Zero" o hacer que se convierta en el centro de atención sin quererlo. 
					<br>
					Participar en acción alguna que a juicio de "Silkroad Zero", suponga o pueda suponer que un usuario sea víctima de un "timo" o que le sustraiga oro, armas, armaduras o cualquier otro objeto adquirido legítimamente por dicho usuario. 
					<br>
					El usuario que ponga en venta cualquier objeto será bajo su propia responsabilidad dicha transacción. 
					<br>
					Queda prohibido utilizar herramientas que interfieran o de otro modo alteren el servidor de "Silkroad Zero", en caso del cliente del juego queda bajo la responsabilidad de quien lo modifique y/o utilice. 
					<br>
					Programas de "auto-traning" como "bots" son permitidos siempre y cuando sean publicados por el sitio oficial de "Silkroad Zero", el uso de algún programa externo será bajo la responsabilidad del usuario. 
					<br>
					<br>
					4. Consecuencias de la infracción de las normas de conducta:
					<br>
					"Silkroad Zero" podrá a su entera discreción, adoptar cuantas medidas considere necesarias para preservar la integridad de "Silkroad Zero" cualquier infracción de las normas presentadas anteriormente podrá comportar la adopción de medidas de disciplina, con efecto inmediato o en el momento que se determine, estas medidas podrán ser como por ejemplo: 
					<br>
					<br>
					-La suspensión temporal de su acceso a "Silkroad Zero".
					<br>
					-La cancelación definitiva de su acceso a "Silkroad Zero".
					<br>
					-La modificación de un personaje o cuenta, incluyendo la reducción o eliminación de puntos de experiencia, habilidades, niveles, objetos u oro del juego. 
					<br>
					-La suspensión temporal o permanente o la anulación del acceso de una cuenta que utilice para entrar a nuestro servidor. 
					<br>
					<br>
					5. Venta de objetos y cuentas:
					<br>
					Cualquier transacción de productos dentro de "Silkroad Zero" como lo son los "Créditos" que son utilizados para cambiarlos en nuestro "Item Mall" quedara a cargo de nuestros resellers oficiales mencionados dentro de nuestro sitio http://www.silkroadslifer.com Todo el dinero que sea enviado por los jugadores será por su propia voluntad y será manejado como una "Donación" al staff que se encarga del funcionamiento del servidor.
					<br>
					La venta de objetos del juego como armas, oro o productos del ítem mall entre jugadores quedaran a su entera responsabilidad, "Silkroad Zero" no se hace responsable de robos por descuido de algún jugador, aunque de igual manera tratara de preservar el espíritu de juego para que este tipo de hecho no sucedan.
					La venta de cuentas quedara a cargo de los jugadores que las posean, mediante publicaciones en páginas web, en foros o por trato directo, "Silkroad Zero" no se hace responsable de robos causados por descuido de los usuarios que traten de vender su cuenta. Aun así ningún jugador será dueño legítimo de ninguna cuenta, ya que son propiedad de "Silkroad Zero". 
					<br>
					<br>
					6. Prestación del servicio online:
					<br>
					"Silkroad Zero" al ser un juego en constante cambio y evolución realizara tareas de mantenimiento programado o de emergencia en caso de ser necesario, durante este tiempo el servidor permanecerá cerrado por un periodo de tiempo indefinido. Todo esto con la intención de prestar un mejor servicio a nuestros usuarios.
					<br>
					<br>
					7. El staff de Silkroad Zero no se hace responsable por el hack, robo, timo, ocasionado por terceros programas o personas, y tampoco se hará responsable de las compras / ventas que se hagan sin un mediador oficial de Silkroad Zero.
					<br>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="checkbox" name="checkbox" id="checkbox" required="on"><label class="reg-let">Acepto los Terminos y Condiciones</label></td>
		</tr>
		<tr>
			<td><label class="reg-let" id="text-t"></label></td>
			<td><label class="reg-let">Sigue el Siguiente Paso</label></td>
		</tr>
		<tr>
			<td><a title="Confirmacion de que no eres Robot has la suma correcta." class="tooltip"><span class="add-on"><i class = "fa fa-exclamation-circle" style="color: #fff;"></i></span></a><input type="number" name="robothuman" class="reg-rob" id="reg-rob" autocomplete="off" required="on" min="1" max="20" style="width: 85%" ></td>
			<td><span><i></i></span><input type="submit" name="enviar1" id="reg-enviar1" class="reg-enviar1" style="width: 90%;" value="Registrarse"></td>
		</tr>
	</table>
</form>
</body>
</html>
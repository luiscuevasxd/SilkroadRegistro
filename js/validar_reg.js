$(document).ready(function(){
	//variables globales
	var username = $("#reg-user");
	var email =$("#reg-email");
	var pw = $("#reg-pw");
	var confipw = $("#reg-pw-conf");
	var robot = $("#reg-rob");

	//funciones de validacion
	function validarUserName(){
		//NO cumple longitud minima y maxima
		if(username.val().length < 4 || username.val().length > 16){
			username.addClass("error");
			return false;
		}
		//SI longitud pero NO solo caracteres 0-9 & A-z
		else if(!username.val().match(/^[0-9a-zA-Z]+$/)){
			username.addClass("error");
			return false;
		}
		// SI longitud, SI caracteres A-z
		else{
			username.removeClass("error");
			username.addClass("correcto");
			return true;
		}
	}

	function validarPW(){
		//NO tiene minimo de 5 caracteres o mas de 12 caracteres
		if(pw.val().length < 5 || pw.val().length > 19){
			pw.addClass("error");
			return false;
		}
		// SI longitud, NO VALIDO numeros y letras
		else if(!pw.val().match(/^[0-9a-zA-Z]+$/)){
			pw.addClass("error");
			return false;
		}
		// SI rellenado, SI email valido
		else{
			pw.removeClass("error");
			pw.addClass("correcto");
			return true;
		}
	}

	function confirmarPW(){
		//NO son iguales las password
		if(pw.val() != confipw.val()){
			confipw.addClass("error");
			return false;
		}
		// SI son iguales
		else{
			confipw.removeClass("error");
			confipw.addClass("correcto");
			return true;
		}
	}

	function validarEmail(){
		//NO hay nada escrito
		if(email.val().length == 0){
			email.addClass("error");
			return false;
		}
		// SI escrito, NO VALIDO email
		else if(!email.val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i)){
			email.addClass("error");
			return false;
		}
		// SI rellenado, SI email valido
		else{
			email.removeClass("error");
			email.addClass("correcto");
			return true;
		}
	}
		// variables para el robot
		var num1 = Math.floor((Math.random() * 10) + 1);
		var num2 = Math.floor((Math.random() * 10) + 1);
		var res=num1+num2;

	function validarRobot() {
		if(robot.val()!=res){
			robot.addClass("error");
			return false;
		}
		else if (robot.val().length < 1 ||robot.val().length > 20){

		}
		else{
			robot.removeClass("error");
			robot.addClass("correcto");
			return true;
		}
	}
	//Mostrar la suma del robot
	$("#text-t").append('Prueba de Robot = ',num1 + " + " + num2 + " = ? " );
	$('#reg-rob').attr('placeholder',num1 + " + " + num2 + " = ? ");

	//controlamos la validacion en los distintos eventos
	// Perdida de foco
	username.blur(validarUserName);
	email.blur(validarEmail);
	pw.blur(validarPW);  
	confipw.blur(confirmarPW);  
	robot.blur(validarRobot);

	// Pulsacion de tecla
	username.keyup(validarUserName);
	email.keyup(validarEmail);
	pw.keyup(validarPW);
	confipw.keyup(confirmarPW);
	robot.keyup(validarRobot);

	// Envio de formulario
	$("#form-reg").submit(function(){
		if(validarUserName() & validarPW() & confirmarPW() & validarEmail() & validarRobot())
			return true;
		else
			return false;

	});
});
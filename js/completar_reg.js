		$(document).ready(function(){
			var nombre = $("#nombre");
			var apodo = $("#apodo");
			var genero = $("#genero");
			var genero_m = $("#masculino");
			var genero_f = $("femenino");
			var p_secreta = $("#p_secreta");
			var r_secreta = $("#r_secreta");

	function validarNombre() {
		if(nombre.val().length < 4 || nombre.val().length > 30){
			nombre.addClass("error");
			return false;
		}
		else if (!nombre.val().match(/^[a-zA-Z]+$/)){
			nombre.addClass("error");
			return false;
		}
		else {
			nombre.removeClass("error");
			nombre.addClass("correcto");
			return true;
		}
	}

	function validarApodo() {
		if (apodo.val().length < 4 || apodo.val().length > 20) {
			apodo.addClass("error");
			return false;
		}
		else if (!apodo.val().match(/^[0-9a-zA-Z_]+$/)){
			apodo.addClass("error");
			return false;
		}
		else {
			apodo.removeClass("error");
			apodo.addClass("correcto");
			return true;
		}
	}

	function validarGenero() {
		if (genero.val()!= genero_m.val()){
			genero.addClass("error");
			return false;
		}
		else if (genero.val()== genero_f.val()){
			genero.addClass("error");
			return false;
		}
		else {
			genero.removeClass("error");
			genero.addClass("correcto");
			return true;
		}
	}

	function validarPSecreta() {
		if (p_secreta.val().length < 6 || p_secreta.val().length > 30) {
			p_secreta.addClass("error");
			return false;
		}
		else if (!p_secreta.val().match(/^[0-9a-zA-Z!?¿¡.,_]+$/)){
			p_secreta.addClass("error");
			return false;
		}
		else {
			p_secreta.removeClass("error");
			p_secreta.addClass("correcto");
			return true;
		}
	}

	function validarRSecreta() {
		if (r_secreta.val().length < 6 || r_secreta.val().length > 30) {
			r_secreta.addClass("error");
			return false;
		}
		else if (!r_secreta.val().match(/^[0-9a-zA-Z!?¿¡.,_]+$/)){
			r_secreta.addClass("error");
			return false;
		}
		else {
			r_secreta.removeClass("error");
			r_secreta.addClass("correcto");
			return true;
		}
	}
	//foco
	nombre.blur(validarNombre);
	apodo.blur(validarApodo);
	genero.blur(validarGenero);
	p_secreta.blur(validarPSecreta);
	r_secreta.blur(validarRSecreta);

	//pulsacion
	nombre.keyup(validarNombre);
	apodo.keyup(validarApodo);
	genero.keyup(validarGenero);
	p_secreta.keyup(validarPSecreta);
	r_secreta.keyup(validarRSecreta);

	$("#form-reg3").submit(function(){
		if(validarNombre() & validarApodo() & validarGenero() & validarPSecreta() & validarRSecreta())
			return true;
		else
			return false;

	}); 
});
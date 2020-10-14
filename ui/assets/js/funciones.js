// Archivo de funciones asincronicas entre php y html:
'use strict';
// var jqwery = require './jquery.js';

console.log('Archivo funciones en funcionamiento y cargado desde la raiz');

//  Función para el login:
function login(){
	console.log('Intentamos iniciar sesión desde el boton');
	// Variables en javascript:
	const correo = document.getElementById('inputEmail').value;
	const clave = document.getElementById('inputPassword').value;

	// Mostramos los datos del formulario:
	console.log(correo, clave);

	// Con ajax le pasamos estos datos al controlador logincontrol.php:
	$.ajax({
		url:'../controlador/logincontrol.php',
		type: 'POST',
		data: correo+ '&'+clave
	})
	.done(function(respuesta){
		console.log(respuesta);
	})
}
// Archivo de funciones asincronicas entre php y html:
'use strict';
// var jqwery = require './jquery.js';

console.log('Archivo funciones en funcionamiento y cargado desde la raiz');

//  Función para el login:
function login(){
	console.log('Intentamos iniciar sesión desde el boton');

	// Forma rápida de capturar datos de formulario:
	let datosingreso = $('#formlogin').serialize();
	// retorna :inputEmail=ederlara%40misena.edu.co&inputPassword=senarules
	
	const ingreso = true;
	// Variable para concatenar todas las variables:
	let datos = datosingreso+'&ingreso='+ingreso;

	// Mostramos los datos del formulario:
	console.log(datosingreso,datos);



	// Con ajax le pasamos estos datos al controlador logincontrol.php:
	$.ajax({
		url:'../controlador/logincontrol.php',
		type: 'POST',
		data: datos
	})
	.done(function(respuesta){
		console.log(respuesta);
	})
}
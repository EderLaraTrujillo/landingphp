/**
 * Archivo de funciones asincronicas entre php y html
 * Autor: Eder Lara Trujillo Instructor SENA Regional Antioquia CTMA 
 * © 2020
 */

'use strict';
console.log('Archivo funciones cargado desde la raiz');

/* Función para el login, capturamos los datos del formulario de login y lo pasamos al controlador: */
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
		url:'../controlador/logincontrol.php',			// Dirección donde se encuentra el controlador
		type: 'POST',									// Tipo de datos que le voy a pasar
		data: datos 									// Los datos que se enviarán al controlador
	})
	// Ejecutamos una función de call-back (Retorno), con los resultados obtenidos desde el controlador:
	.done(function(respuesta){
		// Lo imprimimos en consola para estar seguros que se ejecuta:
		console.log(respuesta);
		// Imprimimos la respuesta en la vista html, usando la funcion html() de jquery:
		$('#mensaje').html(respuesta);
		// A partir de esta linea, damos por terminada la función javascript.
	})
}
// ----------------------------------------------------------------- //

/* Función para capturar los datos del formulario de registro: */
function registro(){
	// Capturamos los datos del formulario:
	let datosregistro = $('#formregistro').serialize();

	// Variable que simula el boton:
	let registro = true;
	// Concateno todos los datos con la variable registro:
	let datos = datosregistro+'&registro='+registro;
	// Pasamos al archivo del control para la ejecución:
	$.ajax({
		url: '../controlador/registrocontrol.php',
		type: 'POST',
		data:  datos
	})
	// Retornamos con callback el resultado de la ejecución del control: 
	.done((res)=>{
		// Imprimimos en la vista:
		$('#resultado').html(res);
	})
}
// ----------------------------------------------------------------- //
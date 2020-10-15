<?php  
/**
 * Archivo para la conexion con la base de datos:
 * Autor: Eder Lara Trujillo
 * Esta es una forma, la mejor forma sería haciéndolo básado en clases
 */
	# Variables de conexión:
	$host="127.0.0.1";				// Ip del servidor
	$port=3306;						// Puerto de la base de datos
	$socket="";						// Socket de la base de datos, este puede ir vacio ""
	$user="root";					// Usuario de conexión a la base de datos
	$password="";					// Contraseña del usuario de la base de datos
	$dbname="repositorio";			// Nombre de la base de datos

	# Constructor del objeto $con:

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('No se puede conectar a la base de datos error#:' . mysqli_connect_error());

	# Consulta para afinar los caracteres especiales del español latino como la ñ y las tíldes:
	$acentos = $con->query('SET NAMES UTF8');

?>
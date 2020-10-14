<?php  
/**
 * Archivo para la conexion con la base de datos:
 * Autor: Eder Lara Trujillo
 */
	$host="127.0.0.1";
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="repositorio";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('No se puede conectar a la base de datos error#:' . mysqli_connect_error());

	$acentos = $con->query('SET NAMES UTF8');

?>
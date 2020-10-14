<?php 
# Cargar librerias y archivos necesarios: 
# Funcionalidad del aplicativo:
	# 1. Capturar los datos desde el formulario:
	# Validación de control:
	
	if (isset($_POST['ingreso'])) {
		# Si obturamos el boton de ingreso, capturamos los datos del formulario:
		# Variables con los datos desde javascript:
		$correo = $_POST['correo'];
		$passwd = $_POST['clave'];
		printf('Hemos recibido '.$correo.' '.$passwd.' Desde el formulario de html pasando por jquery');
	} else {
		# Si el boton no se oprime, no hace nada, podemos mostrar un mensaje:
		printf('Esperamos datos del formulario');
	}
	


?>
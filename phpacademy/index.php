<?php  
	# Impresión de mensajes:
	echo "Mensaje en php";

	# Variables en php, las variables se deben iniciar con el signo $:
	$variable = "Variable de texto <br>";
	$numero = 30.4;
	# Concatenación de variables:
	$variable." ".$numero;

	# Impresión de variables:
	echo $variable." ".$numero."<br>";

	# Las variables en php son debilmente tipadas, sin embargo se distingue que los números o valores numéricos no van en "comillas", mientras que los de texto "si!!";
	
	# Condicionales, las condicionales como se ha visto en lógica son de dos tipos: si y entonces y en caso de...
	# Condiciones basadas en si y entonces:
	if (55 <= 50) {
		# En esta condición valídamos que si el número 55 es menor o igual a 50, el resultado de la condición (true o false) debe generar una acción o impresión:
		echo "true";
	} else {
		# De lo contrario, se debe imprimir el valor en caso de ser falso:
		echo "false"; 	// Imrime false
	}
	
	# Condicionales cuando es el caso de....
	switch ($numero) {
		case 30.4:
			# En caso de que la variable $numero sea 30.4 escribiremos un mensaje de verdadero y mostraremos el resultado de la variable:
			echo "verdadero";
			echo $numero ."<br>";
			break;
		
		default:
			# por defecto tendrá otro valor:
			$numero = 60;
			echo $numero."<br>";
			break;
	}


?>
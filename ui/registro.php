<title>Registro en my Landing Page</title>
<?php
require '../controlador/conex.php';  
include 'base.inc';
include 'menu.inc';
?>

<section class="container mt-3">
	<div class="row">
		<form class="col-md-8 mt-4" method="post" id="formregistro">
			<h2 class="display-4 ">Registro de Usuario</h2>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputState">Tipo de Usuario</label>
					<!-- Cambiamos los datos de option por datos de la base de datos: -->
					<select name="tipouser" class="form-control">
						<option selected disabled>Seleccione una Opción</option>
						<?php
							# REALIZAR UNA CONSULTA A LA BASE DE DATOS:  
							# 1. Defino la consulta SQL:
							$query = "SELECT * from roles";
							# 2. Valido con las funciones prepare, que la consulta se pueda ejecutar:
							if ($stmt = $con->prepare($query)) {
								# 3. Ejecuto la consulta sql en el servidor:
							    $stmt->execute();
							    # 4. Almacena el resultado en campos $field1 y $field2
							    $stmt->bind_result($field1, $field2);
							    # 5. Los recorre en un ciclo para poder mostrar linea a linea:
							    while ($stmt->fetch()) {
							    	# 6. Imprime la etiqueta option con los datos que se requieren de la base de datos:
							        printf('<option value="'.$field1.'">'.$field2.'</option>');
							    }
							    # 7. Cerramos la conexión con la base de datos:
							    $stmt->close();
							}
						?>
						
					</select>
				</div>
				<div class="form-group col-md-5">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" name="correo">
				</div>
				<div class="form-group col-md-4">
					<label for="inputPassword4">Password</label>
					<input type="password" class="form-control" name="clave">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">Identificación</label>
					<input type="text" class="form-control" name="direccion" placeholder="1234">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress2">Nombres</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress2">Apellidos</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				</div>
			</div>
			<div class="form-row">
				<div class="input-group col-md-6 mt-2">
				  <div class="custom-file mt-4">
				    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
				    <label class="custom-file-label" for="inputGroupFile01">Subir Foto</label>
				  </div>
				</div>
				<div class="form-group col-md-6">
					<label for="inputZip">Teléfono</label>
					<input type="text" class="form-control" id="inputZip">
				</div>
			</div>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Check me out
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Registrar</button>
			<p class="text-right">¿Ya tienes cuenta? <a href="login.php" class="btn btn-success">Inicia Sesión</a></p>
		</form>
		<!-- Imagen de perfil: -->
		<div class="col-md-4 mt-4">
			<img src="assets/media/img/reg.jpg" alt="" class="img-fluid">
		</div>
	</div>
</section>
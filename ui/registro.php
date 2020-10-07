<title>Registro en my Landing Page</title>
<?php  
include 'base.inc';
include 'menu.inc';
?>

<section class="container mt-3">
	<div class="row">
		<form class="col-md-8 mt-4">
			<h2 class="display-4 ">Registro de Usuario</h2>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputState">Tipo de Usuario</label>
					<select id="inputState" class="form-control">
						<option selected disabled>Seleccione una Opción</option>
						<option>Traer desde la base de datos...</option>
					</select>
				</div>
				<div class="form-group col-md-5">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4">
				</div>
				<div class="form-group col-md-4">
					<label for="inputPassword4">Password</label>
					<input type="password" class="form-control" id="inputPassword4">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">Identificación</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="1234">
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
<title>Ingreso a la Landing Page</title>
<?php  
	include 'base.inc';
	include 'menu.inc';
?>

<form class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/media/img/people.jpg" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-2 text-center">¿No estás Resgistrado? <a href="registro.php" class="btn btn-success">Registrarse</a></p>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
</form>
<?php 
require_once 'app/includes/glava.php';
?>
<div class="row">
 <div class="col-lg-5 center form">
 <h1 class="text-center">Prijava</h1>
<form method="POST" action="app/prijava.php">
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon">Uporabniško ime</div>
		<input type="text" name="username" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<div class="input-group">
		<div class="input-group-addon">Geslo</div>
		<input type="password" name="geslo" class="form-control" required>
	</div>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Prijava">
		<a href="register.php" name="submit" class="btn btn-success btn-lg btn-block">Ustvari nov račun</a>
	</div>
</form>
</div>
</div>
<?php 
require_once 'app/includes/noga.php';
?>

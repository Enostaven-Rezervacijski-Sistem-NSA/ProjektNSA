<?php 
require_once 'app/includes/glava.php';
?>
<div class="row">
<div class="col-lg-5 center form">
	<h1 class="text-center">Ustvari nov račun</h1>
<form method="POST" action="app/registracija.php">
	<div class="form-group">
	<div class="input-group">
		<label class="sr-only">Uporabniško ime</label>
		<div class="input-group-addon">Uporabniško ime</div>
		<input type="text" name="username" class="form-control" required> 
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<label class="sr-only">Geslo</label>
		<div class="input-group-addon">Geslo</div>
		<input type="password" name="geslo" class="form-control" required>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<label class="sr-only">E-Naslov</label>
		<div class="input-group-addon">Elektroniski naslov</div>
		<input type="email" name="email" class="form-control" required>
	</div>
	</div>
	<div class="form-group">	
	<div class="input-group">
		<label class="sr-only">Ime</label>
		<div class="input-group-addon">Ime</div>
		<input type="text" name="ime" class="form-control" required>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<label class="sr-only">Priimek</label>
		<div class="input-group-addon">Priimek</div>
		<input type="text" name="priimek" class="form-control" required>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<label class="sr-only">EMŠO</label>
		<div class="input-group-addon">EMSŠO</div>
		<input type="text" name="emso" class="form-control" required>
	</div>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Ustvari račun">
		<a href="login.php" class="btn btn-success btn-lg btn-block">Prijava</a>
	</div>
</form>
</div>
</div>
<?php
require_once 'app/includes/noga.php';
?>
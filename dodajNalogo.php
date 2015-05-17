<?php 
require_once 'app/includes/glava.php';
require_once 'app/init.php';
error_reporting(0);
if($data['status'] == 1) {
	die('Nimate pravic');
}
if(isset($_GET['nalogaID'])) {
	$nalogaID = $_GET['nalogaID'];
	$query = mysqli_query($db, "SELECT * FROM naloge WHERE id = '$nalogaID'");
	$result = mysqli_fetch_assoc($query);
}
?>
<div class="row">
	<div class="col-lg-6 center form">
		<h1 class="text-center">Dodaj nalogo</h1>
		<form method="POST" action="app/dodajNalogo.php">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Naziv</div>
					<input type="text" name="naziv" class="form-control" required value="<?php echo $result['naslov']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Opis</div>
					<textarea name="opis" class="form-control" required><?php echo $result['opis']; ?></textarea>	
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Kljucne besede</div>
					<input type="text" name="kljucneBesede" class="form-control" required value="<?php echo $result['kljucneBesede']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Datum objave</div>
					<input type="date" name="datumObjave" class="form-control" required value="<?php echo $result['datumObjave']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Začetni datum</div>
					<input type="date" name="zacetniDatum" class="form-control" required value="<?php echo $result['zacetniDatum']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Končni datum</div>
					<input type="date" name="koncniDatum" class="form-control" required value="<?php echo $result['koncniDatum']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Največje število kandidatov</div>
					<input type="number" name="kandidati" class="form-control" required value="<?php echo $result['steviloKandidatov']; ?>">
				</div>
			</div>
			<div class="form-group">
			<?php
			if(!isset($_GET['nalogaID'])):
			?>
				<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Dodaj nalogo">
			<?php 
			else :
				$_SESSION['nalogaID'] = $_GET['nalogaID'];
			?>
				<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Posodobi nalogo">
			<?php 
			endif;
			?>
				<a href="naloge.php" class="btn btn-danger btn-lg btn-block">Prekliči</a>
			</div>
		</form>
	</div>
</div>

<?php 
require_once 'app/includes/glava.php';
?>
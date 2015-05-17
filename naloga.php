<?php 
require_once 'app/includes/glava.php';
require_once 'app/init.php';

if(isset($_GET['nalogaID'])) {
	$nalogaID = $_GET['nalogaID'];
	$_SESSION['nalogaID'] = $nalogaID;
	$query = mysqli_query($db, "SELECT * FROM naloge WHERE id = '$nalogaID'");
	$result = mysqli_fetch_assoc($query);
}
else 
	die();
?>
<div class="row">
<h1 class="text-center">Prijava k nalogi</h1>
</div>
<div class="row">
<div class="col-lg-3">
	<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Naziv</div>
					<input type="text" name="naziv" class="form-control" disabled value="<?php echo $result['naslov']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Opis</div>
					<textarea name="opis" class="form-control" disabled><?php echo $result['opis']; ?></textarea>	
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Kljucne besede</div>
					<input type="text" name="kljucneBesede" class="form-control" disabled value="<?php echo $result['kljucneBesede']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Datum objave</div>
					<input type="date" name="datumObjave" class="form-control" disabled value="<?php echo $result['datumObjave']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Začetni datum</div>
					<input type="date" name="zacetniDatum" class="form-control" disabled value="<?php echo $result['zacetniDatum']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Končni datum</div>
					<input type="date" name="koncniDatum" class="form-control" disabled value="<?php echo $result['koncniDatum']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Največje število kandidatov</div>
					<input type="number" name="kandidati" class="form-control" disabled value="<?php echo $result['steviloKandidatov']; ?>">
				</div>
			</div>
			<?php
			if($data['status'] == 1):
				?>
			<form method="POST" action="app/naloga.php">
				<input type="submit" class="btn btn-success btn-lg btn-block" value="Prijava k nalogi">
			</form>
			<?php
			endif;
			?>
		</div>
<div class="col-lg-8">
<div class="row">
<?php
$query = mysqli_query($db, "SELECT * FROM nalogeuporabnika n INNER JOIN uporabniki u ON (u.id = n.uporabnikID) WHERE nalogaID = '$nalogaID'");
$result1 = mysqli_fetch_all($query);
foreach($result1 as $el):
	$_SESSION['uporabnikID1'] = $el[4];
?>
<div class="col-lg-3">
    <div class="thumbnail">
      <img src="http://placehold.it/150x150">
      <div class="caption">
        <h4><?php echo $el[8].' '.$el[9] ?></h4>
        <?php
        if($data['status'] == 2 && $el[3] == 1): ?>
        <p><a href="app/naloga.php?sprejemi" class="btn btn-success" role="button">Sprejemi</a> <a href="app/naloga.php?zavrni" class="btn btn-default" role="button">Zavrni</a></p>
      	<?php
      	else:
      	?>
      	<p class="text-center"><?php if($el[3] == 2) echo 'Sprejet'; elseif($el[3] == 0) echo 'Zavrnjen'; ?></p>
      	<?php
      	endif;
       ?>
      </div>
      </div>
  </div>
<?php
endforeach;
?>

</div>
</div>
</div>

<?php 
require_once 'app/includes/glava.php';
?>
<?php 
require_once 'app/includes/glava.php';
require_once 'app/init.php';
error_reporting(0);
$query = mysqli_query($db, "SELECT status FROM uporabniki WHERE id = '$id'");
$result = mysqli_fetch_assoc($query);
if($result['status'] != 3) {
	die('Nimate pravic');
}
if(isset($_GET['uporabnikID'])) {
	$uporabnikID = $_GET['uporabnikID'];
	$_SESSION['uporabnikID'] = $_GET['uporabnikID'];
}
$query = mysqli_query($db, "SELECT * FROM uporabniki");
$uporabniki = mysqli_fetch_all($query);
?>
<div class="col-md8">
<table class="table table-hover">
	<tr>
		<th>Uporabniško ime</th>
		<th>Elektornski naslov</th>
		<th>Ime</th>
		<th>Priimek</th>
		<th>EMŠO</th>
		<th>Status</th>
		<th>Uredi</th>
	</tr>
<?php
foreach($uporabniki as $el):
	if($el['0'] == $uporabnikID):
?>
	<tr>
	<form method="post" action="app/spremeniUporabnika.php">
		<td><input type="text" name="username" value="<?php echo $el['1'];?>" class="form-contorl"></td>
		<td><input type="email" name="email" value="<?php echo $el['3'];?>" class="form-contorl"></td>
		<td><input type="text" name="ime" value="<?php echo $el['4'];?>" class="form-contorl"></td>
		<td><input type="text" name="priimek" value="<?php echo $el['5'];?>" class="form-contorl"></td>
		<td><input type="text" name="emso" value="<?php echo $el['6'];?>" class="form-contorl"></td>
		<td><select name="status" class="form-contorl">
			<option value="1">Dijak</option>
			<option value="2">Učitelj</option>
			<option value="3">Upravitelj</option>
		</select></td>
		<td><input type="submit" class="btn btn-success"></td>
	</tr>

<?php else: ?>
	<tr>
		<td><?php echo $el['1']; ?></td>
		<td><?php echo $el['3']; ?></td>
		<td><?php echo $el['4']; ?></td>
		<td><?php echo $el['5']; ?></td>
		<td><?php echo $el['6']; ?></td>
		<td><?php if($el['8'] == 1) echo 'Dijak'; else if($el['8'] == 2) echo 'Učitelj'; else echo 'Upravitelj'; ?></td>
		<td><a href="spremembaStatusa.php?uporabnikID=<?php echo $el['0']; ?>">Uredi</a></td>
	</tr>

<?php 
endif;
endforeach;
?>
</table>
</div>
<?php
require_once 'app/includes/glava.php';
?>
<?php 
require_once 'app/includes/glava.php';
require_once 'app/init.php';
$query = mysqli_query($db, "SELECT * FROM naloge");
$result = mysqli_fetch_all($query);
?>
<table class="table table-hover">
	<tr>
		<th>Naziv</th>
		<th>Opis</th>
		<th>Ključne besede</th>
		<th>Datum kreiranja</th>
		<th>Datum objave</th>
		<th>Začetni datum</th>
		<th>Končni datum</th>
		<th>Število kandidatov</th>
		<th>Uredi/Pregled</th>
	</tr>
<?php
foreach($result as $el):
?>
	<tr <?php if($el['6'] <= date("Y-m-d h-s-a") && $el['7'] >= date("Y-m-d h-s-a")):?> style="background-color: lightgreen" <?php else : ?> style="background-color: #FF3333" <?php endif; ?>>
		<td><?php echo $el['1']; ?></td>
		<td><?php echo $el['2']; ?></td>
		<td><?php echo $el['3'];?></td>
		<td><?php $date = strtotime($el['4']); echo date("d. m. Y", $date); ?></td>
		<td><?php $date = strtotime($el['5']); echo date("d. m. Y", $date); ?></td>
		<td><?php $date = strtotime($el['6']); echo date("d. m. Y", $date); ?></td>
		<td><?php $date = strtotime($el['7']); echo date("d. m. Y", $date); ?></td>
		<td><?php echo $el['8']; ?></td>
		<td><?php if($el['9'] == $id): ?> <a href="dodajNalogo.php?nalogaID=<?php echo $el['0']; ?>">Uredi</a> <?php endif; ?> <a href="naloga.php?nalogaID=<?php echo $el['0']; ?>">Pregled</a></td>
	</tr>
<?php
endforeach;
?>

<?php 
require_once 'app/includes/glava.php';
?>
<?php
require_once 'init.php';

$uporabnikID = $_SESSION['uporabnikID1'];

if(!isset($_GET['sprejemi']) && !isset($_GET['zavrni'])) {
	$nalogaID = $_SESSION['nalogaID'];
	mysqli_query($db, "INSERT INTO nalogeuporabnika (nalogaID, uporabnikID, status) VALUES ('$nalogaID', '$id', 1)");
	header('Location: ../naloge.php');
}
else if(isset($_GET['sprejemi'])) {
	$nalogaID = $_SESSION['nalogaID'];
	mysqli_query($db, "UPDATE nalogeuporabnika SET status = 2 WHERE uporabnikID = '$uporabnikID' AND nalogaID = '$nalogaID'");
	header('Location: ../naloge.php');
}
elseif(isset($_GET['zavrni'])) {
	$nalogaID = $_SESSION['nalogaID'];
	mysqli_query($db, "UPDATE nalogeuporabnika SET status = 0 WHERE uporabnikID = '$uporabnikID' AND nalogaID = '$nalogaID'");
	header('Location: ../naloge.php');
}
<?php

require_once 'init.php';

if(!empty($_POST)) {
	$id = $_SESSION['uporabnikID'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$ime = $_POST['ime'];
	$priimek = $_POST['priimek'];
	$emso = $_POST['emso'];
	$status = $_POST['status'];
	mysqli_query($db, "UPDATE uporabniki SET username = '$username', email = '$email', ime = '$ime', priimek = '$priimek', emso = '$emso', status = '$status' WHERE id = '$id'");
	header('Location: ../spremembaStatusa.php');
}
header('Location: ../spremembaStatusa.php');
?>
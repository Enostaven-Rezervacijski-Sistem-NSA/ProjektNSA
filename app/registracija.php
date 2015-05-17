<?php
require_once 'init.php';

function emailExists($db, $email) {
	$query = mysqli_query($db, "SELECT COUNT(id) FROM uporabniki WHERE email LIKE '$email'");
	$result = mysqli_fetch_assoc($query);
	return $result['COUNT(id)'];
}
print_r($_POST);
if(!empty($_POST)) {
	if(emailExists($db, $_POST['email']) == false) {
		$username = htmlentities(trim($_POST['username']));
		$email = htmlentities(trim($_POST['email']));
		$geslo = htmlentities(trim($_POST['geslo']));
		$geslo = sha1($geslo);
		$ime = htmlentities(trim($_POST['ime']));
		$priimek = htmlentities(trim($_POST['priimek']));
		$emso = trim($_POST['emso']);
		mysqli_query($db, "INSERT INTO uporabniki (username, email, geslo, ime, priimek, emso, datumRegistracije, status)
			VALUES ('$username', '$email', '$geslo', '$ime', '$priimek', '$emso', NOW(), 1)");
		header('Location: ../login.php');
	}
	else 
		header('Location: ../register.php');
}
else {
	header('Location: ../register.php');
}
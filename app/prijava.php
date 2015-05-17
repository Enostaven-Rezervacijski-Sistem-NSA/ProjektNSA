<?php

require_once 'init.php';

function prijava($db, $username, $geslo) {
	$query = mysqli_query($db, "SELECT id FROM uporabniki WHERE username = '$username' AND geslo = '$geslo'");
	$result = mysqli_fetch_assoc($query);
	return $result['id'];
}
print_r($_POST);

if(!empty($_POST)) {
	$username = htmlentities(trim($_POST['username']));
	$geslo = sha1($_POST['geslo']);
	if(prijava($db, $username, $geslo) != 0) {
		$login = prijava($db, $username, $geslo);
		$_SESSION['uporabnikID'] = $login;
		header('Location: ../index.php');
	}
	else 
		header('Location: ../login.php');
}
else 
header('Location: ../login.php');

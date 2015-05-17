<?php
session_start();

error_reporting(0);

$db = mysqli_connect("localhost", "root", "", "Rezervacije");

if(!$db) {
	die("Connection error: " .mysqli_errno());
}

//error_reporting(0);

if(isset($_SESSION['uporabnikID'])) {
	$id = $_SESSION['uporabnikID'];
	$query = mysqli_query($db, "SELECT id, email, ime, priimek, status FROM uporabniki WHERE id = '$id'");
	$data = mysqli_fetch_assoc($query);
}
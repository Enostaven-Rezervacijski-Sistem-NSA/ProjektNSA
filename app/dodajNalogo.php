<?php

require_once 'init.php';

if(!empty($_POST)) {
	$naziv = htmlentities(trim($_POST['naziv']));
	$opis = htmlentities(trim($_POST['opis']));
	$kljucneBesede = htmlentities(trim($_POST['kljucneBesede']));
	$datumObjave = $_POST['datumObjave'];
	$zacetniDatum = $_POST['zacetniDatum'];
	$koncniDatum = $_POST['koncniDatum'];
	$steviloKandidatov = $_POST['kandidati'];
	$avtor = $id;
	$nalogaID = $_SESSION['nalogaID'];
	echo $nalogaID;
	if($_POST['submit'] == 'Dodaj nalogo') {
		echo 'Dodaj';
		mysqli_query($db, "INSERT INTO naloge (naslov, opis, kljucneBesede, datumKreiranja, datumObjave, zacetniDatum, koncniDatum, steviloKandidatov, avtor) VALUES ('$naziv', '$opis', '$kljucneBesede', NOW(), '$datumObjave', '$zacetniDatum', '$koncniDatum', '$steviloKandidatov', '$avtor')");
	}
	if($_POST['submit'] == 'Posodobi nalogo') {
		echo 'Posodobi';
		mysqli_query($db, "UPDATE naloge SET naslov = '$naziv', opis = '$opis', kljucneBesede = '$kljucneBesede', datumKreiranja = NOW(), datumObjave = '$datumObjave', zacetniDatum = '$zacetniDatum', koncniDatum = '$koncniDatum', steviloKandidatov = '$steviloKandidatov' WHERE id = '$nalogaID'");
	}
	

	unset($_SESSION['nacin']);
	unset($_SESSION['nalogaID']);
	header('Location: ../naloge.php');
}
else 
	header('Location: ../naloge.php');
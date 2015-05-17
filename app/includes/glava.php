<!DOCTYPE html>
<?php 
require_once 'app/init.php';
?>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Enostavni rezervacijski sistem</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Domov</a></li>
        <li><a href="naloge.php">Pregled nalog</a></li>
        <li><a href="dodajNalogo.php">Dodaj nalogo</a></li>
        <li><a href="spremembaStatusa.php">Upravljaj uporabnike</a></li> 
        <li><a href="logout.php">Odjava</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<p class="navbar-text">Pozdravljen, <?php echo $data['ime'].' '.$data['priimek']; ?>!</p>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
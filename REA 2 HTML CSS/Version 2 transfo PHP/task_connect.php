<?php

//--connexion à la BDD que l'on isole dans uen variable $BDD

$bdd = new PDO('mysql:host=localhost;dbname=task', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->exec("set names utf8");

?>


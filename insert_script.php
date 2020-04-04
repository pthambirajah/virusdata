<?php
session_start();
//Fichier de connexion
include("connexion.php");

$req = $bdd->prepare('INSERT INTO city VALUES (:idCity, :cityName, :postCode, :country)');
$req->execute(array(
  	'idCity' => $_POST['idCity'],
	'cityName' => $_POST['cityName'],
	'postCode' => $_POST['postCode'],
	'country' => $_POST['country'],
	));

echo 'La ville a bien été ajoutée !';
?>





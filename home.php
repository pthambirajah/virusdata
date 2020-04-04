<?php
session_start();
//Fichier de connexion
include("connexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$reponse = $bdd->query('SELECT * FROM city');
$donnees = $reponse->fetch();

while ($donnees = $reponse->fetch())
{
?>
    <p>
	  <strong>Ville : </strong> : <?php echo $donnees['cityName']; ?><br />
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>
</html>
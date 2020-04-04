<?php
session_start();
//Fichier de connexion
include("connexion.php");

$reponse = $bdd->query('SELECT hospitalName FROM hospital');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<select name=hospital>
    <?php
    while ($donnees = $reponse->fetch())
    {
    $idHospital = $donnees['idHospital'];
    $hospitalName = $donnees['hospitalName'];
    echo "<option value='$idHospital'>$hospitalName</option>";
    }
    ?>
</select>


</body>
</html>
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

    <form action="insert_script.php" method="post">

	  	Id : <input type="number" name="idCity">
                </br>
        Name : <input type="text" name="cityName">
                </br>

        Code : <input type="number" name="postCode">
                </br>

        Country : <input type="text" name="country">
                </br>

                <input type="submit" value="insert">
    </from>



</body>
</html>


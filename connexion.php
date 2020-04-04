<?php
$host = "pedt.myd.infomaniak.com";
$database = "pedt_virusdatabase";
$user = "pedt_virusdata";
$pass = "virus_Data!!";

try
{
	$bdd = new PDO('mysql:host=pedt.myd.infomaniak.com;dbname=pedt_virusdatabase;charset=utf8;port=3306', $user, $pass);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

 echo "Connected successfully";

?>
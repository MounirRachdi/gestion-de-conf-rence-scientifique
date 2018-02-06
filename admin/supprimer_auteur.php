<?php
include "../connexion.php";
$id=$_GET["id"];
$req="delete from auteur where id_auteur=$id";
mysql_query($req) or die(mysql_error());
header("location:gerer_auteur.php");




?>
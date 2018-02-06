<?php
include "../connexion.php";
$id=$_GET["id"];
$req="update auteur set situation=2 where id_auteur=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
header("location:gerer_auteur.php");


?>
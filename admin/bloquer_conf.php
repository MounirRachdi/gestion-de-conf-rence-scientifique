<?php
include "../connexion.php";
$id=$_GET["id"];
$req="update conference set situation=2 where id_conf=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
header("location:Gerer_conference.php");


?>
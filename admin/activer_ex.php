<?php
include "../connexion.php";
$id=$_GET["id"];
$req="update examinateur set situation=1 where id_examinateur=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
header("location:gerer_examinateur.php");


?>
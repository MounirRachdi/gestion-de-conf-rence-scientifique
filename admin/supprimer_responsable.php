<?php
include "../connexion.php";
$id=$_GET["id"];
$req="delete from responsable where id_resp=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
header("location:gerer_responsable.php");



?>
<?php
include "../connexion.php";
$id=$_GET["id"];
$req="update responsable set situation=1 where id_resp=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
header("location:gerer_responsable.php");


?>
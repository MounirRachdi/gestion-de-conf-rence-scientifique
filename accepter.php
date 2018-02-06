<?php
include "connexion.php";
$papier=$_GET['p'];
$req="update papier set etat=1 where id_papier=$papier";
$res=mysql_query($req) or die(mysql_error());
if($res)
header("location:responsable.php");

?>

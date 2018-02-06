<?php
include "connexion.php";
$papier=$_GET['p'];
$req="update papier set etat=2 where id_papier=$papier";
$res=mysql_query($req) or die(mysql_error());
$req2="delete from evaluation where papier=$papier";
$r=mysql_query($req2) or die(mysql_error()) ;
if($res && $r)
header("location:responsable.php");

?>

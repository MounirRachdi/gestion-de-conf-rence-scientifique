<?php
include "../connexion.php";
$id=$_GET["id"];
$req="delete from examinateur where id_examinateur=$id";
if(mysql_query($req))
{
echo "suppression fait avec succ�es";
include "gerer_examinateur.php";
}



?>
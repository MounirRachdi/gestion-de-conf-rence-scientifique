<?php
include "connexion.php";
$id=$_GET["id"];
$req="delete from conference where id_conf=$id";
if(mysql_query($req))
{
echo "suppresion de conference fait avec succ�es";
include "Gerer_conference.php";

}



?>
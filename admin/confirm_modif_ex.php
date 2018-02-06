<?php
include "../connexion.php";
session_start();

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$spec=$_POST["specialite"];
$login=$_POST["login"];
$pwd=$_POST["password"];
$req="update examinateur set nom='$nom', prenom='$prenom', mail='$mail', specialite='$spec', login='$login', password='$pwd' where id_examinateur=".$_SESSION["id_exam"]; 
$res=mysql_query($req) or die(mysql_error());
if($res){

include "gerer_examinateur.php";
echo "ajout fait avec succé";
}

?>
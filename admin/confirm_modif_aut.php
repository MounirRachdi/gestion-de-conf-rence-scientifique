<?php
include "../connexion.php";
session_start();

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$spec=$_POST["specialite"];
$login=$_POST["login"];
$pwd=$_POST["password"];
$req="update auteur set nom='$nom', prenom='$prenom', mail='$mail', specialite='$spec', login='$login', password='$pwd' where id_auteur=".$_SESSION["id_aut"]; 
$res=mysql_query($req) or die(mysql_error());
if($res){
echo "ajout fait avec succé";
include "gerer_auteur.php";

}

?>
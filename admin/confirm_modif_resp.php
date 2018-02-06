<?php
include "../connexion.php";
session_start();

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$spec=$_POST["specialite"];
$login=$_POST["login"];
$pwd=$_POST["password"];
$ville=$_POST["ville"];
$tel=$_POST["telephone"];
$id=$_SESSION["id_resp"];
$req="update responsable set nom='$nom', prenom='$prenom', specialite='$spec', mail='$mail', login='$login', password='$pwd', ville='$ville', telephone='$tel' where id_resp=$id"; 
$res=mysql_query($req) or die(mysql_error());
if($res){

header("location:gerer_responsable.php";

}

?>
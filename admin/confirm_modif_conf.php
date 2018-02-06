<?php
include "../connexion.php";
session_start();
if(!empty($_POST["lib"]) && !empty($_POST["domaine"]) && !empty($_POST["lieu"]) && !empty($_POST["date"]) && !empty($_POST["resp"]))
{
$lib=$_POST["lib"];
$domaine=$_POST["domaine"];
$lieu=$_POST["lieu"];
$date=$_POST["date"];
$resp=$_POST["resp"];
$id_conf=$_SESSION["id_conf"];
$req3="UPDATE conference SET nom_court='$lib', description='$des', domaine='$domaine', lieu_conf='$lieu', date_conf='$date', responsable=$resp WHERE id_conf=$id_conf";
$rs=mysql_query($req3) or die(mysql_error())
if($rs){
echo "<center>Modification du conference fait avec succéesé</center>";

include "Gerer_conference.php";
}
else
echo "erreur dans la modification";




}
?>
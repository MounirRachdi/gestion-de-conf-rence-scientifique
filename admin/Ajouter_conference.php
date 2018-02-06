<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gerer conference</title>
<style type="text/css">
<!--
.Style1 {
	color: #CC0000;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<?php
include "../connexion.php";
$req2="select id_resp, nom from responsable ";
$res2=mysql_query($req2) or die(mysql_error());?>
<h2 align="center" class="Style1">Ajout  de nouvelle conf&eacute;rence</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<table width="200" border="0" align="center">
  <tr>
    <td>Libell&eacute;e de conf&eacute;rence: </td>
    <td>
    
      <textarea name="lib" required></textarea>
        
    
    </td>
    <td>Domaine:</td>
    <td><input type="text" name="domaine" required /></td>
  </tr>
  <tr>
    <td>Lieu de conf&eacute;rence: </td>
    <td><input type="text" name="lieu"  required/></td>
    <td>Date de confernce: </td>
    <td><input type="date" name="date" required /></td>
  </tr>
  <tr>
    <td>Responsable de conf&eacute;rence: </td>
    <td>
	<select name="resp">
<?php 
while($line=mysql_fetch_row($res2))
{

echo "<option value=$line[0]>$line[1]</option>";
	
	
	 }?>
	</select>
	</td>
  <td>Description:</td>
    <td><textarea name="des" ></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
     
        <input type="submit" name="Submit" value="Ajouter" />
    
   
    </td>
    <td><input type="reset" value="Annuler" /></td>
    <td>&nbsp;</td>
  </tr>
</table></form>
<?php
if(!empty($_POST["lib"]) && !empty($_POST["domaine"]) && !empty($_POST["lieu"]) && !empty($_POST["date"]) && !empty($_POST["resp"]))
{
$lib=$_POST["lib"];
$domaine=$_POST["domaine"];
$lieu=$_POST["lieu"];
$date=$_POST["date"];
$resp=$_POST["resp"];
//$id_conf=$_SESSION["id_conf"];
$req3="insert into conference(libelle_conf, domaine, lieu_conf, date_conf, responsable,situation) values('$lib', '$domaine','$lieu','$resp',2)";
if(mysql_query($req3))
{
header("Refresh: 0");


 }

else
echo "erreur !!!";



}
?>

</body>
</html>

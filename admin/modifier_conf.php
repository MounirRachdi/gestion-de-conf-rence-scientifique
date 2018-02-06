<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include "../connexion.php";
$id=$_GET["id"];
session_start();
$_SESSION["id_conf"]=$_GET["id"];
$req="select * from conference where id_conf=$id";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);
$req2="select id_resp, nom from responsable ";
$res2=mysql_query($req2) or die(mysql_error());

?>
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

<h2 align="center" class="Style1">Modification de conf&eacute;rence</h2>
<form method="post" action="confirm_modif_conf.php">
<table width="200" border="0" align="center">
  <tr>
    <td>Libell&eacute;e de conf&eacute;rence: </td>
    <td>
    
      <input type="text" name="lib" value="<?php  echo $ligne[1];?>" />
        
    
    </td>
    <td>Domaine:</td>
    <td><input type="text" name="domaine" value="<?php  echo $ligne[3];?>" /></td>
  </tr>
  <tr>
    <td>Lieu de conf&eacute;rence: </td>
    <td><input type="text" name="lieu" value="<?php  echo $ligne[4];?>"  /></td>
    <td>Date de confernce: </td>
    <td><input type="date" name="date" value="<?php  echo $ligne[5];?>" /></td>
  </tr>
  <tr>
    <td>Responsable de conf&eacute;rence: </td>
    <td><select name="resp">
<?php 
while($line=mysql_fetch_row($res2))
{

echo "<option value=$line[0]>$line[1]</option>";
	
	
	 }?>
	</select>
	</td>
    <td>Description:</td>
    <td><textarea name="des" ><?php echo $ligne[2];?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
     
        <input type="submit" name="Submit" value="Modifier" />
    
   
    </td>
    <td><input type="reset" value="Annuler" /></td>
    <td>&nbsp;</td>
  </tr>
</table></form>

</body>
</html>

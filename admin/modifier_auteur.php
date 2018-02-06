<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/contact-form.css" type="text/css" rel="stylesheet" />
<title>Ajout auteur</title>
<style type="text/css">
<!--
.Style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #CC0000;
}

   [required] {
   border: 2px solide orange;
}
:required {
   border: 2px solide orange;
}
.bouton
{
background:url(image/bluesky.jpg);
display:block;
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
	cursor:hand;
}
</style>
</head>

<body>
<?php
include "../connexion.php";
session_start();
$id=$_GET["id"];
$_SESSION["id_aut"]=$id;
$req="select * from auteur where id_auteur=$id";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);
 
?>
<form method="post" action="confirm_modif_aut.php"><center>
<h2><span class="Style1"> Ajout d'un auteur </span></h2></center><br /><br />
<table border="0" align="center">
<tr><td>Nom de l'auteur:</td>
<td><input type="text" name="nom" value="<?php echo $ligne[1]; ?>" required />
</td><td>Prenom de l'auteur:</td><td>
<input type="text" name="prenom" value="<?php echo $ligne[2]; ?>" required /></td>

</tr>
<tr><td>Adresse mail:</td>
<td><input type="text" name="mail" value="<?php echo $ligne[3]; ?>"  required /></td>
<td>Specialité:</td><td>
<input type="text" name="specialite" value="<?php echo $ligne[4]; ?>" required /></td>

</tr>

<tr><td>Login:</td>
<td><input type="text" name="login" value="<?php echo $ligne[5]; ?>" required /></td>
<td>Mot de passe </td><td>
<input type="password" name="password" value="<?php echo $ligne[6]; ?>" required /></td>

</tr>
<tr><td colspan="2" align="center">
<input type="submit" value="Ajouter" name="submit" class="bouton" />
</td>
<td colspan="2" align="center">
<input type="reset" value="Annuler" class="bouton" /></td></tr>
</table>
</form>

</body>

</html>

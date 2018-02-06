<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/contact-form.css" type="text/css" rel="stylesheet" />
<title>Ajout responsable</title>
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"><center>
<h2><span class="Style1"> Ajout d'un auteur </span></h2></center><br /><br />
<table border="0" align="center">
<tr>
  <td>Nom du responsable:</td>
  <td><input type="text" name="nom" required />
</td><td>Prenom :</td><td>
<input type="text" name="prenom" required /></td>

</tr>
<tr><td>Adresse mail:</td>
<td><input type="text" name="mail" required /></td>
<td>Specialité:</td><td>
<input type="text" name="specialite" required /></td>

</tr>

<tr><td>Login:</td>
<td><input type="text" name="login" required /></td>
<td>Mot de passe </td><td>
<input type="password" name="password" required /></td>

</tr>
<tr><td>Ville:</td>
<td><input type="text" name="ville" required /></td>
<td>Telephone: </td><td>
<input type="text" name="telephone" required /></td>

</tr>
<tr><td colspan="2" align="center">
<input type="submit" value="Ajouter" name="submit" class="bouton" />
</td>
<td colspan="2" align="center">
<input type="reset" value="Annuler" class="bouton" /></td></tr>
</table>
</form>

</body>
<?php
include "../connexion.php";
if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["specialite"]) && !empty($_POST["login"])&& !empty($_POST["password"]) && !empty($_POST["ville"]) && !empty($_POST["telephone"]))
{
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$spec=$_POST["specialite"];
$login=$_POST["login"];
$pwd=$_POST["password"];
$ville=$_POST["ville"];
$tel=$_POST["telephone"];
$req="INSERT INTO responsable(nom, prenom, specialite, mail, login, password, ville, telephone) values('$nom', '$prenom', '$spec', '$mail', '$login', '$pwd', '$ville', '$tel')";

if(mysql_query($req))
echo "ajout fait avec succé";

}

?>
</html>

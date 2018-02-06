<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/contact-form.css" type="text/css" rel="stylesheet" />
<title>Ajout examinateur</title>
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
$req="select * from examinateur";
$req2="select * from papier ";
$res2=mysql_query($req2) or die(mysql_error());
$res=mysql_query($req) or die(mysql_error());

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"><center>
<h2><span class="Style1"> Ajout d'un examinateur </span></h2></center><br /><br />
<table width="266" height="173" border="0" align="center">
<tr><td width="154">Choisir examinateur:</td>
<td width="102">
<select name="exam">
<?php 
while($ligne=mysql_fetch_row($res))
{
echo "<option value=".$ligne[0]." >".$ligne[1]." ".$ligne[2]."</option>";
}

?>

</select>
</td>
</tr>
<tr><td>
Choisir papier:
</td><td><select name="papier">
<?php 
while($line=mysql_fetch_row($res2))
{
echo "<option value=".$line[0]." >".$line[2]."</option>";
}

?></select>
</td>
<tr><td colspan="2" align="center"> <input type="submit" value="Assigner" class="bouton" /></td>
</table>
</form>

</body>
<?php
if(!empty($_POST["papier"]) && !empty($_POST["exam"]))
{
$pap=$_POST["papier"];
$exam=$_POST["exam"];
$req3="update papier set exam=$exam where id_papier=$pap";
if(mysql_query($req3))
echo "<centert>ajout fait avec succé </center>";
}

?>
</html>

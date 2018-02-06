<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="css/lien.css" />
<script type="text/javascript">
function visibilite(thingId) 
{
	var targetElement;targetElement = document.getElementById(thingId) ;
	if (targetElement.style.display == "none")
	{targetElement.style.display = "" ;} 
	else {targetElement.style.display = "none" ;}
}
  </script>
  <style type="text/css">
tr:hover
{
background-image:url(image/fond2.png);}

</style>
</head>

<body>
<div align="center">
      <h2><span class="Style1"> Gestion des responsables </span><br />
        <br />
        <br />
        </h2>
</div>
<div align="center">
      <span style="color: #0033FF">
      <a href="javascript:visibilite('table');" class="liens" > </a></span></div>
    <br /><br /><br /><br /><br />
<?php
include "../connexion.php";
$req="select * from responsable";
$res=mysql_query($req) or die(mysql_error());

?>
<table border="1" align="center"  id="table"  style="display:;">
<tr><th>Nom </th>
<th>Prenom</th>
<th>Specialité</th>
<th>Adresse mail</th>

<th>login</th>
<th>mot de passe</th>

<th>ville</th>
<th>telephone</th>
<th>Action</th>
<th>Modifier</th>
<th>Bloquer</th>

</tr>
<?php
while($ligne=mysql_fetch_row($res))
{
?>
<tr><td><?php echo $ligne[1]; ?></td>
<td><?php echo $ligne[2]; ?></td>
<td><?php echo $ligne[3]; ?></td>
<td><?php echo $ligne[4]; ?></td>
<td><?php echo $ligne[5]; ?></td>
<td><?php echo $ligne[6]; ?></td>
<td><?php echo $ligne[7]; ?></td>
<td><?php echo $ligne[8]; ?></td>
<?php if($ligne[9]==1)
{?>
<td align="center"><a href="bloquer_resp.php?id=<?php echo $ligne[0];?>" target="_self" >Bloquer</a></td>
<?php  }
else
{
?>
<td align="center"><a href="activer_resp.php?id=<?php echo $ligne[0];?>" target="_self" >Activer</a></td><?php }?>
<td align="center"><a href="modifier_responsable.php?id=<?php echo $ligne[0];?>" target="_self" ><img src="image/modifier.png" /></a></td>
<td align="center"><a href="supprimer_responsable.php?id=<?php echo $ligne[0];?>" target="_self" ><img src="image/supp.png" /></a></td>
</tr>
<?php
} ?>
</table>
</body>
</html>

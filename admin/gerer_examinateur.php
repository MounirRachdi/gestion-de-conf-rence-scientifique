<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="css/lien.css" />
<style type="text/css">
tr:hover
{
background-image:url(image/fond2.png);}

</style>
<script type="text/javascript">
function visibilite(thingId) 
{
	var targetElement;targetElement = document.getElementById(thingId) ;
	if (targetElement.style.display == "none")
	{targetElement.style.display = "" ;} 
	else {targetElement.style.display = "none" ;}
}
  </script>
</head>

<body>
<div align="center">
      <h2><span class="Style1"> Gestion des examinateurs </span><br />
        <br />
        <br />
  </h2>
</div>
<div align="center">
      <span style="color: #0033FF"><a href="Assigner_papier.php" class="liens">Assigner papier</a>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="javascript:visibilite('table');" class="liens" > Liste des examinateurs</a></span></div>
    <br /><br /><br /><br /><br />
<?php
include "../connexion.php";
$req="select * from examinateur";
$res=mysql_query($req) or die(mysql_error());

?>
<table border="1" align="center" id="table"  style="display:;" width="92%">
<tr><th>Nom </th>
<th>Prenom</th>
<th>Adresse mail</th>
<th>Specialité</th>
<th>login</th>
<th>mot de passe</th>
<th>Action</th>
<th>Modifier</th>
<th>Supprimer</th>

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


<?php if($ligne[7]==1)
{?>
<td align="center"><a href="bloquer_ex.php?id=<?php echo $ligne[0];?>" target="_self" >Bloquer</a></td>
<?php  }
else
{
?>
<td align="center"><a href="activer_ex.php?id=<?php echo $ligne[0];?>" target="_self" >Activer</a></td><?php }?>
<td align="center"><a href="modifier_examinateur.php?id=<?php echo $ligne[0];?>" target="_self" ><img src="image/modifier.png" /></a></td>
<td align="center"><a href="supprimer_exam.php?id=<?php echo $ligne[0];?>" target="_self" ><img src="image/supp.png" /></a></td>
</tr>
<?php
} ?>
</table>
</body>
</html>

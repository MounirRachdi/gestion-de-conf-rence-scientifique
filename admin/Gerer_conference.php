<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gerer conférence</title>
<link rel="stylesheet" type="text/css" href="css/lien.css" />
<style type="text/css">
<!--
.Style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #CC0000;
}
-->

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
</head><body>

    <div align="center">
      <h2><span class="Style1"> Gestion des conférences </span><br />
        <br />
        <br />
        </h2>
</div>
    <div align="center">
      <span style="color: #0033FF"><a href="Ajouter_conference.php" class="liens">Ajouter conférence</a>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="javascript:visibilite('table');" class="liens" > Liste des conférences</a></span></div>
    <br /><br /><br /><br /><br />
    <?php
include "../connexion.php";
$req="select * from conference";
$res=mysql_query($req) or die(mysql_error());

?>
  <table border="1" align="center" id="table"  style="display:;">
<tr><th>Nom </th>
<th>Description </th>
<th>Domaine de conférence</th>
<th>lieu de conférence</th>
<th>date de conférence</th>
<th>Responsable de la conférence</th>
<th>Action</th>
<th>Modifier</th>

<th>Supprimer</th>

</tr>
<?php
while($ligne=mysql_fetch_row($res))
{ 
$req2="select r.nom from responsable r, conference c where r.id_resp=responsable and id_resp=$ligne[6]";
$res2=mysql_query($req2)or die(mysql_error());
$line=mysql_fetch_row($res2);

?>
<tr><td><?php echo $ligne[1]; ?></td>
<td><?php echo $ligne[2]; ?></td>
<td><?php echo $ligne[3]; ?></td>
<td><?php echo $ligne[4]; ?></td>
<td><?php echo $ligne[5]; ?></td>
<td><?php echo $line[0]; ?></td>
<?php if($ligne[7]==1)
{?>
<td align="center"><a href="bloquer_conf.php?id=<?php echo $ligne[0];?>" target="_self" >Bloquer</a></td>
<?php  }
else
{
?>
<td align="center"><a href="activer_conf.php?id=<?php echo $ligne[0];?>" target="_self" >Autoriser</a></td><?php }?>
<td align="center"><a href="modifier_conf.php?id=<?php echo $ligne[0];?>" target="_self" ><img src="image/modifier.png" /></a></td>
<td align="center"><a href="supprimer_conf.php?id=<?php echo $ligne[0];?>" target="_self" ><img src="image/supp.png" /></a></td>
</tr>
<?php
} ?>
</table>
</body>
</html>

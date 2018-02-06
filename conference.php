<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Corporate Blue Theme - Free Website Template</title>
<meta name="keywords" content="corporate blue, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Corporate Blue Theme is a free website template provided by tooplate.com" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<!--   Free Website Template by t o o p l a t e . c o m   -->
<style type="text/css">
<!--
.Style1 {
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
	color: #FF0000;
}
#conf tr:hover
{
background:#FFFFCC;}
-->
.submit {
	margin: 5px 0px;
	padding: 3px 14px;
	font-weight: bold;
	border: 1px solid #dfdfdf;
	background: #F3F3F3;
}
</style>
</head>

<body style="height:auto">

<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
    
    	<div id="site_title">
            <h1><a rel="nofollow" href="http://www.tooplate.com"><!--<img src="images/tooplate_logo.png" alt="logo" />--><span>System de soumission des papiers </span></a></h1>
        </div> <!-- end of site_title -->
	<div id="header_right">
        
        	<div id="social_box">
                
                <div class="cleaner"></div>
			</div>   
			         
             <div id="search_box">
			 
                <form action="rcherche.php" method="get">
                    <input type="text" value="Chercher" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                  <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
                </form>
            </div>
            	
        </div>
	</div>
</div>

<div id="tooplate_middle_wrapper">
	<div id="tooplate_middle">
    
  <img src="image/conference.jpg" alt="Image 01" />
     <div id="middle_content">
       <form method="post" action="confirm_conect.php" id="form">
 <table border="0" align="center" width="50%">
  <tr>
    <td height="53" align="center" ><input type="text" placeholder="Login" name="login" required/></td>
  
  
    <td height="53" align="center" ><input type="password" placeholder="mot de passe"  name="pwd"  required /></td>
  </tr>
 <tr><td align="center">
  <select name="type">
  <option value="" selected="selected">choisir type</option>
  <option value="responsable">Responsable</option>
   <option value="examinateur">Examinateur</option>
    <option value="auteur">auteur</option>
	<option value="admin">Administrateur</option>

  
  </select>
 </td>
 </tr>
  <tr>
    <td height="56" align="center" ><input id="Button1" type="submit" value="Connexion" width="101px" height="30px" class="submit"  /> </td>
  </tr><tr><td width="465" height="22" align="center">
	<a href="pass_oublie.php"  class="lien" >Mot de passe oublié?</a> </td><td>  <a href="inscription.php" class="lien">Creer un compte</a> </td>
  <td width="101"></td>
  </tr>
</table>

</form>

           <!-- <div class="wwu_btn"><a href="#"></a></div>-->
        </div>
		</div>
</div>

 <div id="tooplate_menu">
                
    <ul>
         <li><a href="index.html">Acceuil</a></li>
        <li><a href="conference.php" class="current">Conf&eacute;rence</a></li>
       
      <li><a href="inscription.php">Inscription</a></li>
			<li><a href="soumettre_papier.php">Papier</a></li> 
			  <li><a href="contact.php">Contact</a></li>
    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
    
<div id="tooplate_content">


  <center>
    <span class="Style1">Listes des prochaines conf&eacute;rences</span>
  </center><br />
  <table align="center" border="0" width="50%" id="conf" style="border-style:dashed;">
    <?php
include "connexion.php";
$req="select * from conference where DAY(date_conf)>=DAY(CURDATE())";
$res=mysql_query($req) or die(mysql_error());
while ($ligne=mysql_fetch_row($res))
{
?>
 <tr> 
 <td>
 <strong><?php echo $ligne[1].": "?> </strong><?php echo $ligne[2]; ?> <br />
 <?php echo $ligne[4]  ?><br />
<?php echo date('d-m-Y', strtotime($ligne[5]));?><br />
<a href="inscri_conf.php">S'inscrir à la conference</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="papier.php?id=<?php echo $ligne[0];?>" target="_blank" >>fichier detailler</a> 
<br /><br />
 </td>
 </tr>
 
 <?php
 }
 
 ?>
 </table>
</div>
<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
     
        Copyright &#64; 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div> 

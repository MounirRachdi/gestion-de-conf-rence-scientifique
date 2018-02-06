
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Corporate Blue Theme - Contact Form</title>
<meta name="keywords" content="corporate blue, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Corporate Blue Theme is a free website template provided by tooplate.com" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  
  
 .submit {
	margin: 5px 0px;
	padding: 3px 14px;
	font-weight: bold;
	border: 1px solid #dfdfdf;
	background: #F3F3F3;
}
  </style>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
<script type="text/javascript">

var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("confirmpwd");

function validatePassword(){
  if(pwd.value != confirmpwd.value) {
    confirmpwd.setCustomValidity("incohérence entre mot de passe et confirmation ");
  } else {
    confirmpwd.setCustomValidity('');
  }
}

pwd.onchange = validatePassword;
confirmpwd.onkeyup = validatePassword;


</script>

</script>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</head>
<body> 

<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
    
    	<div id="site_title">
            <h1><a rel="nofollow" href="http://www.tooplate.com"><!--<img src="images/tooplate_logo.png" alt="logo" />--><span>Your tagline goes here</span></a></h1>
        </div> <!-- end of site_title -->
	<div id="header_right">
        
        	<div id="social_box">
                
                <div class="cleaner"></div>
			</div>   
			         
             <div id="search_box">
			 
                <form action="#" method="get">
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
    <td height="53" align="center" ><input type="text" placeholder="Login" class="input" name="login" required/></td>
  
  
    <td height="53" align="center" ><input type="password" placeholder="mot de passe" class="input" name="pwd" required /></td>
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
	<a href=""  class="lien" >Mot de passe oublié?</a> </td><td>  <a href="inscription.php" class="lien">Creer un compte</a> </td>
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
       <li><a href="index.html" >Home</a></li>
        <li><a href="conference.php">Conf&eacute;rence</a></li>
        <li><a href="services.html">Services</a></li>
      <li><a href="inscription.php">Inscription</a></li>
        <li><a href="contact.html">Contact</a></li>
	<!--<li><a href="connection.php">Connexion</a></li>-->
    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
   
<div id="tooplate_content">

<?php
include "connexion.php";
if(empty($_POST["type"]))
{
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$specialite=$_POST["specialite"];
$ville=$_POST["ville"];
$pass=$_POST["pass"];
$tel=$_POST["telephone"];
$confirmpass=$_POST["confirmpass"];
$login=$_POST["login"];
$req="insert into utilisateur(nom, prenom, specialite, login, password, mail, ville, telephone) values('$nom', '$prenom', '$specialite', '$login', '$pass', '$mail', '$ville', '$tel' )";
$res=mysql_query($req) or die(mysql_error());
if($res)
{echo "inscription fait avec succée";
}
else
echo "erreur";
}
else if($_POST["type"]=="auteur")
{
include "connexion.php";

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$spec=$_POST["specialite"];
$login=$_POST["login"];
$pwd=$_POST["pass"];
$req="INSERT INTO auteur(nom, prenom, mail, specialite, login, password,situation) values('$nom', '$prenom', '$mail', '$spec', '$login', '$pwd',2)";

$res=mysql_query($req)or die(mysql_error());
if($res)
echo "inscription fait avec succée";
else
echo "erreur d'inscription";
 

}
else if($_POST["type"]=="examinateur")
{
include "connexion.php";

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$spec=$_POST["specialite"];
$login=$_POST["login"];
$pwd=$_POST["pass"];
$req="INSERT INTO examinateur(nom, prenom, mail, specialite, login, password, situation) values('$nom', '$prenom', '$mail', '$spec', '$login', '$pwd',2)";
if(mysql_query($req))
echo "inscription fait avec succée";
else
echo "erreur d'inscription";

}
else if($_POST["responsable"])
{ include "connexion.php";
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$spec=$_POST["specialite"];
$login=$_POST["login"];
$pwd=$_POST["pass"];
$ville=$_POST["ville"];
$tel=$_POST["telephone"];
$req="INSERT INTO responsable(nom, prenom, specialite, mail, login, password, ville, telephone, situation) values('$nom', '$prenom', '$spec', '$mail', '$login', '$pwd', '$ville', '$tel',2)";

$res=mysql_query($req) or die(mysql_error());
if($res)
echo "inscription fait avec succée";
else
echo "erreur d'inscription";
}
?>
</div>

<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
     
        Copyright © 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div> 
</body></html>
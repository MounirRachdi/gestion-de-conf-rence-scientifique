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
      <li><a href="inscription.php" class="current">Inscription</a></li>
        <li><a href="contact.html">Contact</a></li>
<!--	<li><a href="connection.php">Connexion</a></li>-->
    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
    




<div id="tooplate_content">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<table align="center" border="0" >
<tr><td>Entrer votre adresse mail</td><td><input type="email" required name="mail"  /></td>
<tr><td align="center" colspan="2"><input type="submit" value="Envoyer" /></td></tr>

</table>
</form></div>
<?php
if(!empty($_POST["mail"]))
{
$expediteur =$_POST["mail"] ;
$destinataire='monia-ibrahim@hotmail.com';
$headers = "From: ". $expediteur ;
//$copie = 'adresse@fai.com';
//$copie_cachee = 'adresse@fai.com';
$objet = 'Test'; // Objet du message
/*
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire*/
//$headers .= 'Cc: '.$copie."\n"; // Copie Cc
//$headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
$message = $expediteur." mot de passe oublier ";
$smtp="smtp.developpez.com";
if (mail($destinataire, $objet, $message,$headers)) // Envoi du message
{
    echo '<center>Votre message a bien été envoyé </center> ';
}
else // Non envoyé
{
    echo "<center>Votre message n'a pas pu être envoyé</center>";
}}
?>
<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
     
        Copyright © 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div> 
</body></html>
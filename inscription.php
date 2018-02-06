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
            <h1><a rel="nofollow" href="http://www.tooplate.com"><!--<img src="images/tooplate_logo.png" alt="logo" />--><span>System de soumission des papiers</span></a></h1>
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
       <li><a href="index.html" >Acceuil</a></li>
        <li><a href="conference.php">Conf&eacute;rence</a></li>
     
      <li><a href="inscription.php" class="current">Inscription</a></li>
       
	<li><a href="soumettre_papier.php">Papier</a></li> <li><a href="contact.php">Contact</a></li>
    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
    




<div id="tooplate_content">
<div id="main" role="main"><!--TYPO3SEARCH_begin--><article>

  
  
  <h3 align="center">Creation de nouveau compte </h3>
  
  
  <form method="post" name="user" action="confrim_compte.php">


  <!-- 
    *************************************************************
      ACCOUNT
    *************************************************************
   -->
  
 <fieldset	><legend style="color: #0066FF">Information personnel</legend>
  <!--<fieldset>-->
 
	  <table border="0" align="center" width="80%" cellspacing="2" id="contact_form">
	    <tr><td height="47" align="center" >
	 
      <label for="firstName">Nom*</label></td><td >
      <input name="nom" type="text" id="nom" required class="textbox"></td>
	  
	  
 
    <td height="58" align="center" >
      <label for="lastName">Prenom* </label></td><td>
      <input name="prenom" type="text" id="prenom" required class="textbox">
    </td>
	
	
	</tr><tr><td height="55" align="center">
    
      <label for="username">Specialité: *</label></td><td>
      <input name="specialite" type="text" id="specialite" required class="textbox" ></td>
	 
	<td height="49" align="center">
    
      <label for="username">E-mail*</label></td><td>
      <input name="mail" type="email" id="mail" required class="textbox" ></td>
	  <tr><td height="51"  align="center" >
      <label for="user.telephone">Telephone*</label></td><td>
      <input type="text" name="telephone"  required class="textbox"/></td>
	  <td height="48" align="center">
      <label for="user.fax">Ville</label></td><td>
      <input type="text" name="ville" class="textbox"></td></tr>
	   <tr><td height="48" align="center">
      <label for="user.fax">login</label></td><td>
      <input type="text" name="login" class="textbox"></td>
	  <td height="50"align="center" >
      <label for="password">Mot de passe *</label></td><td>
      <input type="password" name="pass" id="pwd" required class="textbox" onchange="validatePassword()"/></td></tr>
	 <tr> <td height="56" align="center" >
     
      <label for="passwordConfirm">Confirmer mot de passe*</label></td><td>
      <input type="password" name="confirmpass" id="confirmpwd"  class="textbox" required onkeyup="validatePassword()"/> <span id='message'></span>
  </td>
  <td>
  Type*
  </td>
  <td>
  <select name="type">
  <option value="" selected="selected">choisir type</option>
  <option value="Responsable">Responsable</option>
   <option value="examinateur">Examinateur</option>
    <option value="auteur">auteur</option>

  
  </select>
  </td>
  </tr>
   
	  <tr><td></td><td align="center"><input type="submit" value="Enregistrer"  class="submit" /></td>
	  <td></td>
	  <td align="center" ><input type="reset" value="Annuler" class="submit" /></td>
	  </tr>
    </table>
 
  </fieldset>
 
    

    
    
  
  </form>  </div></div>
<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
     
        Copyright © 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div> 

</body>
</html>

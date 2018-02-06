<?php

session_start();

?>
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
.Style2 {color: #0000FF}
</style>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
function visibilite(thingId) 
{
	var targetElement;targetElement = document.getElementById(thingId) ;
	if (targetElement.style.display == "none")
	{targetElement.style.display = "" ;} 
	else {targetElement.style.display = "none" ;}
}
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
       
      <li><a href="inscription.php" >Inscription</a></li>
     
	<li><a href="soumettre_papier.php" class="current">Papier</a></li>
	   <li><a href="contact.php">Contact</a></li>
    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
    
<?php

include "connexion.php";
$req="select * from conference ";
$res=mysql_query($req) or die(mysql_error());

if(!isset($_SESSION['auteur']) && empty($_SESSION['auteur']))
header("location:connection.php");
else{
$auteur=$_SESSION["auteur"];
?>
<div id="tooplate_content">
<div align="right"><a href="logout.php" class="Style2">Deconnexion</a></div>
<center>
<a href="mes_papier.php?id=<?php echo $auteur;?>">Mes papier</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="javascript:visibilite('table');" class="liens" >Soumettre papier</a> </center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
    <table align="center" border="0" id="table"  style="display:none;"><tr><td>  <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	  <input type="file" name="fichier" required /></td><td>
	  <select name="conference">
	  <option selected="selected">Choisir la conference</option>
	  <?php       
	  while($ligne=mysql_fetch_row($res))
	  {
	  echo "<option value=$ligne[0]>$ligne[1]</option>";
	  }
	  ?>
	  </select>
	  </td></tr><tr><td>
	  <input name="upload" type="submit" id="upload" value=" Ajouter " class="submit"></td>
	  <td></td>
	  </tr></table>
</form>
<div style="padding:200px 0 0 0;"></div>
  
<?php
//include "connexion.php";
if(isset($_POST['upload']) && !empty($_FILES['fichier']) && $_FILES['fichier']['size'] > 0)
{
$fileName = $_FILES['fichier']['name'];
$tmpName  = $_FILES['fichier']['tmp_name'];
$fileSize = $_FILES['fichier']['size'];
$fileType = $_FILES['fichier']['type'];
$conf=$_POST["conference"];
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}


$rootPath = realpath($_SERVER['DOCUMENT_ROOT']);

$dossier= $rootPath."\\Conference\\papier\\";
copy($tmpName,$dossier.$fileName);
$query = "INSERT INTO papier (titre, nom, type, data, etat,date_soumiss,auteur,conference ) ".
"VALUES ('$fileName', '$fileName', '$fileType', '$tmpName', 2, CURDATE(),$auteur,$conf)";

$res=mysql_query($query) or die(mysql_error()); 
//include 'library/closedb.php';
if($res)
echo "<center>Papier a ajouter avec succée </center>";
} }
?>
</div></div>
<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
     
        Copyright © 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div> 

</body></html>
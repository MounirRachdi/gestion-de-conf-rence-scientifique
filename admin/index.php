<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="form">
<fieldset ><legend style="color:#0099FF">Connexion </legend>
 <table border="0" align="center" width="350px">
  <tr>
    <td height="53" align="center" ><input type="text" placeholder="Login" class="input" name="login" required/></td>
  </tr>
  <tr>
    <td height="53" align="center" ><input type="password" placeholder="mot de passe" class="input" name="pwd" required /></td>
  </tr>
 
  <tr>
    <td height="56" ><input id="Button1" type="submit" value="Connexion" width="101px" height="30px" class="Button1"  /> </td>
  </tr><tr><td width="465">
	<a href=""  class="lien" >Mot de passe oublié?</a></td>
  <td width="101"></td>
  </tr>
</table>
</fieldset>
</form>
<?php

include "../connexion.php";
session_start();

if(!empty($_POST['login']) && !empty($_POST['pwd'])){
$num=0;
$login=$_POST['login'];
$password=$_POST['pwd'];
$req="select * from admin where login='$login' and password='$password' ";
$res=mysql_query($req) or die(mysql_error());
$num=mysql_num_rows($res);
if($num>0)
header("location:acceuil.php");
else
{echo "verifier votre paramétre de connexion";
header("refresh, 0");
 }

}
?>
</body>
</html>

<?php
include "connexion.php";
session_start();
if(!empty($_GET["id_p"]) && !empty($_POST["eval"]))
{
$papier= $_GET["id_p"];
$eval =$_POST["eval"];
$req="insert into evaluation(evaluation, papier) values('$eval', $papier)";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
?>
<script type="text/javascript">
if(confirm("Envoi effectuer avec succé"))
window.location='examinateur.php';

</script>

<?php

}
}


?>

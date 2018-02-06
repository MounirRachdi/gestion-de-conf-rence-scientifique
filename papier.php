<?php
include "connexion.php";
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database


$id = $_GET['id'];
$query = "SELECT id_papier, nom, type, data FROM papier p, conference c WHERE p.conference=c.id_conf and c.id_conf=$id";
         

$result = mysql_query($query) or die(mysql_error());
list($id, $name, $type, $content) =  mysql_fetch_array($result);
header('Content-type: $type');

 header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: public");
?>
<iframe src="papier/<?php echo $name?>" width="100%" height="100%" frameborder="0"></iframe>
<?php

/*
header("Content-Disposition: inline; filename=$name");

header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
echo $content;*/
}

?>


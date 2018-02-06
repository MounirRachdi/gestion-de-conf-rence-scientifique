<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php

   $mbox = imap_open("{imap-mail.outlook.com:993/imap/ssl}INBOX","monia-ibrahim@hotmail.com","mimorachdi/1992%")
     or die("can't connect: " . imap_last_error());
  $nombreMessage = imap_num_msg($mbox); // Retourne le nombre de messages dans la boîte aux lettres courante

                while($nombreMessage > 0) // Si seulement il y a des messages on les affiche
                {
                    $corpsMail = imap_body($mbox, $nombreMessage);
                    if($corpsMail == null)
                    {
                        echo "Le corps du message est vide...";
                    }
                    else
                    {
                        echo 'Récupération du corps du '.$nombreMessage.' message...';
                        echo '<pre>';
                            print_r($corpsMail);
                        echo '</pre>';
                        $nombreMessage--;
                    }
               set_time_limit (60 ); } 
imap_close($mbox);
 ?>
</body>
</html>

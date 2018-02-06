<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
$uid = $_GET['uid'];
      $headerText = imap_fetchHeader($mbox, $uid, FT_UID);
      $header = imap_rfc822_parse_headers($headerText);

      // REM: Attention s'il y a plusieurs sections
      $corps = imap_fetchbody($mbox, $uid, 1, FT_UID);
  }
  imap_close($mbox);
?>

<?php
  $from=$header->from;
  echo "Message de:".$from[0]->personal." [".$from[0]->mailbox."@".$from[0]->host."]<br>";
  echo $corps;
?>

</body>
</html>

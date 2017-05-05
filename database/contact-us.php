<?php

$to = "administrator@bedfordwritingcompetition.co.uk";
$subject = "Message from users";
$message = "
<html>
<head>
<title>Message from users</title>
</head>
<body>
<p>Name: ".$_POST[firstname]." ".$_POST[lastname]."</p>
<p>Subject: ".$_POST[subject]."</p>
<p>Message: ".$_POST[question]."</p>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From:<'.$_POST[email].'>' . "\r\n";
//$headers .= 'Cc: '.$_SESSION[email].'' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script>alert('Thanks for your message, we will give you answer to your email as soon as possible. ');history.go(-1);</script>";
?>
<?php

$to = "$_POST[email]";
$subject = "Bedford Writing Competition";
$message = "
<html>
<head>
<title>Welcome to Bedford Writing Competition</title>
</head>
<body>
<p>Dear Customer,</p>
<p>Thank you, $_POST[firstname] $_POST[lastname] for registering your email address so that we can send you updates on the progress of the competitions we are running.</p>
<p>Best regards,</p>
<p>Bedford Writing Team</p>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From:Bedford Writing Competition <administrator@bedfordwritingcompetition.co.uk>' . "\r\n";
//$headers .= 'Cc: '.$_SESSION[email].'' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script>window.location.href='../php/homepage.php';</script>";
?>
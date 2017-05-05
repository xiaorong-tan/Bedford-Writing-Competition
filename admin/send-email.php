<?php
$to = "$_POST[email]";
$subject = "$_POST[subject]";
$message = "
<html>
<head>
<title>Bedford Writing Competition</title>
</head>
<body>
<p>Dear participant,</p>
<p>$_POST[message]</p>
<p>If you have any questions about us, please do not hesitate to contact us!</p>
<p>Best regards,</p>
<p>Bedford Writing Team</p>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From:Bedford Writing Competition <administrator@bedfordwritingcompetition.co.uk>' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script>alert('The email has been sent successfully.');window.location.href='send_email.php';</script>";
?>
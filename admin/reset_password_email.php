<?php
session_start();
$to = "$_POST[admin_email]";
$subject = "Reset your password";
$message = "
<html>
<head>
<title>Reset your password</title>
</head>
<body>
<p>Dear administrator,</p>
<p>Please click the <a href='http://bedfordwritingcompetition.co.uk/BWC/admin/reset_password.php?verify=".$_SESSION[admin_email]."' target='_blank'>here</a> to reset your password.</p>
<p>If you have any other questions about our service, please do not hesitate to contact us!</p>
<p>Best regards,</p>
<p>Bedford Writing Competition</p>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: administrator@bedfordwritingcompetition.co.uk' . "\r\n";
//$headers .= 'Cc: ' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script>alert('Your request has been processed, please check your email and reset your password.');history.go(-1);</script>";
?>
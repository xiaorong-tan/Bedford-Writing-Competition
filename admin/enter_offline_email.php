<?php
session_start();
$to = "$_SESSION[email_off]";
$subject = "Receipt of entry form";
$message = "
<html>
<head>
<title>Receipt of entry form</title>
</head>
<body>
<p>Dear $_SESSION[firstname_off] $_SESSION[lastname_off],</p>
<p>Thank you for your entry which has been given the reference number of $_SESSION[entry_num]. Please quote this number in any correspondence relating to this entry. Your information is shown below:</p>
<p>$_SESSION[title_off] $_SESSION[firstname_off] $_SESSION[lastname_off] </br>
   $_SESSION[address1_off], $_SESSION[address2_off], $_SESSION[city_off] </br>
   $_SESSION[postcode_off] </br>
   $_SESSION[country_off] </br>
   Story details: $_SESSION[story1_off] $_SESSION[story2_off] $_SESSION[story3_off] </br>
   Phone number: $_SESSION[telephone_off] </br>
   Email address: $_SESSION[email_off] </br>
   Entry number: $_SESSION[entry_num] </br>
   Payment method: $_SESSION[method_payment_off] </br>
   Entry fee (£): $_SESSION[entry_fee_off]
</p>
<p>If you have any questions about us, please do not hesitate to contact us!</p>
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
echo "<script>window.location.href='homepage_admin.php';</script>";
unset($_SESSION['title_off']);
unset($_SESSION['firstname_off']);
unset($_SESSION['lastname_off']);
unset($_SESSION['address1_off']);
unset($_SESSION['address2_off']);
unset($_SESSION['city_off']);
unset($_SESSION['postcode_off']);
unset($_SESSION['country_off']);
unset($_SESSION['story1_off']);
unset($_SESSION['story2_off']);
unset($_SESSION['story3_off']);
unset($_SESSION['telephone_off']);
unset($_SESSION['email_off']);
unset($_SESSION['entry_num']);
unset($_SESSION['entry_fee_off']);
unset($_SESSION['method_payment_off']);
unset($_SESSION['if_student_off']);
?>
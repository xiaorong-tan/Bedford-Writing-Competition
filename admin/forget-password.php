<?php
session_start();
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Email FROM Admin WHERE Email = '$_POST[admin_email]'");
$row = mysqli_fetch_array($query); 
if ($row) {
	$_SESSION['admin_email']=$row['Email'];
	include 'reset_password_email.php';
}
else  
	{  
		echo "<script>alert('The email is not existed, please enter a valid email address.'); history.go(-1);</script>";  
	} 

?>
<?php
session_start();
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT FirstName,LastName,Email,Organisation,Website,Group_,PostCode FROM Users WHERE Email = '$_POST[email]'");
$row = mysqli_fetch_array($query); 
if ($row) {
	$_SESSION['firstname_u']=$row['FirstName'];
	$_SESSION['lastname_u']=$row['LastName'];
	$_SESSION['email_u']=$row['Email'];
	$_SESSION['organisation_u']=$row['Organisation'];
	$_SESSION['website_u']=$row['Website'];
	$_SESSION['group_u']=$row['Group_'];
	$_SESSION['postcode_u']=$row['PostCode'];
	include 'amend_info2.php';
	
}
else{
	echo "<script>alert('The email address is not existed, please try another.'); history.go(-1);</script>";
}

?>
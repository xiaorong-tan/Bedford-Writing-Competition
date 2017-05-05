<?php
session_start();
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Email,Password,Title,LastName FROM Admin WHERE Email = '$_POST[email]' and Password = '$_POST[password]'");
if (mysqli_num_rows($query)==1) {
	$row = mysqli_fetch_array($query);
	$_SESSION['title']=$row['Title'];
	$_SESSION['lastname']=$row['LastName'];
	$_SESSION['email']=$row['Email'];
	include 'homepage_admin.php';
}
else  
	{  
		echo "<script>alert('The email or password is invalid, please try again.'); history.go(-1);</script>";  
	} 

?>
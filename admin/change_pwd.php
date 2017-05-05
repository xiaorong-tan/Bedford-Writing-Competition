<?php
session_start();	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Admin SET Password='$_POST[password]' WHERE Email='$_SESSION[email]'";
	$res_update = mysqli_query($con,$sql_update);
	if($res_update)  
	{   echo "<script>alert('Your password has been changed successfully.');history.go(-1);</script>";
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  

?>
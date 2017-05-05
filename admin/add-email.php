<?php
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$sql_insert = "INSERT into Users (Title,FirstName,LastName,Email,Organisation,Website,Group_) values ('$_POST[title]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[organisation]','$_POST[website]','$_POST[group]')";
	$res_insert = mysqli_query($con,$sql_insert);
	if($res_insert)  
	{  
		echo "<script>alert('Add email successfully!');history.go(-1);</script>";
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	} 
?>
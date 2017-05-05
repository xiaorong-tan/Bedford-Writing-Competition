<?php
session_start();	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Participants_story SET Title='$_POST[title]', FirstName='$_POST[firstname]', LastName='$_POST[lastname]', Address1='$_POST[address1]', Address2='$_POST[address2]', City='$_POST[city]', PostCode='$_POST[postcode]', Country='$_POST[country]', Telephone='$_POST[telephone]', Email='$_POST[email]' WHERE Reference_num='$_SESSION[reference_num]'";
	$res_update = mysqli_query($con,$sql_update);
	$_SESSION['title']=$_POST['title'];
	$_SESSION['firstname']=$_POST['firstname'];
	$_SESSION['lastname']=$_POST['lastname'];
	$_SESSION['address1']=$_POST['address1'];
	$_SESSION['address2']=$_POST['address2'];
	$_SESSION['country']=$_POST['country'];
	$_SESSION['city']=$_POST['city'];
	$_SESSION['postcode']=$_POST['postcode'];
	$_SESSION['telephone']=$_POST['telephone'];
	$_SESSION['email']=$_POST['email'];
	if($res_update)  
	{  
		header("Location: ../php/enter_online_story3.php");
		exit; 
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  

?>
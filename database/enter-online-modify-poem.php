<?php
session_start();	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Participants_poem SET Title='$_POST[title]', FirstName='$_POST[firstname]', LastName='$_POST[lastname]', Address1='$_POST[address1]', Address2='$_POST[address2]', City='$_POST[city]', PostCode='$_POST[postcode]', Country='$_POST[country]', Telephone='$_POST[telephone]', Email='$_POST[email]' WHERE Reference_num='$_SESSION[reference_num_p]'";
	$res_update = mysqli_query($con,$sql_update);
	$_SESSION['title_p']=$_POST['title'];
	$_SESSION['firstname_p']=$_POST['firstname'];
	$_SESSION['lastname_p']=$_POST['lastname'];
	$_SESSION['address1_p']=$_POST['address1'];
	$_SESSION['address2_p']=$_POST['address2'];
	$_SESSION['country_p']=$_POST['country'];
	$_SESSION['city_p']=$_POST['city'];
	$_SESSION['postcode_p']=$_POST['postcode'];
	$_SESSION['telephone_p']=$_POST['telephone'];
	$_SESSION['email_p']=$_POST['email'];
	if($res_update)  
	{  
		header("Location: ../php/enter_online_poem3.php");
		exit; 
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  

?>
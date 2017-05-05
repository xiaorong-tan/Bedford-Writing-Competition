<?php
session_start();	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Users SET FirstName='$_POST[firstname_u]',LastName='$_POST[lastname_u]',Email='$_POST[email_u]',Organisation='$_POST[organisation_u]',Group_='$_POST[group_u]',Website='$_POST[website_u]',PostCode='$_POST[postcode_u]' WHERE Email='$_SESSION[email_u]'";
	$res_update = mysqli_query($con,$sql_update);
	if($res_update)  
	{   echo "<script>alert('Changes have been saved successfully.');</script>";
        unset($_SESSION['firstname_u']);
        unset($_SESSION['lastname_u']);
        unset($_SESSION['email_u']);
        unset($_SESSION['organisation_u']);
        unset($_SESSION['website_u']);
        unset($_SESSION['postcode_u']);
        unset($_SESSION['group_u']);
        include 'amend_info.php';
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  

?>
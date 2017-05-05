<?php
session_start();	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Participants_poem SET Title='$_POST[title_p]',FirstName='$_POST[firstname_p]',LastName='$_POST[lastname_p]',Address1='$_POST[address1_p]',Address2='$_POST[address2_p]',City='$_POST[city_p]',PostCode='$_POST[postcode_p]',Country='$_POST[country_p]',Telephone='$_POST[telephone_p]',Email='$_POST[email_p]',If_a_student='$_POST[if_stu_p]' WHERE Reference_num='$_SESSION[reference_num_p]'";
	$res_update = mysqli_query($con,$sql_update);
	if($res_update)  
	{   echo "<script>alert('Changes have been saved successfully.');</script>";       
  	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  

?>
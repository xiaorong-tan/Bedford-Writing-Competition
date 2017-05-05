<?php
session_start();	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Participants_story SET Title='$_POST[title_s]',FirstName='$_POST[firstname_s]',LastName='$_POST[lastname_s]',Address1='$_POST[address1_s]',Address2='$_POST[address2_s]',City='$_POST[city_s]',PostCode='$_POST[postcode_s]',Country='$_POST[country_s]',Telephone='$_POST[telephone_s]',Email='$_POST[email_s]',If_a_student='$_POST[if_stu_s]' WHERE Reference_num='$_SESSION[reference_num_s]'";
	$res_update = mysqli_query($con,$sql_update);
	if($res_update)  
	{   echo "<script>alert('Changes have been saved successfully.');</script>";       
  	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  

?>
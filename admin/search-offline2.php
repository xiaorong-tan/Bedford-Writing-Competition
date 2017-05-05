<?php
session_start();	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Offline_entry_form SET Title='$_POST[title_o]',FirstName='$_POST[firstname_o]',LastName='$_POST[lastname_o]',Address1='$_POST[address1_o]',Address2='$_POST[address2_o]',City='$_POST[city_o]',PostCode='$_POST[postcode_o]',Country='$_POST[country_o]',Telephone='$_POST[telephone_o]',Email='$_POST[email_o]',Story1='$_POST[story1_o]',Story2='$_POST[story2_o]',Story3='$_POST[story3_o]',Entry_fee='$_POST[entry_fee_o]',Method_payment='$_POST[method_payment_o]',If_a_student='$_POST[if_stu_o]' WHERE Entry_num='$_SESSION[entry_num_o]'";
	$res_update = mysqli_query($con,$sql_update);
	if($res_update)  
	{   echo "<script>alert('Changes have been saved successfully.');</script>";       
  	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  

?>
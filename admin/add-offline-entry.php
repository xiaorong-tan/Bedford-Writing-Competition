<?php
session_start();
if(!isset($_SESSION['entry_num'])){
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC'); 
	$entry_num=date('d-m-y-').str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
	$sql_insert = "INSERT into Offline_entry_form (Title,FirstName,LastName,Address1,Address2,City,PostCode,Country,Telephone,Email,If_a_student,Story1,Story2,Story3,Entry_fee,Method_payment,Entry_num) values ('$_POST[title]','$_POST[firstname]','$_POST[lastname]','$_POST[address1]','$_POST[address2]','$_POST[city]','$_POST[postcode]','$_POST[country]','$_POST[telephone]','$_POST[email]','$_POST[if_student]','$_POST[story1]','$_POST[story2]','$_POST[story3]','$_POST[entry_fee]','$_POST[method_payment]','$entry_num')";  
	$res_insert = mysqli_query($con,$sql_insert);
	$_SESSION['title_off']=$_POST['title'];
	$_SESSION['firstname_off']=$_POST['firstname'];
	$_SESSION['lastname_off']=$_POST['lastname'];
	$_SESSION['address1_off']=$_POST['address1'];
	$_SESSION['address2_off']=$_POST['address2'];
	$_SESSION['country_off']=$_POST['country'];
	$_SESSION['city_off']=$_POST['city'];
	$_SESSION['postcode_off']=$_POST['postcode'];
	$_SESSION['telephone_off']=$_POST['telephone'];
	$_SESSION['email_off']=$_POST['email'];
	$_SESSION['story1_off']=$_POST['story1'];
	$_SESSION['story2_off']=$_POST['story2'];
	$_SESSION['story3_off']=$_POST['story3'];
	$_SESSION['entry_fee_off']=$_POST['entry_fee'];
	$_SESSION['method_payment_off']=$_POST['method_payment'];
	$_SESSION['if_student_off']=$_POST['if_student'];
	$_SESSION['entry_num']=$entry_num;
	if($res_insert)  
	{  
		header("Location: add_offline_entry2.php");
		exit;
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	} 
}

else{
	
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Offline_entry_form SET Title='$_POST[title]', FirstName='$_POST[firstname]', LastName='$_POST[lastname]', Address1='$_POST[address1]', Address2='$_POST[address2]', City='$_POST[city]', PostCode='$_POST[postcode]', Country='$_POST[country]', Telephone='$_POST[telephone]', Email='$_POST[email]',Story1='$_POST[story1]', Story2='$_POST[story2]', Story3='$_POST[story3]', Entry_fee='$_POST[entry_fee]',If_a_student='$_POST[if_student]', Method_payment='$_POST[method_payment]' WHERE Entry_num='$_SESSION[entry_num]'";
	$res_update = mysqli_query($con,$sql_update);
	$_SESSION['title_off']=$_POST['title'];
	$_SESSION['firstname_off']=$_POST['firstname'];
	$_SESSION['lastname_off']=$_POST['lastname'];
	$_SESSION['address1_off']=$_POST['address1'];
	$_SESSION['address2_off']=$_POST['address2'];
	$_SESSION['country_off']=$_POST['country'];
	$_SESSION['city_off']=$_POST['city'];
	$_SESSION['postcode_off']=$_POST['postcode'];
	$_SESSION['telephone_off']=$_POST['telephone'];
	$_SESSION['email_off']=$_POST['email'];
	$_SESSION['story1_off']=$_POST['story1'];
	$_SESSION['story2_off']=$_POST['story2'];
	$_SESSION['story3_off']=$_POST['story3'];
	$_SESSION['entry_fee_off']=$_POST['entry_fee'];
	$_SESSION['method_payment_off']=$_POST['method_payment'];
	$_SESSION['if_student_off']=$_POST['if_student'];
	if($res_update)  
	{  
		header("Location: add_offline_entry2.php");
		exit; 
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  
}

?>
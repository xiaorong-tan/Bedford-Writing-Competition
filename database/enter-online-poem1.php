<?php
session_start();
if(!isset($_SESSION['firstname_p'])&&!isset($_SESSION['postcode_p'])){
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');   
	$reference_num=date('d-m-y-').str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);    
	$sql_insert = "INSERT into Participants_poem (Title,FirstName,LastName,Address1,Address2,City,PostCode,Country,Telephone,Email,If_a_student,AgeGroup,HowToKnowUs,Reference_num) values ('$_POST[title]','$_POST[firstname]','$_POST[lastname]','$_POST[address1]','$_POST[address2]','$_POST[city]','$_POST[postcode]','$_POST[country]','$_POST[telephone]','$_POST[email]','$_POST[if_student]','$_POST[agegroup]','$_POST[howtoknowus]','$reference_num')";  
	$res_insert = mysqli_query($con,$sql_insert);
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
	$_SESSION['reference_num_p']=$reference_num;
	if($res_insert)  
	{  
		header("Location: ../php/enter_online_poem2.php");
		exit;
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}
}
else{
	$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
	$sql_update = "UPDATE Participants_poem SET Title='$_POST[title]', FirstName='$_POST[firstname]', LastName='$_POST[lastname]', Address1='$_POST[address1]', Address2='$_POST[address2]', City='$_POST[city]', PostCode='$_POST[postcode]', Country='$_POST[country]', Telephone='$_POST[telephone]', Email='$_POST[email]', If_a_student='$_POST[if_student]', AgeGroup='$_POST[agegroup]', HowToKnowUs='$_POST[howtoknowus]' WHERE FirstName='$_SESSION[firstname_p]' and PostCode='$_SESSION[postcode_p]'";
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
		header("Location: ../php/enter_online_poem2.php");
		exit; 
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	}  
}


?>
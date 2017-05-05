<?php
session_start();
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Title,FirstName,LastName,Address1,Address2,City,PostCode,Country,Telephone,Email,Story1,Story2,Story3,Entry_fee,Method_payment,If_a_student,Entry_num FROM Offline_entry_form WHERE Entry_num = '$_POST[search_o]'");
$row = mysqli_fetch_array($query); 
if ($row) {
	$_SESSION['title_o']=$row['Title'];
	$_SESSION['firstname_o']=$row['FirstName'];
	$_SESSION['lastname_o']=$row['LastName'];
	$_SESSION['address1_o']=$row['Address1'];
	$_SESSION['address2_o']=$row['Address2'];
	$_SESSION['city_o']=$row['City'];
	$_SESSION['postcode_o']=$row['PostCode'];
	$_SESSION['country_o']=$row['Country'];
	$_SESSION['story1_o']=$row['Story1'];
	$_SESSION['story2_o']=$row['Story2'];
	$_SESSION['story3_o']=$row['Story3'];
	$_SESSION['entry_fee_o']=$row['Entry_fee'];
	$_SESSION['method_payment_o']=$row['Method_payment'];
	$_SESSION['telephone_o']=$row['Telephone'];
	$_SESSION['email_o']=$row['Email'];
	$_SESSION['if_stu_o']=$row['If_a_student'];
	$_SESSION['entry_num_o']=$row['Entry_num'];
	include 'search_offline2.php';
	
}
else{
	echo "<script>alert('The entry number is not existed, please try another.'); history.go(-1);</script>";
}

?>
<?php
session_start();
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Title,FirstName,LastName,Address1,Address2,City,PostCode,Country,Telephone,Email,If_a_student,Reference_num FROM Participants_story WHERE Reference_num = '$_POST[search_s]'");
$row = mysqli_fetch_array($query); 
if ($row) {
	$_SESSION['title_s']=$row['Title'];
	$_SESSION['firstname_s']=$row['FirstName'];
	$_SESSION['lastname_s']=$row['LastName'];
	$_SESSION['address1_s']=$row['Address1'];
	$_SESSION['address2_s']=$row['Address2'];
	$_SESSION['city_s']=$row['City'];
	$_SESSION['postcode_s']=$row['PostCode'];
	$_SESSION['country_s']=$row['Country'];
	$_SESSION['telephone_s']=$row['Telephone'];
	$_SESSION['email_s']=$row['Email'];
	$_SESSION['if_stu_s']=$row['If_a_student'];
	$_SESSION['reference_num_s']=$row['Reference_num'];
	include 'search_story2.php';
	
}
else{
	echo "<script>alert('The entry number is not existed, please try another.'); history.go(-1);</script>";
}

?>
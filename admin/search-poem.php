<?php
session_start();
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Title,FirstName,LastName,Address1,Address2,City,PostCode,Country,Telephone,Email,If_a_student,Reference_num FROM Participants_poem WHERE Reference_num = '$_POST[search_p]'");
$row = mysqli_fetch_array($query); 
if ($row) {
	$_SESSION['title_p']=$row['Title'];
	$_SESSION['firstname_p']=$row['FirstName'];
	$_SESSION['lastname_p']=$row['LastName'];
	$_SESSION['address1_p']=$row['Address1'];
	$_SESSION['address2_p']=$row['Address2'];
	$_SESSION['city_p']=$row['City'];
	$_SESSION['postcode_p']=$row['PostCode'];
	$_SESSION['country_p']=$row['Country'];
	$_SESSION['telephone_p']=$row['Telephone'];
	$_SESSION['email_p']=$row['Email'];
	$_SESSION['if_stu_p']=$row['If_a_student'];
	$_SESSION['reference_num_p']=$row['Reference_num'];
	include 'search_poem2.php';
	
}
else{
	echo "<script>alert('The entry number is not existed, please try another.'); history.go(-1);</script>";
}

?>
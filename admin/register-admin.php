<?php
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT email FROM Admin WHERE email = '$_POST[email]'");
$row = mysqli_fetch_array($query); 
if ($row) {
	echo "<script>alert('This email address has already been  registered, please change another email address.'); history.go(-1);</script>";
}
else{
	$sql_insert = "INSERT into Admin (Title,FirstName,LastName,Email,Password) values ('$_POST[title]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";
	$res_insert = mysqli_query($con,$sql_insert);
	if($res_insert)  
	{  
		echo "<script>alert('Register successfully!');</script>";
		include 'login_admin.php';
		
	}  
	else  
	{  
		echo "<script>alert('The system is busy, please wait...'); history.go(-1);</script>";  
	} 
}	

?>
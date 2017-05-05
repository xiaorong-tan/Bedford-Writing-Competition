<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Forget Password | Writing Competition</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" href="forget_password.css" >
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php include '../php/navigationbar.php';?>

<form method="post" action="forget-password.php" id="forget_password">
<h4>Please input your email address, and we will send you an email to reset your password.</h4>
	<div class="form-group">     						
	<input type="email" class="form-control"  name="admin_email" placeholder="Email address:" required>
     </div>			
	<button class="btn btn-lg btn-primary btn-block" type="submit" name="confirm">Confirm</button>
</form>
<?php include '../php/footer.php';?>
</body>
</html>
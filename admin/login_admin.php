<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Writing Competition</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../admin/login_admin.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
	<?php include '../php/navigationbar.php';?>        
	<form class="form-loginin" name="login" action="login-admin.php" method="post">
	<h3>Log in to Administration Processes</h3>
	<label for="email" class="sr-only">Email: </label>
		<input type="email" name="email" class="form-control" placeholder="Email Address" required autofocus>
		<label for="password" class="sr-only">Password: </label>
		<input type="password" name="password" class="form-control" placeholder="Password" required>
        <a href="register_admin.php" target="_blank">Don't have an account?</a>
		<a href="forget_password.php" target="_blank">Forget Password?</a>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="btn-login">Login</button>
	</form>	
	<?php include '../php/footer.php';?>

</body>
</html>
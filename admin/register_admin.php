<?php
session_start();
?>
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
	<link rel="stylesheet" type="text/css" href="register_admin.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
	<?php include '../php/navigationbar.php';?>

	<div class="container-fluid" id="register">
		<h3>Sign Up</h3>
		<form class="form-horizontal" action="register-admin.php" data-toggle="validator" role="form" method="post">
			<div class="form-group">
				<label  class="col-sm-2 control-label">Title</label>
				<div class="col-sm-10">
					<select class="form-control" name="title">
						<option>Dr</option>
						<option>Miss</option>
						<option>Mr</option>
						<option>Mrs</option>
						<option>Ms</option>
						<option>Prof</option>
						<option>Sir</option>						
					</select>
				</div>
			</div>

			<div class="form-group">
				<label  class="col-sm-2 control-label">First name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="firstname" placeholder="First name" required>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Last name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="lastname" placeholder="Last name" required>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="Email" data-error="Please enter a valid email address." required>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" data-minlength="6" class="form-control inputPassword" name="password" placeholder="Password" required>
					<span class="help-block">At least 6 character.</span>
					<input type="password"  data-match=".inputPassword" data-match-error="Whoops, these don't match!" name="pwd_confirm"  class="form-control" placeholder="Confirm Password" required>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
		</form>
	</div>

	<?php include '../php/footer.php';?>

</body>
</html>
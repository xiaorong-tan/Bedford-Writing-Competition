<?php
session_start();
$verify=stripslashes(trim($_GET['verify']));
$_SESSION['verify']=$verify;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Reset Password | Writing Competition</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" href="reset_password.css" >
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>
<?php include '../php/navigationbar.php';?>
	<form data-toggle="validator" role="form" method="post" action="reset_password2.php">
		<div class="form-group">
			<input class="form-control inputPassword" placeholder="New Password" data-minlength="6" type="password" name="new_password" required>
			<?php 
               echo '<input type="hidden" value="'.$_SESSION['verify'].'" name="admin_email">';
			?>
			<span class="help-block">At least 6 character.</span>
		</div>
		<div class="form-group">
			<input class="form-control" data-match=".inputPassword" data-match-error="Whoops, these don't match!" placeholder="Confirm Password" type="password" required>			
			<div class="help-block with-errors"></div>
		</div>				
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="confirm">Confirm</button>
	</form>
<?php include '../php/footer.php';?>
</body>
</html>
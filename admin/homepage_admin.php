<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Home | Writing Competition</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="homepage_admin.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
	<?php include 'navbar_admin.php';?>
    <div class="container-fluid" id="main-content">
      <h3>Bedford Writing Competition - Administration System</h3>
    	<?php echo '<h4>'.$_SESSION[title].' '.$_SESSION[lastname].', welcome to Bedford Writing Competition Administration System. All the operations are shown on navigation bar.</h4>';?>
    	<button class="btn btn-primary" data-toggle="modal" data-target=".change_pwd">Change password</button>
    	<a href="logout.php"><button class="btn btn-primary">Log Out</button></a>
    </div>

   <div class="modal fade change_pwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Change Password</h4>
					</div>
					<div class="modal-body">
						<form class="form-loginin" role="form" action="change_pwd.php" method="post" data-toggle="validator">
						<div class="form-group">	
							<input type="password" name="password" class="form-control inputPassword" data-minlength="6" placeholder="New Password" required autofocus>
							<span class="help-block">At least 6 character.</span>							
							<input type="password" name="confirm_pwd" data-match=".inputPassword" data-match-error="Whoops, these don't match!" class="form-control" placeholder="Confirm Password" required>
							<div class="help-block with-errors"></div> 
							</div>     
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Confirm</button>
							<button class="btn btn-lg btn-default btn-block" type="button" data-dismiss="modal">Cancel</button>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
	
	<?php include '../php/footer.php';?>

</body>
</html>
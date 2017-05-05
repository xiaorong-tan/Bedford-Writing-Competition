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
	<link rel="stylesheet" type="text/css" href="add_email.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
<?php include 'navbar_admin.php';?>

	<div class="container-fluid" id="add_email">
	<h3>Amend information in the database</h3>
	 <p>Amend the details below and click on submit.</p>
		<form class="form-horizontal" action="amend-info2.php" data-toggle="validator" role="form" method="post">

			<div class="form-group">
				<label  class="col-sm-2 control-label">First name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="firstname_u" placeholder="First name" value="<?php echo $_SESSION[firstname_u]?>">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Last name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="lastname_u" placeholder="Last name" value="<?php echo $_SESSION[lastname_u]?>">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email_u" placeholder="Email" value="<?php echo $_SESSION[email_u]?>">
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Organisation</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="organisation_u" placeholder="Organisation
					" value="<?php echo $_SESSION[organisation_u]?>">
				</div>
			</div>	
			<div class="form-group">
				<label  class="col-sm-2 control-label">Website</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="website_u" placeholder="Website
					" value="<?php echo $_SESSION[website_u]?>">
				</div>
			</div>	
			<div class="form-group">
				<label  class="col-sm-2 control-label">Post Code</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="postcode_u" placeholder="If a UK resident or leave blank" value="<?php echo $_SESSION[postcode_u]?>">
				</div>
			</div>				
			<div class="form-group">
				<label  class="col-sm-2 control-label">Group</label>
				<div class="col-sm-10">
					<select class="form-control" name="group_u">
					<option>Individual</option>
						<option>Story Group</option>
						<option>Poetry Group</option>
						<option>Drama Group</option>
						<option>School</option>
						<option>Workshop</option>
						<option>College/University</option>
						<option>Entry form submitted</option>							
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
<?php include '../php/footer.php';?>

</body>
</html>
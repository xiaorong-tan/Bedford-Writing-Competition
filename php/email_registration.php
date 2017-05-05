<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Writing Competition|Email Registration</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/email_registration.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
<?php include 'navigationbar.php';?>

	<div class="container-fluid" id="Registration">
	 <p>To register your email address, enter the details below and click on submit. You will receive occasional emails informing you about the competition. Your details will not be made known to a 3rd party.
</p>
		<form class="form-horizontal" action="../database/email-registration.php" data-toggle="validator" role="form" method="post">
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
					<input type="text" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="firstname" placeholder="First name">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Last name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="lastname" placeholder="Last name">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Post Code</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="postcode" placeholder="If a UK resident or leave blank
					">
				</div>
			</div>
			<p>It would help us if you would complete the following</p>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Your age group</label>
				<div class="col-sm-10">
					<select class="form-control" name="agegroup">
					<option>17-20</option>
						<option>21-30</option>
						<option>31-40</option>
						<option>41-50</option>
						<option>51-60</option>
						<option>61-70</option>
						<option>71 plus</option>						
					</select>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">How did you hear about the competition?</label>
				<div class="col-sm-10">
					<select class="form-control" name="howtoknowus">
					<option>Previous entrant</option>
						<option>Writing group</option>
						<option>Publication of Writers</option>
						<option>Advertisement</option>
						<option>Internet</option>
						<option>Other</option>
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
<?php include 'footer.php';?>

</body>
</html>
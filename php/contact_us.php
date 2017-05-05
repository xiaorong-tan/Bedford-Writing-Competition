<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Writing Competition|Contact Us</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/contact_us.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
<?php include 'navigationbar.php';?>

	<div class="container-fluid" id="contact_us">
	 <h3>Contact Us</h3>
		<form class="form-horizontal" action="../database/contact-us.php" data-toggle="validator" role="form" method="post">
			
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
				<label  class="col-sm-2 control-label">Subject</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="subject" placeholder="Subject
					">
				</div>
			</div>

			<div class="form-group">
				<label  class="col-sm-2 control-label">Question</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="question" rows="3" placeholder="Any questions or feedback or suggestions about our competition?"></textarea>
				</div>
			</div>
			
			

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Send</button>
				</div>
			</div>
		</form>
	</div>
<?php include 'footer.php';?>

</body>
</html>
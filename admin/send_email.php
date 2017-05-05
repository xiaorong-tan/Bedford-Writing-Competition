<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Writing Competition</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="send_email.css">
</head>
<body>
	<?php include 'navbar_admin.php';?>
	<div class="container-fluid" id="send_email">
		<h3>Send Email</h3>					
		<form class="form-horizontal" action="send-email.php" method="post">
			<div class="form-group">
				<input type="email" placeholder="To: " class="form-control"  name="email" required>
			</div>
			<div class="form-group">							
				<input class="form-control" placeholder="Add a subject" name="subject" required>
			</div>
			<div class="form-group">
				<textarea name="message" rows="5" class="form-control" placeholder="Add a message" required></textarea>
			</div>							
			<button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
		</form>
	</div>
	<?php include '../php/footer.php';?>
</body>





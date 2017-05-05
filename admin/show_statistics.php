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
	<link rel="stylesheet" type="text/css" href="show_statistics.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
	<?php include 'navbar_admin.php';?>

	<div class="container-fluid" id="show_statistics">
		<h3>Story Statistics</h3>
		<div class="table-responsive">	 
			<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>First name</th>
					<th>Last name</th>
					<th>If a full-time student</th>
					<th>Age Group</th>
					<th>Entry Number</th>
				</tr>
				<?php include 'show_statistics_s.php';?>
			</table>
		</div>
		<h3>Poem Statistics</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>First name</th>
					<th>Last name</th>
					<th>If a full-time student</th>
					<th>Age Group</th>
					<th>Entry Number</th>
				</tr>
				<?php include 'show_statistics_p.php';?>
			</table>
		</div>
		<h3>Offline Statistics</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>First name</th>
					<th>Last name</th>
					<th>If a full-time student</th>
					<th>Entry Fee ￡</th>
					<th>Payment Method</th>
					<th>Entry Number</th>
				</tr>
				<?php include 'show_statistics_o.php';?>
			</table>
		</div>
		<h3>Email Registration Users</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Email</th>
					<th>Age Group</th>
					<th>How to know us</th>					
				</tr>
				<?php include 'show_statistics_u.php';?>
			</table>
		</div>
		<h3>Administrators</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Email</th>									
				</tr>
				<?php include 'show_statistics_a.php';?>
			</table>
		</div>
	</div>
	<?php include '../php/footer.php';?>

</body>
</html>
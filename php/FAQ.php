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
	<link rel="stylesheet" type="text/css" href="../css/FAQ.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<!--Navigation bar-->
<?php include 'navigationbar.php';?>

<div class="container-fluid" id="main-contents">
<h3>FAQ</h3>
<p>Please choose the subject relevant to your query:</p>
	<select class="form-control">
		<option value="EntryFees">Entry fees</option>
		<option value="NumberOfEntries">Number of entries</option>
		<option value="AmendingAnEntry">Amending an entry</option>
		<option value="Presentation">Presentation</option>
		<option value="Judging">Judging</option>
		<option value="Copyright">Copyright</option>
		<option value="DataProtection">Data protection</option>						
	</select>
<p>If you do not find the answer in the FAQ, please submit your question using Contact Us</p>

<div id="FAQ">
	<?php include 'FAQ_entryfees.php';?>
</div>

<script type="text/javascript">
	$('select').on('change', function() {
    if (this.value=="EntryFees") {$('#FAQ').load("FAQ_entryfees.php");}
    if (this.value=="NumberOfEntries") {$('#FAQ').load("FAQ_number_of_entries.php");}
    if (this.value=="AmendingAnEntry") {$('#FAQ').load("FAQ_amending_an_entry.php");}
    if (this.value=="Presentation") {$('#FAQ').load("FAQ_presentation.php");}
    if (this.value=="Judging") {$('#FAQ').load("FAQ_judging.php");}
    if (this.value=="Copyright") {$('#FAQ').load("FAQ_copyright.php");}
    if (this.value=="DataProtection") {$('#FAQ').load("FAQ_data_protection.php");}
});

</script>
</div>

<?php include 'footer.php';?>

</body>
</html>
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
	<link rel="stylesheet" type="text/css" href="../css/enter_online3.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

	<!--Navigation bar-->
    <?php include 'navbar_admin.php';?>

    <div class="container-fluid" id="user_details">
        <h3>Please confirm the information below, click back button on your browser can simply go back and modify information. Click confirm button will send the recipt email to user.</h3>
        <div>
            <h4>Title: </h4>    
            <?php echo '<p class="form-control-static">'.$_SESSION[title_off].'</p>';?>          
        </div>
        <div>
            <h4>First name: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[firstname_off].'</p>';?>         
        </div>
        <div>
            <h4>Last name: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[lastname_off].'</p>';?>          
        </div>
        <div>
            <h4>Address Line 1: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[address1_off].'</p>';?>          
        </div>
        <div>
            <h4>Address Line 2: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[address2_off].'</p>';?>          
        </div>
        <div>
            <h4>City: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[city_off].'</p>';?>          
        </div>
        <div>
            <h4>Post Code: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[postcode_off].'</p>';?>          
        </div>
        <div>
            <h4>Country: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[country_off].'</p>';?>          
        </div>
        
        <div>
            <h4>Phone: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[telephone_off].'</p>';?>          
        </div>
        <div>
            <h4>Email: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[email_off].'</p>';?>          
        </div>
        <div>
            <h4>Story details: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[story1_off].' '.$_SESSION[story2_off].' '.$_SESSION[story3_off].'</p>';?>          
        </div>        
        <div>
            <h4>Payment method: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[method_payment_off].'</p>';?>          
        </div>
        <div>
            <h4>If a student: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[if_student_off].'</p>';?>          
        </div>
        <div>
            <h4>Entry Number: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[entry_num].'</p>';?>          
        </div>
        <div>
            <h4>Entry Fee (£): </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[entry_fee_off].'</p>';?>          
        </div>
        <a href="enter_offline_email.php"><button class="btn btn-primary">Confirm</button></a>

    </div>

    <?php include '../php/footer.php';?>


</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enter Online | Writing Competition</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/enter_online3.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

	<!--Navigation bar-->
    <?php include 'navigationbar.php';?>

    <div class="container-fluid" id="user_details">
        <h3>Please confirm your information below: </h3>
        <div>
            <h4>Title: </h4>    
            <?php echo '<p class="form-control-static">'.$_SESSION[title_p].'</p>';?>          
        </div>
        <div>
            <h4>First name: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[firstname_p].'</p>';?>         
        </div>
        <div>
            <h4>Last name: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[lastname_p].'</p>';?>          
        </div>
        <div>
            <h4>Address Line 1: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[address1_p].'</p>';?>          
        </div>
        <div>
            <h4>Address Line 2: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[address2_p].'</p>';?>          
        </div>
        <div>
            <h4>Country: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[country_p].'</p>';?>          
        </div>
        <div>
            <h4>City: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[city_p].'</p>';?>          
        </div>
        <div>
            <h4>Post Code: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[postcode_p].'</p>';?>          
        </div>
        <div>
            <h4>Phone: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[telephone_p].'</p>';?>          
        </div>
        <div>
            <h4>Email: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[email_p].'</p>';?>          
        </div>
        <div>
            <h4>Reference Number: </h4>
            <?php echo '<p class="form-control-static">'.$_SESSION[reference_num_p].'</p>';?>          
        </div>
        <a href="enter_online_modify_poem.php"><button class="btn btn-primary">Modify</button></a>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="AUFVG2RK2UNAQ">
            <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>

    <?php include 'footer.php';?>


</body>
</html>
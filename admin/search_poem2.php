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
	<link rel="stylesheet" type="text/css" href="../css/enter_online.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
</head>
<body>

	<!--Navigation bar-->
	<?php include 'navbar_admin.php';?>

	<div class="container-fluid" id="enter_online">
		<p>Display Poem Entry Form</p>
		<form class="form-horizontal" action="search-poem2.php" data-toggle="validator" target="frameFile" role="form" method="post">
			<div class="form-group">

				<label  class="col-sm-2 control-label">Title</label>
				<div class="col-sm-10">
					<input type="text" id="title" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="title_p" placeholder="Title" value="<?php echo $_SESSION[title_p]?>" required readonly>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">First name</label>
				<div class="col-sm-10">
					<input type="text" id="firstname" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="firstname_p" placeholder="First name" value="<?php echo $_SESSION[firstname_p]?>" required readonly>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Last name</label>
				<div class="col-sm-10">
					<input type="text" id="lastname" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="lastname_p" placeholder="Last name" value="<?php echo $_SESSION[lastname_p]?>" required readonly>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Address Line 1</label>
				<div class="col-sm-10">
					<input type="text" id="address1" class="form-control" pattern="[^%&';=?$\x22]+" data-error="Whoops, the format is wrong!" name="address1_p" placeholder="Address Line 1" value="<?php echo $_SESSION[address1_p]?>" required readonly>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Address Line 2</label>
				<div class="col-sm-10">
					<input type="text" id="address2" class="form-control" pattern="[^%&';=?$\x22]+" data-error="Whoops, the format is wrong!" name="address2_p" placeholder="Address Line 2" value="<?php echo $_SESSION[address2_p]?>" readonly>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Town/City</label>
				<div class="col-sm-10">
					<input type="text" id="city" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="city_p" placeholder="Town/City" required readonly value="<?php echo $_SESSION[city_p]?>">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Post Code</label>
				<div class="col-sm-10">
					<input type="text" id="postcode" class="form-control" pattern="[^%&',;=?$\x22]+" data-error="Whoops, the format is wrong!" name="postcode_p" placeholder="Post Code" required value="<?php echo $_SESSION[postcode_p]?>" readonly>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Country</label>
				<div class="col-sm-10">
					<input type="text" id="country" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="country_p" placeholder="Country" readonly required value="<?php echo $_SESSION[country_p]?>">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Phone</label>
				<div class="col-sm-10">
					<input class="form-control" id="phone" name="telephone_p" pattern="^[0-9]*$" data-error="Whoops, the format is wrong!" placeholder="Phone" required readonly value="<?php echo $_SESSION[telephone_p]?>">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Email Address</label>
				<div class="col-sm-10">
					<input type="email" id="email" class="form-control" name="email_p" data-error="Whoops, the format is wrong!" placeholder="Email" required readonly value="<?php echo $_SESSION[email_p]?>">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">If a full-time student?</label>
				<div class="col-sm-10">
					<input type="text" id="if_stu" class="form-control" pattern="^[A-Za-z]+$" data-error="Whoops, the format is wrong!" name="if_stu_p" placeholder="If a student?" readonly required value="<?php echo $_SESSION[if_stu_p]?>">
					<div class="help-block with-errors"></div>
				</div>
			</div> 
			<div class="form-group">
				<label  class="col-sm-2 control-label">Entry Number:</label>
				<div class="col-sm-10">
					<label><?php echo $_SESSION['reference_num_p']?></label>					
				</div>
			</div> 
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="button" class="btn btn-primary" id="Edit">Amend</button>
					<button type="submit" class="btn btn-primary" id="Save">Save</button>
					
					<script type="text/javascript">
						document.getElementById("Edit").onclick=function(){
							document.getElementById("title").removeAttribute("readonly");
							document.getElementById("firstname").removeAttribute("readonly");
							document.getElementById("lastname").removeAttribute("readonly");
							document.getElementById("address1").removeAttribute("readonly");
							document.getElementById("address2").removeAttribute("readonly");
							document.getElementById("city").removeAttribute("readonly");
							document.getElementById("country").removeAttribute("readonly");
							document.getElementById("postcode").removeAttribute("readonly");
							document.getElementById("phone").removeAttribute("readonly");
							document.getElementById("email").removeAttribute("readonly");
                            document.getElementById("if_stu").removeAttribute("readonly");
						};

						document.getElementById("Save").onclick=function(){
							document.getElementById("title").setAttribute("readonly","readonly");
                            document.getElementById("firstname").setAttribute("readonly","readonly");
							document.getElementById("lastname").setAttribute("readonly","readonly");
							document.getElementById("address1").setAttribute("readonly","readonly");
							document.getElementById("address2").setAttribute("readonly","readonly");
							document.getElementById("city").setAttribute("readonly","readonly");
							document.getElementById("country").setAttribute("readonly","readonly");
							document.getElementById("postcode").setAttribute("readonly","readonly");
							document.getElementById("phone").setAttribute("readonly","readonly");
							document.getElementById("email").setAttribute("readonly","readonly");
                            document.getElementById("if_stu").setAttribute("readonly","readonly");
						}; 
						</script>
					</div>
				</div>
			</form>
			<iframe name="frameFile" id="frameFile" style="display:none;"></iframe>
			<div class="col-sm-offset-2 col-sm-10 ">
            <a href="exit_poem.php"><button class="btn btn-primary">Exit</button></a>
            </div>
		</div>
		<?php include '../php/footer.php';?>

	</body>
	</html>
<!DOCTYPE html>
<html>
<head>
	<title>Step Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div id="stepForm">
				<h1>First Form</h1>
				<div>
					<div class="form-group col-md-6">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" placeholder="first name" class="form-control">
					</div>

					<div class="form-group col-md-6">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" placeholder="last name" class="form-control">
					</div>
				</div>

				<h1>Second From</h1>
				<div>
					<div class="form-group col-md-6">
						<label for="phone_number">Phone Number : </label>
						<input type="text" name="phone_number" placeholder="phone number" class="form-control">
					</div>

					<div class="form-group col-md-6">
						<label for="email_address">Email Address : </label>
						<input type="email" name="email_address" placeholder="email address" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('includes/menubar.php'); ?>
</div>



	<link rel="stylesheet" type="text/css" href="css/jquery.steps.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#stepForm').steps();
		});
	</script>
</body>
</html>
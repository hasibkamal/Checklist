<!DOCTYPE html>
<html>
<head>
	<title>jQuery Validation</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-6" style="padding:0px;">
			<div class="panel panel-info">
			<div class="panel-heading">
				<h4>jQuery Validation</h4>
			</div>
			<div class="panel-body">
				<form action="" method="post" id="form">
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" placeholder="first name" class="form-control">
					</div>

					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" placeholder="last name" class="form-control">
					</div>
				
					<div class="form-group">
						<label for="phone_number">Phone Number : </label>
						<input type="text" name="phone_number" placeholder="phone number" class="form-control">
					</div>

					<div class="form-group">
						<label for="email_address">Email Address : </label>
						<input type="email" name="email_address" placeholder="email address" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Data Submission">
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
	<?php require_once('includes/menubar.php'); ?>


	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
	$('#form').on('submit',function(){
		alert(1);
		return false;
	});
	</script>
</div>
</body>
</html>
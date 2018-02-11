
<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>jQuery Validation</h4>
		</div>
		<div class="panel-body">
			<form action="" method="post" id="form">
				<div class="form-group">
					<label for="first_name">First Name (Custom Validation : Only Hasib is Applicable)</label>
					<input type="text" name="first_name" placeholder="first name" class="form-control required">
				</div>

				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" placeholder="last name" class="form-control required">
				</div>
			
				<div class="form-group">
					<label for="phone_number">Phone Number : </label>
					<input type="text" name="phone_number" placeholder="phone number" class="form-control required">
				</div>

				<div class="form-group">
					<label for="email_address">Email Address : </label>
					<input type="email" name="email_address" placeholder="email address" class="form-control required">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Data Submission">
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery-validate.min.js"></script>
<script type="text/javascript">

$.validator.addMethod("myName",function(value){
	if(value == "Hasib"){
		return true;
	}
	return false;
},"First name should be Hasib");



$('#form').validate({
	errorPlacement:function(error,element){
		element.after(error);
	},
	rules:{
		first_name:{
			myName:true
		}
	}
});
</script>

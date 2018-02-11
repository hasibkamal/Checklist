
<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Select2 / Auto-Complete plugins for dropdown list</h4>
		</div>
		<div class="panel-body">
			<form action="" method="post" id="form">
				<div class="form-group">
					<label for="hobby">Select Hobby</label>
					<select id="hobbySelection" class="form-control" multiple="true">
						<option value="Sleeping">Sleeping</option>
						<option value="Eating">Eating</option>
						<option value="Playing">Playing</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Data Submission">
				</div>
			</form>
		</div>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript">
	$('#hobbySelection').select2();
</script>


<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Image/File uploading using Ajax</h4>
		</div>
		<div class="panel-body">
			<div class="row">
				<form action="" method="post">
					<div class="col-md-4">
						<h4>Image Upload</h4>
						<hr/>
						<div class="form-group">
							<label class="btn btn-info">
								<strong>Browse File</strong>
								<input type="file" class="image" name="image" style="display:none">
							</label>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name="upload" value="Upload">
						</div>
					</div>

					<div class="col-md-4">
						<img class="img img-thumbnail" src="files/inventory.png" width="150" height="150">
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$('.image').on('change',function(){
		console.log(this.files[0]);
	});
</script>

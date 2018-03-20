
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
								<input type="file" name="image" style="display:none">
							</label>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name="upload" value="Upload">
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(".addRow").on('click', function () {
        var first_row = $('.table').find('.row').eq(0).clone();
        first_row.find('input').val('');
        first_row.find('.addRow').removeClass('addRow btn-info').addClass('removeRow btn-danger').html('Remove (-)');
        $('.table').append(first_row);
    });


    $(document.body).on('click', '.removeRow', function () {
        $(this).parent().parent().remove();
    });
</script>

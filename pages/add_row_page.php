
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Add row in table using js/jQuery</h4>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover table-stripped" >
				<tr class="row">
					<td>
						<input class="form-control" placeholder="first name" type="text" name="first_name[]">
					</td>
					<td>
						<input class="form-control" placeholder="last name" type="text" name="last_name[]">
					</td>
					<td>
						<input class="form-control" placeholder="email address" type="text" name="email_address[]">
					</td>
					<td>
						<input class="form-control" placeholder="phone number" type="text" name="phone_number[]">
					</td>
					<td><button class="btn btn-info btn-sm addRow">Add (+) </button></td>
				</tr>
			</table>
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


<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Arithmatic inside form using js</h4>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover table-stripped" >
				<tr class="row">
					<td>
						<input onkeyup="threeFieldsSum()" class="form-control one" placeholder="first number" type="text" name="first_number[]">
					</td>
					<td>
						<input onkeyup="threeFieldsSum()" class="form-control two" placeholder="second number" type="text" name="second_number[]">
					</td>
					<td>
						<input onkeyup="threeFieldsSum()" class="form-control three" placeholder="third number" type="text" name="third_number[]">
					</td>
					<td>
						<input class="form-control summation" placeholder="summaton" type="text" name="summation[]">
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

    // function threeFieldsSum(field_class,summation){
    // 		var sum = 0;
    //         $('.'+field_class).each(function(){
    //             if (this.value == null || this.value == '' || this.value == "0") {
    //                 this.value = 0;
    //             }
    //             sum += parseFloat(this.value);
    //         });

    //         alert(sum);

    // }

    function threeFieldsSum(){
	    $(this).parent().parent().find('.one').val();
    }
</script>


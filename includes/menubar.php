<?php
$jqueryValidation = '';
$stepForm = '';
$select2 = '';
$dataTable = '';
$addRow = '';
$pdfViewer = '';
if(isset($page)){
	switch ($page) {
		case 'jqueryValidation':
			$jqueryValidation = 'active';
			break;
		case 'stepForm':
			$stepForm = 'active';
			break;
		case 'select2':
			$select2 = 'active';
			break;
		case 'dataTable':
			$dataTable = 'active';
			break;
		case 'addRow':
			$addRow = 'active';
			break;
		case 'pdfViewer':
			$pdfViewer = 'active';
			break;
		default:
			# code...
			break;
	}
}
?>
		<div class="col-md-12" style="margin-top: 15px;">
			<div class="panel panel-info">
				<div class="panel-heading">
					<strong>Checklist (Hasib Kamal Chowdhury)</strong>
				</div>
				<div class="panel-body" style="padding: 15px;">
					<div class="col-md-4" style="padding: 0px;">
						<ul class="nav nav-pills nav-stacked">
							<li>
								<a href="">Basic form building, save, view & edit</a>
							</li>
							<li class="<?php echo $stepForm; ?>">
								<a href="step_form.php">Tab for big form [Step Form]</a>
							</li>
							<li>
								<a href="">Form save as draft</a>
							</li>
							<li>
								<a href="">Image/File uploading using Ajax</a>
							</li>
						</ul>	
					</div>

					<div class="col-md-4">
						<ul class="nav nav-pills nav-stacked">
							<li class="<?php echo $addRow; ?>">
								<a href="add_row.php">Add row in table using JS/JQuery</a>
							</li>
							<li class="<?php echo $pdfViewer; ?>">
								<a href="pdf_viewer.php">PDF Viewer</a>
							</li>
							<li class="<?php echo $jqueryValidation; ?>">
								<a href="jquery_validation.php">Jquery validation</a>
							</li>
							<li class="<?php echo $select2; ?>">
								<a href="select2.php">Select2 / Auto-Complete plugins for dropdown list</a>
							</li>
						</ul>
					</div>
					
					<div class="col-md-4" style="padding: 0px;">
						<ul class="nav nav-pills nav-stacked">
							<li>
								<a href="">Arithmetic inside form using js</a>
							</li>
							<li>
								<a href="">Show / hide portion of form conditionally</a>
							</li>
							<li class="<?php echo $dataTable; ?>">
								<a href="data_table.php">Data tables plugins</a>
							</li>
							<li>
								<a href="">Form preview</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

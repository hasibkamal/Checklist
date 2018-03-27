<!DOCTYPE html>
<html>
<head>
	<title>Checklist</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<?php require_once('includes/menubar.php'); ?>
	</div>

	<div class="row">
			<?php 
			if(isset($page)){
				switch ($page) {
					case 'jqueryValidation':
						require_once('./pages/jquery_validation_page.php');
						break;

					case 'stepForm':
						require_once('./pages/step_form_page.php');
						break;

					case 'select2':
						require_once('./pages/select2_page.php');
						break;

					case 'dataTable':
						require_once('./pages/data_table_page.php');
						break;

					case 'addRow':
						require_once('./pages/add_row_page.php');
						break;

					case 'pdfViewer':
						require_once('./pages/pdf_viewer_page.php');
						break;

					case 'ajxFileUpload':
						require_once('./pages/ajx_file_upload_page.php');
						break;

					case 'formPreview':
						require_once('./pages/form_preview_page.php');
						break;

					case 'arithmeticJsForm':
						require_once('./pages/arithmetic_js_form_page.php');
						break;

					default:
						require_once('./index.php');
						break;
				}
			}

			?>
	</div>
	
</div>
</body>
</html>
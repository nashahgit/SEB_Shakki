
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	if ( !empty ( $_POST ) ) {
		require_once('../includes/class-insert.php');
		
		if ( $insert->post($_POST) ) {
			echo '<h1 style="text-align:center;">Data inserted successfully!</h1>';
		}
	}
?>
<html>
	<head>
		<title>Insert Post</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="cms-form.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3" id="form">
					<form method="post" role="form">
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="post_jobId" placeholder="Job ID" required>
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="post_title" placeholder="Job Title" required>
						</div>
						<div class="form-group col-sm-12">
							<textarea name="post_content" rows="5" class="form-control" placeholder="Job Description" required></textarea>
						</div>
						<button type="submit" id="form-submit" class="btn btn-success pull-right ">Submit</button>	
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	if ( !empty ( $_POST ) ) {
		require_once('../includes/class-insert.php');
		
		if ( $insert->post($_POST) ) {
			echo '
			<div class="modal-dialog" style="position:absolute;z-index: 1000;text-align:center;margin-top:100px;margin-left:25%;">
				<!-- Modal content-->
			    <div class="modal-content">
			        <div class="modal-body">
			        	<button type="button" class="close" data-dismiss="modal">&times;</button>
			          	<h3>Job added Successfully!</h3>
			        </div>
			    	<div class="modal-footer">
			          	<a href="../../jobs/admin/post-edit.php"><button type="button" class="btn btn-default pull-right" data-dismiss="modal">Add another Job</button></a>
			          	<a href="../../jobs/admin/post-edit-delete.php"><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Delete Job</button></a>
			        </div>
			    </div>
		    </div>

		  ';
		
		}
		else {
			echo '<div class="modal-dialog" style="position:absolute;z-index: 1000;text-align:center;margin-top:100px;margin-left:25%;">
				<!-- Modal content-->
			    <div class="modal-content">
			        <div class="modal-body">
			        	<button type="button" class="close" data-dismiss="modal">&times;</button>
			          	<h3>unable to add job!</h3>
			        </div>
			    	<div class="modal-footer">
			          	<a href="../../jobs/admin/post-edit.php"><button type="button" class="btn btn-default" data-dismiss="modal">Try again</button></a>
			        </div>
			    </div>
		    </div>

		  ';
		}
	}
?>
<html>
	<head>
		<title>Admin</title>
		<meta charset="utf-8"> 
	   	<meta name="viewport" content="width=device-width, initial-scale=1">
	   	<link rel="icon" href="../../favicon1.gif" type="image/gif" sizes="20x16">
	   	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">    
	   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	   	<link rel="stylesheet" href="../../colorbox.css" type="text/css">
	   	<link rel="stylesheet" type="text/css" href="../../style.css">
	   	<!--link rel="stylesheet" type="text/css" href="homepage.min.css"-->
	   	<link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/demo/Mobile-Friendly-Bootstrap-Tabs-Enhancement-with-jQuery/dist/css/bootstrap-responsive-tabs.css">
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	   	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	   	<script src="../../responsive-tabs.js"></script>

	   	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
	   	<script src="../../script.js"></script>
	</head>
	<body>
		<div id="seg-wrap">
	  		<div id="seg-ccontent">
	  			<div id="header" class="clearfix" role="banner">
	  				<div id="top">
	              		<nav class="navbar navbar-default navbar-fixed-top">
						    <div class="container">
							    <div class="navbar-header">
							    	<div class="small-owl">
						    			<img src="../../smg_logo_orig_3.png" width="100%">
						    		</div>
						    	</div>
						    </div>
						</nav>
	            	</div>
	            	<div class="container">
              			<div class="row ">
			                <div class="col-sm-6 logo-left">
			                  	<div id="logo" class="">
				                    <a href="/">
				                      <img class="img-responsive" src="../../logo_latest.png" alt="Smart Eductaion Group">
				                    </a>
				                </div>  
				            </div>
				        </div>
            		</div>
	            </div>

				<div class="container margin-bottom-20">
					<div class="row">
						<div class="col-sm-12" id="partners">
							<div class="card"> 
					    		<div class="card-block panel">
					    			<h2 class="card-title panel-heading">Admin (Add Job)</h2>
					    			<div class="panel-body" id="form">
					    				<p>NOTE: Please check the last job ID in the jobs page before adding. (Job Ids starts with Uppercase 'J')</p>
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
					    </div>
					</div>
				</div>
	  		</div>
	  	</div>
	</body>
</html>
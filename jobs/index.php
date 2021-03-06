<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	require_once('includes/class-query.php');
	
	if ( !empty ( $_GET ) ) {
		if ( !empty ( $_GET['p'] ) ) {
			$post = $_GET['p'];
		}
		
		if ( !empty ( $_GET['cat'] ) ) {
			$cat = $_GET['cat'];
		}
	}
	
	if ( empty ( $post ) && empty ( $cat ) ) {
		$posts_array = $query->all_posts();
	} elseif ( !empty ( $post ) ) {
		$posts_array = $query->post($post);
	} elseif ( !empty ( $cat ) ) {
		echo 'cat';
	}
?>
<html>
	<head>		
		<meta charset="utf-8"> 
		<title>More Jobs | Smart Education Group</title>
		<meta name="description" content="Jobs or Careers Page of Smart Education Group Dubai U.A.E, an Education Organization Consultancy">
		<meta name="keywords" content="HTML,CSS,JavaScript">
		<meta name="author" content="Nasruddin Shah"> 
	   	<meta name="viewport" content="width=device-width, initial-scale=1">
	   	<link rel="icon" href="../favicon1.gif" type="image/gif" sizes="20x16">
	   	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">    
	   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	   	<link rel="stylesheet" href="../colorbox.css" type="text/css">
	   	<link rel="stylesheet" type="text/css" href="../style.css">
	   	<!--link rel="stylesheet" type="text/css" href="homepage.min.css"-->
	   	<link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/demo/Mobile-Friendly-Bootstrap-Tabs-Enhancement-with-jQuery/dist/css/bootstrap-responsive-tabs.css">
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	   	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	   	<script src="../responsive-tabs.js"></script>

	   	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
	   	<script src="../script.js"></script>
	</head>
	
	<body>
		<div style="display: none" id="hideAll"><!--img src="smg_logo_orig_2.png" width="20%"--><img class="img-responsive" src="../loader.gif"></div>

  		<!-- form button-->
  		<button class="btn btn-primary"  id="form-button" data-toggle="modal" data-target="#myModalHorizontal">
	    	Contact Us
		</button>

		<!-- Modal start -->
		<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">
		                    <span aria-hidden="true">&times;</span>
		                    <span class="sr-only">Close</span>
		                </button>
		                <h3 class="modal-title" id="myModalLabel">
		                    Contact Us
		                </h3>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                <div class="row">
							<div class="col-sm-12">
							    <form role="form" id="contactForm">
							     	<div class="form-group col-sm-12">
							            <!--label for="name" class="h4">Name</label-->
							            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
							        </div>
							        <div class="form-group col-sm-12">
							            <!--label for="company" class="h4">Company</label-->
							            <input type="text" class="form-control" id="company" placeholder="Company name" required>
							        </div>
							        <div class="form-group col-sm-12">
							            <!--label for="designation" class="h4">Designation</label-->
							            <input type="text" class="form-control" id="designation" placeholder="Designation" required>
							        </div>
							        <div class="form-group col-sm-12">
							            <!--label for="designation" class="h4">Designation</label-->
							            <input type="tel" class="form-control" id="mobile" placeholder="Mobile" required>
							        </div>
							        <div class="form-group col-sm-12">
							            <!--label for="email" class="h4">Email</label-->
							            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
							        </div>
							        <div class="form-group col-sm-12">
							            <!--label for="designation" class="h4">Designation</label-->
							            <input type="text" class="form-control" id="country" placeholder="Country" required>
							        </div>
							        <div class="form-group col-sm-12">
							            <!--label for="designation" class="h4">Designation</label-->
							            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
							        </div>
							        <div class="form-group col-sm-12">
							            <!--label for="message" class="h4 ">Message</label-->
							            <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
							        </div>
							        <button type="submit" id="form-submit" class="btn btn-success pull-right ">Submit</button>
							    </form>
							    <div id="msgprocess" class="h3 text-center hidden">Processing...</div>
							    <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
							</div>
						</div>
		            </div>
		        </div>
		    </div>
		</div>

	  	<!--div id="seg-wrap"-->
	  		<div id="seg-ccontent">
	  			<div id="header" class="clearfix" role="banner">
	  				<div id="top">
	              		<nav class="navbar navbar-default navbar-fixed-top">
						    <div class="container">
							    <div class="navbar-header">
							    	<div class="small-owl">
						    			<img src="../smg_logo_orig_3.png" width="100%">
						    		</div>
						    	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						        	    <span class="sr-only">Toggle navigation</span>
						            	<span class="icon-bar"></span>
						            	<span class="icon-bar"></span>
						            	<span class="icon-bar"></span>
						          	</button>
						        </div>
						        <div id="navbar" class="navbar-collapse collapse">
						        	<div class="small-owl">
						    			<img src="../smg_logo_orig_3.png" width="100%">
						    		</div>
						          	<ul class="nav navbar-nav navbar-right">
						            	<li><a href="../index.php">HOME</a></li>
						            	<li><a href="../about.html">ABOUT</a></li>
						            	<li><a href="../partners.html">PARTNERS</a></li>
						            	<li class="dropdown">
						            		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COURSES<span class="caret"></span></a>
									              <ul id="drop" class="dropdown-menu">
									                <li><a href="../courses.html#cma">CMA</a></li>
									                <li><a href="../courses.html#ifrs">IFRS</a></li>
									                <li><a href="../courses.html#cgba">CGBA</a></li>
									                <li><a href="../courses.html#islamic">Islamic Banking and Finance</a></li>
									                <li><a href="../courses.html#vat">VAT</a></li>
									                <li><a href="../courses.html#risk">Risk Management</a></li>
									                <li><a href="../courses.html#finance">Finance for Non-Finance</a></li>
									              </ul>
						            	</li>
						            	<li><a href="../providers.html">PROVIDERS</a></li>
						            	<li><a href="../services.html">SERVICES</a></li> 
							            <li><a href="../contact.html">CONTACT</a></li>
							            
						          	</ul>
						        </div><!--/.nav-collapse -->
						    </div>
						</nav>
	            	</div>
	            	<div class="container">
              			<div class="row ">
			                <div class="col-sm-6 logo-left">
			                  	<div id="logo" class="">
				                    <a href="/">
				                      <img class="img-responsive" src="../logo_latest.png" alt="Smart Eductaion Group">
				                    </a>
				                </div>  
				            </div>
				            <div class="col-sm-6 logo-right">     
				                <div id="contact">
				                	<div class="fa fa-phone">
					            		<div class="phone-num">+971 52 67 47 153</div>
						            	<div class="phone-num">+971 55 10 62 083</div>
						            </div>
					            </div>
			                </div>
			            </div>
            		</div>
            	</div>
            	<!-- Carousel
    			================================================== -->

				<div class="container margin-bottom-20">
					<div class="row">
						<div class="col-sm-12" id="partners">
							<div class="card"> 
					    		<div class="card-block">
								    <h2 class="card-title panel-heading">Smart Jobs</h2>
								    <?php if($posts_array > 0 ) :
								    	foreach ( $posts_array as $post ) : ?>
										<div class="panel">
											<div class="panel-heading">
												<h3><?php echo $post->post_title; ?></h3>
											</div>
											<div class="panel-body">
												<p><span style="font-weight:800;color:#18569C;">Job Id :</span> <?php echo  $post->post_jobId; ?></p>
												<p><span style="font-weight:800;color:#18569C;">Job Description :</span> <?php echo  $post->post_content; ?></p>
											</div>
										</div>
									<?php endforeach; 
										else : ?>
										<div class="panel">
											<div class="panel-heading">
												<h3>Sorry : There are No Jobs listed right now.</h3>
											</div>
										</div>
									<?php endif; ?>	
								</div>
							</div>
					    </div>
					</div>
				</div>
				<br><br><br><br><br><br><br>
				<div id="footer" class="clearfix footer" role="contentinfo">
					<div id="global-footer">
						<div class="container">
							<div class="row">
								<div class="col-sm-6 logo-left">
									<div id="footer-logo">
										<div class="footer-owl" >
							    			<img src="../smg_logo_orig_3.png" width="80px" height="80px">
							    		</div>
							    		<ul>
											<li class="active"><a href="../index.php">HOME</a></li>
											<li class="active"><a href="../about.html#">ABOUT</a></li>
											<li class="active"><a href="../services.html">SERVICES</a></li>
											<li class="active"><a href="../contact.html">CONTACT</a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 logo-right">
									<div class="social">
										<img src="../googleplus.png">
							    		<img src="../twitter.png">
							    		<img src="../youtube.png">
							    		<img src="../facebook.png">
						    		</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<p id="copy-right">&copy; Smart Education Group. Dubai, UAE.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="scrollup">
					<a href="#"></a>
				</div>
	  		</div>
	  	<!--/div-->
	  	<script type="text/javascript" src="../contactus.js"></script>
		
	</body>
</html>
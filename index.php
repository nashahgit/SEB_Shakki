
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta name="google-site-verification" content="7LKv2fJSPqyIKrfHySW_s845SV8-yzmticHcHgPhWI0" />
	   	<title> HOME | Smart Education Group</title>
	   	<meta name="description" content="Home Page of Smart Education Group Dubai U.A.E. Education Organization Consultancy">
		<meta name="keywords" content="HTML,CSS,JavaScript">
		<meta name="author" content="Nasruddin Shah">
	   	<meta name="viewport" content="width=device-width, initial-scale=1">
	   	<link rel="icon" href="favicon1.gif" type="image/gif" sizes="20x16">
	   	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">    
	   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	   	<link rel="stylesheet" href="colorbox.css" type="text/css">
	   	<link rel="stylesheet" type="text/css" href="style.css">
	   	<!--link rel="stylesheet" type="text/css" href="homepage.min.css"-->
	   	<link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/demo/Mobile-Friendly-Bootstrap-Tabs-Enhancement-with-jQuery/dist/css/bootstrap-responsive-tabs.css">
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	   	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	   	<script src="responsive-tabs.js"></script>

	   	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
	   	<script src="script.js"></script>
	    
	</head>
  	<body>
  		<div style="display: none" id="hideAll"><!--img src="smg_logo_orig_2.png" width="20%"--><img class="img-responsive" src="loader.gif"></div>

  		<!-- form button-->
  		<button class="btn btn-primary"  id="form-button" data-toggle="modal" data-target="#myModalHorizontal">
	    	ContactUS
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

	  	<div id="seg-wrap">
	  		<div id="seg-ccontent">
	  			<div id="header" class="clearfix" role="banner">
	  				<div id="top">
	              		<nav class="navbar navbar-default navbar-fixed-top">
						    <div class="container">
							    <div class="navbar-header">
							    	<div class="small-owl">
						    			<img src="smg_logo_orig_3.png" width="100%">
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
						    			<img src="smg_logo_orig_3.png" width="100%">
						    		</div>
						          	<ul class="nav navbar-nav navbar-right">
						            	<li class="active"><a href="#">HOME</a></li>
						            	<li><a href="about.html">ABOUT</a></li>
						            	<li><a href="partners.html">PARTNERS</a></li>
						            	<li><a href="services.html">SERVICES</a></li> 
						                <li><a href="contact.html">CONTACT</a></li>
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
				                      <img class="img-responsive" src="logo_latest.png" alt="Smart Eductaion Group">
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
			    <div id="myCarousel" class="carousel slide margin-bottom-20" data-ride="carousel">
			      <!-- Indicators -->
			      <!--ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			        <li data-target="#myCarousel" data-slide-to="1"></li>
			        <li data-target="#myCarousel" data-slide-to="2"></li>
			      </ol-->
			      <div class="carousel-inner" role="listbox">
			        <div class="item active">
			          <img class="first-slide img-responsive" src="banner-growth.png" alt="First slide">
			          
			            <!--div class="carousel-caption">
			              <h1>Let's</h1>
			              <p> create your growth story together!</p>
			            </div-->
			   
			        </div>
			        <div class="item">
			          <img class="second-slide img-responsive" src="banner-raise-4.png" alt="Second slide">
	
			            <!--div class="carousel-caption">
			              <h1>Raise </h1>
			              <p>efficiency and keep projects on time! </p>
			            </div-->
		
			        </div>
			        <div class="item">
			          <img class="third-slide img-responsive" src="banner-we-2.png" alt="Third slide">
			  
			            <!--div class="carousel-caption">
			              <h1>We</h1>
			              <p>provide unique and tailored solutions!</p>
			            </div-->
			 
			        </div>
			      </div>
			      <div class="camera_nav"></div>
			      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			      </a>
			      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			      </a>
			    </div><!-- /.carousel -->
			    <div class="container margin-bottom-20">
			    	<div class="row">
			    		<div class="col-sm-4 three-cards">
				    		<div class="card">
				    		  	<div class="card-block top">
								    <h3 class="card-title">Build a Plan</h3>
							  	</div>
							  	<img class="img-responsive" src="plan.png" width="100%" alt="Card image">
								<div class="card-block">
								   <p class="card-text">Through our ‘build a plan’ service, we help to prepare academic and educational plans for setting up institutes like...</p>
								   <a href="services.html" class="btn btn-primary">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 three-cards top">
				    		<div class="card">
				    		  	<div class="card-block top">
								    <h3 class="card-title">Operate an Institution</h3>
							  	</div>
							  	<img class="img-responsive" src="operate_2.png" width="100%" alt="Card image">
								<div class="card-block">
								   <p class="card-text">We can take over struggling educational institutions. Make a detailed study and suggest improvement plans...</p>
								   <a href="services.html" class="btn btn-primary">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 three-cards">
				    		<div class="card">
				    		  	<div class="card-block top">
								    <h3 class="card-title">Transfer Knowledge</h3>
							  	</div>
							  	<img class="img-responsive" src="transfer_1.jpg" width="100%" alt="Card image">
								<div class="card-block">
								   <p class="card-text">We act as a bridge between various professional bodies across the globe and educational institutions in the Middle East...</p>
								   <a href="services.html" class="btn btn-primary">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container margin-bottom-20">
					<div class="row ">
						<div class="col-sm-7" id="myTab">
							<div class="card">
								<div class="card-block">
									<h3 class="card-title">More Services</h3>
								</div>
								<div class="card-block">
									<ul class="nav nav-tabs responsive" >
								        <li class="test-class active"><a class="deco-none red-class" href="#resp-tab1">EDUCATION CONSULTING</a></li>
								        <li class="test-class"><a href="#resp-tab2">SEMINARS AND CONFERENCES</a></li>
								    </ul>
								    <div class="tab-content responsive">
					    		        <div class="tab-pane active" id="resp-tab1">
								        	<img class="my-img" src="coaching.png" alt="consulting image">
								           	<p>Through our consultancy cell, we guide aspirants and students on educational institutions, admission procedures and other related queries for pursuing studies outside their country.  This service is available for institutes based in Middle East, United Kingdom.... </p>
								           	<p class="pull-right"><a href="services.html">Read more..</a></p>
								        </div>
								        <div class="tab-pane" id="resp-tab2">
								        	<img class="my-img" src="university.png" alt="consulting image">
								        	<p>We thoroughly understand that education in modern days have changed from reading text books or writing notes to more interactive ways  of practical illustrations and case studies. In light of such changes we felt the need to having experts in chosen fields who...</p>
								        	<p class="pull-right"><a href="services.html">Read more..</a></p>
								        </div>
								    </div>
								</div>    
							</div>
					    </div>
					    <div class="col-sm-5" id="seminars">
					    	<div class="card seminar"> 
						    	<div class="card-block">
								    <h3 class="card-title">Seminars</h3>
								</div>
							 	<br>
							  	<div class="card-block">
								   <li class="card-text">Certified Management Accounting (CMA) 7 Days Program.</li>
								   <li class="card-text">Certified Global Business Analyst (CGBA) Program.</li>
								   <li class="card-text">International Financial Reporting Standards (IFRS).</li>
								   <li class="card-text">Islamic Banking and Finance.</li>
								   <li class="card-text">Risk Management Program.</li>
								</div>
						    </div>
						    <div class="card conference"> 
						    	<div class="card-block">
								    <h3 class="card-title">Conference</h3>
								</div>
							 	<br>
							  	<div class="card-block">
								   <li class="card-text">Management Accounting Conference 2020</li>
								   <li class="card-text">International Financial Reporting Standards (IFRS) SME Conference.</li>
								   <li class="card-text">Islamic Banking & Finance Conference.</li>
								   <br>
								</div>
						    </div>
					    </div>
					</div>
				</div>
				<div class="container margin-bottom-20">
					<div class="row">
						<div class="col-sm-12" id="main-partners">
							<div class="card"> 
					    		<div class="card-block">
								    <h3 class="card-title">Strategic Partners</h3>
								    <div class="panel">
								    <div class="row">
								    	<div class="col-sm-6 panel-body">
								    		<img class="img-responsive cmawebline-img " src="cmawebline.jpg" alt="cmawebline logo">
								    	</div>
								    	<div class="col-sm-6 panel-body">
								    		<img class="img-responsive calwest-img " src="calwest.png" alt="calwest logo">
								    	</div>
								    </div>
								    <div class="row">
								    	<div class="col-sm-6 panel-body">
								    		<img class="img-responsive topacademy-img" src="topacademy.png" alt="top  academy logo">
								    	</div>
								    	<div class="col-sm-6 panel-body">
								    		<img class="img-responsive ssmgroup-img" src="ssmgroup.png" alt="ssm group logo">
								    	</div>
								    </div>
								    </div>
  									<a href="partners.html" class="btn btn-primary">Know More</a>
							  	</div>
							</div>
					    </div>
					</div>
				</div>
				<div class="container margin-bottom-20">
					<div class="row">
						<div class="col-sm-12" id="jobs">
							<div class="card"> 
					    		<div class="card-block">
								    <h3 class="card-title">Smart Jobs</h3>
								    
								    <?php
										error_reporting(E_ALL);
										ini_set('display_errors', '1');

										require_once('jobs/includes/class-query.php');
										
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
								    <?php if($posts_array > 0 ) :
								    	foreach ( $posts_array as $post ) : ?>
										<div class="panel">
											<div class="panel-heading">
												<h4><?php echo $post->post_title; ?></h4>
											</div>
											<div class="panel-body">
												<p><?php echo "Job Id : " . $post->post_jobId; ?></p>
												<p><?php echo "Job Description : " . $post->post_content; ?></p>
											</div>
										</div>
										<?php break; ?>
									<?php endforeach; 
										else : ?>
										<div class="panel">
											<div class="panel-heading">
												<h4>Sorry : There are No Jobs listed right now.</h4>
											</div>
										</div>
									<?php endif; ?>
									<!--p class="card-text job-desc">			
								    <span>SORRY : CURRENTLY THERE ARE NO JOBS LISTED</span>
								    <span>Job ID : </span> J1001 <br>
								    <span>Job Role : </span> Software Developer <br>
								    <span>Job Description : </span> Twinkle Twinkle little star how I wonder what you are. Up above the world so high. Like a diamond in the sky. Twinkle Twinkle little star how I wonder what you are. Up above the world so high. Like a diamond in the sky. <br> </p-->
								    
  									<a href="jobs/" class="btn btn-primary">More Jobs</a>
							  	</div>
							</div>
					    </div>
					</div>
				</div>
				<div id="footer" class="clearfix footer" role="contentinfo">
					<div id="global-footer">
						<div class="container">
							<div class="row">
								<div class="col-sm-6 logo-left">
									<div id="footer-logo">
										<div class="footer-owl" >
							    			<img src="smg_logo_orig_3.png" width="80px" height="80px">
							    		</div>
							    		<ul>
											<li class="active"><a href="#">HOME</a></li>
											<li class="active"><a href="about.html">ABOUT</a></li>
											<li class="active"><a href="services.html">SERVICES</a></li>
											<li class="active"><a href="contact.html">CONTACT</a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 logo-right">
									<div class="social">
										<img src="googleplus.png">
							    		<img src="twitter.png">
							    		<img src="youtube.png">
							    		<img src="facebook.png">
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
	  	</div>
	  	<script type="text/javascript" src="contactus.js"></script>
  	</body>
</html>
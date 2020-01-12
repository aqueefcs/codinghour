<?php
	


	
	include('config.php');
	include('includes/handlers/login-handlers.php');
	$errorArray = array();
	$errorArray['invalidLogin'] = "";
	echo $errorArray['invalidLogin'];
	
	if(isset($_SESSION['userLoggedIn']))
		header('Location:includes/home.php');
	
	




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" >
	<title>CodeHour2020</title>
	<!--link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"-->
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"-->


	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">












	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
		

			<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			  <a class="navbar-brand" href="#"><span><i class="fas fa-code"></i> Code</span>Hour2020</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php"><span>H</span>ome <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#about-us">About<span>Us</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#college"><span>C</span>olleges</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#contact"><span>C</span>ontact</a>
			      </li>
			    </ul>
			  </div>
			</nav>




<!--main body-->
			<div class="container">
				<div class="row">
					<div class="col-md-8">
					<!--Carousel Wrapper-->
						<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="height:100%;">
						  <!--Indicators-->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-2" data-slide-to="1"></li>
						    <li data-target="#carousel-example-2" data-slide-to="2"></li>
						  </ol>
						  <!--/.Indicators-->
						  <!--Slides-->
						  <div class="carousel-inner" role="listbox">
						    <div class="carousel-item active">
						      <div class="view">
						        <img class="d-block w-100" src="assets/img/cr-code.jpg"
						          alt="First slide">
						        <div class="mask rgba-black-light"></div>
						      </div>
						      <div class="carousel-caption">
						        <h3 class="h3-responsive font-weight-bold">CodeHour 2020</h3>
						        <p>5th Jan 2020</p>
						      </div>
						    </div>
						    <div class="carousel-item">
						      <!--Mask color-->
						      <div class="view">
						        <img class="d-block w-100" src="assets/img/fox1.jpg"
						          alt="Second slide">
						        <div class="mask rgba-black-strong"></div>
						      </div>
						      <div class="carousel-caption">
						        <h3 class="h3-responsive font-weight-bold">CodeHour 2020</h3>
						        <p>5th Jan 2020</p>
						      </div>
						    </div>
						    <div class="carousel-item">
						      <!--Mask color-->
						      <div class="view">
						        <img class="d-block w-100" src="assets/img/fox2.jpg"
						          alt="Third slide">
						        <div class="mask rgba-black-slight"></div>
						      </div>
						      <div class="carousel-caption">
						        <h3 class="h3-responsive font-weight-bold">CodeHour 2020</h3>
						        <p>5th Jan 2020</p>
						      </div>
						    </div>
						  </div>
						  <!--/.Slides-->
						  <!--Controls-->
						  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						  <!--/.Controls-->
						</div>
						<!--/.Carousel Wrapper-->
					</div>

					<div class="col-md-4">
						<!-- Material form login -->
							<div class="card">

							  <h5 class="card-header  white-text text-center py-4">
							    <strong><span>Sign</span> In</strong>
							  </h5>

							  <!--Card content-->
							  <div class="card-body px-lg-5 pt-0" style="margin-top: 58px;">

							    <!-- Form -->
							    <form class="text-center" style="color: #757575;" method="post">

							      <!-- Email -->
							      <div class="md-form">
							        <div class="form-group">
									    <label for="exampleInputEmail1" style="color: #134E5E;" class="font-weight-bold"><i class="fa fa-user"></i> Email address</label>
									    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
									    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								  	</div>
							      </div>

							      <!-- Password -->
							      <div class="md-form">
							      	<div class="form-group">
									    <label for="exampleInputPassword1" style="color: #134E5E;" class="font-weight-bold"><i class="fa fa-lock"></i> Password</label>
									    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
								  	</div>
							       
							      </div>

							      <div class="d-flex justify-content-around">
							        <div>
							          <!-- Forgot password -->
							          <a href="includes/resetpassword.php" target="_blank">Forgot password?</a>
							        </div>
							       
							      </div>

							      <!-- Sign in button -->
							      <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Sign in <i class="fas fa-sign-out-alt"></i></button>

							      <!-- Register -->
							      <p>New User?
							        <a href="includes/register.php" style="color: #134E5E">Register</a>
							      </p>

							      

							    </form>
							    <!-- Form -->

							  </div>

							</div>
							<!-- Material form login -->
						
					</div>		
				</div>
				<hr class="my-5">
				
				  <div class="container my-5 py-5 z-depth-1 info">
				  		<h3 class="text-center" id="about-us"><span>About</span> Us</h3>
				  		<hr class="my-5">

					    <!--Section: Content-->
					    <section class="px-md-5 mx-md-5 dark-grey-text text-center">

					      <!--Grid row-->
					      <div class="row d-flex justify-content-center">

					        <!--Grid column-->
					        <div class="col-lg-8">

					          <!--Grid row-->
					          <div class="row">

					            <!--First column-->
					            <div class="col-md-3 col-6 mb-4">
					              <i class="fas fa-code fa-3x blue-text"></i>
					            </div>
					            <!--/First column-->

					            <!--Second column-->
					            <div class="col-md-3 col-6 mb-4">
					              <i class="fab fa-java fa-3x teal-text"></i>
					            </div>
					            <!--/Second column-->

					            <!--Third column-->
					            <div class="col-md-3 col-6 mb-4">
					              <i class="fab fa-python fa-3x indigo-text"></i>
					            </div>
					            <!--/Third column-->

					            <!--Fourth column-->
					            <div class="col-md-3 col-6 mb-4">
					              <i class="fab fa-contao fa-3x deep-purple-text"></i>
					            </div>
					            <!--/Fourth column-->

					          </div>
					          <!--/Grid row-->

					          <p  class="text-dark">CodeHour is created as a platform to help programmers make it big in the world of algorithms, computer programming, and programming contests. At CodeHour we work hard to revive the geek in you by hosting a programming contest at the start of the month and two smaller programming challenges at the middle and end of the month. We also aim to have training sessions and discussions related to algorithms, binary search, technicalities like array size and the likes. Apart from providing a platform for programming competitions, CodeHour also has various algorithm tutorials and forum discussions to help those who are new to the world of computer programming.</p>

					        </div>
					        <!--Grid column-->

					      </div>
					      <!--Grid row-->


					    </section>
					    <!--Section: Content-->


					  </div>
					  <hr class="my-5">



					  <div class="container my-5 py-5 z-depth-1 info">
				  		<h3 class="text-center" id="college"><span>C</span>olleges</h3>
				  		<hr class="my-5">

					    <!--Section: Content-->
					    <section class="px-md-5 mx-md-5 dark-grey-text text-center">

					      <!--Grid row-->
					      <div class="row d-flex justify-content-center">

					        <!--Grid column-->
					        <div class="col-lg-8">

					       
					            <div class="alert alert-primary font-weight-bold" role="alert">
								   MAULANA ABUL KALAM AZAD UNIVERSITY OF TECHNOLOGY
							    </div>
							    <div class="alert alert-primary font-weight-bold" role="alert">
								   JADAVPUR UNIVERSITY
							    </div>
							    <div class="alert alert-primary font-weight-bold" role="alert">
								   TECHNO INDIA UNIVERSITY
							    </div>
							    <div class="alert alert-primary font-weight-bold" role="alert">
								   IEM COLLEGE
							    </div>
							    <div class="alert alert-primary font-weight-bold" role="alert">
								   BUDGE BUDGE INSTITUTE OF TECHNOLOGY
							    </div>
							    <div class="alert alert-primary font-weight-bold" role="alert">
								   HERITAGE INSTITUTE OF TECHNOLOGY
							    </div>
								<div class="alert alert-primary font-weight-bold" role="alert">
								   HALDIA INSTITUTE OF TECHNOLOGY
							    </div>	
							    <div class="alert alert-primary font-weight-bold" role="alert">
								   ACADEMY OF TECHNOLOGY
							    </div>	
							    <div class="alert alert-primary font-weight-bold" role="alert">
								   KGEC
							    </div>		


					        </div>
					        <!--Grid column-->

					      </div>
					      <!--Grid row-->


					    </section>
					    <!--Section: Content-->


					  </div>

				
			</div>
<!-- Footer -->
<footer class="page-footer font-small pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3" id="contact">

        <!-- Content -->
        <h3 class="text-uppercase font-weight-bold">AQUEEF ALIM ANSARI</h3>
        <p><i class="fas fa-envelope"></i> Email: aqueefalimansari007@gmail.com</p>
        <p><i class="fas fa-mobile"></i> phone: 9875672907</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        
        <ul class="list-unstyled">
          <li>
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!">About Us</a>
          </li>
          <li>
            <a href="#!">Colleges</a>
          </li>
          <li>
            <a href="#!">Contact</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> CodeHour.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
				
			




























			<script type="text/javascript">

				
			</script>














<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
















<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script-->
</body>
</html>
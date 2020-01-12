<?php
	
	
	include('../config.php');
	include('handlers/login-handlers.php');
	$currentUserId = $_SESSION['currentUserId'];
	$userDetailsQuery = "SELECT * FROM userdetails WHERE uid = '$currentUserId' ";
	$success = mysqli_query($con,$userDetailsQuery);
	$userdetailsRow = mysqli_fetch_array($success);
	
	

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>HomePage</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<style type="text/css">
		.card{
			margin-top: 20px;

		}
		p{
			margin-left: 10px;
		}
		
	</style>
</head>
<body>



			<nav class="navbar navbar-expand-lg navbar-dark">
			  <a class="navbar-brand" href="#"><span><i class="fas fa-code"></i> Code</span>Hour2020</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="../index.php"><span>H</span>ome <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="../index.php">About<span>Us</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="../index.php"><span>C</span>olleges</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="../index.php"><span>C</span>ontact</a>
			      </li>
			    </ul>

			    <form class="form-inline my-2 my-lg-0 ml-auto">
				    
				    <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit" name="log-out" href="logout.php?logout">Logout <i class="fas fa-sign-out-alt"></i></a>
  				</form>
			  </div>
			</nav>






				<div class="container my-5 py-5 z-depth-1 info">
						<div class="text-center">
						 <?php echo "<img  style='width:100px; height:100px; text-align: center;' src='../assets/img/user-images/".$userdetailsRow[5]." '> " ?>
						</div>
						 <hr class="my-10">
				  		<h1 class="text-center"><?php echo "Hi, <span>".$userdetailsRow[1]."</span>"; ?></h1>
				  		<h5 id="timer" class="text-dark font-weight-bold alert-danger" style="text-align: center;">
							<i class="fas fa-clock"></i> Time Left
						</h5>
				  		<hr class="my-5">

					    <!--Section: Content-->
					<section class="px-md-5 mx-md-5 dark-grey-text text-center">

					      <!--Grid row-->
					      <div class="row d-flex justify-content-center">


					        <!--Grid column-->
					        <div class="col-lg-8">
					        	<i class="fas fa-quote-left" style="float: left;"></i><h3 class="text-dark"></i> <span>Winter</span> is here</h3> <i class="fas fa-quote-right" style="float: right;"></i>
					        	<hr class="my-5 dashed">

					       		<p style="text-align: left;" class="text-dark">
					       			This is a coding contest where you can show off your computer programming skills. The significance being - it gives you enough time to think about a problem, try different ways of attacking the problem, read the concepts etc. If you’re usually slow at solving problems and have ample time at hand, this is ideal for you. We also put in a lot of efforts in getting quality problems, which would, in turn, foster your learning while solving them.
					       		</p>
					       		<hr class="my-5">
					       		<h3 class="font-weight-bold"><i class="fas fa-book-open"></i> Rules of the <span>contest</span> </h3>
					            <hr class="my-12">
					            <ol style="text-align: left;" class="text-dark">
									<li>You are supposed to code in C/Java/Python Only</li>
									<li>The contest time is 60 minutes. You will be given a reading time of 15 minutes extra.</li>
									<li>The contest will start exactly st 01:00 pm on 5th January,2020.</li>
									<li>The below button is disabled and will be enabled exactly when the contest start. Refresh the page after 01:00 pm to begin. </li>
								</ol>

								<form action="contest.php" method="post">
									<button class="btn btn-primary btn-lg" id="start-btn">Start Contest</button>
					   			</form>


					        </div>
					        <!--Grid column-->

					      </div>
					      <!--Grid row-->


					</section>
					    <!--Section: Content-->


				</div>

				<!-- Footer -->
				<footer class="page-footer font-small fixed-bottom">

				  <!-- Copyright -->
				  <div class="footer-copyright text-center py-3">© 2020 Copyright:
				    <a href="#">CodeHour.com</a>
				  </div>
				  <!-- Copyright -->

				</footer>
				<!-- Footer -->
		
						
				



<script type="text/javascript" src="../assets/js/timer.js">
	
</script>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>







</body>
</html>

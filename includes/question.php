<?php

	include('../config.php');
	if(!isset($_SESSION['userLoggedIn']))
		header('Location:../index.php');
	$pcode = $_GET['pcode'];
	
	$problemQuery = "SELECT * FROM problems WHERE pcode = '$pcode'";
	$success = mysqli_query($con,$problemQuery);
	$row = mysqli_fetch_array($success);
	$year = $row[2];
	
	if(isset($_POST['submit'])){
		$solution = $_POST['solution'];
		$extn = ".".$_POST['language'];
		$temp = "solutions/".$year."/";
		$filename =$temp.$_SESSION['currentUserId'].$pcode.$extn;
		$myfile = fopen($filename, "w");
		
		fwrite($myfile, $solution);
		$sub = $row[5];
		$sub++;
		$updateQuery = "UPDATE problems SET psubmission = '$sub' WHERE pcode = '$pcode' ";
		$success = mysqli_query($con,$updateQuery);

		
	}

	

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contest || Question</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<style type="text/css">
		.container{
			margin-bottom: 100px;
		}
	</style>
</head>
<body>

		<nav class="navbar navbar-expand-lg navbar-dark">
			  <a class="navbar-brand" href="../index.php"><span><i class="fas fa-code"></i> Code</span>Hour2020</a>
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
			  </div>
		</nav>
					<div class="container">
						<div class="card">
								<div class="card-body card-body-cascade text-center">

								    <!-- Title -->
								    <h4 class="card-title"><strong><?php echo $row[3]; ?></strong></h4>
								    <!-- Subtitle -->
								    <h6 class="font-weight-bold indigo-text py-2">Pcode: <?php echo $row[1]; ?></h6>
								    <h5 id="timer" class="text-dark font-weight-bold alert-danger" style="text-align: center;">
										<i class="fas fa-clock"></i> Time Left
									</h5>
								    <hr class="my-10">
								    <!-- Text -->
								    <p class="card-text text-dark" style="text-align: left;">
								    	<?php
											echo $row[4]; 
										?>
										<hr class="my-12">
								    </p>


								</div>
								<form class="" method="post">
								<div style="margin-left: 100px;">
								  <input class="form-check-input" type="radio" name="language" id="inlineRadio1" value="c"  required>
								  <label class="form-check-label" for="inlineRadio1" style="width: 30%; margin-left: 5px;">C</label>
								  <input class="form-check-input" type="radio" name="language" id="inlineRadio1" value="java" required>
								  <label class="form-check-label" for="inlineRadio1" style="width: 30%;">Java</label>
								  <input class="form-check-input" type="radio" name="language" id="inlineRadio1" value="py" required>
								  <label class="form-check-label" for="inlineRadio1" style="width: 30%;">Python</label>
								</div>
								<hr class="my-15">
								
								<div class="form-group" style="margin:5px;">
								  <label for="exampleFormControlTextarea3" class="text-dark font-weight-bold">Submit Your Solution</label>
								  <textarea class="form-control" id="solution" rows="30" name="solution"></textarea>
								</div>
								<button type="submit" id="btn" name="submit" class="btn btn-primary btn-lg btn-block"  style="margin-top: 10px;">Submit <i class="fa fa-paper-plane"></i></button>
								</form>
						</div>
						
						
						
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



<!--script type="text/javascript" src="../assets/js/contest-timer.js">
	
</script-->

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

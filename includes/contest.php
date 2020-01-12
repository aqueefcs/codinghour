<?php

	include('../config.php');
	
	$currentUserId = $_SESSION['currentUserId'];
	$userDetailsQuery = "SELECT * FROM userdetails WHERE uid = '$currentUserId' ";
	$success = mysqli_query($con,$userDetailsQuery);
	$userdetailsRow = mysqli_fetch_array($success);
	$uyear = $userdetailsRow[4];

	$problemQuery = "SELECT * FROM problems WHERE pyear = '$uyear' ";
	$success = mysqli_query($con,$problemQuery);
	$p_count = mysqli_num_rows($success);
	



?>





<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contest ||CodeHour 2020</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<style type="text/css">
		body {
			background-color:#bdc3c7;
		}
		.table{
			margin-top: 20px;
		}
		.text-white {

		}
		.ques a{
				text-decoration: none;
		}
		.table{
			box-shadow: 0px 4px 4px 4px #134E5E; 
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
						<div class="text-center">
						<h1 class="text-dark"><?php echo "Hi,<span style='color: #373B44;'> ".$userdetailsRow[1]."</span>"; ?></h1> 

						</div>
						<h3 id="timer" class="text-dark font-weight-bold" style="text-align: right;">
							<i class="fa fa-clock-o"></i> Time Left
						</h3>



								<table class="table">
								  <thead style="background-color: #134E5E;">
								    <tr>
								      
								      <th scope="col" class="font-weight-bold text-white"><span>C</span>ode</th>
								      <th scope="col" class="font-weight-bold text-white"><span>S</span>tatement</th>
								      <th scope="col" class="font-weight-bold text-white"><span>Total</span> Submission</th>
								    </tr>
								  </thead>
								  <tbody>
								    

								    	<?php
								    		while($p_count != 0){
								    			$row = mysqli_fetch_array($success);
								    			$pcode = $row[1];
								    			echo "
								    				<tr>
								    					<th scope = 'row' class='ques'><a href='question.php?pcode=".$pcode."' target='_blank'>".$row[1]."</a></th>
								    					<td class='ques'><a href='question.php?' target='_blank'>".$row[3]."</a></td>
								      					<td>".$row[5]."</td>
								    				</tr>




								    			";


								    			$p_count--;
								    		}


								    	?>
								    
								  </tbody>
								</table>
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

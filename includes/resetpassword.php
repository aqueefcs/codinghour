<?php
	include('../config.php');
	
	
	
	if(isset($_POST['reset'])){
		$uemail = $_POST['uemail'];
		$rpassword = $_POST['rpassword'];
		$phone = $_POST['phone'];
		$loginQuery = "SELECT * FROM userlogin WHERE uemail = '$uemail'";
		$loginQuery1 = "SELECT * FROM userdetails WHERE ucontact = '$phone'";
		$success = mysqli_query($con, $loginQuery);
		$success1 = mysqli_query($con, $loginQuery1);
		$row = mysqli_fetch_array($success1);
		$id = $row[0];
		if(mysqli_num_rows($success1) != 1){
			echo "Error in reset of your password";
		}
		else{
			$updateQuery = "UPDATE userlogin SET upassword = '$rpassword' WHERE uemail = '$uemail' AND uid = '$id' ";
			$success = mysqli_query($con,$updateQuery);
			echo "Your Password has been reset";
			session_destroy();
			header('Location:../index.php');
			
		}

	}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Reset Password</title>
 	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

 </head>
 <body>
 	<nav class="navbar navbar-dark">
		<a class="navbar-brand" href="../index.php"><span><i class="fas fa-code"></i>Code</span>Hour</a>
	</nav>

	


				<div class="container">
					<div class="col-md-2"></div>
					<div class="card col-md-8">

									<!-- Default form login -->
							<form class="text-center border border-light p-5" method="post">

							    <p class="h4 mb-4">Reset Your Password</p>

							    <!-- Email -->
							    <input type="email"  class="form-control mb-4" name="uemail" placeholder="E-mail" required>

							    <!-- Password -->
							    <input type="password"  name="rpassword" class="form-control mb-4" placeholder="New-Password" required>
							    
							    <input type="text"  name="phone" class="form-control mb-4" placeholder="Enter Registered Phone Number" required>
							    
							    

							    <!-- Sign in button -->
							    <button class="btn btn-info btn-block my-4" type="submit" name="reset">Reset Password</button>

							    
							   
							   

							</form>
							<!-- Default form login -->
					</div>
					<div class="col-md-2"></div>
				</div>











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
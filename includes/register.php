<?php
	
	include('../config.php');
	include('handlers/register-handler.php');



	$collegeQuery = "SELECT * FROM colleges ";
	$success = mysqli_query($con,$collegeQuery);
	$c_count = mysqli_num_rows($success);






?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Here</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">



	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
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



					<div class="container" style="margin-bottom: 100px;">
						<div class="col-md-2"></div>
						<div class="card col-md-8">
							<form method="post" enctype="multipart/form-data">
								<div class=" text-center" style="margin-top: 20px;"><h3><span>Register</span> Here</h3></div>
								<?php
									if(isset($_POST['register'])){
										if($success && $success1)
											echo "<div class='alert alert-success text-center'> Registration Successful !</div>";
										else
											echo "<div class='alert alert-danger text-center'> Registration Unsuccessful !</div>";
									}
										
								?>
								<hr class="my-5">
								<div class="form-group">
								    <label ><i class="fa fa-user"></i> Full Name :</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" name="uname" aria-describedby="emailHelp" placeholder="Enter Name" required>
								    
								  </div>
								  <div class="form-group">
								    <label><i class = "fa fa-university"></i> College</label>
								    <select class="form-control" name="ucollege" id="ucollege" onchange="show();">
								    	<option value="0">---Select---</option>
								    	<?php
								    		while($c_count != 0){
								    			$row = mysqli_fetch_array($success);
								    			echo "

								    				<option value='".$row[0]."'>".$row[1]."</option>

								    			";
								    			$c_count--;
								    		}

								    	?>
								    	<option value="-999">Other</option>
								    	

								    </select>
								    <script type="text/javascript">
								    		function show(){
								    			if(document.getElementById("ucollege").value == -999){
								    				document.getElementById("other").style.display = "block";
								    			}
								    		}
								    	</script>
								    	<input class="form-control" type="text" id="other" name="other" style="display:none; margin-top: 5px;">
								  </div>
								  <div class="form-group">
								    <label><i class = "fa fa-calender"></i> Year :</label>
								    <select class="form-control" name="uyear" id="uyear">
								    	<option value="0">---Select Year---</option>
								    	<option value="1">1st Year</option>
								    	<option value="2">2nd Year</option>
								    	<option value="3">3rd year</option>
								    	<option value="4">4th year</option>
								    	
								    </select>
								  </div>
								  <div class="form-group">
								    <label ><i class="fa fa-phone"></i> Contact No. :</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" name="ucontact" aria-describedby="emailHelp" placeholder="Enter number">
								    
								  </div>
								  <div class="form-group">
								    <label ><i class="fa fa-envelope"></i> Email</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" name="uemail" aria-describedby="emailHelp" placeholder="Enter Email" required>
								    
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1"><i class="fa fa-lock"></i> Password</label>
								    <input type="password" class="form-control" id="exampleInputPassword1" name="upassword" placeholder="Password" required>
								  </div>
								  <div class="input-group">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
									  </div>
									  <div class="custom-file">
									    <input type="file" class="custom-file-input" name="uimage" 
									      aria-describedby="inputGroupFileAddon01">
									    <label class="custom-file-label" for="inputGroupFile01">Choose Profile Photo</label>
									  </div>
								   </div>

								  <div class="text-center">
								  <button type="submit" name="register" class="btn btn-primary form-group">Register <i class="fa fa-arrow-right"></i></button>
								  </div>
							</form>
						</div>
						<div class="col-md-2"></div>
						
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
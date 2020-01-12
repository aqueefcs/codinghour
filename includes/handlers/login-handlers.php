<?php 
	
	if(isset($_POST['submit'])){
		$uemail = $_POST['email'];
		$upass = $_POST['password'];

		$loginQuery = "SELECT * FROM userlogin WHERE uemail = '$uemail' AND upassword = '$upass' "; //select from the existing database
		$success = mysqli_query($con, $loginQuery);
		if(mysqli_num_rows($success) != 1 ){
			$errorArray['invalidLogin'] = "Login not Authorised";
		}
		else{
			$row = mysqli_fetch_array($success);//fetching the column of database table and storing it in array.
			//echo "Hi ".$row[1];//printing the second element in the array
			$_SESSION['currentUserId'] = $row[0];
			$_SESSION['userLoggedIn'] = True;
			header('Location:includes/home.php');
		}
	}

	//session variables are the array which will run and store until the programs run.
?>

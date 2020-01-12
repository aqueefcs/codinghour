<?php
	
	if(isset($_POST['register'])){
		$uname = $_POST['uname'];
		$ucollege = $_POST['ucollege'];
		$uyear = $_POST['uyear'];
		$ucontact = $_POST['ucontact'];
		$uemail = $_POST['uemail'];
		$upassword = $_POST['upassword'];
		$uother = $_POST['other'];
		
			$filename = $_FILES['uimage']['name'];
			$imgDest = "../assets/img/user-images/".$filename;
			move_uploaded_file($_FILES['uimage']['tmp_name'],$imgDest); 
		

		

		if ($ucollege == -999) {
			$q = "INSERT INTO colleges(cname) VALUES ('$uother')";
			$s = mysqli_query($con,$q);
			$q = "SELECT cid FROM colleges WHERE cname = '$uother' ";
			$s = mysqli_query($con,$q);
			$r = mysqli_fetch_array($s);
			$ucollege = $r[0];
		}




		$registerQueryLogin = 
			" INSERT INTO  userlogin (uemail,upassword) VALUES('$uemail','$upassword')";
		$registerQueryDetails = "INSERT INTO userdetails(uname,ucollege,ucontact,uyear,uimage) VALUES ('$uname','$ucollege','$ucontact','$uyear','$filename')";

		$success = mysqli_query($con , $registerQueryLogin);
		$success1 = mysqli_query($con , $registerQueryDetails);
		if($success && $success1){


			/*$q = "SELECT uid FROM userlogin WHERE uemail = '$uemail' AND upassword = '$upassword' ";
			$s = mysqli_query($con,$q);
			$r = mysqli_fetch_array($s);
			$id = $r[0];



			
			$pinfo = pathinfo($_FILES['uimage']['name']);*/
			
		}


		


	}




?>
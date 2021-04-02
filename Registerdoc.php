	<?php
	include("connection.php");
	session_start();
	if(isset($_POST['submit'])){
		echo("<script>console.log('PHP: " .$_SESSION['fname'] . "');</script>");
		$fname=$_SESSION['name'];
		$email=$_SESSION['email'];
	    	$userid=$_SESSION['userid'];
		$pass=$_SESSION['pass'];
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['userid']);
		unset($_SESSION['pass']);
		$contact=$_POST['cont'];
		$education=$_POST['edu'];
		$available=$_POST['atime'];
		$address=$_POST['addr'];
		$city=$_POST['city'];
		$spec=$_POST['speciality'];
		$oldimage=$_POST['img'];
		$image="images/".$oldimage;
		$reg= "insert into doctor values('$userid','$fname','$email','$address','$contact','$education','$available',01,'$city','$spec','$pass','$image')";	
		
		if (mysqli_query($con,$reg) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $reg . "<br>" . $con->error;
		}
		header('location:login.php');
		}
	?>

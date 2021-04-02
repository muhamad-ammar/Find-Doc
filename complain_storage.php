<?php
if(isset($_POST['submit'])){
	session_start();
	include("connection.php");
	$userid=$_POST['user'];
	$faced=$_POST['ctype'];
	$comp=$_POST['complain'];
	
		$reg= "insert into complains(userid,faced_in, complain) values('$userid','$faced','$comp')";	
			mysqli_query($con,$reg);
		echo'<script>alert("Complain Submitted Successfully");</script>';
			header('location:contact.php');
	
}
?>

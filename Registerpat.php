<?php
	if(isset($_POST['submitp'])){
	session_start();
	include("connection.php");
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$userid=$_POST['user'];
	$pass=$_POST['password'];
	$s="select * from User where Userid='$userid'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1)
	{
	
		echo"Username already taken";
	}
	else
	{
		$reg= "insert into User(Full_Name, Email, Userid, Password) values('$fname','$email','$userid','$pass')";	
			mysqli_query($con,$reg);
			header('location:login.php');
	}
}
	?>

<?php
	session_start(); 
	if(isset($_POST['submitp1'])){
	session_start();
	include("connection.php");
	$userid=$_POST['user'];
	$pass=$_POST['password'];
	$s="select * from User where Userid='$userid' && Password='$pass'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);


	if($num==1)
	{
		$_SESSION["username"] = $userid;
		header('location:home.php');
	}
	else
	{
		
		echo "login Or password incorrect";
		header('location:login.php');
}
}
	?>

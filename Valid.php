<?php
	if(isset($_POST['submit1'])){
	session_start();
	$con=mysqli_connect('localhost','root','ammar1122');
	mysqli_select_db($con,'userdata');
	$userid=$_POST['user'];
	$pass=$_POST['password'];
	$s="select * from User where Userid='$userid' && Password='$pass'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);


	if($num==1)
	{
		
		header('location:home.php');
	}
	else
	{
		echo "login Or password incorrect";
		header('location:login.php');
}
}
	?>
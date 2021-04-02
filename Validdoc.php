<?php
	if(isset($_POST['submitd1'])){
	session_start();
	include("connection.php");
	$userid=$_POST['userd'];
	$pass=$_POST['passwordd'];
	$s="select * from doctor where id='$userid' && Password='$pass'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);


	if($num==1)
	{
		$_SESSION["username"] = $userid;
		header('location:profile.php');
		
	}
	else
	{
		echo "login Or password incorrect";
		header('location:login.php');
}
}
	?>

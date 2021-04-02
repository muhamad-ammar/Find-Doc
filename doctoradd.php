<!DOCTYPE html>
<html>
<head>
	<title>Further Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('header.php');
?>

<style type="text/css" media="screen">
*{
	color: white;
}	
</style>
</head>
<body>
	


<div class="adddoctor" align="contact">
<!--1st child div -->
		<div class="complain_form" >
			<form action="Registerdoc.php" method="POST" class="dinputs" id="complint" >
				<div align="center" class="context" style="margin:0% 10% 5% 10%">
				<h3 >More Information</h3></div>
			<div style="float: left;margin-left: 10px">
				<input align="center" type="text" class="my-col-12 field" name="cont" placeholder="Contact" required>
			</div><div style="float: left; margin-left: 10px">
				<input align="center" type="text" class="my-col-12 field" name="edu" placeholder="Education" required>
				</div>
				<div style="clear: both;"></div>
				<div style="float: left;margin-left: 10px">
				<input align="center" type="text" class="my-col-12 field" name="atime" placeholder="Mention Available Days and Time" required>
				</div>
				<div style="float: left;margin-left: 10px">
					<input align="center" type="text" class="my-col-12 field" name="city" placeholder="City" required>
				</div>
				<div style="float: left">
				<input align="center" type="text" class="my-col-12 field" name="spec" placeholder="Specialization" required>
				</div>
				<div style="clear: both;"></div>
				<p style="color: white;margin: 10px 0 0 50px" align=left>Image:</p>
				<div align="left" style="margin: 10px 0 0 50px">
				<input align="center" type="file" name="img" placeholder="Image" required style="color: white; margin: 10px 0 0 5px">
				</div>
			<div style="clear: both;">
				
			</div>
				<br><br>
				<button type="submit" name="submit" class="sub-btn" style="color: white;margin:0% 10% 5% 10%" > <b>Submit</b></button>
			</form>

		</div>

	<?php
	include("connection.php");
	error_reporting(0);
	if(isset($_POST['submitd'])){
	echo("<script>console.log('PHP: " ." submitd is working " . "');</script>");
	include("connection.php");
	$naam=$_POST['fname'];
	$email=$_POST['email'];
	$userid=$_POST['user'];
	$pass=$_POST['password'];
	$_SESSION['name']=$naam;
	$_SESSION['email']=$email;
	$_SESSION['userid']=$userid;
	$_SESSION['pass']=$pass;	
	$s="select * from doctor where Userid='$userid'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
	
		echo"Username already taken";
	}
	else
	{
		echo("<script>console.log('PHP: " ." submitd else is working " . "');</script>");
	
		
	}
}
	?>
	<?php
include('footer.php');
?>
</div>	
</body>
</html>

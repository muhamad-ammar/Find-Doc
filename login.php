<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Pacifico">
          <style type="text/css" media="screen">
          .toggle
          {
          	font-family: Pacifico, georgia;
          	
          }	
          .sub-btn
          {
          	
          	font-family: Pacifico, georgia;
          	
          
          }
          .lf
          {
          	margin-bottom: 100px;
          }
          .log_form
          {
          	margin-top: 10%;
          }
          </style>



	  <?php
      include("header.php");
  ?>
	  

</head>
<body  class="log">
<!--Main div -->
	<div class=lf>
<!--1st child div -->
		<div class="log_form">
			<div class="button_box">
			<div id="btn"></div>
		     <button type="button" class="toggle" onclick="login()">Patient</button>

			<button type="button" class="toggle" onclick="reg()" style="padding: 10px 10px 10px 30px">Doctor</button>
		
			</div>
			<form action="Validpat.php" method="POST" class="inputs" id="login">
				<input align="center" type="username" class="field" name="user" placeholder="Username" required>
				<input align="center" type="password" class="field" name="password" placeholder="Password" required content-hidden>
				<br><br><br><br><br><br><br>
				<button type="submit" name="submitp1" class="sub-btn"> <b>Sign In</b></button>
			</form>
			<form action="Validdoc.php" method="POST" class="inputs" id="reg">
				<input align="center" type="username" class="field" name="userd" placeholder="Username" required>
				<input align="center" type="password" class="field" name="passwordd" placeholder="Password" required content-hidden>
				<br><br><br><br><br><br><br>
					<button type="submit" name="submitd1" class="sub-btn" ><p style="	font-family: Pacifico, georgia; ">Sign In<p></button>
			</form>
		</div>
		<?php
include('footer.php');
?>
	</div>
<?php
      include("footer.php");
  		?>

	<script>
		
	var	x=document.getElementById('login')
	var y=document.getElementById('reg')
	var z=document.getElementById('btn')		
		
	function reg(){
		x.style.left="-350px";
		y.style.left="0px";
		z.style.left="110px";
	
	}
	
	function login(){
		x.style.left="0px";
		y.style.left="400px";
		z.style.left="0";
	}
	</script>
</body>
</html>
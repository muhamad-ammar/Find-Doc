<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	  <?php
      include("header.php");
  ?>
	  

</head>
<body  class="log">
<!--Main div -->
	<div style="margin-bottom: 23px">
<!--1st child div -->
		<div class="log_form">
			<div class="button_box">
			<div id="btn"></div>
		     <button type="button" class="toggle" onclick="login()">Patient</button>

			<button type="button" class="toggle" onclick="reg()" style="padding: 10px 10px 10px 30px">Doctor</button>
		
			</div>
			<form action="Registerpat.php" method="POST" class="inputs" id="login">
				<input align="center" type="text" class="field" name="fname" placeholder="Full Name" required>
				<input align="center" type="text" class="field" name="user" placeholder="Username" required>
				<input align="center" type="text" class="field" name="email" placeholder="Email" required>	
				<input align="center" type="password" class="field" name="password" placeholder="Password" required>
				<br><br>
				<button type="submit" name="submitp" class="sub-btn"> <b>Sign up</b></button>
			</form>
			<form action="doctoradd.php" method="POST" class="inputs" id="reg">
				<input align="center" type="text" class="field" name="fname" placeholder="Full Name" required>
				<input align="center" type="text" class="field" name="user" placeholder="Username" required>
				<input align="center" type="text" class="field" name="email" placeholder="Email" required>	
				<input align="center" type="password" class="field" name="password" placeholder="Password" required>
				<br><br>
					<button type="submit" name="submitd" class="sub-btn"> <b>Sign up</b></button>
			</form>
		</div>
<?php
      include("footer.php");
  		?>
	</div>

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
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('header.php');
?>
</head>
<body>
	


<div class="contact" align="contact">
<!--1st child div -->
		<div class="complain_form" >
			<form action="complain_storage.php" method="POST" class="cinputs" id="complint" >
				<div align="center" class="context" style="margin:0% 0% 5% 30%">
				<h3 >Contact Us</h3></div>
	
				<input align="center" type="username" class="field" name="user" placeholder="Username" required  style="color: white">
				<input align="center" type="text" class="field" name="ctype" placeholder="Problem faced In" required  style="color: white">
				<textarea name="complain" align=center class="complain_field" placeholder="Complain (max 200 words)"  style="color: white; margin-left:20%; font-size:"></textarea>
				<br>
				<button type="submit" name="submit" class="sub-btn" style="color: white; margin-left:25%; font-size: 22px; padding: 10px"> Submit</button>
			</form>
		</div>

	<?php
include('footer.php');
?>
</div>
</body>
</html>
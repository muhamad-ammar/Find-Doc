<!DOCTYPE html>
<html>
<head>
	<title>Explore Doctors</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php 
	error_reporting(0);
include('header.php'); ?>
 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Pacifico">
          <style type="text/css" media="screen">
          .exp
          {
          	font-family: Pacifico, georgia;
          	font-size: 48px;
          }	
          </style>
</head>


<body >
	<div class="explore">
	<div >
	<?php 	
	echo"<form action='exploredetail.php' method='POST' accept-charset='utf-8'>
	 
			<h1 class=exp>Find Doctors in Your City</h1>
			<div class='doctor_form'>
				
				<div class='my-col-9 my-col-mobile'>
				<input type='text' name='area'  placeholder='Enter your city' id='search-field'  />
				</div>
				<div  class='my-col-5 my-col-mobile-9' style='float:left'>
				<select name='specilality'  id='search-field'>
					<option value='General medical officer'>General medical officer</option>
					 <option value='Opthamalogist'>		Opthamalogist</option>
					<option value='Cardiologist'>			Cardiologist</option>
					<option value='Gynacologist'>			Gynacologist</option>
					<option value='Dermatologist'>			Dermatologist</option>
					<option value='Nephrologist'>			Nephrologist</option>
					<option value='Neurologist'>			Neurologist</option>
					<option value='Psychiatrist'>			Psychiatrist</option>
					<option value='E&D specialist'>			ENT Specialist</option>
				</select>
				</div>
				<div class='my-col-4 my-col-mobile-9' style='float:left'>
				<button type='submit' name = 'submit'  align=center  id=btn-search><b>Search</b></button>
				</div>
			</div>
			
		</form>";
		?>
	</div >
	<?php
include('footer.php');
?>
</div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
	<title>Categries of Doctors</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <?php
include('header.php');
 ?>
 </head>
 


<body>
<div  class='cat'>
	<div >
	<!--Div1-->	
	<div class='div1'>
		<h1 align='center' style='color: white;background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3));'><b>Browse Categories Of Doctors</b></h1>
	</div>
	<!--Div2-->
	<form class=div2 style='margin-top: 20px' action='detail.php' method='POST'>
		

		<div class='divx'>
			<!--Div6-->
			<div class='floatdiv my-col-4 my-col-mobile' id='div6'  ><a href='detail.php?spec=Cardiologist' id=tx><b>Cardiologist</b></a></div>
			<!--Div7-->
			<div class='floatdiv my-col-4 my-col-mobile' id='div7'  ><a href='detail.php?spec=Dermatologist' id=tx><b>Dermatologist</b></a></div>
			<!--Div8-->
			<div class='floatdiv my-col-4 my-col-mobile' id='div8'  ><a href='detail.php?spec=General%20Medical%20Officer' id=tx><b>General Medical Officer</b></a></div>

		</div >
		<!--Div4-->
		<div class='divx' style='clear: both;'>
			<!--Div10-->
			<div class='floatdiv my-col-4 my-col-mobile' id='div10'  ><a href='detail.php?spec=Gynacologist' id=tx><b>Gynacologist</b></a></div>
			<!--Div11-->
			<div class='floatdiv my-col-4 my-col-mobile' id='div11'  ><a href='detail.php?spec=Opthamalogist' id=tx><b>Opthamalogist</b></a></div>
			<!--Div12-->
			<div class='floatdiv my-col-4 my-col-mobile' id='div12'  ><a href='detail.php?spec=Nephrologist' id=tx><b>Nephrologist</b></a></div>
			
		</div>
		<!--Div5-->
		<div class='divx' style='clear: both;'>
			<!--Div14-->
			<div class='float2div my-col-4 my-col-mobile' id='div14' ><a href='detail.php?spec=Neurologist' id=tx><b>Neurologist</b></a></div>
			<!--Div9-->
			<div class='floatdiv my-col-4 my-col-mobile' id='div9'  ><a href='detail.php?spec=Psychiatrist' id=tx><b>Psychiatrist</b></a></div>
			<!--Div15-->
		<div class='float2div my-col-4 my-col-mobile' id='div15'  ><a href='detail.php?spec=ENT%20Specialist' id=tx><b>ENT Specialist</b></a></div>
		</div>
	



	</form>
</div>
	<?php
	include('footer.php');
	?>	
	</div>
</body>
</html>

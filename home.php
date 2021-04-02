<!DOCTYPE html>
<html>
<head>
	<title>Find Doctor</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lemonada">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootsrap.min.css">
   <style type="text/css" media="screen">
   .home
   {
      font-family: Lemonada,georia;
   }

   </style>


<?php 
include('header.php');
?>
</head>
<body>
<div class="home">
<div style="margin: 10% 0 0 10px">
<div class="my-col-6 left-sec my-col-mobile-4" style="float: left; ">
	  <h2 align="center"> We Are Here For Your Care</h2>
   <h1 align="center">  We The Best Doctors</h1>
   <p align="center">We are here for your care 24/7. Any help just call us.</p>
   <button onclick="login.php" align="center" >
   	<?php
   	if(isset($_SESSION['username'])){
   		echo"<a href='category.php' style='text-decoration: none;color :white'>Make an appointment</a>";
   	}else{
   		echo"<a href='login.php' style='text-decoration: none;color :white'>Make an appointment</a>";
   	}
   	?>
   </button>
</div>
<div class="my-col-5 right-sec my-col-mobile-pic" style="float: left;" >
	
    <img src="doctors.png" id="origin" class="my-col-10 my-col-mobile-pic" align="right" style="  padding: 50px; ">
   
</div>
</div>

  <?php
  include('footer.php');
  ?>
</div>
</body>
</html>

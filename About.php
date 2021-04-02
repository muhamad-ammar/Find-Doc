<!DOCTYPE html>
<html>
<head>
	<title>Find Doctor</title>
<link rel='stylesheet' type='text/css' href='style.css'>
 <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Lemonada'>
 <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Pacifico'>
<link rel='stylesheet' type='text/css' href='node_modules/bootstrap/dist/css/bootstrap.min.css'>
   <style type='text/css' media='screen'>
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
<?php
$result=mysqli_query($con,'SELECT * FROM about_us');
while ($row=mysqli_fetch_assoc($result)){
echo"<div class='home'>
<div style='margin: 5% 0 0 10px'>
<div class='my-col-6 leeft-sec my-col-mobile-4' style='float: leeft; '>
	  <h2 align='center' style='top:5%'> Find Doctors suitable to you</h2>
   <h1 align='center' style='font-family: Pacifico,georgia'>  About Us</h1>
   <p align='center'>".$row['main']."</p>
   <p align='left' style='margin-left:5%; font-size: 20px; font-style: italic;'><b>Main Services</b></p>
<p align='left' style='margin-left: 10%; font-size: 20px;'>".$row['service1']."</p>
<p align='left' style='margin-left: 10%; font-size: 20px;'>".$row['service2']."</p>
<p align='left' style='margin-left: 10%; font-size: 20px;'>".$row['service3']."</p>";
}
?>
</div>
<div class='my-col-5 right-sec my-col-mobile-pic' style='float: right; width: 30%; height: 30%' >
	
    <img src='dlogo.png' id='origin' class='my-col-10 my-col-mobile-pic' align='right' style='  padding: 50px; '>
   
</div>

<div style='clear: both;'></div>


</div>

<?php
include('footer.php');
?>
</div>
</body>
</html>

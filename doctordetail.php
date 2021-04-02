<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Details</title>
 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lemonada">
          <style type="text/css" media="screen">
          *{
          	font-family: Lemonada,georgia;
          }	
          </style>
</head>
<body >
		<div class=cat><?php
	$cat=$_REQUEST["Id"];

	include("connection.php");
	$result=mysqli_query($con,"SELECT * from doctor WHERE Id='$cat'");
	if (mysqli_num_rows($result) > 0) {

			
	  while($row = mysqli_fetch_assoc($result)) {
	  	echo"<h1 class='my-col-12' style='text-align:centre'>View Profile of ".$row["Name"]."</h1>";
	  	echo "<div class='doctor-holder'>
	  			<div class='row'>
	  				<div class='my-col-12 '>"."<img src='".$row["img"]."'"."width='20%' height='100%''></div>".
	  				"<div class='my-col-12 '><p>Name: ".$row["Name"]."</p><p class='info_holder'>Email: ".$row["Email"]."</p><p>Education: ".$row["Education"]."</p><p>Contact: ".$row["Contact"]."</p><p>City: ".$row["city"]."</p></div>
	  				<div class='my-col-12 '>";
	  				if(isset($_SESSION['username'])){
	  					echo"<a href='appointment.php?Id=".$row["Id"]."'><button>Book Appointment</button></a></div>
	  					</div>
	  					</div>";
	  				}else{
	  				echo"<a href='login.php'><button>Book Appointment</button></a></div>
	  				</div>
	  		</div>";}
	  }
	}


	?>
<?php
include('footer.php');
?>
</div>
</body>
</html>

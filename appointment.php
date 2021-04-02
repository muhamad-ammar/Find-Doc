<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('header.php');
?>
</head>
<body>


<?php
include("connection.php");
error_reporting(0);
if(isset($_REQUEST['Id'])){
$docid=$_REQUEST['Id'];
$_SESSION['doctorid']=$docid;
}
$patid=$_SESSION['username'];
$docid=$_SESSION['doctorid'];
$result=mysqli_query($con,"SELECT Name FROM doctor where Id='$docid'");
	while ($row=mysqli_fetch_assoc($result)) {
	$docname=$row["Name"];
	}
$result=mysqli_query($con,"SELECT Full_Name FROM user where userid='$patid'");
	while ($row=mysqli_fetch_assoc($result)) {
	$patname=$row["Full_Name"];
	}

echo("<script>console.log('PHP: " . $patname . "');</script>");
if(isset($_POST['submitadd'])){
	$date=$_POST['date'];
	$day=$_POST['day'];
	$time=$_POST['time'];
	$docid=$_SESSION['doctorid'];
	echo("<script>console.log('PHP: " . $_SESSION['doctorid'] . "');</script>");
	
	$reg= "insert into appointment values('$docid','$patid','$date','$day','$time',0)";	
		
		if (mysqli_query($con,$reg) === TRUE) {
		  //echo "New record created successfully";
			header('location:profilepat.php');
		} else {
		  echo "Error: " . $reg . "<br>" . $con->error;
		}
}

?>


<div class="appoint" align="contact">
<!--1st child div -->
		<div class="a_form" >
		<?php
			echo"<form action='appointment.php?Id=".$docid."' method='POST' class='dinputs' id='complint' >";
		?>
				<div align="center" class="context" style="margin:0% 10% 0% 10%">
				<h3 >Booking</h3></div>
			


		

				<!--Add here username of doctor-->
				<!--------------------------------------------
				----------------------------------------------
				---------------------------------------------->
				<div class="my-col-12 my-col-mobile ">
				<?php
				echo"<input align='center' type='text' class='field' name='username' placeholder='Patient Name: ". $patname."' readonly>";
			?>
			</div>
				
			<div class="my-col-12 my-col-mobile">
				<?php
				echo"<input align='center' type='text' class='field' name='doctorname' placeholder='Doctor Name: ".$docname."' disabled style='color: white'>";
				?>
				</div>
				
				<div class="my-col-12 my-col-mobile">
				<input align="center" type="date" class="field" name="date" placeholder="Select date" required style="color: white">	
				</div>
				<div >
				<div  class="my-col-5" style="float: left;margin: 0px 0px 0 40px" >
				<p style="color: white" align="left">Day</p>
				<select name='day' class='my-col-10' align=center id='sfield'>
					<option value='Monday'>	Monday</option>
					<option value='Tuesday'>Tuesday	</option>
					<option value='Wednesday'>Wednesday</option>
					<option value='Thursday'>Thursday</option>
					<option value='Friday'>Friday</option>
					<option value='Friday'>Saturday</option>
					<option value='Friday'>Sunday</option>
				</select>
				</div>
				
				<div class="my-col-5" style="float: left;margin: 0px 0px 0 40px ">
				<p style="color: white" align="left">Time</p>
				<input type="time" name="time" class="my-col-10" id="sfield">
				</div>
			</div>
			<div style="clear: both;">
				
			</div>
				<br>
				<div align="center">
				<button type="submit" name="submitadd" class="sub" style="color: white;margin:0% 10% 5% 10%" > <b>Submit</b></button></div>
			</form>


		</div>
<?php
include("footer.php");
?>
</div>	
</body>
</html>

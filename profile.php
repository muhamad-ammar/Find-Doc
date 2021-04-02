<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Berkshire Swash">

   <style type="text/css" media="screen">
   *{
      font-family: Berkshire Swash,georia;
   }
</head>
<body >
	<div class=profile>
	<h1 style="text-align: center;color:white;margin-top: 10px;width: 100%;height: 100%"><em><b>Your Appointments</b></em></h1>
	<?php
	include("connection.php");
	$id=$_SESSION['username'];
	$sql = "SELECT * FROM doctor where id='$id'";
	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result) == 1) {
	  // Doctor related information
		echo "<table class='pro' align='center'>
		<tr id='pro'>
		<th id='thead'>Patient Name</th>
		<th id='thead'>Email</th>
		<th id='thead'>Contact</th>
		<th id='thead'>Time</th>
		<th id='thead'>Day</th>
		<th id='thead' style='padding:0px 10px'>Date</th>
		<th id='thead'>Status</th>
		</tr>
		<tr id='pro'>";
		$sql = "select u.Full_Name,d.Email,d.Contact,a.time,a.day,a.date,a.status from doctor d JOIN appointment a on a.Id=d.Id join user u on a.userid=u.Userid WHERE a.Id='$id'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0){
			// doctor query here
			while ($row=$result-> fetch_assoc()){
				echo "<tr id='pro'><td>".$row['Full_Name']."</td><td>".$row['Email']."</td><td>".$row['Contact']."</td><td>".$row['time']."</td><td>".$row['day']."</td><td>".$row['date']."</td><td>".$row['status']."</td></tr>";
			}
		}
		else
			echo "doctor query not working";
	 
	} else {
	  // User Related Information
		echo "	<table class='pro' align='center'>
		<tr id='pro'>
		<th id='thead'>Doctor Name</th>
		<th id='thead'>Email</th>
		<th id='thead'>Contact</th>
		<th id='thead'>Time</th>
		<th id='thead'>Day</th>
		<th id='thead' style='padding:0px 10px'>Date</th>
		<th id='thead'>Address</th>
		</tr>
		<tr id='pro'>";
		
		$sql = "SELECT d.Name,d.Email,d.Contact,a.time,a.day,a.date,d.Address FROM appointment a join doctor d on d.Id=a.Id where userid='$id'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0){
			// patient query here
			while ($row=$result-> fetch_assoc()){
				echo "<tr id='pro'><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Contact']."</td><td>".$row['time']."</td><td>".$row['day']."</td><td>".$row['date']."</td><td>".$row['Address']."</td></tr>";
			}
		}
		else
			echo "patient query not working";
	  
	}
	echo "</table>"
	?>
	

	</table>
	<?php
include('footer.php');
?>
</div>
</body>
</html>

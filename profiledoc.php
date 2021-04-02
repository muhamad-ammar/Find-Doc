<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lemonada">

   <style type="text/css" media="screen">
   *{
      font-family: Lemonada,georia;
   }
	</style>
</head>
<body >
	<div  class=contact>
	<diV>
	<h1 style="text-align: center;color:white;margin-top: 10px;width: 100%;height: 100%"><em><b>Your Appointments</b></em></h1>
	<div class="my-col-12 my-col-mobile-4">
		<?php
		echo "<table class='pro' align='center'>
		<tr id='pro'>
		<th id='thea'>Patient Name</th>
		<th id='thea'>Email</th>
		<th id='thea'>Contact</th>
		<th id='thea'>Time</th>
		<th id='thea'>Day</th>
		<th id='thea' style='padding:0px 10px'>Date</th>
		<th id='thea'>Status</th>
		</tr>";
		$sql = "select u.Full_Name,u.Email,u.Contact,a.time,a.day,a.date,a.status from appointment a JOIN  doctor d on a.Id=d.Id join user u on a.userid=u.Userid WHERE a.Id='$id'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0){
			// doctor query here
			while ($row=$result-> fetch_assoc()){
				echo "<tr id='pro'><td style='padding;0px; width:5%'>".$row['Full_Name']."</td><td>".$row['Email']."</td><td style='padding;0px; width:5%; text-align:center'>".$row['Contact']."</td><td>".$row['time']."</td><td>".$row['day']."</td><td>".$row['date']."</td><td>".$row['status']."</td></tr>";
			}
		}
		else
			echo "doctor query not working";
		
		echo "</table>";
		?>
</diV>
	</div>
	<?php
	include('footer.php');
	?>
</div>

</body>
</html>

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
	<div class=explore>
		<div>
	<h1 style="text-align: center;color:white;margin-top: 10px;width: 100%;height: 100%"><em><b>Your Appointments</b></em></h1>
	<div class="my-col-12 my-col-mobile">
		<?php
		include("connection.php");
		$id=$_SESSION['username'];
		echo "<table class='pro' align='center'>
		<tr id='pro'>
		<th id='thead'>Doctor Name</th>
		<th id='thead'>Email</th>
		<th id='thead'>Contact</th>
		<th id='thead'>Time</th>
		<th id='thead'>Day</th>
		<th id='thead' style='padding:0px 10px'>Date</th>

		</tr>";
		
		$sql = "SELECT d.Name,d.Email,d.Contact,a.time,a.day,a.date FROM appointment a join doctor d on d.Id=a.Id where userid='$id'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0){
			// patient query here
			while ($row=$result-> fetch_assoc()){
				echo "<tr id='pro'><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Contact']."</td><td>".$row['time']."</td><td>".$row['day']."</td><td>".$row['date']."</td></tr>";
			}
		}
		else
			echo "patient query not working";
		
	echo "</table>";
	?>
</div>
	</div>
	<?php
include('footer.php');
?>
</div>
</body>
</html>

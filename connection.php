<?php
$con=mysqli_connect('localhost','root','ammar1122','userdata');
	if ($con -> connect_errno) {
     echo "Failed to connect to MySQL: " . $con -> connect_error;
     exit();
    }
?>
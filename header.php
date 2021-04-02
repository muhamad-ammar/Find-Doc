<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Kaushan Script">
    <style type="text/css" media="screen">
 nav{
    font-family: Kaushan Script,georgia;
    margin: 0px;
 }   
</style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>NavBar</title>
  </head>
<body >
<?php session_start(); ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="background: linear-gradient(to right, #0099DD,#21BD8D)">
    <div class="container" style="background: linear-gradient(to right, #0099DD,#21BD8D); ">
    <img src="dlogo.png" alt="Find Doctor" style="height: 50px; padding: 0 ">
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="home.php" style="color: white"><i class="fa fa-home fa-lg"></i> Home</a>
                </li>
                <?php
                include('connection.php');
                
                     echo"<li class='nav-item'>
                    <a class='nav-link' href='category.php' style='color: white; '><i class='fa fa-list fa-lg' style='margin-right:4px'></i>Categories</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='Explore.php' style='color: white'><i class='fa fa-user-md fa-lg'style='margin-right:4px'></i>Doctors</a>
                </li>";

                ?>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="color: white"><i class="fa fa-question-circle fa-lg" style='margin-right:4px'></i>Get Help</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="About.php" style="color: white"><i class="fa fa-info-circle fa-lg" style='margin-right:4px'></i>About us</a>
                </li>
                <?php 
                if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                    {
                        //User is logged in
                  echo "<li class='nav-item'>
                        <a class='nav-link' href='logout.php' style='color: white'><i class='fa fa-sign-out fa-lg'style='margin-right:4px'></i>Logout</a>
                    </li>";
                     include("connection.php");
                       $id=$_SESSION['username'];
                       $sql = "SELECT * FROM doctor where id='$id'";
                       $result = mysqli_query($con, $sql);
                       
                       if (mysqli_num_rows($result) == 1) {
                         // Doctor related information
                          echo "<li class='nav-item'>
                        <a class='nav-link' href='profiledoc.php' style='color: white'><i class='fa fa-user-circle'style='margin-right:4px'></i>Profile</a>
                    </li>"; 
                          
                        
     
                          } else {
                            // User Related Information
                            echo "<li class='nav-item'>
                        <a class='nav-link' href='profilepat.php' style='color: white'><i class='fa fa-user-circle'style='margin-right:4px'></i>Profile</a>
                    </li>";
        
                           }

                    }
                    else
                    {
                        //User is not logged in
                  echo "  <li class='nav-item'>
                        <a class='nav-link' href='login.php' style='color: white'><i class='fa fa-sign-in fa-lg'style='margin-right:4px'></i>Login</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='register.php' style='color: white'><i class='fa fa-chevron-right 'style='margin-right:2px'></i>Register</a>
                    </li>";                        
                    }
                ?>

            </ul>
        </div>
    </div>
</nav>
</body>
</html>

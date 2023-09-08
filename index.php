<?php
//to use names and other variables in welcome page
session_start();
//to include data base
include("db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- my css file-->
    <link rel="stylesheet" href="s3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Welcome Page</title>
  </head>
    <body>
    <nav class="navbar">
      <a class="navbar-brand" class="logo"><img src="logo.png" alt="Logo here" style="width: 60px; margin-left: 30px"></a>
      <form class="form-inline">
        <a href="service.php" class="nitems">Services</a>          
        <a href="Contact.php" class="nitems">Contact us</a>
        <button type="submit" class="bt"><a href="signup.php">Signup</a></button>
    </form>
</nav>
    
      <div class="content">
      <h2 class="h">Now managing the shop has become even easier <br><br>Keep track of your inventory with the system. <br><br>Join us and grow your business.</h2>
      </div>
      

    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>



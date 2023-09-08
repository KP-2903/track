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
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
  </head>
  <body>


    <div class="container">
        <!--login form-->
        <form  class="form" method="post">
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="loginemail" aria-describedby="emailHelp">
           
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="loginpsd">
        </div>
        <a href="forget.php">Forgot password</a><br><br>
        <a href="signup.php">New user ?</a><br>
        
        <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

    </div>
    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST["login"]) &&isset( $_POST["loginemail"]) &&isset( $_POST["loginpsd"])){
    $email=$_POST["loginemail"];
    $psd=$_POST["loginpsd"];
    if($email=="" || $psd=="" ){
        echo "plz fill all the areas";
    }else{
        //check if user exsist
        $sql= "SELECT * FROM user WHERE email = '".$email."' AND password = '".$psd."'";
        $result= mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION["user"]= $email;
            header("Location: welcome.php");
        }else{
            echo "user not found";
        }
    }
}
?>
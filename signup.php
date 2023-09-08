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
    <title>Signup page</title>
  </head>
  <body>

    
    <div class="container">
        <!--signup form-->
        <img src="bgimg.png" alt="" size="100%">
        <form  class="form" method="post">
        <div class="form-group">
            <h3>Sign up here to create an account for free </h3>
           
            <input type="email" class="form-control" name="signupemail" aria-describedby="emailHelp" placeholder="Email here">
            <small id="emailHelp" class="form-text text-muted">Your email will not be shared with any other user</small>
        </div>
        <div class="form-group">
            
            <input type="password" class="form-control" name="signuppsd" placeholder="Set Password">
        </div>
        <div class="form-group">
            
            <input type="password" class="form-control" name="signuppsd2" placeholder="Verify Password ">
        </div>
        <a href="login.php">Already a member ?</a><br>
        
        
        <button type="submit" id="sbutt" class="hvr-bounce-to-bottom" name="signup">Signup</button>
</form>

    </div>
    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST["signup"]) &&isset( $_POST["signupemail"]) &&isset( $_POST["signuppsd"]) &&isset( $_POST["signuppsd2"]) ){
    $email=$_POST["signupemail"];
    $psd=$_POST["signuppsd"];
    $psd2=$_POST["signuppsd2"];
    if($email=="" || $psd=="" || $psd2==""){
        echo "plz fill all the areas";
    }else{
        //check if user exsist
        $sql= "SELECT * FROM user WHERE email = '".$email."' AND password = '".$psd."'";
        $result= mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION["user"]= $email;
            echo "user already exists";
        }else{
            if($psd!=$psd2){
                echo "password not matching";
               }else{
                   //inserting the user 
                   $sql= "INSERT INTO user (email , password) VALUES ('".$email."' , '".$psd."')";
                   // check if recorded sucessfull
                   if(mysqli_query($conn,$sql)){
                       $_SESSION["user"]=$email; // assign email to session variable
                       header("location: welcome.php");
                   }else{
                       echo "error " . $sql . "<br>" . mysqli_error($conn);
                   }
               }
        }
    }
}
?>

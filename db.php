<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mtrack";
// create conn
$conn=(mysqli_connect($servername , $username , $password ,$dbname));
if(!$conn){
    die ("connectiion failed " . mysqli_connect_error());
}
?>
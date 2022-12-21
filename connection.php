<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "smartchoice";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Was Failed".$conn->connect_error);                                     
}
else{
   //echo "Establised";
}
?>

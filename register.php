<?php
include('connection.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $reg = "INSERT INTO test(`sr`,`name`) VALUES (NULL,'$name')";
    if($conn->query($reg)==TRUE){
        echo "Inserted Successfully";
    }
    else{
        echo "Not Submited".$reg.$conn->error;
    }
    $conn->close();
}
?>

<?php

session_start();

include('../connection.php');
if(isset($_POST['insert-data'])){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $payment = $_POST['payment'];

    $query = "INSERT INTO employee (name,mobile,city,payment) VALUES ('$name','$mobile','$city','$payment')";
    
    $query_run = mysqli_query($conn,$query);
    
    if($query_run){
        $_SESSION['status'] = 'inserted succesfull' ;
        header("location: register_employee.php");
    }
    else{
        $_SESSION['status'] = 'data not inserted ' ;
        header("location: register_employee.php");
    }

}

?>
<?php
include('../connection.php');
if(isset($_POST['submit'])){
    $vendor = $_POST['vendor'];
    $cust_id =$_POST['cust_id'];
    $cust_name = $_POST['cust_name'];
    $del_date = $_POST['del_date'];
    $reg = "INSERT INTO cust_reg (`sr`,`vendor`,`cust_id`,`cust_name`,`del_date`) VALUES (NULL ,'$vendor','$cust_id','$cust_name',
    '$del_date',)";
    if($conn->query($reg)==TRUE){
        echo "Saved Successfully";
    }
    else{
        echo "failed to save";
    }

    $conn->close();
}
?>

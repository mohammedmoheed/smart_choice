<?php
include('../connection.php');
if(isset($_POST['submit'])){
    $height = $_POST['height'];
    $reg = "INSERT INTO meas_shirt (`sr`,`height`) VALUES (NULL ,'$height')";
    if($conn->query($reg)==TRUE){
        echo "Saved Successfully";
    }
    else{
        echo "failed to save";
    }

    $conn->close();
}
?>

<?php
include('../connection.php');
if(isset($_POST['submit'])){
    $cust_name = $_POST['cust_name'];
    $del_date = $_POST['del_date'];
    $vendor = $_POST['vendor'];
    $height = $_POST['height'];
    $shoulder = $_POST['shoulder'];
    $chest = $_POST['chest'];
    $sleev = $_POST['sleev'];
    $neck = $_POST['neck'];
    $bh = $_POST['bh'];
    $fix= $_POST['fix'];
    $stomach = $_POST['stomach'];
    $seat = $_POST['seat'];
    $cuff = $_POST['cuff'];
    $collar = $_POST['collar'];
    $rem = $_POST['rem'];

$sql = "INSERT INTO shirt_reg (`sr`,`cust_name`,`del_date`,`vendor`,`height`,`shoulder`,`chest`,`sleev`,`neck`,`bh`
,`fix`,`stomach`,`seat`,`cuff`,`collar`,`rem`)
 VALUES (null,'$cust_name','$del_date','$vendor','$height','$shoulder','$chest','$sleev'
,'$neck','$bh','$fix','$stomach','$seat','$cuff','$collar','$rem')";

if($conn->query($sql) == TRUE){
     echo '<script>
                alert("Saved Successfully")
                window.location ="register.php";
            </script>';
}
else{
    echo"failed to save";
    
}

$conn->close();
}

?>

<?php
include('../connection.php');
if(isset($_POST['submit'])){

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder   = "dress_img/".$filename;
    move_uploaded_file($tempname,$folder);

    
    $type = $_POST['type'];
    $type1= implode(",",$type);
    $quantity = $_POST['quantity'];
    $cust_name = $_POST['cust_name'];
    $del_date = $_POST['del_date'];
    $vendor = $_POST['vendor'];
    $emp_name=$_POST['emp_name'];
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


$sql = "INSERT INTO orders (`sr`,`type`,`quantity`,`cust_name`,`del_date`,`vendor`,`emp_name`,`height`,`shoulder`,`chest`,`sleev`,`neck`,`bh`
,`fix`,`stomach`,`seat`,`cuff`,`collar`,`rem`,`image`)
 VALUES (null,'$type1','$quantity','$cust_name','$del_date','$vendor','$emp_name','$height','$shoulder','$chest','$sleev'
,'$neck','$bh','$fix','$stomach','$seat','$cuff','$collar','$rem','$folder')";

echo $conn->query($sql);

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

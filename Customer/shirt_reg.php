<?php
include('../connection.php');
if(isset($_POST['submit'])){

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder   = "dress_img/".$filename;
    move_uploaded_file($tempname,$folder);

    $filename1 = $_FILES["uploadfile1"]["name"];
    $tempname1 = $_FILES["uploadfile1"]["tmp_name"];
    $folder1   = "paint_img/".$filename1;
    move_uploaded_file($tempname1,$folder1);


    
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
    $paint_emp_name = $_POST['paint_emp_name'];
    $paint_type = $_POST['paint_type'];
    $paint_type1 = implode(",",$paint_type);
    $pquantity =$_POST['pquantity'];
    $pheight = $_POST['pheight'];
    $pseat = $_POST['pseat'];
    $waist = $_POST['waist'];
    $thighs = $_POST['thighs'];
    $bottom = $_POST['bottom'];
    $fh = $_POST['fh'];
    $sh = $_POST['sh'];
    $pbh = $_POST['pbh'];
    $kn = $_POST['kn'];
    $plates = $_POST['plates'];
    $pocket = $_POST['pocket'];
    $prem = $_POST['prem'];



$sql = "INSERT INTO orders (`sr`,`type`,`quantity`,`cust_name`,`del_date`,`vendor`,`emp_name`,`height`,`shoulder`,`chest`,`sleev`,`neck`,`bh`
,`fix`,`stomach`,`seat`,`cuff`,`collar`,`rem`,`image`,`paint_emp_name`,`paint_type`,`pquantity`,`pheight`
,`pseat`,`waist`,`thighs`,`bottom`,`fh`,`sh`,`pbh`,`kn`,`plates`,`pocket`,`prem`,`paint_image`)
 VALUES (null,'$type1','$quantity','$cust_name','$del_date','$vendor','$emp_name','$height','$shoulder','$chest','$sleev'
,'$neck','$bh','$fix','$stomach','$seat','$cuff','$collar','$rem','$folder','$paint_emp_name','$paint_type1','$pquantity','$pheight
','$pseat','$waist','$thighs','$bottom','$fh','$sh','$pbh','$kn','$plates','$pocket','$prem','$folder1')";

//echo $conn->query($sql);

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

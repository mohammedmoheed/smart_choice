<?php
include ("../connection.php");
$id=$_GET['id'];
$sqledit = "SELECT * FROM `orders` where sr='$id'";
$resultedit= mysqli_query($conn, $sqledit);

$numedit = mysqli_num_rows($resultedit);
$rowedit = mysqli_fetch_assoc($resultedit);
//for shirt
$rtype = $rowedit["type"];
$rtype1 = explode(",",$rtype);
//print_r($rtype1);
//for paint
$rtype2 =$rowedit["paint_type"];
$rtype3 = explode(",",$rtype2);

//for shirt update


//$type = $_POST['type'];
//$type1= implode(",",$type);


?>
<?php
if(isset($_POST['submit'])){
  //for shirt
$rtype = $rowedit["type"];
$rtype1 = explode(",",$rtype);
//print_r($rtype1);
//for paint
$rtype2 =$rowedit["paint_type"];
$rtype3 = explode(",",$rtype2);
  $type = $_POST['type'];
  $type1 = implode(",",$type);
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

  //type='$type1', have to set

$sql = " UPDATE orders set quantity='$quantity' , cust_name='$cust_name', del_date='$del_date',
vendor='$vendor',emp_name='$emp_name',height='$height',shoulder='$shoulder',chest='$chest'
,sleev='$sleev',neck='$neck',bh='$bh',fix='$fix',stomach='$stomach',seat='$seat',cuff='$cuff',collar='$collar',rem='$rem'
,paint_emp_name='$paint_emp_name',pquantity='$pquantity',pheight='$pheight',pseat='$pseat',waist='$waist'
,thighs='$thighs',bottom='$bottom',fh='$fh',sh='$sh',pbh='$pbh',kn='$kn',plates='$plates',pocket='$pocket'
,prem='$prem' where sr='$id'";

if ($conn->query($sql) === TRUE) {
    ?>
    <script>
        alert('Record Updated Succeefully');
        window.location ="delivered.php";
        </script>
        <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <style type="text/css">
      label{
      width:140px;
      display:inline-block;
      }
      #measurment{
        width: 70px;
      }
      .mycss{
        height:30px;
        width:250px;
      }
  
    </style>
  <title>Update details</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <hr>
      <form id="form1" action="#" method="post" enctype="multipart/form-data">
                      
                      <label>Customer Name:</label>
                      <?php
                    $sql3 = "SELECT id, cust_name FROM customer";
                    $result3 = mysqli_query($conn, $sql3);
                    if ($result3) {
                            
                            echo '<select name="cust_name" class="mycss" important>';
                            echo '<option>'.$rowedit['cust_name'].'</option>';
                            echo '<option>select</option>';
                            while ($row = mysqli_fetch_assoc($result3)) {
                                echo '<option value="' . $row['cust_name'] . '">' . $row['cust_name'] . ' '  . '</option>';
                            }
                            echo '</select>';
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        ?><br>
                    <label>Date of Delivary</label>
                    <input type="date" name="del_date" id="del_date" value="<?php echo $rowedit['del_date'];?>" class="mycss"><br>
                    <label>Choose Vendor</label>
                    <?php
                    $sql = "SELECT id, ven_name FROM vendors";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                            
                            echo '<select name="vendor" class="mycss">';
                            echo '<option>'.$rowedit['vendor'].'</option>';
                            echo '<option>select</option>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['ven_name'] . '">' . $row['ven_name'] . ' '  . '</option>';
                            }
                            echo '</select>';
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        ?>
                        <br>
                        <label>Choose Employee</label>
                        <?php
                    $sql2 = "SELECT id, emp_name FROM employee";
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2) {
                            
                            echo '<select name="emp_name" id="emp_name" class="mycss">';
                            echo '<option>'.$rowedit['emp_name'].'</option>';
                            echo '<option>select</option>';
                            while ($row = mysqli_fetch_assoc($result2)) {
                                echo '<option value="' . $row['emp_name'] . '">' . $row['emp_name'] . ' '  . '</option>';
                            }
                            echo '</select>';
                        } else {
                            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                        }

                        ?>

    </div>
      <div class="col-sm-6">
     
                
                    
                    <hr>

                        <h6>Enter The Measurment of Shirt</h6>
                        <br>
                        <label id="measurment">type</label>
                        <lable>Shirt</label>
                        <input type="checkbox" name="type[]" id="shirt" Value="shirt"
                         <?php 
                         if(in_array("shirt",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>kurta</label>
                        <input type="checkbox" name="type[]" id="kurta" Value="kurta"
                        <?php 
                         if(in_array("kurta",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>sherwani</label>
                        <input type="checkbox" name="type[]" id="sherwani" Value="sherwani"
                        <?php 
                         if(in_array("sherwani",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>safari</label>
                        <input type="checkbox" name="type[]" id="safari" Value="safari"
                        <?php 
                         if(in_array("safari",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>Jodhpuri</label>
                        <input type="checkbox" name="type[]" id="Jodhpuri" Value="Jodhpuri"
                        <?php 
                         if(in_array("jodhpuri",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>coat</label>
                        <input type="checkbox" name="type[]" id="coat" Value="coat"
                        <?php 
                         if(in_array("coat",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>west-coat</label>
                        <input type="checkbox" name="type[]" id="west-coat" Value="west-coat"
                        <?php 
                         if(in_array("west-coat",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>Sadri</label>
                        <input type="checkbox" name="type[]" id="Sadri" Value="Sadri"
                        <?php 
                         if(in_array("Sadri",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <br>
                        <label>Quantity</label>
                        <input type="text" Value="<?php echo $rowedit['quantity'];?>" name="quantity" id="quantity">
                        <br>
                        <label>Upload file</label>
                        <input type="file" name="uploadfile">
                        <a href="<?php echo $rowedit['image'];?>" download><img class="photo" src="<?php echo $rowedit['image'];?>"></a>
                        <br>
                        <label id="measurment">Height</label>
                        <input type="text" value="<?php echo $rowedit['height'];?>" id="height" name="height">
                        <label id="measurment">Shoulder</label>
                        <input type="text" value="<?php echo $rowedit['shoulder'];?>" id="shoulder" name="shoulder">
                        <label id="measurment">Chest</label>
                        <input type="text" value="<?php echo $rowedit['chest'];?>" id="chest" name="chest">
                        <label id="measurment">Sleev</label>
                        <input type="text" value="<?php echo $rowedit['sleev'];?>" id="sleev" name="sleev">
                        <br>
                        <label id="measurment">Neck</label>
                        <input type="text" value="<?php echo $rowedit['neck'];?>" id="neck" name="neck">
                        <label id="measurment">Back.H</label>
                        <input type="text" value="<?php echo $rowedit['bh'];?>" id="bh" name="bh">
                        <label id="measurment">Fix-chest</label>
                        <input type="text" value="<?php echo $rowedit['fix'];?>" id="fix" name="fix">
                        <label id="measurment">Stomach</label>
                        <input type="text" value="<?php echo $rowedit['stomach'];?>" id="stomach" name="stomach">
                        <br>
                        <label id="measurment">Seat</label>
                        <input type="text"value="<?php echo $rowedit['seat'];?>" id="seat" name="seat">
                        <label id="measurment">Cuff</label>
                        <input type="text" value="<?php echo $rowedit['cuff'];?>" id="cuff" name="cuff">
                        <label id="measurment">Collar</label>
                        <input type="text" value="<?php echo $rowedit['collar'];?>" id="collar" name="collar">
                        <br>
                        <label id="measurment">Remark</label>
                        <input type="text" value="<?php echo $rowedit['rem'];?>" id="rem" name="rem" class="mycss">

    </div><!--col1-->
    <div class="col-sm-6">
      <hr>
    <h6>Enter The measurment of paint</h6>
                                <label>Choose Employee</label>
                                <?php
                            $sql4 = "SELECT id, emp_name FROM employee";
                            $result4 = mysqli_query($conn, $sql4);
                            if ($result4) {
                                    
                                    echo '<select name="paint_emp_name" id="paint_emp_name" class="mycss">';
                                    echo '<option>'.$rowedit['paint_emp_name'].'</option>';
                                    echo '<option>select</option>';
                                    while ($row = mysqli_fetch_assoc($result4)) {
                                        echo '<option value="' . $row['emp_name'] . '">' . $row['emp_name'] . ' '  . '</option>';
                                    }
                                    echo '</select>';
                                } else {
                                    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                                }

                                mysqli_close($conn);
                                ?>
                                <br>
                                <label id="paint_measurment">type</label>
                                <lable>Paint</label>
                                <input type="checkbox" name="paint_type[]" id="paint" Value="paint"
                                <?php 
                         if(in_array("paint",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Pajama</label>
                                <input type="checkbox" name="paint_type[]" id="pajama" Value="pajama"
                                <?php 
                         if(in_array("pajama",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Salwar</label>
                                <input type="checkbox" name="paint_type[]" id="salwar" Value="salwar"
                                <?php 
                         if(in_array("salwar",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Trouser</label>
                                <input type="checkbox" name="paint_type[]" id="trouser" Value="trouser"
                                <?php 
                         if(in_array("trouser",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Lungi</label>
                                <input type="checkbox" name="paint_type[]" id="lungi" Value="lungi"
                                <?php 
                         if(in_array("lungi",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Dhoti</label>
                                <input type="checkbox" name="paint_type[]" id="dhoti" Value="dhoti"
                                <?php 
                         if(in_array("dhoti",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <br>
                                <label>Quantity</label>
                                <input type="text" value="<?php echo $rowedit['pquantity'];?>" name="pquantity" id="pquantity">
                                <br>
                                <label>Upload file</label>
                                <input type="file" name="uploadfile1">
                                <a href="<?php echo $rowedit['paint_image'];?>" download><img class="photo" src="<?php echo $rowedit['paint_image'];?>"></a>
                                <br>
                                <label id="measurment">Height</label>
                                <input type="text" value="<?php echo $rowedit['height'];?>" id="pheight" name="pheight">
                                <label id="measurment">Seat</label>
                                <input type="text" value="<?php echo $rowedit['pseat'];?>" id="pseat" name="pseat">
                                <label id="measurment">Waist</label>
                                <input type="text" value="<?php echo $rowedit['waist'];?>" id="waist" name="waist">
                                <label id="measurment">Thighs</label>
                                <input type="text"value="<?php echo $rowedit['thighs'];?>" id="thighs" name="thighs">
                                <br>
                                <label id="measurment">Bottom</label>
                                <input type="text" value="<?php echo $rowedit['bottom'];?>" id="bottom" name="bottom">
                                <label id="measurment">Fix.H</label>
                                <input type="text" value="<?php echo $rowedit['fh'];?>" id="fh" name="fh">
                                <label id="measurment">Side.H</label>
                                <input type="text" id="sh" value="<?php echo $rowedit['sh'];?>" name="sh">
                                <label id="measurment">Back.H</label>
                                <input type="text" value="<?php echo $rowedit['pbh'];?>" id="pbh" name="pbh">
                                <br>
                                <label id="measurment">Knee.H</label>
                                <input type="text" value="<?php echo $rowedit['kn'];?>" id="kn" name="kn">
                                <label id="measurment">Plates</label>
                                <input type="text" value="<?php echo $rowedit['plates'];?>" id="plates" name="plates">
                                <label id="measurment">Pocket</label>
                                <input type="text" value="<?php echo $rowedit['pocket'];?>" id="pocket" name="pocket">
                                <br>
                                <label id="measurment">Remark</label>
                                <input type="text" value="<?php echo $rowedit['prem'];?>" id="prem" name="prem" class="mycss">
    </div><!--col2-->
    </div><!--row--><br><br>
    <div class="row">
      <div class="col-sm-12">
      <center>
                                  <button type="reset" class="btn btn-danger">Reset</button>
                                  <input type="submit" class="btn btn-success" value="Submit" name="submit" id="submit">
                                </center>

                              </div>
                              </div>
                                  
    </div><!--fluid-->
                                <hr>
                               
                                
                                


 
                                
    




</body>
</html>
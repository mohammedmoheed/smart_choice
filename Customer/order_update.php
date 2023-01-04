<?php
include ("../connection.php");
$id=$_GET['id'];
$sqledit = "SELECT * FROM `orders` where sr='$id'";
$resultedit= mysqli_query($conn, $sqledit);

$numedit = mysqli_num_rows($resultedit);
$rowedit = mysqli_fetch_assoc($resultedit);
?>
<?php
if(isset($_POST['update'])){
$cust_name=$_POST['cust_name'];
$height=$_POST['height'];
$source=$_POST['source'];
$ref=$_POST['ref'];
$mobile=$_POST['mobile'];

$sql = "UPDATE order  set consumer='$consumer' , amount='$amount', source='$source',
ref='$ref',mobile='$mobile' where sr='$id'";

if ($conn->query($sql) === TRUE) {
    ?>
    <script>
        alert('Record Updated Succeefully');
        </script>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/project/display.php" />
        <?php
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
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
      <form id="form1" action="shirt_reg.php" method="post" enctype="multipart/form-data">
                      
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
                        <input type="checkbox" name="type[]" id="shirt" Value="shirt">
                        <label>kurta</label>
                        <input type="checkbox" name="type[]" id="kurta" Value="kurta">
                        <lable>sherwani</label>
                        <input type="checkbox" name="type[]" id="sherwani" Value="sherwani">
                        <lable>safari</label>
                        <input type="checkbox" name="type[]" id="safari" Value="safari">
                        <lable>Jodhpuri</label>
                        <input type="checkbox" name="type[]" id="Jodhpuri" Value="Jodhpuri">
                        <lable>coat</label>
                        <input type="checkbox" name="type[]" id="coat" Value="coat">
                        <lable>west-coat</label>
                        <input type="checkbox" name="type[]" id="west-coat" Value="west-coat">
                        <lable>Sadri</label>
                        <input type="checkbox" name="type[]" id="Sadri" Value="Sadri">
                        <br>
                        <label>Quantity</label>
                        <input type="text" Value="<?php echo $rowedit['quantity'];?>" name="quantity" id="quantity">
                        <br>
                        <label>Upload file</label>
                        <input type="file" name="uploadfile">
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
                                <input type="checkbox" name="paint_type[]" id="paint" Value="paint">
                                <lable>Pajama</label>
                                <input type="checkbox" name="paint_type[]" id="pajama" Value="pajama">
                                <lable>Salwar</label>
                                <input type="checkbox" name="paint_type[]" id="salwar" Value="salwar">
                                <lable>Trouser</label>
                                <input type="checkbox" name="paint_type[]" id="trouser" Value="trouser">
                                <lable>Lungi</label>
                                <input type="checkbox" name="paint_type[]" id="lungi" Value="lungi">
                                <lable>Dhoti</label>
                                <input type="checkbox" name="paint_type[]" id="dhoti" Value="dhoti">
                                <br>
                                <label>Quantity</label>
                                <input type="text" value="<?php echo $rowedit['pquantity'];?>" name="pquantity" id="pquantity">
                                <br>
                                <label>Upload file</label>
                                <input type="file" name="uploadfile1">
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
                                  <input type="submit" class="btn btn-success" value="save" name="submit" id="submit">
                                  <input type="btn" class="btn btn-success" value="Print" name="print" id="print">
                                </center>

                              </div>
                              </div>
                                  
    </div><!--fluid-->
                                <hr>
                               
                                
                                


 
                                
    




</body>
</html>
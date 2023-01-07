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
      hr.dashed {
      border-top: 1px dashed red;
      }
    
    </style>
  <title>Update details</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
      <form id="form1" action="#" method="post" enctype="multipart/form-data">
        <hr class="dashed">
                    <label>Date of Delivary</label>
                    <input type="date" name="del_date" id="del_date" value="<?php echo $rowedit['del_date'];?>" class="mycss" disabled>
                        <br>
                        <label>Employee Name</label>
                        <input type="text" value="<?php echo $rowedit['emp_name']; ?>" class="mycss" disabled>

    </div>
    <div class="col-sm-6">
        <hr class="dashed">
    <label>Date of Delivary</label>
    <input type="date" name="del_date" id="del_date" value="<?php echo $rowedit['del_date'];?>" class="mycss" disabled><br>
    <label>Employee Name</label>
    <input type="text" value="<?php echo $rowedit['paint_emp_name']; ?>" class="mycss" disabled>
    <br>
    </div>
      <div class="col-sm-6">
     
                
                    
                    <hr>

                        <h6>Enter The Measurment of Shirt</h6>
                        <br>
                        <label>Quantity</label>
                        <input type="text" Value="<?php echo $rowedit['quantity'];?>" name="quantity" id="quantity" disabled>
                        <br>
                        <label id="measurment">type</label>
                        <lable>Shirt</label>
                        <input type="checkbox" name="type[]" id="shirt" Value="shirt" disabled
                         <?php 
                         if(in_array("shirt",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>kurta</label>
                        <input type="checkbox" name="type[]" id="kurta" Value="kurta"  disabled
                        <?php 
                         if(in_array("kurta",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>sherwani</label>
                        <input type="checkbox" name="type[]" id="sherwani" Value="sherwani" disabled
                        <?php 
                         if(in_array("sherwani",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>safari</label>
                        <input type="checkbox" name="type[]" id="safari" Value="safari" disabled
                        <?php 
                         if(in_array("safari",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>Jodhpuri</label>
                        <input type="checkbox" name="type[]" id="Jodhpuri" Value="Jodhpuri" disabled
                        <?php 
                         if(in_array("jodhpuri",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>coat</label>
                        <input type="checkbox" name="type[]" id="coat" Value="coat" disabled
                        <?php 
                         if(in_array("coat",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>west-coat</label>
                        <input type="checkbox" name="type[]" id="west-coat" Value="west-coat" disabled
                        <?php 
                         if(in_array("west-coat",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <lable>Sadri</label>
                        <input type="checkbox" name="type[]" id="Sadri" Value="Sadri" disabled
                        <?php 
                         if(in_array("Sadri",$rtype1)){
                          echo "checked";
                         }
                         ?>>
                        <br>
                        <label id="measurment">Height</label>
                        <input type="text" value="<?php echo $rowedit['height'];?>" id="height" name="height" disabled>
                        <label id="measurment">Shoulder</label>
                        <input type="text" value="<?php echo $rowedit['shoulder'];?>" id="shoulder" name="shoulder" disabled>
                        <label id="measurment">Chest</label>
                        <input type="text" value="<?php echo $rowedit['chest'];?>" id="chest" name="chest" disabled>
                        <label id="measurment">Sleev</label>
                        <input type="text" value="<?php echo $rowedit['sleev'];?>" id="sleev" name="sleev" disabled>
                        <br>
                        <label id="measurment">Neck</label>
                        <input type="text" value="<?php echo $rowedit['neck'];?>" id="neck" name="neck" disabled>
                        <label id="measurment">Back.H</label>
                        <input type="text" value="<?php echo $rowedit['bh'];?>" id="bh" name="bh" disabled>
                        <label id="measurment">Fix-chest</label>
                        <input type="text" value="<?php echo $rowedit['fix'];?>" id="fix" name="fix" disabled>
                        <label id="measurment">Stomach</label>
                        <input type="text" value="<?php echo $rowedit['stomach'];?>" id="stomach" name="stomach" disabled>
                        <br>
                        <label id="measurment">Seat</label>
                        <input type="text"value="<?php echo $rowedit['seat'];?>" id="seat" name="seat" disabled>
                        <label id="measurment">Cuff</label>
                        <input type="text" value="<?php echo $rowedit['cuff'];?>" id="cuff" name="cuff" disabled>
                        <label id="measurment">Collar</label>
                        <input type="text" value="<?php echo $rowedit['collar'];?>" id="collar" name="collar" disabled>
                        <br>
                        <label id="measurment">Remark</label>
                        <input type="text" value="<?php echo $rowedit['rem'];?>" id="rem" name="rem" class="mycss" disabled>

    </div><!--col1-->
    <div class="col-sm-6">
      <hr>
    <h6>Enter The measurment of paint</h6>
    <br>
    <label>Quantity</label>
                                <input type="text" value="<?php echo $rowedit['pquantity'];?>" name="pquantity" id="pquantity" disabled>
                                <br>
                                <label id="paint_measurment">type</label>
                                <lable>Paint</label>
                                <input type="checkbox" name="paint_type[]" id="paint" Value="paint" disabled
                                <?php 
                         if(in_array("paint",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Pajama</label>
                                <input type="checkbox" name="paint_type[]" id="pajama" Value="pajama" disabled
                                <?php 
                         if(in_array("pajama",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Salwar</label>
                                <input type="checkbox" name="paint_type[]" id="salwar" Value="salwar" disabled
                                <?php 
                         if(in_array("salwar",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Trouser</label>
                                <input type="checkbox" name="paint_type[]" id="trouser" Value="trouser" disabled
                                <?php 
                         if(in_array("trouser",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Lungi</label>
                                <input type="checkbox" name="paint_type[]" id="lungi" Value="lungi" disabled
                                <?php 
                         if(in_array("lungi",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <lable>Dhoti</label>
                                <input type="checkbox" name="paint_type[]" id="dhoti" Value="dhoti"  disabled
                                <?php 
                         if(in_array("dhoti",$rtype3)){
                          echo "checked";
                         }
                         ?>>
                                <br>
                                <label id="measurment">Height</label>
                                <input type="text" value="<?php echo $rowedit['height'];?>" id="pheight" name="pheight" disabled>
                                <label id="measurment">Seat</label>
                                <input type="text" value="<?php echo $rowedit['pseat'];?>" id="pseat" name="pseat" disabled>
                                <label id="measurment">Waist</label>
                                <input type="text" value="<?php echo $rowedit['waist'];?>" id="waist" name="waist" disabled>
                                <label id="measurment">Thighs</label>
                                <input type="text"value="<?php echo $rowedit['thighs'];?>" id="thighs" name="thighs" disabled>
                                <br>
                                <label id="measurment">Bottom</label>
                                <input type="text" value="<?php echo $rowedit['bottom'];?>" id="bottom" name="bottom" disabled>
                                <label id="measurment">Fix.H</label>
                                <input type="text" value="<?php echo $rowedit['fh'];?>" id="fh" name="fh" disabled>
                                <label id="measurment">Side.H</label>
                                <input type="text" id="sh" value="<?php echo $rowedit['sh'];?>" name="sh" disabled>
                                <label id="measurment">Back.H</label>
                                <input type="text" value="<?php echo $rowedit['pbh'];?>" id="pbh" name="pbh" disabled>
                                <br>
                                <label id="measurment">Knee.H</label>
                                <input type="text" value="<?php echo $rowedit['kn'];?>" id="kn" name="kn" disabled>
                                <label id="measurment">Plates</label>
                                <input type="text" value="<?php echo $rowedit['plates'];?>" id="plates" name="plates" disabled>
                                <label id="measurment">Pocket</label>
                                <input type="text" value="<?php echo $rowedit['pocket'];?>" id="pocket" name="pocket" disabled>
                                <br>
                                <label id="measurment">Remark</label>
                                <input type="text" value="<?php echo $rowedit['prem'];?>" id="prem" name="prem" class="mycss" disabled>
    </div><!--col2-->
    </div><!--row--><br><br>
    <hr class="dashed">
    <div class="row">
      <div class="col-sm-12">
      <center>
                                  <input type="submit" class="btn btn-success" value="Print Measurments" name="submit" id="submit"  onclick="window.print()">
        
                                </center>

                              </div>
                              </div>
                                  
    </div><!--fluid-->
                            
                               
                                
                                


 
                                
    




</body>
</html>
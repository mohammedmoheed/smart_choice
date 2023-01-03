<?php
include('../connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/datatable.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Order</title>
    <style type="text/css">
      label{
      width:140px;
      display:inline-block;
      }
      #measurment{
        width: 80px;
      }
      .mycss{
        height:30px;
        width:250px;
      }
  
    </style>
</head>
<body>
    <div class="container-fluid top">
        <div class="row">
          <div class="col-sm-9">
            <h5>Order</h5>
          </div>
          <div class="col-sm-3 social" id="social">
            <ul>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid order_panel responsive">
        <div class="container order_panel_child">
            <h6>Select the Dress Type</h6>
            <select id="formSel">
                <option value="-">Select a form</option>
                <option value="1">Shirt</option>
                <option value="2">Form 2</option>
                <option value="3">Form 3</option>
              </select>
              
              <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Enter The Measurment</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <form id="form1" action="shirt_reg.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-12">
                              <label>Customer Name:</label>
                              <?php
                            $sql3 = "SELECT id, cust_name FROM customer";
                            $result3 = mysqli_query($conn, $sql3);
                            if ($result3) {
                                    
                                    echo '<select name="cust_name" class="mycss" important>';
                                    echo '<option>select</option>';
                                    while ($row = mysqli_fetch_assoc($result3)) {
                                        echo '<option value="' . $row['cust_name'] . '">' . $row['cust_name'] . ' '  . '</option>';
                                    }
                                    echo '</select>';
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                                ?>
                        <div class="row">
                          <div class="col">
                            <label>Date of Delivary</label>
                            <input type="date" name="del_date" id="del_date" class="mycss"><br>
                            <label>Choose Vendor</label>
                            <?php
                            $sql = "SELECT id, ven_name FROM vendors";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                    
                                    echo '<select name="vendor" class="mycss">';
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
                                    echo '<option>select</option>';
                                    while ($row = mysqli_fetch_assoc($result2)) {
                                        echo '<option value="' . $row['emp_name'] . '">' . $row['emp_name'] . ' '  . '</option>';
                                    }
                                    echo '</select>';
                                } else {
                                    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                                }

                                ?>

                        
                            
                            <hr>
                            <div class="row">
                              <div class="col">
                                <h6>Enter The Measurment of Shirt</h6>
                                <label id="measurment">type</label>
                                <lable>Shirt</label>
                                <input type="checkbox" name="type[]" id="shirt" Value="shirt">
                                <lable>kurta</label>
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
                                <label id="measurment">Quantity</label>
                                <input type="text" id="quantity" name="quantity">
                                <br>
                                <label>Upload file</label>
                                <input type="file" name="uploadfile">
                                <br>
                                <label id="measurment">Height</label>
                                <input type="text" id="height" name="height">
                                <label id="measurment">Shoulder</label>
                                <input type="text" id="shoulder" name="shoulder">
                                <label id="measurment">Chest</label>
                                <input type="text" id="chest" name="chest">
                                <label id="measurment">Sleev</label>
                                <input type="text" id="sleev" name="sleev">
                                <br>
                                <label id="measurment">Neck</label>
                                <input type="text" id="neck" name="neck">
                                <label id="measurment">Back.H</label>
                                <input type="text" id="bh" name="bh">
                                <label id="measurment">Fix-chest</label>
                                <input type="text" id="fix" name="fix">
                                <label id="measurment">Stomach</label>
                                <input type="text" id="stomach" name="stomach">
                                <br>
                                <label id="measurment">Seat</label>
                                <input type="text" id="seat" name="seat">
                                <label id="measurment">Cuff</label>
                                <input type="text" id="cuff" name="cuff">
                                <label id="measurment">Collar</label>
                                <input type="text" id="collar" name="collar">
                                <br>
                                <label id="measurment">Remark</label>
                                <input type="text" id="rem" name="rem" class="mycss">
                                <hr>
                                <h6>Enter The measurment of paint</h6>
                                <label>Choose Employee</label>
                                <?php
                            $sql4 = "SELECT id, emp_name FROM employee";
                            $result4 = mysqli_query($conn, $sql4);
                            if ($result4) {
                                    
                                    echo '<select name="paint_emp_name" id="paint_emp_name" class="mycss">';
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
                                <input type="text" name="quantity" id="quantity">
                                <br>
                                <label>Upload file</label>
                                <input type="file" name="uploadfile1">
                                <br>
                                <label id="measurment">Height</label>
                                <input type="text" id="pheight" name="pheight">
                                <label id="measurment">Seat</label>
                                <input type="text" id="seat" name="seat">
                                <label id="measurment">Waist</label>
                                <input type="text" id="waist" name="waist">
                                <label id="measurment">Thighs</label>
                                <input type="text" id="thighs" name="thighs">
                                <br>
                                <label id="measurment">Bottom</label>
                                <input type="text" id="bottom" name="bottom">
                                <label id="measurment">Fix.H</label>
                                <input type="text" id="fh" name="fh">
                                <label id="measurment">Side.H</label>
                                <input type="text" id="sh" name="sh">
                                <label id="measurment">Back.H</label>
                                <input type="text" id="pbh" name="pbh">
                                <br>
                                <label id="measurment">Knee.H</label>
                                <input type="text" id="kn" name="kn">
                                <label id="measurment">Plates</label>
                                <input type="text" id="plates" name="plates">
                                <label id="measurment">Pocket</label>
                                <input type="text" id="pocket" name="pocket">
                                <br>
                                <label id="measurment">Remark</label>
                                <input type="text" id="prem" name="prem" class="mycss">
                                
                                


 
                                <center>
                                  <button type="reset" class="btn btn-danger">Reset</button>
                                  <input type="submit" class="btn btn-success" value="save" name="submit" id="submit">
                                </center>
    
                            </div>
                          </div>
                        </div>
                            </div>
                          </div>

                      </form>
                      <form id="form2"><input type="text" value="form 2" /></form>
                      <form id="form3"><input type="text" value="form 3" /></form>
                    </div>
                  </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
              </div><!-- .modal -->
              
        </div><hr>
 </div><!-- chiled div--><br>
 <div class="container display_section">
  <?php
  include('order_display.php');
  ?>
  </div>
  
                              </div><!-- parent div-->

    <script src="https://kit.fontawesome.com/97ee402521.js" crossorigin="anonymous"></script>
    <script src="../js/jQuery.js"></script>
    <script src="../js/datatable.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    
</body>
</html>
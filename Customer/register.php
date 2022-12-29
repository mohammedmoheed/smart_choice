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
      width:160px;
      display:inline-block;
      }
      #measurment{
        width: 100px;
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
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Enter The Measurment</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <form id="form1" action="shirt_reg.php" method="post">
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
                            <input type="text" name="del_date" id="del_date" class="mycss">
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
                                <label>Choose Employee</label>
                                <?php
                            $sql2 = "SELECT id, emp_name FROM employee";
                            $result2 = mysqli_query($conn, $sql2);
                            if ($result2) {
                                    
                                    echo '<select name="employee" id="employee" class="mycss">';
                                    echo '<option>select</option>';
                                    while ($row = mysqli_fetch_assoc($result2)) {
                                        echo '<option value="' . $row['emp_name'] . '">' . $row['emp_name'] . ' '  . '</option>';
                                    }
                                    echo '</select>';
                                } else {
                                    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                                }

                                mysqli_close($conn);
                                ?>

                        
                            
                            <hr>
                            <div class="row">
                              <div class="col">
                                <h6>Enter The Measurment of Shirt</h6>
                                <label id="measurment">Height</label>
                                <input type="text" id="height" name="height" required>
                                <label id="measurment">Shoulder</label>
                                <input type="text" id="shoulder" name="shoulder" required>
                                <label id="measurment">Chest</label>
                                <input type="text" id="chest" name="chest" required>
                                <label id="measurment">Sleev</label>
                                <input type="text" id="sleev" name="sleev" required>
                                <br>
                                <label id="measurment">Neck</label>
                                <input type="text" id="neck" name="neck" required>
                                <label id="measurment">Back Height</label>
                                <input type="text" id="bh" name="bh" required>
                                <label id="measurment">Fix-chest</label>
                                <input type="text" id="fix" name="fix" required>
                                <label id="measurment">Stomach</label>
                                <input type="text" id="stomach" name="stomach" required>
                                <br>
                                <label id="measurment">Seat</label>
                                <input type="text" id="seat" name="seat" required>
                                <label id="measurment">Cuff</label>
                                <input type="text" id="cuff" name="cuff" required>
                                <label id="measurment">Collar</label>
                                <input type="text" id="collar" name="collar" required>
                                <br>
                                <label id="measurment">Remark</label>
                                <input type="text" id="rem" name="rem" class="mycss">
                                <hr>
 
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
        </div>
 </div><!-- chiled div--><br>
                              <div class="container display_section">
                                <?php
                                include('../connection.php');
                              $display = mysqli_query($conn, "SELECT * FROM shirt_reg");
echo "<h5>order Recieved</h5>";
echo "<table id='myTable' class='table table-striped table-bordered' style='width:100%'>";
echo "<thead>";
    echo "<th>id</th>";                        
    echo "<th>Customer Name</th>";
    echo "<th>date of Delivary</th>";
    echo "</thead>";
while ($row = mysqli_fetch_assoc($display)) {
  echo "<tr>";
    echo "<td>" . $row['sr'] . "</td>";
    echo "<td>" . $row['cust_name'] . "</td>";
    echo "<td>" . $row['del_date'] . "</td>";
   
}

echo "</table>";
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
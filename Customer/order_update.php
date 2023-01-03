<?php
include ("../connection.php");
$id=$_GET['id'];
$sqledit = "SELECT * FROM `orders` where sr='$id'";
$resultedit= mysqli_query($conn, $sqledit);

// Find the number of records returned
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
        width: 80px;
      }
      .mycss{
        height:30px;
        width:250px;
      }
  
    </style>
  <title>Update details</title>
</head>
<body>
<div class="container">
<form action="order_update.php" method="post">
          <br>
        <h5 style="text-align:center;">Update the Measurment</h5>
        <br>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-12">
                              <label>Customer Name:</label>
                              <?php
                            $sql3 = "SELECT id, cust_name FROM customer";
                            $result3 = mysqli_query($conn, $sql3);
                            if ($result3) {
                                    
                                    echo '<select name="cust_name" class="mycss">';
                                    echo '<option>'.$rowedit['cust_name'].'</option>';
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
                            <input type="date" name="del_date" id="del_date" class="mycss" Value="<?php echo $row['del_date'];?>"><br>
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

                                mysqli_close($conn);
                                ?>


                        
                            
                            <hr>
                            <div class="row">
                              <div class="col">
                                <h6>Enter The Measurment of Shirt</h6>
                                <label id="measurment">Height</label>
                                <input type="text" id="height"  name="height"  Value="<?php echo $rowedit['height'];?>">
                                <label id="measurment">Shoulder</label>
                                <input type="text" id="shoulder" name="shoulder" required>
                                <label id="measurment">Chest</label>
                                <input type="text" id="chest" name="chest" required>
                                <label id="measurment">Sleev</label>
                                <input type="text" id="sleev" name="sleev" required>
                                <br>
                                <label id="measurment">Neck</label>
                                <input type="text" id="neck" name="neck" required>
                                <label id="measurment">Back.H</label>
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
                                <div class="centainer footer">
                                <center>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="reset" class="btn btn-danger">Reset</button>
                                  <input type="submit" class="btn btn-success" value="update" name="submit" id="submit">
                                </center>
                                <hr>
                              </div>
    
                            </div>
                          </div>
                        </div>
                            </div>
                          </div>
                    
                      </form>
</div>



</body>
</html>
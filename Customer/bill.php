<?php
include('../connection.php');
$id=$_GET['id'];
$sqlview = "SELECT * FROM `orders` where sr='$id'";
$resultview= mysqli_query($conn, $sqlview);

$numview = mysqli_num_rows($resultview);
$rowview = mysqli_fetch_assoc($resultview);

$rtype = $rowview["type"];
$rtype1 = explode(",",$rtype);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bill.css">
    <title>Print Bill</title>
    <style>
         label{
      width:112px;
      display:inline-block;
      }
    </style>
</head>
<body>
    <div class="container-fluid sec"><!--fluid-->
        <div class="container bill"><!--bill-->
        <div class="row  row1">
            <div class="col-md-12 logo">
                <h2>Logo</h2>
            </div><!--logo-->
        </div><!--row1-->
        <div class="row">
            <div class="col-md-12 brand">
                <h3>Smart Choice Mens Wear</h3>
                <h6>Customise Your Choice</h6>
            </div><!--brand end-->
    </div><!--row2-->
    <div class="row">
        <div class="col-md-12 address-line">
            <H6>Mausam Pull,Camp Road,Malegaon Dist Nashik-423203</H6>
        </div><!--address-->
    </div><!--row3-->
    <div class="row">
        <div class="col-md-6 info-section">
            <label>Bill No:</label>
            <input type="text" value="<?php echo $rowview['sr']?>" disabled>
        </div><!--info-section-->
        <div class="col-md-6 info-section1">
            <h7>Mobile Number:</h7>
            <input type="text" value="" disabled>
        </div><!--info section1-->
    </div><!--end row4-->
    <div class="row">
        <div class="col-md-12 name-sec">
            <label>Name</label>
            <input type="text" id="name" value="<?php echo $rowview['cust_name']?>" disabled>
        </div><!---->
    </div><!--row5-->
    <div class="row">
        <div class="col-md-4 date">
            <label>Order Date</label>
            <input type="text" value="<?php echo $rowview['time']?>" disabled>
        </div>
        <div class="col-md-4 date">
            <label>Delivary Date</label>
            <input type="date" value="<?php echo $rowview['del_date']?>" disabled>
        </div>
        <div class="col-md-4 date">
            <label>Delivared Date</label>
            <input type="date" value="" disabled>
        </div>
    </div><!--row6-->
    <div class="row">
        <div class="col-md-12 table-section">
            <center>
           <table>
            <tr>
                <thead>
                <th>Discription</th>
                <th>Qty</th>
                <th>Rate1</th>
                <th>Rate2</th>
                <th>Rate3</th>
                <th>Rate4</th>
                <th>Total</th>
                </thead>
            </tr>
            <tr>
                <td><input type="text" value=" <?php 
                         if(in_array("shirt",$rtype1)){
                          echo "shirt";
                         }
                         ?>" id="q1"></td>
                <td><input type="text"  id="q2"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="q4"></td>
            </tr>
            <tr>
                <td><input type="text" value="<?php 
                         if(in_array("kurta",$rtype1)){
                          echo "kurta";
                         }
                         ?>" id="q1"></td>
                <td><input type="text" value="" id="q2"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="q4"></td>
            </tr>
            <tr>
                <td><input type="text" value="" id="q1"></td>
                <td><input type="text" value="" id="q2"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>
                <td><input type="text" value="" id="rates"></td>  
                <td><input type="text" value="" id="q4"></td>
            </tr>
           </table>
           </center>
        </div>
    </div><!--row7-->
    <hr>
    <div class="row">
        <div class="col-md-12 amount-sec">
            <label>Total</label>
            <input type="text" value="" disabled><br>
            <label>Advanced</label>
            <input type="text" value="" disabled><br>
            <label>Ballence</label>
            <input type="text" value="" disabled><br>


        </div>
    </div><!--row8-->
        </div><!--end-bill-->
    </div><!--end-fluid-->
</body>
</html>

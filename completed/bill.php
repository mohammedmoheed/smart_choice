<?php
include('../connection.php');
$id=$_GET['id'];
$sqlview = "SELECT * FROM `orders` where sr='$id'";
$resultview= mysqli_query($conn, $sqlview);

$numview = mysqli_num_rows($resultview);
$rowview = mysqli_fetch_assoc($resultview);

$rtype = $rowview["type"];
$rtype1 = explode(",",$rtype);
$paint_type = $rowview['paint_type'];
$paint_type1 = explode(",",$paint_type);

$sQT = $rowview["quantity"];
$sQT1 = explode(",",$sQT);

$pQT = $rowview["pquantity"];
$pQT1 = explode(",",$pQT);

$rate = [];
for($i=0; $i<sizeof($rtype1)+sizeof($paint_type1); $i++){
    $rate[$i]= 0;
}
//echo implode(',',$rate);
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
            <H6>Mob: 123456789</H6>
        </div><!--address-->
    </div><!--row3-->
    <div class="row">
        <div class="col-md-6 info-section">
            <label>Bill No:</label>
            <input type="text" value="<?php echo $rowview['sr']?>" disabled>
        </div><!--info-section-->
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
            <input type="date" value="">
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
                <th>Rate</th>
                <th>Total</th>
                </thead>
            </tr>
            <?php
            for ($i=0; $i<sizeof($rtype1); $i++){ ?> 
                <tr>
                <td><input type="text" value=" <?php echo "$rtype1[$i]"
                         ?>" id="id"></td>
                <td><input type="text"  value="<?php echo "$sQT1[$i]"?>" class="qt"></td>
                <td><input type="text" value="<?php echo "$rate[$i]"?>" class="rate" onchange="add()"></td>
                <td><input type="text"  value="0" class="tot"></td>
            </tr> <?php
            } 
            ?>
            <?php
            for ($i=0; $i<sizeof($paint_type1); $i++){ ?> 
                <tr>
                <td><input type="text" value=" <?php echo "$paint_type1[$i]"
                         ?>" id="id"></td>
                <td><input type="text"  value="<?php echo "$pQT1[$i]"?>" class="qt"></td>
                <td><input type="text" value="<?php echo "$rate[$i]"?>" class="rate" onchange="add()"></td>
                <td><input type="text"  value="0" class="tot"></td>
            </tr> <?php
            } 
            ?>
            
           </table>
           </center>
        </div>
    </div><!--row7-->
    <hr>
    <div class="row">
        <div class="col-md-12 amount-sec">
           
            <label>Advanced</label>
            <input type="text" id="advance" value ="0" onchange="add()"><br>
            <label>Ballence</label>
            <input type="text" id="balance" value ="0" onchange="add()"><br>
            <label>Total</label>
            <input type="text" id="gtotal" value ="0" onchange="add()"><br>
          
            
            <button onclick="add()">Add</button>


        </div>
    </div><!--row8-->
        </div><!--end-bill-->
    </div><!--end-fluid-->

    <script>
        
  var qt = document.getElementsByClassName('qt');
  var rate = document.getElementsByClassName('rate');
  var tot = document.getElementsByClassName('tot');
  var gtotal = document.getElementById("gtotal");
  var advance = document.getElementById("advance");
  var balance = document.getElementById("balance");
function add()
{
    gt=0;
  for(i=0;i<rate.length;i++){
    tot[i].value=(rate[i].value)*(qt[i].value); 

    gt= gt+ (rate[i].value)*(qt[i].value);
  }
  gtotal.value = gt;
  balance.value = gt - advance.value; 
}
 add();
</script>
</body>
</html>

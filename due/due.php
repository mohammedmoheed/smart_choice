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
      .display_section{
        margin: 0px
      }
      
  
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 navbar">
                <a href="index.php" class="logo navbar-brand text-white offset-md-1"><b>Smart Choice Men's Wear</b></a>
                <ul class="nav offset-md-2">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item "><a href="../customer/register.php" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="../customer/customer.php" class="nav-link">Customer</a></li>
                    <li class="nav-item"><a href="../employee/employee.php" class="nav-link">Employee</a></li>
                    <li class="nav-item"><a href="../backup.php" class="nav-link">Backup</a></li>
                </ul>
            </div>
        </div>
    </div>
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
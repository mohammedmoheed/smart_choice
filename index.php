<?php  
include('./connection.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Smart Choice Dashboard</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 navbar">
                <a href="index.php" class="logo navbar-brand text-white offset-md-1"><b>Smart Choice Men's Wear</b></a>
                <ul class="nav offset-md-2">
                    <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="customer/register.php" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="customer/customer.php" class="nav-link">Customer</a></li>
                    <li class="nav-item"><a href="employee/employee.php" class="nav-link">Employee</a></li>
                    <li class="nav-item"><a href="backup.php" class="nav-link">Backup</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-info text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-cart-arrow-down fa-4x"></i>
                </div>
                <div class="col">
                <?php 
                  $d_order = "SELECT * FROM orders WHERE status= 2";
                  $d_order_run = mysqli_query($conn, $d_order);
                  if($d_order_count = mysqli_num_rows($d_order_run)){
                    echo '<h3 class="display-3">'.$d_order_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  <h5>Orders Delivered</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="./delivered/delivered.php" class="text-primary"
                  >Delivered orders&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-danger text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-cart-arrow-down fa-4x"></i>
                </div>
                <div class="col">
                <?php
                  $date = date("Y-m-d");
                  $customer = "SELECT * FROM `orders` WHERE `status` IN (0,1) AND `del_date`<'$date'";
                  $customer_run = mysqli_query($conn, $customer);
                  if($customer_count = mysqli_num_rows($customer_run)){
                    echo '<h3 class="display-3">'.$customer_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  <h5>Due Orders</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="./due/due.php" class="text-primary"
                  >Check Due Orders&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-primary text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-cart-arrow-down fa-4x"></i>
                </div>
                <div class="col">
                <?php 
                  $p_order = "SELECT * FROM orders WHERE status= 0";
                  $p_order_run = mysqli_query($conn, $p_order);
                  if($p_order_count = mysqli_num_rows($p_order_run)){
                    echo '<h3 class="display-3">'.$p_order_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  <h5>Pending Orders</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="./pending/pending.php" class="text-primary"
                  >Pending Orders&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-success text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-check-to-slot fa-4x"></i>
                </div>
                <div class="col">
                <?php 
                  $c_order = "SELECT * FROM orders WHERE status= 1";
                  $c_order_run = mysqli_query($conn, $c_order);
                  if($c_order_count = mysqli_num_rows($c_order_run)){
                    echo '<h3 class="display-3">'.$c_order_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  <h5>Completed Orders</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="./completed/completed.php" class="text-primary"
                  >Completed Orders&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        <!--row ending-->
      </div>
    </div>

    <!--Row 2-->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-primary text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-user-tie fa-4x"></i>
                </div>
                <div class="col">
                  <?php 
                  $vendor = "SELECT * FROM vendors";
                  $vendor_run = mysqli_query($conn, $vendor);
                  if($vendor_count = mysqli_num_rows($vendor_run)){
                    echo '<h3 class="display-3">'.$vendor_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  <h5>Vendors</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="./vendor/vendor.php" class="text-primary"
                  >Onboard Vendors&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-primary text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-users-gear fa-4x"></i>
                </div>
                <div class="col">
                <?php 
                  $employee = "SELECT * FROM employee";
                  $employee_run = mysqli_query($conn, $employee);
                  if($employee_count = mysqli_num_rows($employee_run)){
                    echo '<h3 class="display-3">'.$employee_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  
                  <h5>Employees</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="./employee/employee.php" class="text-primary"
                  >Employee Details&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        <!--row ending-->
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-primary text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-cart-shopping fa-4x"></i>
                </div>
                <div class="col">
                <?php 
                  $order = "SELECT * FROM orders";
                  $order_run = mysqli_query($conn, $order);
                  if($order_count = mysqli_num_rows($order_run)){
                    echo '<h3 class="display-3">'.$order_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  <h5>Orders</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="Customer/register.php" class="text-primary"
                  >Register Order&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header bg-primary text-white">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa-solid fa-users fa-4x"></i>
                </div>
                <div class="col">
                  <?php 
                  $customer = "SELECT * FROM customer";
                  $customer_run = mysqli_query($conn, $customer);
                  if($customer_count = mysqli_num_rows($customer_run)){
                    echo '<h3 class="display-3">'.$customer_count.'</h3>';
                  }else{
                    echo '<h3 class="display-3">0</h3>';
                  }
                  ?>
                  
                  <h5>Customer</h5>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5>
                <a href="Customer/customer.php" class="text-primary"
                  >Register Customer&nbsp;<i
                    class="fa-solid fa-circle-arrow-right"
                  ></i
                ></a>
              </h5>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script
      src="https://kit.fontawesome.com/97ee402521.js"
      crossorigin="anonymous"
    ></script>
    <script src="./js/counter.js"></script>
    <script src="./js/jQuery.js"></script>
    
  </body>
</html>

<!--<form action="register.php" method="POST">
    <input type="text" name="name" id="name">
    <input type="submit" name="submit" id="submit">
</form>
<h1>Welcome</h1>-->

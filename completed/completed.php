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
    <div class="container-fluid top">
        <div class="row">
          <div class="col-sm-9">
            <h5>Completed Order</h5>
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
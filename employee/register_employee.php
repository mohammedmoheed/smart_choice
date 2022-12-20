<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>employee</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                if(isset($_SESSION['status'])){
                    echo "<h4>".$_SESSION['status']."<h4>";
                    unset($_SESSION['status']);
                } 
                ?>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Enter the employee data</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter employee name" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mobile No.</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">city</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter city name" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">paymetn</label>
                            <input type="text" name="payment" class="form-control" placeholder="Enter payment detail" >
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="insert-data" class="btn btn-primary" >SAVE</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.2.js" ></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
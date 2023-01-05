<?php
include('../connection.php');
$id=$_GET['id'];
$sqledit = "SELECT * FROM `orders` where sr='$id'";
$resultedit= mysqli_query($conn, $sqledit);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Photo Print</title>
</head>
<body>
<img class="photo" src="<?php echo $rowedit['image'];?>">
</body>
</html>
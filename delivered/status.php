<?php
include('../connection.php');

$id = $_GET['sr'];
$status = $_GET['status'];

$updatequery = "UPDATE orders SET status = $status WHERE sr = $id";

mysqli_query($conn, $updatequery);

header('location:delivered.php');
?>
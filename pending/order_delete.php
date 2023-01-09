<?php
include("../connection.php");
$id=$_GET['id'];
$sql =" DELETE FROM orders Where sr='$id' ";
$result = mysqli_query($conn,$sql);
if($result)
{

   ?>
   <script>
       alert('Record Deleted Successfully');
       window.location ="pending.php";
   </script>
   <?php


}

?>

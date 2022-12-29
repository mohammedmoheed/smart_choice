
<?php
include('../connection.php');
$display = mysqli_query($conn, "SELECT * FROM orders");
echo "<h5>order Recieved</h5>";
echo "<table id='myTable' class='table table-striped table-bordered' style='width:100%'>";
echo "<thead>";
echo "<th>id</th>";           
echo "<th>Type</th>";             
echo "<th>Customer Name</th>";
echo "<th>vendor name</th>";
echo "<th>Employee Name</th>";
echo "<th>Date of order</th>";
echo "<th>date of Delivary</th>";
echo "<th>Action</th>";

echo "</thead>";
    while ($row = mysqli_fetch_assoc($display)) {
echo "<tr>";
echo "<td>" . $row['sr'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['cust_name'] . "</td>";
echo "<td>" . $row['vendor'] . "</td>";
echo "<td>" . $row['emp_name'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['del_date'] . "</td>";
echo "<td><input type='button' value='Edit'><input type='button' value='Delete'></td>";


}

echo "</table>";
?>

</div>
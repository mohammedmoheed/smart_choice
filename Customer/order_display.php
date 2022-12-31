
<?php
include('../connection.php');
$display = mysqli_query($conn, "SELECT * FROM orders");
echo "<h5>order Recieved</h5>";
echo "<table id='myTable' class='table table-striped table-bordered' style='width:100%'>";
echo "<thead>";
echo "<th width='4%'>id</th>";           
echo "<th width='3%'>Type</th>";             
echo "<th width='20%'>Customer Name</th>";
echo "<th width='15%'>vendor name</th>";
echo "<th width='10%'>Employee Name</th>";
echo "<th width='15%'>Date of order</th>";
echo "<th width='10%'>date of Delivary</th>";
echo "<th width='16%'>Action</th>";

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
echo "<td><a href='#' class='btn btn-success btn-sm' data-toggle='modal' data-target='.edit-modal-lg'>
<i class='fa-solid fa-pen-to-square'></i> Edit</a>&nbsp;
<button type='button' class='btn btn-danger'
data-toggle='modal' data-target='.delete-modal-lg'><i class='fa-solid fa-trash'></i></button>
</td>
";
}

echo "</table>";
?>

</div>

<?php
include('../connection.php');
$display = mysqli_query($conn, "SELECT * FROM orders");
?>
<form action="" method="GET">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>From Date</label>
                <input type="date" name="from_date" value="<?php if(isset($_GET["from_date"])){ echo $_GET["from_date"]; } ?>" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>To Date</label>
                <input type="date" name="to_date" value="<?php if(isset($_GET["to_date"])){ echo $_GET["to_date"]; } ?>" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Click to Filter</label> <br>
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </div>
</form>
<?php
echo "<h5>order Recieved</h5>";
echo "<table id='myTable' class='table table-striped table-bordered' style='width:100%'>";

echo "<thead>";
echo "<th>Status</th>";
echo "<th width='4%'>id</th>";           
echo "<th width='3%'>Type</th>";             
echo "<th width='20%'>Customer Name</th>";
echo "<th width='15%'>vendor name</th>";
echo "<th width='10%'>Employee Name</th>";
echo "<th width='15%'>Date of order</th>";
echo "<th width='10%'>date of Delivary</th>";
echo "<th width='16%'>Action</th>";

echo "</thead>";
?>
<tbody>
<?php 
        if(isset($_GET['from_date']) && isset($_GET['to_date']))
        {
            $from_date = $_GET['from_date'];
            $to_date = $_GET['to_date'];

            $query = "SELECT * FROM orders WHERE del_date BETWEEN '$from_date' AND '$to_date' ";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {
                    ?>
                    <tr>
                        <td>
                            <?php
                            if($row['status']==1) {
                                echo '<p> <a href="status.php?sr='.$row['sr'].'&status=0" class="btn btn-success"> Complete </a> </p> ';
                            }
                            else{
                                echo '<p> <a href="status.php?sr='.$row['sr'].'&status=1" class="btn btn-danger"> Incomplete </a> </p> ';
                            }
                            ?>
                        </td>
                        <td><?= $row['sr']; ?></td>
                        <td><?= $row['type']; ?></td>
                        <td><?= $row['cust_name']; ?></td>
                        <td><?= $row['vendor']; ?></td>
                        <td><?= $row['emp_name']; ?></td>
                        <td><?= $row['time']; ?></td>
                        <td><?= $row['del_date']; ?></td>
                <?php   echo "<td><a href='#' class='btn btn-success btn-sm' data-toggle='modal' data-target='.edit-modal-lg'>
                        <i class='fa-solid fa-pen-to-square'></i> Edit</a>&nbsp;
                        <button type='button' class='btn btn-danger'
                        data-toggle='modal' data-target='.delete-modal-lg'><i class='fa-solid fa-trash'></i></button>
                        </td>
                        ";
                    ?>
                    </tr>
                    <?php
                }
            }
            else
            {
               echo "no data";
            }
        }
        else{
            while ($row = mysqli_fetch_assoc($display)) {
                echo "<tr>";
                ?>
                
                <td>
                    <?php
                    if($row['status']==1) {
                        echo '<p> <a href="status.php?sr='.$row['sr'].'&status=0" class="btn btn-success"> Complete </a> </p> ';
                    }
                    else{
                        echo '<p> <a href="status.php?sr='.$row['sr'].'&status=1" class="btn btn-danger"> Incomplete </a> </p> ';
                    }
                    ?>
                </td>
                <?php
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
        }
    ?>
    </tbody>

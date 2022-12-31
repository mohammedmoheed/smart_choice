<?php
include ("../connection.php");
$id=$_GET['id'];
$sql4 = "SELECT * FROM `orders` where sr='$id'";
$result4 = mysqli_query($conn, $sql4);

// Find the number of records returned
$num = mysqli_num_rows($result4);
$row = mysqli_fetch_assoc($result4);
?>
<?php
if(isset($_POST['update'])){
    $cust_name = $_POST['cust_name'];
    $del_date = $_POST['del_date'];
    $vendor = $_POST['vendor'];
    $emp_name=$_POST['emp_name'];
    $height = $_POST['height'];
    $shoulder = $_POST['shoulder'];
    $chest = $_POST['chest'];
    $sleev = $_POST['sleev'];
    $neck = $_POST['neck'];
    $bh = $_POST['bh'];
    $fix= $_POST['fix'];
    $stomach = $_POST['stomach'];
    $seat = $_POST['seat'];
    $cuff = $_POST['cuff'];
    $collar = $_POST['collar'];
    $rem = $_POST['rem'];

$sql = "UPDATE orders  set cust_name='$cust_name',del_date='$del_date',vendor='$vendor',emp_name='$emp_name',
height='$height',shoulder='$shoulder',chest='$chest',sleev='$sleev',neck='$neck',
bh='$bh',fix='$fix',stomach='$stomach',seat='$seat',cuff='$cuff',
collar='$collar',rem='$rem', where sr='$id'";

if ($conn->query($sql4) === TRUE) {
    ?>
    <script>
        alert('Record Updated Succeefully');
        </script>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/smart_choice/customer/register.php" />
        <?php
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}
$conn->close();
}
?>

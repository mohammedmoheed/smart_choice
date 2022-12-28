<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$cust_name = $_POST['cust_name'];
		$mobile = $_POST['mobile'];
		$city = $_POST['city'];
		$payment = $_POST['payment'];
		$sql = "INSERT INTO customer (cust_name, mobile, city, payment) VALUES ('$cust_name', '$mobile', '$city', '$payment')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: customer.php');
?>
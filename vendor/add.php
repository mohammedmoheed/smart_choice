<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$city = $_POST['city'];
		$sql = "INSERT INTO vendors (name, mobile, city) VALUES ('$name', '$mobile', '$city')";

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

	header('location: vendor.php');
?>
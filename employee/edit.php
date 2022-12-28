<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$emp_name = $_POST['emp_name'];
		$mobile = $_POST['mobile'];
		$city = $_POST['city'];
		$payment = $_POST['payment'];
		$sql = "UPDATE employee SET name = '$emp_name', mobile = '$mobile', city = '$city', payment = '$payment' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: employee.php');

?>
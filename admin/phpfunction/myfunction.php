<?php

$conn = mysqli_connect('localhost', 'root', '', 'jrufms');


if(isset($_POST['add_facility'])) {
	$firstname = $_POST['firstname'];
	$facility_name = $_POST['facility_name'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$available = $_POST['available'];


	$insert = "INSERT INTO facility(firstname, facility_name, lastname, username, email, available) VALUES ('$firstname', '$facility_name', '$lastname', '$username', '$email', '$available')";
	$result  = $conn->query($insert);
	header("Location: ../add_facility.php?success=inserted");
}



?>
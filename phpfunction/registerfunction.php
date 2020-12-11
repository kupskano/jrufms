<?php


$conn = mysqli_connect('localhost', 'root', '', 'jrufms');


if(isset($_POST['submit_registration'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$email = $_POST['email'];
	$user_type = "student";


	// echo $firstname;
	// echo '<br>';
	// echo $lastname;
	// echo '<br>';
	// echo $username;
	// echo '<br>';
	// echo $password;
	// echo '<br>';
	// echo $email;
	// echo '<br>';


	$select = "SELECT * FROM users WHERE username  = '$username'";
	$reselect = $conn->query($select);

	if(mysqli_num_rows($reselect) > 0) {
		header("Location: ../registration.php?error=usertaken");
	}

	else if($password != $confirm_password) {
		header("Location: ../registration.php?error=notmatch");
	}
	else {
		$query = "INSERT INTO users (firstname, lastname, username, password, email, user_type) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$user_type')";
		$result = $conn->query($query);
		header("Location: ../registration.php?success=inserted");
	}
}



?>
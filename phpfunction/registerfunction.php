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
	
	$hash = md5(rand(0, 1000));


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




	$select = "SELECT username FROM users WHERE username  = '$username'";
	$reselect = $conn->query($select);

		$selectemail = "SELECT email FROM users WHERE email  = '$email'";
	$reselectemail = $conn->query($selectemail);


	
	if(mysqli_num_rows($reselect) > 0) {
		header("Location: ../registration.php?error=usertaken");
	}

	else if($password != $confirm_password) {
		header("Location: ../registration.php?error=notmatch");
	}
	else if(mysqli_num_rows($reselectemail) > 0) {
		header("Location: ../registration.php?error=emailtaken");
	}
	
	else{
		if(empty(preg_match("/@my.jru.edu$/", $email))) {
			header("Location: ../registration.php?error=notspecificemail");
		}
		else {
			$query = "INSERT INTO users (firstname, lastname, username, password, email, user_type, hash) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$user_type', '$hash')";
			$result = $conn->query($query);

			
		
			header("Location: ../registration.php?success=inserted");
			
			
		}
		
	}
}



?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'jrufms');

if(isset($_POST['submit_acc'])){

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$user_type = $_POST['user_type'];
	

	$select = "SELECT * FROM users WHERE username = '$username'";
	$reselect = $conn->query($select);

	if(mysqli_num_rows($reselect) > 0 ){
		header("Location: ../add_account.php?error=usertaken");

	}
	else{

	$query = "INSERT INTO users (firstname, lastname, username, password, email, user_type) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$user_type')";
	$result = $conn->query($query);
	header("Location: ../add_account.php?success=inserted");
}
}



// if(isset($_POST['submit_acc'])){
// 	$conn = mysqli_connect('localhost', 'root', '', 'tonsberg');
// 	$query  = $conn->prepare("INSERT INTO user (fullname, username, password, myref, user_type, status, date_created) VALUES (?,?,?,?,?,?,?)");
// 	$fullname = $_POST['fullname'];
// 	$username = $_POST['username'];
// 	$password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
// 	$myref = $_POST['myref'];
// 	$user_type = $_POST['user_type'];
// 	$status = "active";
// 	$date_created = date('Y/m/d');

// 	$query->bind_param('bbbbbbb', $fullname, $username, $password, $myref, $user_type, $status, $date_created);
// 	if($query->execute()){
// 		header("Location: ../register_account.php");
// 	}
// 	else{
// 		echo 'error';
// 	}

// }



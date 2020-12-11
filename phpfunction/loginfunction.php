<?php

$conn = mysqli_connect('localhost', 'root', '', 'jrufms');
if( isset($_POST['submit_login'])){
	$username=$_POST['username']; 
	$password=$_POST['password']; 

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($result) != 1){
     header("Location: ../login.php?error=wrongcredential");
     }else{
      $row = mysqli_fetch_assoc($result); 
      if($row['user_type'] == 'admin'){
        session_start();
        $_SESSION['firstname'] = $row['firstname'];
      	$_SESSION['username'] = $row['username'];
      	$_SESSION['user_type'] = $row['user_type'];

      	$_SESSION['id'] = $row['id'];
       header('location: ../admin/dashboard.php');
       
      }
      else if($row['user_type'] == 'student' ){
        session_start();
        
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['id'] = $row['id'];
       header("Location: ../student/dashboard.php");
      }

      else{
       echo "<script>alert('Wrong Username or Password Access Denied !!! Try Again');
      </script>";
      }
     }
}

   



// if(isset($_POST['submit_login']))
// {
// 	$username 	= $_POST['username'];
// 	$password 	= $_POST['password'];

// 	if(empty($username) || empty($password))
// 	{
// 		header("Location: ../login.php?error=emptyfield");
// 		exit();

// 	}else{

// 		$sql = "SELECT * FROM user WHERE username=?";
// 		$stmt = mysqli_stmt_init($conn);

// 			if(!mysqli_stmt_prepare($stmt,$sql)){
// 				header("Location: ../login.php?error=sqlerror");
// 				exit();
// 			}
// 			else{
// 				mysqli_stmt_bind_param($stmt, "s", $username);
// 				mysqli_stmt_execute($stmt);
// 				$result = mysqli_stmt_get_result($stmt);

// 				if($row = mysqli_fetch_assoc($result)){
// 					$pwdcheck = password_verify($password, $row['password']);

// 					if($pwdcheck == false){
// 						header("Location: ../login.php?error=wrongpass");
// 						exit();

// 					}else if($pwdcheck == true){
// 						session_start();
// 						$_SESSION['id'] 	 = $row['id'];
// 						$_SESSION['username'] = $row['username'];
// 						$_SESSION['fullname'] = $row['fullname'];
// 						header("Location: ../registrar/dashboard.php?login=success");
// 						exit();

// 					}else{
// 						header("Location: ../login.php?error=wrongpass");
// 						exit();
// 					}

// 				}else{
// 					header("Location: ../login.php?error=nouser");
// 					exit();
// 				}
// 			}
// 		}
// }




<?php
  include 'phpfunction/registerfunction.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JRU-FMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="login.php" class="col-12 p-0 m-0">
      <p style="text-transform: full-width;font-weight: bolder;text-decoration-line: line-through;color: black;text-shadow: 0px 0px 5px red;" class="col-12">JRU-FMS</p>
      <p class="text-sm p-0 m-0">Jose Rizal University.</p>
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registration</p>
         <?php
                  if(isset($_GET['success'])){

                    $cec = $_GET['success'];
                    if($cec == 'inserted'){
                      echo '<div class="alert alert-info alert-dismissible  show" role="alert">
              <strong><center>Registered Successfully <br> Check your email to verify your account</center></strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>

                <?php
                  if(isset($_GET['error'])){

                    $cec = $_GET['error'];
                    if($cec == 'usertaken'){
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><center>Username is taken!</center></strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>


                <?php
                  if(isset($_GET['error'])){

                    $cec = $_GET['error'];
                    if($cec == 'notmatch'){
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><center>Password and confirm password not match!</center></strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>


                 <?php
                  if(isset($_GET['error'])){

                    $cec = $_GET['error'];
                    if($cec == 'notspecificemail'){
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><center>Invalid email for JRU</center></strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>

                  <?php
                  if(isset($_GET['error'])){

                    $cec = $_GET['error'];
                    if($cec == 'emailtaken'){
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><center>Email is taken</center></strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>
      <form action="phpfunction/registerfunction.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="firstname" placeholder="Firstname" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="lastname" placeholder="Lastname" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <a href="login.php"> Have an account? <b>Login</b></a>
          </div>
          <div class="col-4">
            <button type="submit" name="submit_registration" class="btn bg-gradient-primary btn-sm btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="registerdd.php" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
 <script>
    window.setTimeout(function() {
    $(".fade").fadeTo(200, 0) 
}, 2000);
  </script>

</body>
</html>

<?php 


      error_reporting(E_ALL ^ E_NOTICE);
      include 'header.php';
      include 'phpfunction/add_account.php';

      include 'header.php';
      include 'phpfunction/dbconn.php';
      include '../phpfunction/loginfunction.php';
      session_start(); 
      $username = $_SESSION['username'];
      $firstname = $_SESSION['firstname'];   
      // include 'phpfunction/course.php';
    

?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'nav.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'aside.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Register Account</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
        

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><!-- Info boxes -->
        <center>
          <div class="row" style="display: block;">
            <div class="register-box">
              <div class="card">
                <div class="card-body register-card-body">
                  <p class="login-box-msg">Register a new account</p>
                    <?php
                  if(isset($_GET['success'])){

                    $cec = $_GET['success'];
                    if($cec == 'inserted'){
                      echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
              <strong>Registered Successfully!</strong> 
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
              <strong>Username is taken!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>
                  <form action="phpfunction/add_account.php" method="post">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="firstname"  placeholder="Fullname" required>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-user"></span> -->
                        </div>
                      </div>
                    </div>
                     <div class="input-group mb-3">
                      <input type="text" class="form-control" name="lastname"  placeholder="Lastname" required>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-user"></span> -->
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="username"  placeholder="Username">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-envelope"></span> -->
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-lock"></span> -->
                        </div>
                      </div>
                    </div>
                    
                    <div class="input-group mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <!-- <span class="fas fa-lock"></span> -->
                        </div>
                      </div>
                    </div>
                       <div class="input-group mb-3">
                          <select class="form-control" name="user_type" required="">
                            <option>SELECT USER TYPE</option>
                            <option value="student">Student</option>
                            <option value="staff">Staff/Teachers</option>
                            <option value="principal">Principal</option>
                            <option value="dean">Dean</option>
                            <option value="director">Director</option>
                          </select>
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <button type="submit" name="submit_acc" class="btn bg-gradient-primary btn-block elevation-3">Register</button>
                      </div>
                    </div>
                  </form>
                </div><!-- /.form-box -->
              </div><!-- /.card -->
            </div>
          </div>
        </center>
      </div>
    </section><!-- /.content -->
  </div>
  <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(200, 0) 
}, 2000);
  </script>
<?php include 'footer.php';?>
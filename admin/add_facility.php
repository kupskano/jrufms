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
      
?>
<style>
  #myInput {
    display:none
}
</style>
 <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
            <h1 class="m-0 text-dark">Add Facility </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active"> --</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div><!-- /.content-header -->

    <?php
      if(isset($_GET['success'])){

        $cec = $_GET['success'];
        if($cec == 'inserted'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Added Successfully!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
      }
    ?>
    <?php
      if(isset($_GET['updated'])){

        $cec = $_GET['updated'];
        if($cec == 'success'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Updated Successfully!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
      }
    ?>
     <?php
      if(isset($_GET['edit'])){

        $cec = $_GET['edit'];
        if($cec == 'succ'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Edited Successfully!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
      }
    ?>

   
    <section class="content">
      <div class="container-fluid">
        </div>
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"></h3>

        <!--     <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div> -->
          </div>

          <form method="post" action="phpfunction/myfunction.php">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

                <?php

                  $selectfirstname = "SELECT firstname FROM users WHERE username = '$username' ";
                  $resultfirstname = $conn->query($selectfirstname);
                  $fetchfirstname = mysqli_fetch_array($resultfirstname);
                  $shiftfirstname = array_shift($fetchfirstname);

                ?>

                <div class="form-group">
                  <label>Firstname</label>
                  <input type="text" class="form-control" name="firstname" value="<?php echo $shiftfirstname;?>" placeholder="Firstname" readonly="">
                </div>

                  <div class="form-group">
                  <label>Facility name</label>
                 <input type="text" class="form-control" name="facility_name"  placeholder="Facility name" required="">
                </div>
              
                
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                
                   <?php

                  $selectlastname = "SELECT lastname FROM users WHERE username = '$username' ";
                  $resultlastname = $conn->query($selectlastname);
                  $fetchlastname = mysqli_fetch_array($resultlastname);
                  $shiftlastname = array_shift($fetchlastname);

                ?>


                  <div class="form-group">
                  <label>Lastname</label>
                  <input type="text" class="form-control" name="lastname" value="<?php echo $shiftlastname;?>" placeholder="Lastname" readonly="">
                </div>

                   <?php

                  $selectusername = "SELECT lastname FROM users WHERE username = '$username' ";
                  $resultusername = $conn->query($selectusername);
                  $fetchusername = mysqli_fetch_array($resultusername);
                  $shiftusername = array_shift($fetchusername);

                ?>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" value="<?php echo $shiftusername;?>" name="username" placeholder="Username" readonly>
                </div>
              </div>
            </div>

             <?php

                  $selectemail = "SELECT email FROM users WHERE username = '$username' ";
                  $resultemail = $conn->query($selectemail);
                  $fetchemail = mysqli_fetch_array($resultemail);
                  $shiftemail = array_shift($fetchemail);

                ?>

            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $shiftemail;?>" placeholder="Email" readonly>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Available</label>
                  <div class="select2-purple">
                    <input type="number" class="form-control" name="available" placeholder="Available">
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
              <div class="col-6 col-sm-6">
                <div class="form-group">
                  <button class="form-control btn btn-info" type="submit" name="add_facility">Add Facility</button>

                </div>

              </div>
               <div class="col-6 col-sm-6">
                <div class="form-group">
                  <button class="form-control btn btn-default" type="button" onclick="window.location.href='dashboard.php'">Cancel</button>

                </div>
                 
              </div>
            </div>
            <!-- /.row -->
          </div>
        </form>
          <!-- /.card-body -->
         
        <!-- /.card -->

        <!-- /.card -->

        <!-- /.card -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
   

    <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title" hidden="">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
  </div>
  <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0) 
}, 2000);
  </script>

 <script>
function setClipboard(value) {
    var tempInput = document.createElement("input");
    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
}
</script>
  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<!-- <script src="script/swal.js"></script> -->
<!-- <script src="script/delete-book.js"></script> -->
<!-- <script src="script/view-course.js"></script> -->
<!-- <script src="script/approve-book.js"></script> -->
<!-- <script src="script/ass_count.js"></script> -->
<script >
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<!-- <script>
$(document).ready(function(){
  $('.triggerd').click(function(){
    Swal.fire(
  'Oops!',
  'Button Will Enable After A Day!',
  'warning'
)

   });
});
</script> -->



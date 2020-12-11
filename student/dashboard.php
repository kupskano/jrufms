<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'header.php';
include '../phpfunction/loginfunction.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../login.php");
}

?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php include 'nav.php';?>

  <?php include 'aside.php';?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><b><?php echo strtoupper($_SESSION['firstname']);?> <?php echo strtoupper($_SESSION['lastname']);?></b> Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <?php

                $selectfacilities = "SELECT * FROM facility WHERE status = 'active'";
                $result = $conn->query($selectfacilities);

              ?>
              <?php while ($row = $result->fetch_object()):?>
          <div class="col-12 col-sm-6 col-md-3">

            <div class="info-box">
              
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-school"></i></span>

              <div class="info-box-content" onclick="window.location.href='details.php?id=<?php echo $row->id;?>&facility_name=<?php echo $row->facility_name;?>'">
                <span class="info-box-text"><?php echo strtoupper($row->facility_name);?></span>
                <span class="info-box-number">
                  <?php echo $row->available;?>
                </span>
              </div>
            </div>
      
          </div>
         
    <?php endwhile;?>
        
        </div>
       
      </div>
    </section>
  </div>
  <?php include 'footer.php';?>
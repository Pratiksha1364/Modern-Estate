<?php
include "connection.php";
session_start();
?>
<?php
if(!isset($_SESSION['gmail']))
{
  if (!isset($_GET['reload'])) {
    echo '<meta http-equiv=Refresh content="0;url=../login-v2.php">';
        }
}
else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modern Estate | Manage Appointment</title>
<style>
  .tbl-box{
    border:1px solid gray;
    margin:10px;
  }
  .tbl-header{
    background:white;
    border-radius:10px 10px 0 0;
    box-shadow:0px 0px 5px 0px black;
  }
  h5{
    padding:10px;
  }
  .main-tbl{
    margin-left:20px;
  }
  </style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="100" width="100">
  </div>
  <!-- Navbar -->
 <?php
 include "adminheader.php";
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include "adminsidemenu.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Appointment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Appointment</li>
            </ol>
          </div>
        <div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content-header -->

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Appointment</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email Id</th>
                      <th>Time Slot</th>
                      <th>Platform</th>
                      <th>Status</th>
                      <th>Mail</th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $lid=$_SESSION['gmail'];
                  $query="SELECT * FROM login_table WHERE EMAIL='$lid'";
                  $qr=mysqli_query($con,$query);
                  while($val=mysqli_fetch_array($qr))
                    $qv=$val['LOGIN_ID'];
                  $query = "SELECT * FROM appointment_table WHERE SELLER_ID='$qv' AND STATUS=1 ORDER BY `TIMESTAMP` DESC";
                  $result= mysqli_query($con,$query);
                  $i=1;
                  while ($value = mysqli_fetch_array($result)) {
                  ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td>
                        <?php
                       echo $value['NAME'] ;
                       ?>
                       </td>
                      <td>
                        <?php
                       echo $value['EMAIL_ID'] ;
                       ?>
                       </td>
                      <td><?php echo $value['TIME_SLOT'];?></td>
                      <td><?php echo $value['PLATFORM'];?></td>
                      
                      <td align="center" >
                      <?php
                      $id=$value['APPOINTMENT_ID'];
                       $sq="SELECT * FROM appointment_table WHERE APPOINTMENT_ID =$id ";
                       $rsq=mysqli_query($con,$sq);
                       $rvl=mysqli_fetch_assoc($rsq);
                       $nm= $value['ST'];
                         if($nm==1)
                         {
                      ?>
                      <button class="btn btn-block bg-gradient-success">Approved</button>
                      <?php
                         }
                         elseif($nm==2)
                         {
                      ?>
                      <button class="btn btn-block bg-gradient-warning">Denied</button>
                      <?php
                         }
                        
                        elseif($nm==0){
                      ?>
                      <a href="?ap=<?php echo $value['APPOINTMENT_ID'];?>">
                      <button class="btn btn-primary">Approve</button>
                      </a>
                      <a href="?dn=<?php echo $value['APPOINTMENT_ID'];?>">
                      <button class="btn btn-danger">Deny</button>
                      </a>
                      <?php } ?>
                      </td>
                      <td align="center" style="width: 15%">
                      <a href="mailto:<?php echo $value['EMAIL_ID'] ;?>">
                      <button class="btn btn-primary"><span class="fa fa-envelope"> </span>&nbsp;Reply By Mail</button></a>
                  </td>
                    </tr>
                    <?php
                      }
                      if (isset($_GET['ap'])) {
                        $querya="UPDATE appointment_table SET ST = '1' WHERE APPOINTMENT_ID = ".$_GET['ap']."";
                        $resulta=mysqli_query($con,$querya);
                        if ($resulta) {
                          if (!isset($_GET['reload'])) {
                                    
                          echo '<meta http-equiv=Refresh content="0;url=Manage Appointments.php?reload=1">';
                                }
                        }
                      }
                      if (isset($_GET['dn'])) {
                        $querya="UPDATE appointment_table SET ST = '2' WHERE APPOINTMENT_ID = ".$_GET['dn']."";
                        $resulta=mysqli_query($con,$querya);
                        if ($resulta) {
                          if (!isset($_GET['reload'])) {
                                    
                          echo '<meta http-equiv=Refresh content="0;url=Manage Appointments.php?reload=1">';
                                }
                        }
                      }
                      ?>
                     
                  </tbody>
                </table>
              </div>

    <!-- /.content-header -->
    
</div>
</div>
        <!-- Main row -->

    

  <!-- /.content-wrapper -->
  <?php
  include "adminfooter.php";
  ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>
<?php
}
?>
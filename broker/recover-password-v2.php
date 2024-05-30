<?php
	include 'connection.php';
  session_start();
?>
<?php
if(!isset($_SESSION['gmailbroker']))
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
  <title>Modern Estate | Feedback</title>
  <style>
  .tbl-box1{
    border:0px solid gray;
    margin:10px;
    border-radius:10px 10px 0px 0px;
    color:black;
  }
  .tbl-header1{
    background:white;
    border-radius:10px 10px 0 0;
    box-shadow:0px 0px 1px 0px black;
  }
  h5{
    padding:10px;
  }
  .main-tbl1{
    margin-left:0px;
    margin-top:-7px;

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
<div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
            <h1>Manage Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        <div>
      </div><!-- /.container-fluid -->
    </section>

    
<div class="login-box" style="margin:50px auto;">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Modern </b>Estate</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">
      You are only one step a way from your new password, recover your password now.</p>

      <form method="POST">
      <div class="input-group mb-3">
          <input type="password" name="oldpass" class="form-control" placeholder="Enter Old Password ">
          <div class="input-group-append">
            <div class="input-group-text">
<!--               <span class="fas fa-lock"></span>
 -->            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" placeholder="Enter New Password">
          <div class="input-group-append">
            <div class="input-group-text">
<!--               <span class="fas fa-lock"></span>
 -->            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass1" class="form-control" placeholder="Confirm New Password">
          <div class="input-group-append">
            <div class="input-group-text">
<!--               <span class="fas fa-lock"></span>
 -->            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="changepass" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
        if(isset($_POST['changepass']))
        {
        $old=$_POST['oldpass'];
        $a=$_POST['pass'];
        $b=$_POST['pass1'];

        $mail=$_SESSION['gmailbroker'];
        
        $opass="SELECT PASSWORD FROM login_table WHERE EMAIL='$mail'";
        $or=mysqli_query($con,$opass);
        $value = mysqli_fetch_array($or);
        $pass=$value['PASSWORD'];
        $hash=password_verify($old, $pass);
        if($hash==1)
        {
            if($a==$b)
            {
                $hash=password_hash($a,PASSWORD_DEFAULT);
                $que="UPDATE login_table SET PASSWORD='".$hash."'WHERE EMAIL='".$mail."'";
                $ss=mysqli_query($con,$que);
                if($ss)
                {
                  echo "<script>alert('Password Updated Succesfully');</script>";
                  if (!isset($_GET['reload'])) {
                                    
                    echo '<meta http-equiv=Refresh content="0;url=index.php?reload=1">';
                          }
                }
                else
                {
                  echo "<script>alert('Password Not Changed');</script>";	
                }
            }
            else
            {
              echo "<script>alert('Both Passwords Do Not Match');</script>";
            }
        }
        else{
          echo "<script>alert('Something Went Wrong');</script>";
        } 
      }
      ?>
    <!-- /.content-header -->
    </div> </div></div></div>


  <!-- /.content-wrapper -->
  <?php
  include "adminfooter.php";
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
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
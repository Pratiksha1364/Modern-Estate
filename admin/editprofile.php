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
  <title>Modern Estate | Edit Profile</title>

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
  <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
  .main1{
    width:70%;
    border:0px solid lightgray;
    border-radius:4px 4px 0 0;
    margin-left:15%;
    box-shadow:0px 0px 5px gray;
  }
  </style>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
          // print_r($_SESSION);
          $nm=$_SESSION['gmail'];
          $querys="SELECT * FROM login_table WHERE EMAIL='$nm'";
          $sq=mysqli_query($con,$querys);
          while ($value = mysqli_fetch_array($sq)) 
			    {
            ?>
    <div class="main1">
    <div class="card-header">
            <h3 class="card-title">Edit Details</h3>
            </div>
            <form method=POST enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Your Name</label>
                <input type="text" id="inputName" name="inputName" value="<?php echo $value['NAME'];?>" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputmail">Your E-mail</label>
                <input type="text" id="inputmail" name="mail" value="<?php echo $value['EMAIL'];?>" class="form-control" required disabled>
              </div>
              <div class="form-group">
                <label for="image">Add Profile Image</label><br>
                <input type="file" accept="image/jpg,image/jpeg,image/png" id="image" name="image" >
                </div>
                <?php
                $nm=$_SESSION['gmail'];
                $gh="SELECT * FROM login_table WHERE EMAIL='$nm'";
                $an=mysqli_query($con,$gh);
                $vl=mysqli_fetch_array($an);
                $l=$vl['LOGIN_ID'];
                $query = "SELECT * FROM profileimage_table WHERE LOGIN_ID='$l' AND STATUS=1 ORDER BY TIMESTAMP desc";
                $result= mysqli_query($con,$query);
                $value = mysqli_fetch_array($result);
              ?>
              <input type="hidden" value="<?php echo $value['IMAGE_NAME'];?>">
                <img src="profile_image/<?php echo $value['IMAGE_NAME'];?>"" style="width:20%; height:20%;" alt="User Image" onerror=this.src="user2.jpg" >
                
              <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                </div>
                
              </div>
            </form>
            <!-- /.card-body -->
          </div>
        </div>
    <?php
    }
    ?>
    <?php
    if (isset($_POST['submit'])) {
			$pname=$_POST['inputName'];
			//$mail=$_POST['mail'];
      $nm1=$_SESSION['gmail'];
      $idq="SELECT LOGIN_ID FROM login_table WHERE EMAIL='".$nm1."'";
      $id=mysqli_query($con,$idq);
      $value = mysqli_fetch_array($id);
      $lid= $value['LOGIN_ID'];

      date_default_timezone_set('Asia/calcutta');
      $a=date('Y-m-d H:i:s');
      $filename = addslashes($_FILES['image']['name']);
			$tmpname = addslashes($_FILES['image']['tmp_name']);
		
			$iname= (string)(date("YmdHis"));
			$extension = pathinfo($filename,PATHINFO_EXTENSION);
			$image_path= $iname.".".$extension;
      // echo $image_path;
			if ($filename) {
				move_uploaded_file($_FILES['image']['tmp_name'],"profile_image/".$image_path);
			}
      $lu="UPDATE login_table SET NAME='$pname' WHERE LOGIN_ID='$lid'";
      $lr=mysqli_query($con,$lu);
      $query = "INSERT INTO profileimage_table(LOGIN_ID,IMAGE_NAME,STATUS,TIMESTAMP) VALUES ('$lid','$image_path',1,'$a')";
      $sql = mysqli_query($con,$query);
     

    if ($sql && $lr) {
			// echo "Inserted Successfully <br>";

      if (!isset($_GET['reload'])) {
        echo '<meta http-equiv=Refresh content="0;url=editprofile.php?reload=1">';
            } 
		}
		else{
			echo "Something Went Wrong";
		}
		
  }
	?>
    
    <!-- Main content -->
</div>
        

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
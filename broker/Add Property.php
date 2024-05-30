<?php
include "connection.php";
session_start();
// error_reporting(0);
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
  <title>Modern Estate | Add Property</title>
<style>
  .main1{
    width:70%;
    border:0px solid lightgray;
    border-radius:4px 4px 4px 4px;
    margin-left:15%;
    box-shadow:0px 0px 5px gray;
   
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Property</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Property</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="main1">
    <div class="card-header">
            <h3 class="card-title">Add Details</h3>
            </div>
<form method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Your Name</label>
                <?php
                $nam=$_SESSION['gmailbroker'];
                $querys="SELECT * FROM login_table WHERE EMAIL='$nam'";
                $sqq=mysqli_query($con,$querys);
                while ($value = mysqli_fetch_array($sqq)) 
                { 
                ?>
                <input type="text" id="inputName" name="uname" value="<?php echo $value['NAME'];?>" class="form-control" disabled>
                <?php
                }
                ?>
              </div>
              <div class="form-group">
                <label for="inputName">Your Email</label>
                <?php
                $nam=$_SESSION['gmailbroker'];
                $querys="SELECT * FROM login_table WHERE EMAIL='$nam'";
                $sqq=mysqli_query($con,$querys);
                while ($value = mysqli_fetch_array($sqq)) 
                { 
                ?>
                <input type="text" id="inputName" name="email" value="<?php echo $value['EMAIL'];?>" class="form-control" disabled>
                <?php
                }
                ?>
              </div>
              <div class="form-group">
										<label for="categories" class=" form-control-label">Property Type</label>
										<select class="form-control" name="type_id" id="categories_id"  required>
											<option selected disabled>Select Type</option>
											<?php
											$res=mysqli_query($con,"select PROPERTY_TYPE_ID,PROERTY_TYPE_NAME from property_type WHERE  PROPERTY_STATUS=1");
											while($row=mysqli_fetch_assoc($res)){
												
													echo "<option value=".$row['PROPERTY_TYPE_ID'].">".$row['PROERTY_TYPE_NAME']."</option>";
			
											}
											?>
										</select>
									  </div>

              <div class="form-group">
                <label for="inputDescription">Property Address</label>
                <textarea id="inputDescription" name="address" class="form-control" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <label for="inputimage">Property Images</label><br/>
                <input type="file" name="image[]" id="inputname" accept="image/png,image/jpg,image/jpeg" multiple required>
              </div>
              <div class="form-group">
                <label for="inputStatus">Property Category (you want to sale or rent)</label>
                <select id="inputStatus" name="category" class="form-control custom-select" required>
                  <option selected disabled>Select one</option>
                  <?php 
                  $sq="SELECT * FROM property_category_table";
                  $an=mysqli_query($con,$sq);
                  while ($category = mysqli_fetch_array($an,MYSQLI_ASSOC)):; 
                  ?>
                  <option value="<?php echo $category["PROPERTY_CAT_ID"];?>">
                    
                    <?php echo $category["PROPERTY_CAT_NAME"];
                    ?>
                </option>
            <?php 
                endwhile; 
            ?>
                </select>
              </div>

              <div class="row">
                  <div class="col-6">
                  <label for="inputus">Number Of BedRooms</label>
                    <input type="number" name="bedroom" class="form-control" placeholder="0" required>
                  </div>
                  <div class="col-6">
                  <label for="intStatus">Number Of Kitchen</label>
                    <input type="number" name="kitchen" class="form-control" placeholder="0"required>
                  </div>
                  <div class="col-6">
                  <label for="inputSta">Number Of Hall</label>
                    <input type="number" name="hall" class="form-control" placeholder="0"required>
                  </div>
                  <?php $years = range(1900, strftime("%Y", time())); ?>
              <div class="col-6">
                  <label for="inputSta">Property Built Year</label>
                <select class="form-control" name="byear" required>
                  <option selected>Select Built Year</option>
                  <?php foreach($years as $year) : ?>
                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                  <?php endforeach; ?>
                </select>                  
              </div>
              </div><br>

              <div class="form-group">
                <label for="inputPropertydescription">Property Description</label>
                <textarea id="inputPropertydescription" name="description" class="form-control" rows="3" placeholder="eg:(it has 2 bedrroms it is in 1200sqft )"required></textarea>
              </div>           
              <div class="form-group">
                <label for="inputPriceorRent">Price You Demand</label>
                <input type="number" id="inputPriceorRent" name="price" class="form-control" required>
              </div>
              
              <div class="form-group">
                  <button type="submit" name="sbtn" class="btn btn-primary"id="submit" xml_error_string >Submit</button>
                </div>
</form>
            </div>
          </div>
        </div>
<?php
if (isset($_POST['sbtn'])) 
{
  // $nms='Admin';
  // $email=$_POST['email'];
  $address=$_POST['address'];
  $category=$_POST['category'];
  $type=$_POST['type_id'];
  $description=$_POST['description'];
  $price=$_POST['price'];
  $bedroom=$_POST['bedroom'];
  $kitchen=$_POST['kitchen'];
  $hall=$_POST['hall'];
  $byear=$_POST['byear'];
  // $img=$_FILES['image'];
  date_default_timezone_set("Asia/Calcutta");
  $dt=date('Y-m-d H:i:s');
  $nam=$_SESSION['gmailbroker'];
  $query3="SELECT * FROM login_table WHERE EMAIL='$nam'";
  $ans3=mysqli_query($con,$query3);
  $fetchdetails= mysqli_fetch_array($ans3);
  $lid = $fetchdetails['LOGIN_ID'];
  $dtt=date('YmdHis');
 
  $qry = "INSERT INTO property_table( PROPERTY_CAT_ID, PROPERTY_TYPE_ID, LOGIN_ID, ADDRESS, DESCRIPTION,HALL,KITCHEN,BEDROOM,BUILTYEAR, PRICE, STATUS, TIMESTAMP) 
          VALUES ('$category','$type','$lid','$address','$description','$hall','$kitchen','$bedroom','$byear','$price',1,'$dt')";
  $sql = mysqli_query($con,$qry);

$extension=array('jpeg','jpg','png','gif');

foreach ($_FILES['image']['tmp_name'] as $key => $value) {
$filename=$_FILES['image']['name'][$key];
$filename_tmp=$_FILES['image']['tmp_name'][$key];
echo '<br>';
$ext=pathinfo($filename,PATHINFO_EXTENSION);

$finalimg='';
if(in_array($ext,$extension))
{
if(!file_exists('../admin/properties_image/'.$filename))
{
move_uploaded_file($filename_tmp, '../admin/properties_image/'.$filename);
$finalimg=$dtt.$filename;
}
else
{
$filename=str_replace('.','-',basename($filename,$ext));
$newfilename=$filename.time().".".$ext;
move_uploaded_file($filename_tmp, '../admin/properties_image/'.$newfilename);
$finalimg=$newfilename;
}
}

      $sq="SELECT * FROM property_table ORDER BY TIMESTAMP desc";
      $an=mysqli_query($con,$sq);
      $iid=mysqli_fetch_array($an);
      $imgid=$iid['PROPERTY_ID'];
      // echo $imgid;
      $qry1= "INSERT INTO image_table(PROPERTY_ID,IMAGE_NAME,TIMESTAMP) 
                VALUES('$imgid','$finalimg','$dt')";
      $sq1= mysqli_query($con,$qry1);
      }
      
      if($sq1 & $sql)
      {
        //echo "Property Added Succesfully";
        echo '<script>alert("Property Added Succesfully")</script>';
      }
      else{
        echo '<script>alert("Something Went Wrong")</script>';
        // echo "Something Went Wrong";
      
    }
  }
  
?>
    
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


</body>
</html>
<?php
}
?>
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
  <title>Modern Estate | Edit Property</title>

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
  <link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>
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
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->
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
            <h1 class="m-0">Edit Properties</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Properties</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
	$id= $_GET['id'];
	$qry="SELECT * FROM property_table WHERE PROPERTY_ID='$id'";
	$result = mysqli_query($con,$qry);
	while($value = mysqli_fetch_array($result)){
        $conid=$value['PROPERTY_ID'];
        $ptid=$value['PROPERTY_TYPE_ID'];
		$propadd=$value['ADDRESS'];
		$propdesc=$value['DESCRIPTION'];
		$propprice=$value['PRICE'];
        $propcat=$value['PROPERTY_CAT_ID'];
        $propstatus=$value['STATUS'];
        $prophall=$value['HALL'];
        $propkit=$value['KITCHEN'];
        $propbroom=$value['BEDROOM'];
      $proptype=$value['PROPERTY_TYPE_ID'];
      $propbyear=$value['BUILTYEAR'];
      $propsize=$value['PROPERTY_SIZE'];
	}
	?>
    <!-- Main content -->
    <div class="main1">
    <div class="card-header">
            <h3 class="card-title">View Details</h3>
            </div>
            <div class="card-body">
            <form method="POST">
            <div class="form-group">
                <label>Id</label>
                <input type="text" name="contid" value="<?php echo $conid;?>" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="eusername" value="<?php
                       
                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo $row['PROERTY_TYPE_NAME']." For ";
                        }
                        if($propcat==1)
                          {
                            echo "SALE";
                          }
                          else{
                            echo "RENT";
                          }
                      //  echo $value['PROPERTY_TYPE_ID'] ."For".$value['PROPERTY_CAT_ID '];
                       ?>" class="form-control" disabled>
              </div>
              <div class="form-group">
										<label for="categories" class=" form-control-label">Property Type</label>
                    <input type="text" name="eproptype" value="<?php
                      
											$res=mysqli_query($con,"select PROPERTY_TYPE_ID,PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID ='$proptype' AND PROPERTY_STATUS=1");
											while($row=mysqli_fetch_assoc($res)){
												
													echo $row['PROERTY_TYPE_NAME'];
			
											}
											?>" class="form-control" disabled>
											
									  </div>

              <div class="form-group">
                <label>Property Address</label>
                <input type="text" name="epropadd" value="<?php echo $propadd;?>" class="form-control">
              </div>
              <div class="form-group">
                <label>Property Description</label>
                <input type="text" name="epropdes" value="<?php echo $propdesc;?>" class="form-control" >
              </div>
              <div class="form-group">
                <label>Property Price</label>
                <input type="text" name="epropprice" value="<?php echo $propprice;?>" class="form-control" >
              </div>
              <div class="row">
                  <div class="col-6">
                  <label for="inputus">Number Of BedRooms</label>
                    <input type="number" name="bedroom" value="<?php echo $prophall;?>" class="form-control" placeholder="0" >
                  </div>
                  <div class="col-6">
                  <label for="intStatus">Number Of Kitchen</label>
                    <input type="number" name="kitchen" value="<?php echo $propkit;?>" class="form-control" placeholder="0">
                  </div>
                  <div class="col-6">
                  <label for="inputSta">Number Of Hall</label>
                    <input type="number" name="hall" value="<?php echo $propbroom;?>" class="form-control" placeholder="0">
                  </div>
                  <div class="col-6">
                  <label for="inputus">Size Of Property In Square Feet</label>
                    <input type="number" name="propertysize" value="<?php echo $propsize;?>" class="form-control" placeholder="0" >
                  </div>

                  <?php $years = range(1900, strftime("%Y", time())); ?>
              <div class="col-6">
                  <label for="inputSta">Property Built Year</label>
                <select class="form-control" name="byear" >
                  
                  <option><?php echo $propbyear; ?></option>
                  <?php foreach($years as $year) : ?>
                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                  <?php endforeach; ?>
                </select>                  
              </div>

              </div><br>
              <div class="form-group">
                <label>Property Category(SALE & RENT)</label>
                <input type="text" name="epropcat" value="<?php
                if($propcat==1)
                {
                  echo "SALE";
                }
                else{
                  echo "RENT";
                }?>" class="form-control" >
                
              </div>
              <div class="form-group">
     
                <input type="hidden" name="epropstatus" value="<?php echo $propstatus;?>" class="form-control" >
              </div>
              <!-- <div class="form-group">
                <label for="inputimage">Property Images</label><br/>
                <input type="file" name="image[]" id="inputname" accept="image/png,image/jpg,image/jpeg" multiple >
              </div> -->
              <div class="form-group">
                <label>Image</label>                
<div class="ism-slider" data-transition_type="fade" id="my-slider">
  <ol>
            <?php
        $id= $_GET['id'];
        $sq="SELECT * FROM image_table WHERE PROPERTY_ID='$id' ORDER BY IMAGE_ID desc";
        $results=mysqli_query($con,$sq);
        while($im=mysqli_fetch_assoc($results))
        {
        ?>
  </li>
  <li>
    <img src="../admin/properties_image/<?php echo $im['IMAGE_NAME'];?>">
      <!-- <img src="ism/image/slides/bora-bora-685303_1280.jpg"> -->
      <div class=""><!--My slide caption text--></div>
    </li>
    <?php
}
?>
  </ol>
</div>        

            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="updateprop">Update</button>
                  &nbsp;
                  <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
</form>
<?php
if(isset($_POST['cancel']))
{
  if (!isset($_GET['reload'])) {
    echo '<meta http-equiv=Refresh content="0;url=Manage Properties.php?reload=1">';
        }
}
if(isset($_POST['updateprop']))
{
$id= $_GET['id'];
$address=$_POST['epropadd'];
$description=$_POST['epropdes'];
$price=$_POST['epropprice'];
$category=$_POST['epropcat'];
$status=$_POST['epropstatus'];
$type=$_POST['eproptype'];
$byera=$_POST['byear'];
$hall=$_POST['hall'];
$kitchen=$_POST['kitchen'];
$bedroom=$_POST['bedroom'];
$propsize=$_POST['propertysize'];

$qu="UPDATE property_table SET ADDRESS='$address',
DESCRIPTION='$description',HALL='$hall',KITCHEN='$kitchen',BEDROOM='$bedroom',PROPERTY_SIZE='$propsize',BUILTYEAR='$byera',
PRICE='$price' WHERE PROPERTY_ID='$id'";
$sq=mysqli_query($con,$qu);

if($sq)
{
    echo'<script>alert("Property Updated Succesfully")</script>';
    if (!isset($_GET['reload'])) {
              echo '<meta http-equiv=Refresh content="0;url=Manage Properties.php?reload=1">';
                  }
}
else{
    echo'<script>alert("Something Went Wrong")</script>';
}
}
?>
    <!-- Main content -->
</div>
</div>
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
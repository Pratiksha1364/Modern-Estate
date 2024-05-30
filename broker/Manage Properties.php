<?php
include "connection.php";
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
  <title>Modern Estate | Manage Properties</title>
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
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="100" width="100">
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

        <!-- Main row -->
        <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Properties</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Properties</li>
            </ol>
          </div>
        <div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content-header -->
    <div class="card" style="margin:10px">
   
              <div class="card-header">
                <h3 class="card-title">Properties</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <table class="table table-bordered"  >
                  <thead >
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Price</th>
                      <th>Built<span style="color:white;">_</span>Year</th>
                      <th>Status</th>
                      <th>Upload<span style="color:white;">_</span>Date</th>
                      <th>Manage</th>
                      <th></th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   $lid=$_SESSION['gmailbroker'];
                   $query="SELECT * FROM login_table WHERE EMAIL='$lid'";
                   $qr=mysqli_query($con,$query);
                   while($val=mysqli_fetch_array($qr))
                     $qv=$val['LOGIN_ID'];
                     
                  $query = "SELECT * FROM property_table WHERE LOGIN_ID='$qv' AND STATUS=1 ORDER BY `TIMESTAMP` DESC";
                  $result= mysqli_query($con,$query);
                
                  $i=1;
                  while ($value = mysqli_fetch_array($result)) {
                  ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php
                        $id=$value['PROPERTY_TYPE_ID'];
                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$id'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
                        }
                        if($value['PROPERTY_CAT_ID']==1)
                          {
                            echo "Sale";
                          }
                          else{
                            echo "Rent";
                          }
                       ?></td>
                      <td><?php echo $value['ADDRESS'];?></td>
                      <td style="width: 7%">&#8377; <!--750--> <?php 
                      if(strlen($value['PRICE'])>=5) {  echo
                    substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
                        $value['PRICE']; }?></td>
                      <td><?php echo $value['BUILTYEAR'];?></td>
                      <td><?php
                        $s=$value['SOLD'];
                        if($s==0)
                        {
                                if($value['PROPERTY_CAT_ID']==1)
                                {
                                  
                                  echo "For Sale";
                                }
                                else{
                                  echo "For Rent";
                                }
                          } 
                          elseif($s==1){
                            ?>
                            <span style="color:red">Sold</span>
                            <?php
                          }
                          elseif($s==2){
                            ?>
                            <span style="color:red">Rented</span>
                            <?php
                                
                          }
                        ?></td>
                      <td><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></td>
                      <td style="width: 10%;">
                      <a href="editproperties.php?id=<?php echo $value['PROPERTY_ID'];?>"><button class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
                      <a href="?del=<?php echo $value['PROPERTY_ID'];?>" onclick="return confirm('Are You Sure You Want to Delete This Record ?');"><button class="btn btn-warning"><i class="fas fa-trash"></i></button></a>
                      </td>
                      <td style="width:200px;">
                      <a href="?st=<?php echo $value['PROPERTY_ID'];?>"><button class="btn btn-primary"><i class="fas fa-pencil-alt"></i>&nbsp;Mark As <?php
                        $s=$value['SOLD'];
                       if($s==0)
                      {
                              if($value['PROPERTY_CAT_ID']==1)
                              {
                                echo "Sold";
                              }
                              else{
                                echo "Rented";
                              }
                        } 
                        elseif($s==1){
                              echo "For Sell";
                        }
                        elseif($s==2){
                              echo "For Rent";
                        }
                        

                        ?> </button></a>
                        
                      </td>
                    </tr>
                    <?php
                      }
                      ?>
                     <?php
                      
                      if (isset($_GET['st'])) {

                  $querys = "SELECT * FROM property_table WHERE PROPERTY_ID=".$_GET['st']." ";
                  $results= mysqli_query($con,$querys);
                  while ($values = mysqli_fetch_array($results)) {
                    $st=$values['SOLD'];
                    $ct=$values['PROPERTY_CAT_ID'];
                    if($st==0 && $ct==1)
                    {
                        $querya="UPDATE property_table SET SOLD = '1' WHERE PROPERTY_ID = ".$_GET['st']."";
                        $resulta=mysqli_query($con,$querya);
                        if ($resulta) {
                          if (!isset($_GET['reload'])) {
                                    
                          echo '<meta http-equiv=Refresh content="0;url=Manage Properties.php?reload=1">';
                                }
                        }
                      }
                      elseif ($st==0 && $ct==2) {
                        $querya="UPDATE property_table SET SOLD = '2' WHERE PROPERTY_ID = ".$_GET['st']."";
                        $resulta=mysqli_query($con,$querya);
                        if ($resulta) {
                          if (!isset($_GET['reload'])) {
                                    
                          echo '<meta http-equiv=Refresh content="0;url=Manage Properties.php?reload=1">';
                                }
                        }
                      }
                      elseif($st==1 || $st==2)
                      {
                        $querya="UPDATE property_table SET SOLD = '0' WHERE PROPERTY_ID = ".$_GET['st']."";
                        $resulta=mysqli_query($con,$querya);
                        if ($resulta) {
                          if (!isset($_GET['reload'])) {
                                    
                          echo '<meta http-equiv=Refresh content="0;url=Manage Properties.php?reload=1">';
                                }
                        }
                      }
                      }
                    }
                     ?>
                     <?php
                      
                      if (isset($_GET['del'])) {
                        $querya="UPDATE property_table SET STATUS = '0' WHERE PROPERTY_ID = ".$_GET['del']."";
                        $resulta=mysqli_query($con,$querya);
                        if ($resulta) {
                          if (!isset($_GET['reload'])) {
                                    
                          echo '<meta http-equiv=Refresh content="0;url=Manage Properties.php?reload=1">';
                                }
                        }
                      }
                     ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> -->
            </div>
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
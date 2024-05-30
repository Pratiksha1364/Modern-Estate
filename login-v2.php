<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modern Estate | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="icon" type="image/x-icon" href="admin/dist/img/AdminLTELogo.png">

  <style>
  </style>
</head>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
<div id="codefund"><!-- fallback content --></div>
<script src="../../../../../../../codefund.io/properties/441/funder.js" async="async"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body>
	<!-- Demo bar start -->
  <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}

/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<body>
<?php
include "useradmin.php";
?>
<div class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Modern </b>Estate</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in</p>

      <form method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="lemail"  placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
<!--               <span class="fas fa-envelope"></span>
 -->            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name="lpass"  placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
<!--               <span class="fas fa-lock"></span>
 -->            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember"id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <br><br>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="lsubmit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
      <?php
      if (isset($_POST['lsubmit']))
      {
        $lemail=$_POST['lemail'];
        $sql="SELECT * FROM login_table WHERE EMAIL='".$lemail."' And STATUS=1";   
        $result = mysqli_query($con, $sql);  
        $lpass=$_POST['lpass'];
        while($value=mysqli_fetch_array($result))
        {  
        $pass=$value['PASSWORD'];
        $hash=password_verify($lpass, $pass);
        }
        if($hash=1)
        {
       $sql="SELECT * FROM login_table WHERE EMAIL='".$lemail."'  AND ROLE=1 AND STATUS=1";   
        $result = mysqli_query($con, $sql);  
        $sql1="SELECT * FROM login_table WHERE EMAIL='".$lemail."'  AND ROLE=0 AND STATUS=1";   
        $result1 = mysqli_query($con, $sql1); 
        $sql2="SELECT * FROM login_table WHERE EMAIL='".$lemail."'  AND ROLE=2 AND STATUS=1";   
        $result2 = mysqli_query($con, $sql2); 
        if(mysqli_num_rows($result)== 1)
        {  
          echo "<br><h5><center> Login successful </center></h5>";
          $sq="UPDATE login_table SET ONLINE=1 WHERE EMAIL='".$lemail."' ";
          $run=mysqli_query($con,$sq);
                    if (!isset($_GET['reload'])) 
                    {
                      $_SESSION['gmailuser']=$lemail;
                      echo '<meta http-equiv=Refresh content="0;url=user/index.php?reload=1">';
                    }
                    
          } 
          
          elseif(mysqli_num_rows($result1)== 1){  
                  $sq="UPDATE login_table SET ONLINE=1 WHERE EMAIL='".$lemail."'";
                  $run=mysqli_query($con,$sq);
                  echo "<br><h5><center> Login successful </center></h5>";
                  
                  if (!isset($_GET['reload'])) {
                    $_SESSION['gmail']=$lemail;
                    echo '<meta http-equiv=Refresh content="0;url=admin/index.php?reload=1">';
                        }  
                  
                  }  
                  elseif(mysqli_num_rows($result2)== 1){  
                    $sq="UPDATE login_table SET ONLINE=1 WHERE EMAIL='".$lemail."'";
                    $run=mysqli_query($con,$sq);
                    echo "<br><h5><center> Login successful </center></h5>";
                    
                    if (!isset($_GET['reload'])) {
                      $_SESSION['gmailbroker']=$lemail;
                      echo '<meta http-equiv=Refresh content="0;url=broker/index.php?reload=1">';
                          }  
                    
                    } 
          
         
          else{
            echo "<h5><br> Login failed. <br> Invalid username or password.</h5>";  
            }   
             
        }
      }
      
      ?>
      <br>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password-v2.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register-v2.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
    </div>
<!-- /.login-box -->
 <?php
  include "userfooter.php";
  ?>
<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>

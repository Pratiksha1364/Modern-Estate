<?php
include "connection.php";
session_start();
?>
<?php
if(!isset($_SESSION['gmailuser']))
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Morden Estate | Edit Profile </title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <link rel="icon" type="image/x-icon" href="../admin/dist/img/AdminLTELogo.png">

</head>
<body>
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



<!-- Topmenu-4 block -->
<?php
include "useradmin.php";
?>
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>    
            <li><a href="index.php">Home</a> <span class="fa fa-angle-double-right"></span></li>
            <li>Edit Profile</li>
        </ul>
    </div>
</section>
<?php
          // print_r($_SESSION);
          $nm=$_SESSION['gmailuser'];
          $querys="SELECT * FROM login_table WHERE EMAIL='$nm'";
          $sq=mysqli_query($con,$querys);
          while ($value = mysqli_fetch_array($sq)) 
			    {
            ?>
<!-- Headers-4 block -->
<section class="w3l-features-12" >
  <div class="container">  
<div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="<?php echo $value['NAME'];?>" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="mail" name="mail" value="<?php echo $value['EMAIL'];?>" class="form-control" id="exampleInputPassword1" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Profile Image</label><br>
                    <input type="file" id="exampleInputPassword1" accept="image/jpg,image/jpeg,image/png" name="image">
                  </div>
         
                  <?php
                $nm=$_SESSION['gmailuser'];
                $gh="SELECT * FROM login_table WHERE EMAIL='$nm'";
                $an=mysqli_query($con,$gh);
                $vl=mysqli_fetch_array($an);
                $l=$vl['LOGIN_ID'];
                $query = "SELECT * FROM profileimage_table WHERE LOGIN_ID='$l' AND STATUS=1 ORDER BY TIMESTAMP desc";
                $result= mysqli_query($con,$query);
                $value = mysqli_fetch_array($result);
              ?>
              <img src="../admin/profile_image/<?php echo $value['IMAGE_NAME'];?>" onerror=this.src="bgimgs.png" style="width:20%; height:20%;" alt="User Image">
              <br>
              <br>
                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <a href="recover-password-v2.php"><button type="button" class="btn btn-primary " >Change Password</button></a>
                </div>
                </div>
             
              </form>
            </div>
            <?php
              }
              ?>
            
          <?php
    if (isset($_POST['submit'])) {
			// $pname=$_POST['name'];
			// $mail=$_POST['mail'];
      $nm1=$_SESSION['gmailuser'];
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
				move_uploaded_file($_FILES['image']['tmp_name'],"../admin/profile_image/".$image_path);
			}
      
      $query = "INSERT INTO profileimage_table(LOGIN_ID,IMAGE_NAME,STATUS,TIMESTAMP) VALUES ('$lid','$image_path',1,'$a')";
      $sql = mysqli_query($con,$query);
		
    if ($sql) {
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
</section>
	<!---728x90--->

<!-- footer-29 block -->
<?php
include "userfooter.php"
?>
<!-- //footer-29 block -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
    <!-- /move top -->


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>

</html>
<?php
}
?>
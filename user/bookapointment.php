<?php
include 'connection.php';
session_start();
?>
<?php
if(!isset($_SESSION['gmailuser']))
{
    $mail=$_SESSION['gmailuser'];
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
  <title>Mother Estate | Book Apointment </title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="ism/css/my-slider.css"/>
  <link rel="icon" type="image/x-icon" href="../admin/dist/img/AdminLTELogo.png">

<script src="ism/js/ism-2.2.min.js"></script>
</head>
<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
    (function ($) {
  $(function () {


    $('.slider').slick({
      dots: true,
      prevArrow: '<a class="slick-prev slick-arrow" href="#" style=""><div class="icon icon--ei-arrow-left"><svg class="icon__cnt"><use xlink:href="#ei-arrow-left-icon"></use></svg></div></a>',
      nextArrow: '<a class="slick-next slick-arrow" href="#" style=""><div class="icon icon--ei-arrow-right"><svg class="icon__cnt"><use xlink:href="#ei-arrow-right-icon"></use></svg></div></a>',
      customPaging: function (slick, index) {
        var targetImage = slick.$slides.eq(index).find('img').attr('src');
        return '<img src=" ' + targetImage + ' "/>';
      }
    });


  });
})(jQuery);

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


<?php
include "useradmin.php";
?>
<?php
 $l=$_SESSION['gmailuser'];
 $q="SELECT * FROM LOGIN_TABLE WHERE EMAIL='$l'";
 $r=mysqli_query($con,$q);
 $value = mysqli_fetch_array($r);
 $lid= $value['LOGIN_ID'];
 $id= $_GET['id'];
 $sid=$_GET['?ref'];
 $query = "SELECT * FROM appointment_table WHERE PROPERTY_ID=$id AND  STATUS=1 AND LOGIN_ID=$lid ";
 $result= mysqli_query($con,$query);
 if(mysqli_num_rows($result)>=1)
 {
   echo "<script>alert('You Alrady Have An Active Appointment For This Property.');</script>";
 }
 ?>
<!-- Headers-4 block -->
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>    
            <li><a href="index.php">Home</a> <span class="fa fa-angle-double-right"></span></li>
            <li>Book Apointment</li>
        </ul>
    </div>
</section>
<div class="container">
<div class="row" >
<div class="col" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Schedule Appointment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    
                    <input type="text" name="name"  class="form-control" id="exampleInputEmail1"placeholder="Enter Name" placeholder="Enter Name" required>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    
                    <input type="email" name="email" value="<?php    $mail=$_SESSION['gmailuser'];
             echo $mail; ?>"class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>
                  
                      <div class="form-group">
                        <label>Select Platform Where You Want Appointmnet Scheduled </label>
                        <select name="platform" class="form-control" required>
                        <option value="" disabled selected hidden>-----Select Platform-----</option>
                          <option>Google Meet</option>
                          <option>Microsoft Teams</option>
                          <option>Zoom</option>
                          <option>Webex</option>
                          <option>Skype</option>
                          <option id="om">Offline Meeting</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Select Date </label>
                        <select name="date" class="form-control" required>  
                        <option value="" disabled selected hidden>-----Select Date-----</option>
                        <option>
                          <?php
                          date_default_timezone_set('Asia/calcutta');
                          $dt=date('Y-m-d H:i:s');
                          $date = strtotime("+1 day", strtotime($dt));
                          echo date("d-m-Y", $date);
                          ?></option>
                        <option>
                          <?php
                          date_default_timezone_set('Asia/calcutta');
                          $dt=date('Y-m-d H:i:s');
                          $date = strtotime("+2 day", strtotime($dt));
                          echo date("d-m-Y", $date);
                          ?></option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Select Suitable Time Slot For Appointment</label>
                        <select name="time" class="form-control" required>
                        <option value="" disabled selected hidden>-----Select Timeslot-----</option>
                          <option>08:00am - 10:00am</option>
                          <option>10:00am - 12:00am</option>
                          <option>02:00pm - 04:00pm</option>
                          <option>04:00pm - 06:00pm</option>
                          <option>06:00pm - 08:00pm</option>
                        </select>
                      </div>
                    
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="sch"class="btn btn-primary">Schedule</button>
                  <button type="submit" name="can"class="btn btn-primary">Cancel</button>

                </div>
              </form>
            </div>
            <?php
            if(isset($_POST['can']))
            {
                if (!isset($_GET['reload'])) 
                            {
                        echo '<meta http-equiv=Refresh content="0;url=index.php?reload=1">';
                            } 
            }
            if(isset($_POST['sch']))
            {
              
                date_default_timezone_set('Asia/calcutta');
                $dts=date('Y-m-d H:i:s');
                $l=$_SESSION['gmailuser'];
                $q="SELECT * FROM LOGIN_TABLE WHERE EMAIL='$l'";
                $r=mysqli_query($con,$q);
                $value = mysqli_fetch_array($r);
                $lid= $value['LOGIN_ID'];
                $pid=$_GET['id'];
                $sid=$_GET['?ref'];
                $email=$_POST['email'];
                $pf=$_POST['platform'];
                $ts=$_POST['time'];
                $nm=$_POST['name'];
                $dt=$_POST['date'];
                
                $qu="INSERT INTO appointment_table(LOGIN_ID, PROPERTY_ID,SELLER_ID,NAME,EMAIL_ID,DATE, TIME_SLOT, PLATFORM, TIMESTAMP,STATUS) 
                VALUES ('$lid','$pid','$sid','$nm','$email','$dt','$ts','$pf','$dts',1)";
                $r=mysqli_query($con,$qu);
                if($r)
                {
                    echo "<script>alert('Your Appointment Request Is Succesfully Submited To Seller. They Will Contact You Via Mail Within 24 Hours,Thank You')</script>";
                    if (!isset($_GET['reload'])) 
                            {
                        echo '<meta http-equiv=Refresh content="0;url=index.php?reload=1">';
                            } 
                }
                else
                {
                    echo "<script>alert('Something Went Wrong')</script>";
                }
              
            }
            ?>
</div>
</div>
</div>
<?php
include "userfooter.php";
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

<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/07-04-2020/tenant-freedom-demo_Free/421164263/web/properties-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Sep 2021 09:39:41 GMT -->
</html>
<?php
}
?>
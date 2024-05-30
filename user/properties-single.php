<?php
include 'connection.php';
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
  <title>Morden Estate |  </title>
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
<!-- Headers-4 block -->
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>    
            <li><a href="index.php">Home</a> <span class="fa fa-angle-double-right"></span></li>
            <li>Properties single</li>
        </ul>
    </div>
</section>

<!-- Blog -->
<section class="w3l-blog-single">
    <div class="single blog">
        <div class="wrapper">
                <h3 class="heading-title">Property details</h3>
            <div class="d-grid grid-colunm-2">
                <!-- left side blog post content -->
                <div class="single-left">
                    <?php
                    	$id= $_GET['id'];
                        $qry="SELECT * FROM property_table WHERE PROPERTY_ID='$id'";
	                    $result = mysqli_query($con,$qry);
                        while($value = mysqli_fetch_array($result)){
                            $conid=$value['PROPERTY_ID'];
                            $propadd=$value['ADDRESS'];
                            $propdesc=$value['DESCRIPTION'];
                            $propprice=$value['PRICE'];
                            $propcat=$value['PROPERTY_CAT_ID'];
                            $proptype=$value['PROPERTY_TYPE_ID'];
                            $propstatus=$value['STATUS'];
                            $propbroom=$value['BEDROOM'];
                            $propkit=$value['KITCHEN'];
                            $prophall=$value['HALL'];
                            $propbyear=$value['BUILTYEAR'];
                            $proptime=$value['TIMESTAMP'];  
                            $propst=$value['SOLD'];
                            $propsize=$value['PROPERTY_SIZE'];
                            $propuid=$value['LOGIN_ID'];
                        }
                    ?>
                    <div class="single-left1">
                       <br>
                        <h5 class="card-title no-margin">	
                          <?php

                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$proptype'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo  $row['PROERTY_TYPE_NAME']." For ";
                        } 
                        ?><!--Rentals--> 
                        <?php 
                        if($propcat==1)
                        {
                            echo "Sale";
                        }
                        else{
                            echo "Rentl";
                        }
                        ?>
                        - <span class="price">from &#8377; <!--750--><?php 
                            if(strlen($propprice)>=5)
                            { 
                              echo substr($propprice,0,2).",".substr($propprice,2,3);
                            } else{
                              echo $propprice;
                            }?></span></h5><br><br>
                        <p class="address"><span class="fa fa-map-marker"></span> <!--#32841 block, #221DRS Real estate business building, UK.--><?php echo $propadd;?></p>
                        <!-- <img src="assets/images/blog-5.jpg" alt=" " class="img-responsive" /> -->

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

                        <h5 class="card-title">Description </h5><br><br><br><br>
                        <p class="">
                            <!-- Fermentum viverra eros. Praesent neque purus, rhoncus nec nibh non, mollis sodales odio. Nullam
                            facilisis diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices.
                            Aliquam ac arcu	interdum, dapibus nibh convallis, semper augue.	 -->
                            <?php
                            echo $propdesc;
                             ?>
                        </p>
                        <p class="">
                            <!-- Fermentum viverra eros. Praesent neque purus, rhoncus nec nibh non, mollis sodales odio. Nullam
                            facilisis diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices.
                            Aliquam ac arcu	interdum, dapibus nibh convallis, semper augue. -->
                        	</p>
                    </div>
                    <!-- <div class="social-share">
                        <h3 class="aside-title">Share this property </h3>
                        <div class="social-icons-section">
                            <a class="facebook" href="#team">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a class="twitter" href="#team">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a class="instagram" href="#team">
                                <span class="fa fa-instagram"></span>
                            </a>
                            <a class="pinterest" href="#team">
                                <span class="fa fa-pinterest"></span>
                            </a>
                        </div>
                    </div> -->
					<!---728x90--->

                    <div class="single-left1">
                        <h5 class="card-title">Details </h5><br><br><br><br>
                        <ul class="details-list">
                            <li><strong>Property id :</strong> <?php echo $conid;?> </li>
                            <li><strong>Property size :</strong><?php echo $propsize."sqft"; ?>  </li>
                            <li><strong>Kitchen :</strong> <?php echo $propkit;?> </li>
                            <li><strong>Bedrooms :</strong> <?php echo $propbroom;?> </li>
                            <li><strong>Hall :</strong> <?php echo $prophall;?> </li>
                            <li><strong>Property Price :</strong> &#8377; <?php if(strlen($propprice)>=5)
                            { 
                              echo substr($propprice,0,2).",".substr($propprice,2,3);
                            } else{
                              echo $propprice;
                            }?> </li>
                            <li><strong>Built Year :</strong> <?php echo $propbyear; ?> </li>
                            <li><strong>Avaiable from :</strong> <?php echo substr($proptime,0,4);?></li>
                        </ul>
                        <?php 
                        if($propst==0)
                        {
                          ?>
                            <a href="bookapointment.php?id=<?php echo $id?>&?ref=<?php echo $propuid;?>"<button type="button" name="ba" class="btn btn-block btn-outline-primary">Book Apointment </button></a>
                          
                        <?php
                          
                        }
                        ?>
                        
                    </div>
                  
                   
                    <!-- <div class="single-left1">
                        <h5 class="card-title">Map </h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4686815.853469242!2d-7.185058593750004!3d54.99967515853579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2sin!4v1568270144870!5m2!1sen!2sin"></iframe>
                    </div> -->
                </div>
                <!-- left side blog post content -->
                
                <!-- right side bar -->
                <div class="right-side-bar">
                    <!-- <aside>
                        <h3 class="aside-title mb-3">Search your property</h3>
                        <form class="form-inline subscribe-form" action="#" method="post">
                            <input class="form-control" type="search" placeholder="Search" aria-label="email" required="">
                            <button class="btn text-wh mt-3 w-100" type="submit">Search</button>
                        </form>
                    </aside> -->
                    <aside class="">
                        <h3 class="aside-title mb-3">Our listings</h3>
                        <?php
                        $ca="SELECT * FROM property_type";
                        $r=mysqli_query($con,$ca);
                        while($v=mysqli_fetch_array($r))
                        {
                        ?>
                        <ul class="listings-list">
                        <li><a href="properties.php?type=<?php echo $v['PROPERTY_TYPE_ID'];?>"><?php echo $v['PROERTY_TYPE_NAME']; ?> 
                        <?php 
                        $n=$v['PROPERTY_TYPE_ID'];
                        $n="SELECT * FROM property_table WHERE PROPERTY_TYPE_ID='$n'";
                        $mn=mysqli_query($con,$n);
                        $count= mysqli_num_rows($mn);
                            echo "(".$count.")";
                        ?>
                        </a></li>
                        <?php
                        }
                        ?>  
                    </aside>
					<!---728x90--->

          <aside class="posts p-4 border">
                        <h3 class="aside-title">Featured properties</h3>
                            <div class="posts-grid">
                            <?php
                      $sql = "SELECT * FROM property_table WHERE STATUS=1 ORDER BY TIMESTAMP desc LIMIT 3 ";
                      $result=mysqli_query($con,$sql);
                      while ($value=mysqli_fetch_array($result)) {
                      $pid=$value['PROPERTY_ID'];
                      $ptid=$value['PROPERTY_TYPE_ID'];
                      $propcat=$value['PROPERTY_CAT_ID'];
                    //  echo $pid;
                      $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                      $r=mysqli_query($con,$q);
                      $v=mysqli_fetch_assoc($r)
                      
                  ?>
                                <div class="posts-grid-left pr-0">
                                
                                    <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                                        <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>" alt=" " class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                                <div class="posts-grid-right">
                                    <h4>
                                        <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>" class="text-bl"> <?php
                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo  $row['PROERTY_TYPE_NAME']." For ";
                        } 
                        ?>
                        <?php 
                        if($propcat==1)
                        {
                            echo "Sale";
                        }
                        else{
                            echo "Rent";
                        }
                        ?></a>
                                    </h4>
                                    <span class="price"> from &#8377; <!--750--><?php $propprice=$value['PRICE']; echo substr($propprice,0,2).",".substr($propprice,2,3);?> </span>
                                    
                                    
                                </div><?php
                      }
                      ?>
                            </div>
                            
                    </aside>
                    <!-- <aside class="">
                        <h3 class="aside-title mb-3">Post Ad here</h3>
                    </aside> -->
                </div>
                <!-- //right side bar -->
            </div>
        </div>
    </div>    
</section>
<!-- //blog single-->
<!---728x90--->

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
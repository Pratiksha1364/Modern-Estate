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
  <title>Morden Estate | About Page </title>
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
<!-- Headers-4 block -->
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>    
            <li><a href="index.php">Home</a> <span class="fa fa-angle-double-right"></span></li>
            <li>About us</li>
        </ul>
    </div>
</section>
<!-- Content-23 block -->
<section class="w3l-content-23">
    <div id="content23-block">
        <div class="wrapper">
            <div class="content23-head text-center">
                <h3>We provide comprehensive services to property investors.</h3>
                <p>Rawness and refinement are not opposite ends of a luxurious spectrum. They are two complementary features with which to populate a luxe environment. </p>
            </div>
            <div class="d-grid content23-col-2 text-center">
                <div class="content23-grid">
                    <h4><a href="properties.php?id=10">Fantastic Homes</a></h4>
                    <p>Service to Other is the rent you pay for your room here on earth.</p>
                </div>
                <div class="content23-grid1">
                    <h4><a href="properties.php?id=10">luxurious Apartments</a></h4>
                    <p>Owning a home is a leystone of wealth... both financial affluence and emotional security.<</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content-23 block -->
<!---728x90--->

 <!-- content-photo-7 -->
 <!-- <section class="w3l-content-photo-7">
	<div class="content-photo_sur">
		<div class="wrapper">
				<h3 class="heading-title">Special Deals</h3>
				<div class="content-photo-1 d-grid">
					<div class="content-photo-left_sur">

						<h4>Park avenue apartment for rent</h4>
						<span class="price">$ 240/month</span>
						<p>Donec vestibulum metus ut eros condimentum, sit amet maximus felis sed et porttitor. Nullam risus libero,
							euismod non nisi a, lacinia facilisis odio. Integer eleifend, leo vitae gravida iaculis, leo dolor
							venenatis libero, nec faucibus risus mi quis dolor. In interdum iaculis convallis. Aenean in 
							porttitor erat. Donec non tincidunt ligula leo vitae gravida iaculis ipsum dolor. </p>
						<a href="properties-single.html">Get this deal</a>
					</div>
                    
					<div class="content-photo-right_sur">
						<div class="csslider infinity" id="slider1">
								<input type="radio" name="slides" checked="checked" id="slides_1" />
								<input type="radio" name="slides" id="slides_2" />
								<input type="radio" name="slides" id="slides_3" />
								<input type="radio" name="slides" id="slides_4" />
								<ul class="banner_slide_bg">
                    <?php
                    $qu="SELECT * FROM property_table WHERE PROPERTY_CAT_ID=2 ORDER BY TIMESTAMP desc";
                    $result=mysqli_query($con,$qu);
                    while($value=mysqli_fetch_array($result))
                    {
                        $pid=$value['PROPERTY_ID'];
                    $sq="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                    
                    $results=mysqli_query($con,$sq);
                    while($im=mysqli_fetch_assoc($results))
                    {
                    
                    ?>
									<li>
										<img class="img" src="../admin/properties_image/<?php echo $im['IMAGE_NAME'];?>" alt="">
									</li>
                                    <?php
                    }
                }
                    ?>
								</ul>
								<div class="arrows">
									<label for="slides_1"></label>
									<label for="slides_2"></label>
									<label for="slides_3"></label>
									<label for="slides_4"></label>
								</div>
								<div class="navigation">
									<div>
										<label for="slides_1"></label>
										<label for="slides_2"></label>
										<label for="slides_3"></label>
										<label for="slides_4"></label>
									</div>
								</div>
                               
						</div>


					</div>
                </div>
        </div>
	</div>
</section> -->
<!-- //content-photo-7 -->
<!---728x90--->

<!-- <section class="w3l-customers-8">
    <div class="customers-main">
        <div class="wrapper">
            <h3 class="heading-title">Testimonials</h3>
            <div class="customer">
                <div class="card">
                    <img class="card-img-top" src="assets/images/testi1.jpg" alt="card image">
                    <div class="card-body">
                        <a href="#testimonial" class="customer-link">
                            <h3 class="card-title">Paul Walkner</h3><br><br><br>
                        </a>
                        <p>Customer of estate</p>
                        <p class="card-text">Nam non enim nisi. Suspendie et potenti. Cras leaeget blandit mi, eu ultrices metus.
                            pellentes que habitant morbi tristique ut senectus et netus et malesuada fames ac turpis egestas
                            dolor sit amet.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/testi2.jpg" alt="card image">
                    <div class="card-body">
                        <a href="#testimonial" class="customer-link">
                            <h3 class="card-title">Alexander Smith</h3><br><br><br>
                        </a>
                        <p>Customer of estate</p>
                        <p class="card-text">Nam non enim nisi. Suspendie et potenti. Cras leaeget blandit mi, eu ultrices metus.
                            pellentes que habitant morbi tristique ut senectus et netus et malesuada fames ac turpis egestas
                            dolor sit amet.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/testi3.jpg" alt="card image">
                    <div class="card-body">
                        <a href="#testimonial" class="customer-link">
                            <h3 class="card-title">Johnson Laura</h3><br><br><br>
                        </a>
                        <p>Customer of estate</p>
                        <p class="card-text">Nam non enim nisi. Suspendie et potenti. Cras leaeget blandit mi, eu ultrices metus.
                            pellentes que habitant morbi tristique ut senectus et netus et malesuada fames ac turpis egestas
                            dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!---728x90--->

<!-- specifications -->
<!-- <section class="w3l-specifications-9">
    <div class="main-w3">
        <div class="wrapper">
            <div class="d-flex main-cont-wthree-fea">
                <div class="grids-speci">
                    <h3 class="title-spe">13+</h3>
                    <p>Years of experience</p>
                </div>
                <div class="grids-speci midd-eff-spe">
                    <h3 class="title-spe">558</h3>
                    <p>Trusted clients</p>
                </div>
                <div class="grids-speci">
                    <h3 class="title-spe">200+</h3>
                    <p>Rented flats in Uk</p>
                </div>
                <div class="grids-speci">
                    <h3 class="title-spe">120</h3>
                    <p>Homes owned by customers</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //specifications -->
<!-- </section> -->
<section class="w3l-content-18">
    <div class="content-main">
        <div class="wrapper">
            <div class="content-info">
                <h3 class="content-title">If you want to know more about company, Contact us</h3>
                <a href="contact.php" class="contact">Contact us</a>
                <!-- <a href="#link" class="read">Read more</a> -->
            </div>
        </div>
    </div>
</section>
<!-- footer-29 block -->
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

<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/07-04-2020/tenant-freedom-demo_Free/421164263/web/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Sep 2021 09:39:34 GMT -->
</html>
<?php
}
?>
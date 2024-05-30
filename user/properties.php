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
  <title>Morden Estate | Properties </title>
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
            <li>Properties</li>
        </ul>
    </div>
</section>

<div class="w3l-products-4">
    <!-- Products4 block -->
    <div id="products4-block" class="text-center">

        <div class="wrapper">
            <section class="text-left">
              <?php
              if(isset($_GET['type']))
              {
                $type=$_GET['type'];
              ?>
                <h3 class="heading-title">Properties</h3>
                <div class="d-grid grid-col-3">
                  <?php
                      $sql = "SELECT * FROM property_table WHERE STATUS=1 AND PROPERTY_TYPE_ID='$type' ORDER BY TIMESTAMP desc ";
                      $result=mysqli_query($con,$sql);
                      while ($value=mysqli_fetch_array($result)) {
                      $pid=$value['PROPERTY_ID'];
                      $ptid=$value['PROPERTY_TYPE_ID'];
                      $propcat=$value['PROPERTY_CAT_ID'];
                    //  echo $pid;
                    $propsts=$value['SOLD'];
                  if($propsts==1 || $propsts==2)
                  {
                      $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                      $r=mysqli_query($con,$q);
                      $v=mysqli_fetch_assoc($r)
                      
                  ?>
                <div class="product">
                <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                        <?php 
                        if($propcat==1)
                        {
                            echo "Sold";
                        }
                        elseif($propcat==2){
                            echo "Rented";
                        }
                        ?>
                        </div>
                        </div>
                        <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                        <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>" style="width:100%;"class="img-responsive" alt="" />
                      </a>
                        <div class="info-bg">
                            <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                            <?php
                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo  ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
                        } 
                        ?>
                        <?php 
                        if($propcat==1)
                        {
                            echo "Sale";
                        }
                        elseif($propcat==2){
                            echo "Rent";
                        }
                        ?>
                          </a></h5>
                            <span class="price"><!--$ 240/month-->&#8377; <!--750--> <?php 
if(strlen($value['PRICE'])>=5) {  echo
substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
$value['PRICE']; }?></span>
                            <p><!--Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.--><?php echo substr($value['DESCRIPTION'],0,60);?></p>
                            <ul>
                              <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>                                <!-- <li><span class="fa fa-bed"></span> 3</li>
                                <li><span class="fa fa-bath"></span> 3</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li> -->
                            </ul>
                        </div>
                    </div>
                    <?php
                  }
                  else{
                    $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                    $r=mysqli_query($con,$q);
                    $v=mysqli_fetch_assoc($r)
                    
                ?>
              <div class="product">
             
                      <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                      <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>"style="width:100%;" class="img-responsive" alt="" />
                    </a>
                      <div class="info-bg">
                          <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                          <?php
                      $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                      while($row=mysqli_fetch_assoc($res)){
                        
                          echo  ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
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
                      ?>
                        </a></h5>
                          <span class="price"><!--$ 240/month-->&#8377; <!--750--> <?php 
if(strlen($value['PRICE'])>=5) {  echo
substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
$value['PRICE']; }?></span>
                          <p><!--Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.--><?php echo substr($value['DESCRIPTION'],0,60);?></p>
                          <ul>
                              <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>                              <!-- <li><span class="fa fa-bed"></span> 3</li>
                              <li><span class="fa fa-bath"></span> 3</li>
                              <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li> -->
                          </ul>
                      </div>
                  </div>
                  
                      <?php
                              }}
                            }
                            
                      ?>      
            <?php
              
              if(isset($_GET['id']))
              {
              
              
                $id=$_GET['id'];
              if($id==1)
              {
                ?>
                <h3 class="heading-title">Properties For Sale</h3>
                <div class="d-grid grid-col-3">
                  <?php
                      $sql = "SELECT * FROM property_table WHERE STATUS=1 AND PROPERTY_CAT_ID=1 ORDER BY TIMESTAMP desc ";
                      $result=mysqli_query($con,$sql);
                      while ($value=mysqli_fetch_array($result)) {
                      $pid=$value['PROPERTY_ID'];
                      $ptid=$value['PROPERTY_TYPE_ID'];
                      $propcat=$value['PROPERTY_CAT_ID'];
                    //  echo $pid;
                    $propsts=$value['SOLD'];
                  if($propsts==1 || $propsts==2)
                  {
                      $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                      $r=mysqli_query($con,$q);
                      $v=mysqli_fetch_assoc($r)
                      
                  ?>
                <div class="product">
                <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                        <?php 
                        if($propcat==1)
                        {
                            echo "Sold";
                        }
                        elseif($propcat==2){
                            echo "Rented";
                        }
                        ?>
                        </div>
                        </div>
                        <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                        <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>"style="width:100%;" class="img-responsive" alt="" />
                      </a>
                        <div class="info-bg">
                            <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                            <?php
                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo  ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
                        } 
                        ?>
                       <?php 
                        if($propcat==1)
                        {
                            echo "Sale";
                        }
                        elseif($propcat==2){
                            echo "Rent";
                        }
                        ?>
                          </a></h5>
                            <span class="price"><!--$ 240/month-->&#8377; <!--750--> <?php 
if(strlen($value['PRICE'])>=5) {  echo
substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
$value['PRICE']; }?></span>
                            <p><!--Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.--><?php substr($value['DESCRIPTION'],0,60);?></p>
                            <ul>
                              <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>                                <!-- <li><span class="fa fa-bed"></span> 3</li>
                                <li><span class="fa fa-bath"></span> 3</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li> -->
                            </ul>
                        </div>
                    </div>
                    <?php
                  }
                  else{
                    $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                    $r=mysqli_query($con,$q);
                    $v=mysqli_fetch_assoc($r)
                    
                ?>
              <div class="product">
              
                      <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                      <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>"style="width:100%;" class="img-responsive" alt="" />
                    </a>
                      <div class="info-bg">
                          <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                          <?php
                      $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                      while($row=mysqli_fetch_assoc($res)){
                        
                          echo  ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
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
                      ?>
                        </a></h5>
                          <span class="price"><!--$ 240/month-->&#8377; <!--750--> <?php 
if(strlen($value['PRICE'])>=5) {  echo
substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
$value['PRICE']; }?>  </span>
                          <p><!--Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.--><?php echo substr($value['DESCRIPTION'],0,60);?></p>
                          <ul>
                              <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>                              <!-- <li><span class="fa fa-bed"></span> 3</li>
                              <li><span class="fa fa-bath"></span> 3</li>
                              <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li> -->
                          </ul>
                      </div>
                  </div>
                  
                      <?php
                              }}
                      ?>                 
                    </div>
                <?php
              }
              elseif($id==2)
              {
                ?>
                <h3 class="heading-title">Properties For Rent</h3>
                <div class="d-grid grid-col-3">
                <?php
                    $sql = "SELECT * FROM property_table WHERE STATUS=1 AND PROPERTY_CAT_ID=2 ORDER BY TIMESTAMP desc ";
                    $result=mysqli_query($con,$sql);
                    while ($value=mysqli_fetch_array($result)) {
                    $pid=$value['PROPERTY_ID'];
                    $ptid=$value['PROPERTY_TYPE_ID'];
                    $propcat=$value['PROPERTY_CAT_ID'];
                  //  echo $pid;
                  $propsts=$value['SOLD'];
                  if($propsts==1 || $propsts==2)
                  {
                    $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                    $r=mysqli_query($con,$q);
                    $v=mysqli_fetch_assoc($r)
                    
                ?>
              <div class="product">
             <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                        <?php 
                        if($propcat==1)
                        {
                            echo "Sold";
                        }
                        elseif($propcat==2){
                            echo "Rented";
                        }
                        ?>
                        </div>
                      </div>
                      <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                      <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>"style="width:100%;" class="img-responsive" alt="" />
                    </a>
                      <div class="info-bg">
                          <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                          <?php
                      $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                      while($row=mysqli_fetch_assoc($res)){
                        
                          echo  ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
                      } 
                      ?>
                      <?php 
                        if($propcat==1)
                        {
                            echo "Sale";
                        }
                        elseif($propcat==2){
                            echo "Rent";
                        }
                        ?>
                        </a></h5>
                          <span class="price"><!--$ 240/month-->&#8377; <!--750--> <?php 
if(strlen($value['PRICE'])>=5) {  echo
substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
$value['PRICE']; }?></span>
                          <p><!--Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.--><?php echo substr($value['DESCRIPTION'],0,60);?></p>
                          <ul>
                              <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>                              <!-- <li><span class="fa fa-bed"></span> 3</li>
                              <li><span class="fa fa-bath"></span> 3</li>
                              <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li> -->
                          </ul>
                      </div>
                  </div>
                  <?php
                  }
                  else{
                    
                    $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                    $r=mysqli_query($con,$q);
                    $v=mysqli_fetch_assoc($r)
                    
                ?>
              <div class="product">
           
                      <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                      <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>" style="width:100%;"class="img-responsive" alt="" />
                    </a>
                      <div class="info-bg">
                          <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                          <?php
                      $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                      while($row=mysqli_fetch_assoc($res)){
                        
                          echo  ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
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
                      ?>
                        </a></h5>
                          <span class="price"><!--$ 240/month--><?php echo $value['PRICE']; ?></span>
                          <p><!--Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.--><?php echo substr($value['DESCRIPTION'],0,60);?></p>
                          <ul>
                              <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>                              <!-- <li><span class="fa fa-bed"></span> 3</li>
                              <li><span class="fa fa-bath"></span> 3</li>
                              <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li> -->
                          </ul>
                      </div>
                  </div>
                  
                    <?php
                  }
                            }
                         
                    ?>                 
                  </div>
                     <?php
              }
            
            elseif($id==10)
            {
              ?>
              <h3 class="heading-title">All Properties</h3>
              <div class="d-grid grid-col-3">
                  <?php
                      $sql = "SELECT * FROM property_table WHERE STATUS=1 ORDER BY TIMESTAMP desc ";
                      $result=mysqli_query($con,$sql);
                      while ($value=mysqli_fetch_array($result)) {
                      $pid=$value['PROPERTY_ID'];
                      $ptid=$value['PROPERTY_TYPE_ID'];
                      $propcat=$value['PROPERTY_CAT_ID'];
                      $propst=$value['SOLD'];
                      if($propst==1 || $propst==2)
                      {
                      //  echo $pid;
                      $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                      $r=mysqli_query($con,$q);
                      $v=mysqli_fetch_assoc($r)
                      
                  ?>
                  
                <div class="product">
                  <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                          <?php 
                          if($propcat==1)
                          {
                            echo "Sold";
                          }
                          elseif($propcat==2){
                            echo "Rented";
                          }
                          ?>
                        </div>
                      </div>
                        <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                        <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>" style="width:100%;"class="img-responsive" alt="" />
                      </a>
                        <div class="info-bg">
                            <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                            <?php
                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo  ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For ";
                        } 
                        ?>
                        <?php 
                        if($propcat==1)
                        {
                            echo "Sale";
                        }
                        elseif($propcat==2){
                            echo "Rent";
                        }
                        ?>
                          </a></h5>
                            <span class="price"><!--$ 240/month-->&#8377; <!--750--> <?php 
if(strlen($value['PRICE'])>=5) {  echo
substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
$value['PRICE']; }?></span>
                            <p><!--Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.--><?php echo substr($value['DESCRIPTION'],0,60);?></p>
                            <ul>
                              <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>                                <!-- <li><span class="fa fa-bed"></span> 3</li>
                                <li><span class="fa fa-bath"></span> 3</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li> -->
                            </ul>
                        </div>
                    </div>
                    <?php
                      }
                      else{
                        $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
                      $r=mysqli_query($con,$q);
                      $v=mysqli_fetch_assoc($r)
                      ?>

                      <div class="product">
                 
                        <a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                        <img src="../admin/properties_image/<?php echo $v['IMAGE_NAME'];?>"style="width:100%;" class="img-responsive" alt="" />
                      </a>
                        <div class="info-bg">
                            <h5><a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                            <?php
                        $res=mysqli_query($con,"select PROERTY_TYPE_NAME from property_type WHERE PROPERTY_TYPE_ID='$ptid'");
                        while($row=mysqli_fetch_assoc($res)){
                          
                            echo 
ucwords(strtolower($row['PROERTY_TYPE_NAME']))." For "; }  ?> <?php 
if($propcat==1) { echo "Sale"; } else{ echo "Rent"; } ?> </a></h5> <span
class="price"><!--$ 240/month-->&#8377; <!--750--> <?php 
if(strlen($value['PRICE'])>=5) {  echo
substr($value['PRICE'],0,2).",".substr($value['PRICE'],2,3); } else{ echo
$value['PRICE']; }?></span> <p><!--Nulla ex nunc, interdum nec egestas nec,
dapibus ac mauris. Vivamus id tempor nisl.-->
<?php echo substr($value['DESCRIPTION'],0,60);?></p> <ul> 
  <li style="color: skyblue;"><?php echo date('d F Y ', strtotime($value['TIMESTAMP'])); ?></li>  
<!-- <li><span class="fa fa-bed"></span> 3</li>
<li><span class="fa fa-bath"></span> 3</li> <li><span class="fa
fa-share-square-o"></span> 1200 sq ft</li> --> </ul> </div> </div> <?php }  }
?>                  </div> <?php } } ?> </div> <br>
 
            </section>

        </div>
</div>
        
    </div>


<!---728x90--->

<!---728x90--->

<!-- js -->
<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- jquery latest version 3.4.1 -->
<script src="assets/js/owl.carousel.js"></script> <!-- owl carousel -->

<script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false,
                        margin: 20
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })
    </script>
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

</html>
<?php
}

?>
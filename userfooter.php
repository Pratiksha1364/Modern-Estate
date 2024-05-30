<section class="w3l-footer-29-main">
    <div class="footer-29">
        <div class="wrapper">
            <div class="d-grid grid-col-4 footer-top-29">
                <div class="footer-list-29 footer-1">
                    <h6 class="footer-title-29">Contact Us</h6>
                    <ul>
                        <li><p><span class="fa fa-map-marker"></span> Estate Business, #32841 block, #221DRS Real estate business building, UK.</p></li>
                        <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
                        <li><a href="mailto:estate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> estate-mail@support.com</a></li>
                    </ul>
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <div class="footer-list-29 footer-2">
                    <ul>
                        <h6 class="footer-title-29">Category</h6>
                        <?php
                        $ca="SELECT * FROM property_type LIMIT 5 ";
                        $r=mysqli_query($con,$ca);
                        while($v=mysqli_fetch_array($r))
                        {
                        ?>
                        <li><a href="#link"><?php echo $v['PROERTY_TYPE_NAME']; ?> 
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
                    </ul>
                </div>
                <div class="footer-list-29 footer-3">
                    <div class="properties">
                        <h6 class="footer-title-29">Latest Properties</h6>
                        <?php
    $sql = "SELECT * FROM property_table WHERE STATUS=1 ORDER BY TIMESTAMP desc LIMIT 4";
    $result=mysqli_query($con,$sql);
    while ($value=mysqli_fetch_array($result)) {
    $pid=$value['PROPERTY_ID'];
    $ptid=$value['PROPERTY_TYPE_ID'];
    $propcat=$value['PROPERTY_CAT_ID'];
    $propprice=$value['PRICE'];
    $q="SELECT * FROM image_table WHERE PROPERTY_ID='$pid' ORDER BY IMAGE_ID desc";
    $r=mysqli_query($con,$q);
    $v=mysqli_fetch_assoc($r)
    
?>

<a href="properties-single.php?id=<?php echo $value['PROPERTY_ID'];?>">
                        <img src="admin/properties_image/<?php echo $v['IMAGE_NAME'];?>" class="img-responsive" style="height: 90%; width:90%;" />
                        <p><?php
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
                        <span>from &#8377; <!--750--><?php echo substr($propprice,0,2).",".substr($propprice,2,3);?></span></p>
                    </a>
<?php } ?>                     
                    </div>
                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="about.php">About company</a></li>
                        <li><a href="properties.php">Featured properties</a></li>
                        <li><a href="team.php">Professional Agents</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="contact.php">Get in touch</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-grid grid-col-2 bottom-copies">
                    <p class="copy-footer-29">© 2023 Modern Estate. All rights reserved | Designed by Team Modern Estate</p>
                
            </div>
        </div>
    </div>
</section>
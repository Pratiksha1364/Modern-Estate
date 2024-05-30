<!-- /Topmenu-4 block -->
<!-- Headers-4 block -->

<section class="w3l-header-4">
    <header id="headers4-block">
        <div class="wrapper">
            <div class="d-grid nav-mobile-block header-align">
                <div class="logo">
                    <a class="brand-logo" href="index.php"><span>Morden Estate</span></a>
                    <!-- if logo is image enable this   
                    <a class="brand-logo" href="#index.php">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
                </div>
                <input type="checkbox" id="nav" />
                <label class="nav" for="nav"></label>
                <nav>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop">
                    <ul class="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li>
                            <!-- sumenu Drop Down -->
                            <label for="drop-3" class="toggle toogle-3">More <span class="angle-dropdown"
                                    aria-hidden="true"></span>
                            </label>
                            <a href="#pages">More <span class="angle-dropdown" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-3">

                            <ul>
                                <!-- <li><a href="team.php" class="drop-text">Our Team</a></li> -->
                                <li><a href="properties.php?id=10" class="drop-text">Properties</a></li>
                                <!-- <li><a href="timeline.php" class="drop-text">Timeline</a></li> -->
                                <li><a href="faq.php" class="drop-text">Faq</a></li>
                                <li><a href="feedback.php" class="drop-text">Feedback</a></li>
                               <?php
                                $nme=$_SESSION['gmailuser'];
                                $gh="SELECT * FROM login_table WHERE EMAIL='$nme'";
                                $an=mysqli_query($con,$gh);
                                $vl=mysqli_fetch_array($an);
                                $l=$vl['LOGIN_ID'];
                                // $id=$value['APPOINTMENT_ID'];
                                $sq="SELECT * FROM appointment_table WHERE LOGIN_ID=$l ";
                                $rsq=mysqli_query($con,$sq);

                                if(mysqli_num_rows($rsq)>=1)
                                {
                               ?>
                                <li><a href="appointment.php" class="drop-text">Appointments</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                        
                        <li><a href="contact.php">Contact</a></li>
                        
                        <li class="nav-item user-menu" id="up">
                        <a href="#" class="nav-link " data-toggle="dropdown" >
                        <?php
                            $nme=$_SESSION['gmailuser'];
                            $gh="SELECT * FROM login_table WHERE EMAIL='$nme'";
                            $an=mysqli_query($con,$gh);
                            $vl=mysqli_fetch_array($an);
                            $l=$vl['LOGIN_ID'];
                                $query = "SELECT IMAGE_NAME FROM profileimage_table WHERE LOGIN_ID='$l' AND STATUS=1  ORDER BY TIMESTAMP desc";
                                $result= mysqli_query($con,$query);
                            if($result)
                                {
                                $value = mysqli_fetch_array($result); 
                                 
                            ?>
                            <img src="../admin/profile_image/<?php echo $value['IMAGE_NAME'];?>" class="user-image img-circle elevation-2" alt="User Image DB" onerror=this.src="bgimgs.png" style="width: 50px; height:50px;" >
                            <?php
                                }
                            ?>
                        <!-- <span class="d-none d-md-inline">Alexander Pierce -->
                        
                        <!-- <?php
                        $nm=$_SESSION['gmailuser'];
                        $querys="SELECT * FROM login_table WHERE EMAIL='$nm'";
                        $sq=mysqli_query($con,$querys);
                        while ($value = mysqli_fetch_array($sq)) 
                                {
                            echo $value['NAME'];
                        }
                        ?> -->
                        
                        </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu" style="background:transparent;outline:none; border:0px solid white;box-shadow:none; border-radius:0%; margin-top:50%; margin-left:-100%; padding: -10px;">
                        <!-- User image -->
                        <li class="user-header bg-primary" style="border:none; align-items: center; border:0px solid white; border-radius:10px;">
                        <?php
                            $nme=$_SESSION['gmailuser'];
                            $gh="SELECT * FROM login_table WHERE EMAIL='$nme'";
                            $an=mysqli_query($con,$gh);
                            $vl=mysqli_fetch_array($an);
                            $l=$vl['LOGIN_ID'];
                                $query = "SELECT * FROM profileimage_table WHERE LOGIN_ID='$l' AND STATUS=1  ORDER BY TIMESTAMP desc";
                                $result= mysqli_query($con,$query);
                                if($result)
                                {
                                $value = mysqli_fetch_array($result);
                                
                            ?>
                                <img src="../admin/profile_image/<?php echo $value['IMAGE_NAME'];?>"" onerror=this.src="bgimgs.png" style="margin-left: 20%; padding: 10px; width:60%"  class="img-circle " alt="User Image">
                                <?php
                                }
                                ?>
                        <br>
                            <p align="center">
                            <?php
                            $nm=$_SESSION['gmailuser'];
                            $querys="SELECT * FROM login_table WHERE EMAIL='$nm'";
                            $sq=mysqli_query($con,$querys);
                            while ($value = mysqli_fetch_array($sq)) 
                            {
                                echo $value['NAME'];
                            
                            ?>
                            <small><br>Member since <?php  echo date('F Y', strtotime($value['DATE/TIME'])); ?> </small>
                            <?php }
                            ?>
                            <br>
                                <a href="editprofile.php" class=" btn-primary btn-block" style="width:40%; border-radius:5px; float:left; margin-top:5%;">Edit Profile</a>
                                <a href="logout.php" class=" btn-primary btn-block" style="width:40%; float:right; border-radius:5px; margin-top:-0px; margin-top:5%;">Logout</a>
                            </p> 
                        </li>
                    </ul>
                </li>
                <li class="nav-item user-menu" id="dp"> 
                        <a href="editprofile.php" class="nav-link " data-toggle="dropdown" >
                        <?php
                            $nme=$_SESSION['gmailuser'];
                            $gh="SELECT * FROM login_table WHERE EMAIL='$nme'";
                            $an=mysqli_query($con,$gh);
                            $vl=mysqli_fetch_array($an);
                            $l=$vl['LOGIN_ID'];
                                $query = "SELECT IMAGE_NAME FROM profileimage_table WHERE LOGIN_ID='$l' AND STATUS=1  ORDER BY TIMESTAMP desc";
                                $result= mysqli_query($con,$query);
                            if($result)
                                {
                                $value = mysqli_fetch_array($result); 
                                 
                            ?>
                            <img src="../admin/profile_image/<?php echo $value['IMAGE_NAME'];?>" class="user-image img-circle elevation-2" alt="User Image DB" onerror=this.src="user2.jpg" style="width: 50px; height:50px;" >
                            <?php
                                }
                            ?>
                        <!-- <span class="d-none d-md-inline">Alexander Pierce -->
                        
                        <!-- <?php
                        $nm=$_SESSION['gmailuser'];
                        $querys="SELECT * FROM login_table WHERE EMAIL='$nm'";
                        $sq=mysqli_query($con,$querys);
                        while ($value = mysqli_fetch_array($sq)) 
                                {
                            echo $value['NAME'];
                        }
                        ?> -->
                        
                        </span>
                        </a>
                    </li>

                    <li id="lot"><a href="logout.php"><button type="button" class="btn btn-block btn-outline-primary">Logout</button></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</section>
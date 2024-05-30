<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li> -->
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <?php
            $nm=$_SESSION['gmailbroker'];
            $gh="SELECT * FROM login_table WHERE EMAIL='$nm'";
           $an=mysqli_query($con,$gh);
           $vl=mysqli_fetch_array($an);
           $l=$vl['LOGIN_ID'];
            $query = "SELECT * FROM profileimage_table WHERE LOGIN_ID='$l' AND STATUS=1 ORDER BY TIMESTAMP desc";
            $result= mysqli_query($con,$query);
            if($result)
            {
            $value = mysqli_fetch_array($result);
            
          ?>
            <img src="profile_image/<?php echo $value['IMAGE_NAME'];?>"" class="user-image img-circle elevation-2" alt="UI" onerror=this.src="user2.jpg">
            <?php
            }
            else{
              ?>
          <img src="dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <?php
            }
          ?>
          <!-- <span class="d-none d-md-inline">Alexander Pierce -->
          <?php
          //print_r($_SESSION);
          $nm=$_SESSION['gmailbroker'];
          $querys="SELECT * FROM login_table WHERE EMAIL='$nm'";
          $sq=mysqli_query($con,$querys);
          while ($value = mysqli_fetch_array($sq)) 
			    {
            echo $value['NAME'];
          }
          ?>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
          <?php
           $nme=$_SESSION['gmailbroker'];
           $gh="SELECT * FROM login_table WHERE EMAIL='$nme'";
           $an=mysqli_query($con,$gh);
           $vl=mysqli_fetch_array($an);
           $l=$vl['LOGIN_ID'];
            $query = "SELECT * FROM profileimage_table WHERE LOGIN_ID='$l' AND STATUS=1  ORDER BY TIMESTAMP desc";
            $result= mysqli_query($con,$query);
            $value = mysqli_fetch_array($result);
            
          ?>
            <img src="profile_image/<?php echo $value['IMAGE_NAME'];?>"" class="img-circle elevation-2" alt="User Image" onerror=this.src="user2.jpg">
            
            <p>
              <?php
              $nm=$_SESSION['gmailbroker'];
              $querys="SELECT * FROM login_table WHERE EMAIL='$nm'";
              $sq=mysqli_query($con,$querys);
              while ($value = mysqli_fetch_array($sq)) 
              {
                echo $value['NAME'];
              
              ?>
              <small><br>Member since <?php  echo date('"F Y"', strtotime($value['DATE/TIME'])); ?> </small>
                            <?php }
                            ?>
            </p>
          </li>
          <!-- Menu Body -->
          
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="editprofile.php" class="btn btn-block btn-outline-primary" >Edit Profile</a>
            <a href="recover-password-v2.php" class="btn btn-block btn-outline-primary" >Change Password</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="btn btn-block btn-outline-primary">Sign out</a>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
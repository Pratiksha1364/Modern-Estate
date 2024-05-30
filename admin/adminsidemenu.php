
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Modern Estate</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
        <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item meu-open">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <!-- <li class="nav-header" ><i class="fa fa-building"></i>&nbsp&nbsp&nbspPROPERTY</li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Properties
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add Property.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Add Properties</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Manage Properties.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Properties</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Manage Property Types.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Property Type</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-header"><i class="fa fa-user"></i>&nbsp&nbsp&nbspADMIN&nbsp</li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Broker
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add Admin.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Add Broker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Manage Admin.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Broker</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Broker
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add Broker.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Add Broker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Manage Broker.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Broker</p>
                </a>
              </li>
              
            </ul>
          </li> -->
          <!-- <li class="nav-header"><i class="fa fa-users"></i>&nbsp&nbsp&nbspUSER &nbsp</li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage Users.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Users</p>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- <li class="nav-header"<i class="fa fa-comments"></i>&nbsp&nbsp&nbspCONTACT US&nbsp</li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
                Contact Us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage Query.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Query</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- <li class="nav-header"><i class="fa fa-question"></i>&nbsp&nbsp&nbspFREQUENTLY ASKED QUESTIONS&nbsp</li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-question"></i>
              <p>
                Faq
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add Question.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Add Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Manage Questions.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Questions</p>
                </a>
              </li>

            </ul>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Apointments
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage Appointments.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Appointments</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Feedback
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage Feedback.php" class="nav-link">
                  <i class="far fa-arrow nav-icon"></i>
                  <p>Manage Feedback</p>
                </a>
              </li>

            </ul>
          </li>
                  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

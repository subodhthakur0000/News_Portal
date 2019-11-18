<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/dashboard')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto">
    </ul>
     <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('node_modules/admin-lte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Creatu Developers</span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('node_modules/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  Creatu Developers
                  <small>admin</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/dashboard')}}" class="brand-link"> 
      <span class="brand-image img-circle elevation-3" style="opacity: .8"><b>N</b></span>
      <span class="brand-text font-weight-light"><b>NewsPortal</b></span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">DASHBOARD</li>
          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt text-warning"></i>
              <p class="text">Dashboard</p>
            </a>
          </li>
          <li class="nav-header">NEWS</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/add_news')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('view_news')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View News</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MEDIA</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-medium text-success"></i>
              <p>
                Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('view_audio')}}" class="nav-link">
                  <i class="fas fa-file-audio nav-icon"></i>
                  <p>Audio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('view_file')}}" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>File</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('view_video')}}" class="nav-link">
                  <i class="fas fa-video nav-icon"></i>
                  <p>Video</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-header">ADVERTISEMENT</li>
          <li class="nav-item">
            <a href="{{url('/view_advertisement')}}" class="nav-link">
              <i class="nav-icon fas fa-ad text-secondary"></i>
              <p class="text">Advertisement</p>
            </a>
          </li>
          <li class="nav-header">COMMENTS AND REPLIES</li>
          <li class="nav-item">
            <a href="{{url('/comment')}}" class="nav-link">
              <i class="nav-icon far fa-comment text-danger"></i>
              <p class="text">Comment</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/reply')}}" class="nav-link">
              <i class="nav-icon fas fa-comment text-secondary"></i>
              <p>Reply</p>
            </a>
          </li>
          <li class="nav-header">WRITER INFO</li>
          <li class="nav-item">
            <a href="{{url('/writerinfo')}}" class="nav-link">
              <i class="nav-icon fas fa-user-edit text-primary"></i>
              <p class="text">Writer Info</p>
            </a>
          </li>
          <li class="nav-header">USER INFO</li>
          <li class="nav-item">
            <a href="{{url('/userinfo')}}" class="nav-link">
              <i class="nav-icon fas fa-users text-info"></i>
              <p class="text">User Info</p>
            </a>
          </li>
          <li class="nav-header">SEO SECTION</li>
          <li class="nav-item">
            <a href="{{url('/seo')}}" class="nav-link">
              <i class="nav-icon fas fa-search text-success"></i>
              <p class="text">Seo</p>
            </a>
          </li>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link">
              <i class="nav-icon fas fa-user-shield text-danger"></i>
              <p class="text">Admin</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
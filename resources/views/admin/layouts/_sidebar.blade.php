

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src=" {{ url('backend/dist/img/AdminLTELogo.png')}} " alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->




      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src=" {{ url('backend/dist/img/AdminLTELogo.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Campus Project </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src=" {{ url('backend/dist/img/user2-160x160.jpg')}} " class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href=" {{ url('admin/dashboard')}} " class="d-block" style="font-size: 25px">   {{ Auth::user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ url('admin/dashboard')}}" class="nav-link  @if(Request::segment(2) == 'dashboard') active @endif ">
              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>
                Dashboard
              </p>
            </a>
          </li>

          {{-- Home sidevar  --}}
          <li class="nav-item">
            <a href="{{ url('admin/home')}}" class="nav-link  @if(Request::segment(2) == 'home') active @endif ">
              <i class="nav-icon fas fa-home"></i>

              <p>
                Home
              </p>
            </a>
          </li>

          {{-- About sidevar --}}
          <li class="nav-item">
            <a href="{{ url('admin/about')}}" class="nav-link  @if(Request::segment(2) == 'about') active @endif ">
              <i class="nav-icon fas fa-info-circle"></i>

              <p>
                About
              </p>
            </a>
          </li>

          {{-- Watch now Sidevar --}}
          <li class="nav-item">
            <a href="{{ url('admin/watch_now')}}" class="nav-link  @if(Request::segment(2) == 'watch_now') active @endif ">
                <i class="nav-icon fas fa-video"></i>
              <p>
                Watch now
              </p>

            </a>
          </li>

          {{-- Features  --}}
          <li class="nav-item">
            <a href="{{ url('admin/features')}}" class="nav-link  @if(Request::segment(2) == 'features') active @endif ">
                <i class="nav-icon fas fa-key"></i>
              <p>
                Features
              </p>

            </a>
          </li>

          {{-- Our Team --}}
          <li class="nav-item">
            <a href="{{ url('admin/our_team')}}" class="nav-link  @if(Request::segment(2) == 'our_team') active @endif ">
                <i class="nav-icon fa fa-users" ></i>
              <p>
                Our Team
              </p>

            </a>
          </li>

          {{-- Testimonial --}}
          <li class="nav-item">
            <a href="{{ url('admin/testimonials')}}" class="nav-link  @if(Request::segment(2) == 'testimonials') active @endif ">
                <i class="nav-icon fa fa-quote-left" ></i>
              <p>
                Testimonials
              </p>

            </a>
          </li>

          {{-- Frequently Asked Questions --}}
          <li class="nav-item">
            <a href="{{ url('admin/faq')}}" class="nav-link  @if(Request::segment(2) == 'faq') active @endif ">
                <i class="nav-icon fa fa-question-circle" ></i>
              <p>
                FAQ
              </p>
            </a>
          </li>

          {{-- Contact us --}}
          <li class="nav-item">
            <a href="{{ url('admin/contact')}}" class="nav-link  @if(Request::segment(2) == 'contact') active @endif ">
                <i class="nav-icon fa fa-address-book" ></i>
              <p>
                Contact
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('admin/my_account')}}" class="nav-link  @if(Request::segment(2) == 'my_account') active @endif ">
              <i class="nav-icon fas fa-user"></i>

              <p>
                My Account
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('logout')}}" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>

              <p>
                Logout
              </p>
            </a>
          </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

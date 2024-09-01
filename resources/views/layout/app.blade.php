<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link href="{{ asset('assets/css2/bootstrap-creative.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-default-stylesheet" />
  <link href="{{ asset('assets/css2/app-creative.min.css') }}" rel="stylesheet" type="text/css"
    id="app-default-stylesheet" />

  <!-- Dark Mode CSS (disabled by default) -->
  <link href="{{ asset('assets/css2/bootstrap-creative-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-dark-stylesheet" disabled />
  <link href="{{ asset('assets/css2/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="app-dark-stylesheet" disabled />

  <!-- Icons CSS -->
  <link href="{{ asset('assets/css2/icons.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body data-layout-mode="detached"
  data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
      <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

          <!-- All-->

          <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
              role="button" aria-haspopup="false" aria-expanded="false">
              <img src="{{ asset("assets/images/users/user-1.jpg") }}" alt="user-image" class="rounded-circle" />
              <span class="pro-user-name ml-1">
                Geneva <i class="mdi mdi-chevron-down"></i>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
              <!-- item-->
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
              </div>
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-user"></i>
                <span>My Account</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-log-out"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
        <!-- LOGO -->
        <div class="logo-box">
          <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-dark.png" alt="" height="20" />
            </span>
          </a>

          <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-light.png" alt="" height="20" />
            </span>
          </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
          <li>
            <button class="button-menu-mobile waves-effect waves-light">
              <i class="fe-menu"></i>
            </button>
          </li>
          <li>
            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">
      <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
          <img src="{{ asset("assets/images/users/user-1.jpg") }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
          <p class="text-muted mt-2">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <ul id="side-menu">
            <li class="menu-title mt-2">INVENTORY</li>
            <li>
              <a href="{{ route('home') }}">
                <i data-feather="users"></i>
                <span> Dashboard </span>
              </a>
            </li>
            <li>
              <a href="#sidebarEcommerce" data-toggle="collapse">
                <i data-feather="users"></i>
                <span> Parties </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarEcommerce">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{ route('add-party') }}"><i data-feather="plus" class="pr-0 mr-1"></i>Add
                      New</a>
                  </li>
                  <li>
                    <a href="{{ route('manage-party') }}"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                      Parties</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#sidebarCrm" data-toggle="collapse">
                <i data-feather="edit"></i>
                <span> GST Billing </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarCrm">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{ route('add-gstBill') }}"><i data-feather="plus" class="pr-0 mr-1"></i>Create
                      bill</a>
                  </li>
                  <li>
                    <a href="{{ route('manage-gstBill') }}"><i data-feather="list" class="pr-0 mr-1"></i>Manage all
                      bills</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">
        @yield("content")        
      </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
  </div>

<!-- Vendor JS -->
<script src="{{ asset('assets/js2/vendor.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/libs2/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs2/apexcharts/apexcharts.min.js') }}"></script>

<!-- Dashboard 1 Init JS -->
<script src="{{ asset('assets/js2/pages/dashboard-1.init.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('assets/js2/app.min.js') }}"></script>

</body>

</html>
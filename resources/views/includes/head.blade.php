<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HHMS</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"> -->
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}"> -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div> -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="index3.html" class="nav-link">Home</a> -->
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Contact</a> -->
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a href="{{url('signout')}}" role="button">
          logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">HHMS</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if(Auth::user()->role_id == 1)
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('add_member')}}" class="nav-link">
                Add Member
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('get_re_allocate')}}" class="nav-link">
                Re-Allocation
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{url('get_leadermgt')}}" class="nav-link">
                Leadership
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('create_citizen')}}" class="nav-link">
                Register Citizen
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('list_of_citizen')}}" class="nav-link">
                List of Citizen
            </a>
          </li> 
          @elseif(Auth::user()->role_id == 2)
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('add_member')}}" class="nav-link">
                Add Member
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('get_re_allocate')}}" class="nav-link">
                Re-Allocation
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{url('create_citizen')}}" class="nav-link">
                Register Citizen
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('list_of_citizen')}}" class="nav-link">
                List of Citizen
            </a>
          </li>
          @elseif(Auth::user()->role_id == 3)
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('add_member')}}" class="nav-link">
                Add Member
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('get_re_allocate')}}" class="nav-link">
                Re-Allocation
            </a>
          </li> 
          @elseif(Auth::user()->role_id == 4)
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('add_member')}}" class="nav-link">
                Add Member
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('get_re_allocate')}}" class="nav-link">
                Re-Allocation
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{url('list_of_citizen')}}" class="nav-link">
                List of Citizen
            </a>
          </li>
           @elseif(Auth::user()->role_id == 5)
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('add_member')}}" class="nav-link">
                Add Member
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('get_re_allocate')}}" class="nav-link">
                Re-Allocation
            </a>
          </li> 
<!--           <li class="nav-item">
            <a href="{{url('get_leadermgt')}}" class="nav-link">
                Leadership
            </a>
          </li> -->
          <li class="nav-item">
            <a href="{{url('list_of_citizen')}}" class="nav-link">
                List of Citizen
            </a>
          </li>

          @elseif(Auth::user()->role_id == 6)
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('add_member')}}" class="nav-link">
                Add Member
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('get_re_allocate')}}" class="nav-link">
                Re-Allocation
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{url('my_houses')}}" class="nav-link">
                My houses
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
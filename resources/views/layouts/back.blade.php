<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{ $title ?? '' }}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,50" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/now-ui-dashboard.css')}}?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/sidebar-nav-item.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          School Managment
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('admin/dashboard')}}" class="nav-link @if(request()->routeIs('admin.dashboard'))active @endif">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/teachers')}}" class="nav-link @if(request()->routeIs('admin.teachers.*'))active @endif">
              <i class="fas fa-chalkboard-teacher"></i>
              <p>Teachers</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/students')}}" class="nav-link @if(request()->routeIs('admin.students.*'))active @endif">
              <i class="fas fa-user-graduate"></i>
              <p>Students</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/schoolClasses')}}" class="nav-link @if(request()->routeIs('admin.schoolClasses.*'))active @endif">
              <i class="fas fa-chalkboard"></i>
              <p>School Classes</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/studentParent')}}" class="nav-link @if(request()->routeIs('admin.studentParent'))active @endif">
              <i class="fas fa-user-tie"></i>
              <p>Student Details</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/attendance')}}" class="nav-link @if(request()->routeIs('admin.attendance'))active @endif">
              <i class="fas fa-user-tie"></i>
              <p>Attendance</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/subjects')}}" class="nav-link @if(request()->routeIs('admin.subjects.*'))active @endif">
              <i class="fas fa-user-tie"></i>
              <p>Subject</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/grades')}}" class="nav-link @if(request()->routeIs('admin.grades.*'))active @endif">
              <i class="fas fa-user-tie"></i>
              <p>Grade</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/roles')}}" class="nav-link @if(request()->routeIs('admin.roles.*'))active @endif">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Rols</p>
            </a>
          </li>

        </ul>
      </div>

    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="">{{ $title ?? 'Default Title' }}</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <div class="d-flex">
                  @auth('web')
                  <div class="ms-auto">
                    <i class="now-ui-icons users_single-02"></i>
                    {{Auth::guard('web')->user()->name}} |
                    <a href="#" onclick="document.getElementById('logout').submit()"> Logout</a>
                    <form id="logout" class="d-none" action="{{route('logout','web')}}" method="post">
                      @csrf
                    </form>
                  </div>
                  @endauth
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ $title ?? 'Default Title' }}</h4>
              </div>
              <div class="card-body">
                {{ $slot }}
              </div>

            </div>
          </div>
        </div>

      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li><a href="{{ route('front.home') }}" target="_blank">School Management</a></li>
              <li><a href="{{ route('front.aboutUs') }}" target="_blank">About Us</a></li>
            </ul>
          </nav>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/now-ui-dashboard.min.js')}}?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/demo/demo.js')}}"></script>

</body>

</html>
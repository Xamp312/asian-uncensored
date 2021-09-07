<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="/">
        <img src="/img/newLogoTest.jpg" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="/uploads/users/profile/{{Auth::user()->image}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <!-- <a href="examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a> -->
            <a class="dropdown-item  " href="{{route('home')}}">
              <i class="ni ni-tablet-button "></i> Dashboard
            </a>
            <a class="dropdown-item  " href="{{route('users')}}">
              <i class="ni ni-satisfied  "></i> Users
            </a>
            <a class="dropdown-item  " href="{{route('videos')}}">
              <i class="ni ni-settings-gear-65"></i> Videos
            </a>

            <a class="dropdown-item  " href="{{route('newCat')}}">
              <i class="ni ni-box-2 "></i> New Category
            </a>
        

        
            <div class="dropdown-divider"></div>
            <a href="{{route('logout')}}" class="dropdown-item">
              <i class="ni ni-button-power"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/">
                <img src="/images/logo.jpg">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form> -->
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="{{route('home')}}">
              <i class="ni ni-tablet-button text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="{{route('users')}}">
              <i class="ni ni-satisfied text-blue "></i> Users
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="{{route('videos')}}">
              <i class="ni ni-settings-gear-65 text-blue "></i> Videos
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="{{route('newCat')}}">
              <i class="ni ni-box-2 text-blue"></i> New Category
            </a>
          </li>
         
     


          <li class="nav-item">
            <a class="nav-link " href="{{route('ads')}}">
              <i class="ni ni-album-2 text-blue"></i> Ads
            </a>
          </li>


          <!-- <li class="nav-item">
            <a class="nav-link " href="examples/maps.html">
              <i class="ni ni-pin-3 text-orange"></i> Maps
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link " href="examples/profile.html">
              User profile
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link " href="examples/tables.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="examples/tables.html">
              <i class="ni ni-single-02 text-yellow"></i> Feedbacks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="examples/tables.html">
              <i class="ni ni-key-25 text-blue"></i> Facebook Posts
            </a>
          </li> -->
          <hr class="my-3">

          <li class="nav-item">
            <a class="nav-link " href="{{route('logout')}}">
              <i class="ni ni-button-power pb-1"></i> Logout
            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="examples/login.html">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li> -->
        </ul>
        <!-- Divider -->
        <!-- Heading -->
        <!-- <h6 class="navbar-heading text-muted">Documentation</h6> -->
        <!-- Navigation -->
        <!-- <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docs/components/alerts.html">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul> -->

      </div>
      <div class="col-xl-12">
  <!--       <div class="copyright text-center  text-muted">
          &copy; {{now()->year }} <br> <a href="#" class="font-weight-bold ml-1" target="_blank" style="color:red;">Asian Uncensored</a>
        </div> -->
      </div>
    </div>
  </nav>
  <div class="main-content">

<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{route('home')}}">Admin Dashboard</a>
        <!-- Form -->
        <!-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form> -->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="/uploads/users/profile/{{Auth::user()->image}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <!-- <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a> -->
              <a class="dropdown-item  " href="{{route('home')}}">
              <i class="ni ni-tablet-button "></i> Dashboard
            </a>
            <a class="dropdown-item  " href="{{route('users')}}">
              <i class="ni ni-satisfied  "></i> Users
            </a>
            <a class="dropdown-item  " href="{{route('videos')}}">
              <i class="ni ni-settings-gear-65  "></i> Videos
            </a>
            <a class="dropdown-item  " href="{{route('newCat')}}">
              <i class="ni ni-box-2 "></i> New Category
            </a>
        
            

            <div class="dropdown-divider"></div>
            <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
              <i class="ni ni-button-power"></i>
              <span>Logout</span>
            </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </li>
        </ul>
      </div>
    </nav>
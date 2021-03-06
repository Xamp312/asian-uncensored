<div class="d-none d-md-block d-lg-block d-sm-block">
    <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top ">
   
        &nbsp;&nbsp;
        <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button> &nbsp;&nbsp;
        <a class="navbar-brand " href="{{ route('landingPage') }}"><img class="img-fluid" alt="" src="/img/logo-6.png"
                style="height:28px;"></a>
    
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search"
            action="{{ route('searchVideo')}}">
            <div class="input-group">
    
    
                <input type="text" name="q" class="form-control" placeholder="Search for...">
                <div class="input-group-append">
                    <button class="btn btn-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    
    
    
        <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
    
    
            @if(\Auth::check())
    
            <li class="nav-item mx-1">
                <a class="nav-link" href="{{ route('videoUploadPage') }}">
                    <i class="fas fa-plus-circle fa-fw"></i>
                    Upload Video
                </a>
            </li>
    
    
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
                <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="Avatar" src="/uploads/users/profile/{{Auth::user()->image}}"> &nbsp
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route('home')}}"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My
                        Profile</a>
    
                    <a class="dropdown-item" href="/settings"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i
                            class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
                </div>
            </li>
    
            @else
    
            <li class="nav-item mx-1">
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt fa-fw"></i>
                    Login
                </a>
            </li>
    
    
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('register') }}">
                    <i class="fas fa-registered fa-fw"></i>
                    Register
                </a>
            </li>
    
    
            @endif
    
    
    
    
    
    
        </ul>
    
    </nav>
    
</div>





<div class="d-md-none d-lg-none">
    <nav class="navbar navbar-expand-lg " style="background-color: #232323 !important;">
      <a class="navbar-brand " style="width: 80%;margin-top: 10px;" href="{{ route('landingPage') }}">

        <img class="img-fluid" alt="" src="/img/logo-6.png"
                ></a>

        <button class="navbar-toggler btn-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"  > <i class="fa fa-bars" style="color: #222;margin-top: 4px;">
              
          </i></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">



          <ul class="navbar-nav mr-auto">
            
            <li>
                
     <form class="d-md-inline-block form-inline mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search" style="width: 45%;margin-left: 5px !important;" 
            action="{{ route('searchVideo')}}">
            <div class="input-group">
    
    
                <input type="text" name="q" class="form-control" placeholder="Search for...">
                <div class="input-group-append">
                    <button class="btn btn-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="{{ route('landingPage') }}" style="color:#fff;">
                    <i class="fas fa-fw fa-home"></i> &nbsp 
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="color:#fff;">
                    <i class="fas fa-fw fa-video"></i> &nbsp 
                    <span>Explore</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route ('topRated') }}">Top Rated</a>
                    <a class="dropdown-item" href="{{ route('mostViewsVideos') }}">Most Viewed</a>
                    <a class="dropdown-item" href="{{route ('mostLiked') }}">Most Liked</a>
                    <a class="dropdown-item" href="{{ route('latestVideos') }}">Latest Videos</a>
    
    
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/community" style="color:#fff;">
                    <i class="fas fa-fw fa-users"></i> &nbsp 
                    <span>Community</span>
                </a>
            </li>
    
            @if(\Auth::check())
    
            <li class="nav-item">
                <a class="nav-link" href="{{ route('videoUploadPage') }}" style="color:#fff;">
                    <i class="fas fa-fw fa-cloud-upload-alt"></i> &nbsp 
                    <span>Upload Video</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="/settings" style="color:#fff;">
                    <i class="fas fa-fw fa-cog "></i> &nbsp 
                    <span>Settings</span>
                </a>
            </li>
 
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal" style="color:#fff;">
                    <i class="fas fa-fw fa-sign-out-alt "></i> &nbsp 
                    <span>Logout</span>
                </a>
            </li>
 
            @else 
       <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" style="color:#fff;">
                                   <i class="fas fa-sign-in-alt fa-fw"></i>
 &nbsp 
                    <span>Login</span>
                </a>
            </li>

       <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}" style="color:#fff;">
                    <i class="fas fa-registered fa-fw"></i>
 &nbsp 
                    <span>Register</span>
                </a>
            </li>
    


            @endif





            <li class="nav-item channel-sidebar-list" style="padding-left: 0px;">
                <h6>
                    <i class="fas fa-fw fa-list-alt"></i> &nbsp
                    Categories</h6>
                <ul>
    
    
                    @foreach($category as $cat)
                    <li style="margin-left:2rem;">
                        <a href="{{route('categories', $cat->id)}}" style="color:#c0392b">
                            {{ $cat->name }}
                        </a>
                    </li>
                    @endforeach
    
    
                </ul>
            </li>
          </ul>
          
        </div>
      </nav>




</div>
    
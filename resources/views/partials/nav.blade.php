<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
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


        <!-- <li class="nav-item dropdown no-arrow mx-1">
<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-bell fa-fw"></i>
<span class="badge badge-danger">9+</span>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
</div>
</li>
<li class="nav-item dropdown no-arrow mx-1">
<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-envelope fa-fw"></i>
<span class="badge badge-success">7</span>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
</div>
</li> -->



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

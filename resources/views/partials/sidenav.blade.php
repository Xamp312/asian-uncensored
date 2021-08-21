<ul class="sidebar navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="{{ route('landingPage') }}">
<i class="fas fa-fw fa-home"></i>
<span>Home</span>
</a>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-fw fa-video"></i>
<span>Explore</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="forgot-password.html">Top Rated</a>
<a class="dropdown-item" href="login.html">Most Viewed</a>
<a class="dropdown-item" href="register.html">Most Likes</a>
<a class="dropdown-item" href="forgot-password.html">Latest Videos</a>


</li>

<li class="nav-item">
<a class="nav-link" href="/community">
<i class="fas fa-fw fa-users"></i>
<span>Community</span>
</a>
</li>

@if(\Auth::check())

<li class="nav-item">
<a class="nav-link" href="{{ route('videoUploadPage') }}">
<i class="fas fa-fw fa-cloud-upload-alt"></i>
<span>Upload Video</span>
</a>
</li>
@endif
<!-- <li class="nav-item">
<a class="nav-link" href="history-page.html">
<i class="fas fa-fw fa-history"></i>
<span>History Page</span>
</a>
</li> -->

<li class="nav-item channel-sidebar-list">
<h6><i class="fas fa-fw fa-list-alt"></i> &nbsp
 Categories</h6>
<ul>
<li style="margin-left:2rem;">
<a href="subscriptions.html" style="color:#c0392b">
Your Life
</a>
</li>

</ul>
</li>
</ul>

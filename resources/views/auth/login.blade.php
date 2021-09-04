@extends('layout-auth')

@section('content')


<section class="login-main-wrapper" style="height: auto;">
<div class="container-fluid pl-0 pr-0">
<div class="row no-gutters">
<div class="col-md-5 col-sm-12 p-5 bg-white">
<div class="">
<div class="text-center mb-5 login-main-left-header pt-4">
        <a href="{{ route('landingPage') }}">


<img src="img/logo-2.png" class="img-fluid" alt="LOGO">
</a>
<h5 class="mt-3 mb-3">Adult Video Sharing Platform</h5>
<p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<div class="form-group">




<label>Email address


@error('email')
    <br /> 
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</label>





<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
</div>
<div class="form-group">

            

<label>Password


  @error('password')
  <br />
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</label>


<input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
</div>
<div class="mt-4">
<div class="row">
<div class="col-12">
<button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign In</button>
</div>
</div>
</div>
</form>
<div class="text-center mt-5">
<p class="light-gray">Don’t have an account? <a href="{{ route('register')}}">Sign Up</a></p>
</div>
</div>
</div>



<div class="col-md-7 col-sm-12">
<div class="login-main-right bg-white p-5 mt-5 mb-5">
<div class="owl-carousel owl-carousel-login">
<div class="item">
<div class="carousel-login-card text-center">
<img src="img/login.png" class="img-fluid" alt="LOGO">
<h5 class="mt-5 mb-3">​Awesome Community</h5>
<p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
</div>
</div>
<div class="item">
<div class="carousel-login-card text-center">
<img src="img/login.png" class="img-fluid" alt="LOGO">
<h5 class="mt-5 mb-3">Custom Profile</h5>
<p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
</div>
</div>
<div class="item">
<div class="carousel-login-card text-center">
<img src="img/login.png" class="img-fluid" alt="LOGO">
<h5 class="mt-5 mb-3">Latest Videos</h5>
<p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
</div>
</div>
</div>
</div>
</div>




</div>
</div>
</section>
@endsection

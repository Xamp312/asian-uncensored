@extends('layout-auth')

@section('content')







<section class="login-main-wrapper">
<div class="container-fluid pl-0 pr-0">
<div class="row no-gutters">
<div class="col-md-5 p-5 bg-white full-height">
<div class="login-main-left">
<div class="text-center mb-5 login-main-left-header pt-4">
    <a href="{{ route('landingPage') }}">
<img src="img/logo-2.png" class="img-fluid" alt="LOGO">

</a>
</div>
                 <form method="POST" action="{{ route('register') }}">
                        @csrf

<div class="form-group">







<label>Full name


     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</label>





<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
</div>
<div class="form-group">

      
<label>Email Address


       @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</label>


<input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
</div>




<div class="form-group">

      
<label>Password

       @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</label>


<input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
</div>


                  

<div class="form-group">

      
<label>Confirm Password


</label>


<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>
          



<div class="mt-4">
<div class="row">
<div class="col-12">
<button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign Up</button>
</div>
</div>
</div>
</form>
<div class="text-center mt-5">
<p class="light-gray">Already have an account? <a href="{{ route('login')}}">Log in</a></p>
</div>
</div>
</div>
<div class="col-md-7">
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

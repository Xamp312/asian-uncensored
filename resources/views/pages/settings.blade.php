@extends('layout')


@section('head_page')
    <title>Asian Uncensored</title>
@endsection


@section('content')
@include('partials.nav')
<div id="wrapper">

    @include('partials.sidenav')



<div id="content-wrapper">
<div class="container-fluid upload-details">
<div class="row">
<div class="col-lg-12">
<div class="main-title">
<h6>Settings</h6>
</div>
</div>
</div>


     @if(\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {!! \Session::get('success') !!}
                    </div>


                    @endif
    <form action="{{ route('settingsUpdate') }}" method="POST" enctype="multipart/form-data">

    	@csrf
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Full Name <!-- <span class="required">*</span> --></label>
<input class="form-control border-form-control" placeholder="Full Name" type="text" value="{{ Auth::user()->name }}" name="name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Email </label>
<input class="form-control border-form-control" value="{{ Auth::user()->email }}" placeholder="Email" type="text" disabled="" name="email">
</div>
</div>
</div>



<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Profile Picture ( Optmial Dimension : 280 X 280 ) </label>
<input class="form-control border-form-control" name="profileimage"  placeholder="Profile Picture" type="file" style="padding:3px;">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Cover Picture ( Optmial Dimension : 1500 X 400 ) </label>
<input class="form-control border-form-control" name="coverimage"  placeholder="Cover Picture" type="file" style="padding:3px;">

</div>
</div>
</div>

<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label class="control-label">Facebook </label>
<input class="form-control border-form-control" value="{{ Auth::user()->facebook}}" name="facebook"  placeholder="Facebook" type="text">

</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label class="control-label">Twitter </label>
<input class="form-control border-form-control" value="{{ Auth::user()->twitter}}" name="twitter"  placeholder="Twitter" type="text">

</div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label class="control-label">Instagram </label>
<input class="form-control border-form-control" value="{{ Auth::user()->instagram}}" name="instagram"  placeholder="Instagram" type="text">

</div>
</div>

</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label class="control-label">About</label>
<textarea class="form-control border-form-control"  name="about">{{ Auth::user()->about }}</textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12 text-right">
<button type="button" class="btn btn-danger border-none"> Cencel </button>
<button type="submit"  class="btn btn-success border-none"> Save Changes </button>
</div>
</div>
</form>
</div>



</div>
</div>
</div>




        @endsection
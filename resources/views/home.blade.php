@extends('layout')


@section('head_page')
    <title>Asian Uncensored</title>


    <style type="text/css">
    	
    	.aboutBlock {
    		 background: #1c1c1c none repeat scroll 0 0;
     border-radius: 2px;
     transition-duration: 0.4s;
     margin-bottom: 10px;padding-top: 1rem;
    	}
    </style>
@endsection


@section('content')
@include('partials.nav')
<div id="wrapper">

    @include('partials.sidenav')



 <div class="single-channel-page" id="content-wrapper">
<div class="single-channel-image">
    @if($user->cover)
    <img class="img-fluid" alt="" src="uploads/users/{{$user->cover}}">

    @else
<img class="img-fluid" alt="" src="img/channel-banner.png">
@endif
<div class="channel-profile">
<img class="channel-profile-img" alt="" src="uploads/users/{{$user->image}}">
<div class="social hidden-xs">
Social &nbsp;
<a class="fb" href="{{$user->facebook}}">Facebook</a>
<a class="tw" href="{{$user->twitter}}">Twitter</a>
<a class="ig" href="{{$user->instagram}}">Instagram</a>
</div>
</div>
</div>
<div class="single-channel-nav">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="channel-brand" href="#">{{$user->name}}


<!--  <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span>
 -->
</a>



<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active showVideos">
<a class="nav-link " href="#" >Videos <span class="sr-only">(current)</span></a>
</li>
<!-- <li class="nav-item">
<a class="nav-link" href="#">Playlist</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Channels</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Discussion</a>
</li> -->
<li class="nav-item showAbout">
<a class="nav-link " href="#">About</a>
</li>


<li class="nav-item">
<a class="nav-link " href="/settings">Settings</a>
</li>


<!-- <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Donate
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li> -->
</ul>
<!-- <form class="form-inline my-2 my-lg-0">
<input class="form-control form-control-sm mr-sm-1" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button> &nbsp;&nbsp;&nbsp; <button class="btn btn-outline-danger btn-sm" type="button">Subscribe <strong>1.4M</strong></button>
</form> -->
</div>
</nav>
</div>


<div class="container-fluid">
<div class="video-block section-padding">






<div class="aboutBox" style="display: none;"> 
<div class="row">

<div class="col-md-12">
<div class="main-title">

<h6>About </h6>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 aboutBlock">
<div class="main-title">

<h6>{{ $user->about }}</h6>
</div>
</div>

</div>
</div>








<div class="videosBox">

<div class="row">

<div class="col-md-12">
<div class="main-title">
<!-- <div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div> -->
<h6>Videos</h6>
</div>
</div>

@foreach($videos as $video)

<div class="col-xl-3 col-sm-6 mb-3">
	<div class="video-card">
	<div class="video-card-image">
	<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
	<a href="{{ route('videoPage', $video->slug) }}"><img class="img-fluid" src="/uploads/thumbnails/{{ $video->image_name }}" alt=""></a>
	<!-- <div class="time">3:50</div>
	 -->

	</div>
<div class="video-card-body">
<div class="video-title">


  @if($video->isOwner())
        <a href="{{ route('editVideoPage',$video->id) }}" style="color:#BD2126;float: right;">
		    <span videoId="{{ $video->id }}" class="deletevideo pr-3" style="cursor: pointer;">

				<i class="fa fa-edit"></i>

	        </span>

        </a>
    @endif    
        

<a href="{{ route('videoPage', $video->slug) }}">{{ $video->title }}</a>
</div>
<div class="video-page text-success">
 {{ \App\Models\Category::find($video->category_id)->name }}  <!-- <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i> --></a>
</div>
<div class="video-view">
                                        {{ $video->views }} views &nbsp; <i class="fas fa-calendar-alt"></i> {{ $video->created_at->diffForHumans() }} 
</div>
</div>
</div>
</div>

@endforeach

</div>




</div>
</div>
</div>


</div>
</div>



@section('footer_page')

<script type="text/javascript">
	$(document).ready(function(){
		$('.showAboutBox').click(function(){

		});



	$(".showAbout").click(function(){

		$(".aboutBox").fadeIn("slow");
		


		$(this).addClass("active");

		$(".showVideos").removeClass("active");
		
		$(".videosBox").hide();

	});

	$(".showVideos").click(function(){
		$(".videosBox").fadeIn("slow");
		
		$(this).addClass("active");
		$(".showAbout").removeClass("active");

		$(".aboutBox").hide();

	});




	});

</script>


@endsection


        @endsection
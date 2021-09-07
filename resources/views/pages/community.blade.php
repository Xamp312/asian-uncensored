@extends('layout')


@section('head_page')
    <title>Asian Uncensored</title>
@endsection


@section('content')
@include('partials.nav')
<div id="wrapper">

    @include('partials.sidenav')



<div id="content-wrapper">
<div class="container-fluid pb-0">

               @include('partials.ads')

<div class="video-block section-padding">
<div class="row">
<div class="col-md-12">
<div class="main-title">

	<!-- 
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
 -->


<h6>Community</h6>
</div>
</div>


@foreach($users as $user)

<div class="col-xl-3 col-sm-6 mb-3">
<div class="channels-card">
<div class="channels-card-image">
<a href="{{ route('profile' , $user->slug )}}"><img class="img-fluid" src="/uploads/users/profile/{{ $user->image }}" alt=""></a>

</div>
<div class="channels-card-body">
<div class="channels-title" style="margin-top: 10px;">
<a href="{{ route('profile' , $user->slug )}}">{{ $user->name }}</a>
</div>
<div class="channels-view">
{{ \App\Models\Video::where('user_id', $user->id)->count() }} Videos
</div>
</div>
</div>
</div>


@endforeach


</div>


<div>




</div>


	@if ($users->lastPage() > 1)
<ul class="pagination justify-content-center pagination-sm mb-4">
    <li class="page-item {{ ($users->currentPage() == 1) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $users->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $users->lastPage(); $i++)
        <li class="page-item {{ ($users->currentPage() == $i) ? ' active' : '' }}">
            <a  class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="page-item {{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $users->url($users->currentPage()+1) }}" >Next</a>
    </li>
</ul>
@endif

</div>
<hr>



<!-- <div class="video-block section-padding">
<div class="row">
<div class="col-md-12">
<div class="main-title">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>



<h6>Featured Videos</h6>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="video-card">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">There are many variations of passages of Lorem</a>
 </div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="video-card">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">There are many variations of passages of Lorem</a>
</div>
<div class="video-page text-danger">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="video-card">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v7.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">There are many variations of passages of Lorem</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="video-card">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v8.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">There are many variations of passages of Lorem</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
</div>


</div>
</div>
 -->

</div>


</div>

</div>
</div>




        @endsection
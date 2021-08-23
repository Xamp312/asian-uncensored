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
            <div class="top-mobile-search">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mobile-search">
                            <div class="input-group">
                                <input type="text" placeholder="Search for..." class="form-control">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="top-category section-padding mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                 <!--            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div> -->
                            <h6>Video Categories</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-category">



                            @foreach($category as $cat)
                            <div class="item">
                                <div class="category-item">
                                    <a href="{{route('categories', $cat->id)}}">
                                        <h6>{{ $cat->name }}</h6>
                                        <p>{{ $cat->count }} Videos</p>
                                    </a>
                                </div>
                            </div>

                            @endforeach
                      
                   
                        
                  
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                   <!--          <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div> -->
                            <h6>Latest Videos</h6>
                        </div>
                    </div>


                    @foreach($videos as $video)
                     <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="{{ route('videoPage', $video->slug) }}"><i class="fas fa-play-circle"></i></a>
                                    <a href="{{ route('videoPage', $video->slug) }}"><img class="img-fluid" src="/uploads/thumbnails/{{ $video->image_name }}" alt=""></a>
<!--                                     <div class="time">3:50</div>
 -->                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="{{ route('videoPage', $video->slug) }}">{{ $video->title }}</a>
                                    </div>
                                    <div class="video-page text-success">
                                        {{ \App\Models\Category::find($video->category_id)->name }} 

                             <!--            <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a> -->
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
            <hr class="mt-0">


<div>
    
    @if ($videos->lastPage() > 1)
<ul class="pagination justify-content-center pagination-sm mb-4">
    <li class="page-item {{ ($videos->currentPage() == 1) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $videos->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $videos->lastPage(); $i++)
        <li class="page-item {{ ($videos->currentPage() == $i) ? ' active' : '' }}">
            <a  class="page-link" href="{{ $videos->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="page-item {{ ($videos->currentPage() == $videos->lastPage()) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $videos->url($videos->currentPage()+1) }}" >Next</a>
    </li>
</ul>
@endif

</div>

    <!--         <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <h6>Popular Channels</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="/img/s1.png" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button"
                                        class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button>
                                </div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="/img/s2.png" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button"
                                        class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button>
                                </div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="/img/s3.png" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button"
                                        class="btn btn-outline-secondary btn-sm">Subscribed
                                        <strong>1.4M</strong></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle"></i></span></a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="/img/s4.png" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button"
                                        class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button>
                                </div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>





        @endsection
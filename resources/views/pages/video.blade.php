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
<div class="video-block section-padding">
<div class="row">
<div class="col-md-8">
<div class="single-video-left">
<div class="single-video">
<iframe width="100%" height="315" src="../../../embed/8LWZSGNjuF0.html?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
</div>
<div class="single-video-title box mb-3">
<h2>


                                          <span style="float: right;">
                         








     	       @if($video->checkLike())
					<span videoId="{{ $video->id }}" class="likedvideo" style="cursor: pointer;color: #dd163b;">
						<i class="fa fa-thumbs-up"></i> Liked
					</span> 


			          <span videoId="{{ $video->id }}" class="likevideo" style="cursor: pointer;display: none;"> <i class="fa fa-thumbs-up"></i> Like
			         </span>   

                        &nbsp 

          
       <span videoId="{{ $video->id }}" class="dislikevideo" style="cursor: pointer;"> <i class="fa fa-thumbs-down"></i> Dislike
             </span>   


    <span videoId="{{ $video->id }}" class="dislikedvideo" style="cursor: pointer;color: #dd163b;display: none">
          
           <i class="fa fa-thumbs-down"></i> Disliked
     
      </span>  

             



                        @elseif($video->checkDislike())
<span videoId="{{ $video->id }}" class="likedvideo" style="cursor: pointer;color: #dd163b;display: none;">

<i class="fa fa-thumbs-up"></i> Liked

</span> 


          <span videoId="{{ $video->id }}" class="likevideo" style="cursor: pointer;"> <i class="fa fa-thumbs-up"></i> Like
         </span>   

                        &nbsp 

          
       <span videoId="{{ $video->id }}" class="dislikevideo" style="cursor: pointer;display: none"> <i class="fa fa-thumbs-down"></i> Dislike
             </span>   


    <span videoId="{{ $video->id }}" class="dislikedvideo" style="cursor: pointer;color: #dd163b;">
          
           <i class="fa fa-thumbs-down"></i> Disliked
     
      </span>  

             @else 

             <span videoId="{{ $video->id }}" class="likedvideo" style="cursor: pointer;color: #dd163b;display: none;">

<i class="fa fa-thumbs-up"></i> Liked

</span> 


          <span videoId="{{ $video->id }}" class="likevideo" style="cursor: pointer;"> <i class="fa fa-thumbs-up"></i> Like
         </span>   

                        &nbsp 

          
       <span videoId="{{ $video->id }}" class="dislikevideo" style="cursor: pointer;"> <i class="fa fa-thumbs-down"></i> Dislike
             </span>   


    <span videoId="{{ $video->id }}" class="dislikedvideo" style="cursor: pointer;color: #dd163b;display: none">
          
           <i class="fa fa-thumbs-down"></i> Disliked
     
      </span> 

                        @endif

            

    
</span> 
                  





	{{ $video->title }}





</h2>



<p class="mb-0">

<i class="fa fa-thumbs-up"></i>
    <a href="#" videoId="{{ $video->id }}" class="seevideoLikes"  data-toggle="modal" data-target="#modelseevideoLikes"  style="text-decoration: none;" >&nbsp 


   <span videoId="{{ $video->id }}" class="videoLikeCount" count="{{ $video->likes->count() }} "> {{ $video->likes->count() }} </span> People Like This

</a>
  
  &nbsp &nbsp 
<i class="fa fa-thumbs-down"></i>
<a href="#"  class="seevideoDislikes" videoId="{{ $video->id }}" style="text-decoration: none;" data-toggle="modal" data-target="#modelseevideoDislikes" >&nbsp 


   <span videoId="{{ $video->id }}" class="videoDislikeCount" count="{{ $video->dislikes->count() }}"> {{ $video->dislikes->count() }} </span> People Dislike This</a>







</div>
<div class="single-video-author box mb-3">


<div class="float-right"><button class="btn btn-danger" type="button">Subscribe <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button></div>
<img class="img-fluid" src="/img/{{ $video->user->image }}" alt="">



<p><a href="#"><strong>{{ $video->user->name}}</strong></a> 




	<!-- <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span>
 -->

</p>
<small>Published an {{ $video->created_at->diffForHumans() }}</small>




</div>


<div class="single-video-info-content box mb-3">



<h5 style="font-size:1rem;margin-top: 5px;">

	<span style="float:right">
			
<i class="fas fa-caret-down" style="color: #d63031;"></i>

	</span>


 <i class="fas fa-eye" style="color: #d63031;"></i> &nbsp Currently Watching: <span style="color: #d63031;font-weight: 600;"> 100 </span> </h5>
</div>
                




<div class="single-video-info-content box mb-3">


<h6>Description:</h6>
<p>{{ $video->description }}</p>
<p class="tags mb-0">
<span><a href="#">{{ \App\Models\Category::find($video->category_id)->name }} </a></span>
<span><a href="#">   	 {{ $video->views }} Total Views</a></span>

</p>
</div>

<div class="single-video-info-content box mb-3">



                        @if($video->isOwner())
                        &nbsp 

                        <a href="{{ route('videoPage', ['slug' => $video->id] ) }}" style="color:#fff;">
                            <span videoId="{{ $video->id }}" class="deletevideo" style="cursor: pointer;">

<i class="fa fa-trash"></i> &nbsp Delete

                        </a>
                              @endif    
</div>



</div>
</div>
<div class="col-md-4">
<div class="single-video-right">
<div class="row">
<div class="col-md-12">
<div class="adblock">
<div class="img">
Google AdSense<br>
336 x 280
</div>
</div>
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
<h6>Up Next</h6>
</div>
</div>
<div class="col-md-12">
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="/img/v1.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
<div class="video-title">
<a href="#">Here are many variati of passages of Lorem</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
 <div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
<div class="video-title">
<a href="#">Duis aute irure dolor in reprehenderit in.</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
<div class="video-title">
<a href="#">Culpa qui officia deserunt mollit anim</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
<div class="video-title">
<a href="#">Deserunt mollit anim id est laborum.</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
<div class="video-title">
<a href="#">Exercitation ullamco laboris nisi ut.</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
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
<div class="adblock mt-0">
<div class="img">
Google AdSense<br>
336 x 280
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
 <div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="btn-group float-right right-action">
<a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
</div>
</div>
<div class="video-title">
<a href="#">Duis aute irure dolor in reprehenderit in.</a>
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
</div>
</div>
</div>
</div>



</div>


</div>


@section('footer_page')
	

	<script type="text/javascript">
		$(document).ready(function(){
		     $(".likevideo").click(function(){
		               
		            var videoId = $(this).attr('videoId'); 

		                $(".likedvideo[videoId="+videoId+"]").fadeIn("slow");
						$(".dislikevideo[videoId="+videoId+"]").show();
		                $(".dislikedvideo[videoId="+videoId+"]").hide();

		                $(this).hide();

		                var likesCount = $(".videoLikeCount[videoId="+videoId+"]").attr("count");
		                $(".videoLikeCount[videoId="+videoId+"]").html(parseInt(likesCount)+1);


		                var react = 1;

		                alert(videoId);
		                // Like Ajax 
		                $.ajax({
		                      method: "POST",
		                      url: "/video/react",
		                      data: { videoId: videoId, react: react,  "_token": "{{ csrf_token() }}", }
		                    })
		                      .done(function( msg ) {
		                         // alert( "Data Saved: " + msg );
		                      });
		            });








              $(".dislikevideo").click(function(){
                // 
                var videoId = $(this).attr('videoId'); 

               $(".dislikedvideo[videoId="+videoId+"]").fadeIn("slow");
              $(".likevideo[videoId="+videoId+"]").show();
                $(".likedvideo[videoId="+videoId+"]").hide();
                $(this).hide();

                var dislikesCount = $(".videoDislikeCount[videoId="+videoId+"]").attr("count");
                $(".videoDislikeCount[videoId="+videoId+"]").html(parseInt(dislikesCount)+1);

                var react = 2;

                // Dislike Ajax
                 $.ajax({
                      method: "POST",
                      url: "/video/react",
                      data: { videoId: videoId, react: react,  "_token": "{{ csrf_token() }}", }
                    })
                      .done(function( msg ) {
                         // alert( "Data Saved: " + msg );
                      });
            });




				});

	</script>
@endsection

@endsection

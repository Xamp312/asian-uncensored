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

                       @include('partials.ads')



            <div class="row">
                <div class="col-lg-12">




                    @if(\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {!! \Session::get('success') !!}
                    </div>


                    @endif

                    <form action="{{ route('updateVideo') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" value="{{$video->id}}" name="id">
                        <div class="main-title">
                            <h6>Upload Details</h6>
                            
                        </div>
                        <div class="row">
                        <div class="col-3">
                        <img src="/uploads/thumbnails/{{$video->image_name}}" width="100%"  alt="">
                        </div>

                        <div class="col-3 ">
                        <video controls controlsList="nodownload" width="100%"  src="/uploads/videos/{{$video->video_name}}"></video>
                        </div>
                        </div>
                </div>
                <!-- <div class="col-lg-2">
<div class="imgplace"></div>
</div>
<div class="col-lg-10">
<div class="osahan-title">Contrary to popular belief, Lorem Ipsum (2020) is not.</div>
<div class="osahan-size">102.6 MB . 2:13 MIN Remaining</div>
<div class="osahan-progress">
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>
<div class="osahan-close">
<a href="#"><i class="fas fa-times-circle"></i></a>
</div>
</div>
<div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.</div>
</div> -->
            </div>
            <!-- <hr>
 -->
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="osahan-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e1">Video Title</label>


                                    <input type="text" name="video_title" value="{{$video->title}}" placeholder="{{$video->title}}" id="e1"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e2">About</label>
                                    <textarea rows="3" id="e2" name="description" class="form-control">{{$video->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="e4">Privacy Settings</label>
                                    <select id="e4" class="custom-select" name="is_private">
                      @if($video->is_private == 0)
                      <option value="0">Public</option>
                      <option value="1">Private</option>
                      @else
                      <option value="1">Private</option>
                      <option value="0">Public</option>
                      @endif

                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="e9">Category</label>
                                    <select id="e9" class="custom-select" name="category_id">
                      <option value="{{ $cat1->id }}"> {{ $cat1->name }}</option>
                      @foreach($category as $cat)
                      @if($cat->id == $cat1->id)
                      @else
                      <option value="{{ $cat->id }}"> {{ $cat->name }}</option>
                      @endif
                      @endforeach
                    </select>
                                </div>
                            </div>




                        </div>

                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="e4">Video Thumbnail</label>
                                    <input id="e4" type="file" name="image"  />
                                    <p>(Optimal Size : 840 X 480)</p>

                                </div>
                            </div>

                      




                        </div>


                    </div>
                    <div class="osahan-area text-center mt-3">
                        <button type="submit" class="btn btn-outline-primary"><i
                                class="fas fa-fw fa-cloud-upload-alt"></i>
                            &nbsp Update Video</button>
                    </div>

                    </form>
                    <hr>
                    <div class="terms text-center">
                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority
                            <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.
                        </p>
                        <p class="hidden-xs mb-0">Ipsum is therefore always free from repetition, injected humour, or
                            non</p>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>

@endsection
@extends('admin.layout')
@section('content')

<body class="">

  <!-- Navbar -->
  <!-- End Navbar -->
  <!-- Header -->
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
    style="min-height: 600px; background-image: url(/images/img/header.jpg); background-size: cover; background-position: center top;">

    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1 class="display-2 text-white">Edit {{$video->title}}</h1>
          <div class="col-4  pl-0">
            <a href="{{route('videos')}}" class="btn btn-sm btn-primary">
              <i class="fa fa-arrow-left"></i>

              Back</a>
          </div>
          <!-- <p class="text-white mt-0 mb-5">Please Copy the "Source" of the Embed Code given by Facebook for a Post</p> -->
          <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--7 mb-5">
    <div class="row">
      <!-- <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0 d-none d-md-block d-lg-block">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="/images/logo.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <a href="#" class="btn btn-sm btn-default ">Goto FB Page</a>
                <a href="https://www.facebook.com/flixall" class="btn btn-sm btn-info float-right" target="_blank">Goto FB Page</a>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
                <hr class="my-4">
                <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records
                  all of his own music.</p>
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div> -->
      <div class="col-xl-12 order-xl-1">
        
        <!-- <hr>
-->
        <div class="row mt-6 pt-5">
          <div class="col-lg-12">
            <div class="osahan-form">
              <div class="row">

                <div class="col-lg-12">
                  <form action="{{ route('updateVideo') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                      <label for="e1">Video Title</label>
                      <input type="hidden" name="id" value="{{$video->id}}" />

                      <input type="text" name="video_title" value="{{$video->title}}" placeholder="{{$video->title}}"
                        id="e1" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="e2">About</label>
                    <textarea rows="3" id="e2" name="description" class="form-control">
              {{$video->description}}
            </textarea>
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
                    <input id="e4" type="file" name="image" />

                  </div>
                </div>






              </div>


            </div>
            <div class="osahan-area text-center mt-3">
              <button type="submit" class="btn btn-outline-primary"><i class="fas fa-fw fa-cloud-upload-alt"></i>
                &nbsp Upload Video</button>
            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

  </div>
  </div>
  @endsection
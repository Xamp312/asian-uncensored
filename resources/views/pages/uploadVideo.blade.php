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




                    @if(\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {!! \Session::get('success') !!}
                    </div>


                    @endif

                    <form action="{{ route('videoUpload') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="main-title">
                            <h6>Upload Details</h6>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="osahan-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e1">Video Title</label>


                                    <input type="text" name="video_title" placeholder="Video Name" id="e1"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e2">About</label>
                                    <textarea rows="3" id="e2" name="description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="e4">Privacy Settings</label>
                                    <select id="e4" class="custom-select" name="is_private">
                                        <option value="0">Public</option>
                                        <option value="1">Private</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="e9">Category</label>
                                    <select id="e9" class="custom-select" name="category_id">
                                        @foreach($category as $cat)
                                        <option value="{{ $cat->id }}"> {{ $cat->name }}</option>
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

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="e9">Video Source</label>
                                    <input id="e4" type="file" name="video" />

                                </div>
                            </div>




                        </div>


                    </div>
                    <div class="progress">
                        <div class="bar"></div >
                        <div class="percent">0%</div >
                    </div>
                    <div class="osahan-area text-center mt-3">
                        <button type="submit" class="btn btn-outline-primary"><i
                                class="fas fa-fw fa-cloud-upload-alt"></i>
                            &nbsp Upload Video</button>
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

@section('footer_page')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

<script type="text/javascript">
    $(function() {
         $(document).ready(function()
         {
            var bar = $('.bar');
            var percent = $('.percent');

      $('form').ajaxForm({
        beforeSend: function() {
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        complete: function(xhr) {
            alert('File Uploaded Successfully');
            window.location.href = "/fileupload";
        }
      });
   }); 
 });
</script>
@endsection


@endsection
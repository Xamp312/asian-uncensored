@extends('admin.layout')
@section('content')

<body class="">
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        @include('layouts.alerts')
       
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white mb-0">Uploaded Videos</h3>
                            </div>
                          
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Upload Date</th>

                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $video)
                                <tr>
                                    <th scope="row">
                                        {{$video->title}}
                                    </th>
                                    <td>
                                    {{$video->user->name}}
                                    </td>
                                    <td>
                                    {{$video->created_at}}
                                    </td>
                                  
                
                                    <td class="text-right">

                                    <a class="btn btn-sm btn-success"
                                        href="{{route('editVideo', $video->id)}}">Edit</a>
                                        <a class="btn btn-sm btn-danger"
                                        href="{{route('deleteVideo', $video->id)}}">Delete</a>
                             
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-12">
                    <!-- <div class="copyright text-center  text-muted">
          &copy; {{now()->year }} <a href="#" class="font-weight-bold ml-1" target="_blank">Levrics LLC</a>
        </div> -->
                </div>

            </div>
        </footer>
        @endsection
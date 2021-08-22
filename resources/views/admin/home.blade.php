@extends('admin.layout')
@section('content')

<body class="">
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        @include('layouts.alerts')
        <div class="container-fluid">

            <div class="header-body">
                <!-- Card stats -->
                <div class="row justify-content-center">

                    <div class="col-xl-3 col-lg-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Videos</h5>
                                        <span class="h2 font-weight-bold mb-0">{{$videosCount}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="ni ni-box-2"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Categories</h5>
                                        <span class="h2 font-weight-bold mb-0">{{$catsCount}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="ni ni-circle-08"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                                        <span class="h2 font-weight-bold mb-0">{{$usersCount}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="ni ni-like-2"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p> -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
       <div class="row mt-5">
      <div class="col">
        <div class="card bg-default shadow">
          <div class="card-header bg-transparent border-0">
            <div class="row">
              <div class="col-6">
                <h3 class="text-white mb-0">Video Categories</h3>
              </div>
              <div class="col-6 text-right">
                <a href="{{route('newCat')}}" class="btn btn-sm btn-primary ">New Category </a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table align-items-center table-dark table-flush">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Videos</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $cat)
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      
                      <div class="media-body">
                        <span class="mb-0 text-sm">{{$cat->name}}</span>
                      </div>
                    </div>
                  </th>
                  <td>
                     {{$cat->count}}
                  </td>
                  
                  <!-- <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                          <img alt="Image placeholder" src="/img/theme/team-1-800x800.jpg" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                          <img alt="Image placeholder" src="/img/theme/team-2-800x800.jpg" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                          <img alt="Image placeholder" src="/img/theme/team-3-800x800.jpg" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                          <img alt="Image placeholder" src="/img/theme/team-4-800x800.jpg" class="rounded-circle">
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td> -->
                  <td class="text-right">
                    <a class="btn btn-sm btn-success"
                    href="{{route('editCat', $cat->id)}}">Edit</a>
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
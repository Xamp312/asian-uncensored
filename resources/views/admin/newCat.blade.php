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
          <h1 class="display-2 text-white">New Category</h1>
          <div class="col-4  pl-0">
            <a href="{{route('home')}}" class="btn btn-sm btn-primary">
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
        <div class="card bg-secondary shadow">
          <div class="card-header bg-legendary  border-0">
            <div class="row align-items-center">
              <div class="col-8 ">
                <h3 class="mb-0 text-white">Add New Category</h3>
              </div>
              <div class="col-4  text-right d-none d-md-block d-lg-block">
       
              </div>

            </div>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('createCat')}}" enctype="multipart/form-data">
              @csrf
              <h6 class="heading-small text-muted mb-4">Category Information</h6>
              <div class="pl-lg-4">
                <div class="row ">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <!-- <label class="form-control-label" for="input-username">Username</label> -->
                      <input type="text" id="input-username" name="name" class="form-control form-control-alternative"
                        placeholder="Category Name">
                    </div>
                  </div>


               
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary  text-center">Add Category</button>
                  </div>

                  <!-- <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative"
                          placeholder="jesse@example.com">
                      </div>
                    </div> -->
                </div>
                <!-- <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative"
                          placeholder="First name" value="Lucky">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative"
                          placeholder="Last name" value="Jesse">
                      </div>
                    </div>
                  </div> -->
              </div>
              <!-- <hr class="my-4"> -->
              <!-- Address -->
              <!-- <h6 class="heading-small text-muted mb-4">Contact information</h6> -->
              <div class="pl-lg-4">
                <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative"
                          placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                          type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"
                          placeholder="City" value="New York">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative"
                          placeholder="Country" value="United States">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative"
                          placeholder="Postal code">
                      </div>
                    </div>
                  </div> -->
              </div>
              <!-- <hr class="my-4"> -->
              <!-- Description -->
              <!-- <h6 class="heading-small text-muted mb-4">About me</h6> -->
              <!-- <div class="pl-lg-4">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative"
                      placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                  </div>
                </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

  </div>
  </div>
  @endsection
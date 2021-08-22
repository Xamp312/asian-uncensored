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
                                <h3 class="text-white mb-0">Registered Users</h3>
                            </div>
                          
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subscription Date</th>

                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">
                                        {{$user->email}}
                                    </th>
                                    <td>
                                    {{$user->created_at}}
                                    </td>
                                  
                
                                    <td class="text-right">

                                    @if($user->is_admin == 0)
                                    <a class="btn btn-sm btn-success"
                                        href="{{route('makeAdmin', $user->slug)}}">Make Admin</a>
                                        @else
                                        <a class="btn btn-sm btn-warning"
                                        href="{{route('removeAdmin', $user->slug)}}">Remove Admin</a>
                                        @endif
                                        <a class="btn btn-sm btn-danger"
                                        href="{{route('deleteUser', $user->slug)}}">Delete</a>
                             
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
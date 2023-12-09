@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Content body start -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center mb-4">
                    <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                    <div class="media-body">
                        <h3 class="mb-0">Pikamy Cha</h3>
                        <p class="text-muted mb-0">Canada</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <div class="card card-profile text-center">
                            <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                            <h3 class="mb-0">263</h3>
                            <p class="text-muted px-4">Following</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-profile text-center">
                            <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                            <h3 class="mb-0">263</h3>
                            <p class="text-muted">Followers</p>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-danger px-5">Follow Now</button>
                    </div>
                </div>

                <h4>About Me</h4>
                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                <ul class="card-profile__info">
                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                    <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection
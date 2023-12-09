@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div> -->
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    
    <!-- Content body start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Admin</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{$admin}}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Perusahaan</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{$perusahaan}}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-building"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Member</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{$member}}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0" style="padding-top: 1.88rem;">
                        <h3>Loker Aktif</h3>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Id Perusahaan</th>
                                        <th>Kategori</th>
                                        <th>Posisi</th>
                                        <th>Lulusan</th>
                                        <th>Batas Lamaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actives as $active)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $active->id_perusahaan }}</td>
                                            <td>{{ $active->kategori }}</td>
                                            <td>{{ $active->posisi }}</td>
                                            <td>{{ $active->lulusan }}</td>
                                            <td>{{ $active->batas_lamaran }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection
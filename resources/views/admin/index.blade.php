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
                            <h2 class="text-white">16</h2>
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
                            <h2 class="text-white">112</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-building"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Pelamar</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">2894</h2>
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
                        <h3>Total</h3>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Lulusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>aksjkas</td>
                                        <td>jasjaos ajsaljdo</td>
                                        <td>S1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>aksjkas</td>
                                        <td>jasjaos ajsaljdo</td>
                                        <td>S1</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>aksjkas</td>
                                        <td>jasjaos ajsaljdo</td>
                                        <td>S1</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>aksjkas</td>
                                        <td>jasjaos ajsaljdo</td>
                                        <td>S1</td>
                                    </tr>
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
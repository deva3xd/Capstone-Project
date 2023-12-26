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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="p-t-15">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="media align-items-center mb-4">
                                                    @foreach ($perusahaans as $perusahaan)
                                                    <img class="mr-3"
                                                    src="{{ url('dokumen/logo/' . $perusahaan->logo) }}"
                                                    width="150" alt="">
                                                    <div class="media-body">
                                                        <h3 class="mb-0 text-uppercase">{{ $perusahaan->nama }}</h3>
                                                            <p class="text-muted mb-0">{{ $perusahaan->alamat }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h5>Deskripsi</h5>
                                                        <p class="text-muted" align="justify">
                                                            {{ $perusahaan->deskripsi }}</p>
                                                            <h5>No Telepon</h5>
                                                            <p class="text-muted">{{ $perusahaan->no_telp }}</p>
                                                        </div>
                                                    <div class="col-lg-4">
                                                        <h5>NPWP</h5>
                                                        <p class="text-muted">{{ $perusahaan->npwp }}</p>
                                                        </p>
                                                        <h5>Email</h5>
                                                        <p class="text-muted">{{ $perusahaan->email }}</p>
                                                    </div>
                                                    <a href="{{ route('EditProfilePerusahaan', ['perusahaan' => $perusahaan->id]) }}" class="btn btn-warning m-3">
                                                        Edit Profil
                                                    </a>
                                                    <a href="{{ route('GantiPasswordPerusahaan', ['perusahaan' => $perusahaan->id]) }}" class="btn btn-warning m-3">
                                                        Ganti Password
                                                    </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection

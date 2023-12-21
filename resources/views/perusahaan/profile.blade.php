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
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#buat">Buat</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="p-t-15">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="media align-items-center mb-4">
                                                    <img class="mr-3"
                                                        src="{{ url('dokumen/logo/' . $perusahaan[0]->logo) }}"
                                                        width="150" alt="">
                                                    <div class="media-body">
                                                        <h3 class="mb-0 text-uppercase">{{ Auth::user()->name }}</h3>
                                                        @if ($perusahaan[0]->id_users == Auth::user()->id)
                                                            <p class="text-muted mb-0">{{ $perusahaan[0]->alamat }}</p>
                                                        @else
                                                            <p class="text-muted mb-0">Lengkapi profil terlebih dahulu</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h5>Deskripsi</h5>
                                                        <p class="text-muted" align="justify">
                                                            {{ $perusahaan[0]->deskripsi }}</p>
                                                        <h5>No Telepon</h5>
                                                        <p class="text-muted">{{ $perusahaan[0]->no_telp }}</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h5>NPWP</h5>
                                                        <p class="text-muted">{{ $perusahaan[0]->npwp }}</p>
                                                        </p>
                                                        <h5>Email</h5>
                                                        <p class="text-muted">{{ $perusahaan[0]->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="buat">
                                    <div class="p-t-15">
                                        <div class="basic-form">
                                            <form action="{{ route('storeProfilePerusahaan') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_users" id="id_users"
                                                    value="{{ Auth::user()->id }}" />
                                                <div class="form-group row">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            value="{{ Auth::user()->name }}" name="nama" id="nama"
                                                            readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="email"
                                                            id="email" value="{{ Auth::user()->email }}" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="alamat"
                                                            name="alamat" id="alamat" required />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No Telepon</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" placeholder="no telepon"
                                                            name="no_telp" id="no_telp" required />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control h-150px" rows="6" name="deskripsi" id="deskripsi" placeholder="deskripsi"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jumlah Pegawai</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control"
                                                            placeholder="jumlah pegawai" name="jumlah_pegawai"
                                                            id="jumlah_pegawai" required />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NPWP</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" placeholder="npwp"
                                                            name="npwp" id="npwp" required />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Logo</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="logo"
                                                            id="logo" required />
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
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

@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Perusahaan</h1>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('updatePerusahaan', ['id' => $perusahaan->id])}}" method="POST">
                            @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" required="required" value="{{ $perusahaan->nama}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" required="required" value="{{ $perusahaan->alamat}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="No Telepon" name="no_telp" id="no_telp" required="required" value="{{ $perusahaan->no_telp}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Email" name="email" id="email" required="required" value="{{ $perusahaan->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Password" name="password" id="password" required="required" value="{{ $perusahaan->password}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" id="deskripsi" required="required" value="{{ $perusahaan->deskripsi}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Jumlah Pegawai" name="jumlah_pegawai" id="jumlah_pegawai" required="required" value="{{ $perusahaan->jumlah_pegawai}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NPWP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="NPWP" name="npwp" id="npwp" required="npwp" value="{{ $perusahaan->npwp}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Logo" name="logo" id="logo" required="required" value="{{ $perusahaan->logo}}">
                                    </div>
                                </div>
                                
                                <div class="text-right">
                                    <a href="{{route('daftarPerusahaan')}}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection
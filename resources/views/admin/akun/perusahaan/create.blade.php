@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Perusahaan</h1>
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
                            <form action="{{route('storePerusahaan')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="alamat" name="alamat" id="alamat" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="no telpon" name="no_telp" id="no_telp" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="email" name="email" id="email" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="password" name="password" id="password" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="deskripsi" name="deskripsi" id="deskripsi" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="jumlah pegawai" name="jumlah_pegawai" id="jumlah_pegawai" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NPWP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="npwp" name="npwp" id="npwp" required="npwp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="logo" name="logo" id="logo" required="required">
                                    </div>
                                </div>
                                
                                <div class="text-right">
                                    <a href="#" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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
@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Data Perusahaan</h1>
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
                            <form enctype="multipart/form-data" action="{{ route('updateDataPerusahaan', ['id' => $perusahaan->id]) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('nama')is-invalid @enderror" placeholder="nama perusahaan"
                                            name="nama" id="nama" required="required"
                                            value="{{ $perusahaan->nama }}">
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <<div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Telpon</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control @error('no_telp')is-invalid @enderror" placeholder="no telp" name="no_telp"
                                            id="no_telp" required="required" value="{{ $perusahaan->no_telp }}">
                                            @error('no_telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('email')is-invalid @enderror" placeholder="email" name="email"
                                            id="email" required="required" value="{{ $perusahaan->email }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('password')is-invalid @enderror" placeholder="password" name="password"
                                            id="password" required="required" value="{{ $perusahaan->password }}">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px @error('deskripsi')is-invalid @enderror" rows="6" placeholder="deskripsi" name="deskripsi" id="deskripsi"
                                            required="required">{{ $perusahaan->deskripsi }}</textarea>
                                            @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control @error('jumlah_pegawai')is-invalid @enderror" name="jumlah_pegawai" id="jumlah_pegawai"
                                        required="required" value="{{ $perusahaan->jumlah_pegawai }}">
                                        @error('jumlah_pegawai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NPWP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control @error('npwp')is-invalid @enderror"
                                            name="npwp" id="npwp" required="required"
                                            value="{{ $perusahaan->npwp }}">
                                        @error('npwp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                    <input name="logo" class="form-control @error('logo')is-invalid  @enderror"
                                        type="file" id="logo">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('daftarDataPerusahaan') }}" class="btn btn-outline-secondary mr-2"
                                        role="button">Batal</a>
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

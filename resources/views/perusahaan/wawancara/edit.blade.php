@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Loker</h1>
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
                            <form action="{{route('updateWawancara', ['id' => $wawancara->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Loker</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="nama" name="id_loker" id="id_loker" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Profile Pelamar</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="id_profil_pelamar" name="id_profil_pelamar" id="id_profil_pelamar" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jadwal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="jadwal" name="jadwal" id="jadwal" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Catatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="catatan" name="catatan" id="catatan" required="required">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="{{route('daftarWawancara')}}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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
@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Pelamar</h1>
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
                            <form action="{{route('updatePelamarPerusahaan', ['id' => $data->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori Loker</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_loker" id="id_loker">
                                            <option value="{{$data->id_loker}}">{{ $data->loker->kategori}}</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Pelamar</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_profil_pelamar" id="id_profil_pelamar">
                                            <option value="{{$data->id_profil_pelamar}}">{{ $data->pelamar->nama}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label pt-0">Status</label>
                                    <div class="col-sm-10">
                                        <div class="radio mb-3">
                                            <label>
                                                <input type="radio" name="status" id="status" value="Diterima"
                                                    checked> Diterima
                                            </label>
                                        </div>
                                        <div class="radio mb-3">
                                            <label>
                                                <input type="radio" name="status" id="status"
                                                    value="Ditolak"> Berhenti
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="{{route('daftarPelamarPerusahaan')}}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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
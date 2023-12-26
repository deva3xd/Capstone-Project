@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Wawancara</h1>
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
                            <form action="{{ route('storeWawancara') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Data Pelamar</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_data_pelamar" id="id_data_pelamar" required="required">
                                            <option value="">Pilih</option>
                                            @foreach ($datas as $data)
                                                <option value="{{ $data->id }}">{{ $data->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @foreach ($datas as $data)
                                    <input type="hidden" name="id_pelamar" value="{{ $data->id_profil_pelamar }}" />
                                @endforeach
                                <input type="hidden" name="id_perusahaan" value="{{ Auth::user()->id }}" />
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jadwal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="Jadwal" name="jadwal"
                                            id="jadwal" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Catatan</label>
                                    <div class="col-sm-10">
                                        <textarea h-150px" rows="6" class="form-control" placeholder="Catatan" name="catatan"
                                            id="catatan" required="required"></textarea>
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

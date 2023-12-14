@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

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
                            <form action="{{ route('updateLoker', ['id' => $loker->id]) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="id" name="id_perusahaan"
                                            id="id_perusahaan" required="required" value="{{ $loker->id_perusahaan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="kategori" name="kategori">
                                            <option value="data scientist" {{ $loker->kategori == 'data scientist' ? 'selected' : '' }}>Data Scientist</option>
                                            <option value="game developer" {{ $loker->kategori == 'game developer' ? 'selected' : '' }}>Game Developer</option>
                                            <option value="it support" {{ $loker->kategori == 'it support' ? 'selected' : '' }}>IT Support</option>
                                            <option value="mobile app developer" {{ $loker->kategori == 'mobile app developer' ? 'selected' : '' }}>Mobile App Developer</option>
                                            <option value="security engineer" {{ $loker->kategori == 'security engineer' ? 'selected' : '' }}>Security Engineer</option>
                                            <option value="software developer" {{ $loker->kategori == 'software developer' ? 'selected' : '' }}>Software Developer</option>
                                            <option value="ui/ux designer" {{ $loker->kategori == 'ui/ux designer' ? 'selected' : '' }}>UI/UX Designer</option>
                                            <option value="web developer" {{ $loker->kategori == 'web developer' ? 'selected' : '' }}>Web Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Posisi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="posisi" name="posisi"
                                            id="posisi" required="required" value="{{ $loker->posisi }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lulusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="lulusan" name="lulusan"
                                            id="lulusan" required="required" value="{{ $loker->lulusan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Syarat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="syarat" name="syarat"
                                            id="syarat" required="required" value="{{ $loker->syarat }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px" rows="6" placeholder="deskripsi" name="deskripsi" id="deskripsi"
                                            required="required">{{ $loker->deskripsi }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Batas Lamaran</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="batas_lamaran" id="batas_lamaran"
                                            required="required" value="{{ $loker->batas_lamaran }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px" rows="6" placeholder="alamat" name="alamat" id="alamat"
                                            required="required">{{ $loker->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="radio mb-3">
                                            <label>
                                                <input type="radio" name="status" id="status" value="aktif"
                                                    checked> Aktif
                                            </label>
                                        </div>
                                        <div class="radio mb-3">
                                            <label>
                                                <input type="radio" name="status" id="status"
                                                    value="tidak aktif"> Tidak Aktif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('daftarLoker') }}" class="btn btn-outline-secondary mr-2"
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

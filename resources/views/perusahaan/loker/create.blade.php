@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Loker</h1>
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
                            <form action="{{ route('storeLoker') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="id perusahaan" name="id_perusahaan"
                                            id="id_perusahaan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="kategori" name="kategori">
                                            <option value="data scientist">Data Scientist</option>
                                            <option value="game developer">Game Developer</option>
                                            <option value="it support">IT Support</option>
                                            <option value="mobile app developer">Mobile App Developer</option>
                                            <option value="security engineer">Security Engineer</option>
                                            <option value="software developer">Software Developer</option>
                                            <option value="ui/ux designer">UI/UX Designer</option>
                                            <option value="web developer">Web Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="jabatan" name="jabatan"
                                            id="jabatan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lulusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="lulusan" name="lulusan"
                                            id="lulusan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Syarat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="syarat" name="syarat"
                                            id="syarat" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggung Jawab</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="tanggung jawab"
                                            name="tanggung_jawab" id="tanggung_jawab" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px" rows="6" placeholder="deskripsi" name="deskripsi" id="deskripsi"
                                            required="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Batas Lamaran</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="batas_lamaran" id="batas_lamaran"
                                            required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px" rows="6" placeholder="alamat" name="alamat" id="alamat"
                                            required="required"></textarea>
                                    </div>
                                    <input type="hidden" class="form-control" placeholder="status" name="status"
                                        id="status" value="aktif" required="required">
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

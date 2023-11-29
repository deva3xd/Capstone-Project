@extends('layouts.dashboard.master-perusahaan')

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
                            <form action="{{route('storeLoker')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ip</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="nama" name="id_perusahaan" id="id_perusahaan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="jabatan" name="jabatan" id="jabatan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lulusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="lulusan" name="lulusan" id="lulusan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="jurusan" name="jurusan" id="jurusan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Skill</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="skill" name="skill" id="skill" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pengalaman Kerja</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px" rows="6" placeholder="pengalaman kerja" name="pengalaman_kerja" id="pengalaman_kerja" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Syarat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="syarat" name="syarat" id="syarat" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggung Jawab</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="tanggung jawab" name="tanggung_jawab" id="tanggung_jawab" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px" rows="6" placeholder="deskripsi" name="deskripsi" id="deskripsi" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Batas Lamaran</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="batas_lamaran" id="batas_lamaran" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px" rows="6" placeholder="alamat" name="alamat" id="alamat" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <!-- <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked="checked">
                                                <label class="form-check-label">First radio</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                                <label class="form-check-label">Second radio</label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled="disabled">
                                                <label class="form-check-label">Third disabled radio</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-2">Checkbox</div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">Example checkbox</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-dark">Sign in</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection
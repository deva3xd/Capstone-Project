@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Member</h1>
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
                            <form action="{{route('storePelamar')}}" method="POST">
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
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="tanggal lahir" name="ttl" id="ttl" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="form-check form-check-inline m-3">
                                        <input class="form-check-input" required type="radio" name="jk" id="jk_laki"
                                            value="laki-laki">
                                        <label class="form-check-label" for="jk_laki">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" required type="radio" name="jk" id="jk_perempuan"
                                            value="perempuan">
                                        <label class="form-check-label" for="jk_perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="no telepon" name="no_telp" id="no_telp" required="required">
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
                                    <label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="pendidikan" name="pendidikan" id="pendidikan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Institusi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="asal institusi" name="nama_institusi" id="nama_institusi" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pengalaman Organisasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="pengalaman organisasi" name="pengalaman_organisasi" id="pengalaman_organisasi" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pengalaman Kerja</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="pengalaman kerja" name="pengalaman_kerja" id="pengalaman_kerja" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Skill</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="skill" name="skill" id="skill" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sertifikasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="sertifikasi" name="sertifikasi" id="sertifikasi" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gaji Diinginkan (juta)</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="gaji diinginkan" name="gaji_diinginkan" id="gaji_diinginkan" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lampiran</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" placeholder="lampiran" name="lampiran" id="lampiran" required="lampiran">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CV</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" placeholder="cv" name="cv" id="cv" required="cv">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" placeholder="foto" name="foto" id="foto" required="foto">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NPWP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="npwp" name="npwp" id="npwp" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="nik" name="nik" id="nik" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status Nikah</label>
                                        <select class="col-sm-10" name="status_nikah" id="status_nikah" aria-label="Default select example">
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Duda">Duda</option>
                                            <option value="Janda">Janda</option>
                                        </select>
                                </div>
                                
                                <div class="text-right">
                                    <a href="{{route('akunPelamar')}}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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
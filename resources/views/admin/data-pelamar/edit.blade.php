@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Data Pelamar</h1>
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
                            <form action="{{ route('updateDataPelamar') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Pelamar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('nama')is-invalid @enderror"
                                            placeholder="nama perusahaan" value="{{ $pelamar->nama }}" name="nama" id="nama" required="required">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control h-150px @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                                            cols="30" rows="10">{{ $pelamar->alamat }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control @error('ttl')is-invalid @enderror"
                                            placeholder="tanggal lahir pelamar" value="{{ $pelamar->ttl }}" name="ttl" id="ttl"
                                            required="required">
                                        @error('ttl')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline m-3">
                                            <input class="form-check-input" required type="radio" name="jk"
                                                id="jk_laki" value="Laki-Laki">
                                            <label class="form-check-label" for="jk_laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" required type="radio" name="jk"
                                                id="jk_perempuan" value="Perempuan">
                                            <label class="form-check-label" for="jk_perempuan">Perempuan</label>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('email')is-invalid @enderror"
                                        placeholder="email" name="email" value="{{ $pelamar->email }}" id="email" required="required">
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
                                    <input type="text" class="form-control @error('password')is-invalid @enderror"
                                        placeholder="password" value="{{ $pelamar->password }}" name="password" id="password" required="required">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pendidikan Akhir</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-select @error('pendidikan')is-invalid  @enderror"
                                        name="pendidikan" id="pendidikan" aria-label="Default select example">
                                        <option selected>{{ $pelamar->pendidikan }}</option>
                                        <option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                    </select>
                                    @error('pendidikan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Instansi Terakhir</label>
                                <div class="col-sm-10">
                                    <input name="nama_institusi" required id="nama_institusi" value="{{ $pelamar->nama_institusi }}" type="text"
                                        class="form-control @error('nama_institusi')is-invalid  @enderror"">
                                    @error('nama_institusi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pengalaman Organisasi</label>
                                <div class="col-sm-10">
                                    <textarea name="pengalaman_organisasi" class="form-control" id="pengalaman_organisasi" style="width">{{ $pelamar->pengalaman_organisasi }}</textarea>
                                    @error('pengalaman_organisasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pengalaman Kerja</label>
                                <div class="col-sm-10">
                                    <textarea name="pengalaman_kerja" required class="form-control @error('pengalaman_kerja')is-invalid  @enderror"
                                        id="pengalaman_kerja" style="width">{{ $pelamar->pengalaman_kerja }}</textarea>
                                    @error('pengalaman_kerja')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sertifikasi Keahlian</label>
                                <div class="col-sm-10">
                                    <input name="sertifikasi" id="sertifikasi" type="text"
                                        class="form-control @error('sertifikasi')is-invalid  @enderror" required>
                                    @error('sertifikasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gaji yang diinginkan</label>
                                    <div class="col-sm-10">
                                        <input name="gaji_diinginkan" id="gaji_diinginkan" type="number"
                                            class="form-control @error('gaji_diinginkan')is-invalid  @enderror"
                                            required>
                                        @error('gaji_diinginkan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input name="nik" id="nik" type="number"
                                            class="form-control @error('nik')is-invalid  @enderror" required>
                                        @error('nik')
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
                                            name="npwp" id="npwp" required="required">
                                        @error('npwp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CV</label>
                                    <div class="col-sm-10">
                                        <input name="cv" class="form-control @error('cv')is-invalid  @enderror"
                                            type="file" id="cv">
                                        @error('cv')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lampiran</label>
                                    <div class="col-sm-10">
                                        <input name="lampiran"
                                            class="form-control @error('lampiran')is-invalid  @enderror"
                                            type="file" id="lampiran">
                                        @error('lampiran')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input name="foto"
                                            class="form-control @error('foto')is-invalid  @enderror" type="file"
                                            id="foto">
                                        @error('foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="text-right">
                                        <a href="{{ route('daftarDataPelamar') }}"
                                            class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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

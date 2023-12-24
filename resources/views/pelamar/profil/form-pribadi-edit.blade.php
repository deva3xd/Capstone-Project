@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-white text-lg">Profil</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="#" class="text-white">Profil</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><span class="text-white-50">Edit Profil</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center m-2 p-2">FORM PROFIL</h1>
                        <form enctype="multipart/form-data"
                            action="{{ route('Profilupdate', ['pelamar' => $pelamar->id]) }}" method="POST">
                            @csrf
                            <div class="form-group m-3">
                                <label for="nama" class="p-1">Nama</label>
                                <input name="nama" id="nama" required type="text"
                                    value="{{ $pelamar->nama }}"
                                    class="form-control @error('nama')is-invalid  @enderror">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating m-3">
                                <label for="alamat" class="p-1">Alamat</label>
                                <textarea name="alamat" required class="form-control @error('alamat')is-invalid  @enderror" id="alamat"
                                    style="width">{{ $pelamar->alamat }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="ttl" class="p-1">Tanggal Lahir</label>
                                <input name="ttl" id="ttl" required type="date" value="{{ $pelamar->ttl }}"
                                    class="form-control @error('ttl')is-invalid  @enderror">
                                @error('ttl')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="jk" class="p-1">Jenis Kelamin</label>
                                <div class="form-check form-check-inline m-3">
                                    <input class="form-check-input" required type="radio" name="jk" id="jk_laki"
                                        value="Laki-Laki">
                                    <label class="form-check-label" for="jk_laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" required type="radio" name="jk" id="jk_perempuan"
                                        value="Perempuan">
                                    <label class="form-check-label" for="jk_perempuan">Perempuan</label>
                                </div>
                            </div>

                            <div class="form-group m-3">
                                <label for="status_nikah" class="p-1">Status Nikah</label>
                                <select class="form-select @error('status_nikah')is-invalid  @enderror" name="status_nikah"
                                    id="status_nikah" aria-label="Default select example">
                                    <option selected>{{ $pelamar->status_nikah }}</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                    <option value="Duda">Duda</option>
                                    <option value="Janda">Janda</option>
                                </select>
                                @error('status_nikah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="no_telp" class="p-1">No Telpon</label>
                                <input name="no_telp" required id="no_telp" type="text" value="{{ $pelamar->no_telp }}"
                                    class="form-control @error('no_telp')is-invalid  @enderror">
                                @error('no_telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="pendidikan" class="p-1">Pendidikan Akhir</label>
                                <input name="pendidikan" required id="pendidikan" type="text"
                                    value="{{ $pelamar->pendidikan }}"
                                    class="form-control @error('pendidikan')is-invalid  @enderror">
                                @error('pendidikan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="nama_institusi" class="p-1">Nama Institusi</label>
                                <input name="nama_institusi" required id="nama_institusi" type="text"
                                    value="{{ $pelamar->nama_institusi }}"
                                    class="form-control @error('nama_institusi')is-invalid  @enderror"">
                                @error('nama_institusi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating m-3">
                                <label for="pengalaman_organisasi" class="p-1">Pengalaman Organisasi</label>
                                <textarea name="pengalaman_organisasi" class="form-control @error('pengalaman_organisasi')is-invalid  @enderror"
                                    id="pengalaman_organisasi" style="width">{{ $pelamar->pengalaman_organisasi }}</textarea>
                                @error('pengalaman_organisasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating m-3">
                                <label for="pengalaman_kerja" class="p-1">Pengalaman Kerja</label>
                                <textarea name="pengalaman_kerja" class="form-control @error('pengalaman_kerja')is-invalid  @enderror"
                                    id="pengalaman_kerja" style="width">{{ $pelamar->pengalaman_kerja }}</textarea>
                                @error('pengalaman_kerja')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating m-3">
                                <label for="skill" class="p-1">Skill</label>
                                <textarea name="skill" class="form-control @error('skill')is-invalid  @enderror" id="skill" style="width"
                                    required>{{ $pelamar->skill }}</textarea>
                                @error('skill')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="sertifikasi" class="p-1">Sertifikasi</label>
                                <input name="sertifikasi" id="sertifikasi" value="{{ $pelamar->sertifikasi }}"
                                    type="text" class="form-control @error('sertifikasi')is-invalid  @enderror">
                                @error('sertifikasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="gaji_diinginkan" class="p-1">Gaji yang diinginkan</label>
                                <input name="gaji_diinginkan" id="gaji_diinginkan" type="text"
                                    value="{{ $pelamar->gaji_diinginkan }}"class="form-control @error('gaji_diinginkan')is-invalid  @enderror"
                                    required>
                                @error('gaji_diinginkan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="nik" class="p-1">NIK</label>
                                <input name="nik" id="nik" type="number" value="{{ $pelamar->nik }}"
                                    class="form-control @error('nik')is-invalid  @enderror" required>
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="cv" class="form-label">CV</label>
                                <input name="cv" class="form-control @error('cv')is-invalid  @enderror"
                                    type="file" id="cv">
                                @error('cv')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="lampiran" class="form-label">Lampiran</label>
                                <input name="lampiran" class="form-control @error('lampiran')is-invalid  @enderror"
                                    type="file" id="lam">
                                @error('lampiran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input name="foto" class="form-control @error('foto')is-invalid  @enderror"
                                    type="file" id="foto">
                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary m-3" name="submit" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

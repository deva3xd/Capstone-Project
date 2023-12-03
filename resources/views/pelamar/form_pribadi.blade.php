@extends('layouts.landing.master1')

@section('content')
<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-5 text-white text-lg">Profil</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <!-- Card untuk form akun pelamar -->
        <div class="card mb-4">
          <div class="card-body">
  <h1 class="text-center m-2">AKUN PELAMAR</h1>
<form action="">
    @csrf
    <div class="form-group m-3">
        <label for="email" class="p-1">Email</label>
        <input name="email" id="email" type="text" class="form-control" disabled>
      </div>

      <div class="form-group m-3">
        <label for="email" class="p-1">Password</label>
        <input name="password" id="password" type="text" class="form-control">
      </div>
      <button class="btn btn-main m-3" name="submit" type="submit">Submit</button>
</form>
</div>
</div>

<div class="card">
    <div class="card-body">
  <h1 class="text-center m-2 p-2">FORM PROFIL</h1>
<form action="{{ route('Profilsubmit') }}" method="POST">
    @csrf
    <div class="form-group m-3">
        <label for="nama" class="p-1">Nama</label>
        <input name="nama" id="nama" required type="text" class="form-control">
      </div>

      <div class="form-floating m-3">
        <label for="alamat" class="p-1">Alamat</label>
        <textarea name="alamat" required class="form-control" id="alamat" style="width"></textarea>
      </div>

      <div class="form-group m-3">
        <label for="ttl" class="p-1">Tanggal Lahir</label>
        <input name="ttl" id="ttl" required type="date" class="form-control">
      </div>
     
    <div class="form-group m-3">
        <label for="jk" class="p-1">Jenis Kelamin</label>
      <div class="form-check form-check-inline m-3">
        <input class="form-check-input" required type="radio" name="jk" id="jk" value="Laki-Laki">
        <label class="form-check-label">Laki-laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" required type="radio" name="jk" id="jk" value="Perempuan">
        <label class="form-check-label">Perempuan</label>
      </div>
    </div>

    <div class="form-group m-3">
        <label for="no_telp" class="p-1">No Telpon</label>
        <input name="no_telp" required id="no_telp" type="text" class="form-control">
      </div>

      <div class="form-group m-3">
        <label for="pendidikan" class="p-1">Pendidikan Akhir</label>
        <input name="pendidikan" required id="pendidikan" type="text" class="form-control">
      </div>

      <div class="form-group m-3">
        <label for="nama_institusi" class="p-1">Nama Institusi</label>
        <input name="nama_institusi" required id="nama_institusi" type="text" class="form-control">
      </div>

      <div class="form-floating m-3">
        <label for="pengalaman_organisasi" class="p-1">Pengalaman Organisasi</label>
        <textarea name="pengalaman_organisasi" required class="form-control" id="pengalaman_organisasi" style="width"></textarea>
      </div>

      <div class="form-floating m-3">
        <label for="pengalaman_kerja" class="p-1">Pengalaman Kerja</label>
        <textarea name="pengalaman_kerja" required class="form-control" id="pengalaman_kerja" style="width"></textarea>
      </div>

      <div class="form-floating m-3">
        <label for="skill" class="p-1">Skill</label>
        <textarea name="skill" class="form-control" id="skill" style="width" required></textarea>
      </div>

      <div class="form-group m-3">
        <label for="sertifikasi" class="p-1">Sertifikasi</label>
        <input name="sertifikasi" id="sertifikasi" type="text" class="form-control" required>
      </div>

      <div class="form-group m-3">
        <label for="nik" class="p-1">NIK</label>
        <input name="nik" id="nik" type="number" class="form-control" required>
      </div>

      <div class="form-group m-3">
        <label for="npwp" class="p-1">NPWP</label>
        <input name="npwp" id="npwp" type="number" class="form-control" required>
      </div>

      <div class="form-group m-3">
        <label for="cv" class="form-label">CV</label>
        <input name="cv" class="form-control" type="file" id="cv" required>
      </div>

      <div class="form-group m-3">
        <label for="foto" class="form-label p-1">Foto</label>
        <input name="foto" class="form-control" type="file" id="foto" required>
      </div>
      <button class="btn btn-primary m-3" name="submit" type="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
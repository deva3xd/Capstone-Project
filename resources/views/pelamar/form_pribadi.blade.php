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

  <h1 class="text-center m-2">FORM PROFIL</h1>
<form action="">
    <div class="form-group m-3">
        <label for="nama" class="p-1">Nama</label>
        <input name="nama" id="subject" type="text" class="form-control">
      </div>

      <div class="form-floating m-3">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" id="floatingTextarea2" style="width"></textarea>
      </div>

      <div class="form-group m-3">
        <label for="ttl" class="p-1">Tanggal Lahir</label>
        <input name="ttl" id="subject" type="date" class="form-control">
      </div>
     
    <div class="form-group m-3">
        <label for="jk">Jenis Kelamin</label>
      <div class="form-check form-check-inline m-3">
        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki">
        <label class="form-check-label" for="jk">Laki-laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
        <label class="form-check-label" for="jk">Perempuan</label>
      </div>
    </div>

    <div class="form-group m-3">
        <label for="no_telp" class="p-1">No Telpon</label>
        <input name="no_telp" id="subject" type="text" class="form-control">
      </div>
      

</form>
@endsection
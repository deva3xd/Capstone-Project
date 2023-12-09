@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

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
            <div class="col-md-8 p-3">
                <div class="card p-1">
                    <div class="card-body">
                        <h1 class="text-center m-2 p-2">AKUN</h1>
                        @foreach ($profils as $profil)
                            <div class="form-group m-3 p-1">
                                <label for="nama" class="p-1">Email</label>
                                <input readonly disabled type="text" class="form-control" value="{{ $profil->email }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Password</label>
                                <input readonly class="form-control" type="password" value="{{ $profil->password }}">
                            </div>
                            <a href="{{ route('Passwordedit', ['id' => $profil->id]) }}" class="btn btn-warning m-3">
                                Ganti Password
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 p-3">
                <div class="card p-1">
                    <div class="card-body">
                        <h1 class="text-center m-2 p-2">PROFIL</h1>
                        @foreach ($profils as $profil)
                            <div class="form-group m-3 p-1">
                                <label class="p-1">Nama</label>
                                <input readonly type="text" class="form-control" value="{{ $profil->nama }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Alamat</label>
                                <input readonly class="form-control" type="password" value="{{ $profil->alamat }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Tanggal Lahir</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->ttl }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Jenis Kelamin</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->jk }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Status Nikah</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->status_nikah }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">No Telpon</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->no_telp }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Pendidikan Akhir</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->pendidikan }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Nama Institusi</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->nama_institusi }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Pengalaman Organisasi</label>
                                <textarea readonly class="form-control" type="text">{{ $profil->pengalaman_organisasi }}</textarea>
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Pengalaman Kerja</label>
                                <textarea readonly class="form-control" type="text">{{ $profil->pengalaman_kerja }}</textarea>
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Skill</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->skill }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Nama Institusi</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->nama_institusi }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Sertifikasi</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->sertifikasi }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Gaji Yang Diinginkan</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->gaji_diinginkan }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">CV</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->cv }}">
                            </div>

                            <div class="form-floating m-3">
                                <label class="p-1">Lampiran</label>
                                <input readonly class="form-control" type="text" value="{{ $profil->lampiran }}">
                            </div>
                            <!-- Display Original Image -->
                            <div class="form-floating m-3">
                                <strong class="p-1">Foto</strong>
                                <br>
                                <img src="{{ asset('landing/dokumen/foto/' . $profil->foto) }}"
                                    class="img-responsive img-thumbnail" alt="Original Image">
                            </div>

                            <a href="{{ route('Profiledit', ['id' => $profil->id]) }}" class="btn btn-warning m-3">
                                Edit Profil
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addJavascript')
    <script src="{{ asset('js/sweetalert.min.js') }}">
@if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    </script>
@endsection

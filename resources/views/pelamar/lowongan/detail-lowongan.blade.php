@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg text-white">Detail Lowongan</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><span class="text-white">Lowongan</span></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><span class="text-white-50">Detail</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img src="images/blog/3.jpg" alt="" class="img-fluid rounded">
                                <div class="blog-item-content mt-4">
                                    <h2 class="mt-3 mb-3 text-md text-uppercase">{{ $loker->kategori }}</h2>
                                    <div class="blog-item-meta mb-5">
                                        <span class="text-muted text-capitalize mr-3"><i class="fa fa-building mr-2"></i>
                                            {{ $loker->perusahaan->nama }}</span>
                                        <span class="text-muted text-capitalize mr-3"><i
                                                class="ti-pencil-alt mr-2"></i>{{ $loker->posisi }}</span>
                                        <span class="text-muted text-capitalize mr-3"><i
                                                class="ti-time mr-1"></i>{{ $year . '-' . $month . '-' . $day }}</span>
                                    </div>
                                    <h3>Deskripsi Pekerjaan</h3>
                                    <p>{!! nl2br(e($loker->deskripsi)) !!}</p><br>
                                    <h3>Syarat Pendaftaran</h3>
                                    <li>Minimal Jenjang/Lulusan : {{ $loker->lulusan }}</li>
                                    <li>{{ $loker->syarat }}</li><br>
                                    <h3>Posisi</h3>
                                    <p>{{ $loker->posisi }}</p><br>
                                    <h3>Alamat Perusahaan</h3>
                                    <p>{{ $loker->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($dataPelamars as $dataPelamar)
                        @if ($dataPelamar->status == 'lanjut' && $dataPelamar->id_loker == $loker->id && $dataPelamar->id_profil_pelamar == $pelamar->id)
                            <p><i class="fas fa-check-circle text-success m-1"></i>
                                Selamat, anda lanjut ke tahap wawancara</p>
                        @elseif ($dataPelamar->status == 'berhenti' && $dataPelamar->id_loker == $loker->id && $dataPelamar->id_profil_pelamar == $pelamar->id)
                            <p><i class="text-danger ti-na m-1" style="color: orange"></i>
                                Maaf, lamaran anda ditolak</p>
                        @else
                            <p><i class="far fa-clock m-1" style="color: orange"></i>
                                Lamaran anda sedang diproses</p>
                        @endif
                    @endforeach
                    @if (!$dataPelamar)
                        <a onclick="confirm(this)" data-url="{{ route('PelamarDaftarLoker', ['id' => $loker->id]) }}"
                            class="text-white btn btn-small btn-success">Daftar</a>
                    @endif
                    <a href="{{ route('pelamarCariLowongan') }}" class="btn btn-small btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('addJavascript')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        confirm = function(button) {
            var url = $(button).data('url');
            swal({
                'title': 'Melamar Lowongan Pekerjaan Ini',
                'text': 'Apakah Kamu Yakin Ingin Mendaftar Lamaran Pekerjaan Ini?',
                'dangermode': true,
                'buttons': true
            }).then(function(value) {
                if (value) {
                    window.location = url;
                }
            })
        }
    </script>
@endsection
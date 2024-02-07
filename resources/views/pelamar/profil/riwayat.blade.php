@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-white text-lg">Riwayat Lamaran</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @if ($riwayats->isEmpty())
                            <div class="col-lg-6 col-md-6 mb-3 px-7 text-danger text-center">
                                <p>Anda Belum Melamar Pekerjaan</p>
                            </div>
                        @else
                            @foreach ($riwayats as $riwayat)
                                <div class="col-lg-12 col-md-6 mb-3 px-0 border">
                                    <div class="blog-item p-1 mr-1">
                                        <div class="blog-thumb mr-0 py-2 d-flex justify-content-center">
                                            <img src="{{ asset('dokumen/logo/' . $riwayat->perusahaan->logo) }}" alt="logo"
                                                class="img-fluid rounded" width="180">
                                        </div>
                                        <div class="blog-item-content pb-1">
                                            <h3 class="mt-3 mb-3 text-uppercase">{{ $riwayat->kategori }}</h3>
                                            <div class="blog-item-meta mb-3">
                                                <span class="text-muted text-capitalize mr-3"><a
                                                        class="text-dark mr-1"><b>Nama Perusahaan:</b>
                                                    </a>{{ $riwayat->perusahaan->nama }}</span><br />
                                                <span class="text-muted text-capitalize mr-3"><a
                                                        class="text-dark mr-1"><b>Posisi:</b>
                                                    </a>{{ $riwayat->posisi }}</span><br />
                                                <span class="text-muted text-capitalize mr-3"><a
                                                        class="text-dark mr-1"><b>Lamaran Dikirim:</b>
                                                    </a>{{ $riwayat->data_pelamar_created_at }}</span>
                                            </div>
                                            @if ($riwayat->data_pelamar_status == 'lanjut')
                                                <a class="btn btn-success text-white ml-1">Lanjut</a>
                                            @elseif ($riwayat->data_pelamar_status == 'berhenti')
                                                <a class="btn btn-danger text-white ml-1">Berhenti</a>
                                            @elseif ($riwayat->data_pelamar_status == 'pending')
                                                <a class="btn btn-warning text-white ml-1">Proses</a>
                                            @else
                                                <span class="badge badge-secondary">Status Tidak Dikenal</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



@section('addJavascript')
    @parent
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        function confirmDelete(button) {
            var url = $(button).data('url');
            swal({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                dangermode: true,
                buttons: true
            }).then(function(value) {
                if (value) {
                    window.location = url;
                }
            });
        }
    </script>
@endsection
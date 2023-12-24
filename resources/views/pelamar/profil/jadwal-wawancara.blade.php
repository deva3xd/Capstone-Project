@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-white text-lg">Jadwal Wawancara</h1>
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
                        @if ($wawancaras->isEmpty())
                            <div class="col-lg-6 col-md-6 mb-3 px-7 text-danger text-center">
                                <p>Anda Belum Melamar Pekerjaan</p>
                            </div>
                        @else
                        @foreach ($wawancaras as $wawancara)
                            <div class="col-lg-12 col-md-6 mb-3 px-0 border shadow m-3">
                                <div class="blog-item p-1 m4 mr-1">
                                    <div class="blog-thumb mr-0 py-2 d-flex justify-content-center">
                                    </div>
                                    <div class="blog-item-content pb-1 m-5" >
                                        <h3 class="mt-3 mb-3 text-uppercase">{{ $wawancara->kategori }}</h3>
                                        <div class="blog-item-meta mb-4">
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1"><b>Nama Perusahaan:</b>
                                            </a></span><br />
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1"><b>Posisi:</b>
                                                </a>{{ $wawancara->posisi }}</span><br />
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1"><b>Lamaran Dikirim:</b>
                                                </a>{{ $wawancara->wawancara_created_at }}</span><br />
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1"><b>Alamat:</b>
                                                </a>{{ $wawancara->alamat }}</span><br />
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1"><b>Jadwal Wawancara:</b>
                                                </a>{{ $wawancara->jadwal }}</span><br />
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1"><b>Catatan:</b>
                                                </a>{{ $wawancara->catatan }}</span><br />
                                        </div>
                                        @if ($wawancara->status == 'Diterima')
                                        <a class="btn btn-success text-white mr-3">Diterima</a>
                                        @else
                                        <a class="btn btn-warning text-white mr-3">Proses</a>
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

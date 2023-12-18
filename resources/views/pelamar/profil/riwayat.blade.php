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
    
    
    <!-- Content body start -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 p-3">
                <div class="card p-1">
                    <div class="card-body">
                        <h1 class="text-center m-2 p-2">Riwayat Lamaran</h1>
                        <div class="card-body pt-0">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection
@section('addJavascript')
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
    confirmDelete = function(button) {
        var url = $(button).data('url');
        swal({
            'title' : 'Konfirmasi Hapus',
            'text' : 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
            'dangermode' : true,
            'buttons' : true
        }).then(function(value) {
            if(value) {
                window.location = url;
            }
        })
    }
</script>
@endsection




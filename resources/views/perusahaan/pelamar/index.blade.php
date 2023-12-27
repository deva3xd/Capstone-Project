@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Pelamar</h1>
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
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kategori Loker</th>
                                        <th>Posisi</th>
                                        <th>CV Pelamar</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $data->loker->kategori }}</td>
                                            <td>{{ $data->loker->posisi }}</td>
                                            <td>
                                                    @if ($data->pelamar->cv)
                                                        <a class="btn btn-danger" href="{{ asset('path/to/cv/' . $data->pelamar->cv) }}" download>
                                                            <i class="fas fa-arrow-circle-down"></i> Download CV
                                                        </a>
                                                    @else
                                                        CV tidak tersedia
                                                    @endif
                                                </td>
                                            <td>{{ $data->status }}</td>
                                            <td>
                                                <a href="{{ route('editPelamarPerusahaan', ['id' => $data->id]) }}"
                                                    class="btn btn-warning btn-sm text-white border" role="button">Edit</a>
                                                <a onclick="confirmDelete(this)"
                                                data-url="{{ route('deletePelamarPerusahaan', ['id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm text-white border" role="button">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                'title': 'Konfirmasi Hapus',
                'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
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

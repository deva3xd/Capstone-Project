@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Akun Perusahaan</h1>
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
                        <div class="card-header text-right pb-0" style="padding-top: 1.88rem;">
                            <a href="{{route('createPerusahaan')}}" class="btn btn-primary" role="button">Tambah Data</a>
                        </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah Pegawai</th>
                                        <th>NPWP</th>
                                        <th>Logo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($perusahaans as $perusahaan)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $perusahaan->nama }}</td>
                                        <td>{{ $perusahaan->alamat }}</td>
                                        <td>{{ $perusahaan->no_telp }}</td>
                                        <td>{{ $perusahaan->email }}</td>
                                        <td>{{ $perusahaan->password }}</td>
                                        <td>{{ $perusahaan->deskripsi }}</td>
                                        <td>{{ $perusahaan->jumlah_pegawai }}</td>
                                        <td>{{ $perusahaan->npwp }}</td>
                                        <td>{{ $perusahaan->logo }}</td>
                                        <td class="d-flex">
                                            <a href="{{route('editPerusahaan', ['id' => $perusahaan->id])}}" class="btn btn-warning btn-sm text-white border" role="button">Edit</a>
                                            <a onclick="confirmDelete(this)" data-url="{{route('deletePerusahaan', ['id' => $perusahaan->id])}}" class="btn btn-danger btn-sm text-white border" role="button border">Hapus</a>
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
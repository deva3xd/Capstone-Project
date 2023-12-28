@section('navbar')
    <nav class="navbar navbar-expand-lg py-4 navigation header-padding nav-text-white" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="{{ asset('landing/images/logo.png') }}" alt="" width="50px" height="10px" class="img-fluid">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span></button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('Pelamar') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('Pelamar') }}#tentang_kami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pelamarCariLowongan') }}">Lowongan</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-button border text-lowercase" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu border rounded" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('Profilindex') }}"><i
                                    class="fas fa-user m-1"></i>Profil</a>
                                    <a class="dropdown-item" href="{{ route('Riwayat') }}">
                                        <i class="fas fa-history m-1"></i>Riwayat Lamaran
                                    </a>
                                    <a class="dropdown-item" href="{{ route('Jadwalwawancara') }}">
                                        <i class="fas fa-calendar m-1"></i>Jadwal Wawancara
                                    </a>                                    
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?');"><i class="fas fa-sign-out-alt m-1"></i>Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

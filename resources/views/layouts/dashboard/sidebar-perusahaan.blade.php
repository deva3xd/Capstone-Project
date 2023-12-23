@section('sidebar-perusahaan')
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard Perusahaan</li>
            <li>
                <a href="{{route('dashboardPerusahaan')}}">
                    <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('daftarLoker')}}">
                    <i class="icon-notebook"></i><span class="nav-text">Loker</span>
                </a>
            </li>
            <li>
                <a href="{{route('profilePerusahaan')}}">
                    <i class="icon-user"></i><span class="nav-text">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{route('daftarWawancara')}}">
                    <i class="icon-note"></i><span class="nav-text">Wawancara</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?');"><i class="icon-logout"></i><span class="nav-text">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
@endsection
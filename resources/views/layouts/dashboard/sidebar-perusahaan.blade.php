@section('sidebar-perusahaan')
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard Perusahaan</li>
            <li>
                <a href="{{route('dashboard')}}">
                    <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('daftarLoker')}}">
                    <i class="icon-notebook"></i><span class="nav-text">Loker</span>
                </a>
            </li>
            <li>
                <a href="{{route('daftarWawancara')}}">
                    <i class="icon-user"></i><span class="nav-text">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{route('daftarWawancara')}}">
                    <i class="icon-note"></i><span class="nav-text">Wawancara</span>
                </a>
            </li>
        </ul>
    </div>
@endsection
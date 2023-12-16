@section('sidebar-admin')
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard Admin</li>
            <li>
                <a href="{{ route('dashboardAdmin') }}">
                    <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-pencil"></i><span class="nav-text">Kelola Akun</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Admin</a></li>
                    <li><a href="{{route('daftarPerusahaan')}}">Perusahaan</a></li>
                    <li><a href="{{route('akunPelamar')}}">Member</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="icon-notebook"></i><span class="nav-text">Loker</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-user"></i><span class="nav-text">Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-note"></i><span class="nav-text">Wawancara</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

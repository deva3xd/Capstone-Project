@section('sidebar-admin')
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard Admin</li>
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note"></i><span class="nav-text">Kelola Akun</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Perusahaan</a></li>
                    <li><a href="#">Pelamar</a></li>
                </ul>
            </li>
        </ul>
    </div>
@endsection

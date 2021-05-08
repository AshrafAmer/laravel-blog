<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="dashboard.html">
                <b class="logo-icon">
                    <img src="{{asset('assets/admin/plugins/images/logo-icon.png')}}" alt="homepage" />
                </b>
                <span class="logo-text">
                    <img src="{{asset('assets/admin/plugins/images/logo-text.png')}}" alt="homepage" />
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="margin-right: 30px;">
                        @csrf
                        <button 
                            style="width:85px"
                            class="btn btn-danger text-white" 
                            type="submit">Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
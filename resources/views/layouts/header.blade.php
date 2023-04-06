<div class="container-fluid">
    <div class="d-flex">
    <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <svg class="icon icon-lg">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
        </svg>
    </button>
    <a class="header-brand d-md-none" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset('assets/brand/coreui.svg#full')}}"></use>
        </svg>
    </a>
    @role('Admin')
    <ul class="header-nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
    </ul>
    @endrole
    </div>
    <ul class="header-nav ms-3">
        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                                         role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="{{asset('assets/img/avatars/8.jpg')}}"
                                                   alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">Settings</div>
                </div>
                <a class="dropdown-item" href="{{ route('admin.my_account.edit') }}">
                    <svg class="icon me-2">
                        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-user')}}"></use>
                    </svg>
                    Profile</a><a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-settings')}}"></use>
                    </svg>
                    Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                    <svg class="icon me-2">
                        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout')}}"></use>
                    </svg>
                    Logout</a>
            </div>
        </li>
    </ul>
</div>


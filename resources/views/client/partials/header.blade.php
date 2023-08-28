<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-static border-opacity-10 p-0" style="background-color: #ae0a46;">
    <div class="container-fluid">
        <div class="d-flex d-lg-none me-2">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                <i class="ph-list"></i>
            </button>
        </div>
        @php
            $setting = App\Models\Admin\Setting::latest()->first();
        @endphp

        <div class="navbar-brand flex-1 flex-lg-0">
            <a href="{{ route('homepage') }}" class="d-inline-flex align-items-center ms-2">
                <img src="http://ngenitltd.com/upload/logoimage/1766111041030883.png"
                    alt="" style="width: 65px; height: 45px;">
                {{-- <img src="{{ !file_exists('upload/logoimage/' . $setting->logo) ? url('upload/logoimage/' . $setting->logo) : $setting->logo }}"
                    alt="" width="65px" height="45px"> --}}
                {{-- <img src="{{asset('upload/logoimage/'.$setting->logo)}}" class="d-none d-sm-inline-block h-16px ms-3" alt=""> --}}
            </a>
        </div>

        <ul class="nav flex-row justify-content-end order-1 order-lg-2">
            <li class="nav-item ms-lg-2">
                <a href="{{ route('homepage') }}" type="button"
                    class="navbar-nav-link navbar-nav-link-icon rounded-pill" title="Homepage">
                    <i class="icon-home2"></i>
                </a>
            </li>
            <li class="nav-item ms-lg-2">
                <a href="{{ route('mycart') }}" type="button" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                    title="My Cart">
                    <i class="icon-cart5"></i>
                    <span
                        class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">
                        {{ Cart::count() }}</span>

                </a>
            </li>
            <li class="nav-item ms-lg-2">
                <a type="button" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas"
                    data-bs-target="#demo_config">
                    <i class="ph-gear"></i>
                </a>
            </li>

            <li class="nav-item ms-lg-2">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas"
                    data-bs-target="#notifications">
                    <i class="ph-bell"></i>
                    <span
                        class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                </a>
            </li>

            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                    <div class="status-indicator-container">
                        <img src="{{ !empty(Auth::guard('client')->user()->photo) ? url('upload/Profile/user/' . Auth::guard('client')->user()->photo) : url('upload/no_image.jpg') }}"
                            class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </div>
                    <span class="d-none d-lg-inline-block mx-lg-2">{{ Auth::guard('client')->user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ route('client.profile') }}" class="dropdown-item">
                        <i class="ph-user-circle me-2"></i>
                        My profile
                    </a>
                    <a href="{{ route('client.change.password') }}" class="dropdown-item">
                        <i class="ph-password"></i>
                        Change Password
                    </a>
                    <a href="{{ route('client.orders') }}" class="dropdown-item">
                        <i class="ph-shopping-cart me-2"></i>
                        My orders
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('client.profile') }}" class="dropdown-item">
                        <i class="ph-gear me-2"></i>
                        Account settings
                    </a>
                    <a href="{{ route('client.logout') }}" class="dropdown-item">
                        <i class="ph-sign-out me-2"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

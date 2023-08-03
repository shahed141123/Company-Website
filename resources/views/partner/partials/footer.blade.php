<div class="navbar navbar-sm navbar-footer border-top">
    <div class="container-fluid">
        <span>&copy; {{ date('Y') }} <a href="{{ route('homepage') }}">Ngen It</a></span>

        <ul class="nav">
            {{-- <li class="nav-item">
                <a href="" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                    <div class="d-flex align-items-center mx-md-1">
                        <i class="ph-lifebuoy"></i>
                        <span class="d-none d-md-inline-block ms-2">Support</span>
                    </div>
                </a>
            </li> --}}
            <li class="nav-item ms-md-1">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon text-danger fw-semibold rounded"
                    target="_blank">
                    <div class="d-flex align-items-center mx-md-1">
                        <i class="fab fa-laravel"></i>
                        <span class="d-none d-md-inline-block ms-2">
                            {{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

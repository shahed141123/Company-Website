<div class="row ps-0 mb-1">
    <div class="col-lg-12">
        <ul class="nav nav-tabs border-0 d-flex align-items-center">
            <li class="nav-item breadcrumb-nav-items mb-0 w-lg-auto w-100 mb-lg-0 mb-1">
                <a class="nav-link {{ Route::current()->getName() == 'product.saved' ? 'active' : '' }}"
                    href="{{ route('product.saved') }}">
                    Drafts
                </a>
            </li>
            <li class="nav-item breadcrumb-nav-items mb-0 ms-0 ms-lg-1 w-lg-auto w-100 mb-lg-0 mb-1">
                <a class="nav-link {{ in_array(Route::current()->getName(), ['product-sourcing.index', 'product.sourced']) ? 'active' : '' }}"
                    href="{{ route('product.sourced') }}">
                    Sourced Products
                </a>
            </li>
            <li class="nav-item breadcrumb-nav-items mb-0 ms-0 ms-lg-1 w-lg-auto w-100 mb-lg-0 mb-1">
                <a class="nav-link {{ Route::current()->getName() == 'product.approved' ? 'active' : '' }}"
                    href="{{ route('product.approved') }}">
                    Approved Products
                </a>
            </li>
            <li class="nav-item breadcrumb-nav-items mb-0 ms-0 ms-lg-1 w-lg-auto w-100 mb-lg-0 mb-1">
                <a href="{{ route('product-sourcing.create') }}" class="nav-link">
                    <i class="ph-plus icons_design pe-2"></i> Add
                </a>
            </li>

        </ul>
    </div>
</div>

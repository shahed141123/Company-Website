<ul class="nav nav-tabs border-0 d-flex align-items-center">
    <li class="nav-item ms-1">
        <a class="nav-link {{ Route::current()->getName() == 'product.saved' ? 'active' : '' }}" href="{{ route('product.saved') }}">
            Drafts
        </a>
    </li>
    <li class="nav-item ms-1">
        <a class="nav-link {{ in_array(Route::current()->getName(), ['product-sourcing.index', 'product.sourced']) ? 'active' : '' }}" href="{{ route('product.sourced') }}">
            Sourced Products
        </a>
    </li>
    <li class="nav-item ms-1">
        <a class="nav-link {{ Route::current()->getName() == 'product.approved' ? 'active' : '' }}" href="{{ route('product.approved') }}">
            Approved Products
        </a>
    </li>
    <li class="nav-item ms-1">
        <a href="{{ route('product-sourcing.create') }}"
            class="ms-2 btn btn-primary custom_btn btn-labeled btn-labeled-start">
            <span class="btn-labeled-icon bg-black bg-opacity-20">
                <i class="ph-plus icons_design"></i>
            </span>
            Add
        </a>
    </li>

</ul>

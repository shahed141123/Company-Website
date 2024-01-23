<ul class="nav nav-tabs border-0 d-flex align-items-center pt-1">
    <li class="nav-item">
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
            class="nav-link">
            <i class="ph-plus icons_design pe-2"></i> Add
        </a>
    </li>

</ul>

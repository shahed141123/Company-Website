<ul class="nav nav-tabs border-0 d-flex align-items-center">
    <li class="nav-item ms-1">
        <a class="nav-link {{ Route::current()->getName() == 'rfq.list' ? 'active' : '' }}" href="{{ route('rfq.list') }}">
            Client's RFQ List
        </a>
    </li>
    <li class="nav-item ms-1">
        <a class="nav-link {{ Route::current()->getName() == 'deal.list' ? 'active' : '' }}" href="{{ route('deal.list') }}" href="{{ route('product.sourced') }}">
            Deals List
        </a>
    </li>
    {{-- <li class="nav-item ms-1">
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
    </li> --}}

</ul>

<style>
    .nav-link {
        font-size: 14px;
    }
    .sidebar {
        width: 18rem;
    }
</style>
<div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none me-1">
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <div class="sidebar-section">
            <!-- Navigation -->
            <div class="card rounded-0 border-0 shadow-none">
                <div class="sidebar-section-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle"
                            src="https://www.sragenkab.go.id/assets/images/demo/user-8.jpg" width="150" height="150"
                            alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-pencil"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">{{ Auth::guard('client')->user()->name }}</h6>
                    <span class="text-muted">{{ Auth::guard('client')->user()->username }}</span>
                </div>

                <ul class="nav nav-sidebar px-3">
                    <li class="nav-item">
                        <a href="{{route('client.dashboard')}}" class="nav-link {{ Route::current()->getName() == 'client.dashboard' ? 'active' : '' }} d-flex align-items-center" data-bs-toggle="tab">
                            <span><i class="ph-user me-2" style="color: #ae0a46;"></i></span>
                            <span>My profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('client.deals') }}" class="nav-link {{ Route::current()->getName() == 'client.deals' ? 'active' : '' }} d-flex align-items-center">
                            <span><i class="ph-calendar me-2" style="color: #ae0a46;"></i></span>
                            <span> RFQs</span>
                            <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">
                                {{ App\Models\Admin\Rfq::where('client_id', Auth::guard('client')->user()->id)->count() }}
                            </span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                    <a href="{{ route('client.rfq') }}" class="nav-link d-flex align-items-center">
                        <span><i class="ph-envelope me-2" style="color: #ae0a46;"></i></span>
                        <span>
                            RFQs
                        </span>
                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                    </a>
                </li> --}}
                    <li class="nav-item">
                        <a href="{{route('client.orders')}}" class="nav-link {{ Route::current()->getName() == 'client.orders' ? 'active' : '' }} d-flex align-items-center">
                            <span><i class="ph-shopping-cart me-2" style="color: #ae0a46;"></i></span>
                            <span>Orders</span>
                            <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#offerPrice" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                            <span><i class="ph ph-currency-circle-dollar me-2" style="color: #ae0a46;"></i></span>
                            <span> Offer Price</span>
                            <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#productDraft" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                            <span><i class="ph ph-tag-chevron me-2" style="color: #ae0a46;"></i></span>
                            <span>
                                Product Draft
                            </span>
                            <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                        </a>
                    </li>
                    <li class="nav-item-divider"></li>
                    <li class="nav-item">
                        <a href="{{ route('client.logout') }}" class="nav-link d-flex align-items-center">
                            <span><i class="ph-sign-out " style="color: #ae0a46;"></i></span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /navigation -->
        </div>
    </div>
    <!-- /sidebar content -->
</div>

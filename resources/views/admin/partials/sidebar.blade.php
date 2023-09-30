@php
    //$menus = App\Models\Admin\AdminMenuBuilder::all();
    $setting = App\Models\Site::first();
@endphp


<style>
    .side_baricon {
        font-size: 15px;
    }


    .sidebar-expand-lg.sidebar-main-resized:not(.sidebar-collapsed):not(.sidebar-main-unfold) {
        width: 3rem;
    }


    .sidebar {
        --sidebar-width: 12rem;
    }

    .nav-item-submenu>.nav-link:after {

        left: 10.5rem;
    }


    .nav-link {
        font-size: 15px;
    }


    .sidebar-section-body {
        /* position: relative; */
        padding: 5px 6px 4px 18px;
    }
</style>


<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized"
    style="background-image:url('{{ asset('backend/images/black_sidebar.jpg') }}');background-repeat:no-repeat; background-size: cover;">
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">
                    <img class="img-fluid"
                        src="{{ !empty($setting->logo) ? asset('storage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                        class="img-fluid" alt="" style="width:70px; height:45px;">
                </h5>
                <div>
                    <button type="button" style="background-color: #2e2d2d;"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph ph-arrows-counter-clockwise"></i>
                    </button>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-regular fa-house-day side_baricon"></i>
                        <span class="text-start">Dashboard</span>
                    </a>
                </li>
                @if (auth()->check() && in_array('logistics', json_decode(auth()->user()->department, true)))
                    <li class="nav-item nav-item-submenu {{ Route::current()->getName() == '' ? 'active' : '' }}">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start">
                            <i class="fa-light fa-truck-field side_baricon"></i>
                            <span class="text-start">Supply Chain</span>
                        </a>
                        <ul class="nav-group-sub collapse ms-4" style="">
                            <li class="nav-item"><a href="{{ route('supplychain') }}" class="nav-link">Dashboard</a></li>
                            <li class="nav-item"><a href="{{ route('product-sourcing.index') }}"
                                    class="nav-link">Sourcing</a></li>
                            <li class="nav-item"><a href="{{ route('sas.index') }}" class="nav-link">SAS</a></li>
                            <li class="nav-item"><a href="{{ route('purchase.index') }}" class="nav-link">Purchase</a></li>
                            <li class="nav-item"><a href="{{ route('delivery.index') }}" class="nav-link">Delivery</a></li>
                        </ul>
                    </li>
                @endif
                @if (auth()->check() && in_array('business', json_decode(auth()->user()->department, true)))
                    <li class="nav-item nav-item-submenu {{ Route::current()->getName() == '' ? 'active' : '' }}">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start">
                            <i class="fa-light fa-business-time side_baricon"></i>
                            <span class="text-start">Business</span></a>
                        <ul class="nav-group-sub collapse ms-4" style="">
                            <li class="nav-item"><a href="{{ route('business.index') }}" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('rfq-manage.index') }}" class="nav-link">RFQ
                                    Management</a></li>
                            <li class="nav-item"><a href="{{ route('sales-dashboard.index') }}" class="nav-link"> Sales</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('marketing-dashboard.index') }}"
                                    class="nav-link">Marketing</a></li>
                            <li class="nav-item"><a href="{{ route('show-case-video.index') }}"
                                    class="nav-link">Showcase</a></li>
                        </ul>


                    </li>
                @endif
                @if (auth()->check() && in_array('accounts', json_decode(auth()->user()->department, true)))
                    <li class="nav-item nav-item-submenu {{ Route::current()->getName() == '' ? 'active' : '' }}">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-calculator side_baricon"></i>
                            <span class="text-start ps-1">Accounts Finance</span></a>
                        <ul class="nav-group-sub collapse ms-4" style="">
                            <li class="nav-item"><a href="{{ route('accounts-finance.index') }}"
                                    class="nav-link">Dashboard</a></li>
                            <li class="nav-item"><a href="{{ route('account-payable.index') }}" class="nav-link"> Accounts
                                    Payable</a></li>
                            <li class="nav-item"><a href="{{ route('account-receivable.index') }}"
                                    class="nav-link">Accounts Receivable</a></li>
                            <li class="nav-item"><a href="{{ route('account-profit-loss.index') }}"
                                    class="nav-link">Accounts Profit Loss</a></li>
                            <li class="nav-item"><a href="{{ route('expense.index') }}" class="nav-link">Expense</a></li>
                            <li class="nav-item"><a href="{{ route('expense-category.index') }}" class="nav-link">Expense
                                    Category</a></li>
                            <li class="nav-item"><a href="{{ route('expense-type.index') }}" class="nav-link">Expense
                                    Type</a></li>
                        </ul>


                    </li>
                @endif
                @if (auth()->check() && in_array('site', json_decode(auth()->user()->department, true)))
                    <li class="nav-item nav-item-submenu {{ Route::current()->getName() == '' ? 'active' : '' }}">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start">
                            <i class="fa-duotone fa-sidebar-flip side_baricon"></i>
                            <span class="text-start ps-1">Site Contents</span></a>
                        <ul class="nav-group-sub collapse ms-4" style="">
                            <li class="nav-item"><a href="{{ route('site-content.index') }}"
                                    class="nav-link">Dashboard</a></li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}"
                                    class="nav-link">Techglossy</a></li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}"
                                    class="nav-link">Feature</a></li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}" class="nav-link">Client
                                    Story</a></li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}"
                                    class="nav-link">Showcase</a></li>
                            <li class="nav-item"><a href="{{ route('policy.index') }}" class="nav-link">Terms and
                                    Policy</a></li>
                        </ul>


                    </li>
                @endif
                @if (auth()->check() && in_array('site', json_decode(auth()->user()->department, true)))
                    <li class="nav-item nav-item-submenu {{ Route::current()->getName() == '' ? 'active' : '' }}">
                        <a href="{{ route('crm.index') }}"
                            class="nav-link d-flex align-items-center justify-content-start">
                            <i class="fa-light fa-people-roof side_baricon"></i>
                            <span class="text-start ">CRM</span></a>
                        <ul class="nav-group-sub collapse ms-4" style="">
                            <li class="nav-item"><a href="{{ route('crm.index') }}" class="nav-link">Dashboard</a></li>
                            <li class="nav-item"><a href="{{ route('contact.index') }}" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('support') }}" class="nav-link">Support</a></li>
                            <li class="nav-item"><a href="{{ route('feedback.index') }}" class="nav-link">Feed Back</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Live Chat</a></li>
                        </ul>


                    </li>
                @endif
                @if (auth()->check() && in_array('admin', json_decode(auth()->user()->department, true)))
                    <li class="nav-item nav-item-submenu {{ Route::current()->getName() == '' ? 'active' : '' }}">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start">
                            <i class="fa-light fa-user-tie side_baricon"></i>
                            <span class="text-start ps-1">HR & Admin</span></a>
                        <ul class="nav-group-sub collapse ms-4" style="">
                            <li class="nav-item"><a href="{{ route('hr-and-admin.index') }}"
                                    class="nav-link">Dashboard</a></li>
                            <li class="nav-item"><a href="{{ route('leaveDashboard') }}"
                                    class="nav-link">Leave</a></li>
                            <li class="nav-item"><a href="{{ route('machine.home') }}"
                                    class="nav-link">Attendance</a></li>
                            <li class="nav-item"><a href="{{ route('employee.index') }}" class="nav-link">Employees</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('job.index') }}" class="nav-link">Job Post</a></li>
                            <li class="nav-item"><a href="{{ route('job.registration') }}" class="nav-link">Job
                                    Applier's List</a></li>
                        </ul>


                    </li>
                @endif
                @if (auth()->check() && in_array('site', json_decode(auth()->user()->department, true)))
                    <li class="nav-item nav-item-submenu {{ Route::current()->getName() == '' ? 'active' : '' }}">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start">
                            <i class="fa-light fa-screwdriver-wrench side_baricon"></i>
                            <span class="text-start ps-1">Site Setting</span></a>
                        <ul class="nav-group-sub collapse ms-4" style="">
                            <li class="nav-item"><a href="{{ route('site-setting.index') }}"
                                    class="nav-link">Dashboard</a></li>
                            <li class="nav-item"><a href="{{ route('supplychain') }}" class="nav-link">Supply Chain</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('marketing-dashboard.index') }}" class="nav-link">
                                    Business</a></li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}"
                                    class="nav-link">Accounts</a></li>
                            <li class="nav-item"><a href="{{ route('hr-and-admin.index') }}" class="nav-link">HR
                                    Admin</a></li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}" class="nav-link">Website
                                    Settings</a></li>
                            <li class="nav-item"><a href="{{ route('site-content.index') }}" class="nav-link">Role
                                    Settings</a></li>
                        </ul>


                    </li>
                @endif
            </ul>
        </div>








        <!-- Main navigation -->


        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>

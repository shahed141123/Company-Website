@extends('admin.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <style>
        .accordion {
            --accordion-border-width: 0px !important;
        }

        .section-border {
            border-bottom: 0.5px solid #acdaf063;
        }

        .card_title {
            text-align: left !important;
        }

        .btn-link {
            background-color: #247297;
            color: white;
            padding: 0px 4px 0px;
        }

        .btn-link:hover {
            background-color: transparent;
            color: #247297;
            padding: 0px 4px 0px;
        }

        .btn-circle {
            padding: 1px 1px;
            border-radius: 15px;
            text-align: center;
            font-size: 10px;
            line-height: 0px;
            background: transparent;
            color: #247297;
            border-radius: 50%;
            border: 1px solid #247297;
        }

        .link_title_admin {
            font-size: 12px;
        }

        .site_content_main_card {
            height: 16rem;
        }

        .card_title_info {
            color: #247297;
            border-bottom: 1px solid #247297;
            font-size: 16px;
        }
    </style>
    <div class="content-wrapper">
        <div class="content p-0">
            <!-- Page header -->
            <section class="shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Page Destination/ BreadCrumb --}}
                    <div class="page-header-content d-lg-flex ">
                        <div class="d-flex px-2">
                            <div class="breadcrumb py-2">
                                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                <a href="" class="breadcrumb-item"><span class="breadcrumb-item active">Site
                                        Settings</span></a>
                            </div>
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                    {{-- Inner Page Tab --}}

                    <!-- Basic tabs -->
                    <div>
                        <a href="{{ route('sales-dashboard.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-truck-field me-1" style="font-size: 12px;"></i>
                                <span>Supply Chain</span>
                            </div>

                        </a>
                        <a href="{{ route('marketing-dashboard.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                                <span> Business</span>
                            </div>
                        </a>
                        <a href="" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                                <span>Accounts</span>
                            </div>
                        </a>
                        <a href="" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-user-tie me-1" style="font-size: 12px;"></i>
                                <span>HR Admin</span>
                            </div>
                        </a>
                        <a href="{{ route('setting.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-cog me-1" style="font-size: 12px;"></i>
                                <span>Website Settings</span>
                            </div>
                        </a>
                        <a href="" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-gallery-thumbnails me-1" style="font-size: 12px;"></i>
                                <span>Role Settings</span>
                            </div>
                        </a>
                    </div>
            </section>
            <!-- /page header -->
            <!-- Sales Chain Page -->
            <section>
                <div class="container-fluid ">
                    <div class="row py-2">
                        <h5 class="mb-0 text-center mx-auto bg-secondary"
                            style="border-bottom: 1px solid #247297; width: 13%;
                        color: white;">
                            Site Settings</h5>
                    </div>
                    {{-- Fisrt Row --}}
                    <div class="row mt-1">
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Website Settings</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('setting.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Site Settings</span>
                                                </div>
                                                <a href="{{ route('setting.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('faq.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">FAQs</span>
                                                </div>
                                                <a href="{{ route('faq.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row gx-1 mt-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('frontend-navbar-module.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Fro. Menu Builder</span>
                                                </div>
                                                <a href="{{ route('frontend-navbar-module.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('office-location.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Office Locatios</span>
                                                </div>
                                                <a href="{{ route('office-location.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Supply Chain</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('setting.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">DMAR</span>
                                                </div>
                                                <a href="{{ route('setting.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('faq.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">CMAR</span>
                                                </div>
                                                <a href="{{ route('faq.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row gx-1 mt-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('frontend-navbar-module.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">EMAR</span>
                                                </div>
                                                <a href="{{ route('frontend-navbar-module.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Business</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('setting.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Knowledge</span>
                                                </div>
                                                <a href="{{ route('setting.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('faq.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Presentation</span>
                                                </div>
                                                <a href="{{ route('faq.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row gx-1 mt-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('frontend-navbar-module.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Showcase BD</span>
                                                </div>
                                                <a href="{{ route('frontend-navbar-module.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Accounts</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('setting.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Knowledge</span>
                                                </div>
                                                <a href="{{ route('setting.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('faq.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Presentation</span>
                                                </div>
                                                <a href="{{ route('faq.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row gx-1 mt-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('frontend-navbar-module.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Showcase BD</span>
                                                </div>
                                                <a href="{{ route('frontend-navbar-module.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Second Row --}}
                    <div class="row mt-1">
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                HR Admin</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('setting.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Site Settings</span>
                                                </div>
                                                <a href="{{ route('setting.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('faq.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">FAQs</span>
                                                </div>
                                                <a href="{{ route('faq.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row gx-1 mt-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('frontend-navbar-module.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Fro. Menu Builder</span>
                                                </div>
                                                <a href="{{ route('frontend-navbar-module.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('office-location.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Office Locatios</span>
                                                </div>
                                                <a href="{{ route('office-location.index') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Role Settings</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('all.permission') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">All Permission </span>
                                                </div>
                                                <a href="{{ route('all.permission') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('all.roles') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">All Roles </span>
                                                </div>
                                                <a href="{{ route('all.roles') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row gx-1 mt-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('all.roles') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Roles In Permission</span>
                                                </div>
                                                <a href="{{ route('all.roles') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('all.roles.permission') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">All Roles in Permission</span>
                                                </div>
                                                <a href="{{ route('all.roles.permission') }}">
                                                    <button type="button" class="btn btn-default btn-circle"><i
                                                            class="ph ph-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sales Chain Page -->

        </div>
    </div>
@endsection

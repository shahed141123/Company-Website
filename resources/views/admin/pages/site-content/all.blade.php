@extends('admin.master')
@section('content')
    <style>
        .section-border {
            border-bottom: 0.5px solid #acdaf063;
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

        .site_content_main_card {
            height: 19.5rem;
        }

        .border-right {
            border-top-right-radius: 50px !important;
            border-bottom-right-radius: 50px !important;
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
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                <a href="" class="breadcrumb-item"><span class="breadcrumb-item active">Site
                                        Contents</span></a>
                            </div>
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                    {{-- Inner Page Tab --}}
                    <!-- Header Navigation Btn -->
                    <div>
                        <a href="{{ route('blog.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                                <span>Blog</span>
                            </div>
                        </a>

                        <a href="{{ route('techglossy.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                                <span>Techglossy</span>
                            </div>
                        </a>
                        <a href="{{ route('feature.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-user-tie me-1" style="font-size: 12px;"></i>
                                <span>Feature</span>
                            </div>
                        </a>
                        <a href="{{ route('clientstory.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-cog me-1" style="font-size: 12px;"></i>
                                <span>Client Story</span>
                            </div>
                        </a>
                        <a href="{{ route('show-case-video.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-gallery-thumbnails me-1" style="font-size: 12px;"></i>
                                <span>Showcase</span>
                            </div>
                        </a>
                        <a href="{{ route('policy.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-gallery-thumbnails me-1" style="font-size: 12px;"></i>
                                <span>Terms and Policy</span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- /page header -->
            <!-- Sales Chain Page -->
            <section>
                <div class="container-fluid mb-2">
                    <div class="row py-2">
                        <h5 class="mb-0 text-center mx-auto">Site Contents</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-2 mx-auto">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="m-0 p-0 card-main-title text-center">Category</h6>
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="emplpyee-card">
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="m-0"><i class="fa-solid fa-list badge-icons me-2"></i>
                                                            </h6>
                                                            <h6 class="text-muted m-0">Total Category</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            8
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="m-0"><i class="fa-solid fa-list-check badge-icons me-2"></i>
                                                            </h6>
                                                            <h6 class="text-muted m-0">Sub Category</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            40</h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="m-0"><i class="fa-solid fa-table-list badge-icons me-2"></i>
                                                            </h6>
                                                            <h6 class="text-muted m-0">Sub Sub Category</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            20</h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="m-0"><i class="fa-solid fa-box badge-icons me-2"></i>
                                                            </h6>
                                                            <h6 class="text-muted m-0">Total Product</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            1,800</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="m-0 p-0 card-main-title text-center">Content Info</h6>
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="emplpyee-card">
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Brand</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            16
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Solution</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            40</h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Project</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            20</h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Feature</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            50</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="m-0 p-0 card-main-title text-center">All Pages</h6>
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="emplpyee-card">
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Common</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            16
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Single</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            40</h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Blogs</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            20</h6>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="text-muted m-0">Techglossy</h6>
                                                        </div>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            50</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2 mx-auto">
                        <div class="row mt-1 mx-auto">
                            <div class="col-lg-6 ps-0">
                                <h6 class="m-0 p-0 card-main-title text-center">Page Builder</h6>
                                <div class="card rounded-0 site_content_main_card">
                                    <div class="card-body"
                                        style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                        {{-- Link Start --}}
                                        <div class="row gx-1">
                                            <div class="col-lg-6">
                                                <a href="{{ route('row.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted"> Row Builder</span>
                                                        </div>
                                                        <a href="{{ route('row.create') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('solutionCard.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Solution Card</span>
                                                        </div>
                                                        <a href="{{ route('solutionCard.create') }}">
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
                                                <a href="{{ route('homepage.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Homepage</span>
                                                        </div>
                                                        <a href="{{ route('homepage.create') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('learnMore.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Learnmore Page</span>
                                                        </div>
                                                        <a href="{{ route('learnMore.create') }}">
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
                                                <a href="{{ route('software-info-page.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Software Info</span>
                                                        </div>
                                                        <a href="{{ route('software-info-page.create') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('software-common-page.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Software Common</span>
                                                        </div>
                                                        <a href="{{ route('software-common-page.create') }}">
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
                                                <a href="{{ route('hardware-info-page.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Hardware Info</span>
                                                        </div>
                                                        <a href="{{ route('hardware-info-page.create') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('hardware-common-page.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Hardware Common</span>
                                                        </div>
                                                        <a href="{{ route('hardware-common-page.create') }}">
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
                                                <a href="{{ route('industry.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Industry</span>
                                                        </div>
                                                        <a href="{{ route('industry.index') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('industryPage.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Industry Details</span>
                                                        </div>
                                                        <a href="{{ route('industryPage.create') }}">
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
                                                <a href="{{ route('brandPage.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Brand Page</span>
                                                        </div>
                                                        <a href="{{ route('brandPage.create') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('solutionDetails.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Solution Details</span>
                                                        </div>
                                                        <a href="{{ route('solutionDetails.create') }}">
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
                                                <a href="{{ route('what-we-do-page.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">What We Do</span>
                                                        </div>
                                                        <a href="{{ route('what-we-do-page.create') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('about-us.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">About Us</span>
                                                        </div>
                                                        <a href="{{ route('about-us.create') }}">
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
                            <div class="col-lg-6 pe-0">
                                <h6 class="m-0 p-0 card-main-title text-center">Portfolio</h6>
                                <div class="card rounded-0 site_content_main_card">
                                    <div class="card-body">
                                        {{-- Link Start --}}
                                        <div class="row gx-1 mt-1">
                                            <div class="col-lg-6">
                                                <a href="{{ route('portfolio-category.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Portfolio Category</span>
                                                        </div>
                                                        <a href="{{ route('portfolio-category.index') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('portfolio-client.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Portfolio Clients</span>
                                                        </div>
                                                        <a href="{{ route('portfolio-client.index') }}">
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
                                                <a href="{{ route('portfolio-team.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Portfolio Team</span>
                                                        </div>
                                                        <a href="{{ route('portfolio-team.index') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('portfolio-choose-us.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Portfolio Choose</span>
                                                        </div>
                                                        <a href="{{ route('portfolio-choose-us.index') }}">
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
                                                <a href="{{ route('portfolio-page.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Portfolio Page</span>
                                                        </div>
                                                        <a href="{{ route('portfolio-page.index') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('portfolio-detail.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Portfolio Details</span>
                                                        </div>
                                                        <a href="{{ route('portfolio-detail.index') }}">
                                                            <button type="button" class="btn btn-default btn-circle"><i
                                                                    class="ph ph-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 mt-1">
                                                <a href="{{ route('portfolio-client-feedback.index') }}">
                                                    <div
                                                        class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-0 border-right">
                                                        <div>
                                                            <span class="link_title_admin text-muted">Client Feedback</span>
                                                        </div>
                                                        <a href="{{ route('portfolio-page.index') }}">
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
                    </div>
                </div>
            </section>
            <!-- Sales Chain Page -->
        </div>
    </div>
@endsection

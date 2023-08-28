@extends('admin.master')
@section('content')
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
                        <h5 class="mb-0 text-center mx-auto bg-secondary"
                            style="border-bottom: 1px solid #247297; width: 13%;
                        color: white;">
                            Site Contents</h5>
                    </div>
                    <div class="row mt-1">
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Page Builder</h6>
                            <div class="card site_content_main_card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('row.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin"> Row Builder</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Solution Card</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Homepage</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Learnmore Page</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Software Info</span>
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
                                        <a href="{{ route('hardware-info-page.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Hardware Info</span>
                                                </div>
                                                <a href="{{ route('hardware-info-page.create') }}">
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Industry</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Industry Details</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Brand Page</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Solution Details</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">What We Do</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">About Us</span>
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
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Portfolio</h6>
                            <div class="card site_content_main_card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Link Start --}}
                                <div class="row gx-1 mt-1">
                                    <div class="col-lg-6">
                                        <a href="{{ route('portfolio-category.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Portfolio Category</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Portfolio Clients</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Portfolio Team</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Portfolio Choose</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Portfolio Page</span>
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
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Portfolio Details</span>
                                                </div>
                                                <a href="{{ route('portfolio-detail.index') }}">
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
                                        <a href="{{ route('portfolio-client-feedback.index') }}">
                                            <div
                                                class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                <div>
                                                    <span class="link_title_admin">Client Feedback</span>
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
                        {{--<div class="col-lg-3">
                                <h6 class="card_title_info mb-0 pt-2 text-center">
                                    Terms and Policy</h6>
                                <div class="card site_content_main_card card-body border-0 shadow-none mb-0 "
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">

                                    <div class="row gx-1 mt-1">
                                        <div class="col-lg-6">
                                            <a href="{{ route('all.permission') }}">
                                                <div
                                                    class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                    <div>
                                                        <span class="link_title_admin">All Permission</span>
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
                                                        <span class="link_title_admin">All Roles</span>
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
                                                        <span class="link_title_admin">All Roles in Permission</span>
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
                                            <a href="{{ route('add.roles.permission') }}">
                                                <div
                                                    class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                    <div>
                                                        <span class="link_title_admin">Roles in Permission</span>
                                                    </div>
                                                    <a href="{{ route('add.roles.permission') }}">
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
                                    Techglossy</h6>
                                <div class="card site_content_main_card card-body border-0 shadow-none mb-0 "
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">

                                    <div class="row gx-1 mt-1">
                                        <div class="col-lg-6">
                                            <a href="{{ route('all.permission') }}">
                                                <div
                                                    class="box_details d-flex justify-content-between align-items-center bg-light p-1 rounded-sm">
                                                    <div>
                                                        <span class="link_title_admin">Knowledge </span>
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
                                                        <span class="link_title_admin">Presentation</span>
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
                                                        <span class="link_title_admin">Showcase BD </span>
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
                                </div>
                            </div> --}}
                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Quick Link</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="box_details d-flex justify-content-between">
                                    <a class="text-center py-1" href="{{route('homepage.index')}}" style="color: #247297; font-size: 14px;">
                                        Homepage
                                    </a>
                                    <a class="text-center py-1" href="{{route('learnMore.index')}}" style="color: #247297; font-size: 14px;">
                                        Learnmore Page
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a class="text-center py-1" href="{{route('portfolio-page.index')}}" style="color: #247297; font-size: 14px;">
                                        Portfolio
                                    </a>
                                    <a class="text-center py-1" href="{{route('policy.index')}}" style="color: #247297; font-size: 14px;">
                                        Terms & Policy
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a class="text-center py-1" href="{{route('blog.index')}}" style="color: #247297; font-size: 14px;">
                                        Blogs
                                    </a>
                                    <a class="text-center py-1" href="{{route('clientstory.index')}}" style="color: #247297; font-size: 14px;">
                                        Client Story
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a class="text-center py-1" href="{{route('techglossy.index')}}" style="color: #247297; font-size: 14px;">
                                        TechGlossary
                                    </a>
                                    <a class="text-center py-1" href="{{route('feature.index')}}" style="color: #247297; font-size: 14px;">
                                        Feature
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a class="text-center py-1" href="{{route('document.index')}}" style="color: #247297; font-size: 14px;">
                                        Document Uploads
                                    </a>
                                    <a class="text-center py-1" href="{{route('technology-data.index')}}" style="color: #247297; font-size: 14px;">
                                        Technology Data
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">

                        <div class="col-lg-3">
                            <h6 class="card_title_info mb-0 pt-2 text-center">
                                Quick Link</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="box_details d-flex justify-content-between">
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Homepage
                                    </a>
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Learnmore Page
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Homepage 2
                                    </a>
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Learnmore Page 2
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Homepage 3
                                    </a>
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Learnmore Page 3
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Homepage 4
                                    </a>
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Learnmore Page 4
                                    </a>
                                </div>
                                <div class="box_details d-flex justify-content-between">
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Homepage 5
                                    </a>
                                    <a href="" style="color: #247297; font-size: 12px;">
                                        Learnmore Page 5
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </div>
            </section>
            <!-- Sales Chain Page -->
        </div>
    </div>
@endsection

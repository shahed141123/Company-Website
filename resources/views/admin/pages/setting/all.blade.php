@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Website Settings Management</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->

            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a href="#site" class="nav-link active" data-bs-toggle="tab">
                                        Site
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#smtp" class="nav-link " data-bs-toggle="tab">
                                        Smtp
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#seo" class="nav-link" data-bs-toggle="tab">
                                        Seo
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="site">
                                    @include('admin.pages.setting.partials.site')
                                </div>
                                <div class="tab-pane fade" id="seo">
                                    @include('admin.pages.setting.partials.seo')
                                </div>
                                <div class="tab-pane fade" id="smtp">
                                    @include('admin.pages.setting.partials.smtp')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- /content area -->

        <!-- /inner content -->

    </div>
@endsection

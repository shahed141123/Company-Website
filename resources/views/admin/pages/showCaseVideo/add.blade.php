@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Site Content</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                <div>
                    <a href="http://127.0.0.1:3000/admin/blog" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                            <span>Show Case Video List</span>
                        </div>
                    </a>

                    <a href="#" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                            <span>Site Content</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    {{-- Headline --}}
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('feature.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold">Add Show Case Videos Form</p>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <a href="{{ route('show-case-video.index') }}" class="btn navigation_btn"
                                style="background-color: #ffffff; color: black">
                                <span>All Show Case Videos</span>
                            </a>
                        </div>
                    </div>
                    {{-- Form --}}
                    <form method="post" action="{{ route('show-case-video.store') }}">
                        @csrf
                        <div class="p-3 border shadow-sm">
                            <div class="bg-light p-3 rounded-2">
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <span class="mb-0">Type</span>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="type" class="form-control select" data-placeholder="Chose any type">
                                            <option></option>
                                            <option value="sales">Sales</option>
                                            <option value="technical">Technical</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <span class="mb-0">Category Name</span>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="category_id[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">
                                            @foreach ($categories as $id => $categorie)
                                                <option value="{{ $id }}">{{ $categorie }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <span class="mb-0">Industries Name</span>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="industry_id[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">
                                            @foreach ($industries as $id => $industrie)
                                                <option value="{{ $id }}">{{ $industrie }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <span class="mb-0">Brands Name</span>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="brand_id[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">
                                            @foreach ($brands as $id => $brand)
                                                <option value="{{ $id }}">{{ $brand }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <span class="mb-0">Url </span>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="url" name="url" class="form-control maxlength" maxlength="300" />
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" class="submit_btn from-prevent-multiple-submits px-2" value="Submit" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection
@push('scripts')
    <script>
        $('.yearselect').yearselect({
            start: 2019,
            end: 2040
        });
    </script>
@endpush

@extends('admin.master')
@section('content')
    <style>
        .label_style {
            width: 151px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('knowledge.index') }}" class="breadcrumb-item">knowledge Management</a>
                        <a href="" class="breadcrumb-item">Edit</a>
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
        <div class="content pt-2 w-50 mx-auto">
            <div class="text-center">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">

                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('solutionDetails.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold"> Edit Knowledge </p>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <a href="{{ route('solutionDetails.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                    <span>Row</span>
                                </div>
                            </a>
                            <a href="{{ route('purchase.index') }}" class="btn navigation_btn ms-2">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                    <span>Solution</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <form method="post" action="{{ route('knowledge.update', $knowledge->id) }}" enctype="multipart/form-data"
                    id="myform">
                    @csrf
                    @method('PUT')
                    <!--Banner Section-->
                    <div class="container">
                        <div class="row g-2 p-1">
                            <div class="col">
                                <span class="mt-1 fw-bold text-info">Banner Section</span>
                                <div class="px-2 py-2 rounded bg-light">
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Type</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="type" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose Industry Title"
                                                required>
                                                <option></option>
                                                <option @selected($knowledge->type == 'sales') value="sales">Sales</option>
                                                <option @selected($knowledge->type == 'technical') value="technical">Technical</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Category Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="category_id[]" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose Industry Title"
                                                required>
                                                @php
                                                    $categoryIds = isset($knowledge->category_id) ? json_decode($knowledge->category_id, true) : [];
                                                    $categories = app\Models\Admin\Category::pluck('title', 'id')->toArray();
                                                @endphp

                                                @foreach ($categories as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($categoryIds) && in_array($id, $categoryIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Industries Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="industry_id[]" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose Industry Title"
                                                required>
                                                @php
                                                    $industryIds = isset($knowledge->industry_id) ? json_decode($knowledge->industry_id, true) : [];
                                                    $industries = app\Models\Admin\Industry::pluck('title', 'id')->toArray();
                                                @endphp

                                                @foreach ($industries as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($industryIds) && in_array($id, $industryIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Brands Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="brand_id[]" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose Industry Title"
                                                required>
                                                @php
                                                    $brandIds = isset($knowledge->brand_id) ? json_decode($knowledge->brand_id, true) : [];
                                                    $brands = app\Models\Admin\Brand::pluck('title', 'id')->toArray();
                                                @endphp

                                                @foreach ($brands as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($brandIds) && in_array($id, $brandIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Brands Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="brand_id[]" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose Industry Title"
                                                required>
                                                @php
                                                    $brandIds = isset($knowledge->brand_id) ? json_decode($knowledge->brand_id, true) : [];
                                                    $brands = app\Models\Admin\Brand::pluck('title', 'id')->toArray();
                                                @endphp

                                                @foreach ($brands as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($brandIds) && in_array($id, $brandIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Brochure</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="file" name="brochure" class="form-control form-control-sm" id="brochure" />
                                            <div class="form-text">Accepts only pdf</div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pb-2 pe-3">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 4px 9px;">Submit</button>
                    </div>
            </div>

            </form>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

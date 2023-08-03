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
                        <span class="breadcrumb-item active">Show Case Video Management</span>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Show Case Video edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('show-case-video.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Show Case Video
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Show Case Video Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('show-case-video.update', $showCaseVideo->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Type</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="type" class="form-control select"
                                                    data-placeholder="Chose any type">
                                                    <option></option>
                                                    <option @selected($showCaseVideo->type == 'sales') value="sales">Sales</option>
                                                    <option @selected($showCaseVideo->type == 'technical') value="technical">Technical
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                        {{-- @dd($categories) --}}
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Category Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="category_id[]" class="form-control multiselect"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        $categoryIds = isset($showCaseVideo->category_id) ? json_decode($showCaseVideo->category_id, true) : [];
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

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Industry Name </h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="industry_id[]" class="form-control multiselect"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">

                                                    @php
                                                        $industryIds = isset($showCaseVideo->industry_id) ? json_decode($showCaseVideo->industry_id, true) : [];
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
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Brands Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="brand_id[]" class="form-control multiselect"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        $brandIds = isset($showCaseVideo->brand_id) ? json_decode($showCaseVideo->brand_id, true) : [];
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
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Url </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="url" value="{{ $showCaseVideo->url }}" name="url"
                                                    class="form-control maxlength" maxlength="300" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
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

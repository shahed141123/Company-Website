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
                        <span class="breadcrumb-item active">Presentation Management</span>
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
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mb-0 text-center">Add Presentation Form</h4>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('presentation.index') }}" type="button"
                                        class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        All Presentation
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="myform" method="post" action="{{ route('presentation.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Type</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
                                        <select name="type" class="form-control select"
                                            data-placeholder="Chose any type">
                                            <option></option>
                                            <option value="sales">Sales</option>
                                            <option value="technical">Technical</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Category Name</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
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
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Industries Name</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
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
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Brands Name</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
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
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Presentation </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="presentation" class="form-control" id="presentation" />
                                        <div class="form-text">Accepts only pdf</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                class="ph-paper-plane-tilt ms-2"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('site-content.index') }}" class="breadcrumb-item">Site Contents</a>
                            <a href="{{ route('row.index') }}" class="breadcrumb-item">Row Builder</a>
                            <span class="breadcrumb-item active">Add</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
        </section>
        <!-- /page header -->
        <!-- product-sourcing Content Start -->
        <section>
            <div class="container-fluid mt-2">
                <div class="row rounded-0 mt-1">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="py-1 px-4 mt-3 rounded-1" style="background-color: #247297">
                            <div>
                                <h5 class="mb-0 text-white text-center">All Rows</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2">
                        <div>
                            <form id="myform1" method="post" action="{{ route('row.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card pb-1">
                                    <!--Banner Section-->
                                    <div class="container">
                                        <div class="row mx-1 mt-2">
                                            <div class="col-lg-12">
                                                <span class="mt-1 fw-bold text-info">Row Image Area</span>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="d-flex align-items-center">
                                                            <label class="text-black ">Badge</label>
                                                            <div class="input-group">
                                                                <input name="badge" type="text" maxlength="250"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Enter Badge">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-1">
                                                            <label class="text-black me-2">Title</label>
                                                            <div class="input-group">
                                                                <input name="title" type="text"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Enter Image With Row Title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="d-flex align-items-center pt-1">
                                                            <label class="label_style">Row
                                                                Image</label>
                                                            <div class="input-group">
                                                                <input name="image" id="image" accept="image/*"
                                                                    type="file" class="form-control form-control-sm"
                                                                    placeholder="Enter Row Image">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center pt-1">
                                                            <label class="label_style">Row
                                                                Button Name</label>
                                                            <div class="input-group">
                                                                <input name="btn_name" type="text" maxlength="250"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Enter Row Button Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="d-flex align-items-center pt-1">
                                                            <label class="label_style">Row
                                                                Button Link</label>
                                                            <div class="input-group">
                                                                <input name="link" type="url" maxlength="250"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Enter Row Button Link">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="mt-1 fw-bold text-info">Image Info Area</span>
                                                <div class="px-2 py-2 rounded bg-light">
                                                    <div class="pt-1">
                                                        <label class="w-100">Description</label>
                                                        <textarea class="form-control form-control-sm" name="description" id="long_desc"
                                                            style=" font-size: 12px; font-weight: 500;" rows="2" cols="60"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="my-2 text-end">
                                                    <button type="submit"
                                                        class="submit_btn rounded-0 from-prevent-multiple-submits"
                                                        style="padding: 6px 9px;" id="submitbtn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

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
                    <div class="col-lg-10 offset-1">
                        <div class="row">
                            <div class="col-12" style="background-color:rgb(211, 174, 187)">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-8">
                                        <h6 class="text-white p-0 m-0 fw-bold text-center"> Add Row</h6>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item me-2">
                                                <a href="#imageWithRow" class=" nav-link active cat-tab1 p-1"
                                                    data-bs-toggle="tab">
                                                    <p class="m-0 p-1">
                                                        Row with Image</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#rowWithList" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                                    <p class="m-0 p-1">
                                                        Row with List </p>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="imageWithRow">
                                        <div>
                                            <form id="myform1" method="post" action="{{ route('row.store') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card pb-1">
                                                    <!--Banner Section-->
                                                    <div class="container">
                                                        <div class="mt-2">
                                                            <span class="fw-bold text-info ms-1">Image Form</span>
                                                        </div>
                                                        <div class="row rounded bg-light mx-1">
                                                            <div class="col p-1">
                                                                <div class="d-flex align-items-center">
                                                                    <label
                                                                        class="col-form-label  col-lg-2 p-0 text-start text-black ">Badge</label>
                                                                    <div class="input-group">
                                                                        <input name="badge" type="text" maxlength="250"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Badge">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col p-1">

                                                                <div class="d-flex align-items-center">
                                                                    <label
                                                                        class="col-form-label col-lg-2 p-0 text-start text-black">Title</label>
                                                                    <div class="input-group">
                                                                        <input name="title" type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Image With Row Title">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row g-2 pb-1 ">
                                                            <div class="col p-2">
                                                                <span class="mt-1 fw-bold text-info">Image Info Area</span>
                                                                <div class="px-2 py-2 rounded bg-light">
                                                                    <div class="pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black w-100">Description</label>
                                                                        <textarea class="form-control form-control-sm" name="description" id="long_desc"
                                                                            style=" font-size: 12px; font-weight: 500;" rows="2" cols="60"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col p-2 mt-4">
                                                                <span class="mt-1 fw-bold text-info">Row Image Area</span>
                                                                <div class="px-2 py-2 rounded bg-light">
                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Row
                                                                            Image</label>
                                                                        <div class="input-group">
                                                                            <input name="image" id="image"
                                                                                accept="image/*" type="file"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Row Image">
                                                                        </div>
                                                                    </div>
                                                                    {{--  --}}
                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Row
                                                                            Button Name</label>
                                                                        <div class="input-group">
                                                                            <input name="btn_name" type="text"
                                                                                maxlength="250"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Row Button Name">
                                                                        </div>
                                                                    </div>
                                                                    {{--  --}}
                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Row
                                                                            Button Link</label>
                                                                        <div class="input-group">
                                                                            <input name="link" type="url"
                                                                                maxlength="250"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Row Button Link">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer border-0 pb-0 pe-0 mt-4 mr-2">
                                                                    <button type="submit"
                                                                        class="submit_btn rounded-0 from-prevent-multiple-submits"
                                                                        style="padding: 6px 9px;"
                                                                        id="submitbtn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show" id="rowWithList">
                                        <div>
                                            <form id="myform2" method="post" action="{{ route('row.store') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card pb-1">
                                                    <!--Banner Section-->
                                                    <div class="container">
                                                        <div class="mt-2">
                                                            <span class="mt-2 fw-bold text-info ms-1">Row Form</span>
                                                        </div>
                                                        <div class="row rounded bg-light mx-1">
                                                            <div class="col p-1">
                                                                <div class="d-flex align-items-center pt-1">
                                                                    <label
                                                                        class="col-form-label col-lg-2 p-0 text-start text-black">Badge</label>
                                                                    <div class="input-group">
                                                                        <input name="badge" type="text"
                                                                            maxlength="250"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Badge">
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                            </div>
                                                            <div class="col p-1">

                                                                <div class="d-flex align-items-center pt-1">
                                                                    <label
                                                                        class="col-form-label col-lg-2 p-0 text-start text-black">Title</label>
                                                                    <div class="input-group">
                                                                        <input name="title" type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Image With Row Title">
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                            </div>
                                                        </div>
                                                        <div class="row g-2 pb-1">
                                                            <div class="col p-2">
                                                                <span class="mt-1 fw-bold text-info">Row List
                                                                    Description</span>
                                                                <div class="px-2 py-2 rounded bg-light">
                                                                    {{--  --}}
                                                                    <div class="pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">List
                                                                            Description</label>
                                                                        <div class="input-group">
                                                                            <textarea class="form-control" name="short_des" rows="30" id="common"
                                                                                style=" font-size: 12px; font-weight: 500;"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col p-2">
                                                                <span class="mt-1 fw-bold text-info">Row List Description
                                                                    Area</span>
                                                                <div class="px-2 py-2 rounded bg-light">

                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">List
                                                                            Title</label>
                                                                        <div class="input-group">
                                                                            <input name="list_title" type="text"
                                                                                maxlength="250"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter List Title">
                                                                        </div>
                                                                    </div>
                                                                    {{--  --}}
                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">List
                                                                            Title One</label>
                                                                        <div class="input-group">
                                                                            <input name="list_one" type="text"
                                                                                maxlength="250"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter List Title One">
                                                                        </div>
                                                                    </div>
                                                                    {{--  --}}
                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">List
                                                                            Title Two</label>
                                                                        <div class="input-group">
                                                                            <input name="list_two" type="text"
                                                                                maxlength="250"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter List Title Two">
                                                                        </div>
                                                                    </div>
                                                                    {{--  --}}
                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">List
                                                                            Title Three</label>
                                                                        <div class="input-group">
                                                                            <input name="list_three" type="text"
                                                                                maxlength="250"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter List Title Three">
                                                                        </div>
                                                                    </div>
                                                                    {{--  --}}
                                                                    <div class="d-flex align-items-center pt-1">
                                                                        <label
                                                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">List
                                                                            Title Four</label>
                                                                        <div class="input-group">
                                                                            <input name="list_four" type="text"
                                                                                maxlength="250"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter List Title Four">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer border-0 pb-0 pe-0 mt-2 mr-1">
                                                                    <button type="submit"
                                                                        class="submit_btn rounded-0 from-prevent-multiple-submits"
                                                                        style="padding: 6px 9px;"
                                                                        id="submitbtn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="text-start">
                        <div class="d-flex align-items-center justify-content-start main_bg py-1 rounded-1">
                            <div class="ms-2">
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('row.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                            <div class="me-2" style="margin-left: 20rem;">

                            </div>
                            <div class="me-2" style="margin-left: 15rem;">
                                <ul class="nav nav-tabs border-0">
                                    <li class="nav-item ">
                                        <a href="#imageWithRow" class=" nav-link active cat-tab1 p-1"
                                            data-bs-toggle="tab">
                                            <p class="m-0 p-1">
                                                Image With Row<span class="ms-2">|</span></p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#rowWithList" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                            <p class="m-0 p-1">
                                                Row With List</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div> --}}

                </div>
            </div>
        </section>
    </div>
@endsection

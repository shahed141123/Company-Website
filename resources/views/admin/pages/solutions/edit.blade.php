@extends('admin.master')
@section('content')

<div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light shadow">

            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Solution Management</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header">

                    <h5 class="mb-0 float-start">Edit Solution</h5>
                    <a href="{{route('all.solution')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-eye"></i>
                        </span>
                        All Solution
                    </a>
                </div>

                <div class="card-body">
                    <form id="myform" method="post" action="" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Solution Title</h6>
                            </div>
                            <div class="form-group col-sm-6 text-secondary">
                                <input type="text" name="title" class="form-control maxlength" maxlength="100"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Solution Image </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="file" name="logo" class="form-control" id="image" accept="image/*" />
                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                <img id="showImage" height="100px" width="100px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Solution Description</h6>
                            </div>
                            <div class="form-group text-secondary col-sm-8">
                                <textarea name="short_des" cols="70" rows="8">Short Description</textarea>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Solution Related to Industries</h6>
                            </div>
                            <div class="form-group text-secondary col-sm-8">
                                <select data-placeholder="Select related industries..." multiple="multiple" class="form-control select">
                                    <option></option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Solution Related to Categories</h6>
                            </div>
                            <div class="form-group text-secondary col-sm-8">
                                <select data-placeholder="Select related Categories..." multiple="multiple" class="form-control select">
                                    <option></option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Solution Related to Brands</h6>
                            </div>
                            <div class="form-group text-secondary col-sm-8">
                                <select data-placeholder="Select related Brands..." multiple="multiple" class="form-control select">
                                    <option></option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                </select>
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
        <!-- /content area -->
    <!-- /inner content -->

</div>
@endsection

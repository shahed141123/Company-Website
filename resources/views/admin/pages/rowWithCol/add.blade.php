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
                        <span class="breadcrumb-item active">Row With Columns Management</span>
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
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-lg-7 d-flex justify-content-center align-items-center">
                            <h5 class="mb-0">Add Row With Columns Form</h5>
                        </div>

                        <div class="col-lg-2"></div>
                        <div class="col-lg-3">
                            <a href="{{ route('rowWithCol.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Row With Columns
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div id="table1" class="card cardTd">

                                <div class="card-body">
                                    <form method="post" action="{{ route('rowWithCol.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3 w-50 mx-auto">
                                            <div class="col-sm-2 d-flex justify-content-center align-items-center">
                                                <h6 class="mb-0">Title</h6>
                                            </div>
                                            <div class="form-group col-sm-10 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class=row>
                                            <div class="col-6">
                                                <div class="row mb-2">
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">Columns One Title</h6>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="col_one_title"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">
                                                            Columns One Description</h6>
                                                    </div>
                                                    <div class="form-group col-sm-9 text-secondary">
                                                        <textarea class="form-control" name="col_one_des" id="overview" style=" font-size: 12px; font-weight: 500;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">Columns One Button Name</h6>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="col_one_btn_name"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">Columns One Link</h6>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="col_one_link"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row mb-2">
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">Columns Two Title</h6>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="col_two_title"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">
                                                            Columns Two Description</h6>
                                                    </div>
                                                    <div class="form-group col-sm-9 text-secondary">
                                                        <textarea class="form-control" name="col_two_des" id="specification" style=" font-size: 12px; font-weight: 500;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">Columns Two Button Name</h6>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="col_two_btn_name"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">Columns Two Link</h6>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="col_two_link"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            {{-- <div class="col-sm-4"></div> --}}
                                            <div
                                                class="col-sm-12 text-secondary d-flex justify-content-center align-items-center">
                                                <input type="submit" class="btn btn-primary px-5 mx-auto"
                                                    value="Submit" />
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

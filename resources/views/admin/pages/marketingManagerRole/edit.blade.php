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
                        <span class="breadcrumb-item active">Contact Management</span>
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
                            <h5 class="text-center">Marketing Manager Role message edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('marketing-manager-role.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Marketing Manager Role
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

                                    <h5 class="mb-0 text-center">Add Marketing Manager Role Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('marketing-manager-role.update', $marketingManagerRole->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Marketing Manager</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="marketing_manager_id" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose marketing manager ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option @selected( $marketingManagerRole->marketing_manager_id == $user->id) value="{{ $user->id }}">{{ $user->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Dmar</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="dmar" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose dmar ">
                                                    <option></option>
                                                    <option @selected( $marketingManagerRole->dmar == 'yes') value="yes">Yes </option>
                                                    <option @selected( $marketingManagerRole->dmar == 'no') value="no">No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Cmar</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="cmar" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose cmar ">
                                                    <option></option>
                                                    <option @selected( $marketingManagerRole->cmar == 'yes') value="yes">Yes </option>
                                                    <option @selected( $marketingManagerRole->cmar == 'no') value="no">No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Emar</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="emar" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose emar ">
                                                    <option></option>
                                                    <option @selected( $marketingManagerRole->emar == 'yes') value="yes">Yes </option>
                                                    <option @selected( $marketingManagerRole->emar == 'no') value="no">No </option>
                                                </select>
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

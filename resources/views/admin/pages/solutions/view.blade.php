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
                        <span class="breadcrumb-item active">Solution Management</span>
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
                            <h2 class="mb-0 float-start">All Solutions</h2>
                            <a href="{{ route('solution.create') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Add New
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover datatable-highlight text-center">
                                <thead>
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="20%">Title</th>
                                        <th width="20%">Related Industries</th>
                                        <th width="20%">Related Brands</th>
                                        <th width="20%">Related Categories</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($blogs ?? '' as $blog) --}}
                                    @foreach ($solutions as $solution)
                                        <tr>

                                            <td>{{ $solution->id }}</td>
                                            <td>{{ $solution->title }}</td>
                                            <td>

                                                <a href="{{ route('solution.edit', $solution->id) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('solution.destroy', $solution->id) }}" id="deleteBtn"
                                                    class="text-danger deleteBtn mx-2">
                                                    <i class="icon-trash"></i>
                                                </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->





        <!-- /inner content -->

    </div>
@endsection

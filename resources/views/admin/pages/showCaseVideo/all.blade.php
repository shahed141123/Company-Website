@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
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
                <div>
                    <!-- Leave Dashboard link -->
                    <a href="{{ route('show-case-video.create') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>Add Show Case</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mx-auto">
                    <h5 class="main_color text-center">Show Case</h5>
                    <div class="card border-0">
                        <table class="table showCaseVideoDT table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th width="5%">SL</th>
                                    <th width="15%">Image</th>
                                    <th width="60%">Title</th>
                                    <th width="20%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                        <img class="rounded-circle img-fluid" src="" alt="" width="25"
                                            height="25">
                                    </td>
                                    <td>Show Case Title</td>
                                    <td>
                                        <a href="#" class="text-primary">
                                            <i class="fa-solid fa-pen-to-square dash-icons text-primary"></i>
                                        </a>
                                        <a href="#" class="text-danger delete">
                                            <i class="fa-solid fa-trash dash-icons text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
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
@push('scripts')
    <script type="text/javascript">
        $('.showCaseVideoDT').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [3],
            }, ],
        });
    </script>
@endpush

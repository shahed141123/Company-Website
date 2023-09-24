@extends('admin.master')
@section('content')
    <style>
        .nav-tabs .nav-link.active {
            color: white !important;
        }

        .nav-tabs .nav-link:hover {
            color: white !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('employeement.index') }}" class="breadcrumb-item">Employeements</a>
                            <a href="#" class="breadcrumb-item">Add</a>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Inner Page Tab --}}
        </section>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-10 offset-1">
                    <div class="d-flex align-items-center">
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;z-index: 999;margin-bottom: -24px;">
                            <a href="{{ route('employeement.create') }}" type="button"
                                class="mx-1 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Add
                            </a>
                        </div>
                    </div>
                    <div>
                        <table class="table employeementsDT table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th width="5%">No:</th>
                                    <th width="10%" class="text-center">Image</th>
                                    <th width="45%">Full Name</th>
                                    <th width="15%">Mobile</th>
                                    <th width="15%">Email</th>
                                    <th width="10%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <img src="https://www.sragenkab.go.id/assets/images/demo/user-8.jpg"
                                            class="img-fluid rounded-circle" width="25px" height="25px" alt="">
                                    </td>
                                    <td>Sazeduzzaman Saju</td>
                                    <td>+880 1576614451</td>
                                    <td>szamansaju@gmail.com</td>
                                    <td class="text-center">
                                        <a href="#" class="text-primary">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
                                        </a>
                                        <a href="#" class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
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
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.employeementsDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [1, 5],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce

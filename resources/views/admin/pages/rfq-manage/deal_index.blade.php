@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <div class="content-inner">
            <!-- Page header -->
            <div class="page-header page-header-light shadow">

                <div class="page-header-content d-lg-flex border-top">
                    <div class="d-flex">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Business</a>
                            <span class="breadcrumb-item active">Deals List</span>
                        </div>

                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /page header -->
            <!-- Content area -->
            <div class="content pt-1">
                <div class="row">
                    @include('admin.pages.rfq-manage.partial.rfq_sidebar')
                </div>
                <div class="row mx-lg-3">
                    <div class="col-12 mb-2 p-1" style="background-color: #247297; color: white;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div></div>
                            <div>
                                <h5 class="text-center mb-0">Deals List</h5>
                            </div>
                            <div>
                                <a href="{{ route('deal.create') }}"
                                    class="me-3 btn border custom_btn btn-labeled btn-labeled-start text-white">
                                    <span class="btn-labeled-icon text-white bg-opacity-20 border-right">
                                        <i class="ph-plus icons_design"></i>
                                    </span>
                                    Add
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 p-0">
                        <div class="table-responive">
                            @include('admin.pages.rfq-manage.partial.deal_table')
                        </div>
                    </div>
                </div>

            </div>
            <!-- /content area -->

        </div>
        <!-- /inner content -->
    @endsection

    @once
        @push('scripts')
            <script>
                $(document).ready(function() {
                    $('.rfqDT2').DataTable({
                        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                        "iDisplayLength": 10,
                        "lengthMenu": [10, 26, 30, 50],
                        columnDefs: [{
                            orderable: false,
                            targets: [0, 2, 4],
                        }, ],
                    });
                });
            </script>
        @endpush
    @endonce

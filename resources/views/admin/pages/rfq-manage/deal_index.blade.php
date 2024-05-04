@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Main content container -->
        <div class="content-inner">
            <!-- Page header -->
            <div class="page-header page-header-light shadow">
                <div class="page-header-content d-lg-flex border-top">
                    <div class="d-flex">
                        <!-- Breadcrumb navigation -->
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Business</a>
                            <span class="breadcrumb-item active">Deals List</span>
                        </div>
                        <!-- Breadcrumb navigation -->

                        <!-- Toggle button for mobile view -->
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                        <!-- Toggle button for mobile view -->
                    </div>
                </div>
            </div>
            <!-- Page header -->

            <!-- Content area -->
            <div class="content pt-1">
                <div class="row">
                    <div class="col-lg-8 offset-2">
                        <div class="card mt-4">
                            <div class="card-header p-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        @include('admin.pages.rfq-manage.partial.rfq_sidebar')
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="text-center m-0 p-0">Deals List</h5>
                                    </div>
                                    <div class="col-lg-4 d-flex justify-content-end">
                                        <a href="{{ route('deal.create') }}"
                                            class="btn btn-secondary">
                                            <i class="ph-plus icons_design pe-2"></i>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responive">
                                    <!-- Include RFQ Table Partial -->
                                    @include('admin.pages.rfq-manage.partial.deal_table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content area -->
        </div>
        <!-- Main content container -->
    </div>
@endsection

@once
    <!-- DataTable initialization script -->
    @push('scripts')
        <script>
            $(document).ready(function() {
                // DataTable initialization
                $('.rfqDT2').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 2, 4],
                    }],
                });
            });
        </script>
    @endpush
    <!-- DataTable initialization script -->
@endonce

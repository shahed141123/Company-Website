@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <div class="content-inner">
            <!-- Page header -->
            <div class="page-header page-header-light shadow">
                <div class="page-header-content d-lg-flex border-top">
                    <div class="d-flex">
                        <!-- Breadcrumbs -->
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Business</a>
                            <span class="breadcrumb-item active">RFQ Management</span>
                        </div>

                        <!-- Collapsible Button (for small screens) -->
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- page header -->

            <!-- Content area -->
            <div class="content pt-1">
                <div class="row">
                    <div class="col-lg-10 offset-1">
                        <div class="card mt-4 rounded-0">
                            <div class="card-header p-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="">
                                        @include('admin.pages.rfq-manage.partial.rfq_sidebar')
                                    </div>
                                    <div class="">
                                        <h5 class="text-start m-0 p-0 pe-2">Client RFQS (Pending to Convert Deals)</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responive">
                                    <!-- Include RFQ Table Partial -->
                                    @include('admin.pages.rfq-manage.partial.rfq_table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content area -->
        </div>
        <!-- inner content -->
    </div>
@endsection

@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Initialize DataTable
                $('.rfqDT1').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 2, 4],
                    }],
                });

                // Salesman Assign Toggle
                $('.editRfquser').click(function() {
                    $(".Rfquser").toggle(this.checked);
                });
            });
        </script>
    @endpush
@endonce

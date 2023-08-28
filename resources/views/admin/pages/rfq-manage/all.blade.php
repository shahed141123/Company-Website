@extends('admin.master')
@section('content')
    <style>
        #DataTables_Table_1_previous {
            margin-right: 30px;
        }

        #DataTables_Table_1_next {
            margin-right: 10px;
        }

        .nav-tabs .nav-link:hover {
            color: #fff !important;
            background-color: none !important;
            border: none !important;
            border-color: transparent !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('business.index') }}" class="breadcrumb-item">Business</a>
                        <span class="breadcrumb-item active">RFQ Management</span>
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
            <div class="container-fluid mt-2">

                    <div class="row mx-2 mb-3 rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="nav nav-tabs" style="border:none;">
                                <li class="nav-item ">

                                    <a href="#js-tab1" class=" nav-link active cat-tab1 p-1" data-bs-toggle="tab">
                                        <p class="m-0 p-1">
                                            Client RFQs <span class="ms-2">|</span></p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#js-tab2" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                        <p class="m-0 p-1">
                                            Sales Manager Deals </p>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="row rounded mx-2 mt-1">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="js-tab1">

                                    @include('admin.pages.rfq-manage.partial.rfq_table')

                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade" id="js-tab2">

                                    @include('admin.pages.rfq-manage.partial.deal_table')

                            </div>
                        </div>
                    </div>





            </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.rfqDT1').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [1,2,3,4,5],
                    }, ],
                });
                $('.rfqDT2').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [1,2,3,4,5],
                    }, ],
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $('.editRfquser').click(function() {
                    $(".Rfquser").toggle(this.checked);
                });
            });
        </script>
    @endpush
@endonce

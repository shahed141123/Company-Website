@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
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
        <div class="content container-fluid py-10 pt-5">
            <div class="row gx-8 gx-xl-10">
                <div class="row mb-5">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-fill">
                                    <h4 class="mb-0 text-info">Total RFQs</h4>
                                    <span class="text-muted">{{ date('d M , Y') }}</span>
                                </div>

                                <h1 class="ms-3 mb-0">{{ $rfq_count }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-fill">
                                    <h4 class="mb-0 text-info">RFQ Status</h4>
                                </div>
                                <div class="flex-fill">
                                    <p class="m-0 d-flex justify-content-between mb-2">
                                        <span class="fw-bolder">Pending :</span>
                                        <span class="badge bg-warning ms-3 fs-6 text-end">{{ $rfqs->count() }}</span>
                                    </p>
                                    <p class="m-0 d-flex justify-content-between mb-2">
                                        <span class="fw-bolder">Quoted :</span>
                                        <span class="badge bg-success ms-3 fs-6 text-end">{{ $quoteds->count() }}</span>
                                    </p>
                                    <p class="m-0 d-flex justify-content-between mb-2">
                                        <span class="fw-bolder">Failed :</span>
                                        <span class="badge bg-danger ms-3 fs-6 text-end">{{ $losts->count() }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-header py-2">
                                <h6 class="card-title mb-0">Notifications</h6>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    {{-- @if ($leave_applications->count() > 0)
                                        @foreach ($leave_applications as $leave_application)
                                            @if ($leave_application->status === 'pending')
                                                <p class="mb-2 p-0">
                                                    <a
                                                        href="{{ route('leave-application.edit', $leave_application->id) }}">
                                                        <i class="fa-solid fa-bell ammount rounded-1 pe-2 me-2"></i>{{ $leave_application->name }}
                                                        has applied for a leave.
                                                    </a>
                                                </p>
                                            @endif
                                        @endforeach
                                    @else --}}
                                    <div class="row">
                                        <h5 class="text-center mb-0 fs-6">No RFQ Notification</h5>
                                    </div>
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mb-5">
                    <div class="card" data-select2-id="select2-data-126-8c2i">
                        <div class="card-header">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">RFQ Filtered Details</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Check All RFQ History Here!</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-line-tabs fs-6 rfq-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active px-4" data-bs-toggle="tab"
                                            href="#kt_tab_pane_1">Pending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#kt_tab_pane_2">Quoted</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#kt_tab_pane_3">Failed</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#kt_tab_pane_4">Approved</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-toolbar">
                                <div class="d-flex flex-stack flex-wrap gap-4">
                                    <div class="d-flex align-items-center fw-bold">
                                        <select
                                            class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-select2-id="select2-data-13-e52a" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Year" selected="" data-select2-id="select2-data-15-f5r7">
                                                Year</option>
                                            <option value="a">2022</option>
                                            <option value="b">2023</option>
                                            <option value="b">2024</option>
                                            <option value="b">2025</option>
                                            <option value="b">2026</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-14-4ffq"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-cjzt-container"
                                                    aria-controls="select2-cjzt-container"><span
                                                        class="select2-selection__rendered" id="select2-cjzt-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Year">Year</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="d-flex align-items-center fw-bold">
                                        <select
                                            class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-kt-table-widget-4="filter_status" data-select2-id="select2-data-16-c6nq"
                                            tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Month" selected="" data-select2-id="select2-data-18-0kz4">
                                                Month</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Confirmed">Confirmed</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Pending">Pending</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-17-mufk"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-i2sj-container"
                                                    aria-controls="select2-i2sj-container"><span
                                                        class="select2-selection__rendered" id="select2-i2sj-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Month">Month</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="d-flex align-items-center fw-bold">
                                        <select
                                            class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-kt-table-widget-4="filter_status" data-select2-id="select2-data-19-gh0e"
                                            tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Week" selected="" data-select2-id="select2-data-21-pt2y">
                                                Week</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Confirmed">Confirmed</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Pending">Pending</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-20-s15q"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-2qz4-container"
                                                    aria-controls="select2-2qz4-container"><span
                                                        class="select2-selection__rendered" id="select2-2qz4-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Week">Week</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="position-relative my-1">
                                        <i class="fa-solid fa-magnifying-glass fs-3 position-absolute top-50 translate-middle-y ms-4"
                                            aria-hidden="true"></i>
                                        <input type="text" data-kt-table-widget-4="search"
                                            class="form-control w-150px fs-7 ps-12" placeholder="Search">
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-primary"
                                            id="toggleBtn">
                                            <i class="fa-solid fa-layer-group" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="defaultDiv" class="row">
                    div
                </div>
                <div class="col-xl-12 hidden-div hidden" id="hiddenDiv">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row mb-2">
                            <div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar">
                                <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                            name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select form-select-sm form-select-solid">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                            </div>
                            <div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="form-control form-control-sm form-control-solid"
                                            placeholder="" aria-controls="DataTables_Table_0"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table
                                class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer"
                                id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Sl: activate to sort column descending" style="width: 0px;">Sl
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="RFQ Code: activate to sort column ascending" style="width: 0px;">
                                            RFQ Code</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Company Name: activate to sort column ascending"
                                            style="width: 0px;">Company Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Client Name: activate to sort column ascending"
                                            style="width: 0px;">Client Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Created At: activate to sort column ascending"
                                            style="width: 0px;">Created At</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Assign To: activate to sort column ascending" style="width: 0px;">
                                            Assign To</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending" style="width: 0px;">
                                            Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Contry: activate to sort column ascending" style="width: 0px;">
                                            Contry</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Details: activate to sort column ascending" style="width: 0px;">
                                            Details</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Quick View: activate to sort column ascending"
                                            style="width: 0px;">Quick View</th>
                                        <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="
                        Action
                      : activate to sort column ascending"
                                            style="width: 0px;">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="odd">
                                        <td class="sorting_1">01</td>
                                        <td>#RFQ1558</td>
                                        <td>NGen It</td>
                                        <td>Robert Hue</td>
                                        <td>2024-01-06</td>
                                        <td>Akash Hossain</td>
                                        <td>Pending</td>
                                        <td>United State</td>
                                        <td>
                                            Assigned
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td class="text-end">
                                            <a href="" class="pe-3"><i class="fa-solid fa-eye"
                                                    aria-hidden="true"></i></a>
                                            <a href="" class="pe-3"><i class="fa-solid fa-eye"
                                                    aria-hidden="true"></i></a>
                                            <a href="" class="pe-3"><i class="fa-solid fa-eye"
                                                    aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div
                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">Showing 1 to 1 of 1 records</div>
                            </div>
                            <div
                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_0_previous"><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                                class="page-link"><i class="previous"></i></a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                tabindex="0" class="page-link"><i class="next"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content End -->
        </div>
    </div>
    <!-- /content area -->
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            // $(document).ready(function() {
            //     $('.rfqDT1').DataTable({
            //         dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            //         "iDisplayLength": 10,
            //         "lengthMenu": [10, 26, 30, 50],
            //         columnDefs: [{
            //             orderable: false,
            //             targets: [5],
            //         }, ],
            //     });
            //     $('.rfqDT2').DataTable({
            //         dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            //         "iDisplayLength": 10,
            //         "lengthMenu": [10, 26, 30, 50],
            //         columnDefs: [{
            //             orderable: false,
            //             targets: [1, 2, 3, 4, 6],
            //         }, ],
            //     });
            // });
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
        <script>
            $(document).ready(function() {
                $(".data_table").DataTable({
                    language: {
                        lengthMenu: "Show _MENU_",
                    },
                    dom: "<'row mb-2'" +
                        "<'col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar'l>" +
                        "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
                        ">" +
                        "<'table-responsive'tr>" +
                        "<'row'" +
                        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                        ">",
                });
            });
        </script>
        <script>
            // JavaScript for toggling div visibility
            const toggleBtn = document.getElementById("toggleBtn");
            const defaultDiv = document.getElementById("defaultDiv");
            const hiddenDiv = document.getElementById("hiddenDiv");

            toggleBtn.addEventListener("click", function() {
                // Toggle visibility classes
                defaultDiv.classList.toggle("hidden");
                defaultDiv.classList.toggle("visible");
                hiddenDiv.classList.toggle("hidden");
                hiddenDiv.classList.toggle("visible");
            });
        </script>
    @endpush
@endonce

<x-admin-app-layout :title="'RFQ'">
    <!-- Main Content Start -->
    <div class="row gx-8 gx-xl-10">
        <div class="row mb-5">
            <!-- Attendance -->
            <div class="col-xl-3">
                <div class="card card-flush shadow-sm">
                    <div class="card-body p-0">
                        <div class="d-flex flex-stack justify-content-between align-items-center">
                            <div class="d-flex align-items-center me-3 p-8 rounded-3">
                                <a href="">
                                    <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                            class="fa-solid text-primary fa-clipboard-user fs-3"
                                            aria-hidden="true"></i></span>
                                </a>
                                <div class="flex-grow-1">
                                    <a href=""> </a><a href="#"
                                        class="text-gray-800 fs-5 fw-bold lh-0">Total RFQ
                                        <span
                                            class="text-gray-500 fw-semibold d-block fs-6 pt-4">{{ date('d M , Y') }}</span>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-column align-items-center pe-4">
                                <span class="main_text_color fw-bold fs-1 pe-4">
                                    {{ $rfq_count }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card card-flush shadow-sm">
                    <div class="card-body p-0">
                        <div class="d-flex flex-stack justify-content-between">
                            <div class="d-flex align-items-center me-3 p-8 w-50 rounded-3">
                                <a href="">
                                    <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                            class="fa-solid text-primary fa-list-check fs-3"
                                            aria-hidden="true"></i></span>
                                </a>
                                <div class="flex-grow-1">
                                    <a href=""> </a><a href="#" class="text-gray-800 fs-5 fw-bold lh-0">RFQ
                                        <span class="text-gray-500 fw-semibold d-block fs-6 pt-4">Status</span>
                                    </a>
                                </div>
                            </div>

                            <div class="flex-column d-flex w-50">
                                <div class="d-flex align-items-center justify-content-between pe-3">
                                    <span class="text-gray-500 fw-semibold">
                                        Pending</span>
                                    <span class="bg-warning fw-semibold ms-3 px-2 text-white rounded-2">
                                        {{ $rfqs->count() }}
                                    </span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-3 pt-2">
                                    <span class="text-gray-500 fw-semibold">
                                        Quoted
                                    </span>
                                    <span class="bg-success fw-semibold ms-3 px-2 text-white rounded-2">
                                        {{ $quoteds->count() }}
                                    </span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-3 pt-2">
                                    <span class="text-gray-500 fw-semibold">
                                        Failed
                                    </span>
                                    <span class="bg-danger fw-semibold ms-3 px-2 text-white rounded-2">
                                        {{ $losts->count() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card card-flush shadow-sm">
                    <div class="card-body p-0">
                        <div class="d-flex flex-stack justify-content-between">
                            <div class="d-flex align-items-center me-3 p-8 w-50 rounded-3">
                                <a href="">
                                    <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                            class="fa-solid text-primary fa-bell fs-3" aria-hidden="true"></i></span>
                                </a>
                                <div class="flex-grow-1">
                                    <a href=""> </a><a href="#"
                                        class="text-gray-800 fs-5 fw-bold lh-0">Notification
                                        <span class="text-gray-500 fw-semibold d-block fs-6 pt-4">Quick Status</span>
                                    </a>
                                </div>
                            </div>

                            {{-- <div class="flex-column d-flex w-50">
                                <div class="d-flex align-items-center justify-content-between pe-3">
                                    <span class="text-gray-500 fw-semibold">
                                        Deals</span>
                                    <span class="fw-semibold ms-3 px-2 text-primary rounded-2">
                                        5
                                    </span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-3 pt-2">
                                    <span class="text-gray-500 fw-semibold">
                                        Bypass</span>
                                    <span class="fw-semibold ms-3 px-2 text-primary rounded-2">
                                        5
                                    </span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-3 pt-2">
                                    <span class="text-gray-500 fw-semibold">
                                        Others</span>
                                    <span class="fw-semibold ms-3 px-2 text-primary rounded-2">
                                        5
                                    </span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card card-flush shadow-sm">
                    <div class="card-body p-0">
                        <div class="d-flex flex-stack justify-content-between">
                            <div class="d-flex align-items-center me-3 p-8 w-50 rounded-3">
                                <a href="">
                                    <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                            class="fa-solid text-primary fa-bullseye fs-3"
                                            aria-hidden="true"></i></span>
                                </a>
                                <div class="flex-grow-1">
                                    <a href=""> </a><a href="#" class="text-gray-800 fs-5 fw-bold lh-0">RFQ
                                        <span class="text-gray-500 fw-semibold d-block fs-6 pt-4">Query</span>
                                    </a>
                                </div>
                            </div>

                            <div class="flex-column d-flex w-50 me-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <select class="form-select form-select-sm" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option>Select Country</option>
                                        {{-- <option value="1">Option 1</option> --}}
                                    </select>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pt-2">
                                    <select class="form-select form-select-sm" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option>Select Sales Man</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 mb-5 mb-xl-3 ps-3" data-select2-id="select2-data-127-jigx">
            <div class="card card-flush h-xl-100 border" data-select2-id="select2-data-126-8c2i">
                <div class="card-header">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">RFQ Filtered Details</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Check All RFQ History Here!</span>
                    </h3>
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-line-tabs fs-6 rfq-tabs">
                            <li class="nav-item">
                                <a class="nav-link active px-4" data-bs-toggle="tab" href="#pending">Pending
                                    ({{ $rfqs->count() }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4" data-bs-toggle="tab" href="#quoted">Quoted
                                    ({{ $quoteds->count() }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4" data-bs-toggle="tab" href="#failed">Failed
                                    ({{ $losts->count() }})</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link px-4" data-bs-toggle="tab" href="#kt_tab_pane_4">Approved</a>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="card-toolbar">
                        <div class="d-flex flex-stack flex-wrap gap-4">
                            <div class="d-flex align-items-center fw-bold">
                                <select
                                    class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto"
                                    data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="" selected>Year</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center fw-bold">
                                <select
                                    class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                    data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                                    data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                    <option></option>
                                    <option value="Month" selected>Month</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center fw-bold">
                                <select
                                    class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                    data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                                    data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                    <option></option>
                                    <option value="Week" selected>Week</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="position-relative my-1">
                                <i
                                    class="fa-solid fa-magnifying-glass fs-3 position-absolute top-50 translate-middle-y ms-4"></i>
                                <input type="text" data-kt-table-widget-4="search"
                                    class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                            </div>
                            <div>
                                <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-primary" id="toggleBtn">
                                    <i class="fa-solid fa-layer-group"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="defaultDiv" class="default-div visible col-xl-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="pending" role="tabpanel">
                    <div class="row">
                        <div class="card shadow-sm">
                            <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
                                data-bs-target="#kt_docs_card_collapsible">
                                <h3 class="card-title">Pending RFQs</h3>
                                <div class="card-toolbar rotate-180">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                rx="1" transform="rotate(-90 11 18)" fill="currentColor">
                                            </rect>
                                            <path
                                                d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div id="kt_docs_card_collapsible" class="collapse show">
                                <div class="card-body">
                                    <div class="py-5">
                                        <div class="d-flex flex-column flex-md-row rounded">
                                            <ul
                                                class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-250px">
                                                @foreach ($rfqs as $rfq)
                                                    <li class="nav-item w-100 me-0 mb-md-2">
                                                        <a class="nav-link w-100 {{ $loop->first ? 'active btn-active-primary' : '' }} btn btn-flex border"
                                                            data-bs-toggle="tab" href="#kt_vtab_pane_4">
                                                            <i class="fa-regular fa-file fs-2 text-primary pe-3"></i>
                                                            <div class="row w-100">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="fs-7 fw-bold">{{ $rfq->name }}</span>
                                                                        <span class="fs-7">#{{ $rfq->rfq_code }}</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="fs-7 fw-bold">{{ $rfq->country }}</span>
                                                                        <span class="fs-7">{{ $rfq->create_date }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <div class="tab-content w-100 border rounded" id="myTabContent">
                                                @foreach ($rfqs as $rfq)
                                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="kt_vtab_pane_4"
                                                        role="tabpanel">
                                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                                            <div class="text-center p-5">
                                                                <h1 class="pb-5">View The RFQ</h1>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary me-2"><i
                                                                        class="fa-solid fa-signs-post pe-2"></i>Bypass</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-regular fa-handshake pe-2"></i>
                                                                    Deal</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-regular fa-pen-to-square pe-2"></i>Edit</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-solid fa-expand pe-2"></i>View</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="quoted" role="tabpanel">
                    <div class="row">
                        <div class="card shadow-sm">
                            <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
                                data-bs-target="#kt_docs_card_collapsible">
                                <h3 class="card-title">Quoted RFQs</h3>
                                <div class="card-toolbar rotate-180">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                rx="1" transform="rotate(-90 11 18)" fill="currentColor">
                                            </rect>
                                            <path
                                                d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div id="kt_docs_card_collapsible" class="collapse show">
                                <div class="card-body">
                                    <div class="py-5">
                                        <div class="d-flex flex-column flex-md-row rounded">
                                            <ul
                                                class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-250px">
                                                @foreach ($rfqs as $rfq)
                                                    <li class="nav-item w-100 me-0 mb-md-2">
                                                        <a class="nav-link w-100 {{ $loop->first ? 'active btn-active-primary' : '' }} btn btn-flex border"
                                                            data-bs-toggle="tab" href="#kt_vtab_pane_4">
                                                            <i class="fa-regular fa-file fs-2 text-primary pe-3"></i>
                                                            <div class="row w-100">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="fs-7 fw-bold">{{ $rfq->name }}</span>
                                                                        <span class="fs-7">#{{ $rfq->rfq_code }}</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="fs-7 fw-bold">{{ $rfq->country }}</span>
                                                                        <span class="fs-7">{{ $rfq->create_date }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <div class="tab-content w-100 border rounded" id="myTabContent">
                                                @foreach ($rfqs as $rfq)
                                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="kt_vtab_pane_4"
                                                        role="tabpanel">
                                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                                            <div class="text-center p-5">
                                                                <h1 class="pb-5">View The RFQ</h1>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary me-2"><i
                                                                        class="fa-solid fa-signs-post pe-2"></i>Bypass</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-regular fa-handshake pe-2"></i>
                                                                    Deal</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-regular fa-pen-to-square pe-2"></i>Edit</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-solid fa-expand pe-2"></i>View</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="failed" role="tabpanel">
                    <div class="row">
                        <div class="card shadow-sm">
                            <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
                                data-bs-target="#kt_docs_card_collapsible">
                                <h3 class="card-title">Lost RFQs</h3>
                                <div class="card-toolbar rotate-180">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                rx="1" transform="rotate(-90 11 18)" fill="currentColor">
                                            </rect>
                                            <path
                                                d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div id="kt_docs_card_collapsible" class="collapse show">
                                <div class="card-body">
                                    <div class="py-5">
                                        <div class="d-flex flex-column flex-md-row rounded">
                                            <ul
                                                class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-250px">
                                                @foreach ($rfqs as $rfq)
                                                    <li class="nav-item w-100 me-0 mb-md-2">
                                                        <a class="nav-link w-100 {{ $loop->first ? 'active btn-active-primary' : '' }} btn btn-flex border"
                                                            data-bs-toggle="tab" href="#kt_vtab_pane_4">
                                                            <i class="fa-regular fa-file fs-2 text-primary pe-3"></i>
                                                            <div class="row w-100">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="fs-7 fw-bold">{{ $rfq->name }}</span>
                                                                        <span class="fs-7">#{{ $rfq->rfq_code }}</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="fs-7 fw-bold">{{ $rfq->country }}</span>
                                                                        <span class="fs-7">{{ $rfq->create_date }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <div class="tab-content w-100 border rounded" id="myTabContent">
                                                @foreach ($rfqs as $rfq)
                                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="kt_vtab_pane_4"
                                                        role="tabpanel">
                                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                                            <div class="text-center p-5">
                                                                <h1 class="pb-5">View The RFQ</h1>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary me-2"><i
                                                                        class="fa-solid fa-signs-post pe-2"></i>Bypass</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-regular fa-handshake pe-2"></i>
                                                                    Deal</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-regular fa-pen-to-square pe-2"></i>Edit</button>
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-solid fa-expand pe-2"></i>View</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4">List</div>
                        <div class="col-xl-8">
                            <h1>View</h1>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>


        <div class="col-xl-12 hidden-div hidden" id="hiddenDiv">
            <table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                        <th>Sl</th>
                        <th>RFQ Code</th>
                        <th>Company Name</th>
                        <th>Client Name</th>
                        <th>Created At</th>
                        <th>Assign To</th>
                        <th>Status</th>
                        <th>Contry</th>
                        <th>Details</th>
                        <th>Quick View</th>
                        <th class="text-end">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>01</td>
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
                            <a href="" class="pe-3"><i class="fa-solid fa-eye"></i></a>
                            <a href="" class="pe-3"><i class="fa-solid fa-eye"></i></a>
                            <a href="" class="pe-3"><i class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Main Content End -->















    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>
                        <div class="text-muted fw-bold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>

                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                        data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <input type="hidden" />

                            <span
                                class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>

                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value="" placeholder="Search by username, full name or email..."
                                data-kt-search-element="input" />

                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>

                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                            </span>
                        </form>

                        <div class="py-5">
                            <div data-kt-search-element="suggestions">
                                <h3 class="fw-bold mb-5">Recently searched:</h3>

                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>

                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                    </a>

                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>

                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                    </a>

                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src=" assets/media/avatars/300-1.jpg" />
                                        </div>

                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                    </a>

                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>

                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                    </a>

                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>

                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div data-kt-search-element="results" class="d-none">
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>
                                                <div class="fw-bold text-muted">smith@kpmg.com</div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>
                                                <div class="fw-bold text-muted">
                                                    melody@altbox.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src=" assets/media/avatars/300-1.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>
                                                <div class="fw-bold text-muted">max@kt.com</div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>
                                                <div class="fw-bold text-muted">sean@dellito.com</div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>
                                                <div class="fw-bold text-muted">
                                                    brian@exchange.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>
                                                <div class="fw-bold text-muted">mik@pex.com</div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>
                                                <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>
                                                <div class="fw-bold text-muted">
                                                    olivia@corpmail.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>
                                                <div class="fw-bold text-muted">
                                                    owen.neil@gmail.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>
                                                <div class="fw-bold text-muted">
                                                    dam@consilting.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>
                                                <div class="fw-bold text-muted">emma@intenso.com</div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>
                                                <div class="fw-bold text-muted">
                                                    ana.cf@limtel.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>
                                                <div class="fw-bold text-muted">robert@benko.com</div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>
                                                <div class="fw-bold text-muted">
                                                    miller@mapple.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-success text-success fw-bold">L</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>
                                                <div class="fw-bold text-muted">
                                                    lucy.m@fentech.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>
                                                <div class="fw-bold text-muted">
                                                    ethan@loop.com.au
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>

                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>

                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>
                                                <div class="fw-bold text-muted">
                                                    melody@altbox.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">
                                        Cancel
                                    </button>
                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                            </div>

                            <div data-kt-search-element="empty" class="text-center d-none">
                                <div class="fw-bold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                    <div class="text-muted fs-6">
                                        Try to search by username, full name or email...
                                    </div>
                                </div>

                                <div class="text-center px-5">
                                    <img src="assets/media/illustrations/sketchy-1/1.png" alt=""
                                        class="w-100 h-200px h-sm-325px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
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
</x-admin-app-layout>

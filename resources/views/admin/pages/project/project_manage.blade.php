@extends('admin.master')
@section('content')
    <style>
        .main-width {
            width: 115px !important;
        }


        .devider_title {
            /* margin-top: -15px; */
            margin-top: -30px;
            width: 10%;
            margin-left: 10px;
        }


        @media only screen and (max-width: 600px) {
            .devider_title {
                width: 100%;
                margin-top: 0px;
                margin-left: 0px;
            }


            .area-container {
                padding: 0px;
            }


            .main_table_start {
                flex-direction: column;
            }


            .table th,
            table td a {
                font-size: 10px !important;
            }


            .content {
                padding: 0px;
            }
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('project.dashboard') }}" class="breadcrumb-item">Projects</a>
                        <span class="breadcrumb-item active">{{ $project->project_title }}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->




        <div class="content pt-2">
            <div class="container-fluid ">
                <!-- Row End -->
                <div class="card rounded-0 bg-transparent shadow-none">
                    <div class="card-body m-lg-3 mt-lg-0 m-sm-0 bg-transparent">
                        <div class="row shadow-lg bg-white border">
                            <div class="area-container mb-1 ">
                                <p class="fw-bold area-title bg-secondary p-1 text-white text-center devider_title">Project
                                    Details</p>
                            </div>
                            <div class="row my-1 gx-1 p-3" style="margin-top: -25px !important; ">
                                <div class="col-lg-12">
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom shadow-sm p-2 main_table_start">
                                        <div class="d-flex ">
                                            <p class="p-0 m-0 fw-bold main_color">Project Title</p>
                                            <p class="p-0 m-0">:</p>
                                            <p class="p-0 m-0 ms-2">{{ $project->project_title }}</p>
                                        </div>
                                        <div class="d-flex ">
                                            <p class="p-0 m-0 fw-bold main_color">Project Id</p>
                                            <p class="p-0 m-0">:</p>
                                            <p class="p-0 m-0 ms-2">{{ $project->project_code }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-1">
                                    <div class="row">
                                        <div class="col-lg-4" style="border-left: 2px solid solid #eee">
                                            <div class="rounded-0 p-2" style="    border-right: 3px dashed #eee;">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Client
                                                                    Name</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->client_name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Client
                                                                    Code</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->client_code }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Duration
                                                                </th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->project_duration }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Contact
                                                                    Agreement</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    @if (!empty($project->contact_agreement))
                                                                        <a href="{{ asset('storage/files/' . $project->contact_agreement) }}"
                                                                            class="text-info mx-2" title="Show Deal">
                                                                            <i class="fa fa-xl fa-download "></i>
                                                                        </a>
                                                                    @else
                                                                        <strong class="site_color">No File</strong>
                                                                    @endif
                                                                </th>
                                                            </tr>
                                                            {{-- <tr>
                                                                <th width="40%" class="main_color border-0 p-1"
                                                                    title="Client Secoandary Contact">Client</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">01568565</th>
                                                            </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" style="border-left: 2px solid solid #eee">
                                            <div class="rounded-0 p-2" style="border-right: 3px dashed #eee;">
                                                <div class="table-responsive border-0">
                                                    <table class="table">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Partner
                                                                    Name</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->partner_name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Start
                                                                    Date</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->create_time }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Team
                                                                    Membar</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->team_member }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Order
                                                                    Number</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->order_id }}</th>
                                                            </tr>
                                                            {{-- <tr>
                                                                <th width="40%" class="main_color border-0 p-1"
                                                                    title="Partner Primary Contact">Partner</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">01568565</th>
                                                            </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" style="border-left: 2px solid solid #eee">
                                            <div class="rounded-0 p-2">
                                                <div class="table-responsive border-0">
                                                    <table class="table">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Industry Name</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->industry->title }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">End
                                                                    Date</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->closed_time }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Order
                                                                    Date</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    {{ $project->order_date }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">Status
                                                                </th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">
                                                                    <span class="badge bg-success">
                                                                        {{ ucfirst($project->status) }}
                                                                    </span>
                                                                </th>
                                                            </tr>
                                                            {{-- <tr>
                                                                <th width="40%" class="main_color border-0 p-1"
                                                                    title="Client Primary Contact">S</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">Doc.pdf</th>
                                                            </tr> --}}
                                                            {{-- <tr>
                                                                <th width="40%" class="main_color border-0 p-1"
                                                                    title="Partner Secoandary Contact">Partner</th>
                                                                <th width="10%" class="border-0 p-1">:</th>
                                                                <th width="50%" class="border-0 p-1">01568565</th>
                                                            </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Support Details --}}
                <div class="card rounded-0 bg-transparent shadow-none">
                    <div class="card-body m-lg-3 mt-lg-0 m-sm-0 bg-transparent">
                        <div class="row shadow-lg bg-white border">
                            <div class="area-container mb-1 ">
                                <p class="fw-bold area-title bg-secondary p-1 text-white text-center devider_title">
                                    Available Supports</p>
                            </div>
                            <div class="row my-1 gx-1 p-3" style="margin-top: -25px !important; ">
                                <div class="col-lg-12 my-3">
                                    @if (count($supports) > 0)
                                        @foreach ($supports as $key => $support)
                                            <div class="row mx-1 bg-white mb-2">
                                                <div class="col-lg-12 p-0 m-0">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item rounded-0">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button
                                                                    class="accordion-button rounded-0 available_case_btn bg-white"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse{{ $support->id }}"
                                                                    aria-expanded="false" aria-controls="collapseOne">
                                                                    <div class="d-flex">
                                                                        <p class="p-0 m-0 main_color">
                                                                            <strong>Support Id
                                                                            </strong>: &nbsp;&nbsp;
                                                                            <span
                                                                                class="text-black fw-bold support_title_triger">{{ $support->support_id }}</span>
                                                                            <strong class="ms-3">|</strong>
                                                                        </p>
                                                                        <p class="p-0 m-0 main_color ms-3">
                                                                            <strong>Support
                                                                                Title
                                                                            </strong>: &nbsp;&nbsp;
                                                                            <span
                                                                                class="text-black fw-bold support_title_triger">{{ $support->support_title }}</span>
                                                                            <strong class="ms-3">|</strong>
                                                                        </p>
                                                                        <p class="p-0 m-0 main_color ms-3">
                                                                            <strong> Status
                                                                            </strong>: &nbsp;&nbsp;
                                                                            @if ($support->status == 'pending')
                                                                                <p
                                                                                    class="fw-bolder support_title_triger pt-0 mb-0 badge-text text-warning">
                                                                                    Pending</p>
                                                                            @elseif($support->status == 'on_going')
                                                                                <p
                                                                                    class="fw-bolder support_title_triger pt-0 mb-0 badge-text text-success">
                                                                                    On
                                                                                    Going</p>
                                                                            @else
                                                                                <p
                                                                                    class="fw-bolder support_title_triger pt-0 mb-0 badge-text text-danger">
                                                                                    Closed</p>
                                                                            @endif
                                                                        </p>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapse{{ $support->id }}"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body p-0">
                                                                    <hr class="p-0 m-0">
                                                                    <div class="col-lg-12 px-1 p-0 m-0">
                                                                        <div class="row gx-0 p-2 align-items-center">
                                                                            <div class="col-lg-3 col-sm-3 mb-2">
                                                                                <p class="p-0 m-0">
                                                                                    <strong class="main_color">Support
                                                                                        Type
                                                                                    </strong>: &nbsp;&nbsp;
                                                                                    @if ($support->support_type == 'amc_support')
                                                                                        <span
                                                                                            class="text-info badge-text rounded-1">AMC
                                                                                            Support</span>
                                                                                    @elseif($support->support_type == 'implementation_support')
                                                                                        <span
                                                                                            class="fw-bold badge-text text-info rounded-1">Implementation
                                                                                            Support</span>
                                                                                    @else
                                                                                        <span
                                                                                            class="fw-bold badge-text text-info rounded-1">Others
                                                                                            Support</span>
                                                                                    @endif
                                                                                </p>
                                                                                <p class="p-0 m-0">
                                                                                    <strong class="main_color">
                                                                                        Support Tier
                                                                                    </strong>: &nbsp;&nbsp;
                                                                                    <span
                                                                                        class="fw-bold badge-text text-success rounded-1">
                                                                                        {{ ucfirst($support->support_tier) }}
                                                                                    </span>
                                                                                </p>
                                                                                <p class="p-0 m-0">
                                                                                    <strong class="main_color">
                                                                                        Duration
                                                                                    </strong>: &nbsp;&nbsp;
                                                                                    {{ $support->support_duration }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-6 col-sm-6 mb-2">
                                                                                <p class="p-0 m-0">
                                                                                    <strong class="main_color">
                                                                                        Support Tier Description
                                                                                    </strong>: &nbsp;&nbsp;
                                                                                    {!! $support->support_tier_description !!}
                                                                                </p>
                                                                                <p class="p-0 m-0">
                                                                                    <strong class="main_color">Status
                                                                                        Description
                                                                                    </strong>: &nbsp;&nbsp;
                                                                                    {!! $support->status_description !!}
                                                                                </p>
                                                                                <p class="p-0 m-0">
                                                                                    <strong class="main_color">
                                                                                        Scope Of Work
                                                                                    </strong>: &nbsp;&nbsp;
                                                                                    {!! $support->scope_work !!}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-3 col-sm-3 text-end">
                                                                                <p class="mb-0">
                                                                                    @if (!empty($support->attachment))
                                                                                        <a href="{{ asset('storage/files/' . $support->attachment) }}"
                                                                                            target="_blank"
                                                                                            class="border-bottom-link text-primary">
                                                                                            <i
                                                                                                class="fa-solid fa-file-arrow-down"></i>
                                                                                            <strong
                                                                                                class="text-primary">Attachment</strong>
                                                                                        </a>
                                                                                    @else
                                                                                        No File
                                                                                    @endif
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    @if (count($support->cases) > 0)
                                                                        <div class="col-lg-12 px-0 p-0 m-0">
                                                                            <div class="table-responsive p-2">
                                                                                <table class="table text-center">
                                                                                    <thead
                                                                                        style="background-color:#24729759 !important">
                                                                                        <tr>
                                                                                            <th width="20%"
                                                                                                class="p-2"
                                                                                                scope="col">
                                                                                                Case
                                                                                                ID</th>
                                                                                            <th width="60%"
                                                                                                class="p-2"
                                                                                                scope="col">
                                                                                                Case Subject
                                                                                            </th>
                                                                                            <th width="20%"
                                                                                                class="p-2"
                                                                                                scope="col">
                                                                                                Created At
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                        @foreach ($support->cases as $item)
                                                                                            <tr class="clickable-row"
                                                                                                onclick="window.location='{{ route('client.case.details', $item->code) }}'">
                                                                                                <td>
                                                                                                    <span
                                                                                                        class="border-bottom-link">{{ $item->code }}</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span
                                                                                                        class="border-bottom-link">{{ $item->subject }}</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span
                                                                                                        class="border-bottom-link">
                                                                                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                                                                    </span>
                                                                                                </td>

                                                                                            </tr>
                                                                                        @endforeach

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="mb-0 main_color fw-bold">
                                                    No On-Going Support Available.
                                                </h5>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Support Details --}}

            </div>
        </div>




    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.supportDT').DataTable({
                    // dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    dom: '<"datatable-header"f><"datatable-scroll"t><"datatable-footer"p>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 2, 3],
                    }, ],
                });
                $('.supportCasesDT').DataTable({
                    // dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    dom: '<"datatable-header"f><"datatable-scroll"t><"datatable-footer"p>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 2, 3],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce

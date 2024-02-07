@extends('admin.master')
@section('content')
    <style>
        .profile-card_menu li a {
            font-weight: normal;
            font-size: 14px;
        }

        .profile-card_menu {
            list-style: none;
            margin-left: 5px;
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
                        <span class="breadcrumb-item active">Projects</span>
                    </div>

                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content pt-2">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h3 class="text-center w-50 mx-auto" style="color: #247297;"> Client Projects</h3>
                    </div>
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-lg-8 col-offset-2 mx-auto">
                        <div class="row gx-2">
                            <div class="col-lg-4" onclick="window.location='{{ route('project.index') }}'" style="cursor: pointer;">
                                <a href="">
                                    <h6 class="m-0 p-1 text-center"
                                        style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Recent Cases
                                        ({{ count($cases->where('status', '!=', 'closed')) }})</h6>
                                    <div class="card rounded-0">
                                        <div class="card-body py-5">
                                            @if ($latest_case)
                                                <a class="main_color text-center fw-bold"
                                                    href="{{ route('support-case.show', $latest_case->code) }}"
                                                    style="color:#247297; text-decoration: underline; cursor: pointer;">
                                                    {{ $latest_case->subject }}
                                                </a>
                                            @else
                                                <div>
                                                    There Is No Case Available
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="{{ route('project.index') }}">
                                            <div class="card rounded-0">
                                                <h6 class="m-0 p-1 text-center"
                                                    style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">
                                                    Total Projects ({{ count($projects) }})</h6>
                                                <div class="card-body py-4">
                                                    <ul class="py-2 rounded-0" style="list-style-type: circle">
                                                        <li><a href="">Ongoing
                                                                {{ count($projects->where('status', 'on_going')) }}</a></li>
                                                        <li><a href="">Closed
                                                                {{ count($projects->where('status', 'completed')) }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{ route('client-support.index') }}">
                                            <div class="card rounded-0">
                                                <h6 class="m-0 p-1 text-center"
                                                    style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">
                                                    Total Supports ({{ count($supports) }})</h6>
                                                <div class="card-body py-4">
                                                    <ul class="py-2 rounded-0" style="list-style-type: circle">
                                                        <li><a href="">Ongoing
                                                                {{ count($supports->where('status', 'on_going')) }}</a></li>
                                                        <li><a href="">Closed
                                                                {{ count($supports->where('status', 'completed')) }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{ route('project.index') }}">
                                            <div class="card rounded-0">
                                                <h6 class="m-0 p-1 text-center"
                                                    style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">
                                                    Total Support Cases ({{ count($cases) }})</h6>
                                                <div class="card-body py-4">
                                                    <ul class="py-2 rounded-0" style="list-style-type: circle">
                                                        <li><a href="">Ongoing
                                                                {{ count($cases->where('status', 'on_going')) }}</a></li>
                                                        <li><a href="">Closed
                                                                {{ count($cases->where('status', 'completed')) }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-offset-2 mx-auto">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs d-flex justify-content-start align-items-center border-0" id="myTab" role="tablist" style="margin-bottom: -50px; position: relative; z-index: 10;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="latest-support-tab" data-bs-toggle="tab"
                                    data-bs-target="#latest-support" type="button" role="tab"
                                    aria-controls="latest-support" aria-selected="true">
                                    Latest Support Cases
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ongoing-support-tab" data-bs-toggle="tab"
                                    data-bs-target="#ongoing-support" type="button" role="tab"
                                    aria-controls="ongoing-support" aria-selected="false">
                                    On Going Supports
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="client-projects-tab" data-bs-toggle="tab"
                                    data-bs-target="#client-projects" type="button" role="tab"
                                    aria-controls="client-projects" aria-selected="false">
                                    Client Projects
                                </button>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="latest-support" role="tabpanel"
                                aria-labelledby="latest-support-tab">
                                <div class="card rounded-0">
                                    <div class="card-body px-0">
                                        <table
                                            class="caseDT table table-striped table-hover data_event mt-2 mb-4 border pt-2 text-center"
                                            width="100%">
                                            <thead style="background-color:#24729759 !important">
                                                <tr>
                                                    <th width="15%">Case ID</th>
                                                    <th width="15%">Support ID</th>
                                                    <th width="13%">Project ID</th>
                                                    <th width="42%">Subject</th>
                                                    <th width="15%">Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @if ($cases)
                                                    @foreach ($cases as $key => $case)
                                                        <tr class="clickable-row"
                                                            onclick="window.location='{{ route('support-case.show', $case->code) }}'">
                                                            <td>
                                                                <span class="border-bottom-link">
                                                                    {{ $case->code }}</span>
                                                            </td>
                                                            <td><span
                                                                    class="border-bottom-link">{{ App\Models\Client\Project::whereId($case->project_id)->value('project_code') }}
                                                                </span></td>
                                                            <td><span
                                                                    class="border-bottom-link">{{ App\Models\Client\ClientSupport::whereId($case->support_id)->value('support_id') }}</span>
                                                            </td>

                                                            <td><span
                                                                    class="border-bottom-link">{{ $case->subject }}</span>
                                                            </td>
                                                            <td>
                                                                {{ \Carbon\Carbon::parse($case->created_at)->diffForHumans() }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="ongoing-support" role="tabpanel"
                                aria-labelledby="ongoing-support-tab">
                                <div class="card rounded-0">
                                    <div class="card-body px-0">
                                        <table
                                            class="supportDT table table-striped table-hover data_event mt-2 mb-4 border pt-2 text-center"
                                            width="100%">
                                            <thead style="background-color:#24729759 !important">
                                                <tr>
                                                    <th width="15%">Support ID</th>
                                                    <th width="15%">Support Type</th>
                                                    <th width="10%">Project ID</th>
                                                    <th width="50%">Title</th>
                                                    <th width="10%">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($supports)
                                                    @foreach ($supports as $key => $support)
                                                        <tr class="clickable-row"
                                                            onclick="window.location='{{ route('client-support.show', $support->support_id) }}'">

                                                            <td>
                                                                <span
                                                                    class="border-bottom-link">{{ $support->support_id }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="border-bottom-link">
                                                                    @if ($support->support_type == 'amc_support')
                                                                        <span class="text-info badge-text rounded-1">AMC
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
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="border-bottom-link">{{ App\Models\Client\Project::whereId($support->project_id)->value('project_code') }}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="border-bottom-link">{{ $support->support_title }}</span>
                                                            </td>
                                                            <td>
                                                                {{-- <span class="border-bottom-link"> --}}
                                                                @if ($support->status == 'pending')
                                                                    <span
                                                                        class="fw-bold badge-text text-warning">Pending</span>
                                                                @elseif($support->status == 'on_going')
                                                                    <span class="fw-bold badge-text text-success">On
                                                                        Going</span>
                                                                @else
                                                                    <span
                                                                        class="fw-bold badge-text text-danger">Closed</span>
                                                                @endif
                                                                {{-- </span> --}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="client-projects" role="tabpanel"
                                aria-labelledby="client-projects-tab">
                                <div class="card rounded-0">
                                    <div class="card-body px-0">
                                        <table
                                            class="clientProjectDT table table-striped table-hover data_event mt-2 mb-4 border pt-2 text-center"
                                            width="100%">
                                            <thead style="background-color:#24729759 !important">
                                                <tr>
                                                    <th width="13%">Project ID</th>
                                                    <th width="50%">Name</th>
                                                    <th width="24%">Order Number</th>
                                                    <th width="13%">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($projects)
                                                    @foreach ($projects as $key => $project)
                                                        <tr class="clickable-row"
                                                            onclick="window.location='{{ route('project.show', $project->slug) }}'">
                                                            <td><span
                                                                    class="border-bottom-link">{{ $project->project_code }}</span>
                                                            </td>
                                                            <td><span
                                                                    class="border-bottom-link">{{ $project->project_title }}</span>
                                                            </td>
                                                            <td><span
                                                                    class="border-bottom-link">{{ $project->order_id }}</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-success rounded-1">{{ ucfirst($project->status) }}</span>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @endif
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
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.clientProjectDT').DataTable({
                    // dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    dom: '<"datatable-header"f><"datatable-scroll"t><"datatable-footer"p>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 2, 3],
                    }, ],
                });
                $('.supportDT').DataTable({
                    // dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    dom: '<"datatable-header"f><"datatable-scroll"t><"datatable-footer"p>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 3],
                    }, ],
                });
                $('.caseDT').DataTable({
                    // dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    dom: '<"datatable-header"f><"datatable-scroll"t><"datatable-footer"p>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 3],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce

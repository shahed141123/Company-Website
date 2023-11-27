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
                <div class="col-lg-12">
                    <h4 class="mb-1 text-center page_titles w-25">Client Projects</h4>
                </div>
                <!-- Row End -->
                <div class="row gx-2">
                    <div class="col-lg-4" onclick="window.location='{{ route('project.index') }}'" style="cursor: pointer;">
                        <div class="card m-0 mb-3 rounded-0"
                            style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                            <div class="card-body">
                                {{-- first Card --}}
                                <div>
                                    <ul class="mt-2 p-2 pb-0 mb-1 profile-card_menu" style="height: 68px;">

                                        @if ($latest_case)
                                            <li class="ms-3">
                                                <a class="main_color fw-bold" href="{{ route('support-case.show', $latest_case->code) }}" style="color:#ae0a46; text-decoration: underline; cursor: pointer;">
                                                    {{ $latest_case->subject }}
                                                </a>
                                            </li>
                                        @else
                                            <li class="ms-2">
                                                There Is No Case Available
                                            </li>
                                        @endif
                                    </ul>
                                    <h6 class="ms-3 main_color fw-bold m-0"> Recent Cases
                                        ({{ count($cases->where('status', '!=', 'closed')) }})</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-0">
                            <div class="card m-0 mb-3 rounded-0"
                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                                <div class="card-body">
                                    {{-- first Card --}}
                                    <div class="row">
                                        <div class="col-lg-4" onclick="window.location='{{ route('project.index') }}'"
                                            style="cursor: pointer;">

                                            <div class="border-right-column">
                                                <ul class="pt-2  mt-2 p-2 pb-2 mb-2 profile-card_menu">
                                                    {{-- <li>
                                                        <a href="">Pending : 5</a>
                                                    </li> --}}
                                                    <li>
                                                        <a href="">Ongoing :
                                                            {{ count($projects->where('status', 'on_going')) }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Closed :
                                                            {{ count($projects->where('status', 'completed')) }}</a>
                                                    </li>
                                                </ul>
                                                <h6 class="ps-2 p-0 m-0 main_color fw-bold"> Total Projects
                                                    ({{ count($projects) }})</h6>
                                            </div>

                                        </div>
                                        <div class="col-lg-4"
                                            onclick="window.location='{{ route('client-support.index') }}'"
                                            style="cursor: pointer;">
                                            <div class="border-right-column">
                                                <ul class="pt-2  mt-2 p-2 pb-2 mb-2 profile-card_menu">
                                                    {{-- <li>
                                                        <a href="">Pending : 5</a>
                                                    </li> --}}
                                                    <li>
                                                        <a href="javascript:void(0);">Ongoing :
                                                            {{ count($supports->where('status', 'on_going')) }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Closed :
                                                            {{ count($supports->where('status', 'closed')) }}</a>
                                                    </li>
                                                </ul>
                                                <a href="{{ route('client-support.index') }}">
                                                    <h6 class="ps-2 p-0 m-0 main_color fw-bold">Total Supports
                                                        ({{ count($supports) }})</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" onclick="window.location='{{ route('support-case.index') }}'"
                                            style="cursor: pointer;">
                                            <div class="">
                                                <ul class="pt-2  mt-2 p-2 pb-2 mb-2 profile-card_menu">
                                                    {{-- <li>
                                                        <a href="">Pending : 5</a>
                                                    </li> --}}
                                                    <li>
                                                        <a href="javascript:void(0);">Ongoing :
                                                            {{ count($cases->where('status', '!=', 'closed')) }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Closed :
                                                            {{ count($cases->where('status', 'closed')) }}</a>
                                                    </li>
                                                </ul>
                                                <a href="javascript:void(0);">
                                                    <h6 class="ps-2 p-0 m-0 main_color fw-bold">Total Support Cases
                                                        ({{ count($cases) }})</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card rounded-0">
                            <div class="card-header rounded-0 border-0 p-2"
                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                                <div class="row">
                                    <h5 class="p-0 m-0 fw-bold main_color text-center">Latest Support Cases</h5>
                                </div>
                            </div>
                            <div class="card-body"
                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                                <div class="col-lg-12 pt-2">
                                    <table
                                        class="caseDT table datatable-scroll-y data_event mt-2 mb-4 border pt-2 text-center"
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

                                                        <td><span class="border-bottom-link">{{ $case->subject }}</span>
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
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="card rounded-0">
                            <div class="card-header rounded-0 border-0 p-2"
                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                                <div class="row">
                                    <h5 class="p-0 m-0 fw-bold main_color text-center">On Going Supports</h5>
                                </div>
                            </div>
                            <div class="card-body"
                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                                <div class="col-lg-12 pt-2">
                                    <table
                                        class="supportDT table datatable-scroll-y data_event mt-2 mb-4 border pt-2 text-center"
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
                                                                <span class="fw-bold badge-text text-danger">Closed</span>
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
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="card rounded-0">
                            <div class="card-header rounded-0 border-0 p-2"
                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                                <div class="row">
                                    <h5 class="p-0 m-0 fw-bold main_color text-center">Client Projects</h5>
                                    {{-- <p class="p-0 m-0">
                                        <a href="{{ route('project.create') }}" class="btn btn-info text-white">Add</a>
                                    </p> --}}
                                </div>
                            </div>
                            <div class="card-body"
                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                                <div class="col-lg-12 pt-2">
                                    <table
                                        class="clientProjectDT table datatable-scroll-y data_event mt-2 mb-4 border pt-2 text-center"
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

@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Marketing Team Target Management</span>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="{{ route('marketing-team-target.create') }}">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Marketing Team Target</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table marketingTeamTargetDT table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="35%">Country</th>
                            <th width="50%">Manager Name</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($marketingTeamTargets)
                            @foreach ($marketingTeamTargets as $key => $marketingTeamTarget)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ App\Models\User::where('id', $marketingTeamTarget->marketing_manager_id)->value('name') }}
                                    </td>
                                    <td>{{ App\Models\Admin\Country::where('id', $marketingTeamTarget->country_id)->value('country_name') }}
                                    </td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#mttdetails"
                                            class="text-info">
                                            <i class="fa-solid fa-info me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('marketing-team-target.edit', [$marketingTeamTarget->id]) }}"
                                            class="text-primary">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('marketing-team-target.destroy', [$marketingTeamTarget->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>

                                        {{-- Edit Success Modal --}}
                                        <div id="mttdetails" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">Edit News Letter</h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <span>Manager Name</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <span>{{ App\Models\User::where('id', $marketingTeamTarget->marketing_manager_id)->value('name') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <span>Country</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <span>{{ App\Models\Admin\Country::where('id', $marketingTeamTarget->country_id)->value('country_name') }}</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <table
                                                                class="table marketingTeamTargetDT table-bordered table-hover text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="5%">Id</th>
                                                                        <th width="10%">Email</th>
                                                                        <th width="10%">Social</th>
                                                                        <th width="10%">Call</th>
                                                                        <th width="5%">Press</th>
                                                                        <th width="10%">Presentaion</th>
                                                                        <th width="5%">Boost</th>
                                                                        <th width="5%">Meet</th>
                                                                        <th width="10%">Blog</th>
                                                                        <th width="10%">Follow Up</th>
                                                                        <th width="10%">Negotiation</th>
                                                                        <th width="10%" class="text-center">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @if ($marketingTeamTargets)
                                                                        @foreach ($marketingTeamTargets as $key => $marketingTeamTarget)
                                                                            <tr>
                                                                                <td>{{ ++$key }}</td>
                                                                                <td>{{ $marketingTeamTarget->email }}</td>
                                                                                <td>{{ $marketingTeamTarget->social }}</td>
                                                                                <td>{{ $marketingTeamTarget->call }}</td>
                                                                                <td>{{ $marketingTeamTarget->press }}</td>
                                                                                <td>{{ $marketingTeamTarget->presentaion }}
                                                                                </td>
                                                                                <td>{{ $marketingTeamTarget->boost }}</td>
                                                                                <td>{{ $marketingTeamTarget->meet }}</td>
                                                                                <td>{{ $marketingTeamTarget->blog }}</td>
                                                                                <td>{{ $marketingTeamTarget->follow_up_meet }}
                                                                                </td>
                                                                                <td>{{ $marketingTeamTarget->negotiation }}
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('marketing-team-target.edit', [$marketingTeamTarget->id]) }}"
                                                                                        class="text-primary">
                                                                                        <i
                                                                                            class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                                                    </a>
                                                                                    <a href="{{ route('marketing-team-target.destroy', [$marketingTeamTarget->id]) }}"
                                                                                        class="text-danger delete">
                                                                                        <i
                                                                                            class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                                                    </a>
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
                                        {{-- Edit Success Modal End --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.marketingTeamTargetDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
    @endpush
@endonce

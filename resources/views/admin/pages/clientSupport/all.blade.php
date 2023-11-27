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
                        <span class="breadcrumb-item active">Available Supports</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row mx-lg-3">
                <div class="col-12 mb-2" style="background-color: #247297; color: white;">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6">
                            {{-- <a href="{{ route('client-database.create') }}" type="button"
                            class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="icon-plus2"></i>
                            </span>
                            Add New
                        </a> --}}
                        </div>
                        <div class="col-lg-6 col-sm-6 mt-1">
                            <h5 class="text-center mb-0">Available Supports</h5>
                        </div>
                        <div class="col-lg-4 col-sm-1 mt-1">
                        </div>

                    </div>

                </div>
                <div class="col-12 p-0">
                    <div class="table-responive">
                        <table class="table supportDT table-bordered table-hover text-center">
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
                                                <span class="border-bottom-link">{{ $support->support_id }}</span>
                                            </td>
                                            <td>
                                                <span class="border-bottom-link">
                                                    @if ($support->support_type == 'amc_support')
                                                        <span class="text-info badge-text rounded-1">AMC
                                                            Support</span>
                                                    @elseif($support->support_type == 'implementation_support')
                                                        <span class="fw-bold badge-text text-info rounded-1">Implementation
                                                            Support</span>
                                                    @else
                                                        <span class="fw-bold badge-text text-info rounded-1">Others
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
                                                <span class="border-bottom-link">{{ $support->support_title }}</span>
                                            </td>
                                            <td>
                                                {{-- <span class="border-bottom-link"> --}}
                                                @if ($support->status == 'pending')
                                                    <span class="fw-bold badge-text text-warning">Pending</span>
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
        <!-- /page header -->

    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.supportDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0, 4, 5],
                }, ],
            });
        </script>
    @endpush
@endonce

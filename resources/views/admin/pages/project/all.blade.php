@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Client Projects</span>
                    </div>

                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content">
            <div class="row mx-3">
                <div class="col-12 mb-2 py-1" style="background-color: #247297; color: white;">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                            {{-- <a href="{{ route('project.create') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Add New
                            </a> --}}
                        </div>
                        <div class="col-lg-6 col-sm-6 mt-1">
                            <h5 class="text-center mb-0">Client Projects</h5>
                        </div>

                    </div>

                </div>
                <div class="col-12 p-0">
                    <div class="table-responive">
                        <table class="table clientProjectDT table-bordered table-hover text-center">
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
                                            <td><span class="border-bottom-link">{{ $project->project_code }}</span>
                                            </td>
                                            <td><span class="border-bottom-link">{{ $project->project_title }}</span>
                                            </td>
                                            <td><span class="border-bottom-link">{{ $project->order_id }}</span>
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
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.clientProjectDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 3, 4],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce

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
                <div class="col-lg-8 col-offset-2 mx-auto">
                    <div class="card rounded-0">
                        <h6 class="m-0 p-1 text-center"
                                style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Client Projects</h6>
                        <div class="card-body">
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
                                                            class="text-primary rounded-1">{{ ucfirst($project->status) }}</span>
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
                        targets: [0, 1, 2, 3],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce

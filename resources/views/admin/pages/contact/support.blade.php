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
                        <span class="breadcrumb-item active">Support Related Messages</span>
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
                <div class="col-12 mb-2"
                    style="background-color: #247297; color: white;">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 py-1">
                            <a href="{{ route('client-support.create') }}" type="button"
                            class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="icon-plus2"></i>
                            </span>
                            Add
                        </a>
                        </div>
                        <div class="col-lg-6 col-sm-6 mt-1">
                            <h5 class="text-center mb-0">All Support  Messages</h5>
                        </div>
                        <div class="col-lg-4 col-sm-1 mt-1">
                        </div>

                    </div>

                </div>
                <div class="col-12 p-0">
                    <div class="table-responive">
                        <table class="table supportDT table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th width="10%">Code</th>
                                    <th width="20%">Client Name</th>
                                    <th width="25%">Title</th>
                                    <th width="18%">Support Type</th>
                                    <th width="10%">Status</th>
                                    <th width="10%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($supports)
                                @foreach ($supports as $key => $support)
                                    <tr>
                                        <td>{{ $support->support_id }}</td>
                                        <td>{{ $support->support_id }}</td>
                                        <td>{{ $support->support_title }}</td>
                                        <td>
                                            @if ( $support->support_type == 'amc_support')
                                                <span class="badge bg-secondary">AMC Support</span>
                                            @elseif ( $support->support_type == 'implementation_support')
                                                <span class="badge bg-secondary">Implementation Support</span>
                                            @else
                                                <span class="badge bg-secondary">Others Support</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-info">{{ ucfirst($support->status) }}</span>
                                        </td>
                                            <td>
                                                <a href="{{ route('client-support.edit', [$support->id]) }}" class="text-primary">
                                                    <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                </a>
                                                <a href="{{ route('client-support.destroy', [$support->id]) }}"
                                                    class="text-danger delete">
                                                    <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
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
                    targets: [0,2,5],
                }, ],
            });
        </script>
    @endpush
@endonce

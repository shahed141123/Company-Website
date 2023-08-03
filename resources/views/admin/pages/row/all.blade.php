@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('site-content.index') }}" class="breadcrumb-item">Site Contents</a>
                        <a href="{{ route('row.index') }}" class="breadcrumb-item">Row Builder</a>
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
                    margin-bottom: -39px;">
                    <a href="{{ route('row.create') }}" type="button"
                        class="mx-3 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Add
                    </a>
                    {{-- <a href="{{ route('row.create') }}">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a> --}}
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1 mb-0" style="color: #247297;">All Rows</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table rowAdd table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th width="15%">Image</th>
                            <th width="40%">Title</th>
                            <th width="20%">List Title</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($rows)
                            @foreach ($rows as $key => $row)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>
                                        @if (!empty($row->image))
                                            <img src="{{ asset('storage/thumb/' . $row->image) }}" alt="" width="25"
                                                height="25">
                                        @endif
                                    </td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->list_title}}</td>
                                    <td>
                                        <a href="{{ route('row.edit', $row->id) }}" class="text-primary">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 text-primary"></i>
                                        </a>
                                        <a href="{{ route('row.destroy', [$row->id]) }}" class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 text-danger"></i>
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
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.rowAdd').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2,3,4],
                }, ],
            });
        </script>
    @endpush
@endonce

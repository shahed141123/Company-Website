@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Knowledge Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                <div>
                    <a href="#" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                            <span>Site Content</span>
                        </div>
                    </a>
                    <a href="{{ route('knowledge.create') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-plus me-1" style="font-size: 12px;"></i>
                            <span> Add Knowledges</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content pt-0 w-75 mx-auto">
            <div class="row">
                <h5 class="text-center my-4" style="color: #247297;">All Knowledges</h5>
                <div class="col-lg-8 offset-lg-2">
                    <div>
                        <table class="table whatWeDoDt table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th width="8%">Id</th>
                                    <th width="12%">Type</th>
                                    <th width="70%">Pdf Download Link</th>
                                    <th width="10%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($knowledges)
                                    @foreach ($knowledges as $key => $knowledge)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $knowledge->type }}</td>
                                            <td>
                                                <a href="{{ asset('storage/files/' . $knowledge->brochure) }}">Download
                                                    PDF</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('knowledge.edit', [$knowledge->id]) }}"
                                                    class="text-primary">
                                                    <i
                                                        class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                </a>
                                                <a href="{{ route('knowledge.destroy', [$knowledge->id]) }}"
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
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.whatWeDoDt').DataTable({
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

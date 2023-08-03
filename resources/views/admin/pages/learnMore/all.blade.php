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
                        <a href="{{ route('site-content.index') }}" class="breadcrumb-item">Site Content</a>
                        <a href="{{ route('learnMore.index') }}" class="breadcrumb-item">Learn More Page</a>
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
        <div class="content pt-0 w-50 mx-auto mt-2">
            <div class="d-flex align-items-center py-1 bg-white">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3">
                    <a href="{{ route('learnMore.create') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Solution Details"
                        class="mx-3 btn btn-sm btn-info btn-labeled custom_btn btn-labeled-start float-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Add
                    </a>

                    <div class="text-center" style="margin-left: 6rem;">
                        <h5 class="mb-0" style="color: #247297;">Learn More Page</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Template Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        @php
                            $words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
                        @endphp
                    <tbody>
                        @if (count($learnMores)>0)
                            @foreach ($learnMores as $key => $learnMore)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>
                                        {{ isset($words[$key]) ? 'Tamplate' . ' ' .Str::ucfirst($words[$key]) : 'Number out of range' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('learnMore.edit', [$learnMore->id]) }}" class="text-primary">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('learnMore.destroy', [$learnMore->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">No Data Found</td>
                            </tr>

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
            $('.whatWeDoDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4],
                }, ],
            });
        </script>
    @endpush
@endonce

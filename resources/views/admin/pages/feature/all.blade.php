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
                        <span class="breadcrumb-item active">Features Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                <div>
                    <!-- Leave Dashboard link -->
                    <a href="{{ route('feature.create') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>add Features</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content">
            <div class="text-center">
                <h4 class="m-0" style="color: #247297;">All Client Experience</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%">Id</th>
                                            <th width="5%">Logo</th>
                                            <th width="20%">Title</th>
                                            <th width="60%">Header</th>
                                            <th width="10%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($features)
                                            @foreach ($features as $key => $feature)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td class="text-center"><img class="rounded-circle"
                                                            src="{{ asset('storage/thumb/' . $feature->logo) }}"
                                                            height="25" width="25" alt=""></td>
                                                    <td>{{ $feature->title }}</td>
                                                    <td>{!! $feature->header !!}</td>
                                                    <td>
                                                        <a href="{{ route('feature.edit', $feature->id) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square dash-icons"></i>
                                                        </a>
                                                        <a href="{{ route('feature.destroy', [$feature->id]) }}"
                                                            class="text-danger delete">
                                                            <i class="fa-solid fa-trash dash-icons"></i>
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
        </div>
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.newsLetterDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2],
                }, ],
            });
        </script>
    @endpush
@endonce

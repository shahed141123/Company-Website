@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('noticeboard') }}" class="breadcrumb-item">Notice Board</a>
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
        <!-- Content area -->
        <div class="content">
            <!-- Highlighting rows and columns -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-5 col-4">
                            <a href="javascript(void:0);" type="button" data-bs-toggle="modal" data-bs-target="#noticeAdd"
                                class="mx-1 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Add
                            </a>
                        </div>
                        <div class="col-lg-7 col-8">
                            <h5 class="mb-0 text-start">All Notices</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table noticeDT table-bordered table-hover text-center ">
                            <thead>
                                <tr>
                                    <th width="5%">Id</th>
                                    <th width="45%">Title</th>
                                    <th width="20%">Publish Date</th>
                                    <th width="20%">Expiry Date</th>
                                    {{-- <th width="10%">Achievement Status</th> --}}
                                    <th width="10%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($notices)
                                    @foreach ($notices as $key => $notice)
                                        <tr>
                                            <td class="text-center">{{ ++$key }}</td>
                                            <td>{{ $notice->title }}</td>
                                            <td>{{ $notice->publish_date }}</td>
                                            <td>{{ $notice->expiry_date }}</td>
                                            {{-- <td>{{ $notice->achievement_status }}</td> --}}
                                            <td>
                                                <a class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#notice_{{ $notice->id }}">
                                                    <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-info me-3"></i>
                                                </a>
                                                <a href="{{ route('notice.destroy', $notice->id) }}"
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
        <!-- /content area End-->
    </div>
    @include('admin.pages.notice.notice_modals')

@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.noticeDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 4],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce

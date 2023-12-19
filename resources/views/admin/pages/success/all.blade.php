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
                        <span class="breadcrumb-item active">Success Management</span>
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
                    <a href="" data-bs-toggle="modal" data-bs-target="#addSuccess">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Success</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table whatWeDoDt table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="10%">Id</th>
                            <th width="15%">Image</th>
                            <th width="25%">Success Title</th>
                            <th width="35%">Success Description</th>
                            <th width="15%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($successes)
                            @foreach ($successes as $key => $succes)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>
                                        <img class="rounded-circle" src="{{ asset('storage/' . $succes->image) }}"
                                            height="25px" width="25px" alt="">
                                    </td>
                                    <td>{{ $succes->title }}</td>
                                    <td>{{ Str::words($succes->description, 20) }}</td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editSuccess-{{$succes->id}}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('success.destroy', [$succes->id]) }}" class="text-danger delete">
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
        {{-- Add Success Modal --}}
        <div id="addSuccess" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Success Form</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form id="myform" method="post" action="{{ route('success.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="container py-4 px-3">
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <h6 class="mb-0">Title <span class="text-danger">*</span> </h6>
                                            </div>
                                            <div class="form-group col-12 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength"
                                                    maxlength="252" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row mb-1">
                                            <div class="col-lg-12">
                                                <span>Success Image</span>
                                            </div>
                                            <div class="col-10">
                                                <input type="file" name="image" class="form-control form-control-sm"
                                                    id="image" accept="image/*" />
                                            </div>
                                            <div class="col-2">
                                                <img id="showImage" class="rounded-circle"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="Brand" height="40px" width="40px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <h6 class="mb-0">Button Name </h6>
                                            </div>
                                            <div class="form-group col-12 text-secondary">
                                                <input type="text" name="btn_name" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-1">
                                            <div class="col-lg-12">
                                                <h6 class="mb-0">Button Link</h6>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="link" class="form-control maxlength"
                                                    maxlength="255" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h6 class="mb-0">Description <span class="text-danger">*</span></h6>
                                    </div>
                                    <div class="form-group col-12 text-secondary">
                                        <textarea name="description" class="form-control" cols="40" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits rounded-0"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}

        {{-- Edit Success Modal --}}
        @if ($successes)
            @foreach ($successes as $key => $success)
                <div id="editSuccess-{{$success->id}}" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title text-white">Edit Success Form</h6>
                                <a type="button" data-bs-dismiss="modal">
                                    <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                                </a>
                            </div>
                            <div class="modal-body p-0 px-2">
                                <form method="post" action="{{ route('success.update', $success->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="container py-4 px-3">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h6 class="mb-0">Title <span class="text-danger">*</span> </h6>
                                                    </div>
                                                    <div class="form-group col-12 text-secondary">
                                                        <input type="text" name="title"
                                                            class="form-control form-control-sm maxlength" maxlength="252"
                                                            value="{{ $success->title }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="row mb-1">
                                                    <div class="col-lg-12">
                                                        <h6 class="mb-0">Success Image</h6>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="file" name="image" class="form-control"
                                                            id="image" accept="image/*" />
                                                    </div>
                                                    <div class="col-2">
                                                        <img id="showImage" class="rounded-circle"
                                                            src="{{ asset('storage/' . $success->image) }}" alt="Success"
                                                            height="40px" width="40px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h6 class="mb-0">Button Name </h6>
                                                    </div>
                                                    <div class="form-group col-12 text-secondary">
                                                        <input type="text" name="btn_name"
                                                            class="form-control form-control-sm"
                                                            value="{{ $success->btn_name }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row mb-1">
                                                    <div class="col-lg-12">
                                                        <h6 class="mb-0">Button Link</h6>
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" name="link"
                                                            class="form-control form-control-sm maxlength" maxlength="255"
                                                            value="{{ $success->link }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <h6 class="mb-0">Description</h6>
                                            </div>
                                            <div class="form-group col-12 text-secondary">
                                                <textarea name="description" class="form-control" cols="30" rows="5">{{ $success->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                        <button type="submit" class="submit_btn from-prevent-multiple-submits rounded-0"
                                            style="padding: 5px;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        {{-- Edit Success Modal End --}}


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

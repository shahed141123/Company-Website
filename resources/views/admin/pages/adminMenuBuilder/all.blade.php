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
                        <span class="breadcrumb-item active">Admin Menu Management</span>
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
                    <a href="" data-bs-toggle="modal" data-bs-target="#addAdminMenu">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Admin Menus</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table adminMenuDt table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="5%">Sl No:</th>
                            <th width="20%">Menu Name</th>
                            <th width="15%">Is Module</th>
                            <th width="15%">Is Parent</th>
                            <th width="15%">Route Name</th>
                            <th width="15%">Permission Name</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($menus)
                            @foreach ($menus as $key => $menu)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $menu->name }}</td>
                                    <td>
                                        @if ($menu->is_module == '1')
                                            <span class="badge bg-success">Yes</span>
                                        @else
                                            <span class="badge bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($menu->is_parent == '1')
                                            <span class="badge bg-success">Yes</span>
                                        @else
                                            <span class="badge bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td>{{ $menu->route_name }}</td>
                                    <td>{{ $menu->permission_name }}</td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-menu-{{ $menu->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('admin-menu-builder.destroy', [$menu->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>

                                        {{-- Edit Success Modal --}}
                                        <div id="edit-menu-{{ $menu->id }}" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">Edit Admin Menus
                                                        </h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form id="myform" method="post"
                                                            action="{{ route('admin-menu-builder.update', $menu->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="container">
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span> Menu Name</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" value="{{ $menu->name }}"
                                                                            name="name"
                                                                            class="form-control form-control-sm allow_decimal"
                                                                            maxlength="100" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Menu icon</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" value="{{ $menu->icon }}"
                                                                            name="icon"
                                                                            class="form-control form-control-sm allow_decimal"
                                                                            maxlength="100" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Route Name</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text"
                                                                            value="{{ $menu->route_name }}"
                                                                            name="route_name"
                                                                            class="form-control form-control-sm allow_decimal"
                                                                            maxlength="100" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Permission Name</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text"
                                                                            value="{{ $menu->permission_name }}"
                                                                            name="permission_name"
                                                                            class="form-control form-control-sm"
                                                                            maxlength="100" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Is Module</span>
                                                                    </div>
                                                                    <div class="col-sm-8 d-flex justify-content-start">
                                                                        <input class="form-check-input dealId"
                                                                            type="checkbox" id="dealId"
                                                                            name="is_module" value="1"
                                                                            @checked($menu->is_module == '1')>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Module Name </span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="module_id"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose rfq">
                                                                            <option></option>
                                                                            @foreach ($menus as $item)
                                                                                <option class="form-control"
                                                                                    value="{{ $item->id }}"
                                                                                    @selected($menu->module_id == $item->id)>
                                                                                    {{ $item->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Is Parent</span>
                                                                    </div>
                                                                    <div class="col-sm-8 d-flex justify-content-start">
                                                                        <input class="form-check-input dealId2"
                                                                            type="checkbox" id="dealId2"
                                                                            name="is_parent" value="1"
                                                                            @checked($menu->is_parent == '1')>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Parent Name</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="parent_id"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose rfq">
                                                                            <option></option>
                                                                            @foreach ($menus as $item)
                                                                                <option class="form-control"
                                                                                    value="{{ $item->id }}"
                                                                                    @selected($menu->parent_id == $item->id)>
                                                                                    {{ $item->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                            </div>
                                                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                <button type="submit"
                                                                    class="submit_btn from-prevent-multiple-submits"
                                                                    style="padding: 5px;">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Success Modal End --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Success Modal --}}
        <div id="addAdminMenu" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Admin Menus
                        </h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form id="myform" method="post" action="{{ route('admin-menu-builder.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span> Menu Name</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="name"
                                            class="form-control form-control-sm allow_decimal" maxlength="100" required />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Menu icon</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="icon"
                                            class="form-control form-control-sm allow_decimal" maxlength="100" required />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Route Name</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="route_name"
                                            class="form-control form-control-sm allow_decimal" maxlength="100" required />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Permission Name</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="permission_name" class="form-control form-control-sm"
                                            maxlength="100" required />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Is Module</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-check-input dealId" type="checkbox" id="dealId"
                                            name="is_module" value="1">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Module Name </span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="module_id" class="form-control form-control-sm select"
                                            data-placeholder="Chose rfq">
                                            <option></option>
                                            @foreach ($menus as $item)
                                                <option class="form-control" value="{{ $item->id }}">
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Is Parent</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-check-input dealId2" type="checkbox" id="dealId2"
                                            name="is_parent" value="1">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Parent Name</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="parent__id" class="form-control form-control-sm select"
                                            data-placeholder="Chose rfq">
                                            <option></option>
                                            @foreach ($menus as $item)
                                                <option class="form-control" value="{{ $item->id }}">
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.adminMenuDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        </script>
    @endpush
@endonce

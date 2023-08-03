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
                        <span class="breadcrumb-item active">Sales Managers</span>
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
                    <a href="{{ route('sales-account.create') }}">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Sales Manager</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table salesManager table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="10%">Image </th>
                            <th width="15%">Name </th>
                            <th width="20%">Email </th>
                            <th width="10%">Designation </th>
                            <th width="15%">Role </th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($salesmans)
                            @foreach ($salesmans as $key => $salesman)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td class="text-center"><img class="rounded-circle"
                                            src="{{ asset('upload/Profile/Admin/' . $salesman->photo) }}" height="25"
                                            width="25" alt=""></td>
                                    <td>{{ $salesman->name }}</td>
                                    <td>{{ $salesman->email }}</td>
                                    <td>{{ $salesman->designation }}</td>
                                    <td>
                                        @foreach ($salesman->roles as $role)
                                            <span class="badge bg-danger">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="" class="text-primary">
                                            <div class="form-switch">
                                                <input name="toggle" type="checkbox"
                                                    class="form-check-input form-check-input-danger"
                                                    value="{{ $salesman->id }}" id="sc_r_danger"
                                                    {{ $salesman->status == 'inactive' ? 'checked' : '' }}>
                                            </div>
                                        </a>

                                        <a href="{{ route('sales-account.edit', [$salesman->id]) }}" class="text-primary">
                                            <i class="fa-solid fa-pen-to-square p-1 rounded-circle text-primary"></i>
                                        </a>

                                        <a href="{{ route('sales-account.destroy', [$salesman->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>

                                        <a href=""data-bs-toggle="modal"
                                            data-bs-target="#assign-manager-{{ $salesman->id }}">
                                            <i class="fa-solid fa-user p-1 rounded-circle text-info"></i>
                                        </a>
                                        <!---Assign Manager modal--->
                                        <div id="assign-manager-{{ $salesman->id }}" class="modal fade" tabindex="-1"
                                            style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        @php
                                                            $sales_manager = App\Models\User::where('id', $salesman->id)->first();
                                                        @endphp
                                                        <h5 class="modal-title">Assign Role :
                                                            {{ $sales_manager->name }}</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body border br-7">
                                                        <form method="post"
                                                            action="{{ route('assign.salesmanager-role', $salesman->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="row d-flex align-items-center mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Name</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="email" name="email"
                                                                                value="{{ ucfirst($sales_manager->name) }}"
                                                                                class="form-control form-control-sm maxlength"
                                                                                maxlength="100" />
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="row d-flex align-items-center mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Country</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="email" name="email"
                                                                                value="{{ ucfirst($sales_manager->country) }}"
                                                                                class="form-control form-control-sm maxlength"
                                                                                maxlength="100" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="row d-flex align-items-center mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Designation</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="email" name="email"
                                                                                value="{{ ucfirst($sales_manager->designation) }}"
                                                                                class="form-control form-control-sm maxlength"
                                                                                maxlength="100" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="row d-flex align-items-center mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Assign Roles</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="roles"
                                                                                class="form-control select"
                                                                                data-placeholder="Choose Role...">
                                                                                <option></option>
                                                                                @foreach ($roles as $role)
                                                                                    <option value="{{ $role->id }}"
                                                                                        {{ $sales_manager->hasRole($role->name) ? 'selected' : '' }}>
                                                                                        {{ $role->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-end mt-2">
                                                                    <button type="submit" class="submit_btn from-prevent-multiple-submits" style="padding: 5px;">Submit</button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---Assign Manager modal--->
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
            $('.salesManager').DataTable({
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

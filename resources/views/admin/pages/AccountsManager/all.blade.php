@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Accounts Managers</span>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="cardT">
                        <div class="d-flex align-items-center py-2">
                            {{-- Add Details Start --}}
                            <div class="text-success nav-link cat-tab3"
                                style="position: relative;
                                z-index: 999;
                                margin-bottom: -40px;">
                                <a href="{{ route('accounts-manager.create') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add Solution Details">
                                            <i class="ph-plus icons_design"></i> </span>
                                        <span class="ms-1" style="color: #247297;">Add</span>
                                    </div>
                                </a>
                                <div class="text-center" style="margin-left: 30rem">
                                    <h5 class="ms-1" style="color: #247297;">All Accounts Managers</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                        </div>

                        <div>
                            <table class="table table-bordered table-hover salesaccountDT text-center">
                                <thead>
                                    <tr class="text-center">
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
                                                        src="{{ asset('upload/Profile/Admin/' . $salesman->photo) }}"
                                                        height="25" width="25" alt=""></td>
                                                <td>{{ $salesman->name }}</td>
                                                <td>{{ $salesman->email }}</td>
                                                <td>{{ $salesman->designation }}</td>
                                                <td>
                                                    @foreach ($salesman->roles as $role)
                                                        <span class="text-danger">{{ $role->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>

                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a>
                                                            <div class="form-switch">
                                                                <input name="toggle" type="checkbox"
                                                                    class="form-check-input form-check-input-danger"
                                                                    value="{{ $salesman->id }}" id="sc_r_danger"
                                                                    {{ $salesman->status == 'inactive' ? 'checked' : '' }}>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-success"
                                                            data-bs-toggle="modal"
                                                            title="View & Assign Roles to Accounts Manager"
                                                            data-bs-target="#assign-manager-{{ $salesman->id }}">
                                                            <i
                                                                class="fa-solid fa-user-check p-1 rounded-circle text-primar"></i>
                                                        </a>
                                                        <a href="{{ route('accounts-manager.edit', [$salesman->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('accounts-manager.destroy', [$salesman->id]) }}"
                                                            class="text-danger delete">
                                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>

                                                        <!---Assign Manager modal--->
                                                        <div id="assign-manager-{{ $salesman->id }}" class="modal fade"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        @php
                                                                            $sales_manager = App\Models\User::where('id', $salesman->id)->first();
                                                                        @endphp
                                                                        <h5 class="modal-title">Assign Role for Sales
                                                                            Manager : {{ $sales_manager->name }}</h5>
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
                                                                                <div class="card">
                                                                                    <div class="row">
                                                                                        <table
                                                                                            class="table table-bordered table-striped p-1">
                                                                                            <thead>
                                                                                                <tr>

                                                                                                    <th
                                                                                                        style="padding:7px !important;">
                                                                                                        Name :
                                                                                                        {{ ucfirst($sales_manager->name) }}
                                                                                                    </th>
                                                                                                    <th
                                                                                                        style="padding:7px !important;">
                                                                                                        Country:
                                                                                                        {{ ucfirst($sales_manager->country) }}
                                                                                                    </th>
                                                                                                    <th
                                                                                                        style="padding:7px !important;">
                                                                                                        Designation:
                                                                                                        {{ ucfirst($sales_manager->designation) }}
                                                                                                    </th>

                                                                                                </tr>

                                                                                            </thead>
                                                                                        </table>
                                                                                    </div>
                                                                                    <div class="row mt-2 p-2 text-center">
                                                                                        <div class="col-12 text-white py-1"
                                                                                            style="background:black;">
                                                                                            Assign Roles :
                                                                                            <a class="p-1 editRfquser"
                                                                                                href="javascript:void(0);">
                                                                                                <i class="ph-note-pencil"
                                                                                                    aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="col-12 Rfquser"
                                                                                            style="display:none">
                                                                                            <div
                                                                                                class="row mb-3 p-2 border">


                                                                                                <div class="col-lg-4">

                                                                                                </div>
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="col-sm-12">
                                                                                                        <h6
                                                                                                            class="mb-0 text-black">
                                                                                                            Assign Roles
                                                                                                        </h6>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group text-secondary col-sm-12">
                                                                                                        {{-- <select name="roles" class="form-control select"
                                                                                                                    data-placeholder="Choose Role...">
                                                                                                                    <option></option>
                                                                                                                    @foreach ($roles as $role)
                                                                                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                                                                    @endforeach
                                                                                                                </select> --}}
                                                                                                        <select
                                                                                                            name="roles"
                                                                                                            class="form-control select"
                                                                                                            data-placeholder="Choose Role...">
                                                                                                            <option>
                                                                                                            </option>

                                                                                                            @foreach ($roles as $role)
                                                                                                                <option
                                                                                                                    value="{{ $role->id }}"
                                                                                                                    {{ $sales_manager->hasRole($role->name) ? 'selected' : '' }}>
                                                                                                                    {{ $role->name }}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-lg-4">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>




                                                                            <div class="row">
                                                                                <div class="col-sm-3"></div>
                                                                                <div
                                                                                    class="col-sm-9 text-secondary text-center">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Submit</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Assign Manager modal--->
                                                    </div>

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
    <!-- /content area -->
    <!-- /inner content -->

    </div>

    <script>
        $(document).ready(function() {
            $('input[name=toggle]').change(function() {
                var mode = $(this).prop('checked');
                var id = $(this).val();
                $.ajax({
                    url: "{{ route('sales.status') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        mode: mode,
                        id: id,
                    },
                    success: function(response) {
                        if (response.status) {
                            console.log(response.msg);
                        } else {
                            console.log('Please Try Again!');
                        }
                        window.location.reload();
                    }
                })
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.editRfquser').click(function() {
                $(".Rfquser").toggle(this.checked);
            });
        });
    </script>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.salesaccountDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        </script>
    @endpush
@endonce

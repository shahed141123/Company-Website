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
                        <span class="breadcrumb-item active">Partner Management</span>
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
                    <div class="" id="js-tab1">
                        <div id="table1" class=" cardT">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <a href="{{ route('partnerPermission.create') }}">
                                        <div class="d-flex align-items-center">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Add Solution Details">
                                                {{-- <i class="ph-plus icons_design"></i> </span> --}}
                                            {{-- <span class="ms-1" style="color: #247297;">Add</span> --}}
                                        </div>
                                    </a>
                                    <div class="text-center" style="margin-left: 30rem">
                                        <h5 class="ms-1" style="color: #247297;">All Partner Permission</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <table class="table table-bordered table-hover partnerpermissionDT text-center">
                                <thead>
                                    <tr>
                                        <th widt="3%">Id</th>
                                        <th widt="7%">Image</th>
                                        <th widt="20%">Name</th>
                                        <th widt="10%">Phone</th>
                                        <th widt="10%">Country</th>
                                        <th widt="10%">Post Code</th>
                                        <th widt="20%">Email</th>
                                        <th widt="10%">Status</th>
                                        <th widt="10%" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($partnerPermissions)
                                        @foreach ($partnerPermissions as $key => $partnerPermission)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td class="text-center"><img class="rounded-circle"
                                                        src="{{ asset('upload/Profile/user/' . $partnerPermission->photo) }}"
                                                        height="25" width="25" alt=""></td>
                                                <td>{{ $partnerPermission->name }}</td>
                                                <td>{{ $partnerPermission->phone }}</td>
                                                <td>{{ $partnerPermission->country }}</td>
                                                <td>{{ $partnerPermission->postal }}</td>
                                                <td>{{ $partnerPermission->email }}</td>
                                                <td class="d-flex justify-content-around align-items-center">
                                                    @if ($partnerPermission->status == 'active')
                                                        <span class="text-success">Approved</span>
                                                    @else
                                                        <span class="text-danger">Pending</span>
                                                    @endif
                                                    <div class="form-check form-switch">
                                                        <input name="toggle" type="checkbox"
                                                            class="form-check-input form-check-input-danger"
                                                            value="{{ $partnerPermission->id }}" id="sc_r_danger"
                                                            {{ $partnerPermission->status == 'inactive' ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('partnerPermission.edit', [$partnerPermission->id]) }}"
                                                        class="text-primary">
                                                        <i class="fa-solid fa-pen-to-square p-1 rounded-circle text-primary"></i>
                                                    </a>
                                                    <a href="{{ route('partnerPermission.destroy', [$partnerPermission->id]) }}"
                                                        class="text-danger delete mx-2">
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
                    url: "{{ route('partner.status') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        mode: mode,
                        id: id,
                    },
                    success: function(response) {

                        if (response.status) {
                            alert(response.msg);
                        } else {
                            alert('Please Try Again!');
                        }
                        window.location.reload();
                    }

                })

            })
        })
    </script>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.partnerpermissionDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [5,10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [8],
                }, ],
            });
        </script>
    @endpush
@endonce

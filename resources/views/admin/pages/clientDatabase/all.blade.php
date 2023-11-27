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
                        <a href="{{ route('crm.index') }}" class="breadcrumb-item">CRM</a>
                        <span class="breadcrumb-item active">Client Database</span>
                    </div>

                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content">
            <div class="row mx-3">
                <div class="col-12 mb-2" style="background-color: #247297; color: white;">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ route('client-database.create') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Add New
                            </a>
                        </div>
                        <div class="col-lg-9 col-sm-6 mt-1">
                            <h5 class="text-center mb-0">Client Database</h5>
                        </div>

                    </div>

                </div>
                <div class="col-12 p-0">
                    <div class="table-responive">
                        <table class="table clientDatabaseDT table-bordered table-hover text-center table-sm">
                            <thead>
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="7%">Image</th>
                                    <th width="20%">Name</th>
                                    <th width="10%">Phone</th>
                                    <th width="13%">Country</th>
                                    <th width="25%">Email</th>
                                    <th width="8%">Status</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($clientDatabases)
                                    @foreach ($clientDatabases as $key => $clientDatabase)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="text-center"><img class=""
                                                    src="{{ asset('upload/Profile/user/' . $clientDatabase->photo) }}"
                                                    height="40px" width="50px" alt=""></td>
                                            <td>{{ $clientDatabase->name }}</td>
                                            <td>{{ $clientDatabase->phone }}</td>
                                            <td>{{ $clientDatabase->country }}</td>
                                            <td>{{ $clientDatabase->email }}</td>
                                            <td>
                                                @if ($clientDatabase->status == 'active')
                                                    <span class="badge bg-success">Approved</span>
                                                @else
                                                    <span class="badge bg-danger">Pending</span>
                                                @endif

                                            </td>
                                            <td>

                                                <div class="text-center d-flex justify-content-center align-items-center">
                                                    <div class="form-switch">
                                                        <input name="toggle" type="checkbox"
                                                            class="form-check-input form-check-input-sm form-check-input-danger"
                                                            value="{{ $clientDatabase->id }}" id="sc_r_danger"
                                                            {{ $clientDatabase->status == 'inactive' ? 'checked' : '' }}>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('client-database.edit', [$clientDatabase->id]) }}"
                                                            class="text-info mx-2">
                                                            <i class="fa-solid fa-pencil p-1 rounded-circle text-info"></i>
                                                        </a>
                                                        <a href="{{ route('client-database.destroy', [$clientDatabase->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </div>
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
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.clientDatabaseDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 3, 5, 6, 7],
                    }, ],
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('input[name=toggle]').change(function() {
                    var mode = $(this).prop('checked');
                    var id = $(this).val();
                    $.ajax({
                        url: "{{ route('client.status') }}",
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
    @endpush
@endonce

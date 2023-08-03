@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Client Management</span>
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
        <div class="content mx-auto" style="width: 80%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="js-tab1">
                            <div id="table1" class=" cardT">
                                <div class="d-flex align-items-center py-2">
                                    {{-- Add Details Start --}}
                                    <div class="text-success nav-link cat-tab3"
                                        style="position: relative;
                                        z-index: 999;
                                        margin-bottom: -40px;">
                                        <div class="text-center">
                                            <h5 class="ms-1" style="color: #247297;">All Client Permission</h5>
                                        </div>
                                    </div>
                                    {{-- Add Details End --}}
                                </div>
                                <table class="table clientpermissionDT table-bordered table-hover text-center table-sm">
                                    <thead>
                                        <tr>
                                            <th width="5">id</th>
                                            <th width="5">image</th>
                                            <th width="20">name</th>
                                            <th width="10">phone</th>
                                            <th width="15">country</th>
                                            <th width="25">email</th>
                                            <th width="10">status</th>
                                            <th width="10" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($clientPermissions)
                                            @foreach ($clientPermissions as $key => $clientPermission)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td class="text-center"><img class="rounded-circle"
                                                        src="{{ asset('upload/Profile/user/' . $clientPermission->photo) }}"
                                                        height="25" width="25" alt=""></td>
                                                    <td>{{ $clientPermission->name }}</td>
                                                    <td>{{ $clientPermission->phone }}</td>
                                                    <td>{{ $clientPermission->country }}</td>
                                                    <td>{{ $clientPermission->email }}</td>
                                                    <td>
                                                        @if ($clientPermission->status == 'active')
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
                                                                    value="{{ $clientPermission->id }}" id="sc_r_danger"
                                                                    {{ $clientPermission->status == 'inactive' ? 'checked' : '' }}>
                                                            </div>
                                                            <div>
                                                                <a href="{{ route('clientPermission.destroy', [$clientPermission->id]) }}"
                                                                    class="text-danger delete mx-2">
                                                                    <i
                                                                        class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
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
        </div>
    </div>
    <!-- /content area -->

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
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.clientpermissionDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });
        </script>
    @endpush
@endonce

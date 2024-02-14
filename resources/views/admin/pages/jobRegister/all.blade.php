@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Job Reg. Management</span>
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
                <div class="col-lg-8 offset-lg-2 mx-auto">
                    <h4 class="text-center">Job Reg. Users</h4>
                    <div class="card rounded-0">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="datatable jobregister table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%">Sl No:</th>
                                            <th width="35%">name</th>
                                            <th width="25%">email</th>
                                            <th width="20%">phone_number</th>
                                            <th class="text-center" width="15%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($jobRegistrations)
                                            @foreach ($jobRegistrations as $key => $jobRegistration)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $jobRegistration->name }}</td>
                                                    <td>{{ $jobRegistration->email }}</td>
                                                    <td>{{ $jobRegistration->phone_number }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('job.regiserUser.show', [$jobRegistration->id]) }}"
                                                            class="text-success mx-2">
                                                            <i class="icon-eye"></i>
                                                        </a>
                                                        <a href="{{ route('job.regiserUser.destroy', [$jobRegistration->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>
                                                        <a href="{{ route('resume.download', [$jobRegistration->id]) }}"
                                                            class="text-info mx-2">
                                                            <i class="icon-download"></i>
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
            $('.jobregister').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4],
                }, ],
            });
        </script>
    @endpush
@endonce

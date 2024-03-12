@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="" class="breadcrumb-item">Employee Project</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                {{-- Inner Page Tab --}}
                <div>
                    <!-- Leave Dashboard link -->
                    <a href="{{ route('employee-project.create') }}"class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>Add Employee Project</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="text-center">
                <h4 class="m-0" style="color: #247297;">Employee Project List</h4>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mx-auto">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <!-- Title Area End -->
                                <table
                                    class="table employeeCategoryDT table-bordered table-hover table-striped datatable-highlight text-center ">
                                    <thead>
                                        <tr>
                                            <th width="5%">Id</th>
                                            <th width="20%">Name</th>
                                            <th width="20%">Project Status</th>
                                            <th width="15%">Supervisor</th>
                                            <th width="15%">Assigned Employee</th>
                                            <th width="15%" class="text-center">Total Working Day </th>
                                            <th width="10%" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>NGen It</td>
                                            <td>On Going</td>
                                            <td>Khandakar Sahed</td>
                                            <td>Saju</td>
                                            <td>5 Day</td>
                                            <td>
                                                <a href="" class="text-primary">
                                                    <i class="fa-solid fa-pen-to-square dash-icons me-3"></i>
                                                </a>
                                                <a href=""
                                                    class="main_color delete">
                                                    <i class="fa-solid fa-trash dash-icons"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Dada Vaai</td>
                                            <td>Complete</td>
                                            <td>Khandakar Sahed</td>
                                            <td>Akash Mirza</td>
                                            <td>2 Day</td>
                                            <td>
                                                <a href="" class="text-primary">
                                                    <i class="fa-solid fa-pen-to-square dash-icons me-3"></i>
                                                </a>
                                                <a href=""
                                                    class="main_color delete">
                                                    <i class="fa-solid fa-trash dash-icons"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area End-->
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.employeeCategoryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
        </script>
    @endpush
@endonce

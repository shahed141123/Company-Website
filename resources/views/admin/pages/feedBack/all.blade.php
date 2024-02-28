@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Feed Back Management</span>
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
                    <a href="{{ route('knowledge.create') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>Add Knowledge</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content">
            <div class="text-center">
                <h4 class="m-0" style="color: #247297;">All Feed Back</h4>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table feedbackDT table-striped table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="8%">Id</th>
                                            <th width="22%">Product Details</th>
                                            <th width="20%">Articles</th>
                                            <th width="10%">Purchasing</th>
                                            <th width="10%">Pricing</th>
                                            <th width="10%">Solutions</th>
                                            <th width="10%">Search</th>
                                            <th width="10%">Filtering</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>this is details</td>
                                            <td>text568</td>
                                            <td>25-2024</td>
                                            <td>56$</td>
                                            <td>Yes</td>
                                            <td>no</td>
                                            <td>
                                                <a href="" class="text-primary">
                                                    <i class="fa-solid fa-pen-to-square dash-icons"></i>
                                                </a>
                                                <a href="" class="text-danger delete">
                                                    <i class="fa-solid fa-trash dash-icons text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>this is details</td>
                                            <td>text568</td>
                                            <td>25-2024</td>
                                            <td>56$</td>
                                            <td>Yes</td>
                                            <td>no</td>
                                            <td>
                                                <a href="" class="text-primary">
                                                    <i class="fa-solid fa-pen-to-square dash-icons"></i>
                                                </a>
                                                <a href="" class="text-danger delete">
                                                    <i class="fa-solid fa-trash dash-icons text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>this is details</td>
                                            <td>text568</td>
                                            <td>25-2024</td>
                                            <td>56$</td>
                                            <td>Yes</td>
                                            <td>no</td>
                                            <td>
                                                <a href="" class="text-primary">
                                                    <i class="fa-solid fa-pen-to-square dash-icons"></i>
                                                </a>
                                                <a href="" class="text-danger delete">
                                                    <i class="fa-solid fa-trash dash-icons text-danger"></i>
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
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.feedbackDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });
        </script>
    @endpush
@endonce

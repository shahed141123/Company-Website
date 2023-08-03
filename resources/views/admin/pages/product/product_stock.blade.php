@extends('admin.master')
@section('content')
    <style>
        .submit_btn {
            padding: 10px;
        }

        .submit_btn:hover {
            padding: 10px;
        }

        .pagination-flat .disabled {
            width: 60px !important;
            padding-left: 10px;
            padding-right: 10px;

        }

        .pagination {
            margin-right: 35px !important;
        }

        .table_img {
            width: 25px !important;
            height: 25px !important;
            border-radius: 50% !important;
        }

        #DataTables_Table_0_previous {
            margin-right: 0px !important;
        }

        #DataTables_Table_0_next {
            margin-right: 0px !important;
        }
    </style>

    <div class="content-wrapper">

        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Supply Chain</a>
                            <a href="{{ route('product-sourcing.index') }}" class="breadcrumb-item">Product Sourcing</a>
                            <span class="breadcrumb-item active">All Products Stock</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}

        </section>
        <!-- /page header -->
        <!-- product-sourcing Content Start -->
        <section>
            <div class="container-fluid mt-2">

                <div class="row rounded mx-2 mt-1">

                    <div>
                        <table class="table stockDT table-bordered table-hover text-center">
                        {{-- <table class="table stockDTtext-center table-bordered"> --}}
                            <thead>
                                <tr>
                                    <th width="10%">Sl</th>
                                    <th width="7%">Image </th>
                                    <th width="60%">Product Name </th>
                                    <th width="20%">Stock </th>
                                    <th width="10%">QTY </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $key => $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td> <img src="{{ isset($item->thambnail) ? asset($item->thambnail) : url('upload/no_image.jpg') }}" style="width: 70px; height:40px;">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ ucfirst($item->stock) }}</td>
                                        <td>{{ $item->qty }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection


@once
    @push('scripts')
        <script>
            $('.stockDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0, 1],
                }, ],
            });
        </script>
    @endpush
@endonce

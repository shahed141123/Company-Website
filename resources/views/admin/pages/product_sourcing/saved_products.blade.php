@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <div class="content-inner">
            <!-- Page header -->
            <div class="page-header page-header-light shadow">

                <div class="page-header-content d-lg-flex border-top">
                    <div class="d-flex">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Supply Chain</a>
                            <span class="breadcrumb-item active">Product Sourcing</span>
                        </div>

                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>

                    <div class="collapse show d-lg-block ms-lg-auto" id="breadcrumb_elements">
                        <div class="d-lg-flex mb-2 mb-lg-0">
                            <a href="{{ route('product-sourcing.index') }}"
                                class="d-flex align-items-center text-body p-2 border me-1">
                                <i class="ph-list-plus me-2"></i>
                                Sourcing
                            </a>
                            <a href="{{ route('sas.index') }}" class="d-flex align-items-center text-body p-2 border me-1">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                SAS
                            </a>
                            <a href="{{ route('purchase.index') }}"
                                class="d-flex align-items-center text-body p-2 border me-1">
                                <i class="ph-shopping-cart me-2"></i>
                                Purchase
                            </a>
                            <a href="{{ route('delivery.index') }}"
                                class="d-flex align-items-center text-body p-2 border me-1">
                                <i class="ph-truck me-2"></i>
                                Delivery
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->
            <!-- Content area -->
            <div class="content pt-1">
                <div class="row">
                    @include('admin.pages.product_sourcing.partials.header')
                </div>
                <div class="row mx-lg-3">
                    <div class="col-12 mb-2" style="background-color: #247297; color: white;">
                        <div class="row d-flex align-items-center">
                            <div>
                                <h5 class="text-center mb-0">Draft Products (Not Completed)</h5>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 p-0">
                        <div class="table-responive">
                            <table class="table sourcingDT1 table-bordered table-hover text-center">
                                @if ($saved_products)
                                    <thead>
                                        <tr>
                                            <th style="width: 7%  !important;">SL</th>
                                            <th style="width: 10% !important;">Image</th>
                                            <th style="width: 47% !important;">Product Name</th>
                                            <th style="width: 13% !important;">Added By</th>
                                            <th style="width: 13% !important;">Sourcing Status</th>
                                            <th style="width: 10% !important;" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($saved_products as $key => $item)
                                            <tr>
                                                <td class="text-center">{{ $key + 1 }}</td>
                                                <td>
                                                    <img class="rounded-circle img-fluid table_img"
                                                        src="{{ !file_exists($item->thumbnail) ? url('upload/no_image.jpg') : asset($item->thumbnail) }}"
                                                        alt="" style="width: 70px; height: 35px;">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->added_by }}</td>
                                                <td>
                                                    @if ($item->action_status == 'save')
                                                        <span class="text-success">Not Completed</span>
                                                    @else
                                                        <span class="text-danger">Listed</span>
                                                    @endif
                                                </td>
                                                <td>


                                                    <a href="{{ route('product-sourcing.edit', $item->id) }}"
                                                        class="text-primary">
                                                        <i
                                                            class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                    </a>
                                                    <a href="{{ route('product-sourcing.destroy', [$item->id]) }}"
                                                        class="text-danger delete">
                                                        <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /content area -->

        </div>
        <!-- /inner content -->
    @endsection

    @once
        @push('scripts')
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.sourcingDT1').DataTable({
                        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                        "iDisplayLength": 10,
                        "lengthMenu": [10, 25, 30, 50],
                        columnDefs: [{
                            orderable: false,
                            targets: [0, 1, 2, 3, 5],
                        }, ],
                    });

                });
            </script>
        @endpush
    @endonce

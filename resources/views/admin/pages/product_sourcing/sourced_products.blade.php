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
                        <a href="#breadcrumb_elements" class="btn btn-light align-self-center d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                    <div class="collapse show d-lg-block ms-lg-auto d-sm-none d-lg-block" id="breadcrumb_elements">
                        <div class="d-lg-flex mb-2 mb-lg-0">
                            <a href="{{ route('product-sourcing.index') }}" class="btn navigation_btn mt-1">
                                <i class="ph-list-plus me-2 me-sm-0"></i> Sourcing
                            </a>
                            <a href="{{ route('sas.index') }}" class="btn navigation_btn mt-1">
                                <i class="ph-currency-circle-dollar me-2 me-sm-0"></i> SAS
                            </a>
                            <a href="{{ route('purchase.index') }}" class="btn navigation_btn mt-1">
                                <i class="ph-shopping-cart me-2 me-sm-0"></i> Purchase
                            </a>
                            <a href="{{ route('delivery.index') }}" class="btn navigation_btn mt-1">
                                <i class="ph-truck me-2"></i> Delivery
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page header -->
            <!-- Content area -->
            <div class="content pt-1 mx-lg-3 mx-1">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card mt-3 rounded-0">
                            <div class="card-header p-0 d-flex justify-content-start align-items-center rounded-0 ">
                                <div>
                                    @include('admin.pages.product_sourcing.partials.header')
                                </div>
                                <h5 class="text-center mb-0 ps-3">Sourced Products (Pending for Approval)</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="productDt table table-bordered table-striped text-center">
                                        <thead>
                                            <tr class="bg-secondary border-secondary text-white">
                                                <th style="width: 3% !important;">SL</th>
                                                <th style="width: 7% !important;">Image</th>
                                                <th style="width: 45% !important;">Name</th>
                                                <th style="width: 13% !important;">Added By</th>
                                                <th style="width: 13% !important;">Price</th>
                                                <th style="width: 10% !important;">Status</th>
                                                <th style="width: 9% !important;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span>
                                                            <img src="{{ !file_exists($product->thumbnail) ? url('upload/no_image.jpg') : asset($product->thumbnail) }}" width="40px" height="40px" style="border-radius: 50%;">
                                                        </span>
                                                    </td>
                                                    <td class="text-start">{{ $product->name }}</td>
                                                    <td>{{ $product->added_by }}</td>
                                                    <td>
                                                        @if ($product->price_status === 'rfq')
                                                            <span class="text-black"><span>{{ ucfirst($product->price_status) }}</span></span>
                                                        @else
                                                            {{ ucfirst($product->price_status) }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($product->action_status === 'listed')
                                                            <span class="text-success">{{ ucfirst($product->action_status) }}</span>
                                                        @elseif ($product->action_status === 'rejected')
                                                            <span class="text-danger">{{ ucfirst($product->action_status) }}</span>
                                                        @else
                                                            {{ ucfirst($product->action_status) }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('product-sourcing.edit', $product->id) }}" class="text-primary">
                                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('product-sourcing.destroy', [$product->id]) }}" class="text-danger delete">
                                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content area -->
        </div>
        <!-- inner content -->
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.productDt').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [1, 6],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce

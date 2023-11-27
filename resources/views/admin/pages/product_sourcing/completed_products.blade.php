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
                                <h5 class="text-center mb-0">Real Products (Approved )</h5>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 p-0">
                        <div class="table-responive">
                            {{-- <table id="dataTable" class="productDt table table-bordered table-striped text-center"> --}}
                            <table class="productDt table table-bordered table-striped text-center">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th style="width: 3%  !important;">SL</th>
                                        <th style="width: 7%  !important;">Image</th>
                                        <th style="width: 45% !important;">Name</th>
                                        <th style="width: 13% !important;">Added By</th>
                                        <th style="width: 11% !important;">Price</th>
                                        <th style="width: 11%  !important;">Stock</th>
                                        <th style="width: 10% !important;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($real_products as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> <img
                                                    src="{{ !file_exists($item->thumbnail) ? url('upload/no_image.jpg') : asset($item->thumbnail) }}"
                                                    width="70px" height="40px">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->added_by }}</td>
                                            <td>
                                                @if ($item->price_status == 'rfq')
                                                    <span
                                                        class="text-black"><strong>{{ ucfirst($item->price_status) }}</strong></span>
                                                @else
                                                    {{ ucfirst($item->price) }}
                                                @endif
                                            </td>
                                            <td>{{ ucfirst($item->stock) }}</td>

                                            <td>
                                                @if (!empty($item->action_status) && $item->action_status == 'product_approved')
                                                    <a href="{{ route('sas.edit', $item->slug) }}" title="SAS Edit"
                                                        class="text-primary" title="SAS Edit">
                                                        <i class="fa-solid fa-pencil me-1 p-1 rounded-circle text-primary"></i>
                                                    </a>
                                                @endif
                                                <a href="{{ route('product-sourcing.edit', $item->id) }}"
                                                    class="text-primary" title="Sourcing Edit">
                                                    <i
                                                        class="fa-solid fa-pen-to-square me-1 p-1 rounded-circle text-primary"></i>
                                                </a>
                                                <a href="{{ route('product.destroy', [$item->id]) }}"
                                                    class="text-danger delete">
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
            <!-- /content area -->

        </div>
        <!-- /inner content -->
    @endsection

    @once
        @push('scripts')
            {{-- <script type="text/javascript">
                $(function product() {
                    var table = $('#dataTable').DataTable({
                        processing: false,
                        // searching: true,
                        // Paginate: true,
                        // paging: true,
                        // ordering: true,
                        // info: true,
                        serverSide: true,
                        ajax: "{{ route('product.approved') }}",
                        columns: [{
                                orderable: false,
                                orderable: false,
                                data: 'DT_RowIndex',
                                name: 'DT_RowIndex'
                            },
                            {
                                orderable: false,
                                searchable: false,
                                data: 'thumbnail',
                                name: 'thumbnail',
                                render: function(data, type, full, meta) {
                                    const imageSource = data ? `{{ asset('${data}') }}` :
                                        `{{ asset('upload/no_image.jpg') }}`;
                                    return `<span><img src="${imageSource}" width="70px" height="40px"></span>`;
                                }
                            },
                            {
                                data: 'name',
                                name: 'name',
                            },
                            {
                                data: 'added_by',
                                name: 'added_by',
                            },
                            {
                                data: 'price_status',
                                name: 'price_status',
                                render: function(data, type, full, meta) {
                                    if (data === 'rfq') {
                                        return '<span class="text-black"><strong>' + (data.charAt(0)
                                            .toUpperCase() + data.slice(1)) + '</strong></span>';
                                    } else {
                                        return '<span class="text-black"><strong> $ ' + (full.price) + '</strong></span>'; // Assuming 'price' is a property of the 'full' object
                                    }
                                },
                            },
                            {
                                data: 'stock',
                                name: 'stock',
                                render: function(data, type, full, meta) {
                                    return (data.charAt(0).toUpperCase() + data.slice(1));
                                },
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ],

                    });

                    $('#select-all-checkbox').on('click', function() {
                        var rows = table.rows({
                            'search': 'applied'
                        }).nodes();
                        $('input[type="checkbox"]', rows).prop('checked', this.checked);
                    });
                    $('#dataTable tbody').on('change', 'input[type="checkbox"]', function() {
                        if (!this.checked) {
                            if (el && el.checked && ('indeterminate' in el)) {
                                el.indeterminate = true;
                            }
                        }
                    });
                });
            </script> --}}
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.productDt').DataTable({
                        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                        "iDisplayLength": 10,
                        "lengthMenu": [10, 26, 30, 50],
                        columnDefs: [{
                            orderable: false,
                            targets: [5],
                        }, ],
                    });
                });
            </script>
        @endpush
    @endonce

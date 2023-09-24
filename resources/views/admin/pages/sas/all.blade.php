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
                            <span class="breadcrumb-item active">SAS of Sourcing Products</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
                <!-- Basic tabs -->
                <div>
                    <a href="{{ route('product-sourcing.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>Sourcing</span>
                        </div>
                    </a>
                    <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                            <span>Purchase</span>
                        </div>
                    </a>
                    <a href="{{ route('delivery.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                            <span>delivery</span>
                        </div>
                    </a>
                </div>
        </section>
        <!-- /page header -->
        <!-- product-sourcing Content Start -->
        <section>
            <div class="container-fluid mt-2">
                <div class="row mx-3 mb-3">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center"
                            style="position: relative;
                        z-index: 999;">
                            <ul class="nav nav-tabs">
                                <li class="nav-item ">
                                    <a href="#pending" class=" nav-link active cat-tab1 p-1" data-bs-toggle="tab">
                                        <p class="m-0 p-1">
                                            Pending for SAS<span class="ms-2">|</span></p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#approved" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                        <p class="m-0 p-1">
                                            Seek Approval <span class="ms-2">|</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#all" class=" nav-link cat-tab3 p-1" data-bs-toggle="tab">
                                        <p class="m-0 p-1">
                                            Approved <span class="ms-2">|</span></p>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mx-3 mt-1">
                    <div class="col-lg-12">
                        <div class="tab-content" style="margin-top: -3.5rem;">
                            <div class="tab-pane fade show active" id="pending">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="text-center"> All Pending Products for SAS</h5>
                                    </div>
                                </div>
                                {{-- Pending Table --}}
                                <table class="table pending table-bordered table-hover text-center">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="5%">Sl</th>
                                            <th width="5%">Image </th>
                                            <th width="60%">Product Name </th>
                                            <th width="20%">Price Status</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($pending_products)
                                            @foreach ($pending_products as $key => $product)
                                                <tr>
                                                    <td class=" text-center"> {{ $key + 1 }} </td>
                                                    <td>
                                                        @if ($product)
                                                            <img src="{{ !file_exists($product->thumbnail) ? url('upload/no_image.jpg') : asset($product->thumbnail) }}"
                                                                style="width: 70px; height:40px;">
                                                        @endif
                                                    </td>
                                                    <td><a href="javascript:void(0);" data-tip="Details"
                                                            data-bs-toggle="modal" data-bs-target="#productDetails{{$product->id}}"
                                                            title="Product Quick View">{{ $product->name }}</a></td>
                                                    <td class="text-center">{{ ucfirst($product->price_status) }}</td>
                                                    <td class="text-center">

                                                        <a href="{{ route('sourcing.sas', [$product->slug]) }}"
                                                            class="text-info mx-2" title="SAS Create">
                                                            <i class="icon-file-plus2"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" data-tip="Details"
                                                            data-bs-toggle="modal" data-bs-target="#productDetails{{$product->id}}"
                                                            class="text-info mx-2" title="Product Quick View">
                                                            <i class="icon-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show" id="approved">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="text-center"> All Products Pending for Approve</h5>
                                    </div>
                                </div>
                                {{-- Approved Table --}}
                                <table class="table approved table-bordered table-hover text-center">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="5%">Sl</th>
                                            <th width="5%">Image </th>
                                            <th width="50%">Product Name </th>
                                            <th width="15%">Sale Price</th>
                                            <th width="15%">Price Status</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($pending_approvals)
                                            @foreach ($pending_approvals as $key => $product)
                                                @php
                                                    $sas = App\Models\Admin\Sas::where('product_id', $product->id)->first();
                                                @endphp
                                                <tr>
                                                    <td class=" text-center"> {{ $key + 1 }} </td>
                                                    <td>
                                                        @if ($product)
                                                            <img src="{{ !file_exists($product->thumbnail) ? url('upload/no_image.jpg') : asset($product->thumbnail) }}"
                                                                style="width: 70px; height:40px;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td class=" text-center">{{ $sas->sales_price }}</td>
                                                    <td class="text-center">{{ ucfirst($product->price_status) }}</td>
                                                    <td class=" text-center">

                                                        <a href="{{ route('sas.edit', [$product->slug]) }}"
                                                            class="text-info mx-2">
                                                            <i class="icon-pencil"></i>
                                                        </a>

                                                        <a href="{{ route('sas.edit', [$product->slug]) }}"
                                                            class="text-info mx-2">
                                                            <i class="icon-eye"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show" id="all">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="text-center"> All Approved Products</h5>
                                    </div>
                                </div>
                                <table class="table all table-bordered table-hover text-center ">
                                    {{-- All SAS Table --}}
                                    <thead>
                                        <tr class="text-center">
                                            <th width="5%">Sl</th>
                                            <th width="5%">Image </th>
                                            <th width="60%">Product Name </th>
                                            <th width="20%">Sales Price</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($products)
                                            @foreach ($products as $key => $item)
                                                <tr>
                                                    <td class=" text-center"> {{ $key + 1 }} </td>
                                                    <td>
                                                        @if ($item)
                                                            <img src="{{ !file_exists($item->thumbnail) ? url('upload/no_image.jpg') : asset($item->thumbnail) }}"
                                                                style="width: 70px; height:40px;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td class="text-center">{{ $item->price }}</td>
                                                    <td class="text-center">

                                                        <a href="{{ route('sas.edit', [$item->slug]) }}"
                                                            class="text-info mx-2">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <a href="{{ route('sas.edit', [$item->slug]) }}"
                                                            class="text-info mx-2">
                                                            <i class="icon-eye"></i>
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
        </section>
    </div>

    @foreach ($pending_products as $product)
        <div class="modal fade" id="productDetails{{$product->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2" style="background: #ae0a46;">
                        <h5 class="modal-title text-white" id="staticBackdropLabel"> Product Details
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="container py-2">
                            <div class="row">
                                <!-- images -->
                                <div class="col-lg-4 col-sm-12 single_product_images">
                                    <!-- gallery pic -->
                                    <div class="mx-auto d-block">
                                        <img id="expand" class="geeks img-fluid rounded mx-auto d-block"
                                            src="{{ asset($product->thumbnail) }}">
                                    </div>

                                    @php
                                        $imgs = App\Models\Admin\MultiImage::where('product_id', $product->id)->get();

                                    @endphp

                                    <div class="img_gallery_wrapper row pt-1">
                                        @foreach ($imgs as $data)
                                            <div class="col-3">
                                                <img class="img-fluid" src="{{ asset($data->photo) }}" onclick="gfg(this);">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="col-lg-8 col-sm-12 pl-4">
                                    <div class="row">
                                        <h3 class="mb-0">{{ $product->name }}</h3>
                                        <p class="text-dark product_code py-1">SKU #{{ $product->sku_code }} | MF
                                            #{{ $product->mf_code }} | NG #{{ $product->product_code }}</p>
                                        <p class="text-dark product_code py-1">Brand :
                                            {{ App\Models\Admin\Brand::where('id', $product->brand_id)->value('title') }} |
                                            Category :
                                            {{ App\Models\Admin\Category::where('id', $product->cat_id)->value('title') }} |
                                            Sub
                                            Category :
                                            {{ App\Models\Admin\SubCategory::where('id', $product->sub_cat_id)->value('title') }}
                                        </p>
                                        <div class="mb-1">
                                            <label for="" style="font-weight: 500">Short Description :</label>
                                            <p class="pt-1">{!! $product->short_desc !!}</p>
                                        </div>

                                        <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2"
                                            style="background: #f9f6f0;">

                                            <div>
                                                <p tabindex="0" class="prod-stock"
                                                    id="product-avalialability-by-warehouse">
                                                    <span aria-label="Stock Availability" class="js-prod-available">Unit Price
                                                    </span> <br>
                                                    @if (!empty($product->discount))
                                                        <span style="text-decoration: line-through; color:#ae0a46;">$
                                                            {{ $product->price }}</span>
                                                        <span style="color: black">$ {{ $product->discount }}</span>
                                                        <span style="font-size: 14px;">USD</span>
                                                    @else
                                                        <span style="font-size: 22px;">$ {{ $product->price }}</span>
                                                        <span style="font-size: 14px;">USD</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div>
                                                <p tabindex="0" class="prod-stock"
                                                    id="product-avalialability-by-warehouse">
                                                    <span aria-label="Stock Availability" class="js-prod-available"> <i
                                                            class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                                    @if ($product->qty > 0)
                                                        <span class="text-success" style="font-size:17px">{{ $product->qty }}
                                                            in stock</span>
                                                    @else
                                                        <span class="text-danger pb-2"
                                                            style="font-size:17px">{{ ucfirst($product->stock) }}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div>
                                                <p tabindex="0" class="prod-stock"
                                                    id="product-avalialability-by-warehouse">
                                                    <span aria-label="Stock Availability" class="js-prod-available"> Product
                                                        Type :</span> <br>
                                                    <span class="text-warning"
                                                        style="font-size:17px">{{ ucfirst($product->product_type) }}</span>
                                                </p>
                                            </div>
                                            <div>
                                                <p tabindex="0" class="prod-stock"
                                                    id="product-avalialability-by-warehouse">
                                                    <span aria-label="Stock Availability" class="js-prod-available"> Price
                                                        Notification :</span> <br>
                                                    <span class="text-info"
                                                        style="font-size:17px">{{ $product->notification_days }} Days</span>
                                                </p>
                                            </div>


                                        </div>
                                    </div>



                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
@once
    @push('scripts')
        <script type="text/javascript"></script>
        <script>
            // approved
            $(document).ready(function() {
                // Pending
                $('.pending').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [4],
                    }, ],
                });
                // Approved
                $('.approved').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [4],
                    }],
                });
                $('.all').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [4],
                    }, ],
                });
            });
        </script>
        <script>
            // All Sas
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".approved_title").addClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });
                $(".cat-tab3").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").removeClass('d-none');
                });
            });
        </script>
    @endpush
@endonce

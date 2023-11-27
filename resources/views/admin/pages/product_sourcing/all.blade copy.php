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
                            <span class="breadcrumb-item active">Product Sourcing</span>
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
                    <a href="{{ route('sas.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>SAS</span>
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
                            <span>Delivery</span>
                        </div>
                    </a>
                </div>
        </section>
        <!-- /page header -->
        <!-- product-sourcing Content Start -->
        <section>
            <div class="container-fluid mt-2">
                <div class="row mx-2 mb-3 rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <ul class="nav nav-tabs">
                            <li class="nav-item ">
                                <a href="#saved" class=" nav-link active cat-tab1 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1">
                                        Saved <span class="ms-2">|</span></p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#completed" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                    <p class="m-0 p-1">
                                        Completed <span class="ms-2">|</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#approved" class=" nav-link cat-tab3 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1">
                                        Approved Products <span class="ms-2">|</span></p>
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center">

                                <a href="{{ route('product-sourcing.create') }}"
                                    class="ms-2 btn btn-primary custom_btn btn-labeled btn-labeled-start">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="ph-plus icons_design"></i>
                                    </span>
                                    Add
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row rounded mx-2 mt-1">

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="saved">
                            {{-- Save Table --}}
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
                    <div class="tab-content">
                        <div class="tab-pane fade show" id="completed">
                            {{-- completed Table --}}
                            <table class="sourcingDT2 table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th style="width: 3%  !important;">SL</th>
                                        <th style="width: 5%  !important;">Image</th>
                                        <th style="width: 55% !important;">Product Name</th>
                                        <th style="width: 10% !important;">Added By</th>
                                        <th style="width: 10% !important;">Price</th>
                                        <th style="width: 8%  !important;">Status</th>
                                        <th style="width: 9% !important;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($products)
                                        @foreach ($products as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> <img
                                                        src="{{ !file_exists($item->thumbnail) ? url('upload/no_image.jpg') : asset($item->thumbnail) }}"
                                                        style="width: 70px; height: 40px;"> </td>
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
                                                <td class="text-center">
                                                    @if ($item->action_status == 'listed')
                                                        <span
                                                            class="text-success">{{ ucfirst($item->action_status) }}</span>
                                                    @elseif ($item->action_status == 'rejected')
                                                        <span
                                                            class="text-danger">{{ ucfirst($item->action_status) }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->action_status == 'listed')
                                                        <a href="{{ route('sourcing.sas', $item->slug) }}"
                                                            class="text-primary" title="SAS Create">
                                                            <i
                                                                class="ph-plus-circle icons_design me-1 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                    @elseif($item->action_status == 'seek_approval')
                                                        <a href="{{ route('sas.edit', $item->slug) }}"
                                                            class="text-primary" title="SAS Edit">
                                                            <i class="ph-pencil me-1 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                    @endif

                                                    <a href="{{ route('product-sourcing.edit', $item->id) }}"
                                                        class="text-primary" title="Sourcing Edit">
                                                        <i
                                                            class="fa-solid fa-pen-to-square me-1 p-1 rounded-circle text-primary"></i>
                                                    </a>
                                                    <a href="{{ route('product-sourcing.destroy', [$item->id]) }}"
                                                        class="text-danger delete">
                                                        <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
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

                            <table class="productDt table table-bordered table-hover text-center ">
                                {{-- approved Table --}}
                                <thead>
                                    <tr>
                                        <th style="width: 3%  !important;">SL</th>
                                        <th style="width: 5%  !important;">Image</th>
                                        <th style="width: 55% !important;">Product Name</th>
                                        <th style="width: 10% !important;">Added By</th>
                                        <th style="width: 10% !important;">Price</th>
                                        <th style="width: 8%  !important;">Stock</th>
                                        <th style="width: 9% !important;">Actions</th>
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
                                                <a href="{{ route('sas.edit', $item->slug) }}" title="SAS Edit" class="text-primary"
                                                    title="SAS Edit">
                                                    <i class="ph-pencil me-1 p-1 rounded-circle text-primary"></i>
                                                </a>
                                                @endif
                                                <a href="{{ route('product-sourcing.edit', $item->id) }}"
                                                    class="text-primary" title="Sourcing Edit">
                                                    <i class="fa-solid fa-pen-to-square me-1 p-1 rounded-circle text-primary"></i>
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
        </section>



    </div>
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
                $('.sourcingDT2').DataTable({
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

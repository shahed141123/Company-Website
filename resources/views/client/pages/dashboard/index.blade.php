@extends('client.master')
@section('content')
    <!-- Inner content -->
    <div class="content-inner">
        <!-- Content area -->
        <div class="content">
            <!-- Inner container -->
            <div class="d-lg-flex align-items-lg-start">
                <!-- Left sidebar component -->
                <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none me-1">
                    <!-- Sidebar content -->
                    <div class="sidebar-content">
                        <!-- Navigation -->
                        <div class="card rounded-0 border-0 shadow-none">
                            <div class="sidebar-section-body text-center">
                                <div class="card-img-actions d-inline-block mb-3">
                                    <img class="img-fluid rounded-circle"
                                        src="https://www.sragenkab.go.id/assets/images/demo/user-8.jpg" width="150"
                                        height="150" alt="">
                                    <div class="card-img-actions-overlay card-img rounded-circle">
                                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                            <i class="ph-pencil"></i>
                                        </a>
                                    </div>
                                </div>

                                <h6 class="mb-0">Victoria Davidsons</h6>
                                <span class="text-muted">Head of UX</span>
                            </div>

                            <ul class="nav nav-sidebar">
                                <li class="nav-item">
                                    <a href="#profile" class="nav-link active d-flex align-items-center"
                                        data-bs-toggle="tab">
                                        <span><i class="ph-user me-2" style="color: #ae0a46;"></i></span>
                                        <span>My profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#deal" href="{{ route('client.deals') }}"
                                        class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph-calendar me-2" style="color: #ae0a46;"></i></span>
                                        <span> Deal</span>
                                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#rfq" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph-envelope me-2" style="color: #ae0a46;"></i></span>
                                        <span>
                                            RFQ
                                        </span>
                                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#orders" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph-shopping-cart me-2" style="color: #ae0a46;"></i></span>
                                        <span>Orders</span>
                                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#offerPrice" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph ph-currency-circle-dollar me-2"
                                                style="color: #ae0a46;"></i></span>
                                        <span> Offer Price</span>
                                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#productDraft" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph ph-tag-chevron me-2" style="color: #ae0a46;"></i></span>
                                        <span>
                                            Product Draft
                                        </span>
                                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                                    </a>
                                </li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item">
                                    <a href="{{ route('client.logout') }}" class="nav-link d-flex align-items-center">
                                        <span><i class="ph-sign-out " style="color: #ae0a46;"></i></span>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /navigation -->
                    </div>
                    <!-- /sidebar content -->
                </div>
                <!-- /left sidebar component -->


                <!-- Right content -->
                <div class="tab-content flex-fill ms-2">
                    <div class="tab-pane fade active show" id="profile">
                        <!-- Profile info -->
                        <div class="card border-0 rounded-0 shadow-none mb-1">
                            <div class="card-header border-0">
                                <h5 class="mb-0 text-start" style="color: #ae0a46; border-bottom: 1px solid #ae0a46">
                                    <span class="text-white p-1" style="background-color: #ae0a46;">Profile
                                        information</span>
                                </h5>
                            </div>

                            <div class="card-body">
                                <form action="#" class="p-3 pt-1">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Username</span>
                                                    <input type="text" value="Victoria"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Full name</span>
                                                    <input type="text" value="Smith"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Email</span>
                                                    <input type="text" readonly="readonly" value="victoria@smith.com"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Address line</span>
                                                    <input type="text" value="Ring street 12"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                        <div class="col-lg-4">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">State/Province</span>
                                                    <input type="text" value="Bayern"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                        <div class="col-lg-4">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">ZIP code</span>
                                                    <input type="text" value="1031"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Phone #</span>
                                                    <input type="text" value="+99-99-9999-9999"
                                                        class="form-control form-control-sm">
                                                    <div class="form-text text-muted">+99-99-9999-9999
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="row mb-3 gx-0">
                                                <div class="col-sm-11">
                                                    <span class="fw-normal">Profile image</span>
                                                    <input type="file" class="form-control form-control-sm"
                                                        style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;">
                                                    <div class="form-text text-muted">Accepted formats:
                                                        gif, png, jpg.</div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <span class="fw-normal"> <br></span>
                                                    <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                                        width="50px" height="34px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-end">
                                                <button type="submit" class="common_button effect01">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- /profile info -->
                        <!-- Account settings -->
                        <div class="card border-0 rounded-0 shadow-none ">
                            <div class="card-header border-0">
                                <h5 class="mb-0 text-start" style="color: #ae0a46;border-bottom: 1px solid #ae0a46">
                                    <span class="text-white p-1" style="background-color: #ae0a46;">Password
                                        settings</span>
                                </h5>
                            </div>

                            <div class="card-body p-3 pt-1">
                                <form action="#">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-lg-4">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Current password</span>
                                                    <input type="password" value="password" readonly
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">New password</span>
                                                    <input type="password" placeholder="Enter new password"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Repeat password</span>
                                                    <input type="password" placeholder="Repeat new password"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="common_button effect01">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /account settings -->

                    </div>

                    <div class="tab-pane fade ms-2" id="schedule">

                        <!-- Available hours -->
                        <div class="card border-0 rounded-0 shadow-none">
                            <div class="card-header">
                                <h5 class="mb-0">Available hours</h5>
                            </div>

                            <div class="card-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="available_hours"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /available hours -->


                        <!-- Schedule -->
                        <div class="card border-0 rounded-0 shadow-none">
                            <div class="card-header">
                                <h5 class="mb-0">My schedule</h5>
                            </div>

                            <div class="card-body">
                                <div class="my-schedule"></div>
                            </div>
                        </div>
                        <!-- /schedule -->

                    </div>

                    <div class="tab-pane fade ms-2" id="deal">
                        <div class="row">
                            <div class="content bg-white">
                                <h3 class="text-center">Your Deal Info</h3>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Id</th>
                                            <th width="15%">Code</th>
                                            <th width="40%">Product Name</th>
                                            <th width="15%">Deal Status</th>
                                            <th width="20%">Work order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($rfqs)
                                            @foreach ($rfqs as $key => $rfq)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $rfq->rfq_code }}</td>
                                                    <td>{{ App\Models\Admin\Product::where('id', $rfq->product_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $rfq->status }}</td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade ms-2" id="rfq">
                        <div class="row">
                            <div class="content bg-white">
                                <h3 class="text-center">Your RFQ Info</h3>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Id</th>
                                            <th width="15%">Rfq Code</th>
                                            <th width="40%">Product Name</th>
                                            <th width="15%">Rfq Status</th>
                                            <th class="text-center" width="20%">Work order</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($rfqs)
                                            @foreach ($rfqs as $key => $rfq)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $rfq->rfq_code }}</td>
                                                    <td>{{ App\Models\Admin\Product::where('id', $rfq->product_id)->value('name') }}
                                                    </td>
                                                    <td>{{ ucfirst($rfq->status) }}</td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary mx-2"
                                                            data-bs-toggle="modal" title="Upload Work order"
                                                            data-bs-target="#Work-order-{{ $rfq->rfq_code }}">
                                                            <i class="icon-file-plus2"></i>
                                                        </a>
                                                        <!---Category Update modal--->
                                                        <div id="Work-order-{{ $rfq->rfq_code }}" class="modal fade"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        @php
                                                                            $rfq = App\Models\Admin\Rfq::where('rfq_code', $rfq->rfq_code)->first();
                                                                            $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq->rfq_code)->get();
                                                                            $deal_sas = App\Models\Admin\DealSas::where('rfq_code', $rfq->rfq_code)->first();
                                                                        @endphp
                                                                        <h5 class="modal-title">Upload Your Work
                                                                            Order</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">

                                                                        <form method="post"
                                                                            action="{{ route('work-order.upload', $rfq->rfq_code) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <table
                                                                                                class="table table-bordered"
                                                                                                style="width: 100%;
                                                                                                            height: auto;">
                                                                                                <tr class="text-center"
                                                                                                    style="background-color: rgba(0,0,0,.03);">
                                                                                                    <th>SL #
                                                                                                    </th>
                                                                                                    <th>Product
                                                                                                        Description
                                                                                                    </th>
                                                                                                    <th>Quantity
                                                                                                    </th>

                                                                                                    @if ($rfq->regular == '1')
                                                                                                        <th width="10%"
                                                                                                            class="rg_discount d-none">
                                                                                                            Discount
                                                                                                        </th>
                                                                                                        <th width="10%"
                                                                                                            class="rg_discount d-none">
                                                                                                            Disc.
                                                                                                            Unit
                                                                                                        </th>
                                                                                                    @else
                                                                                                        <th width="10%"
                                                                                                            class="rg_unit">
                                                                                                            Unit
                                                                                                            Price
                                                                                                        </th>
                                                                                                    @endif

                                                                                                    <th width="15%">
                                                                                                        Total
                                                                                                    </th>
                                                                                                </tr>

                                                                                                @foreach ($deal_products as $key => $item)
                                                                                                    <tr>
                                                                                                        <td> {{ ++$key }}
                                                                                                        </td>

                                                                                                        <td>
                                                                                                            {{ $item->item_name }}
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="text-center">
                                                                                                            {{ $item->qty }}
                                                                                                        </td>
                                                                                                        @if ($rfq->regular == '1')
                                                                                                            <th width="10%"
                                                                                                                class="rg_discount d-none">
                                                                                                                {{ $item->regular_discount }}
                                                                                                                %
                                                                                                            </th>
                                                                                                            <th width="10%"
                                                                                                                class="rg_discount d-none">
                                                                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                                                                            </th>
                                                                                                        @else
                                                                                                            <th width="10%"
                                                                                                                class="rg_unit">
                                                                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                                                                            </th>
                                                                                                        @endif

                                                                                                        <td
                                                                                                            class="text-center">
                                                                                                            $
                                                                                                            {{ $item->sales_price }}
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach


                                                                                                <tr>
                                                                                                    <th> </th>

                                                                                                    @if ($rfq->regular == '1')
                                                                                                        <th width="10%"
                                                                                                            class="rg_discount d-none">
                                                                                                        </th>
                                                                                                        <th width="10%"
                                                                                                            class="rg_discount d-none">
                                                                                                        </th>
                                                                                                    @else
                                                                                                        <th width="10%"
                                                                                                            class="rg_unit">
                                                                                                        </th>
                                                                                                    @endif
                                                                                                    <td colspan="2"
                                                                                                        class="text-center">
                                                                                                        Sub Total
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class="text-center">
                                                                                                        $
                                                                                                        {{ $deal_sas->sub_total_sales }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                @if ($rfq->special == '1')
                                                                                                    <tr
                                                                                                        class="special_discount">
                                                                                                        <th> </th>
                                                                                                        @if ($rfq->regular == '1')
                                                                                                            <th width="10%"
                                                                                                                class="rg_discount d-none">
                                                                                                            </th>
                                                                                                            <th width="10%"
                                                                                                                class="rg_discount d-none">
                                                                                                            </th>
                                                                                                        @else
                                                                                                            <th width="10%"
                                                                                                                class="rg_unit">
                                                                                                            </th>
                                                                                                        @endif
                                                                                                        <td
                                                                                                            class="text-center">
                                                                                                            Special
                                                                                                            discount
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="text-center">
                                                                                                            {{ $deal_sas->special_discount }}
                                                                                                            %</td>
                                                                                                        <td
                                                                                                            class="text-center">
                                                                                                            $
                                                                                                            {{ $deal_sas->special_discounted_sales }}
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endif



                                                                                                <tr>
                                                                                                    <th> </th>
                                                                                                    @if ($rfq->regular == '1')
                                                                                                        <th width="10%"
                                                                                                            class="rg_discount d-none">
                                                                                                        </th>
                                                                                                        <th width="10%"
                                                                                                            class="rg_discount d-none">
                                                                                                        </th>
                                                                                                    @else
                                                                                                        <th width="10%"
                                                                                                            class="rg_unit">
                                                                                                        </th>
                                                                                                    @endif
                                                                                                    <th colspan="2"
                                                                                                        class="text-center">
                                                                                                        Total </th>
                                                                                                    <td
                                                                                                        class="text-center">
                                                                                                        $
                                                                                                        {{ $deal_sas->grand_total - $deal_sas->tax_sales }}
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <!-- <tr>
                                                                                                                                                                                <th colspan="2" width="40%"> In Words: </th> <th colspan="5" width="60%"> <small> <b> Thirty One Lac sixty Four Thousand and Four Hundred Twenty One Taka Only (w/o Tax / VAT) </b> </small> </th>
                                                                                                                                                                                </tr> -->


                                                                                            </table>


                                                                                            @if ($rfq->tax_status == '1')
                                                                                                <table
                                                                                                    class="table table-bordered mt-2">
                                                                                                    <th colspan="3"
                                                                                                        width="80%">
                                                                                                        Tax / VAT
                                                    </td>
                                                    <td class="text-center" width="10%"> {{ $deal_sas->tax }}%
                                                    </td>
                                                    <td class="text-center" width="10%"> $
                                                        {{ $deal_sas->tax_sales }}</td>
                                                </tr>

                                </table>
                                @endif
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade ms-2" id="offerPrice">
                        <div class="row">
                            <div class="content bg-white">
                                <h3 class="text-center">Your RFQ Info</h3>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Id</th>
                                            <th width="15%">Rfq Code</th>
                                            <th width="40%">Product Name</th>
                                            <th width="15%">Rfq Status</th>
                                            <th class="text-center" width="20%">Work order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>afasf</td>
                                            <td>asfa
                                            </td>
                                            <td>asfa</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="text-primary mx-2"
                                                    data-bs-toggle="modal" title="Upload Work order"
                                                    data-bs-target="#Work-order-{{ $rfq->rfq_code }}">
                                                    <i class="icon-file-plus2"></i>
                                                </a>
                                                <!---Category Update modal--->
                                            </td>
                                        </tr>

                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    @endforeach
    @endif
    </td>

    </tr>

    </tbody>
    </table>
    </div>
    </div>
    </div>

    <div class="tab-pane fade " id="orders">
        <div class="content bg-white">
            <h3 class="text-center">Your Order Info</h3>
            <div class="table-responsive">
                <table class="brandDT table table-bordered table-hover">
                    <thead>
                        <tr class="text-white">
                            <th width="20%">Order Number</th>
                            <th width="20%">Order Date</th>
                            <th width="15%">Total Amount</th>
                            <th width="15%">Payment Method</th>
                            <th width="15%">Status</th>
                            <th width="15%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                            <td>{{ $item->order_number }}</td>
                            <td>{{ $item->order_date }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ ucfirst($item->payment_method) }}</td>
                            <td>{{ ucfirst($item->status) }}</td>
                            <td class="text-center">
                                @if ($item->status == 'unpaid')
                                    <a href="{{ route('payment.page', $item->order_number) }}" class="text-success"
                                        title="Go to Payment Page">
                                        <i class="fa fa-dollar-sign fa-1x"></i>
                                    </a>
                                @endif
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade " id="offerPrice">
        <div class="content bg-white">
            <h3 class="text-center">Your Offer Price</h3>
            <div class="table-responsive">
                <table class="brandDT table table-bordered table-hover">
                    <thead>
                        <tr class="text-white">
                            <th width="20%">Order Number</th>
                            <th width="20%">Order Date</th>
                            <th width="15%">Total Amount</th>
                            <th width="15%">Payment Method</th>
                            <th width="15%">Status</th>
                            <th width="15%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td class="text-center" colspan="6">No Data Available <span class="ms-1 text-warning"><i
                                    class="ph ph-smiley-sad"></i></span></td>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="tab-pane fade " id="productDraft">
        <div class="content bg-white">
            <h3 class="text-center">Your Product Draft</h3>
            <div class="table-responsive">
                <table class="brandDT table table-bordered table-hover">
                    <thead>
                        <tr class="text-white">
                            <th width="20%">Order Number</th>
                            <th width="20%">Order Date</th>
                            <th width="15%">Total Amount</th>
                            <th width="15%">Payment Method</th>
                            <th width="15%">Status</th>
                            <th width="15%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td class="text-center" colspan="6">No Data Available <span class="ms-1 text-warning"><i
                                    class="ph ph-smiley-sad"></i></span></td>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>
    <!-- /right content -->

    </div>
    <!-- /inner container -->

    </div>
    <!-- /content area -->


    <!-- Footer -->
    <div class="navbar navbar-sm navbar-footer border-top">
        <div class="container-fluid">
            <span class="d-none d-md-inline-block ms-2 ">
                <strong class="text-black text-center">&copy; {{ date('Y') }} <a href="{{ route('homepage') }}">Ngen
                        It</a>
                </strong>
            </span>
        </div>
    </div>
    <!-- /footer -->

    </div>
    <!-- /inner content -->

@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.contactDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 3, 4],
                }, ],
            });
        </script>
    @endpush
@endonce

@extends('partner.master')
@section('content')
    <!-- Inner content -->
    <div class="content-inner">
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
                                    <a href="#wallet" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph ph-wallet me-2" style="color: #ae0a46;"></i></span>
                                        <span>
                                            Wallet
                                        </span>
                                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#order" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph ph-list-numbers me-2" style="color: #ae0a46;"></i></span>
                                        <span>
                                            Order
                                        </span>
                                        <span class="badge rounded-circle ms-auto" style="background: #ae0a46;">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#offerPrice" class="nav-link d-flex align-items-center" data-bs-toggle="tab">
                                        <span><i class="ph ph-currency-circle-dollar me-2" style="color: #ae0a46;"></i></span>
                                        <span>
                                            Offer Price
                                        </span>
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
                                    <a href="{{ route('partner.logout') }}" class="nav-link d-flex align-items-center">
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
                <div class="tab-content flex-fill">
                    <div class="tab-pane fade ms-2 active show" id="profile">
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
                                                    <input type="file" class="form-control form-control-sm" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;">
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
                            <div class="content bg-white p-1">
                                <h3 class="text-center mb-0">Your Deal Info</h3>
                                <table class="brandDT table table-bordered table-hover">
                                    <thead class="border-solid">
                                        <tr class="text-white border">
                                            <th width="20%">Order Number</th>
                                            <th width="20%">Order Date</th>
                                            <th width="15%">Total Amount</th>
                                            <th width="15%">Payment Method</th>
                                            <th width="15%">Status</th>
                                            <th width="15%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <td class="text-center" colspan="6">No Data Available <span class="ms-1 text-warning"><i class="ph ph-smiley-sad"></i></span></td>
                                            {{-- <td>25/5/23</td>
                                            <td>2560</td>
                                            <td>bkash</td>
                                            <td>Active</td>
                                            <td class="text-center">
                                                <a href="" class="text-success" title="Go to Payment Page">
                                                    <i class="fa fa-dollar-sign fa-1x"></i>
                                                </a>
                                            </td> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade ms-2" id="rfq">
                        <div class="row">
                            <div class="content bg-white p-1">
                                <h3 class="text-center">Your RFQ Info</h3>
                                <table class="brandDT table table-bordered table-hover">
                                    <thead class="border-solid">
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
                                        <td class="text-center" colspan="6">No Data Available <span class="ms-1 text-warning"><i class="ph ph-smiley-sad"></i></span></td>
                                            {{-- <td>25/5/23</td>
                                            <td>2560</td>
                                            <td>bkash</td>
                                            <td>Active</td>
                                            <td class="text-center">
                                                <a href="" class="text-success" title="Go to Payment Page">
                                                    <i class="fa fa-dollar-sign fa-1x"></i>
                                                </a>
                                            </td> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade ms-2" id="wallet">
                        <div class="row">
                            <div class="content bg-white p-1">
                                <h3 class="text-center">Your Wallet</h3>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade ms-2" id="order">
                        <div class="row">
                            <div class="content bg-white p-1">
                                <h3 class="text-center">Your Order</h3>
                                <table class="brandDT table table-bordered table-hover">
                                    <thead class="border-solid">
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
                                        <td class="text-center" colspan="6">No Data Available <span class="ms-1 text-warning"><i class="ph ph-smiley-sad"></i></span></td>
                                            {{-- <td>25/5/23</td>
                                            <td>2560</td>
                                            <td>bkash</td>
                                            <td>Active</td>
                                            <td class="text-center">
                                                <a href="" class="text-success" title="Go to Payment Page">
                                                    <i class="fa fa-dollar-sign fa-1x"></i>
                                                </a>
                                            </td> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade ms-2" id="offerPrice">
                        <div class="row">
                            <div class="content bg-white p-1">
                                <h3 class="text-center">Your Offer Price</h3>
                                <table class="brandDT table table-bordered table-hover">
                                    <thead class="border-solid">
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
                                        <td class="text-center" colspan="6">No Data Available <span class="ms-1 text-warning"><i class="ph ph-smiley-sad"></i></span></td>
                                            {{-- <td>25/5/23</td>
                                            <td>2560</td>
                                            <td>bkash</td>
                                            <td>Active</td>
                                            <td class="text-center">
                                                <a href="" class="text-success" title="Go to Payment Page">
                                                    <i class="fa fa-dollar-sign fa-1x"></i>
                                                </a>
                                            </td> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade ms-2" id="productDraft">
                        <div class="row">
                            <div class="content bg-white p-1">
                                <h3 class="text-center">Your Product Draft</h3>
                                <table class="brandDT table table-bordered table-hover">
                                    <thead class="border-solid">
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
                                        <td class="text-center" colspan="6">No Data Available <span class="ms-1 text-warning"><i class="ph ph-smiley-sad"></i></span></td>
                                            {{-- <td>25/5/23</td>
                                            <td>2560</td>
                                            <td>bkash</td>
                                            <td>Active</td>
                                            <td class="text-center">
                                                <a href="" class="text-success" title="Go to Payment Page">
                                                    <i class="fa fa-dollar-sign fa-1x"></i>
                                                </a>
                                            </td> --}}
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

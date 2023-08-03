@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Offer Prices Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="" data-bs-toggle="modal" data-bs-target="#addOfferPrice">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">Offer Price </h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table offerPriceDT table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="15%">Client Type</th>
                            <th width="20%">Name</th>
                            <th width="10%">Email</th>
                            <th width="10%">Phone</th>
                            <th width="10%">Address</th>
                            <th width="5%">QTY</th>
                            <th width="5%">Tax</th>
                            <th width="5%">Vat</th>
                            <th width="5%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="10%">1</td>
                            <td width="50%">Online</td>
                            <td width="50%">Shahed</td>
                            <td width="50%">Shahed@gmail.com</td>
                            <td width="50%">+88 01620222515</td>
                            <td width="50%">Sonir Akhra</td>
                            <td width="50%">556</td>
                            <td width="50%">25.5</td>
                            <td width="50%">86.41</td>
                            <td>
                                <a href="" class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#editOfferPrice">
                                    <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                </a>
                                <a href="" class="text-danger delete">
                                    <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                </a>
                                {{-- Edit Success Modal --}}
                                <div id="editOfferPrice" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title text-white">Edit Offer Price</h6>
                                                <a type="button" data-bs-dismiss="modal">
                                                    <i class="ph ph-x text-white"
                                                        style="font-weight: 800;font-size: 10px;"></i>
                                                </a>
                                            </div>
                                            <div class="modal-body p-0 px-2">
                                                <form method="post" action="">
                                                    @csrf
                                                    <div class="container mt-1">
                                                        <div class="row">
                                                            <div class="col-lg-4 text-start col-sm-12">
                                                                <span class="mt-1 fw-bold text-info">Description</span>
                                                                <div class="px-2 py-2 rounded bg-light " style="border-top: 1px solid #247297;">
                                                                    <!-- Offer Price Code -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Price Code</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text"
                                                                                class="form-control form-control-sm" placeholder="Offer  Price Code"
                                                                                name="offer_price_code" required>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Sales Man id L1 -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Man Id L1</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="sales_man_id_L1"
                                                                                class="form-control multiselect"
                                                                                multiple="multiple"
                                                                                data-placeholder="Chose Sales Man id L1"
                                                                                data-include-select-all-option="true"
                                                                                data-enable-filtering="true"
                                                                                data-enable-case-insensitive-filtering="true">
                                                                                <option value="cheese">Cheese</option>
                                                                                <option value="tomatoes">Tomatoes</option>
                                                                                <option value="mozarella">Mozzarella
                                                                                </option>
                                                                                <option value="mushrooms">Mushrooms
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Sales Man id T1 -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Man Id T1</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="sales_man_id_T1"
                                                                                class="form-control form-control-sm multiselect"
                                                                                multiple="multiple"
                                                                                data-placeholder="Choose Sales Man id T1"
                                                                                data-include-select-all-option="true"
                                                                                data-enable-filtering="true"
                                                                                data-enable-case-insensitive-filtering="true">
                                                                                <option value="cheese">Cheese</option>
                                                                                <option value="tomatoes">Tomatoes</option>
                                                                                <option value="mozarella">Mozzarella
                                                                                </option>
                                                                                <option value="mushrooms">Mushrooms
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Sales Man id T2 -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Man Id T2</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="sales_man_id_T2"
                                                                                class="form-control multiselect"
                                                                                multiple="multiple"
                                                                                data-placeholder="Choose Sales Man id T2"
                                                                                data-include-select-all-option="true"
                                                                                data-enable-filtering="true"
                                                                                data-enable-case-insensitive-filtering="true">
                                                                                <option value="cheese">Cheese</option>
                                                                                <option value="tomatoes">Tomatoes</option>
                                                                                <option value="mozarella">Mozzarella
                                                                                </option>
                                                                                <option value="mushrooms">Mushrooms
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Client Id -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Client ID</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="client_id"
                                                                                class="form-control multiselect"
                                                                                multiple="multiple"
                                                                                data-placeholder="Choose Client ID"
                                                                                data-include-select-all-option="true"
                                                                                data-enable-filtering="true"
                                                                                data-enable-case-insensitive-filtering="true">
                                                                                <option value="cheese">Cheese</option>
                                                                                <option value="tomatoes">Tomatoes</option>
                                                                                <option value="mozarella">Mozzarella
                                                                                </option>
                                                                                <option value="mushrooms">Mushrooms
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Partner ID -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Partner ID</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="partner_id"
                                                                                class="form-control multiselect"
                                                                                multiple="multiple"
                                                                                data-include-select-all-option="true"
                                                                                data-placeholder="Choose Partner ID"
                                                                                data-enable-filtering="true"
                                                                                data-enable-case-insensitive-filtering="true">
                                                                                <option value="cheese">Cheese</option>
                                                                                <option value="tomatoes">Tomatoes</option>
                                                                                <option value="mozarella">Mozzarella
                                                                                </option>
                                                                                <option value="mushrooms">Mushrooms
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Product ID -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Product ID</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="product_id"
                                                                                class="form-control multiselect"
                                                                                multiple="multiple"
                                                                                data-placeholder="Choose Product ID"
                                                                                data-include-select-all-option="true"
                                                                                data-enable-filtering="true"
                                                                                data-enable-case-insensitive-filtering="true">
                                                                                <option value="cheese">Cheese</option>
                                                                                <option value="tomatoes">Tomatoes</option>
                                                                                <option value="mozarella">Mozzarella
                                                                                </option>
                                                                                <option value="mushrooms">Mushrooms
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Solution ID -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Solution ID</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select name="solution_id"
                                                                                class="form-control multiselect"
                                                                                multiple="multiple"
                                                                                data-placeholder="Choose Solution ID"
                                                                                data-include-select-all-option="true"
                                                                                data-enable-filtering="true"
                                                                                data-enable-case-insensitive-filtering="true">
                                                                                <option value="cheese">Cheese</option>
                                                                                <option value="tomatoes">Tomatoes</option>
                                                                                <option value="mozarella">Mozzarella
                                                                                </option>
                                                                                <option value="mushrooms">Mushrooms
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Client Type -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Client Type</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select class="form-select"
                                                                            data-placeholder="Choose Client Type"
                                                                                name="client_type" style="width: 100%;">
                                                                                <option value="opt1">Styled select box
                                                                                </option>
                                                                                <option value="opt2">Option 2</option>
                                                                                <option value="opt3">Option 3</option>
                                                                                <option value="opt4">Option 4</option>
                                                                                <option value="opt5">Option 5</option>
                                                                                <option value="opt6">Option 6</option>
                                                                                <option value="opt7">Option 7</option>
                                                                                <option value="opt8">Option 8</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Name -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Name </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" placeholder="Name"
                                                                                class="form-control form-control-sm"
                                                                                name="name" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 text-start col-sm-12">
                                                                <span class="mt-1 fw-bold text-info">Description</span>
                                                                <div class="px-2 py-2 rounded bg-light " style="border-top: 1px solid #247297;">
                                                                    <!-- Email -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Email</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="email" placeholder="Email"
                                                                                class="form-control form-control-sm"
                                                                                name="email" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- phone -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Phone </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="number" placeholder="Phone"
                                                                                class="form-control form-control-sm"
                                                                                name="phone" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Company Name -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Company </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" placeholder="Company Name"
                                                                                class="form-control form-control-sm"
                                                                                name="company_name" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Designation -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Designation</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" placeholder="Designation"
                                                                                class="form-control form-control-sm"
                                                                                name="designation" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Address -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>  Address </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" placeholder="Address"
                                                                                class="form-control form-control-sm"
                                                                                name="address" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Partner Name -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Name</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text"  placeholder="Partner Name"
                                                                                class="form-control form-control-sm"
                                                                                name="partner_name" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Partner Email -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Email</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="email" placeholder="Partner Email"
                                                                                class="form-control form-control-sm"
                                                                                name="partner_email" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Partner Phone -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Phone</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="number" placeholder="Partner Phone"
                                                                                class="form-control form-control-sm"
                                                                                name="partner_phone" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Partner Company Name -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Company</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" placeholder="Partner Company Name"
                                                                                class="form-control form-control-sm"
                                                                                name="partner_company_name" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Partner Designation -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Designation </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" placeholder="Partner Designation"
                                                                                class="form-control form-control-sm"
                                                                                name="partner_designation" required>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 text-start col-sm-12">
                                                                <span class="mt-1 fw-bold text-info">Description</span>
                                                                <div class="px-2 py-2 rounded bg-light " style="border-top: 1px solid #247297;">

                                                                    <!-- Partner Address -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start" required>
                                                                            <span>
                                                                                Address
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" placeholder="Partner Address"
                                                                                class="form-control form-control-sm"
                                                                                name="partner_address" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Create Date -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Create Date </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="date" placeholder="Create Date"
                                                                                class="form-control form-control-sm"
                                                                                name="create_date" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Close Date -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Close Date </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="date" placeholder="Close Date"
                                                                                class="form-control form-control-sm"
                                                                                name="close_date" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Sale Date -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Sale Date </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="date" placeholder="Sale Date"
                                                                                class="form-control form-control-sm"
                                                                                name="sale_date" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- QTY -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> QTY</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="number" placeholder="Quantity"
                                                                                class="form-control form-control-sm"
                                                                                name="qty" required>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Image -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Image</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <input type="file"
                                                                                class="form-control form-control-sm"
                                                                                name="image" required>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <img src="" class="rounded-circle img-fluid" width="25px" height="25px" alt="">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Message -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Message</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <textarea rows="1" cols="3" placeholder="Message" class="form-control form-control-sm" placeholder="Enter your message here" name="message"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Call -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span>Call </span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select class="form-select" data-placeholder="Call" name="call" style="width: 100%;">
                                                                                <option value="0">0</option>
                                                                                <option value="1">1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Regular -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Regular</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select class="form-select" data-placeholder="Regular" name="regular" style="width: 100%;">
                                                                                <option value="0">0</option>
                                                                                <option value="1">1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Special -->
                                                                    <div class="row mb-1">
                                                                        <div class="col-lg-4 text-start">
                                                                            <span> Special</span>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <select class="form-select" data-placeholder="Special" name="special" style="width: 100%;">
                                                                                <option value="0">0</option>
                                                                                <option value="1">1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Email -->
                                                                    <div class="row mt-2 mb-1">
                                                                        <div class="col-sm-4">
                                                                            <span>Email</span>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <input type="email" name="email" placeholder="Partner Email"
                                                                                class="form-control form-control-sm" maxlength="100"
                                                                                required />
                                                                        </div>
                                                                    </div>
                                                                    {{--  --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--  --}}
                                                       
                                                    </div>
                                                    <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                                                        <button type="submit"
                                                            class="submit_btn from-prevent-multiple-submits"
                                                            style="padding: 5px;">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Edit Success Modal End --}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Success Modal --}}
        <div id="addOfferPrice" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Offer Price</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form method="post" action="">
                            @csrf
                            <div class="container mt-1">
                                <div class="row">
                                    <div class="col-lg-4 text-start col-sm-12">
                                        <span class="mt-1 fw-bold text-info">Description</span>
                                        <div class="px-2 py-2 rounded bg-light " style="border-top: 1px solid #247297;">
                                            <!-- Offer Price Code -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Price Code</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text"
                                                        class="form-control form-control-sm" placeholder="Offer  Price Code"
                                                        name="offer_price_code" required>
                                                </div>
                                            </div>
                                            <!-- Sales Man id L1 -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Man Id L1</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="sales_man_id_L1"
                                                        class="form-control multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Chose Sales Man id L1"
                                                        data-include-select-all-option="true"
                                                        data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true">
                                                        <option value="cheese">Cheese</option>
                                                        <option value="tomatoes">Tomatoes</option>
                                                        <option value="mozarella">Mozzarella
                                                        </option>
                                                        <option value="mushrooms">Mushrooms
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Sales Man id T1 -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Man Id T1</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="sales_man_id_T1"
                                                        class="form-control form-control-sm multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Choose Sales Man id T1"
                                                        data-include-select-all-option="true"
                                                        data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true">
                                                        <option value="cheese">Cheese</option>
                                                        <option value="tomatoes">Tomatoes</option>
                                                        <option value="mozarella">Mozzarella
                                                        </option>
                                                        <option value="mushrooms">Mushrooms
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Sales Man id T2 -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Man Id T2</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="sales_man_id_T2"
                                                        class="form-control multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Choose Sales Man id T2"
                                                        data-include-select-all-option="true"
                                                        data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true">
                                                        <option value="cheese">Cheese</option>
                                                        <option value="tomatoes">Tomatoes</option>
                                                        <option value="mozarella">Mozzarella
                                                        </option>
                                                        <option value="mushrooms">Mushrooms
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Client Id -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Client ID</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="client_id"
                                                        class="form-control multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Choose Client ID"
                                                        data-include-select-all-option="true"
                                                        data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true">
                                                        <option value="cheese">Cheese</option>
                                                        <option value="tomatoes">Tomatoes</option>
                                                        <option value="mozarella">Mozzarella
                                                        </option>
                                                        <option value="mushrooms">Mushrooms
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Partner ID -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span> Partner ID</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="partner_id"
                                                        class="form-control multiselect"
                                                        multiple="multiple"
                                                        data-include-select-all-option="true"
                                                        data-placeholder="Choose Partner ID"
                                                        data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true">
                                                        <option value="cheese">Cheese</option>
                                                        <option value="tomatoes">Tomatoes</option>
                                                        <option value="mozarella">Mozzarella
                                                        </option>
                                                        <option value="mushrooms">Mushrooms
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Product ID -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Product ID</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="product_id"
                                                        class="form-control multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Choose Product ID"
                                                        data-include-select-all-option="true"
                                                        data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true">
                                                        <option value="cheese">Cheese</option>
                                                        <option value="tomatoes">Tomatoes</option>
                                                        <option value="mozarella">Mozzarella
                                                        </option>
                                                        <option value="mushrooms">Mushrooms
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Solution ID -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Solution ID</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="solution_id"
                                                        class="form-control multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Choose Solution ID"
                                                        data-include-select-all-option="true"
                                                        data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true">
                                                        <option value="cheese">Cheese</option>
                                                        <option value="tomatoes">Tomatoes</option>
                                                        <option value="mozarella">Mozzarella
                                                        </option>
                                                        <option value="mushrooms">Mushrooms
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Client Type -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span> Client Type</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select class="form-select"
                                                    data-placeholder="Choose Client Type"
                                                        name="client_type" style="width: 100%;">
                                                        <option value="opt1">Styled select box
                                                        </option>
                                                        <option value="opt2">Option 2</option>
                                                        <option value="opt3">Option 3</option>
                                                        <option value="opt4">Option 4</option>
                                                        <option value="opt5">Option 5</option>
                                                        <option value="opt6">Option 6</option>
                                                        <option value="opt7">Option 7</option>
                                                        <option value="opt8">Option 8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Name -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Name </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Name"
                                                        class="form-control form-control-sm"
                                                        name="name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-start col-sm-12">
                                        <span class="mt-1 fw-bold text-info">Description</span>
                                        <div class="px-2 py-2 rounded bg-light " style="border-top: 1px solid #247297;">
                                            <!-- Email -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span> Email</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="email" placeholder="Email"
                                                        class="form-control form-control-sm"
                                                        name="email" required>
                                                </div>
                                            </div>

                                            <!-- phone -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span> Phone </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="number" placeholder="Phone"
                                                        class="form-control form-control-sm"
                                                        name="phone" required>
                                                </div>
                                            </div>

                                            <!-- Company Name -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span> Company </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Company Name"
                                                        class="form-control form-control-sm"
                                                        name="company_name" required>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span> Designation</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Designation"
                                                        class="form-control form-control-sm"
                                                        name="designation" required>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>  Address </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Address"
                                                        class="form-control form-control-sm"
                                                        name="address" required>
                                                </div>
                                            </div>

                                            <!-- Partner Name -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Name</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text"  placeholder="Partner Name"
                                                        class="form-control form-control-sm"
                                                        name="partner_name" required>
                                                </div>
                                            </div>

                                            <!-- Partner Email -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span>Email</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="email" placeholder="Partner Email"
                                                        class="form-control form-control-sm"
                                                        name="partner_email" required>
                                                </div>
                                            </div>

                                            <!-- Partner Phone -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Phone</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="number" placeholder="Partner Phone"
                                                        class="form-control form-control-sm"
                                                        name="partner_phone" required>
                                                </div>
                                            </div>

                                            <!-- Partner Company Name -->
                                            <div class="row mb-2">
                                                <div class="col-lg-4 text-start">
                                                    <span>Company</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Partner Company Name"
                                                        class="form-control form-control-sm"
                                                        name="partner_company_name" required>
                                                </div>
                                            </div>

                                            <!-- Partner Designation -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Designation </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Partner Designation"
                                                        class="form-control form-control-sm"
                                                        name="partner_designation" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-start col-sm-12">
                                        <span class="mt-1 fw-bold text-info">Description</span>
                                        <div class="px-2 py-2 rounded bg-light " style="border-top: 1px solid #247297;">

                                            <!-- Partner Address -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start" required>
                                                    <span>
                                                        Address
                                                    </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Partner Address"
                                                        class="form-control form-control-sm"
                                                        name="partner_address" required>
                                                </div>
                                            </div>

                                            <!-- Create Date -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span>Create Date </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="date" placeholder="Create Date"
                                                        class="form-control form-control-sm"
                                                        name="create_date" required>
                                                </div>
                                            </div>

                                            <!-- Close Date -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Close Date </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="date" placeholder="Close Date"
                                                        class="form-control form-control-sm"
                                                        name="close_date" required>
                                                </div>
                                            </div>

                                            <!-- Sale Date -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Sale Date </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="date" placeholder="Sale Date"
                                                        class="form-control form-control-sm"
                                                        name="sale_date" required>
                                                </div>
                                            </div>

                                            <!-- QTY -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> QTY</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="number" placeholder="Quantity"
                                                        class="form-control form-control-sm"
                                                        name="qty" required>
                                                </div>
                                            </div>

                                            <!-- Image -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Image</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="file"
                                                        class="form-control form-control-sm"
                                                        name="image" required>
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="" class="rounded-circle img-fluid" width="25px" height="25px" alt="">
                                                </div>
                                            </div>

                                            <!-- Message -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Message</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <textarea rows="1" cols="3" placeholder="Message" class="form-control form-control-sm" placeholder="Enter your message here" name="message"></textarea>
                                                </div>
                                            </div>

                                            <!-- Call -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span>Call </span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select class="form-select" data-placeholder="Call" name="call" style="width: 100%;">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Regular -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Regular</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select class="form-select" data-placeholder="Regular" name="regular" style="width: 100%;">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Special -->
                                            <div class="row mb-1">
                                                <div class="col-lg-4 text-start">
                                                    <span> Special</span>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select class="form-select" data-placeholder="Special" name="special" style="width: 100%;">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="row mt-2 mb-1">
                                                <div class="col-sm-4">
                                                    <span>Email</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="email" name="email" placeholder="Partner Email"
                                                        class="form-control form-control-sm" maxlength="100"
                                                        required />
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}
                               
                            </div>
                            <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                                <button type="submit"
                                    class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.offerPriceDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [9],
                }, ],
            });
        </script>
    @endpush
@endonce

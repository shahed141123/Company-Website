@extends('admin.master')
@section('content')
    <style>
        thead {
            background-color: rgb(255, 255, 255) !important;
            color: #000000 !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('product-sourcing.index') }}" class="breadcrumb-item">Deal</a>
                        <span class="breadcrumb-item active">Deal Add</span>
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
        <!-- Content area -->
        <div class="content pt-1">
            <div class="card">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn" href="">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold">Deal Add Form</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <div class="row gx-0">
                        <div class="col-lg-2">
                            <ul class="nav nav-tabs flex-column" id="myTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                        aria-selected="true">Assigned Sales Manager</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2" aria-selected="false">Client
                                        Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                        type="button" role="tab" aria-controls="tab3" aria-selected="false">Add
                                        Product</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4"
                                        type="button" role="tab" aria-controls="tab4" aria-selected="false">Terms &
                                        Condition</button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-10">
                            <form id="myForm" method="post" action="" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="tab-content bg-white p-2 pt-0" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                        aria-labelledby="tab1-tab">
                                        <h6 class="mb-0 text-info">Assigned Sales Manager</h6>
                                        <div class="row mb-3 gx-0 border border-secondary bg-light">
                                            <div class="col-lg-12 p-2">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-2">
                                                        <div class="form-group basic-form">
                                                            <label for="sales_man_id_L1" class="form-label mb-0">Sales
                                                                Manager Name(Leader - L1) <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="sales_man_id_L1"
                                                                data-placeholder="Select Product Type.."
                                                                id="sales_man_id_L1" class="form-control select" required>
                                                                <option></option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">
                                                                        {{ $user->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <div class="form-group basic-form">
                                                            <label for="sales_man_id_T1" class="form-label mb-0">Sales
                                                                Manager Name (Team - T1)</label>
                                                            <select class="form-control select" name="sales_man_id_T1"
                                                                data-placeholder="Select Sales...">
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">
                                                                        {{ $user->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <div class="form-group basic-form">
                                                            <label for="sales_man_id_T2" class="form-label mb-0">Sales
                                                                Manager Name (Team - T2)</label>
                                                            <select class="form-control select" name="sales_man_id_T2"
                                                                data-placeholder="Select Sales...">
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">
                                                                        {{ $user->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <div class="form-group basic-form">
                                                            <label for="close_date"
                                                                class="form-label form-label-sm mb-0">Closed date</label>
                                                            <input type="date" name="close_date"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <div class="form-group basic-form">
                                                            <label for="deal_type" class="form-label mb-0">Deal Type
                                                            </label>
                                                            <select class="form-control select" name="deal_type"
                                                                data-placeholder="Chose Deal Type">
                                                            <option></option>
                                                                    <option value="new">New</option>
                                                                    <option value="renew">Renew</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-end">
                                                <button type="submit" class="btn btn-success" name="action"
                                                    id="submitbtn" value="save">Save<i
                                                        class="ph-paper-plane-tilt "></i></button>
                                                <a href="javascript:void(0);" class="btn btn-info rounded-0 p-2 px-2"
                                                    id="nextTabButton">Next
                                                    <i class="ph-arrow-circle-right "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel"
                                        aria-labelledby="tab2-tab">
                                        <h6 class="ms-1 mb-0 text-info">Client Details</h6>
                                        <div class="row mb-3 p-3 mx-1 border border-secondary bg-light">
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">Client Type<span
                                                            class="text-danger">*</span></label>
                                                    <select name="client_type" class="form-control select client_select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Chose client Type">
                                                        <option></option>
                                                        <option class="form-select" value="client">
                                                            Client
                                                        </option>
                                                        <option class="form-select" value="partner">
                                                            Partner</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 mb-2 d-flex justify-content-end align-items-center">
                                                <div
                                                    class="center mb-3 bg-gray p-1 text-center d-flex align-items-baseline">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="regular" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Regular Discount
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="special" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Special Discount
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="tax_status" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Tax / VAT
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name"
                                                        class="form-control form-control-sm maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">Email<span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" name="email"
                                                        class="form-control form-control-sm maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">Phone<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="phone"
                                                        class="form-control form-control-sm maxlength" maxlength="100"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">Company Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="company_name"
                                                        class="form-control form-control-sm maxlength" maxlength="200" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">Designation<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="designation"
                                                        class="form-control form-control-sm maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">Address<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="address"
                                                        class="form-control form-control-sm maxlength" maxlength="200" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <div class="form-group basic-form">
                                                    <label for="sales_man_id_L1" class="form-label mb-0">User
                                                        Password<span class="text-danger">*</span></label>
                                                    <input type="password" name="password"
                                                        class="form-control form-control-sm maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-end">
                                                <button type="submit" class="btn btn-success" name="action"
                                                    id="submitbtn" value="save">Save<i
                                                        class="ph-paper-plane-tilt"></i></button>
                                                <a href="javascript:void(0);" class="btn btn-info rounded-0 p-2 px-2"
                                                    id="nextTabButton2">Next
                                                    <i class="ph-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel"
                                        aria-labelledby="tab3-tab">
                                        <h6 class="mb-0 text-info">Product Description</h6>
                                        <div class="row  gx-0 pt-2 border border-secondary bg-light">
                                            <div class="col-lg-12 p-2">
                                                <div class="table-responsive col-md-12">
                                                    <table class="table table-bordered col-md-12" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th style="padding:7px !important;"> Product Name </th>
                                                                <th style="padding:7px !important;"> Qty </th>
                                                                <th style="padding:7px !important;"> Unit Price</th>
                                                                <th style="padding:7px !important;"> Regular Discount</th>
                                                                <th style="padding:7px !important;"> <a
                                                                        href="javascript:void(0)"
                                                                        class="btn btn-primary addRow"><i
                                                                            class="ph-plus"></i></a></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="repeater">
                                                            <tr>
                                                                {{-- <td>
                                                                        <div class="basic-form">
                                                                            <select name="product_name[]" class="form-control select"
                                                                                data-placeholder="Chose Product">
                                                                                <option></option>
                                                                                @foreach ($products as $product)
                                                                                    <option value="{{ $product->name }}">{{ $product->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </td> --}}
                                                                <td> <input type="text" class="form-control"
                                                                        name="item_name[]" required></td>
                                                                <td> <input type="text" class="form-control"
                                                                        name="qty[]"></td>
                                                                <td> <input type="text" class="form-control"
                                                                        name="unit_price[]"></td>
                                                                <td> <input type="text" class="form-control"
                                                                        name="regular_discount[]"></td>
                                                                <td class="text-center"> <a href="javascript:void(0)"
                                                                        class=" removeRow"><i class="ph-minus"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    {{-- <div class="col-md-11 mt-3">
                                                        <button type="submit" class="btn btn-primary text-right">Submit</button>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-end mt-3">
                                                <button type="submit" class="btn btn-success" name="action"
                                                    id="submitbtn" value="save">Save<i
                                                        class="ph-paper-plane-tilt"></i></button>
                                                <a href="javascript:void(0);" class="btn btn-info rounded-0 p-2 px-2"
                                                    id="nextTabButton3">Next
                                                    <i class="ph-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel"
                                        aria-labelledby="tab4-tab">
                                        {{-- <h5>Tab 3 Content</h5> --}}
                                        <h6 class="ms-1 mb-0 text-info">Source Details</h6>
                                        <div class="row mb-3 gx-0 border border-secondary bg-light">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="10%">Validity </th>
                                                        <td width="22%">
                                                            <input type="text" name="validity"
                                                                class="form-control maxlength" form-control-sm
                                                                maxlength="200"
                                                                value="7 Days from the PQ date.Offer may change on the bank forex rate or stock availability" />
                                                        </td>
                                                        <th width="10%">Payment </th>
                                                        <td width="22%">
                                                            <input type="text" name="payment"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200"
                                                                value="200% advanced payment with Work Order for Renewal order Excuation" />
                                                        </td>
                                                        <th width="10%">Payment Mode </th>
                                                        <td width="22%">
                                                            <input type="text" name="payment_mode"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200"
                                                                value="Payment must be through Cheque/EFTN/WT & hit in the NGen IT account" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="10%">Delivery </th>
                                                        <td width="22%">
                                                            <input type="text" name="delivery"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200"
                                                                value="3 business wks upon receiving of WO & Payment.Extended time may require for disaster issues" />
                                                        </td>
                                                        <th width="10%">Delivery Location </th>
                                                        <td width="22%">
                                                            <input type="text" name="delivery_location"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200"
                                                                value="Automatice Renewal Activation to the Licenses & Client's Console Panel" />
                                                        </td>
                                                        <th width="10%">Product & Order </th>
                                                        <td width="22%">
                                                            <input type="text" name="product_order"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200"
                                                                value="May reject/modify order on any dispute in pr. price or product non-availability during execuation" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="10%">Installation Support </th>
                                                        <td width="22%">
                                                            <input type="text" name="installation_support"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200"
                                                                value="Not Applicable. Local Support is Not Included with this Cost as per requirements" />
                                                        </td>
                                                        <th width="10%">Pmt Condition </th>
                                                        <td width="22%">
                                                            <input type="text" name="pmt_condition"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200"
                                                                value="1.5% penalty per week on late from 7 days of / Payment Date" />
                                                        </td>
                                                        <th width="10%">Terms Nine </th>
                                                        <td width="22%">
                                                            <input type="text" name="terms_nine"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200" value="" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="10%">Terms Ten </th>
                                                        <td width="22%">
                                                            <input type="text" name="terms_ten"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200" value="" />
                                                        </td>
                                                        <th width="10%">Terms Eleven </th>
                                                        <td width="22%">
                                                            <input type="text" name="terms_eleven"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="200" value="" />
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="row mt-5 text-end">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-8">
                                                <button type="submit" class="btn btn-success" name="action"
                                                    id="submitbtn" value="save">Save<i
                                                        class="ph-paper-plane-tilt"></i></button>
                                                <button type="submit" class="btn btn-primary " name="action"
                                                    id="submitbtn" value="approval"> Submit
                                                    <i class="ph-paper-plane-tilt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data
                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });
                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>
    <script>
        //---------Sidebar list Show Hide----------
        $(document).ready(function() {
            $('#dealId').click(function() {
                $("#dealExpand").toggle(this.checked);
            });
            $('#rfqId').click(function() {
                $("#rfqExpand").toggle('slow');
            });
        });
    </script>
@endsection
@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                var stock_value = $('.stock_select').find(":selected").val();
                if (stock_value == 'available') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else if (stock_value == 'limited') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else {
                    $(".qty_display").addClass("d-none");
                    $(".qty_required").prop('required', false);
                }
            });
            $('.stock_select').on('change', function() {
                var stock_value = $(this).find(":selected").val();
                if (stock_value == 'available') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else if (stock_value == 'limited') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else {
                    $(".qty_display").addClass("d-none");
                    $(".qty_required").prop('required', false);
                }
            });
            $(document).ready(function() {
                var price_value = $(this).find(":selected").val();
                if (price_value == 'rfq') {
                    // alert(price_value);
                    $(".rfq_price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else if (price_value == 'offer_price') {
                    $(".offer_price").removeClass("d-none");
                    $(".rfq_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else {
                    $(".price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".rfq_price").addClass("d-none");
                }
            });
            $('.price_select').on('change', function() {
                var price_value = $(this).find(":selected").val();
                if (price_value == 'rfq') {
                    // alert(price_value);
                    $(".rfq_price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else if (price_value == 'offer_price') {
                    $(".offer_price").removeClass("d-none");
                    $(".rfq_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else {
                    $(".price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".rfq_price").addClass("d-none");
                }
            });
        </script>
        <script>
            // Get the next tab button for Tab 1
            const nextTabButton = document.getElementById('nextTabButton');
            // Add a click event listener to the button
            nextTabButton.addEventListener('click', function() {
                // Activate Tab 2
                const tab2Button = document.getElementById('tab2-tab');
                tab2Button.classList.add('active');
                tab2Button.setAttribute('aria-selected', 'true');
                // Show Tab 2's content
                const tab2Content = document.getElementById('tab2');
                tab2Content.classList.add('active', 'show');
                // Deactivate Tab 1
                const tab1Button = document.getElementById('tab1-tab');
                tab1Button.classList.remove('active');
                tab1Button.setAttribute('aria-selected', 'false');
                // Hide Tab 1's content
                const tab1Content = document.getElementById('tab1');
                tab1Content.classList.remove('active', 'show');
            });
            // Get the next tab button for Tab 2
            const nextTabButton2 = document.getElementById('nextTabButton2');
            // Add a click event listener to the button
            nextTabButton2.addEventListener('click', function() {
                // Activate Tab 3
                const tab3Button = document.getElementById('tab3-tab');
                tab3Button.classList.add('active');
                tab3Button.setAttribute('aria-selected', 'true');
                // Show Tab 3's content
                const tab3Content = document.getElementById('tab3');
                tab3Content.classList.add('active', 'show');
                // Deactivate Tab 2
                const tab2Button = document.getElementById('tab2-tab');
                tab2Button.classList.remove('active');
                tab2Button.setAttribute('aria-selected', 'false');
                // Hide Tab 2's content
                const tab2Content = document.getElementById('tab2');
                tab2Content.classList.remove('active', 'show');
            });
            // Get the next tab button for Tab 3
            const nextTabButton3 = document.getElementById('nextTabButton3');
            // Add a click event listener to the button
            nextTabButton3.addEventListener('click', function() {
                // Activate Tab 4
                const tab4Button = document.getElementById('tab4-tab');
                tab4Button.classList.add('active');
                tab4Button.setAttribute('aria-selected', 'true');
                // Show Tab 4's content
                const tab4Content = document.getElementById('tab4');
                tab4Content.classList.add('active', 'show');
                // Deactivate Tab 3
                const tab3Button = document.getElementById('tab3-tab');
                tab3Button.classList.remove('active');
                tab3Button.setAttribute('aria-selected', 'false');
                // Hide Tab 3's content
                const tab3Content = document.getElementById('tab3');
                tab3Content.classList.remove('active', 'show');
            });
        </script>
    @endpush
@endonce

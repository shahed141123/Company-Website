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
                        <span class="breadcrumb-item active">RFQ Management</span>
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
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Register a Deal</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('rfq.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All RFQ
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body px-3">
                            <form method="post" action="{{ route('deal.store') }}" enctype="multipart/form-data">
                                @csrf


                                <div class="accordion padding" id="accordion_expanded">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#sales_manager">
                                                <i class="fas fa-plus-square me-3 fa-1x"></i> Assigned Sales Manager


                                            </button>
                                        </h2>
                                        <div id="sales_manager" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">


                                                <div class="row">


                                                    <div class="col-lg-3 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Sales Manager Name(Leader - L1)<span
                                                                    class="text-danger">*</span></p>
                                                        </div>
                                                        <div class="form-group text-secondary col-sm-8">
                                                            <select name="sales_man_id_L1" class="form-control select"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Choose" required>
                                                                <option></option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Sales Manager Name (Team - T1)</p>
                                                        </div>
                                                        <div class="form-group text-secondary col-sm-8">
                                                            <select name="sales_man_id_T1" class="form-control select"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Choose  ">
                                                                <option></option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Sales Manager Name (Team - T2)</p>
                                                        </div>
                                                        <div class="form-group text-secondary col-sm-8">
                                                            <select name="sales_man_id_T2" class="form-control select"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Choose ">
                                                                <option></option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Closed date </p>
                                                        </div>
                                                        <div class="form-group col-sm-8 text-secondary">
                                                            <input type="date" name="close_date" class="form-control" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mb-3">
                                                        <div class="col-sm-8">
                                                            <p class="mb-0">Deal Type <span class="text-danger">*</span>
                                                            </p>
                                                        </div>
                                                        <div class="form-group text-secondary col-sm-8">
                                                            <select name="deal_type" class="form-control select "
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Chose Deal Type">
                                                                <option></option>
                                                                <option class="form-select" value="new">
                                                                    New
                                                                </option>
                                                                <option class="form-select" value="renew">
                                                                    Renew</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#client_details">
                                                <i class="fas fa-plus-square me-3 fa-1x"></i> Client Details


                                            </button>
                                        </h2>
                                        <div id="client_details" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">

                                                <div class="row mb-3 p-2 border">
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="col-sm-8">
                                                            <p class="mb-0">Client Type <span
                                                                    class="text-danger">*</span></p>
                                                        </div>
                                                        <div class="form-group text-secondary col-sm-8">
                                                            <select name="client_type"
                                                                class="form-control select client_select"
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
                                                    <div class="col-lg-4 mb-3 client_display d-none">
                                                        <div class="col-sm-8">
                                                            <p class="mb-0">Select Client </p>
                                                        </div>
                                                        <div class="form-group text-secondary col-sm-8 basic-form">
                                                            <select name="client_id" class="form-control select clientID"
                                                                data-placeholder="Choose Client">
                                                                <option class="common_client"></option>
                                                                @foreach ($clients as $client)
                                                                    <option value="{{ $client->id }}">Name :
                                                                        {{ $client->name }}; Company Name :
                                                                        {{ $client->company_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3 partner_display d-none">
                                                        <div class="col-sm-8">
                                                            <p class="mb-0">Select Partner</p>
                                                        </div>
                                                        <div class="form-group text-secondary col-sm-8">
                                                            <select name="partner_id"
                                                                class="form-control select partnerID"
                                                                data-placeholder="Choose Partner">
                                                                <option class="common_partner"></option>
                                                                @foreach ($partners as $partner)
                                                                    <option value="{{ $partner->id }}">Name :
                                                                        {{ $partner->name }}; Company Name :
                                                                        {{ $partner->company_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mt-3 partner_account d-none text-warning">
                                                        <div class="form-check">
                                                            <input class="form-check-input account" type="checkbox"
                                                                value="partner" name="account" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Create Partner Account
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mt-3 client_account d-none text-warning">
                                                        <div class="form-check">
                                                            <input class="form-check-input account" type="checkbox"
                                                                value="client" name="account" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Create Client Account
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="center mb-3 bg-gray p-1 text-center">
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

                                                <div class="row mb-3 p-2 border">

                                                    <div class="col-lg-2 mb-3">

                                                        <div class="col-sm-12">
                                                            <p class="mb-0"> Name<span class="text-danger">*</span> </p>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="text" name="name"
                                                                class="form-control maxlength" maxlength="100" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Email<span class="text-danger">*</span> </p>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="email" name="email"
                                                                class="form-control maxlength" maxlength="100" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Phone<span class="text-danger">*</span> </p>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="text" name="phone"
                                                                class="form-control maxlength" maxlength="100" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Company Name </p>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="text" name="company_name"
                                                                class="form-control maxlength" maxlength="200" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Designation </p>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="text" name="designation"
                                                                class="form-control maxlength" maxlength="100" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">Address </p>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="text" name="address"
                                                                class="form-control maxlength" maxlength="200" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3 user_password d-none">
                                                        <div class="col-sm-12">
                                                            <p class="mb-0">User Password </p>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="password" name="password"
                                                                class="form-control maxlength" maxlength="100" />
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#add_product">
                                                <i class="fas fa-plus-square me-3 fa-1x"></i> Add Product


                                            </button>
                                        </h2>
                                        <div id="add_product" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">

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
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 text-secondary">

                                            <button class="btn btn-primary px-2 mt-5" name="action" type="submit"
                                                id="submitbtn">
                                                Send For Price
                                                <i class="ph-paper-plane-tilt mx-2"></i>
                                            </button>


                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#closed_January_item1">
                                                <i class="fas fa-plus-square me-3 fa-1x"></i> Terms & Condition
                                            </button>
                                        </h2>
                                        <div id="closed_January_item1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">Validity </th>
                                                            <td width="22%">
                                                                <input type="text" name="validity"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="7 Days from the PQ date.Offer may change on the bank forex rate or stock availability" />
                                                            </td>
                                                            <th width="10%">Payment </th>
                                                            <td width="22%">
                                                                <input type="text" name="payment"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="200% advanced payment with Work Order for Renewal order Excuation" />
                                                            </td>
                                                            <th width="10%">Payment Mode </th>
                                                            <td width="22%">
                                                                <input type="text" name="payment_mode"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="Payment must be through Cheque/EFTN/WT & hit in the NGen IT account" />
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th width="10%">Delivery </th>
                                                            <td width="22%">
                                                                <input type="text" name="delivery"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="3 business wks upon receiving of WO & Payment.Extended time may require for disaster issues" />
                                                            </td>
                                                            <th width="10%">Delivery Location </th>
                                                            <td width="22%">
                                                                <input type="text" name="delivery_location"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="Automatice Renewal Activation to the Licenses & Client's Console Panel" />
                                                            </td>
                                                            <th width="10%">Product & Order </th>
                                                            <td width="22%">
                                                                <input type="text" name="product_order"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="May reject/modify order on any dispute in pr. price or product non-availability during execuation" />
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th width="10%">Installation Support </th>
                                                            <td width="22%">
                                                                <input type="text" name="installation_support"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="Not Applicable. Local Support is Not Included with this Cost as per requirements" />
                                                            </td>
                                                            <th width="10%">Pmt Condition </th>
                                                            <td width="22%">
                                                                <input type="text" name="pmt_condition"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="1.5% penalty per week on late from 7 days of / Payment Date" />
                                                            </td>
                                                            <th width="10%">Terms Nine </th>
                                                            <td width="22%">
                                                                <input type="text" name="terms_nine"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="" />
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th width="10%">Terms Ten </th>
                                                            <td width="22%">
                                                                <input type="text" name="terms_ten"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="" />
                                                            </td>
                                                            <th width="10%">Terms Eleven </th>
                                                            <td width="22%">
                                                                <input type="text" name="terms_eleven"
                                                                    class="form-control maxlength" maxlength="200"
                                                                    value="" />
                                                            </td>


                                                        </tr>


                                                    </thead>

                                                </table>
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
@endsection

@once
    @push('scripts')
        <script>
            $('.client_select').on('change', function() {

                var client_value = $(this).find(":selected").val();

                if (client_value == 'client') {
                    $(".client_display").removeClass("d-none");
                    $(".partner_display").addClass("d-none");

                } else if (client_value == 'partner') {
                    $(".partner_display").removeClass("d-none");
                    $(".client_display").addClass("d-none");

                } else {
                    $(".partner_display").addClass("d-none");
                    $(".client_display").addClass("d-none");
                }

            });
        </script>

        <script>
            $('thead').on('click', '.addRow', function() {
                var tr = "<tr>" +
                    // "<td>"+
                    //     "<div class='basic-form'>"+
                    //         "<select name='product_name[]' class='form-select'>"+
                    //             "<option>Choose Product</option>"+
                    //             "@foreach ($products as $product)"+
                    //                 "<option value='{{ $product->name }}'>{{ $product->name }}</option>"+
                    //             "@endforeach"+
                    //         "</select>"+
                    //     "</div>"+
                    // "</td>"+
                    "<td> <input type='text' class='form-control' name='item_name[]' placeholder='Product Name' required></td>" +
                    "<td> <input type='text' class='form-control' name='qty[]' placeholder='Quantity' required></td>" +
                    "<td> <input type='text' class='form-control' name='unit_price[]' ></td>" +
                    "<td> <input type='text' class='form-control' name='regular_discount[]' ></td>" +
                    "<td> <a href='javascript:void(0)' class='btn btn-danger removeRow'><i class='ph-minus'></i></a></td>" +
                    "</tr>"
                $('.repeater').append(tr);
            });

            $('tbody').on('click', '.removeRow', function() {
                $(this).parent().parent().remove();
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="partner_id"]').on('change', function() {
                    var partner_id = $(this).val();
                    //alert(partner_id);
                    // alert($('select[name="client_id"]').val());
                    // alert($('select[name="partner_id"]').val());
                    if (partner_id) {
                        $.ajax({
                            url: "{{ url('admin/partner/ajax') }}/" + partner_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('input[name="name"]').val(data.name);
                                $('input[name="email"]').val(data.primary_email_address);
                                $('input[name="company_name"]').val(data.company_name);
                                $('input[name="address"]').val(data.company_address);
                                $('input[name="phone"]').val(data.phone_number);

                                //$('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                            },

                        });
                    }

                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="client_id"]').on('change', function() {
                    var client_id = $(this).val();
                    //alert(client_id);
                    // alert($('select[name="client_id"]').val());
                    // alert($('select[name="partner_id"]').val());
                    if (client_id) {
                        $.ajax({
                            url: "{{ url('admin/client/ajax') }}/" + client_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('input[name="name"]').val(data.name);
                                $('input[name="email"]').val(data.email);
                                $('input[name="phone"]').val(data.phone);
                                $('input[name="address"]').val(data.address);
                                //$('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                            },

                        });
                    }
                });
            });
        </script>

        <script>
            $('select[name="client_type"]').on('change', function() {
                var client_type = $(this).val();

                if (client_type == 'partner') {
                    $('select[name="client_id"]').val('').change();
                } else if (client_type == 'client') {
                    $('select[name="partner_id"]').val('').change();
                } else {
                    $('select[name="client_id"]').val('').change();
                    $('select[name="partner_id"]').val('').change();
                }

            });
        </script>

        <script>
            $('select[name="client_type"]').on('change', function() {
                var client_type = $(this).find(":selected").val();
                //alert(client_type)

                if (client_type == 'partner') {
                    $('.partner_account').removeClass('d-none');
                    $('.client_account').addClass('d-none');
                    $('select[name="partner_id"]').on('change', function() {
                        var partner = $('select[name="partner_id"]').find(":selected").val();
                        if (partner != null) {
                            $('.partner_account').addClass('d-none');
                            $('input[name="password"]').val('');
                        } else {
                            $('.partner_account').removeClass('d-none');
                        }
                    });
                }
                if (client_type == 'client') {
                    $('.client_account').removeClass('d-none');
                    $('.partner_account').addClass('d-none');
                    $('select[name="client_id"]').on('change', function() {
                        var client = $('select[name="client_id"]').find(":selected").val();
                        if (client != null) {
                            $('.client_account').addClass('d-none');
                            $('input[name="password"]').val('');
                        } else {
                            $('.client_account').removeClass('d-none');
                        }
                    });
                }

            });

            $('.account').on('click', function() {
                if ($('.account').is(':checked')) {
                    $('.user_password').removeClass('d-none');
                } else {
                    $('.user_password').addClass('d-none');
                }
            });


            $("input[name='phone']").on('keyup change', function() {
                var password = $("input[name='phone']").val();
                $("input[name='password']").val(password);
            });
        </script>

        <script>
            $('.client_select').on('change', function() {

                $('input[name="name"]').val('');
                $('input[name="email"]').val('');
                $('input[name="company_name"]').val('');
                $('input[name="address"]').val('');
                $('input[name="phone"]').val('');

                // $('.clientID').prop('selected', false);
                // $('.partnerID').prop("selected", false);
                // $(".clientID option[class='common_client']").prop('selected', true);
                // $(".partnerID option[class='common_partner']").prop('selected', true);
                // $('.clientID').attr('placeholder', 'Choose Client');
                // $('.partnerID').attr('placeholder', 'Choose Partner');

            });
        </script>
    @endpush
@endonce

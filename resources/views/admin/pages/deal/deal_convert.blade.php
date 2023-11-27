@extends('admin.master')
@section('content')
    <style>
        .select2-selection--single {
            border-radius: 0px;
            height: 42px !important;
            padding: 13px 7px 10px !important;
        }

        .wizard>.steps {
            background: #f1f4f9;
            margin-bottom: 1rem;
        }
    </style>
    {{-- Content Start --}}
    <div class="content-wrapper">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('business.index') }}" class="breadcrumb-item">Business</a>
                        <a href="{{ route('rfq-manage.index') }}" class="breadcrumb-item">RFQ Management</a>
                        <span class="breadcrumb-item active">Convert RFQ To Deal</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        {{-- Page Header End --}}
        <div class="fluid-container">
            <div class="row mt-1">
                <div class="col-lg-10 offset-lg-1">
                    <!--Employeement Form with validation -->
                    <div class="card">
                        <div class="card-header rounded-0 bg-secondary p-0 m-0">
                            {{-- <a href="{{ route('') }}" type="button"
                                class="text-white btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-arrow-left13"></i>
                                </span> Back </a> --}}
                            <h6 class="text-white p-0 mb-0 text-center me-2 pt-1">Convert To Deal - ({{ $rfq->rfq_code }})
                            </h6>
                        </div>
                        <form method="post" action="{{ route('convert.deal', $rfq->id) }}"
                            class="wizard-form steps-validation" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h6>Assigned Sales Persons</h6>
                            <fieldset>
                                <div class="row mb-3">
                                    <div class="col-lg-6 pt-1">
                                        <div class="mb-1">
                                            <label class="p-0 text-start text-black">Sales Manager Name (Leader - L1)
                                                <span class="text-danger">*</span></label>
                                            <select name="sales_man_id_L1" class="form-select w-100 select-wizard"
                                                style="height: 42px !important;" data-placeholder="Select Category Name..."
                                                data-allow-clear="true" required>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        {{ $rfq->sales_man_id_L1 == $user->id ? 'selected' : '' }}>
                                                        {{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pt-1">
                                        <div class="mb-1">
                                            <label class="p-0 text-start text-black">Sales Manager Name (Team - T1)</label>
                                            <select name="sales_man_id_T1" class="form-select w-100 select-wizard"
                                                style="height: 42px !important;" data-placeholder="Select Category Name..."
                                                data-allow-clear="true">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        {{ $rfq->sales_man_id_T1 == $user->id ? 'selected' : '' }}>
                                                        {{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pt-1">
                                        <div class="mb-1">
                                            <label class="p-0 text-start text-black">Sales Manager Name (Team - T2)</label>
                                            <select name="sales_man_id_T2" class="form-select w-100 select-wizard"
                                                style="height: 42px !important;" data-placeholder="Select Category Name..."
                                                data-allow-clear="true">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        {{ $rfq->sales_man_id_T2 == $user->id ? 'selected' : '' }}>
                                                        {{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pt-1">
                                        <div class="mb-1">
                                            <label class="p-0 text-start text-black">Closed date</label>
                                            <input type="date" name="close_date" class="form-control"
                                                value="{{ $rfq->close_date }}" />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h6>Client Details</h6>
                            <fieldset>
                                <div class="row mb-0">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4 mb-3">
                                            <div class="mb-1">
                                                <label class="p-0 text-start text-black">Client Type</label>
                                                <select name="client_type"
                                                    class="form-select w-100 select-wizard client_select"
                                                    style="height: 42px !important;" data-placeholder="Chose client Type"
                                                    data-allow-clear="true" required>
                                                    <option class="form-select" value="client"
                                                        {{ $rfq->client_type == 'client' ? 'selected' : '' }}> Client
                                                    </option>
                                                    <option class="form-select" value="partner"
                                                        {{ $rfq->client_type == 'partner' ? 'selected' : '' }}> Partner
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 client_display d-none">
                                            <div class="mb-1 basic-form">
                                                <label class="p-0 text-start text-black">Select Client</label>
                                                <select name="client_id" class="form-select w-100 select-wizard clientID"
                                                    data-placeholder="Choose Client" data-allow-clear="true">
                                                    <option class="common_client"></option>
                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->id }}"
                                                            {{ $rfq->client_id == $client->id ? 'selected' : '' }}>
                                                            Name : {{ $client->name }}; Company Name :
                                                            {{ $client->company_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 partner_display d-none">
                                            <div class="mb-1">
                                                <label class="p-0 text-start text-black">Select Partner</label>
                                                <select name="partner_id" class="form-select w-100 select-wizard partnerID"
                                                    style="height: 42px !important;" data-placeholder="Choose Partner"
                                                    data-allow-clear="true">
                                                    <option class="common_partner"></option>
                                                    @foreach ($partners as $partner)
                                                        <option value="{{ $partner->id }}"
                                                            {{ $rfq->partner_id == $partner->id ? 'selected' : '' }}> Name
                                                            : {{ $partner->name }}; Company Name :
                                                            {{ $partner->company_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 partner_account d-none text-warning">
                                            <div class="mb-1">
                                                <input class="form-check-input account" type="checkbox" value="partner"
                                                    name="account" id="flexCheckDefault">
                                                <label class="p-0 text-start text-black">Create Partner Account</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 client_account d-none text-warning">
                                            <div class="mb-1">
                                                <input class="form-check-input account" type="checkbox" value="client"
                                                    name="account" id="flexCheckDefault">
                                                <label class="p-0 text-start text-black">Create Client Account</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <div class="center bg-gray p-1 text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="regular" id="flexRadioDefault1"
                                                    {{ $rfq->regular == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexRadioDefault1"> Regular Discount
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="special" id="flexRadioDefault2"
                                                    {{ $rfq->special == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexRadioDefault2"> Special Discount
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="tax_status" id="flexRadioDefault3"
                                                    {{ $rfq->tax_status == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexRadioDefault3"> Tax / VAT
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-12">
                                        <div class="card rounded-0">
                                            <div class="card-header text-center rounded-0 bg-secondary text-white">User
                                                Details</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-1">
                                                            <label for="">Name <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="name"
                                                                class="form-control maxlength" maxlength="100"
                                                                value="{{ $rfq->name }}" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-1">
                                                            <label for="">Email <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="email" name="email"
                                                                class="form-control maxlength" maxlength="100"
                                                                value="{{ $rfq->email }}" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-1">
                                                            <label for="">Phone <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="phone"
                                                                class="form-control maxlength" maxlength="100" required
                                                                value="{{ $rfq->phone }}" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-1">
                                                            <label for="">Company Name
                                                            </label>
                                                            <input type="text" name="company_name"
                                                                class="form-control maxlength" maxlength="200" required
                                                                value="{{ $rfq->phone }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-1">
                                                            <label for="">Designation
                                                            </label>
                                                            <input type="text" name="designation"
                                                                class="form-control maxlength" maxlength="100"
                                                                value="{{ $rfq->designation }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-1">
                                                            <label for="">Address
                                                            </label>
                                                            <input type="text" name="address"
                                                                class="form-control maxlength" maxlength="100"
                                                                value="{{ $rfq->address }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h6>Product Details</h6>
                            <fieldset>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th style="padding:7px !important;"> Product Name </th>
                                                        <th style="padding:7px !important;"> Qty <span
                                                                class="text-danger">*</span></th>
                                                        <th style="padding:7px !important;"> Unit Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="repeater">
                                                    <tr>
                                                        <td style="background: #eee; color: black;">
                                                            {{ $rfq_product->product_name }}
                                                            <input type="hidden" class="form-control" name="item_name[]"
                                                                value="{{ $rfq_product->product_name }}" required>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="qty[]"
                                                                required value="{{ $rfq_product->qty }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="unit_price[]">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h6>Terms & Condition</h6>
                            <fieldset>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered table-striped">
                                            <thead style="background-color: #eee !important; color: #000 !important;">
                                                <tr>
                                                    <th width="15%">Validity </th>
                                                    <td width="22%">
                                                        <input type="text" name="validity"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="7 Days from the PQ date.Offer may change on the bank forex rate or stock availability" />
                                                    </td>
                                                    <th width="15%">Payment </th>
                                                    <td width="22%">
                                                        <input type="text" name="payment"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="100% advanced payment with Work Order for Renewal order Excuation" />
                                                    </td>
                                                    <th width="15%">Payment Mode </th>
                                                    <td width="22%">
                                                        <input type="text" name="payment_mode"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="Payment must be through Cheque/EFTN/WT & hit in the NGen IT account" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="15%">Delivery </th>
                                                    <td width="22%">
                                                        <input type="text" name="delivery"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="3 business wks upon receiving of WO & Payment.Extended time may require for disaster issues" />
                                                    </td>
                                                    <th width="15%">Delivery Location </th>
                                                    <td width="22%">
                                                        <input type="text" name="delivery_location"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="Automatic Renewal Activation to the Licenses & Client's Console Panel" />
                                                    </td>
                                                    <th width="15%">Product & Order </th>
                                                    <td width="22%">
                                                        <input type="text" name="product_order"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="May reject/modify order on any dispute in pr. price or product non-availability during execuation" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="15%">Installation Support </th>
                                                    <td width="22%">
                                                        <input type="text" name="installation_support"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="Not Applicable. Local Support is Not Included with this Cost as per requirements" />
                                                    </td>
                                                    <th width="15%">Pmt Condition </th>
                                                    <td width="22%">
                                                        <input type="text" name="pmt_condition"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="1.5% penalty per week on late from 7 days of / Payment Date" />
                                                    </td>
                                                    <th width="15%">Terms Nine </th>
                                                    <td width="22%">
                                                        <input type="text" name="terms_nine"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="15%">Terms Ten </th>
                                                    <td width="22%">
                                                        <input type="text" name="terms_ten"
                                                            class="form-control maxlength" maxlength="200"
                                                            value="" />
                                                    </td>
                                                    <th width="15%">Terms Eleven </th>
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
                                <div class="mt-5"
                                    style="display: flex;justify-content: end;margin-bottom: -39px;z-index: 999;position: relative;width: 80px;">
                                    <button class="btn btn-primary" id="custom-submit" type="submit">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- Employeement Form with validation -->
                </div>
            </div>
        </div>
    </div>
    {{-- Content End --}}
    {{-- Script Start --}}
@endsection

@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.select-wizard').select2();
            });
        </script>

        <script>
            $(document).ready(function() {
                var client_value = $('.client_select').find(":selected").val();

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
            });
        </script>



        <script>
            $(document).ready(function() {
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
            });
        </script>

        <script>
            $(document).ready(function() {
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
                                $('input[name="password"]').val('').change();
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
                                $('input[name="password"]').val('').change();
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
                var password = $("input[name='phone']").val();
                $("input[name='password']").val(password);
            });
        </script>
    @endpush
@endonce

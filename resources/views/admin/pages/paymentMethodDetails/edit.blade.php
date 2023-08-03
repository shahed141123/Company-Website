@extends('admin.master')
@section('content')
    <style>
        .hide-form-field {
            display: none;
        }

        .show-form-field {
            display: unset;
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
                        <a href="{{ route('payment-method-details.index') }}" class="breadcrumb-item">Payment Method Details
                            Management</a>
                        <span class="breadcrumb-item active">Edit</span>
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
        <div class="content mx-auto" style="width: 60%;">
            <div class="container">
                <div class="row d-flex align-items-center rounded main_bg text-white py-1">
                    <div class="col-lg-6">
                        <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                            href="{{ route('payment-method-details.index') }}">
                            <i class="fa-solid fa-arrow-left main_color"></i>
                        </a>
                    </div>
                    <div class="col-lg-6 text-end">
                        <span class="">Edit Payment Method Details Form</span>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="container">
                        <form method="post"
                            action="{{ route('payment-method-details.update', $paymentMethodDetail->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12 gx-0 mb-1">
                                    <div id="table1" class="mb-1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Region Name</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group text-secondary ">
                                                            <select name="region_id" class="form-control form-contro select"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Chose Region Name ">
                                                                <option></option>
                                                                @foreach ($regions as $region)
                                                                    <option @selected($region->id == $paymentMethodDetail->region_id)
                                                                        value="{{ $region->id }}">
                                                                        {{ $region->region_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Type</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group text-secondary">
                                                            <select name="type"
                                                                class="form-control form-contro select product-type-switcher"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Chose a type ">
                                                                <option></option>
                                                                <option @selected($paymentMethodDetail->type == 'bank') value="bank">Bank
                                                                </option>
                                                                <option @selected($paymentMethodDetail->type == 'ach') value="ach">Ach
                                                                </option>
                                                                <option @selected($paymentMethodDetail->type == 'check') value="check">Check
                                                                </option>
                                                                <option @selected($paymentMethodDetail->type == 'online-paypal') value="online-paypal">
                                                                    Online Paypal</option>
                                                                <option @selected($paymentMethodDetail->type == 'online-payoneer')
                                                                    value="online-payoneer">Online Payoneer</option>
                                                                <option @selected($paymentMethodDetail->type == 'stripe') value="stripe">Stripe
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row bg-white rounded  px-2 py-2">
                                <div class="col-lg-6 gx-1">
                                    <div id="table2" class="">
                                        <div class="">
                                            <div id="card_link" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Card Link </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="card_link" value="{{ $paymentMethodDetail->card_link }}" 
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="card_note" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Card Note </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="card_note" value="{{ $paymentMethodDetail->card_note }}" 
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="bank_name" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Bank Name </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="bank_name" value="{{ $paymentMethodDetail->bank_name }}" 
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="bank_address" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Bank Address </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="bank_address" value="{{ $paymentMethodDetail->bank_address }}" 
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="account_name" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Account Name </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="account_name" value="{{ $paymentMethodDetail->account_name }}" 
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="account_address" class=" hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Account Address </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="account_address" value="{{ $paymentMethodDetail->account_address }}"
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="col ">
                                                    <button id="button" type="submit"
                                                        class="submit_btn from-prevent-multiple-submits hide-form-field form-field"
                                                        style="padding: 4px 9px;">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 gx-1">
                                    <div id="table2">
                                        <div class="">
                                            <div id="account_type" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Account Type </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="account_type" value="{{ $paymentMethodDetail->account_type }}"
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="branch" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Branch </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="branch" value="{{ $paymentMethodDetail->branch }}"
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="routing" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Routing </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="routing" value="{{ $paymentMethodDetail->routing }}"
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="check_address" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Check Address </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="check_address" value="{{ $paymentMethodDetail->check_address }}"
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="check_note" class="hide-form-field form-field mb-1">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="col-sm-4 text-start">
                                                        <span>Check Note </span>
                                                    </div>
                                                    <div class="form-group col-sm-8 text-secondary">
                                                        <input type="text" name="check_note" value="{{ $paymentMethodDetail->check_note }}"
                                                            class="form-control form-control-sm" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-secondary">
                                                <input id="button" type="submit"
                                                    class="btn btn-primary hide-form-field form-field" value="Submit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        jQuery("document").ready(function() {
            $('.product-type-switcher').on('change', function() {
                $('.form-field').removeClass('show-form-field');

                function showCardLinkAttribute() {
                    $("#card_link").addClass("show-form-field");
                }

                function showCardNoteAttribute() {
                    $("#card_note").addClass("show-form-field");
                }

                function showBankNameAttribute() {
                    $("#bank_name").addClass("show-form-field");
                }

                function showBankAddressAttribute() {
                    $("#bank_address").addClass("show-form-field");
                }

                function showAccountNameAttribute() {
                    $("#account_name").addClass("show-form-field");
                }

                function showAccountAddressAttribute() {
                    $("#account_address").addClass("show-form-field");
                }

                function showAccountTypeAttribute() {
                    $("#account_type").addClass("show-form-field");
                }

                function showBranchAttribute() {
                    $("#branch").addClass("show-form-field");
                }

                function showRoutingAttribute() {
                    $("#routing").addClass("show-form-field");
                }

                function showCheckAddressAttribute() {
                    $("#check_address").addClass("show-form-field");
                }

                function showCheckNoteAttribute() {
                    $("#check_note").addClass("show-form-field");
                }

                function showButtonAttribute() {
                    $("#button").addClass("show-form-field");
                }

                switch ($(".product-type-switcher option:selected").val()) {
                    case "bank":
                        showBankNameAttribute();
                        showBankAddressAttribute();
                        showAccountNameAttribute();
                        showAccountAddressAttribute();
                        showBranchAttribute();
                        showRoutingAttribute();
                        showButtonAttribute();
                        break;
                    case 'ach':
                        showBankNameAttribute();
                        showAccountNameAttribute();
                        showAccountTypeAttribute();
                        showRoutingAttribute();
                        showButtonAttribute();
                        break;
                    case 'check':
                        showAccountNameAttribute();
                        showCheckAddressAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    case 'online-paypal':
                        showCardLinkAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    case 'online-payoneer':
                        showCardLinkAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    case 'stripe':
                        // showAccountNameAttribute();
                        showCardLinkAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    default:
                }
            });
        });
    </script>
@endpush

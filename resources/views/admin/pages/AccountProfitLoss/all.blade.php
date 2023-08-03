@extends('admin.master')
@section('content')
<style>
    .pagination-flat .previous{
        margin-right: 30px !important;
    }
    .dataTables_paginate {
        margin: 0px;
        padding: 0px;
        margin-right: 15px;
    }
    .nav-tabs .nav-link.active {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        color: #ffffff !important;
        background-color: #247297;
        border: none !important;
        border-color: transparent !important;
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
                        <span class="breadcrumb-item active">Account Profit Loss Management</span>
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
            <!-- Table components -->
            <div class="card">
                <table class="table table-bordered table-xs table-responsive text-center">
                    <tr>
                        <th colspan="7" class="py-2" style="background: #247297;">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    {{-- Add Details Start --}}
                                    <div class="text-success nav-link cat-tab3"
                                        style="position: relative; z-index: 999; margin-bottom: -40px;">
                                        <a href="" data-bs-toggle="modal"
                                        data-bs-target="#modal_account_profitLoss">
                                            <div class="d-flex align-items-center">
                                                <span class="ms-2 icon_btn" style="font-weight: 800;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add Solution Details">
                                                    <i class="ph-plus icons_design text-white"></i> </span>
                                                <span class="ms-1" style="color: #ffff;">Add</span>
                                            </div>
                                        </a>
                                    </div>
                                    {{-- Add Details End --}}
                                </div>
                                <div class="col-lg-6 col-sm-12 text-end text-white">
                                    <span>Account Sales Profit & Loss Report FY22</span>
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th class=" text-info">Total Sales </th>
                        <th class="  text-info"> Total Product Cost </th>
                        <th class=" text-info">Gross Profit </th>
                        <th class=" text-info">Other Cost </th>
                        <th class=" text-info">Tax/Vat </th>
                        <th class=" text-info">Total Cost </th>
                        <th class=" text-info">Net Profit </th>
                    </tr>
                    <tr>
                        <td class=" text-black"> 0.00</td>
                        <td class="  text-black"> 0.00</td>
                        <td class=" text-black"> 0.00</td>
                        <td class=" text-black"> 0.00</td>
                        <td class=" text-black"> 0.00</td>
                        <td class=" text-black"> 0.00 </td>
                        <td class=" text-black"> 0.00</td>
                    </tr>
                </table>
            </div>
            <!-- Basic modal for profit -->
            @include('admin.pages.AccountProfitLoss.par.add-modal')

            <!-- model-end -->
            <!-- Small modal two sart-->
            <form action="#" class="form-validate-jquery-sas" method="post" enctype="multiple/form-data">
                <div id="modalSAS-Show" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">SAS Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-xs table-bordered">
                                    <tr>
                                        <th colspan="3" class="text-center"> PRODUCT COST </th>
                                    </tr>
                                    <tr>
                                        <th> COG </th>
                                        <td> </td>
                                        <td> 3,469,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th> Bank & Remittance Charge </th>
                                        <td> <input type="number" name="bankRemittanceCharge"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th> Customs & Duty </th>
                                        <td> <input type="number" name="CustomerDuty" class="form-control form-control-sm"
                                                placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th> Shipping & Handling Cost </th>
                                        <td> <input type="number" name="ShippingHandlingCost"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th> HR , Office & Utility Cost </th>
                                        <td> <input type="number" name="HROfficUtilityCost"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th> Sales / Consultancy Comission</th>
                                        <td> <input type="number" name="SalesConsultancyComission"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th> Bank Loan / Liability / Debt</th>
                                        <td> <input type="number" name="BankLoanLiabilityDebt"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Miscellenious</th>
                                    </tr>
                                    <tr>
                                        <th>Miscellenious</th>
                                        <td> <input type="number" name="Miscellenious"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">CapEx</th>
                                    </tr>
                                    <tr>
                                        <th>Loan / Capital / Partner Share</th>
                                        <td> <input type="number" name="LoanCapitalPartnerShare"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                    <tr>
                                        <th>Tax/VAT</th>
                                        <td> <input type="number" name="Misccellenious"
                                                class="form-control form-control-sm" placeholder="00"> </td>
                                        <td> 9,830.00 </td>
                                    </tr>
                                </table>
                                <button type="button" class="btn bg-danger float-end text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal_account_profitLoss"> Edit </button>
                                <!-- <input type="submit" class="btn btn-primary btn-sm float-end" name="SAS-btn"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /small modal two end -->
            <div class="">
                <h3 class="text-info text-center">Monthly Account Profit Loss Management</h3>
                <!-- tab menu start-->
                <ul class="w-75 mx-auto nav nav-tabs mb-1 d-flex align-items-center justify-content-center" role="tablist" style="    border-bottom: 1px solid #247297;">
                    <li class="nav-item" role="presentation">
                        <a href="#js-January-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                            role="tab" tabindex="-1">
                            January
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            February
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="March" tabindex="-1">
                            March
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            April
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-May-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            May
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-June-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            June
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            July
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            August
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            September
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            October
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            November
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            December
                        </a>
                    </li>
                </ul>
                <!-- tab menu end -->
                <!-- monthly table view start  -->
                <div class="card-body">
                    @include('admin.pages.AccountProfitLoss.par.table')
                    <!-- monthly table view End  -->
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
        @include('admin.pages.AccountProfitLoss.par.edit-modal')
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $('.accountProfitLossDT').DataTable({
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        "iDisplayLength": 10,
        "lengthMenu": [10, 25, 30, 50],
        columnDefs: [{
            orderable: false,
            targets: [10],
        }, ],
    });
</script>
    <script type="text/javascript">
        $("#sales_price, #cost_price").on("input", function() {
            var sales_price = $("#sales_price").val();
            var cost_price = $("#cost_price").val();
            var value = parseFloat(sales_price) - parseFloat(cost_price);
            $("#profit").val(value.toFixed(2));

            if (value > 0) {
                $("#profit").val(value.toFixed(2));
                $('#loss').val(null);
            } else {
                $("#loss").val(value.toFixed(2));
                $('#profit').val(null);
            }
        });
    </script>
    <script>
        $('#editprofitmodal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal


            var modal = $(this)

            // var unitprice = button.data('unitprice');
            var myproduct = button.data('myproduct');
            // var myname    = button.data('myname');
            // var qty       = button.data('qty');

            // modal.find('.modal-title').text('Update Unit Price For : ' + myname)
            // modal.find('.modal-body .productname').val(myname)
            // modal.find('.modal-body .ID').val(myproduct)
            // modal.find('.modal-body .Unitprice').val(unitprice)
            // modal.find('.modal-body .quantity').val(qty)
        })
    </script>
@endpush

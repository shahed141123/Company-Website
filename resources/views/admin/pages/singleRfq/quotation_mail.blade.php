@extends('admin.master')

@section('content')
    <style>
        .table>:not(caption)>*>* {
            padding: 5px;
        }

        @media only screen and (max-width: 767px) {
            .table>:not(caption)>*>* {
                padding: 5px;
                font-size: 9px;
            }


            .rfq-tabs-link {
                font-size: 10px;
            }

            .fa-gear {
                font-size: 10.1px !important;
                padding: 3px;
            }

            .form-control-sm {
                padding: 0px 0px !important;
                font-size: 10px;
            }

            .rfqcalculationinput {
                font-size: 10px;
            }

            .form-setting {
                padding: 0px 40px !important;
            }

            .form-select {
                font-size: 12px !important;
                height: 25px !important;
                padding: 0px 0px 0px 20px !important;
                border-radius: 2px !important;
                width: 130px;
            }

            .qutatation-form {
                border-collapse: collapse !important;
                width: 100% !important;
                margin: auto !important;
                background-color: #f4f4f4 !important;
                box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px !important;
            }

            .table-title-font {
                font-size: 10px;
            }
        }

        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }
    </style>
    <div class="card-body p-lg-4 p-0">
        <!-- Nav tabs -->
        <div class="text-center">
            <h3 class="mb-0 py-2">Bypass Process</h3>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-center align-items-center border-0" id="myTab" role="tablist">
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link rfq-tabs-link" id="quotation-tab" data-bs-toggle="tab" data-bs-target="#quotation"
                    type="button" role="tab" aria-controls="quotation" aria-selected="true">
                    Quotation
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link rfq-tabs-link active" id="cog-tab" data-bs-toggle="tab" data-bs-target="#cog"
                    type="button" role="tab" aria-controls="cog" aria-selected="false">
                    Cost Of Goods
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link rfq-tabs-link" id="source-tab" data-bs-toggle="tab" data-bs-target="#source"
                    type="button" role="tab" aria-controls="source" aria-selected="false">
                    Source
                </button>
            </li>
            <li class="nav-item mb-0 ms-2" role="presentation">
                <button class="nav-link rfq-tabs-link bg-black" id="setting">
                    <i class="fa-solid fa-gear" style="font-size: 23.6px;"></i>
                </button>
            </li>
        </ul>
        <form id="quotationForm" action="" method="post">
            <div id="mysetting">
                <div class="fade-setting show" id="setting-show">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-7 mb-2">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-primary">
                                        <tbody>
                                            <tr>
                                                <td width="18%">
                                                    <select class="form-select" id="" name="country"
                                                        data-allow-clear="true" data-placeholder="Select Country">
                                                        <option value="">Select Country</option>
                                                        @foreach ($countires as $country)
                                                            <option value="{{ $country->country_code }}"
                                                                @selected(optional($rfq_country)->id == $country->id)>
                                                                {{ $country->country_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td width="18%">
                                                    <select class="form-select" id="" name="region"
                                                        data-allow-clear="true" data-placeholder="Select Region">
                                                        <option value="">Select Region</option>
                                                        <option value="bangladesh">Bangladesh</option>
                                                        <option value="singapore">Singapore</option>
                                                        <option value="middle_east">Middle East</option>
                                                        <option value="portugal">Portugal</option>
                                                    </select>
                                                </td>
                                                <td width="14%">
                                                    <select class="form-select" id="" name="currency">
                                                        <option value="taka" selected>Taka(Tk)</option>
                                                        <option value="euro">Euro(&euro;)</option>
                                                        <option value="dollar">Dollar($)</option>
                                                        <option value="pound">Pound(&pound;)</option>
                                                    </select>
                                                </td>
                                                <td width="12%">
                                                    <input type="number"
                                                        class="form-control form-control-sm form-setting border"
                                                        name="currency_rate" placeholder="Cur. Rate">
                                                </td>
                                                <td width="9%">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            id="flexCheckDefault" name="individual_tax">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Tax
                                                        </label>
                                                    </div>
                                                </td>
                                                <td width="12%">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            id="flexCheckDefault" name="vat_display">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            VAT / GST
                                                        </label>
                                                    </div>
                                                </td>
                                                <td width="16%">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            id="flexCheckDefault" name="special_discount_display">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Special Discount
                                                        </label>
                                                    </div>
                                                </td>
                                                {{-- <td width="10%">
                                                    <input type="number"
                                                        class="form-control form-control-sm form-setting border principal_discount_percentage"
                                                        name="principal_discount_percentage" placeholder="Pr. Disc(%)">
                                                </td> --}}
                                                {{-- <td width="10%">
                                                    <input type="number"
                                                        class="form-control form-control-sm form-setting border partner_discount_percentage"
                                                        name="partner_discount_percentage" placeholder="Extr. Disc(%)">
                                                </td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane" id="quotation" role="tabpanel" aria-labelledby="quotation-tab">
                    @include('admin.pages.singleRfq.partials.bypass_quotation')
                </div>
                <div class="tab-pane show active" id="cog" role="tabpanel" aria-labelledby="cog-tab">
                    @include('admin.pages.singleRfq.partials.bypass_cog')
                </div>
        </form>
        <div class="tab-pane" id="source" role="tabpanel" aria-labelledby="source-tab">
            @include('admin.pages.singleRfq.partials.bypass_source')
        </div>
    </div>

    </div>
@endsection
@once
    @push('scripts')
        {{-- <script>
            $(document).ready(function() {
                var quotationForm = $('#quotationForm');

                quotationForm.find('select[name="currency"]').on('change', function() {
                    var currencyValue = $(this).val();
                    // alert(currencyValue);
                    var currency = '';
                    if (currencyValue == 'taka') {
                        currency = 'TK';
                    } else if (currencyValue == 'dollar') {
                        currency = '$';
                    } else if (currencyValue == 'euro') {
                        currency = '&euro;';
                    } else if (currencyValue == 'pound') {
                        currency = '&pound;';
                    } else {
                        currency = "TK";
                    }
                    $('.currency').html(currency); // Update the currency input field
                });

                var initiallySelectedValue = $('select[name="currency"]').val();
                var currency = '';
                if (initiallySelectedValue == 'taka') {
                        currency = 'TK';
                    } else if (initiallySelectedValue == 'dollar') {
                        currency = '$';
                    } else if (initiallySelectedValue == 'euro') {
                        currency = '&euro;';
                    } else if (initiallySelectedValue == 'pound') {
                        currency = '&pound;';
                    } else {
                        currency = "TK";
                    }

                $('.currency').val(currency);
            });
            $(document).ready(function() {
                var quotationForm = $('#quotationForm');

                quotationForm.find('select[name="country"]').on('change', function() {
                    var countryValue = $(this).val();
                    // alert(countryValue);
                    var pq_code = '';
                    if (countryValue) {
                        pq_code = "PQ#: NG-" + countryValue;
                    } else {
                        pq_code = "PQ#: NG-";
                    }
                    $('input[name="pq_code"]').val(pq_code); // Update the pq_code input field
                });

                var initiallySelectedValue = $('select[name="country"]').val();
                var pq_code = '';
                if (initiallySelectedValue) {
                    pq_code = "PQ#: NG-" + initiallySelectedValue;
                } else {
                    pq_code = "PQ#: NG-";
                }

                $('input[name="pq_code"]').val(pq_code);
            });
        </script>
        <script>
            $(document).ready(function() {
                var quotationForm = $('#quotationForm');
                quotationForm.find('input[name="vat_display"]').on('click', function() {
                    if ($(this).is(":checked")) {
                        $('.vat_display').show();
                    } else if ($(this).is(":not(:checked)")) {
                        $('.vat_display').hide();
                    }
                });
                quotationForm.find('input[name="special_discount_display"]').on('click', function() {
                    if ($(this).is(":checked")) {
                        $('.special_discount_display').show();
                    } else if ($(this).is(":not(:checked)")) {
                        $('.special_discount_display').hide();
                    }
                });
                quotationForm.find('select[name="region"]').on('change', function() {
                    var regionValue = $(this).val();
                    var ngen_company_name = "NGEN IT LTD.";
                    var ngen_company_registration_number = "C-193116/2024";
                    if (regionValue == 'bangladesh') {
                        var ngen_company_name = "NGEN IT LTD.";
                        var ngen_company_registration_number = "C-193116/2024";

                    } else if (regionValue == 'singapore') {
                        var ngen_company_name = " NGEN IT PTE. LTD.";
                        var ngen_company_registration_number = "REG-NO: 20437861K";
                    }
                    $('input[name="ngen_company_name"]').val(ngen_company_name);
                    $('input[name="ngen_company_registration_number"]').val(ngen_company_registration_number);
                });
            });
        </script> --}}
        <script></script>
        <script>
            $(document).ready(function() {
                var quotationForm = $('#quotationForm');

                // Function to update currency field
                function updateCurrency(currencyValue) {
                    var currencyMap = {
                        'taka': 'TK',
                        'dollar': '$',
                        'euro': '&euro;',
                        'pound': '&pound;'
                    };
                    var currency = currencyMap[currencyValue] || 'TK';
                    $('.currency').html(currency); // Update the currency input field
                }

                // Update currency on currency select change
                quotationForm.find('select[name="currency"]').on('change', function() {
                    updateCurrency($(this).val());
                });

                // Initially set currency
                updateCurrency($('select[name="currency"]').val());

                // Function to update pq_code field
                function updatePQCode(countryValue) {
                    var pq_code = countryValue ? "PQ#: NG-" + countryValue : "PQ#: NG-";
                    $('input[name="pq_code"]').val(pq_code); // Update the pq_code input field
                }

                // Update pq_code on country select change
                quotationForm.find('select[name="country"]').on('change', function() {
                    updatePQCode($(this).val());
                });

                // Initially set pq_code
                updatePQCode($('select[name="country"]').val());

                // Show/hide VAT display
                quotationForm.find('input[name="vat_display"]').on('click', function() {
                    $('.vat_display').toggle($(this).is(":checked"));
                });

                // Show/hide special discount display
                quotationForm.find('input[name="special_discount_display"]').on('click', function() {
                    $('.special_discount').toggle($(this).is(":checked"));
                });

                // Update company name and registration number based on region
                quotationForm.find('select[name="region"]').on('change', function() {
                    var regionValue = $(this).val();
                    var companyInfoMap = {
                        'bangladesh': {
                            name: "NGEN IT LTD.",
                            registration_number: "C-193116/2024"
                        },
                        'singapore': {
                            name: "NGEN IT PTE. LTD.",
                            registration_number: "REG-NO: 20437861K"
                        }
                    };
                    var companyInfo = companyInfoMap[regionValue] || {
                        name: "NGEN IT LTD.",
                        registration_number: "C-193116/2024"
                    };
                    $('input[name="ngen_company_name"]').val(companyInfo.name);
                    $('input[name="ngen_company_registration_number"]').val(companyInfo.registration_number);
                });
            });
        </script>

        <script>
            function toggleVisibility() {
                var settingShow = document.getElementById('setting-show');
                var button = document.getElementById('setting');
                if (settingShow.classList.contains('show')) {
                    settingShow.classList.remove('show');
                    // Delay setting display to 'none' to allow transition to complete
                    setTimeout(function() {
                        settingShow.style.display = 'none';
                        button.classList.remove('active');
                    }, 500); // Duration should match the transition time
                } else {
                    settingShow.style.display = 'block';
                    // Trigger reflow to ensure the transition occurs
                    settingShow.offsetHeight; // Force reflow
                    settingShow.classList.add('show');
                    button.classList.add('active');
                }
            }

            document.getElementById('setting').addEventListener('click', toggleVisibility);
        </script>

        <script>
            function addRfqCalculationTableRow() {
                // Get the table body where new rows will be added
                const tableBody = document.querySelector('#myTable tbody.table_bottom_area');

                // Create a new row element
                const newRow = document.createElement('tr');
                newRow.classList.add('thd');

                // Create the inner HTML for the new row
                newRow.innerHTML = `
                <td>
                    <a class="border-0 p-0 text-danger bg-transparent" onclick="deleteRfqCalculationRow(this)" title="Delete Row"><i class="fa-regular fa-trash-can"></i></a>
                </td>
                <td></td>
                <td><input type="text" name="product_name[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="" style=""></td>
                <td><input type="text" name="qty[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value=""></td>
                <td><input type="text" name="principal_cost[]" class="form-control form-control-sm bg-transparent rfqcalculationinput principal_cost" value="0"></td>
                <td><input type="text" name="year[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1"></td>
                <td><input type="text" name="principal_discount_amount[]" class="form-control form-control-sm bg-transparent rfqcalculationinput principal_discount_amount" value="0"></td>
                <td><input type="text" name="principal_unit_total_amount_taka[]" class="form-control form-control-sm bg-transparent rfqcalculationinput principal_unit_total_amount_taka" value="0"></td>
                <td><input type="text" name="unit_office_cost[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
                <td><input type="text" name="unit_profit[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
                <td><input type="text" name="unit_others_cost[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
                <td><input type="text" name="unit_tax_vat[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
                <td><input type="text" name="unit_eu_price[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
                <td><input type="text" name="unit_partner_discount[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
                <td class="text-center"><input type="text" name="unit_partner_price[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
                `;

                // Append the new row to the table body
                tableBody.appendChild(newRow);

                // Update the serial numbers
                updateSerialNumbers();
            }

            function deleteRfqCalculationRow(element) {
                // Find the row to delete
                const row = element.closest('tr');

                // Remove the row from the table
                row.remove();

                // Update the serial numbers
                updateSerialNumbers();
            }

            function updateSerialNumbers() {
                // Get all the rows in the table body
                const rows = document.querySelectorAll('#myTable tbody.table_bottom_area tr.thd');

                // Update the serial number for each row
                rows.forEach((row, index) => {
                    row.querySelector('td:nth-child(2)').textContent = index + 1;
                });
            }

            // Example function to initialize event listeners on page load
            document.addEventListener('DOMContentLoaded', function() {
                // Add event listener for adding new row
                document.querySelector('.fa-plus').addEventListener('click', addRfqCalculationTableRow);

                // Add event listener for deleting row on existing delete buttons
                document.querySelectorAll('.fa-trash-can').forEach(button => {
                    button.addEventListener('click', function() {
                        deleteRfqCalculationRow(button);
                    });
                });

                // Initialize serial numbers
                updateSerialNumbers();
            });
        </script>




        <script>
            $(document).ready(function() {
                var quotationForm = $('#quotationForm');

                quotationForm.find('input').on('keyup change', function() {
                    // Extract input value and name
                    var inputValue = $(this).val();
                    var inputName = $(this).attr('name');
                    var currency_rate = $("input[name='currency_rate']").val();
                    // alert(currency_rate);
                    // var tax_vat_percentage = 0;
                    // var principal_discount_percentage = 0;
                    if (currency_rate > 0) {
                        currency_rate = currency_rate;
                    } else {
                        currency_rate = 1;
                    }
                    var office_cost_percentage = $("input[name='office_cost_percentage']").val();
                    var profit_percentage = $("input[name='profit_percentage']").val();
                    var others_cost_percentage = $("input[name='others_cost_percentage']").val();
                    var partner_discount_percentage = 0;
                    var vat_percentage = $("input[name='vat_percentage']").val();
                    var tax_vat_percentage = $("input[name='tax_vat_percentage']").val();

                    if (tax_vat_percentage > 0) {
                        var tax_vat_percentage = (tax_vat_percentage / 100);
                    } else {
                        var tax_vat_percentage = 0;
                    }


                    if ($(this).hasClass('principal_discount_percentage')) {
                        $("input[name='principal_discount_percentage']").val(inputValue);
                        $("input.principal_discount_percentage").val(inputValue);
                        var principal_discount_percentage = inputValue;
                    } else {
                        var principal_discount_percentage = $("input[name='principal_discount_percentage']")
                            .val();;
                    }

                    var partner_discount_percentage = $("input[name='partner_discount_percentage']").val();;


                    var principal_sub_total_amount_taka = 0;
                    var sub_total_office_cost = 0;
                    var sub_total_profit = 0;
                    var sub_total_others_cost = 0;
                    var sub_total_subtotal = 0;
                    var sub_total_tax_vat = 0;
                    var sub_total_eu_price = 0;
                    var sub_total_partner_discount = 0;
                    var sub_total_partner_price = 0;

                    $("tr.thd").each(function() {
                        // get the values from this row:
                        var principal_cost = $("input[name='principal_cost[]']", this).val();
                        var qty = $("input[name='qty[]']", this).val();
                        var year = $("input[name='year[]']", this).val();
                        var partner_discount_percentage = $("input[name='unit_partner_discount[]']",
                            this).val();

                        var unit_cost_total = (qty * 1) * (principal_cost * 1);
                        var principal_discount_amount = unit_cost_total * (
                            principal_discount_percentage / 100);
                        var principal_unit_total_amount_taka = unit_cost_total * year * currency_rate -
                            principal_discount_amount;

                        var office_cost = principal_unit_total_amount_taka * (office_cost_percentage /
                            100);
                        var profit = principal_unit_total_amount_taka * (profit_percentage / 100);
                        var others_cost = principal_unit_total_amount_taka * (others_cost_percentage /
                            100);

                        var unit_subtotal = principal_unit_total_amount_taka + office_cost + profit +
                            others_cost;
                        var unit_tax_vat = unit_subtotal * tax_vat_percentage;
                        var unit_eu_price = unit_subtotal + unit_tax_vat;
                        var unit_partner_price = unit_eu_price - (unit_eu_price * (
                            partner_discount_percentage / 100));

                        $(this).find(".principal_discount_amount").val(parseFloat(
                            principal_discount_amount).toFixed(2));
                        $(this).find(".principal_unit_total_amount_taka").val(parseFloat(
                            principal_unit_total_amount_taka).toFixed(2));

                        // total_qty += isNaN(qty) ? 0 : qty;
                        principal_sub_total_amount_taka += isNaN(principal_unit_total_amount_taka) ? 0 :
                            principal_unit_total_amount_taka;
                        sub_total_office_cost += isNaN(office_cost) ? 0 : office_cost;
                        sub_total_profit += isNaN(profit) ? 0 : profit;
                        sub_total_others_cost += isNaN(others_cost) ? 0 : others_cost;
                        sub_total_subtotal += isNaN(unit_subtotal) ? 0 : unit_subtotal;
                        sub_total_tax_vat += isNaN(unit_tax_vat) ? 0 : unit_tax_vat;
                        sub_total_eu_price += isNaN(unit_eu_price) ? 0 : unit_eu_price;
                        sub_total_partner_discount += isNaN(partner_discount_percentage) ? 0 :
                            partner_discount_percentage;
                        sub_total_partner_price += isNaN(unit_partner_price) ? 0 : unit_partner_price;




                        $("input[name='unit_office_cost[]']", this).val(parseFloat(office_cost).toFixed(
                            2));
                        $("input[name='unit_profit[]']", this).val(parseFloat(profit).toFixed(2));
                        $("input[name='unit_others_cost[]']", this).val(parseFloat(others_cost).toFixed(
                            2));
                        $("input[name='unit_subtotal[]']", this).val(parseFloat(unit_subtotal).toFixed(
                            2));
                        $("input[name='unit_tax_vat[]']", this).val(parseFloat(unit_tax_vat).toFixed(
                            2));
                        $("input[name='unit_eu_price[]']", this).val(parseFloat(unit_eu_price).toFixed(
                            2));
                        // $("input[name='unit_eu_price[]']", this).val(parseFloat(unit_eu_price).toFixed(
                        //     2));
                        $("input[name='unit_partner_price[]']", this).val(parseFloat(unit_partner_price)
                            .toFixed(2));
                    });

                    var remittence_qty = $("input[name='remittence_qty']").val();
                    var packing_charge_qty = $("input[name='packing_charge_qty']").val();
                    var custom_qty = $("input[name='custom_qty']").val();
                    var freight_qty = $("input[name='freight_qty']").val();

                    var remittence_year = $("input[name='remittence_year']").val();
                    var packing_charge_year = $("input[name='packing_charge_year']").val();
                    var custom_year = $("input[name='custom_year']").val();
                    var freight_year = $("input[name='freight_year']").val();

                    var remittence_principal_cost = $("input[name='remittence_principal_cost']").val();
                    var packing_charge_principal_cost = $("input[name='packing_charge_principal_cost']").val();
                    var custom_principal_cost = $("input[name='custom_principal_cost']").val();
                    var freight_principal_cost = $("input[name='freight_principal_cost']").val();

                    var remittence_principal_unit_total_amount_taka = remittence_principal_cost *
                        remittence_qty * remittence_year * currency_rate;
                    var packing_charge_principal_unit_total_amount_taka = packing_charge_principal_cost *
                        packing_charge_qty * packing_charge_year *
                        currency_rate;
                    var custom_principal_unit_total_amount_taka = custom_principal_cost *
                        custom_qty * custom_year * currency_rate;
                    var freight_principal_unit_total_amount_taka = freight_principal_cost *
                        freight_qty * freight_year * currency_rate;

                    var remittence_unit_office_cost = remittence_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100);
                    var remittence_unit_profit = remittence_principal_unit_total_amount_taka * (
                        profit_percentage / 100);
                    var remittence_unit_others_cost = remittence_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100);
                    var remittence_unit_subtotal = remittence_principal_unit_total_amount_taka +
                        remittence_unit_office_cost + remittence_unit_profit + remittence_unit_others_cost;

                    var remittence_unit_tax_vat = remittence_unit_subtotal * tax_vat_percentage;

                    var remittence_unit_eu_price = remittence_principal_unit_total_amount_taka +
                        remittence_unit_office_cost + remittence_unit_profit + remittence_unit_others_cost +
                        remittence_unit_tax_vat;

                    var remittence_unit_partner_price = remittence_unit_eu_price - (remittence_unit_subtotal * (
                        partner_discount_percentage / 100));

                    var packing_charge_unit_office_cost = packing_charge_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100);
                    var packing_charge_unit_profit = packing_charge_principal_unit_total_amount_taka * (
                        profit_percentage / 100);
                    var packing_charge_unit_others_cost = packing_charge_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100);
                    var packing_charge_unit_subtotal = packing_charge_principal_unit_total_amount_taka +
                        packing_charge_unit_office_cost +
                        packing_charge_unit_profit + packing_charge_unit_others_cost;

                    var packing_charge_unit_tax_vat = packing_charge_unit_subtotal * tax_vat_percentage;

                    var packing_charge_unit_eu_price = packing_charge_principal_unit_total_amount_taka +
                        packing_charge_unit_office_cost + packing_charge_unit_profit +
                        packing_charge_unit_others_cost +
                        packing_charge_unit_tax_vat;

                    var packing_charge_unit_partner_price = packing_charge_unit_eu_price - (
                        packing_charge_unit_subtotal * (partner_discount_percentage / 100));

                    var custom_unit_office_cost = custom_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100);
                    var custom_unit_profit = custom_principal_unit_total_amount_taka * (profit_percentage /
                        100);
                    var custom_unit_others_cost = custom_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100);
                    var custom_unit_subtotal = custom_principal_unit_total_amount_taka +
                        custom_unit_office_cost + custom_unit_profit + custom_unit_others_cost;
                    var custom_unit_tax_vat = custom_unit_subtotal * tax_vat_percentage;

                    var custom_unit_eu_price = custom_principal_unit_total_amount_taka +
                        custom_unit_office_cost + custom_unit_profit + custom_unit_others_cost +
                        custom_unit_tax_vat;

                    var custom_unit_partner_price = custom_unit_eu_price - (custom_unit_subtotal * (
                        partner_discount_percentage / 100));

                    var freight_unit_office_cost = freight_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100);
                    var freight_unit_profit = freight_principal_unit_total_amount_taka * (profit_percentage /
                        100);
                    var freight_unit_others_cost = freight_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100);
                    var freight_unit_subtotal = freight_principal_unit_total_amount_taka +
                        freight_unit_office_cost + freight_unit_profit + freight_unit_others_cost;
                    var freight_unit_tax_vat = freight_unit_subtotal * tax_vat_percentage;

                    var freight_unit_eu_price = freight_principal_unit_total_amount_taka +
                        freight_unit_office_cost + freight_unit_profit + freight_unit_others_cost +
                        freight_unit_tax_vat;
                    var freight_unit_partner_price = freight_unit_eu_price - (freight_unit_subtotal * (
                        partner_discount_percentage / 100));

                    // Sub Total Calculation
                    var principal_sub_total_amount_taka = principal_sub_total_amount_taka +
                        remittence_principal_unit_total_amount_taka +
                        packing_charge_principal_unit_total_amount_taka +
                        custom_principal_unit_total_amount_taka + freight_principal_unit_total_amount_taka;
                    var sub_total_office_cost = sub_total_office_cost + remittence_unit_office_cost +
                        packing_charge_unit_office_cost + custom_unit_office_cost + freight_unit_office_cost;
                    var sub_total_profit = sub_total_profit + remittence_unit_profit +
                        packing_charge_unit_profit + custom_unit_profit + freight_unit_profit;
                    var sub_total_others_cost = sub_total_others_cost + remittence_unit_others_cost +
                        packing_charge_unit_others_cost + custom_unit_others_cost + freight_unit_others_cost;
                    var sub_total_subtotal = sub_total_subtotal + remittence_unit_subtotal +
                        packing_charge_unit_subtotal + custom_unit_subtotal + freight_unit_subtotal;
                    var sub_total_tax_vat = sub_total_tax_vat + remittence_unit_profit +
                        packing_charge_unit_profit + custom_unit_profit + freight_unit_profit;
                    var sub_total_eu_price = sub_total_eu_price + remittence_unit_profit +
                        packing_charge_unit_profit + custom_unit_profit + freight_unit_profit;
                    var sub_total_partner_discount = sub_total_partner_discount + remittence_unit_profit +
                        packing_charge_unit_profit + custom_unit_profit + freight_unit_profit;
                    var sub_total_partner_price = sub_total_partner_price + remittence_unit_profit +
                        packing_charge_unit_profit + custom_unit_profit + freight_unit_profit;

                    // Vat Calculation
                    var vat_principal_amount_taka = parseFloat(principal_sub_total_amount_taka * (
                        vat_percentage / 100)).toFixed(2);
                    var vat_office_cost = parseFloat(sub_total_office_cost * (vat_percentage / 100)).toFixed(2);
                    var vat_profit = parseFloat(sub_total_profit * (vat_percentage / 100)).toFixed(2);
                    var vat_others_cost = parseFloat(sub_total_others_cost * (vat_percentage / 100)).toFixed(2);
                    var vat_subtotal = parseFloat(sub_total_subtotal * (vat_percentage / 100)).toFixed(2);
                    var vat_tax_vat = parseFloat(sub_total_tax_vat * (vat_percentage / 100)).toFixed(2);
                    var vat_eu_price = parseFloat(sub_total_eu_price * (vat_percentage / 100)).toFixed(2);
                    var vat_partner_discount = parseFloat(sub_total_partner_discount * (vat_percentage / 100))
                        .toFixed(2);
                    var vat_partner_price = parseFloat(sub_total_partner_price * (vat_percentage / 100))
                        .toFixed(2);


                    // Total Calculation
                    var principal_total_amount_taka = principal_sub_total_amount_taka + (
                        principal_sub_total_amount_taka * (vat_percentage / 100));
                    var total_office_cost = sub_total_office_cost + (sub_total_office_cost * (vat_percentage /
                        100));
                    var total_profit = sub_total_profit + (sub_total_profit * (vat_percentage / 100));
                    var total_others_cost = sub_total_others_cost + (sub_total_others_cost * (vat_percentage /
                        100));
                    var total_subtotal = sub_total_subtotal + (sub_total_subtotal * (vat_percentage / 100));
                    var total_tax_vat = sub_total_tax_vat + (sub_total_tax_vat * (vat_percentage / 100));
                    var total_eu_price = sub_total_eu_price + (sub_total_eu_price * (vat_percentage / 100));
                    var total_partner_discount = sub_total_partner_discount + (sub_total_partner_discount * (
                        vat_percentage / 100));
                    var total_partner_price = sub_total_partner_price + (sub_total_partner_price * (
                        vat_percentage / 100));

                    // Sub Total Value
                    var principal_sub_total_amount_taka = parseFloat(principal_sub_total_amount_taka).toFixed(
                        2);
                    var sub_total_office_cost = parseFloat(sub_total_office_cost).toFixed(2);
                    var sub_total_profit = parseFloat(sub_total_profit).toFixed(2);
                    var sub_total_others_cost = parseFloat(sub_total_others_cost).toFixed(2);
                    var sub_total_subtotal = parseFloat(sub_total_subtotal).toFixed(2);
                    var sub_total_tax_vat = parseFloat(sub_total_tax_vat).toFixed(2);
                    var sub_total_eu_price = parseFloat(sub_total_eu_price).toFixed(2);
                    var sub_total_partner_discount = parseFloat(sub_total_partner_discount).toFixed(2);
                    var sub_total_partner_price = parseFloat(sub_total_partner_price).toFixed(2);
                    //Total Value
                    var principal_total_amount_taka = parseFloat(principal_total_amount_taka).toFixed(2);
                    var total_office_cost = parseFloat(total_office_cost).toFixed(2);
                    var total_profit = parseFloat(total_profit).toFixed(2);
                    var total_others_cost = parseFloat(total_others_cost).toFixed(2);
                    var total_subtotal = parseFloat(total_subtotal).toFixed(2);
                    var total_tax_vat = parseFloat(total_tax_vat).toFixed(2);
                    var total_eu_price = parseFloat(total_eu_price).toFixed(2);
                    var total_partner_discount = parseFloat(total_partner_discount).toFixed(2);
                    var total_partner_price = parseFloat(total_partner_price).toFixed(2);


                    $("input[name='remittence_principal_unit_total_amount_taka']").val(
                        parseFloat(remittence_principal_unit_total_amount_taka).toFixed(2));
                    $("input[name='packing_charge_principal_unit_total_amount_taka']").val(
                        parseFloat(packing_charge_principal_unit_total_amount_taka).toFixed(2));
                    $("input[name='custom_principal_unit_total_amount_taka']").val(
                        parseFloat(custom_principal_unit_total_amount_taka).toFixed(2));
                    $("input[name='freight_principal_unit_total_amount_taka']").val(
                        parseFloat(freight_principal_unit_total_amount_taka).toFixed(2));

                    $("input[name='remittence_unit_office_cost']").val(parseFloat(remittence_unit_office_cost)
                        .toFixed(2));
                    $("input[name='remittence_unit_profit']").val(parseFloat(remittence_unit_profit).toFixed(
                        2));
                    $("input[name='remittence_unit_others_cost']").val(parseFloat(remittence_unit_others_cost)
                        .toFixed(2));
                    $("input[name='remittence_unit_eu_price']").val(parseFloat(remittence_unit_eu_price)
                        .toFixed(2));
                    $("input[name='remittence_unit_tax_vat']").val(parseFloat(remittence_unit_tax_vat)
                        .toFixed(2));
                    // $("input[name='remittence_unit_tax_vat']").val(parseFloat(remittence_unit_tax_vat)
                    //     .toFixed(2));
                    $("input[name='remittence_unit_partner_price']").val(parseFloat(
                            remittence_unit_partner_price)
                        .toFixed(2));

                    $("input[name='packing_charge_unit_office_cost']").val(parseFloat(
                        packing_charge_unit_office_cost).toFixed(2));
                    $("input[name='packing_charge_unit_profit']").val(parseFloat(packing_charge_unit_profit)
                        .toFixed(2));
                    $("input[name='packing_charge_unit_others_cost']").val(parseFloat(
                        packing_charge_unit_others_cost).toFixed(2));
                    $("input[name='packing_charge_unit_eu_price']").val(parseFloat(packing_charge_unit_eu_price)
                        .toFixed(2));
                    $("input[name='packing_charge_unit_tax_vat']").val(parseFloat(packing_charge_unit_tax_vat)
                        .toFixed(2));
                    // $("input[name='packing_charge_unit_tax_vat']").val(parseFloat(packing_charge_unit_tax_vat)
                    //     .toFixed(2));
                    $("input[name='packing_charge_unit_partner_price']").val(parseFloat(
                            packing_charge_unit_partner_price)
                        .toFixed(2));


                    $("input[name='custom_unit_office_cost']").val(parseFloat(custom_unit_office_cost).toFixed(
                        2));
                    $("input[name='custom_unit_profit']").val(parseFloat(custom_unit_profit).toFixed(2));
                    $("input[name='custom_unit_others_cost']").val(parseFloat(custom_unit_others_cost).toFixed(
                        2));
                    $("input[name='custom_unit_eu_price']").val(parseFloat(custom_unit_eu_price)
                        .toFixed(2));
                    $("input[name='custom_unit_tax_vat']").val(parseFloat(custom_unit_tax_vat)
                        .toFixed(2));
                    // $("input[name='custom_unit_tax_vat']").val(parseFloat(custom_unit_tax_vat)
                    //     .toFixed(2));
                    $("input[name='custom_unit_partner_price']").val(parseFloat(custom_unit_partner_price)
                        .toFixed(2));

                    $("input[name='freight_unit_office_cost']").val(parseFloat(freight_unit_office_cost)
                        .toFixed(2));
                    $("input[name='freight_unit_profit']").val(parseFloat(freight_unit_profit).toFixed(2));
                    $("input[name='freight_unit_others_cost']").val(parseFloat(freight_unit_others_cost)
                        .toFixed(2));

                    $("input[name='freight_unit_eu_price']").val(parseFloat(freight_unit_eu_price)
                        .toFixed(2));
                    $("input[name='freight_unit_tax_vat']").val(parseFloat(freight_unit_tax_vat)
                        .toFixed(2));
                    // $("input[name='freight_unit_tax_vat']").val(parseFloat(freight_unit_tax_vat)
                    //     .toFixed(2));
                    $("input[name='freight_unit_partner_price']").val(parseFloat(freight_unit_partner_price)
                        .toFixed(2));

                    $("input[name='remittence_unit_subtotal']").val(parseFloat(remittence_unit_subtotal)
                        .toFixed(2));
                    $("input[name='packing_charge_unit_subtotal']").val(parseFloat(packing_charge_unit_subtotal)
                        .toFixed(2));
                    $("input[name='custom_unit_subtotal']").val(parseFloat(custom_unit_subtotal).toFixed(2));
                    $("input[name='freight_unit_subtotal']").val(parseFloat(freight_unit_subtotal).toFixed(2));




                    // $("input[name='remittence_unit_partner_price']").val(parseFloat(
                    //     remittence_unit_partner_price).toFixed(2));
                    // $("input[name='packing_charge_unit_partner_price']").val(parseFloat(
                    //     packing_charge_unit_partner_price).toFixed(2));
                    // $("input[name='custom_unit_partner_price']").val(parseFloat(custom_unit_partner_price)
                    //     .toFixed(2));
                    // $("input[name='freight_unit_partner_price']").val(parseFloat(freight_unit_partner_price)
                    //     .toFixed(2));

                    // sub_total input vaue
                    $("input[name='principal_sub_total_amount_taka']").val(parseFloat(
                        principal_sub_total_amount_taka).toFixed(2));
                    $("input[name='sub_total_office_cost']").val(parseFloat(sub_total_office_cost).toFixed(2));
                    $("input[name='sub_total_profit']").val(parseFloat(sub_total_profit).toFixed(2));
                    $("input[name='sub_total_others_cost']").val(parseFloat(sub_total_others_cost).toFixed(2));
                    $("input[name='sub_total_subtotal']").val(parseFloat(sub_total_subtotal).toFixed(2));
                    $("input[name='sub_total_tax_vat']").val(parseFloat(sub_total_tax_vat).toFixed(2));
                    $("input[name='sub_total_eu_price']").val(parseFloat(sub_total_eu_price).toFixed(2));
                    $("input[name='sub_total_partner_discount']").val(parseFloat(sub_total_partner_discount)
                        .toFixed(2));
                    $("input[name='sub_total_partner_price']").val(parseFloat(sub_total_partner_price).toFixed(
                        2));
                    // vat value
                    $("input[name='vat_principal_amount_taka']").val(parseFloat(vat_principal_amount_taka)
                        .toFixed(2));
                    $("input[name='vat_office_cost']").val(parseFloat(vat_office_cost).toFixed(2));
                    $("input[name='vat_profit']").val(parseFloat(vat_profit).toFixed(2));
                    $("input[name='vat_others_cost']").val(parseFloat(vat_others_cost).toFixed(2));
                    $("input[name='vat_subtotal']").val(parseFloat(vat_subtotal).toFixed(2));
                    $("input[name='vat_tax_vat']").val(parseFloat(vat_tax_vat).toFixed(2));
                    $("input[name='vat_eu_price']").val(parseFloat(vat_eu_price).toFixed(2));
                    $("input[name='vat_partner_discount']").val(parseFloat(vat_partner_discount).toFixed(2));
                    $("input[name='vat_partner_price']").val(parseFloat(vat_partner_price).toFixed(2));
                    // total input vaue
                    $("input[name='principal_total_amount_taka']").val(parseFloat(principal_total_amount_taka)
                        .toFixed(2));
                    $("input[name='total_office_cost']").val(parseFloat(total_office_cost).toFixed(2));
                    $("input[name='total_profit']").val(parseFloat(total_profit).toFixed(2));
                    $("input[name='total_others_cost']").val(parseFloat(total_others_cost).toFixed(2));
                    $("input[name='total_subtotal']").val(parseFloat(total_subtotal).toFixed(2));
                    $("input[name='total_tax_vat']").val(parseFloat(total_tax_vat).toFixed(2));
                    $("input[name='total_eu_price']").val(parseFloat(total_eu_price).toFixed(2));
                    $("input[name='total_partner_discount']").val(parseFloat(total_partner_discount).toFixed(
                        2));
                    $("input[name='total_partner_price']").val(parseFloat(total_partner_price).toFixed(2));

                    // For debugging
                    console.log("Input Name:", inputName, "Input Value:", inputValue);
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                var quotationForm = $('#quotationForm');

                quotationForm.find('input').on('keyup change', function() {
                    // Extract input value and name
                    var inputValue = $(this).val();
                    var inputName = $(this).attr('name');
                    var currency_rate = $("input[name='currency_rate']").val();
                    // alert(currency_rate);
                    // var tax_vat_percentage = 0;
                    // var principal_discount_percentage = 0;
                    if (currency_rate > 0) {
                        currency_rate = currency_rate;
                    } else {
                        currency_rate = 1;
                    }
                    var office_cost_percentage = $("input[name='office_cost_percentage']").val();
                    var profit_percentage = $("input[name='profit_percentage']").val();
                    var others_cost_percentage = $("input[name='others_cost_percentage']").val();
                    var remittence_percentage = $("input[name='remittence_percentage']").val();
                    var packing_percentage = $("input[name='packing_percentage']").val();
                    var custom_percentage = $("input[name='custom_percentage']").val();
                    var tax_vat_percentage = $("input[name='tax_vat_percentage']").val();
                    var vat_percentage = $("input[name='vat_percentage']").val();
                    var special_discount_percentage = $("input[name='special_discount_percentage']").val();

                    if (tax_vat_percentage > 0) {
                        var tax_vat_percentage = (tax_vat_percentage / 100);
                    } else {
                        var tax_vat_percentage = 0;
                    }


                    var sub_total_principal_amount = 0;
                    var sub_total_office_cost = 0;
                    var sub_total_profit = 0;
                    var sub_total_others_cost = 0;
                    var sub_total_remittance = 0;
                    var sub_total_packing = 0;
                    var sub_total_customs = 0;
                    var sub_total_tax = 0;
                    var sub_total_subtotal = 0;
                    var sub_total_final_total_price = 0;

                    // $('tr.thd').each(function(index) {
                    $('tbody.table_bottom_area tr.thd').each(function(index) {
                        // get the values from this row:
                        var principal_cost = $("input[name='principal_cost[]']", this).val();
                        var qty = $("input[name='qty[]']", this).val();

                        var unit_cost_total = (qty * 1) * (principal_cost * 1);

                        var principal_unit_total_amount = unit_cost_total * currency_rate;

                        var office_cost = principal_unit_total_amount * (office_cost_percentage /
                            100);
                        var profit = principal_unit_total_amount * (profit_percentage / 100);
                        var others_cost = principal_unit_total_amount * (others_cost_percentage /
                            100);
                        var unit_remittence = principal_unit_total_amount * (remittence_percentage /
                            100);
                        var unit_packing = principal_unit_total_amount * (packing_percentage /
                            100);
                        var unit_customs = principal_unit_total_amount * (custom_percentage /
                            100);
                        var unit_tax_vat = principal_unit_total_amount * tax_vat_percentage;

                        var unit_subtotal = principal_unit_total_amount + office_cost + profit +
                            others_cost + unit_remittence + unit_packing + unit_customs + unit_tax_vat;

                        var unit_final_price = unit_subtotal / qty;
                        var unit_final_total_price = unit_subtotal;

                        sub_total_principal_amount += isNaN(principal_unit_total_amount) ? 0 :
                            principal_unit_total_amount;
                        sub_total_office_cost += isNaN(office_cost) ? 0 : office_cost;
                        sub_total_profit += isNaN(profit) ? 0 : profit;
                        sub_total_others_cost += isNaN(others_cost) ? 0 : others_cost;
                        sub_total_remittance += isNaN(unit_remittence) ? 0 : unit_remittence;
                        sub_total_packing += isNaN(unit_packing) ? 0 : unit_packing;
                        sub_total_customs += isNaN(unit_customs) ? 0 : unit_customs;
                        sub_total_tax += isNaN(unit_tax_vat) ? 0 : unit_tax_vat;
                        sub_total_subtotal += isNaN(unit_subtotal) ? 0 : unit_subtotal;
                        sub_total_final_total_price += isNaN(unit_subtotal) ? 0 : unit_subtotal;


                        $('input[name="unit_final_price[]"]').eq(index).val(unit_final_price.toFixed(
                        2));
                        $('input[name="unit_final_total_price[]"]').eq(index).val(unit_final_price
                            .toFixed(2));

                        $(this).find("input[name='principal_unit_total_amount[]']").val(Math.round(
                            principal_unit_total_amount));
                        $(this).find("input[name='unit_office_cost[]']").val(Math.round(office_cost));
                        $(this).find("input[name='unit_profit[]']").val(Math.round(profit));
                        $(this).find("input[name='unit_others_cost[]']").val(Math.round(others_cost));
                        $(this).find("input[name='unit_remittence[]']").val(Math.round(
                        unit_remittence));
                        $(this).find("input[name='unit_packing[]']").val(Math.round(unit_packing));
                        $(this).find("input[name='unit_customs[]']").val(Math.round(unit_customs));
                        $(this).find("input[name='unit_tax_vat[]']").val(Math.round(unit_tax_vat));
                        $(this).find("input[name='unit_subtotal[]']").val(Math.round(unit_subtotal));
                        $(this).find("input[name='unit_final_price[]']").val(Math.round(
                            unit_final_price));
                        $(this).find("input[name='unit_final_total_price[]']").val(Math.round(
                            unit_final_total_price));
                        // Update corresponding fields in the display table
                        var displayTableRow = $('#myTable tbody tr.tdsp').eq(index);
                        displayTableRow.find('input[name="qty[]"]').val(qty);
                        displayTableRow.find('input[name="unit_final_price[]"]').val(unit_final_price
                            .toFixed(2));
                        displayTableRow.find('input[name="unit_final_total_price[]"]').val(
                            unit_final_total_price.toFixed(2));


                    });

                    var sub_total_principal_amount = sub_total_principal_amount;
                    var sub_total_office_cost = sub_total_office_cost;
                    var sub_total_profit = sub_total_profit;
                    var sub_total_others_cost = sub_total_others_cost;
                    var sub_total_remittance = sub_total_remittance;
                    var sub_total_packing = sub_total_packing;
                    var sub_total_customs = sub_total_customs;
                    var sub_total_tax = sub_total_tax;
                    var sub_total_subtotal = sub_total_subtotal;
                    var sub_total_final_total_price = sub_total_final_total_price;
                    // alert(sub_total_principal_amount);

                    // Special Discount
                    var special_discount_principal_amount = sub_total_principal_amount * (
                        special_discount_percentage / 100);
                    var special_discount_office_cost = sub_total_office_cost * (special_discount_percentage /
                        100);
                    var special_discount_profit = sub_total_profit * (special_discount_percentage / 100);
                    var special_discount_others_cost = sub_total_others_cost * (special_discount_percentage /
                        100);
                    var special_discount_remittance = sub_total_remittance * (special_discount_percentage /
                    100);
                    var special_discount_packing = sub_total_packing * (special_discount_percentage / 100);
                    var special_discount_customs = sub_total_customs * (special_discount_percentage / 100);
                    var special_discount_tax = sub_total_tax * (special_discount_percentage / 100);
                    var special_discount_subtotal = sub_total_subtotal * (special_discount_percentage / 100);
                    var special_discount_final_total_price = sub_total_final_total_price * (
                        special_discount_percentage / 100);

                    // Vat Calculation
                    if (special_discount_percentage > 0) {
                        var vat_principal_amount = special_discount_principal_amount * (vat_percentage / 100);
                        var vat_office_cost = special_discount_office_cost * (vat_percentage / 100);
                        var vat_profit = special_discount_profit * (vat_percentage / 100);
                        var vat_others_cost = special_discount_others_cost * (vat_percentage / 100);
                        var vat_remittance = special_discount_remittance * (vat_percentage / 100);
                        var vat_packing = special_discount_packing * (vat_percentage / 100);
                        var vat_customs = special_discount_customs * (vat_percentage / 100);
                        var vat_tax = special_discount_tax * (vat_percentage / 100);
                        var vat_subtotal = special_discount_subtotal * (vat_percentage / 100);
                        var vat_final_total_price = special_discount_final_total_price * (vat_percentage / 100);
                    } else {
                        var vat_principal_amount = sub_total_principal_amount * (vat_percentage / 100);
                        var vat_office_cost = sub_total_office_cost * (vat_percentage / 100);
                        var vat_profit = sub_total_profit * (vat_percentage / 100);
                        var vat_others_cost = sub_total_others_cost * (vat_percentage / 100);
                        var vat_remittance = sub_total_remittance * (vat_percentage / 100);
                        var vat_packing = sub_total_packing * (vat_percentage / 100);
                        var vat_customs = sub_total_customs * (vat_percentage / 100);
                        var vat_tax = sub_total_tax * (vat_percentage / 100);
                        var vat_subtotal = sub_total_subtotal * (vat_percentage / 100);
                        var vat_final_total_price = sub_total_final_total_price * (vat_percentage / 100);
                    }


                    var total_principal_amount = sub_total_principal_amount + vat_principal_amount -
                        special_discount_principal_amount;
                    var total_office_cost = sub_total_office_cost + vat_office_cost -
                        special_discount_office_cost;
                    var total_profit = sub_total_profit + vat_profit - special_discount_profit;
                    var total_others_cost = sub_total_others_cost + vat_others_cost -
                        special_discount_others_cost;
                    var total_remittance = sub_total_remittance + vat_remittance - special_discount_remittance;
                    var total_packing = sub_total_packing + vat_packing - special_discount_packing;
                    var total_customs = sub_total_customs + vat_customs - special_discount_customs;
                    var total_tax = sub_total_tax + vat_tax - special_discount_tax;
                    var total_subtotal = sub_total_subtotal + vat_subtotal - special_discount_subtotal;
                    var total_final_total_price = sub_total_final_total_price + vat_final_total_price -
                        special_discount_final_total_price;



                    // Total Calculation
                    $("input[name='sub_total_principal_amount']").val(Math.round(sub_total_principal_amount));
                    $("input[name='sub_total_office_cost']").val(Math.round(sub_total_office_cost));
                    $("input[name='sub_total_profit']").val(Math.round(sub_total_profit));
                    $("input[name='sub_total_others_cost']").val(Math.round(sub_total_others_cost));
                    $("input[name='sub_total_remittance']").val(Math.round(sub_total_remittance));
                    $("input[name='sub_total_packing']").val(Math.round(sub_total_packing));
                    $("input[name='sub_total_customs']").val(Math.round(sub_total_customs));
                    $("input[name='sub_total_tax']").val(Math.round(sub_total_tax));
                    $("input[name='sub_total_subtotal']").val(Math.round(sub_total_subtotal));
                    $("input[name='sub_total_final_total_price']").val(Math.round(sub_total_final_total_price));

                    $("input[name='special_discount_principal_amount']").val(Math.round(
                        special_discount_principal_amount));
                    $("input[name='special_discount_office_cost']").val(Math.round(
                        special_discount_office_cost));
                    $("input[name='special_discount_profit']").val(Math.round(special_discount_profit));
                    $("input[name='special_discount_others_cost']").val(Math.round(
                        special_discount_others_cost));
                    $("input[name='special_discount_remittance']").val(Math.round(special_discount_remittance));
                    $("input[name='special_discount_packing']").val(Math.round(special_discount_packing));
                    $("input[name='special_discount_customs']").val(Math.round(special_discount_customs));
                    $("input[name='special_discount_tax']").val(Math.round(special_discount_tax));
                    $("input[name='special_discount_subtotal']").val(Math.round(special_discount_subtotal));
                    $("input[name='special_discount_final_total_price']").val(Math.round(
                        special_discount_final_total_price));

                    $("input[name='vat_principal_amount']").val(Math.round(vat_principal_amount));
                    $("input[name='vat_office_cost']").val(Math.round(vat_office_cost));
                    $("input[name='vat_profit']").val(Math.round(vat_profit));
                    $("input[name='vat_others_cost']").val(Math.round(vat_others_cost));
                    $("input[name='vat_remittance']").val(Math.round(vat_remittance));
                    $("input[name='vat_packing']").val(Math.round(vat_packing));
                    $("input[name='vat_customs']").val(Math.round(vat_customs));
                    $("input[name='vat_tax']").val(Math.round(vat_tax));
                    $("input[name='vat_subtotal']").val(Math.round(vat_subtotal));
                    $("input[name='vat_final_total_price']").val(Math.round(vat_final_total_price));

                    $("input[name='total_principal_amount']").val(Math.round(total_principal_amount));
                    $("input[name='total_office_cost']").val(Math.round(total_office_cost));
                    $("input[name='total_profit']").val(Math.round(total_profit));
                    $("input[name='total_others_cost']").val(Math.round(total_others_cost));
                    $("input[name='total_remittance']").val(Math.round(total_remittance));
                    $("input[name='total_packing']").val(Math.round(total_packing));
                    $("input[name='total_customs']").val(Math.round(total_customs));
                    $("input[name='total_tax']").val(Math.round(total_tax));
                    $("input[name='total_subtotal']").val(Math.round(total_subtotal));
                    $("input[name='total_final_total_price']").val(Math.round(total_final_total_price));


                    // $("input[name='total_partner_discount']").val(parseFloat(total_partner_discount).toFixed(
                    //     2));
                    // $("input[name='total_partner_price']").val(parseFloat(total_partner_price).toFixed(2));

                    // For debugging
                    console.log("Input Name:", inputName, "Input Value:", inputValue);
                });
            });
        </script>


        <script>
            function addTermsTableRow() {
                const tableBody = document.querySelector('.terms_tbody');
                const newRow = document.createElement('tr');

                newRow.innerHTML = `
            <td style="text-align: center;">
                <a class="text-danger rounded-0 btn-sm p-1" onclick="deleteTermsTableRow(this)">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
            <td>
                <input type="text" name="terms_title[]" class="form-control form-control-sm bg-transparent text-start">
            </td>
            <td>
                <input type="text" name="terms_value[]" class="form-control form-control-sm bg-transparent">
            </td>
        `;

                tableBody.appendChild(newRow);
            }

            function deleteTermsTableRow(button) {
                const row = button.closest('tr');
                row.remove();
            }
        </script>
    @endpush
@endonce

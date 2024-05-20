@extends('admin.master')

@section('content')
    <style>
        .table>:not(caption)>*>* {
            padding: 5px;
        }
    </style>
    <div class="card-body p-4">
        <!-- Nav tabs -->
        <div class="text-center">
            <h3 class="mb-0 py-2">Bypass Process</h3>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-center align-items-center border-0" id="myTab" role="tablist">
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link" id="quotation-tab" data-bs-toggle="tab" data-bs-target="#quotation" type="button"
                    role="tab" aria-controls="quotation" aria-selected="true">
                    Quotation
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link active" id="cog-tab" data-bs-toggle="tab" data-bs-target="#cog" type="button"
                    role="tab" aria-controls="cog" aria-selected="false">
                    Cost Of Goods
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link" id="source-tab" data-bs-toggle="tab" data-bs-target="#source" type="button"
                    role="tab" aria-controls="source" aria-selected="false">
                    Source
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link" id="setting">
                    <i class="fa-solid fa-gear" style="font-size: 23.6px;"></i>
                </button>
            </li>
        </ul>
        <form id="quotationForm" action="" method="post">
            <div id="mysetting">
                <div class="fade-setting show" id="setting-show">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 mb-5">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-primary">
                                        <tbody>
                                            <tr>
                                                <td width="15%">
                                                    <select class="form-control select" id="" name="region"
                                                        data-allow-clear="true" data-placeholder="Select Region">
                                                        <option></option>
                                                        @foreach ($regions as $region)
                                                            <option value="{{ $region->id }}">
                                                                {{ $region->region_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <select class="form-select" id="" name="currency">
                                                        <option value="taka" selected>Taka (Tk)</option>
                                                        <option value="euro">Euro ()</option>
                                                        <option value="doller">Doller ($)</option>
                                                        <option value="pound">Pound ()</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number"
                                                        class="form-control form-control-sm form-setting border"
                                                        name="currency_rate" placeholder="Currency Rate">
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault" name="tax_vat">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            TAX/VAT/GST
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="number"
                                                        class="form-control form-control-sm form-setting border tax_vat_percentage"
                                                        name="tax_vat_percentage" placeholder="Tax Vat Value">
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="principal_discount" value="" id="flexCheckDefault">
                                                        <label class="form-check-label  w-100" for="flexCheckDefault">
                                                            Principal Disc
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="number"
                                                        class="form-control form-control-sm form-setting border principal_discount_percentage"
                                                        name="principal_discount_percentage"
                                                        placeholder="Principal Discount">
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="partner_discount" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Partner Disc
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><input type="number"
                                                        class="form-control form-control-sm form-setting border partner_discount_percentage"
                                                        name="partner_discount_percentage" placeholder="Partner Discount">
                                                </td>
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
                <div class="tab-pane " id="quotation" role="tabpanel" aria-labelledby="quotation-tab">
                    @include('admin.pages.singleRfq.partials.bypass_quotation')
                </div>
                <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @include('admin.pages.singleRfq.partials.bypass_cog')
                </div>
        </form>
        <div class="tab-pane" id="source" role="tabpanel" aria-labelledby="messages-tab">
            @include('admin.pages.singleRfq.partials.bypass_source')
        </div>
    </div>

    </div>
@endsection
@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('thead').on('click', '.addRow', function() {

                    var tr = "<tr>" +
                        "<td class='text-center'> <a href='javascript:void(0)' class='removeRow'><i class='fa-solid fa-minus dash-icons' style='padding: 6px 7px 6px !important;color: #ae0a46;'></i></a></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='item_name[]' placeholder='Product Name' required></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='qty[]' placeholder='Quantity' required></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='unit_price[]' placeholder='Unit Price' ></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='item_name[]' placeholder='Total' required></td></td>" +
                        "</tr>";

                    $('.repeater').appleft(tr);
                });

                $('tbody').on('click', '.removeRow', function() {
                    $(this).parent().parent().remove();
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
        <td><input type="text" name="unit_subtotal[]" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"></td>
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
            function addRow() {
                var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
                var newRow = table.insertRow(table.rows.length);
                newRow.innerHTML =
                    `<td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><button class="btn btn-danger rounded-0" onclick="deleteRow(this)"><i class="fa-regular fa-trash-can"></i></button></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">${table.rows.length}</td>
                                <td style="border: 1px solid #eee; padding: 8px; width: 40%"><input type="text" class="form-control form-control-sm bg-transparent" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><input type="text" class="form-control form-control-sm bg-transparent text-center" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><input type="text" class="form-control form-control-sm bg-transparent text-center" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><input type="text" class="form-control form-control-sm bg-transparent text-end" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>`;
            }

            function deleteRow(btn) {
                var row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }
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
                    var tax_vat_percentage = 0;
                    var principal_discount_percentage = 0;
                    if (currency_rate > 0) {
                        currency_rate = currency_rate;
                    } else {
                        currency_rate = 1;
                    }
                    var office_cost_percentage = $("input[name='office_cost_percentage']").val();
                    var profit_percentage = $("input[name='profit_percentage']").val();
                    var others_cost_percentage = $("input[name='others_cost_percentage']").val();
                    var partner_discount_percentage = 0;

                    if ($(this).hasClass('tax_vat_percentage')) {
                        $("input[name='tax_vat_percentage']").val(inputValue);
                        $("input.tax_vat_percentage").val(inputValue);
                        var tax_vat_percentage = inputValue;
                    }
                    if ($(this).hasClass('principal_discount_percentage')) {
                        $("input[name='principal_discount_percentage']").val(inputValue);
                        $("input.principal_discount_percentage").val(inputValue);
                        var principal_discount_percentage = inputValue;
                    }
                    if ($(this).hasClass('partner_discount_percentage')) {
                        $("input[name='partner_discount_percentage']").val(inputValue);
                        $("input.partner_discount_percentage").val(inputValue);
                        var partner_discount_percentage = inputValue;
                    }
                    var principal_total_amount_taka = 0;
                    var total_office_cost = 0;
                    var total_profit = 0;
                    var total_others_cost = 0;
                    var total_subtotal = 0;
                    var total_tax_vat = 0;
                    var total_eu_price = 0;
                    var total_partner_discount = 0;
                    var total_partner_price = 0;

                    $("tr.thd").each(function() {
                        // get the values from this row:
                        var principal_cost = $("input[name='principal_cost[]']", this).val();
                        var qty = $("input[name='qty[]']", this).val();
                        var year = $("input[name='year[]']", this).val();

                        // if (inputName == 'unit_partner_discount[]') {
                        //     var partner_discount_percentage = $("input[name='unit_partner_discount[]']",this).val();
                        // } else {
                        //     var partner_discount_percentage = partner_discount_percentage;
                        // }
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
                        var unit_tax_vat = unit_subtotal * (tax_vat_percentage / 100);

                        var unit_eu_price = unit_subtotal + unit_tax_vat;

                        if (partner_discount_percentage != null) {
                            var unit_partner_price = unit_eu_price - (unit_eu_price * (
                                partner_discount_percentage / 100));
                        } else {
                            var unit_partner_price = unit_eu_price;
                        }

                        $(this).find(".principal_discount_amount").val(parseFloat(
                            principal_discount_amount).toFixed(2));
                        $(this).find(".principal_unit_total_amount_taka").val(parseFloat(
                            principal_unit_total_amount_taka).toFixed(2));


                        // total_qty += isNaN(qty) ? 0 : qty;

                        principal_total_amount_taka += isNaN(principal_unit_total_amount_taka) ? 0 :
                            principal_unit_total_amount_taka;
                        total_office_cost += isNaN(office_cost) ? 0 : office_cost;
                        total_profit += isNaN(profit) ? 0 : profit;
                        total_others_cost += isNaN(others_cost) ? 0 : others_cost;
                        total_subtotal += isNaN(unit_subtotal) ? 0 : unit_subtotal;
                        total_tax_vat += isNaN(unit_tax_vat) ? 0 : unit_tax_vat;
                        total_eu_price += isNaN(unit_eu_price) ? 0 : unit_eu_price;
                        total_partner_discount += isNaN(partner_discount_percentage) ? 0 :
                            partner_discount_percentage;
                        total_partner_price += isNaN(unit_partner_price) ? 0 : unit_partner_price;



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
                        $("input[name='unit_partner_discount[]']").val(partner_discount_percentage);
                        $("input[name='unit_partner_price[]']", this).val(parseFloat(unit_partner_price)
                            .toFixed(2));
                    });

                    var principal_total_amount_taka = parseFloat(principal_total_amount_taka).toFixed(2);
                    var total_office_cost = parseFloat(total_office_cost).toFixed(2);
                    var total_profit = parseFloat(total_profit).toFixed(2);
                    var total_others_cost = parseFloat(total_others_cost).toFixed(2);
                    var total_subtotal = parseFloat(total_subtotal).toFixed(2);
                    var total_tax_vat = parseFloat(total_tax_vat).toFixed(2);
                    var total_eu_price = parseFloat(total_eu_price).toFixed(2);
                    var total_partner_discount = parseFloat(total_partner_discount).toFixed(2);
                    var total_partner_price = parseFloat(total_partner_price).toFixed(2);

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

                    var remittence_principal_unit_total_amount_taka = parseFloat(remittence_principal_cost *
                        remittence_qty * remittence_year * currency_rate).toFixed(2);

                    var packing_charge_principal_unit_total_amount_taka = parseFloat(
                            packing_charge_principal_cost * packing_charge_qty * packing_charge_year * currency_rate)
                        .toFixed(2);

                    var custom_principal_unit_total_amount_taka = parseFloat(custom_principal_cost * custom_qty *
                        custom_year * currency_rate).toFixed(2);

                    var freight_principal_unit_total_amount_taka = parseFloat(freight_principal_cost *
                        freight_qty * freight_year * currency_rate).toFixed(2);




                    var remittence_unit_office_cost = parseFloat(remittence_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100)).toFixed(2);
                    var remittence_unit_profit = parseFloat(remittence_principal_unit_total_amount_taka * (
                        profit_percentage / 100)).toFixed(2);
                    var remittence_unit_others_cost = parseFloat(remittence_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100)).toFixed(2);

                    var remittence_unit_subtotal = parseFloat(remittence_principal_unit_total_amount_taka + remittence_unit_office_cost + remittence_unit_profit + remittence_unit_others_cost).toFixed(2);
                    var remittence_unit_partner_price = parseFloat(remittence_unit_subtotal - (remittence_unit_subtotal * (partner_discount_percentage / 100))).toFixed(2);

                    // alert(remittence_principal_unit_total_amount_taka + remittence_unit_office_cost + remittence_unit_profit + remittence_unit_others_cost);

                    var packing_charge_unit_office_cost = parseFloat(packing_charge_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100)).toFixed(2);
                    var packing_charge_unit_profit = parseFloat(packing_charge_principal_unit_total_amount_taka * (
                        profit_percentage / 100)).toFixed(2);
                    var packing_charge_unit_others_cost = parseFloat(packing_charge_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100)).toFixed(2);

                    var packing_charge_unit_subtotal = parseFloat(packing_charge_principal_unit_total_amount_taka + packing_charge_unit_office_cost + packing_charge_unit_profit + packing_charge_unit_others_cost).toFixed(2);
                    var packing_charge_unit_partner_price = parseFloat(packing_charge_unit_subtotal - (packing_charge_unit_subtotal * (partner_discount_percentage / 100))).toFixed(2);

                    var custom_unit_office_cost = parseFloat(custom_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100)).toFixed(2);
                    var custom_unit_profit = parseFloat(custom_principal_unit_total_amount_taka * (profit_percentage / 100)).toFixed(2);
                    var custom_unit_others_cost = parseFloat(custom_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100)).toFixed(2);

                    var custom_unit_subtotal = parseFloat(parseFloat(custom_principal_unit_total_amount_taka) + parseFloat(custom_unit_office_cost) + parseFloat(custom_unit_profit) + parseFloat(custom_unit_others_cost)).toFixed(2);
                    var custom_unit_partner_price = parseFloat(custom_unit_subtotal - (custom_unit_subtotal * (partner_discount_percentage / 100))).toFixed(2);

                    var freight_unit_office_cost = parseFloat(freight_principal_unit_total_amount_taka * (
                        office_cost_percentage / 100)).toFixed(2);
                    var freight_unit_profit = parseFloat(freight_principal_unit_total_amount_taka * (profit_percentage / 100)).toFixed(2);
                    var freight_unit_others_cost = parseFloat(freight_principal_unit_total_amount_taka * (
                        others_cost_percentage / 100)).toFixed(2);

                    var freight_unit_subtotal = parseFloat(parseFloat(freight_principal_unit_total_amount_taka) + parseFloat(freight_unit_office_cost) + parseFloat(freight_unit_profit) + parseFloat(freight_unit_others_cost)).toFixed(2);
                    var freight_unit_partner_price = parseFloat(freight_unit_subtotal - (freight_unit_subtotal * (partner_discount_percentage / 100))).toFixed(2);

                    $("input[name='remittence_principal_unit_total_amount_taka']").val(
                        remittence_principal_unit_total_amount_taka);
                    $("input[name='packing_charge_principal_unit_total_amount_taka']").val(
                        packing_charge_principal_unit_total_amount_taka);
                    $("input[name='custom_principal_unit_total_amount_taka']").val(
                        custom_principal_unit_total_amount_taka);
                    $("input[name='freight_principal_unit_total_amount_taka']").val(
                        freight_principal_unit_total_amount_taka);

                    $("input[name='remittence_unit_office_cost']").val(
                        remittence_unit_office_cost);
                    $("input[name='remittence_unit_profit']").val(
                        remittence_unit_profit);
                    $("input[name='remittence_unit_others_cost']").val(
                        remittence_unit_others_cost);
                    $("input[name='packing_charge_unit_office_cost']").val(
                        packing_charge_unit_office_cost);
                    $("input[name='packing_charge_unit_profit']").val(
                        packing_charge_unit_profit);
                    $("input[name='packing_charge_unit_others_cost']").val(
                        packing_charge_unit_others_cost);
                    $("input[name='custom_unit_office_cost']").val(
                        custom_unit_office_cost);
                    $("input[name='custom_unit_profit']").val(
                        custom_unit_profit);
                    $("input[name='custom_unit_others_cost']").val(
                        custom_unit_others_cost);
                    $("input[name='freight_unit_office_cost']").val(
                        freight_unit_office_cost);
                    $("input[name='freight_unit_profit']").val(
                        freight_unit_profit);
                    $("input[name='freight_unit_others_cost']").val(
                        freight_unit_others_cost);

                    $("input[name='remittence_unit_subtotal']").val(
                        remittence_unit_subtotal);
                    $("input[name='packing_charge_unit_subtotal']").val(
                        packing_charge_unit_subtotal);
                    $("input[name='custom_unit_subtotal']").val(
                        custom_unit_subtotal);
                    $("input[name='freight_unit_subtotal']").val(
                        freight_unit_subtotal);

                    $("input[name='remittence_unit_partner_price']").val(
                        remittence_unit_partner_price);
                    $("input[name='packing_charge_unit_partner_price']").val(
                        packing_charge_unit_partner_price);
                    $("input[name='custom_unit_partner_price']").val(
                        custom_unit_partner_price);
                    $("input[name='freight_unit_partner_price']").val(
                        freight_unit_partner_price);



                    $("input[name='principal_total_amount_taka']").val(principal_total_amount_taka);
                    $("input[name='total_office_cost']").val(total_office_cost);
                    $("input[name='total_profit']").val(total_profit);
                    $("input[name='total_others_cost']").val(total_others_cost);
                    $("input[name='total_subtotal']").val(total_subtotal);
                    $("input[name='total_tax_vat']").val(total_tax_vat);
                    $("input[name='total_eu_price']").val(total_eu_price);
                    $("input[name='total_partner_discount']").val(total_partner_discount);
                    $("input[name='total_partner_price']").val(total_partner_price);

                    // For debugging
                    console.log("Input Name:", inputName, "Input Value:", inputValue);
                });
            });
        </script>
    @endpush
@endonce

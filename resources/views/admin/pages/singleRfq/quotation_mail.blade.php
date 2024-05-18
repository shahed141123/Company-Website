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
                                                    <select class="form-control select" id="" name="region" data-allow-clear="true"
                                                        data-placeholder="Select Region">
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
                                                        class="form-control form-control-sm form-setting border"
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
                const table = document.querySelector('.table_bottom_area');
                const rowCount = table.rows.length + 1;
                const row = table.insertRow();

                const cell0 = row.insertCell(0);
                cell0.innerHTML =
                    '<button class="border-0 p-0 text-danger bg-transparent" onclick="deleteRow(this)" title="Delete Row"><i class="fa-regular fa-trash-can"></i></button>';

                const cell1 = row.insertCell(1);
                cell1.innerText = rowCount;

                const cell2 = row.insertCell(2);
                cell2.innerHTML =
                    '<input type="text" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="OPC UA Tunneller (UA+DA+HDA+A&E)">';

                for (let i = 3; i <= 15; i++) {
                    const cell = row.insertCell(i);
                    cell.innerHTML =
                        '<input type="text" class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">';
                }
            }

            function deleteRfqCalculationRow(button) {
                const row = button.closest('tr');
                row.remove();

                const table = document.querySelector('.table_bottom_area');
                const rows = table.rows;
                for (let i = 0; i < rows.length; i++) {
                    rows[i].cells[1].innerText = i + 1;
                }
            }
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

                    $("tr.thd").each(function() {
                        // get the values from this row:
                        var principal_cost = $("input[name='principal_cost[]']", this).val();
                        var qty = $("input[name='qty[]']", this).val();
                        var year = $("input[name='year[]']", this).val();

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

                        $(this).find(".principal_discount_amount").val(parseFloat(
                            principal_discount_amount).toFixed(2));
                        $(this).find(".principal_unit_total_amount_taka").val(parseFloat(
                            principal_unit_total_amount_taka).toFixed(2));

                        // Uncomment and complete other calculations if needed
                        // var unit_sales_price = unit_cost_total - principal_discount_amount;
                        // $(this).find("input[name='discounted_sales[]']").val(unit_sales_price.toFixed(2));
                    });

                    // For debugging
                    console.log("Input Name:", inputName, "Input Value:", inputValue);
                });
            });
        </script>
    @endpush
@endonce

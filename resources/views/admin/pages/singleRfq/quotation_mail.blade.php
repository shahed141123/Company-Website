@extends('admin.master')

@section('content')
    <style>
        .table>:not(caption)>*>* {
            padding: 11px 7px;
        }
    </style>
    <div class="card-body p-4">
        <!-- Nav tabs -->
        <div class="text-center">
            <h3 class="mb-0 py-2">Bypass Process</h3>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-center align-items-center border-0" id="myTab" role="tablist">
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">
                    Quotation
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                    Cost Of Goods
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button"
                    role="tab" aria-controls="messages" aria-selected="false">
                    Source
                </button>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <button class="nav-link" id="setting">
                    <i class="fa-solid fa-gear" style="font-size: 23.6px;"></i>
                </button>
            </li>
        </ul>
        <div id="mysetting">
            <div class="fade-setting show" id="setting-show">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <tbody>
                                        <tr class="">
                                            <td>
                                                <select name="" class="form-select" id="" name="currency">
                                                    <option selected>Currency</option>
                                                    <option value="">Euro ()
                                                    </option>
                                                    <option value="">Doller ($)
                                                    </option>
                                                    <option value="">Pound ()
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="email"
                                                    class="form-control form-control-sm form-setting border" name="rate"
                                                    id="exampleFormControlInput1" placeholder="Currency Rate">
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
                                                <input type="email"
                                                    class="form-control form-control-sm form-setting border"
                                                    name="tax_vat_value" id="exampleFormControlInput1"
                                                    placeholder="Tax Vat Value">
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="principal_disc"
                                                        value="" id="flexCheckDefault">
                                                    <label class="form-check-label  w-100" for="flexCheckDefault">
                                                        Principal Disc
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="email"
                                                    class="form-control form-control-sm form-setting border"
                                                    name="principal_disc_value" id="exampleFormControlInput1"
                                                    placeholder="Principal Discount">
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="partner_disc"
                                                        value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Partner Disc
                                                    </label>
                                                </div>
                                            </td>
                                            <td><input type="email"
                                                    class="form-control form-control-sm form-setting border"
                                                    name="partner_disc_value" id="exampleFormControlInput1"
                                                    placeholder="Partner Discount">
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
            <div class="tab-pane " id="home" role="tabpanel" aria-labelledby="home-tab">
                <form action="">
                    <table cellpadding="0" cellspacing="0"
                        style="border-collapse: collapse;width: 100%;max-width: 750px;margin: 0 auto;background-color: #f4f4f4;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <tr>
                            <td>
                                <!-- Your email content goes here -->
                                <section
                                    style="margin-top: 0rem;margin-bottom: 0rem;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                    <!-- Email Header Start -->
                                    <div class="wrapper" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px">
                                        <!-- Email Header Start -->
                                        <div>
                                            <table id="u_body"
                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;background-color: #ae0a46;"
                                                cellpadding="0" cellspacing="0">
                                                <tbody style="min-width: 20rem">
                                                    <tr
                                                        style="vertical-align: top;display: flex;justify-content: space-between;align-items: center;padding: 15px;">
                                                        <td style="border: 0">
                                                            <a href="https://ngenitltd.com" target="_blank">
                                                                <img src="https://i.ibb.co/qMMpQMj/Logo-White.png"
                                                                    alt="Ngen IT" title="Ngen IT"
                                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 7.5rem; padding-left: 18px;"
                                                                    width="60" />
                                                            </a>
                                                        </td>
                                                        <td style="border: 0">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                value=" NGEN IT PTE. LTD."
                                                                style="font-size: 1.125rem;font-weight: 600;margin-bottom: 0;color: #fff; padding: 0px 18px !important;">

                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                value=" REG-NO: 20437861K"
                                                                style="font-size: 16px; margin-bottom: 3px; color: #eee; padding: 0px 18px !important;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Email Header End -->
                                        <!-- Email User Info Start -->
                                        <div>
                                            <table
                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;overflow: hidden;">
                                                <tbody style="min-width: 20rem">
                                                    <tr style="vertical-align: top">
                                                        <td style="padding: 0rem 1.875rem; text-align: left">
                                                            <div>
                                                                <div style="padding-top: 1.25rem;padding-left: 0;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent"
                                                                        value=" Kawsar Khan"
                                                                        style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent"
                                                                        value=" Samsung"
                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent"
                                                                        value=" khandker@gmail.com"
                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent"
                                                                        value=" 01754348949"
                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent"
                                                                        value=" Dhaka, Bangladesh"
                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            style="width: 0.125rem;background: #eee;padding: 0px;height: 10rem;margin: 0px;position: relative;right: -30px;top: 15px;">
                                                            <p></p>
                                                        </td>
                                                        <td style="padding: 0rem 1.875rem; text-align: right">
                                                            <div>
                                                                <div style="padding-top: 1.25rem;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent text-end"
                                                                        value=" Price Quotation"
                                                                        style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent text-end"
                                                                        value=" Date : 01 January 2024"
                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent text-end"
                                                                        value=" PQ#: NG-BD/Genexis/RV/231021"
                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm bg-transparent text-end"
                                                                        value=" PQR#: MEO-P021(T10)-W(L1)"
                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Email User Info End -->
                                        <!-- Main Content Start -->
                                        <div
                                            style="overflow-x: auto;padding-left: 1.875rem;padding-right: 1.875rem;padding-top: 0.9375rem;padding-bottom: 0.9375rem;">
                                            <table id="myTable"
                                                style="border-collapse: collapse;width: 100%;border: 1px solid #eee;">
                                                <thead>
                                                    <tr
                                                        style="background-color: #e5e5e5;color: #3d3d3d;border: 1px solid #eee;font-size: 13px;">
                                                        <th style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                            <button class="btn btn-primary rounded-0"
                                                                onclick="addRow()"><i
                                                                    class="fa-solid fa-plus"></i></button>
                                                        </th>
                                                        <th style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                            SL</th>
                                                        <th style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                            Product Description</th>
                                                        <th style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                            Qty</th>
                                                        <th style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                            Unit Price</th>
                                                        <th style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                            Total ($)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr
                                                        style="text-align: start;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                        <td
                                                            style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                            <button class="btn btn-danger rounded-0"
                                                                onclick="deleteRow(this)"><i
                                                                    class="fa-regular fa-trash-can"></i></button>
                                                        </td>
                                                        <td
                                                            style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                            1</td>
                                                        <td style="border: 1px solid #eee; padding: 8px; width: 40%">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent"
                                                                value="Citrix Virtual Apps and Desktops Advanced Edition"
                                                                style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                        </td>
                                                        <td
                                                            style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-center"
                                                                value="460"
                                                                style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                        </td>
                                                        <td
                                                            style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-center"
                                                                value="218"
                                                                style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                        </td>
                                                        <td
                                                            style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                value="$100,174.20"
                                                                style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  -->
                                            <div style="display: flex; justify-content: end">
                                                <table
                                                    style="border-collapse: collapse;width: 100%;font-size: 13px;border: 1px solid #eee;">
                                                    <tr
                                                        style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;">
                                                        <th
                                                            style="width: 85%;text-align: end;padding: 0.5rem;color: #3d3d3d;font-weight: 400;">
                                                            Sub Total
                                                        </th>
                                                        <th
                                                            style="width: 15%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                value="$85,148.1"
                                                                style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                        </th>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--  -->
                                            <div>
                                                <div style="display: flex; justify-content: end">
                                                    <table style="border-collapse: collapse;width: 100%;border: none;">
                                                        <tr
                                                            style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                            <td
                                                                style="width: 85%;text-align: end;padding: 10px;color: #3d3d3d;">
                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                    value="Special Discount - 10 %"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                            <td
                                                                style="width: 15%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;">
                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                    value="-5,008.71"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div style="display: flex; justify-content: end">
                                                <table
                                                    style="border: 1px solid #eee;border-collapse: collapse;background-color: #eee;width: 100%;font-size: 13px;">
                                                    <tr
                                                        style="text-align: end;padding: 0.5rem;border: 1px solid #eee;color: #3d3d3d;font-size: 13px;">
                                                        <th
                                                            style="width: 85%;text-align: end;padding: 0.5rem;color: #3d3d3d;border: none;">
                                                            Grand Total
                                                        </th>
                                                        <th
                                                            style="width: 15%;text-align: end;padding: 0.5rem;color: #3d3d3d;text-align: end;border-left: 1px solid #eee;">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                value="$85,148.1"
                                                                style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                        </th>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--  -->
                                            <div
                                                style="display: flex;justify-content: end;margin-top: 1rem;margin-bottom: 1rem;">
                                                <table
                                                    style="border-collapse: collapse;width: 60%;margin: auto;font-size: 13px;border: 1px solid #eee;">
                                                    <tr
                                                        style="width: 6%;text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border-bottom: 1px solid #eee;">
                                                        <th
                                                            style="text-align: center;padding: 0.5rem;color: #3d3d3d;font-weight: 400;">
                                                            <input type="text"
                                                                class="form-control form-control-sm bg-transparent text-center"
                                                                value="GST - 8% Not included. It may apply."
                                                                style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                        </th>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--  -->
                                            <div>
                                                <div>
                                                    <table
                                                        style="margin-top: 0.5rem;border: 1px solid #eee;border-collapse: collapse;width: 100%;">
                                                        <tr
                                                            style="text-align: start;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                            <th colspan="2"
                                                                style="text-align: center;padding: 0.5rem;background-color: #e5e5e5;color: #3d3d3d;border: 1px solid #eee;">
                                                                Terms & Conditions
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">
                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                    value="Validity :"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                            <td
                                                                style="padding: 0.3125rem 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">

                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-center"
                                                                    value=" 7 Day from the PQ date on regular price.Offer may change on the bank forex rate"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">

                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                    value="Payment :"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                            <td
                                                                style="padding: 2px 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">
                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                    value="100% Advanced payment with Work Order. Order cannot be cancelled once issues"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">

                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                    value="Delivery :"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                            <td
                                                                style="padding: 2px 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">
                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                    value="Payment must be made through Telegraphic Transfer (TT) or Wire Transfer"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">

                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                    value="Installation :"
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                            <td
                                                                style="padding: 2px 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">
                                                                <input type="text"
                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                    value="We may reject order on any dispute in
                                                    principal price
                                                    or product non-availability."
                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Main Content End -->
                                        <!-- Column Area -->
                                        <div>
                                            <table id="u_body"
                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                                                cellpadding="0" cellspacing="0">
                                                <tbody style="min-width: 320px">
                                                    <tr>
                                                        <td style="padding: 0">
                                                            <table style="width: 100%; border-collapse: collapse">
                                                                <tbody>
                                                                    <tr>
                                                                        <td
                                                                            style="padding: 0.9375rem;padding-left: 1.875rem;padding-right: 1.875rem;background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);background-size: cover;">
                                                                            <table
                                                                                style="width: 100%; border-collapse: collapse">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td
                                                                                            style="border: 1px solid transparent;text-align: start;color: #ffffff;">
                                                                                            <input type="text"
                                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                                value="Thank You"
                                                                                                style="font-size: 13px;font-weight: 600;margin: 0;color: #000; padding: 0px !important;"">
                                                                                            <input type="text"
                                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                                value="Kawsar  Khan"
                                                                                                style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                            <input type="text"
                                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                                value="Manager, Business"
                                                                                                style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                        </td>
                                                                                        <td
                                                                                            style="text-align: end; color: #ffffff; border: 1px solid transparent;">
                                                                                            <input type="text"
                                                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                                                value="sales@ngenitltd.com"
                                                                                                style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                            <input type="text"
                                                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                                                value="+880 156845 986"
                                                                                                style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                            <input type="text"
                                                                                                class="form-control form-control-sm bg-transparent text-end"
                                                                                                value="+880 156845 987"
                                                                                                style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Column Area End -->
                                        <!-- Email Footer -->
                                        <div>
                                            <table id="u_body"
                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                                                cellpadding="0" cellspacing="0">
                                                <tbody style="min-width: 320px">
                                                    <tr>
                                                        <div
                                                            style="text-align: center;background-color: #ae0a46;padding: 0.9375rem;">
                                                            <a class="" href="www.ngenitltd.com"
                                                                style="color: #ffff;font-size: 1.125rem;text-align: center;letter-spacing: 4px;">www.ngenitltd.com</a>
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Email Footer End-->
                                    </div>
                                    <!-- ... -->
                                </section>
                            </td>
                        </tr>
                    </table>
                    <div>
                        <div class="d-flex justify-content-center align-items-center py-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" name="tax_vat">
                                <label class="form-check-label text-danger" for="flexCheckDefault">
                                    Send Quotation With Attachment
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center py-3 pt-0">
                            <button type="submit" class="btn navigation_btn"><i
                                    class="fa-solid fa-person-circle-check pe-2"></i> Submit for Approval</button>
                            <button type="submit" class="btn navigation_btn"><i
                                    class="fa-regular fa-circle-check pe-2"></i>Send Quotation</button>
                            {{-- <button type="submit" class="btn navigation_btn"><i
                                    class="fa-regular fa-circle-check pe-2"></i>Resend</button>
                            <button type="submit" class="btn navigation_btn"><i
                                    class="fa-regular fa-circle-check pe-2"></i>Share On What's App</button> --}}
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-borderd" style="font-size: 10px !important">
                            <thead>
                                <tr style="background-color: #a9a9a9;color: black;font-size: 15px;">
                                    <th width="3%" class="text-center">
                                        <button class="border-0 p-0 bg-transparent text-white" onclick="addTableRow()"><i
                                                class="fa-solid fa-plus"></i></button>
                                    </th>
                                    <th width="3%" class="text-center">Sl </th>
                                    <th width="14%" class="text-center">Item</th>
                                    <th width="6%" class="text-center">Qty</th>
                                    <th width="7%" class="text-center">Pr. Cost</th>
                                    <th width="6%" class="text-center">Year</th>
                                    <th width="7%" class="text-center">Pr. Disc.</th>
                                    <th width="7%" class="text-center">Total (In TK)</th>
                                    <th width="6%" class="text-center">Office</th>
                                    <th width="6%" class="text-center">Profit</th>
                                    <th width="6%" class="text-center">Others</th>
                                    <th width="7%" rowspan="2" class="text-center">Subtotal
                                    </th>
                                    <th width="7%" class="text-center">Tax/Vat/GST
                                    </th>
                                    <th width="7%" rowspan="2" class="text-center">EU Price</th>
                                    <th width="7%" colspan="2" class="text-center">
                                        Partner Price
                                    </th>
                                </tr>
                                <tr style="background-color: #EAF1DD">
                                    <th class="text-center" colspan="6"></th>
                                    <th class="text-center"><input class="form-control form-control-sm" type="number"
                                            placeholder="0%"></th>
                                    <th class="text-center"></th>
                                    <th class="text-center"><input class="form-control form-control-sm" type="number"
                                            placeholder="0%"></th>
                                    <th class="text-center"><input class="form-control form-control-sm" type="number"
                                            placeholder="0%"></th>
                                    <th class="text-center"><input class="form-control form-control-sm" type="number"
                                            placeholder="0%"></th>
                                    <th class="text-center"><input class="form-control form-control-sm" type="number"
                                            placeholder="0%"></th>
                                    <th class="text-center">Dis%</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody class="table_bottom_area">
                                <tr class="">
                                    <td>
                                        <button class="border-0 p-0 text-danger bg-transparent" onclick="deleteRow(this)"
                                            title="Add List Items"><i class="fa-regular fa-trash-can"></i></button>
                                    </td>
                                    <td>1</td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="OPC UA Tunneller (UA+DA+HDA+A&E)" style="">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td class="text-center"><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="table_bottom_area" style="background-color: #e7e7e7">
                                <tr class="">
                                    <td>-</td>
                                    <td>-</td>
                                    <td class="fs-6 text-black">
                                        Remittance
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td class="text-center"><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>-</td>
                                    <td>-</td>
                                    <td class="fs-6 text-black">
                                        Packing Charge
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td class="text-center"><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>-</td>
                                    <td>-</td>
                                    <td class="fs-6 text-black">
                                        Customs / CnF
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td class="text-center"><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>-</td>
                                    <td>-</td>
                                    <td class="fs-6 text-black">
                                        Freight / Logistics
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                    <td class="text-center"><input type="text"
                                            class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                            value="0">
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="text-black" style="font-size: 13px;">
                                    <th class="text-center pe-3" colspan="6"
                                        style="font-size: 20px;background-color: #A6A6A6; color: #fff">
                                        Total:</th>
                                    <th class="text-end pe-3" style="background-color: #A6A6A6; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3" style="background-color: #BFBFBF; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3" style="background-color: #BFBFBF; color: #983c3c">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3" style="background-color: #BFBFBF; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3" style="background-color: #BFBFBF; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3" style="background-color: #BFBFBF; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3" style="background-color: #666666; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3" style="background-color: #434343; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3 text-center" style="background-color: #434343; color: #fff">
                                        Tk. 1,510,340</th>
                                    <th class="text-end pe-3 text-center" colspan="2"
                                        style="background-color: #434343; color: #fff">
                                        Tk. 1,510,340</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                <div>
                    <div class="table-responsive">
                        <table class="table table-borderd" style="font-size: 12px !important">
                            <thead class="text-white" style="background-color: #800000 !important;">
                                <tr>
                                    <th>Sl #</th>
                                    <th>Item</th>
                                    <th>Source 1</th>
                                    <th>Price In BDT</th>
                                    <th>Source 2</th>
                                    <th>Price In BDT</th>
                                    <th>Source 3</th>
                                    <th>Price In BDT</th>
                                    <th>Source 4</th>
                                    <th>Price In BDT</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td>1</td>
                                    <td>"Dell Latitude Rugged 5430 Laptop: 11th Gen.</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>12,305 TK</td>
                                </tr>
                            </tbody>
                            <tfoot class="table-group-divider" style="background-color: #BFBFBF !important;">
                                <tr class="">
                                    <td>1</td>
                                    <td>"Dell Latitude Rugged 5430 Laptop: 11th Gen.</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>Hp Store</td>
                                    <td>12,305 TK</td>
                                    <td>12,305 TK</td>
                                </tr>
                            </tfoot>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
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
    @endpush
@endonce

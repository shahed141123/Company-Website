@extends('admin.master')
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    p {
        font-family: "Poppins", sans-serif;
    }

    @media only screen and (min-width: 620px) {
        .u-row {
            width: 100% !important;
        }
    }
</style>
@section('content')
    <section class="container" style="margin-top: 0.5rem; margin-bottom: 0.5rem">
        <div
            style=" background: white; margin: 0 auto; min-width: 320px; max-width: 100%; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
            <div class="wrapper">
                <!-- Email Header Start -->
                <div>
                    <table id="u_body"
                        style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                        cellpadding="0" cellspacing="0">
                        <tbody style="min-width: 320px">
                            <tr style="vertical-align: top">
                                <div
                                    style="display: flex;justify-content: space-between;align-items: center;padding: 10px 30px;background-color: #ae0a46;">
                                    <div
                                        style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;">
                                        <a href="https://ngenitltd.com" target="_blank">
                                            <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT"
                                                title="Ngen IT"
                                                style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 80px;"
                                                width="60" />
                                        </a>
                                    </div>
                                    <div>
                                        <div style="text-align: end">
                                            <p
                                                style="font-size: 14px;color: #ffff;font-weight: 600; display: flex;justify-content: end;">
                                                <input class="w-lg-225px w-100 form-control form-control-sm" type="text"
                                                    name="company_name" value="NGEN IT PTE. LTD.">
                                            </p>
                                            <div
                                                style="text-align: center;font-size: 14px;padding-bottom: 3px;color: #eee;display:flex;justify-content: space-between;align-items: center;">
                                                <p>REG.NO : </p>
                                                <p> <input class="w-lg-150px w-100 form-control form-control-sm"
                                                        type="text" name="reg_no" value="20437861K"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Email Header End -->
                <!-- Email User Info Start -->
                <div>
                    <table id="u_body"
                        style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                        cellpadding="0" cellspacing="0">
                        <tbody style="min-width: 320px">
                            <tr style="vertical-align: top">
                                <div
                                    style="display: flex;justify-content: space-between;align-items: center;padding: 0px 30px;background-image: url(https://i.ibb.co/vJzzD63/BG.png);background-repeat: no-repeat;background-size: cover;">
                                    <div
                                        style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;">
                                        <div style="padding-top: 20px;padding-bottom: 20px;padding-left: 0;">
                                            <h3 class="mb-1"
                                                style="font-size: 18px;font-family: 'Poppins', sans-serif;color: #ae0a46;">
                                                <input class="w-lg-250px w-100 form-control form-control-sm" type="text"
                                                    name="client_name" value="{{ $rfq_details->name }}"
                                                    placeholder="Client Name">
                                            </h3>
                                            <p style="font-size: 14px;color: #000;">
                                                <input class="w-lg-250px w-100 form-control form-control-sm" type="text"
                                                    name="client_company_name" value="{{ $rfq_details->company_name }}"
                                                    placeholder="Client Company Name">
                                            </p>
                                            <div style="padding-top: 20px">
                                                <p class="mb-1" style="font-size: 14px">
                                                    <a href="mailto:khandkershahed23@gmail.com"
                                                        style="display: flex;align-items: center;">
                                                        <i class="fa-solid fa-envelope"
                                                            style="padding-right: 10px; color: #ae0a46"></i>
                                                        <span style="color: #000">
                                                            <input class="w-lg-200px w-100 form-control form-control-sm"
                                                                type="text" name="client_email"
                                                                value="{{ $rfq_details->email }}"
                                                                placeholder="Client Email">
                                                        </span>
                                                    </a>
                                                </p>
                                                <p class="mb-1" style="font-size: 14px">
                                                    <a href="javascript:void(0;)"
                                                        style="display: flex;align-items: center;">
                                                        <i class="fa-solid fa-phone"
                                                            style="padding-right: 10px; color: #ae0a46"></i>
                                                        <span style="color: #000">
                                                            <input class="w-lg-200px w-100 form-control form-control-sm"
                                                                type="text" name="client_phone"
                                                                value="{{ $rfq_details->phone }}"
                                                                placeholder="Client Phone">
                                                        </span>
                                                    </a>
                                                </p>
                                                <p class="mb-1" style="font-size: 14px">
                                                    <a href="javascript:void(0;)"
                                                        style="display: flex;align-items: center;">
                                                        <i class="fa-solid fa-location-dot"
                                                            style="padding-right: 10px;color: #ae0a46;font-size: 13px;"></i>
                                                        <span style="color: #000">
                                                            <input
                                                                class="w-lg-200px w-100 form-control form-control-sm ms-1"
                                                                type="text" name="client_address"
                                                                value="{{ $rfq_details->address }}"
                                                                placeholder="Client address">
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="width: 2px;background: #eee;padding: 0px;height: 10rem;margin: 0px;position: relative;right: -30px;">
                                        <p></p>
                                    </div>
                                    <div style="text-align: end">
                                        <div>
                                            <div style="display: flex;justify-content: end;margin-bottom: 1.5rem;">
                                                <h3 class="m-0"
                                                    style="padding: 10px;border: 2px solid #ae0a46;color: #ae0a46;width: 250px; text-align:center;">
                                                    Price Quotation </h3>
                                            </div>
                                            <div>
                                                <p class="mb-1"
                                                    style="color: #000;font-size: 14px; display: flex;align-items: center;">
                                                    Date : <input class="w-lg-200px w-100 form-control form-control-sm ms-2"
                                                        type="text" name="date" value="01 January 2024 "
                                                        placeholder="Date"></p>
                                                <p class="mb-1" style="color: #000;font-size: 14px;">
                                                    <input class="w-lg-250px w-100 form-control form-control-sm"
                                                        type="text" name="company_pq"
                                                        value="PQ#: NG-BD/Genexis/RV/231021 " placeholder="company pq">
                                                </p>
                                                <p class="mb-1" style="color: #000;font-size: 14px;">
                                                    <input class="w-lg-250px w-100 form-control form-control-sm"
                                                        type="text" name="company_pqr"
                                                        value="PQR#: MEO-P021(T10)-W(L1) " placeholder="company pqr">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Email User Info End -->
                <!-- Main Content Start -->
                <div style="padding: 30px;">
                    <table style="border-collapse: collapse;width: 100%;border: 1px solid #eee;">
                        <!-- Table Header Start -->
                        <thead>
                            <tr style="background-color: #e5e5e5;color: #000;border: 1px solid #eee;font-size: 14px;">
                                <th style="text-align: center; padding: 8px; font-weight: 400;">
                                    <a href="javascript:void(0)" class="addRow">
                                        <span> <i class="fa-solid fa-plus dash-icons"></i></span>
                                    </a>
                                </th>
                                <th style="text-align: center; padding: 8px; font-weight: 400;"> Product Description </th>
                                <th style="text-align: center; padding: 8px; font-weight: 400;">Qty</th>
                                <th style="text-align: center; padding: 8px; font-weight: 400;">Unit Price</th>
                                <th style="text-align: center; padding: 8px; font-weight: 400;">Total ($)</th>
                            </tr>
                        </thead>
                        <tbody class="repeater">
                            <!-- Table Header End -->
                            <tr>
                                <td class="text-center p-0">
                                    <a href="javascript:void(0)" class="removeRow"><i
                                            class="fa-solid fa-minus dash-icons"></i></a>
                                </td>
                                <td class="p-0">
                                    <input type="text" class="form-control w-100" name="item_name[]"
                                        placeholder='Product Name' required>
                                </td>
                                <td class="p-0"> <input type="text" class="form-control" name="qty[]" placeholder='Quantity'>
                                </td>
                                <td class="p-0"> <input type="text" class="form-control" name="unit_price[]" placeholder="Unit Price"></td>
                                <td class="p-0">
                                    <input type="text" class="form-control" name="item_name[]"
                                        placeholder='Total' required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--  -->
                    <div style="display: flex; justify-content: end">
                        <table>
                            <tr>
                                <th>
                                    Sub Total </th>
                                <th>
                                    $85,148.1 </th>
                            </tr>
                        </table>
                    </div>
                    <!--  -->
                    <div>
                        <div style="display: flex; justify-content: end">
                            <table style="border-collapse: collapse; width: 100%; border: none">
                                <tr
                                    style="
                      text-align: end;
                      padding: 8px;
                      color: #000;
                      font-size: 14px;
                      border: 1px solid #eee;
                    ">
                                    <td
                                        style="
                        width: 85%;
                        text-align: end;
                        padding: 10px;
                        color: #000;
                      ">
                                        Special Discount - 10 % </td>
                                    <td
                                        style="
                        width: 15%;
                        text-align: end;
                        padding: 8px;
                        border-left: 1px solid #eee;
                        color: #000;
                      ">
                                        -5,008.71 </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div style="display: flex; justify-content: end">
                        <table
                            style="
                  border: 1px solid #eee;
                  border-collapse: collapse;
                  background-color: #eee;
                  width: 100%;
                  font-size: 14px;
                ">
                            <tr
                                style="
                    text-align: end;
                    padding: 8px;
                    border: 1px solid #eee;
                    color: #000;
                    font-size: 14px;
                  ">
                                <th
                                    style="
                      width: 85%;
                      text-align: end;
                      padding: 8px;
                      color: #000;
                      border: none;
                    ">
                                    Grand Total </th>
                                <th
                                    style="
                      width: 15%;
                      text-align: end;
                      padding: 8px;
                      color: #000;
                      text-align: end;
                      border-left: 1px solid #eee;
                    ">
                                    $85,148.1 </th>
                            </tr>
                        </table>
                    </div>
                    <!--  -->
                    <div style="display: flex; justify-content: end;margin-top: 1rem; margin-bottom: 1rem;">
                        <table
                            style="
                  border-collapse: collapse;
                  width: 60%;
                  margin: auto;
                  font-size: 14px;
                  border: 1px solid #eee;
                ">
                            <tr
                                style="
                  width: 6%;
                    text-align: end;
                    padding: 8px;
                    color: #000;
                    font-size: 14px;
                    border-bottom: 1px solid #eee;
                  ">
                                <th
                                    style="
                      text-align: center;
                      padding: 8px;
                      color: #000;
                      font-weight: 400;
                    ">
                                    <span>
                                        <strong>GST - 8%</strong> Not included. It may apply. </span>
                                </th>
                            </tr>
                        </table>
                    </div>
                    <!--  -->
                    <div>
                        <div class="table-responsive">
                            <table class="w-100">
                                <tbody class="text-center">
                                    <tr>
                                        <td width="25%">Validity </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="validity" class="form-control maxlength"
                                                form-control-sm maxlength="200"
                                                value="7 Days from the PQ date.Offer may change on the bank forex rate or stock availability" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="validity" value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="validity" value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Payment </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="payment"
                                                class="form-control form-control-sm maxlength" maxlength="200"
                                                value="250% advanced payment with Work Order for Renewal order Excuation" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="payment" value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="payment" value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Payment Mode </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="payment_mode"
                                                class="form-control form-control-sm maxlength" maxlength="200"
                                                value="Payment must be through Cheque/EFTN/WT & hit in the NGen IT account" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="payment_mode"
                                                        value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="payment_mode"
                                                        value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Delivery </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="delivery"
                                                class="form-control form-control-sm maxlength" maxlength="200"
                                                value="3 business wks upon receiving of WO & Payment.Extended time may require for disaster issues" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="delivery" value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="delivery" value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Delivery Location </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="delivery_location"
                                                class="form-control form-control-sm maxlength" maxlength="200"
                                                value="Automatice Renewal Activation to the Licenses & Client's Console Panel" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="delivery_location"
                                                        value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="delivery_location"
                                                        value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Product & Order </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="product_order"
                                                class="form-control form-control-sm maxlength" maxlength="200"
                                                value="May reject/modify order on any dispute in pr. price or product non-availability during execuation" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="product_order"
                                                        value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="product_order"
                                                        value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Installation Support </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="installation_support"
                                                class="form-control form-control-sm maxlength" maxlength="200"
                                                value="Not Applicable. Local Support is Not Included with this Cost as per requirements" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="installation_support"
                                                        value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="installation_support"
                                                        value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Pmt Condition </td>
                                        <td width="50%" class="p-0">
                                            <input type="text" name="pmt_condition"
                                                class="form-control form-control-sm maxlength" maxlength="200"
                                                value="1.5% penalty per week on late from 7 days of / Payment Date" />
                                        </td>
                                        <td width="25%">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="me-2 d-flex align-items-center">
                                                    <input type="radio" id="html" name="pmt_condition"
                                                        value="HTML">
                                                    <label for="html" class="ps-1">Show</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="css" name="pmt_condition"
                                                        value="hide">
                                                    <label for="css" class="ps-1">Hide</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->
                <!-- Column Area -->
                <div>
                    <table id="u_body"
                        style="
                border-collapse: collapse;
                table-layout: fixed;
                border-spacing: 0;
                vertical-align: top;
                min-width: 320px;
                margin: 0 auto;
                width: 100%;
              "
                        cellpadding="0" cellspacing="0">
                        <tbody style="min-width: 320px">
                            <tr>
                                <div
                                    style="
                      padding: 15px;
                      padding-left: 30px;
                      padding-right: 30px;
                      background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);
                    ">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <div style="text-align: start">
                                            <p style="font-size: 14px; font-weight: 600; padding-bottom: 0.5rem;">Thank You
                                            </p>
                                            <p style="color: #ae0a46;">Kawsar Khan</p>
                                            <p style="color: #ae0a46;font-size: 14px;">Manager, Business </p>
                                        </div>
                                        <!-- <p>Thank You</p> -->
                                        <div>
                                            <div
                                                style="
                            display: flex;
                            font-size: 14px;
                            justify-content: end;
                          ">
                                                <p style="font-size: 14px; padding-bottom: 0.5rem; font-weight: 600;">
                                                    Contact</p>
                                            </div>
                                            <div
                                                style="
                            display: flex;
                            font-size: 14px;
                            justify-content: end;
                          ">
                                                <p>sales@ngenitltd.com <i class="fa-solid fa-paper-plane"
                                                        style="color: #ae0a46;"></i>
                                                </p>
                                            </div>
                                            <div
                                                style="
                            display: flex;
                            font-size: 14px;
                            justify-content: end;
                          ">
                                            </div>
                                            <div
                                                style="
                        display: flex;
                        font-size: 14px;
                        justify-content: end;
                        align-items: center;
                      ">
                                                <p>+880 156845 985 <i class="fa-brands fa-skype fa-fw"
                                                        style="color: #ae0a46;"></i>
                                                </p>
                                            </div>
                                            <div
                                                style="
                        display: flex;
                        font-size: 14px;
                        justify-content: end;
                        align-items: center;
                      ">
                                                <p>+880 156845 985 <i class="fa-brands fa-whatsapp"
                                                        style="color: #ae0a46;"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Column Area End -->
                <!-- Email Footer -->
                <div>
                    <table id="u_body"
                        style="
                border-collapse: collapse;
                table-layout: fixed;
                border-spacing: 0;
                vertical-align: top;
                min-width: 320px;
                margin: 0 auto;
                width: 100%;
              "
                        cellpadding="0" cellspacing="0">
                        <tbody style="min-width: 320px">
                            <tr>
                                <div
                                    style="
                      text-align: center;
                      background-color: #ae0a46;
                      padding: 15px;
                    ">
                                    <a class="" href="www.ngenitltd.com"
                                        style="
                        color: #ffff;
                        font-size: 14px;
                        text-align: center;
                        letter-spacing: 4px;
                      ">www.ngenitltd.com</a>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Email Footer End-->
            </div>
        </div>
    </section>
@endsection
@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('thead').on('click', '.addRow', function() {

                    var tr = "<tr>" +
                        "<td class='text-center'> <a href='javascript:void(0)' class='removeRow'><i class='ph-minus dash-icons'></i></a></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='item_name[]' placeholder='Product Name' required></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='qty[]' placeholder='Quantity' required></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='unit_price[]' placeholder='Unit Price' ></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='item_name[]' placeholder='Total' required></td></td>" +
                        "</tr>";

                    $('.repeater').append(tr);
                });

                $('tbody').on('click', '.removeRow', function() {
                    $(this).parent().parent().remove();
                });
            });
        </script>
    @endpush
@endonce

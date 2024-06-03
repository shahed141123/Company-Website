<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quotation PDF</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap/bootstrap@5.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Google Fonts -->
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />  -->

    <!-- Custom Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            /* font-family: "Raleway", sans-serif; */
            margin: 0;
        }

        /* Resetting some default styles for consistency */
        a,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            text-decoration: none;
            padding: 0;
            margin: 0;
        }

        /* Table Styles */
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

        .content-table {
            width: 10rem;
        }

        .icons-input input {
            width: 6.5rem;
        }

        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }

            .content-table {
                width: 0 !important;
            }

            .icons-area {
                width: 55%;
            }

            .icons-input {
                width: auto;
            }

            .icons-input input {
                width: auto;
            }

            .rfqs-btns {
                font-size: 8px !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0" style="height: 100vh !important;">
        <table cellpadding="0" cellspacing="0" class="qutatation-form"
            style="border-collapse: collapse;margin: 0 auto;background-color: #f4f4f4;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
            <tr>
                <td>
                    <section
                        style="margin-top: 0rem;margin-bottom: 0rem;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; height: 100vh;">
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
                                                    <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT"
                                                        title="Ngen IT"
                                                        style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 7.5rem; padding-left: 18px;"
                                                        width="60" />
                                                </a>
                                            </td>
                                            <td style="border: 0">
                                                <p
                                                    style="font-size: 2em;font-weight: 600;margin-bottom: 0;color: #fff; padding: 0px 18px !important;">
                                                    {{ $quotation->quotation_title }}
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Email Header End -->
                            <!-- Email User Info Start -->
                            <div class="">
                                <table
                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;overflow: hidden;">
                                    <tbody style="min-width: 20rem">
                                        <tr style="vertical-align: top">
                                            <td style="padding: 0rem 1.875rem; text-align: left">
                                                <div>
                                                    <div style="padding-top: 1.25rem;padding-left: 0;">
                                                        <p
                                                            style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                            {{ $quotation->company_name }}</p>
                                                        <p
                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            {{ $quotation->name }}</p>
                                                        <p
                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            {{ $quotation->email }}</p>
                                                        <p
                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            {{ $quotation->phone }}</p>
                                                        <p
                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                            {{ $quotation->address }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="content-table"
                                                style="padding: 0px;height: 10rem;margin: 0px;position: relative;right: -30px;top: 15px;">
                                                <p></p>
                                            </td>
                                            <td style="padding: 0rem 1.875rem; text-align: right">
                                                <div>
                                                    <div style="padding-top: 1.25rem;">
                                                        <div class="text-start">
                                                            <p
                                                                style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                                {{ $quotation->ngen_company_name }}
                                                            </p>
                                                        </div>
                                                        <div class="text-start">
                                                            <p
                                                                style="font-size: 13px;color: #4a5472;padding: 0px!important;width: 9rem;">
                                                                REG NO: {{ $quotation->ngen_company_registration_number }}
                                                            </p>
                                                        </div>
                                                        <div class="text-start">
                                                            <p
                                                                style="width:9rem;font-size: 13px;font-family: 'Poppins', sans-serif;color: #4a5472;padding: 0px !important;">
                                                                Date : {{ $quotation->quotation_date }}
                                                            </p>
                                                        </div>
                                                        <div class="text-start">
                                                            <p
                                                                style="width:15rem;font-size: 13px;font-family: 'Poppins', sans-serif;color: #4a5472;padding: 0px !important;">
                                                                {{ $quotation->pq_code }}
                                                            </p>
                                                        </div>
                                                        <div class="text-start">
                                                            <p
                                                                style="width:15rem;font-size: 13px;font-family: 'Poppins', sans-serif;color: #4a5472;padding: 0px !important;">
                                                                {{ $quotation->pqr_code }}
                                                            </p>
                                                        </div>

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
                                <table id="quotationTable"
                                    style="border-collapse: collapse;width: 100%;border: 1px solid #eee;">
                                    <thead class="text-center">
                                        <tr
                                            style="background-color: #e5e5e5;color: #3d3d3d;border: 1px solid #eee;font-size: 13px;">
                                            <th width="6%"
                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                SL</th>
                                            <th width="49%"
                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                Product Description</th>
                                            <th width="8%"
                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                Qty</th>
                                            <th width="15%"
                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                Unit Price (<span class="currency"></span>)</th>
                                            <th width="15%"
                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                Total (<span class="currency"></span>)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="quotationTable_area text-center">
                                        @if ($products->count() > 0)
                                            @foreach ($products as $product)
                                                <tr class="tdsp text-center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <input type="text" name="quotation_product_name[]"
                                                            class="form-control form-control-sm border-0 bg-transparent text-start"
                                                            value="{{ $product->product_name }}">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="quotation_qty[]"
                                                            class="form-control form-control-sm border-0 bg-transparent text-center"
                                                            value="{{ $product->qty }}">
                                                    </td>

                                                    <td><input type="text" name="quotation_unit_final_price[]"
                                                            class="form-control form-control-sm border-0 bg-transparent text-center"
                                                            value="0">
                                                    </td>
                                                    <td class=" text-center">
                                                        <input type="text" name="quotation_unit_final_total_price[]"
                                                            class="form-control form-control-sm border-0 bg-transparent text-center"
                                                            value="0">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr> No Data Available</tr>
                                        @endif

                                    </tbody>
                                </table>
                                <!--  -->
                                <div style="display: flex; justify-content: end">
                                    <table
                                        style="border-collapse: collapse;width: 100%;font-size: 13px;border-top: 2px solid #eee;">
                                        <tr style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;">
                                            <th
                                                style="width: 85%;text-align: end;padding: 0.5rem;color: #3d3d3d;border: none;">
                                                Sub Total
                                            </th>
                                            <th class="d-flex align-items-center"
                                                style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                                @if (condition)
                                                    <p class="currency mb-0"></p>
                                                @else

                                                @endif
                                                <p class="text-center" style="color: #3d3d3d;padding: 0px !important;">{{  }}</p>
                                                <input type="text" readonly name="sub_total_final_total_price"
                                                    class="form-control form-control-sm border-0 bg-transparent text-center rfqcalculationinput"
                                                    value="0" style="color: #3d3d3d;padding: 0px !important;">
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                <!--  -->
                                <div class="special_discount" style="display: none;">
                                    <div style="display: flex; justify-content: end">
                                        <table style="border-collapse: collapse;width: 100%;border: none;">
                                            <tr
                                                style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                <td style="width: 85%;text-align: end;padding: 10px;color: #3d3d3d;">
                                                    Special Discount (<span class="special_discount_value"></span>)
                                                </td>
                                                <td class="d-flex align-items-center"
                                                    style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                                    <span class="currency"></span>
                                                    <input type="text" name="special_discount_final_total_price"
                                                        class="form-control form-control-sm border-0 bg-transparent text-center"
                                                        value="0"
                                                        style="color: #3d3d3d;padding: 0px !important;">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="vat_display" style="display: none;">
                                    <div style="display: flex; justify-content: end">
                                        <table style="border-collapse: collapse;width: 100%;border: none;">
                                            <tr
                                                style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                <td style="width: 85%;text-align: end;padding: 10px;color: #3d3d3d;">
                                                    Vat (<span class="vat_tax_value"></span>)
                                                </td>
                                                <td class="d-flex align-items-center"
                                                    style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                                    <span class="currency"></span>
                                                    <input type="text" name="vat_final_total_price"
                                                        class="form-control form-control-sm border-0 bg-transparent text-center"
                                                        value="0"
                                                        style="color: #3d3d3d;padding: 0px !important;">
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
                                            <th class="d-flex align-items-center"
                                                style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                                <p class="currency mb-0"></p>
                                                <input type="text" name="total_final_total_price" readonly
                                                    class="form-control form-control-sm border-0 bg-transparent text-center"
                                                    value="0" style="color: #3d3d3d;padding: 0px !important;">
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                <!--  -->
                                <div class="vat_display" style="display: none;">
                                    <div
                                        style="display: flex;justify-content: end;margin-top: 1rem;margin-bottom: 1rem;">
                                        <table
                                            style="border-collapse: collapse;width: 60%;margin: auto;font-size: 13px;border: 1px solid #eee;">
                                            <tr
                                                style="width: 6%;text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border-bottom: 1px solid #eee;">
                                                <th
                                                    style="text-align: center;padding: 0.5rem;color: #3d3d3d;font-weight: 400;">
                                                    <input type="text"
                                                        class="form-control form-control-sm border-0 bg-transparent text-center"
                                                        value="GST - 8% Not included. It may apply."
                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!--  -->
                                <div>
                                    <table class="terms_table w-100">
                                        <thead>
                                            <tr>
                                                <th colspan="2" style="text-align: center;">
                                                    <p class="mb-0 p-2">Terms & Conditions</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="terms_tbody">
                                            <tr>
                                                <td style="width: 10%">
                                                    <input type="text" name="terms_title[]"
                                                        class="form-control form-control-sm border-0 bg-transparent text-start"
                                                        value="Validity :">
                                                </td>
                                                <td>
                                                    <input type="text" name="terms_description[]"
                                                        class="form-control form-control-sm border-0 bg-transparent"
                                                        value="7 Days from the PQ date on regular price. Offer may change on the bank forex rate">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                                                <table style="width: 100%; border-collapse: collapse">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                style="border: 1px solid transparent;text-align: start;color: #ffffff;">
                                                                                <input type="text"
                                                                                    name="thank_you_text"
                                                                                    class="form-control form-control-sm border-0 bg-transparent text-start"
                                                                                    value="Thank You"
                                                                                    style="font-size: 13px;font-weight: 600;margin: 0;color: #000; padding: 0px !important;"">
                                                                                <input type="text"
                                                                                    name="sender_name"
                                                                                    class="form-control form-control-sm border-0 bg-transparent text-start"
                                                                                    value="Kawsar Khan"
                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                <input type="text"
                                                                                    name="sender_designation"
                                                                                    class="form-control form-control-sm border-0 bg-transparent text-start"
                                                                                    value="Manager, Business"
                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                            </td>
                                                                            <td
                                                                                style="text-align: end; color: #ffffff; border: 1px solid transparent;">
                                                                                <input type="text"
                                                                                    name="ngen_email"
                                                                                    class="form-control form-control-sm border-0 bg-transparent text-end"
                                                                                    value="sales@ngenitltd.com"
                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">

                                                                                <div
                                                                                    class="d-flex justify-content-end">
                                                                                    <div class="icons-area"
                                                                                        style="color: #ae0a46;">
                                                                                        <i
                                                                                            class="fa-brands fa-skype"></i>
                                                                                    </div>
                                                                                    <div class="icons-input">
                                                                                        <input type="text"
                                                                                            name="ngen_number_two"
                                                                                            class="form-control form-control-sm border-0 bg-transparent text-end"
                                                                                            value="+880 156845986"
                                                                                            style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-end">
                                                                                    <div class="icons-area"
                                                                                        style="color: #ae0a46;">
                                                                                        <i
                                                                                            class="fa-brands fa-whatsapp"></i>
                                                                                    </div>
                                                                                    <div class="icons-input">
                                                                                        <input type="text"
                                                                                            name="ngen_whatsapp_number"
                                                                                            class="form-control form-control-sm border-0 bg-transparent text-end"
                                                                                            value="+880 156845987"
                                                                                            style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                    </div>
                                                                                </div>
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
                                                <a class="" href="https://www.ngenitltd.com/"
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
    </div>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
</body>

</html>

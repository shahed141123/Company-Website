<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotation PDF</title>
    <link href="{{ asset('frontend/css/bootstrap/bootstrap@5.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 0;
            text-align: left;
            padding: 0px;
        }

        .pdf-header {
            background-color: #ae0a46;
        }

        .header-title {
            color: #ae0a46;
            font-weight: bold;
        }

        p {
            margin: 0;
        }

        .pdf-header-info {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .table-borderd {
            border-color: #eee !important;
        }

        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0" style="background: #f7f7f7;">
        <table class="pdf-header table-responsive w-100 borde-0">
            <thead>
                <th class="p-3" width="32%">
                    <a href="https://ngenitltd.com" target="_blank">
                        <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT" title="Ngen IT"
                            style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 7.5rem; padding-left: 20px;"
                            width="60" />
                    </a>
                </th>
                <th width="36%"></th>
                <th class="p-3" width="32%">
                    <p class="text-start"
                        style="font-size: 2em;font-weight: 600;margin-bottom: 0;color: #fff; padding: 0px 6px !important;">
                        {{ $quotation->quotation_title }}
                    </p>
                </th>
            </thead>
        </table>
        <table class="table-responsive w-100 borde-0 mx-4 pdf-header-info">
            <thead>
                <tr>
                    <th class="header-title" width="32%">
                        Orr and Cross Plc
                    </th>
                    <th width="36%"></th>
                    <th class="header-title" width="32%">
                        NGEN IT LTD.
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sophia Horton</td>
                    <td></td>
                    <td>REG: C-193116/2024</td>
                </tr>
                <tr>
                    <td>taloxefy@mailinator.com</td>
                    <td></td>
                    <td>Date: 08-Nov-1974</td>
                </tr>
                <tr>
                    <td>+1 (918) 743-4911</td>
                    <td></td>
                    <td>PQ#: NG-</td>
                </tr>
                <tr>
                    <td>Obcaecati dolore cor</td>
                    <td></td>
                    <td>C :193116/2024</td>
                </tr>
            </tbody>
        </table>
        <div class="mx-4">
            <table class="table-responsive">
                <thead>
                    <tr style="background-color: #e5e5e5;color: #3d3d3d; border: 1px solid #eee;font-size: 13px;">
                        <th width="6%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                            SL</th>
                        <th width="49%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                            Product Description</th>
                        <th width="8%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                            Qty</th>
                        <th width="15%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                            Unit Price (<span class="currency">TK</span>)</th>
                        <th width="15%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                            Total (<span class="currency">TK</span>)</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($products->count() > 0)
                        @foreach ($products as $quotationproduct)
                            <tr>
                                <td style="text-align: center;">
                                    <p style="margin-bottom: 0; padding: 0.5rem; font-size: 0.9em;">
                                        {{ $loop->iteration }}</p>
                                </td>
                                <td>
                                    <p style="margin-bottom: 0; padding: 0.5rem; font-size: 0.9em;">
                                        {{ $quotationproduct->product_name }}
                                    </p>
                                </td>
                                <td style="text-align: center;">
                                    <p style="margin-bottom: 0; padding: 0.5rem; font-size: 0.9em;">
                                        {{ $quotationproduct->qty }}
                                    </p>
                                </td>
                                <td style="text-align: center;">
                                    <p style="margin-bottom: 0; padding: 0.5rem; font-size: 0.9em;">
                                        {{ round((float) optional($singleproduct)->unit_final_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}
                                    </p>
                                </td>
                                <td style="text-align: center;">
                                    <p style="margin-bottom: 0; padding: 0.5rem; font-size: 0.9em;">
                                        {{ round((float) optional($singleproduct)->unit_final_total_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            No Product Available
                        </tr>
                    @endif
                    <tr style="border-top: 2px solid #eee;">
                        <td colspan="4">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.9em;
                                color: #6f6f6f;">
                                Sub Total
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.9em;
                            color: #6f6f6f;">
                                {{ $currency }}
                                <span>{{ round(
                                    (float) optional($singleproduct)->sub_total_final_total_price /
                                        ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1),
                                ) }}</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.9em;color: #6f6f6f;">
                                Special Discount ( {{ optional($singleproduct)->special_discount_percentage }})
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.9em;color: #6f6f6f;">
                                {{ $currency }}
                                <span>{{ round((float) optional($singleproduct)->special_discount_final_total_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.9em;color: #6f6f6f;">
                                VAT ( {{ optional($singleproduct)->vat_percentage }})
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.9em;color: #6f6f6f;">
                                {{ $currency }}
                                <span>{{ round((float) optional($singleproduct)->vat_final_total_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="background-color: #eee;">
                        <td colspan="4">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.9em;color: #6f6f6f;">
                                Grand Total
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p
                                style="margin-bottom: 0; padding: 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.9em;color: #6f6f6f;">
                                {{ $currency }}
                                <span>{{ round(
                                    (float) optional($singleproduct)->total_final_total_price /
                                        ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1),
                                ) }}</span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin: 0rem 1.5rem;">
            <table style="width: 100%; overflow-x: auto; margin-top: 2rem;">
                <thead style="background-color: #e5e7eb;">
                    <tr>
                        <th colspan="2"
                            style="text-align: center; padding: 0.5rem; font-size: 1em; font-weight: bold; color: #6f6f6f;">
                            Terms & Conditions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rfq_terms as $term)
                        <tr>
                            <td style="width: 18%; padding: 0.5rem; font-size: 0.9em;">
                                {{ $term->title }}
                            </td>
                            <td style="width: 82%; padding: 0.5rem; font-size: 0.9em;">
                                {{ $term->description }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div
            style="padding: 1.5rem 2rem;margin-top: 1.6rem; background-image: url('https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg'); background-size: cover;">
            <table style="width: 100%; border: 0; overflow-x: auto;">
                <thead>
                    <tr>
                        <th
                            style="font-size: 1em;
                        padding-bottom: 20px;
                        font-weight: bold;
                        width: 15%;
                        color: #ae0a46;">
                            {{ $quotation->thank_you_text }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td
                            style="font-size: 0.9em;
                        width: 15%;
                        border-right: 1px solid #c2c1c1;">

                            {{ $quotation->sender_name }}
                        </td>
                        <td style="font-size: 0.9em;
                        padding-left: 40px; width: 30%;">
                            {{ $quotation->ngen_email }}
                        </td>
                        <td rowspan="3" style="width: 30%; text-align: center;">
                            <div style="width:50%; margin: auto;">
                                <p
                                    style="padding: 7px 0px;
                                    font-weight: bold;
                                    color: #ae0a46;
                                    font-size: 1.35em;
                                    margin-bottom: 0;
                                    margin-top: 0.3rem;">
                                    {{ $quotation->ngen_company_name }}
                                </p>
                                <p style="padding: 10px; margin: 0; font-size: 0.9em;">
                                    REG: {{ $quotation->ngen_company_registration_number }}
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-size: 0.9em;width: 15%;
                        border-right: 1px solid #c2c1c1;">
                            {{ $quotation->sender_designation }}
                        </td>
                        <td style="font-size: 0.9em;  padding-left: 40px;
                        width: 15%;">
                            <p style="display: flex; align-items: center">
                                <img src="https://i.ibb.co/HrsRScL/skype.png" alt=""
                                    style="padding-right: 5px;">
                                <span>
                                    {{ $quotation->ngen_number_two }}
                                </span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-size: 0.9em;width: 15%;
                        border-right: 1px solid #c2c1c1;">
                            Dhaka, Bangladesh</td>
                        <td style="font-size: 0.9em; padding-left: 40px;
                        width: 15%; ">
                            <p style="display: flex; align-items: center">
                                <img src="https://i.ibb.co/ChSVmnj/whatsapp.png" alt=""
                                    style="padding-right: 5px;">
                                <span>
                                    {{ $quotation->ngen_whatsapp_number }}
                                </span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table-responsive w-100 borde-0 mx-4 my-5">
            <thead>
                <tr>
                    <th>
                        <p
                            style=" margin-bottom: 0; color: #ffff;
                            font-size: 1.125rem;
                            text-align: center;
                            letter-spacing: 4px;
                            padding: 15px;
                            margin-top: 0;">
                            www.ngenitltd.com
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kawsar Khan</td>
                    <td></td>
                    <td>+880 156845986</td>
                </tr>
                <tr>
                    <td>Manager, Business</td>
                    <td></td>
                    <td>+880 156845987</td>
                </tr>
            </tbody>
        </table>
        <table class="pdf-header table-responsive w-100 borde-0">
            <thead>
                <th class="p-3">
                    <p class="text-center"
                        style="font-size: 1em;font-weight: 600;margin-bottom: 0;color: #fff; padding: 0px 6px !important;">
                        www.ngenitltd.com
                    </p>
                </th>
            </thead>
        </table>
    </div>
</body>

</html>

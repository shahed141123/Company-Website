<!DOCTYPE html>
<html lang="en" style=" width: 100%;
overflow-x: hidden;margin: 0;
            padding: 0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotation PDF</title>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <style>
        html,
        body {
            width: 100%;
            overflow-x: hidden;
            margin: 0;
            padding: 0
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

        .pdf-header-info {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .table-borderd {
            border-color: #eee !important;
        }

        @media screen and (min-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }
    </style>
</head>

<body style="margin: 0; padding: 0; all: unset;  width: 100%;
overflow-x: hidden;">
    <div class="container-fluid px-0" style="background: #f7f7f7;">
        <table style="width: 100%; border: 0; overflow-x: auto; background: #ae0a46;">
            <thead>
                <tr>
                    <th style="padding: 3px; width: 32%;">
                        <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT" title="Ngen IT"
                            style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 7.5rem; padding-left: 20px;"
                            width="60" />
                    </th>
                    <th style="width: 36%;"></th>
                    <th style="padding: 3px; width: 32%;">
                        <p
                            style="font-size: 1.8em; font-weight: 600; margin-bottom: 0; color: #fff; text-align: left;margin-top: 0;">
                            {{ $quotation->quotation_title }}
                        </p>
                    </th>
                </tr>
            </thead>
        </table>
        <table style="width: 100%; border: 0; margin: 0 1.5rem; margin-top: 2.5rem; overflow-x: auto;">
            <thead>
                <tr>
                    <th
                        style="font-size: 1em;
                    font-weight: bold;
                    width: 32%;
                    color: #ae0a46;padding-bottom: 5px;">
                        {{ $quotation->company_name }}
                    </th>
                    <th style="width: 19%;"></th>
                    <th
                        style="font-size: 1em;
                    font-weight: bold;
                    width: 26%;
                    color: #ae0a46;padding-bottom: 5px;">
                        {{ $quotation->pq_code }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.8em;"> {{ $quotation->name }}</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.8em;"> {{ $quotation->pqr_code }}</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.8em;">{{ $quotation->email }}</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.8em;">Date: {{ $quotation->quotation_date }}</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.8em;">{{ $quotation->phone }}</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.8em;"></td>
                </tr>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.8em;">{{ $quotation->address }}</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.8em;"></td>
                </tr>
            </tbody>
        </table>

        <div style="margin: 0 1.5rem; margin-top: 1.5rem;
        ">
            <table style="width: 100%; overflow-x: auto;">
                <thead>
                    <tr style="background-color: #e5e5e5; color: #3d3d3d; border: 1px solid #eee; font-size: 13px;">
                        <th style="width: 6%; text-align: center; padding: 0.3rem 0.5rem; font-weight: 400;">
                            Sl
                        </th>
                        <th style="width: 49%; text-align: center; padding: 0.3rem 0.5rem; font-weight: 400;">
                            Product Description
                        </th>
                        <th style="width: 8%; text-align: center; padding: 0.3rem 0.5rem; font-weight: 400;">
                            Qty
                        </th>
                        <th style="width: 15%; text-align: right; padding: 0.3rem 0.5rem; font-weight: 400;">
                            Unit Price (<span class="currency">{{ $currency }}</span>)
                        </th>
                        <th style="width: 15%;text-align: right;padding: 0.3rem 0.5rem;font-weight: 400;padding-right: 4.4rem;">
                            Total (<span class="currency">{{ $currency }}</span>)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($products->count() > 0)
                        @foreach ($products as $quotationproduct)
                            <tr>
                                <td style="text-align: center;">
                                    <p style="margin: 0; padding: 0.3rem 0.5rem; font-size: 0.8em;">
                                        {{ $loop->iteration }}</p>
                                </td>
                                <td>
                                    <p style="margin: 0; padding: 0.3rem 0.5rem; font-size: 0.8em;">
                                        {{ $quotationproduct->product_name }}
                                    </p>
                                </td>
                                <td style="text-align: center;">
                                    <p style="margin: 0; padding: 0.3rem 0.5rem; font-size: 0.8em;">
                                        {{ $quotationproduct->qty }}
                                    </p>
                                </td>
                                <td style="text-align: right;">
                                    <p style="margin: 0; padding: 0.3rem 0.5rem; font-size: 0.8em;">
                                        {{ round((float) optional($quotationproduct)->unit_final_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}
                                        {{ $currency }}
                                    </p>
                                </td>
                                <td style="text-align: right;padding-right: 4rem;">
                                    <p class="text-end pe-3"
                                        style="margin: 0; padding: 0.3rem 0.5rem; font-size: 0.8em;">
                                        {{ round((float) optional($quotationproduct)->unit_final_total_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}
                                        {{ $currency }}
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
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.8em;
                                color: #6f6f6f;">
                                Sub Total
                            </p>
                        </td>
                        <td style="text-align: right;padding-right: 4rem;">
                            <p class="text-end pe-3"
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.8em;
                            color: #6f6f6f;">
                                <span>{{ round(
                                    (float) optional($singleproduct)->sub_total_final_total_price /
                                        ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1),
                                ) }}</span>
                                {{ $currency }}
                            </p>
                        </td>
                    </tr>
                    <tr
                        style="display: {{ optional($quotation)->special_discount_display == '1' ? 'table-row' : 'none' }};">
                        <td colspan="4">
                            <p
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.8em;color: #6f6f6f;">
                                Special Discount ({{ optional($singleproduct)->special_discount_percentage }}%)
                            </p>
                        </td>
                        <td style="text-align: right;padding-right: 4rem;">
                            <p class="text-end pe-3"
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.8em;color: #6f6f6f;">
                                <span>{{ round((float) optional($singleproduct)->special_discount_final_total_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}</span>
                                {{ $currency }}
                            </p>
                        </td>
                    </tr>
                    <tr style="display: {{ optional($quotation)->vat_display == '1' ? 'table-row' : 'none' }};">
                        <td colspan="4">
                            <p
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.8em;color: #6f6f6f;">
                                VAT ({{ optional($singleproduct)->vat_percentage }}%)
                            </p>
                        </td>
                        <td style="text-align: right;padding-right: 4rem;">
                            <p class="text-end pe-3"
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.8em;color: #6f6f6f;">
                                <span>{{ round((float) optional($singleproduct)->vat_final_total_price / ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1)) }}</span>
                                {{ $currency }}
                            </p>
                        </td>
                    </tr>
                    <tr style="background-color: #eee;">
                        <td colspan="4">
                            <p
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; text-align: right; font-weight: bolder; margin-top: 0;font-size: 0.8em;color: #6f6f6f;">
                                Grand Total
                            </p>
                        </td>
                        <td style="text-align: right;padding-right: 4rem;">
                            <p class="text-end pe-3"
                                style="margin-bottom: 0; padding: 0.3rem 0.5rem; font-weight: bolder; margin-top: 0;font-size: 0.8em;color: #6f6f6f;">
                                <span>{{ round(
                                    (float) optional($singleproduct)->total_final_total_price /
                                        ($quotation->currency_rate > 0 ? (float) $quotation->currency_rate : 1),
                                ) }}</span>
                                {{ $currency }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if (optional($quotation)->vat_display == '1')
            <table style="width: 40%;
        margin: auto;
        text-align: center;
        margin-top: 0.8rem;">
                <tbody style="border: 1px solid #eee;">
                    <tr>
                        <th>
                            <p style="margin: 0; font-size: 0.8em;padding: 10px; color: #6f6f6f; text-align:center">
                                {{ $quotation->vat_text }}</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        @endif


        <div style="margin: 0rem 1.5rem;">
            <table style="width: 100%; overflow-x: auto; margin-top: 0.8rem;">
                <thead style="background-color: #e5e7eb;">
                    <tr>
                        <th colspan="2"
                            style="text-align: center; padding: 0.3rem 0.5rem; font-size: 1em; font-weight: bold; color: #6f6f6f;">
                            Terms & Conditions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rfq_terms as $term)
                        <tr>
                            <td style="width: 20%; padding: 0.3rem 0.5rem; font-size: 0.8em;">
                                {{ $term->title }}
                            </td>
                            <td style="width: 80%; padding: 0.3rem 0.5rem; font-size: 0.8em;">
                                {{ $term->description }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div
            style="padding: 1rem 2rem; margin-top:1rem;background-image: url('https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg'); background-size: cover;">
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
                            style="font-size: 0.8em; padding: 0;
                        width: 15%;
                        border-right: 1px solid #c2c1c1;">
                            {{ $quotation->sender_name }}
                        </td>
                        <td style="font-size: 0.8em;
                        padding-left: 40px; width: 30%;">
                            {{ $quotation->ngen_email }}
                        </td>
                        <td rowspan="3" style="width: 30%; text-align: center;">
                            <div style="width:100%; margin: auto;">
                                <p
                                    style="
                                    font-weight: bold;
                                    color: #ae0a46;
                                    font-size: 1.35em;
                                    margin-bottom: 0;
                                    margin-top: 0.1rem;">
                                    {{ $quotation->ngen_company_name }}
                                </p>
                                <p style="padding: 5px; margin: 0; font-size: 0.8em;">
                                    REG: {{ $quotation->ngen_company_registration_number }}
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-size: 0.8em;width: 15%; margin:0; padding:0;
                        border-right: 1px solid #c2c1c1;">
                            {{ $quotation->sender_designation }}
                        </td>
                        <td style="font-size: 0.8em;  padding-left: 40px;
                        width: 15%;">
                            <p style="margin: 0; font-size: 0.8em;">
                                (What's App) {{ $quotation->ngen_whatsapp_number }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="font-size: 0.8em;width: 15%;
                        border-right: 1px solid #c2c1c1;">
                            <p style="margin: 0; font-size: 0.8em;">Dhaka, Bangladesh</p>
                        </td>
                        <td style="font-size: 0.8em; padding-left: 40px;
                        width: 15%; ">
                            <p style="margin: 0; font-size: 0.8em;">
                                (Skype) {{ $quotation->ngen_number_two }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table style="width: 100%; border: 0; overflow-x: auto; background: #ae0a46;">
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
        </table>
    </div>
</body>

</html>

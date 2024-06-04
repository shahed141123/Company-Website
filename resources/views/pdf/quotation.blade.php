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
                            style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 7.5rem;padding-left: 6px;"
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
                    <tr>
                        <td class="text-center">1</td>
                        <td>
                            <p class="mb-0 p-2">
                                Acronis Access - subscription license (annual) - 1 user
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2">
                                1
                            </p>
                        </td>

                        <td class="text-center">
                            <p class="mb-0 p-2">
                                393
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2">
                                393
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>
                            <p class="mb-0 p-2">
                                Acronis Access - subscription license (annual) - 1 user
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2">
                                1
                            </p>
                        </td>

                        <td class="text-center">
                            <p class="mb-0 p-2">
                                393
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2">
                                393
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>
                            <p class="mb-0 p-2">
                                Acronis Access - subscription license (annual) - 1 user
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2">
                                1
                            </p>
                        </td>

                        <td class="text-center">
                            <p class="mb-0 p-2">
                                393
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2">
                                393
                            </p>
                        </td>
                    </tr>
                    <tr style="border-top: 2px solid #eee;">
                        <td colspan="4">
                            <p class="mb-0 p-2 text-end fw-bolder">
                                Sub Total
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2 fw-bolder">
                                Tk <span>552</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="background-color: #eee;">
                        <td colspan="4">
                            <p class="mb-0 p-2 text-end fw-bolder">
                                Grand Total
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 p-2 fw-bolder">
                                Tk <span>552</span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mx-4">
            <table class="table-responsive w-100 mt-5">
                <thead style="background-color: #e5e7eb;">
                    <tr>
                        <th colspan="2" class="header-title text-center p-2">
                            Terms & Conditions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="15%" class="p-2">
                            Validate:
                        </td>
                        <td width="85%" class="p-2">
                            Provident eu qui ea
                        </td>
                    </tr>
                    <tr>
                        <td width="15%" class="p-2">
                            Validate:
                        </td>
                        <td width="85%" class="p-2">
                            Provident eu qui ea
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table-responsive w-100 borde-0 mx-4 my-5">
            <thead>
                <tr>
                    <th class="header-title" width="32%">
                        Thank You
                    </th>
                    <th width="36%"></th>
                    <th class="header-title" width="32%">
                        sales@ngenitltd.com
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

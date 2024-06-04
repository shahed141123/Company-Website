<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotation PDF</title>
    <link href="{{ asset('frontright/css/bootstrap/bootstrap@5.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        html,
        body {
            width: 100%;
            overflow-x: hidden;
            margin: 0;
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

<body style="margin: 0; padding: 0; all: unset;">
    <div class="container-fluid px-0" style="background: #f7f7f7;">
        <table style="width: 100%; border: 0; overflow-x: auto; background: #ae0a46;">
            <thead>
                <tr>
                    <th style="padding: 3px; width: 32%;">
                        <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT" title="Ngen IT"
                            style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 7.5rem; padding-left: 6px;"
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
                        Orr and Cross Plc
                    </th>
                    <th style="width: 36%;"></th>
                    <th
                        style="font-size: 1em;
                    font-weight: bold;
                    width: 32%;
                    color: #ae0a46;padding-bottom: 5px;">
                        NGEN IT LTD.
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">Sophia Horton</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">REG: C-193116/2024</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">taloxefy@mailinator.com</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">Date: 08-Nov-1974</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">+1 (918) 743-4911</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">PQ#: NG-</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">Obcaecati dolore cor</td>
                    <td></td>
                    <td style="padding-bottom: 5px; font-size: 0.9em;">C: 193116/2024</td>
                </tr>
            </tbody>
        </table>

        <div style="margin: 0 1.5rem; margin-top: 3rem;
        ">
            <table style="width: 100%; overflow-x: auto;">
                <thead>
                    <tr style="background-color: #e5e5e5; color: #3d3d3d; border: 1px solid #eee; font-size: 13px;">
                        <th style="width: 6%; text-align: center; padding: 0.5rem; font-weight: 400;">
                            SL
                        </th>
                        <th style="width: 49%; text-align: center; padding: 0.5rem; font-weight: 400;">
                            Product Description
                        </th>
                        <th style="width: 8%; text-align: center; padding: 0.5rem; font-weight: 400;">
                            Qty
                        </th>
                        <th style="width: 15%; text-align: center; padding: 0.5rem; font-weight: 400;">
                            Unit Price (<span class="currency">TK</span>)
                        </th>
                        <th style="width: 15%; text-align: center; padding: 0.5rem; font-weight: 400;">
                            Total (<span class="currency">TK</span>)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                Acronis Access - subscription license (annual) - 1 user
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                1
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                393
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                393
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                Acronis Access - subscription license (annual) - 1 user
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                1
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                393
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                393
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                Acronis Access - subscription license (annual) - 1 user
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                1
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                393
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem;">
                                393
                            </p>
                        </td>
                    </tr>
                    <tr style="border-top: 2px solid #eee;">
                        <td colspan="4">
                            <p style="margin-bottom: 0; padding: 0.5rem; text-align: right; font-weight: bolder;">
                                Sub Total
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem; font-weight: bolder;">
                                Tk <span>552</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="background-color: #eee;">
                        <td colspan="4">
                            <p style="margin-bottom: 0; padding: 0.5rem; text-align: right; font-weight: bolder;">
                                Grand Total
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="margin-bottom: 0; padding: 0.5rem; font-weight: bolder;">
                                Tk <span>552</span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin: 0rem 1.5rem;
        margin-top: 3rem;">
            <table style="width: 100%; overflow-x: auto; margin-top: 3rem;">
                <thead style="background-color: #e5e7eb;">
                    <tr>
                        <th colspan="2"
                            style="text-align: center; padding: 0.5rem; font-size: 1em; font-weight: bold;">
                            Terms & Conditions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 15%; padding: 0.5rem;">
                            Validate:
                        </td>
                        <td style="width: 85%; padding: 0.5rem;">
                            Provident eu qui ea
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 15%; padding: 0.5rem;">
                            Validate:
                        </td>
                        <td style="width: 85%; padding: 0.5rem;">
                            Provident eu qui ea
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div
            style="padding: 1.5rem 2rem;margin-top: 2rem; background-image: url('https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg'); background-size: cover;">
            <table style="width: 100%; border: 0; overflow-x: auto;">
                <thead>
                    <tr>
                        <th
                            style="font-size: 1em;
                        padding-bottom: 5px;
                        font-weight: bold;
                        width: 30%;
                        color: #ae0a46;">
                            Thank You
                        </th>
                        <th style="width: 40%;"></th>
                        <th
                            style="font-size: 1em;
                        padding-bottom: 5px;
                        font-weight: bold;
                        width: 30%;
                        color: #ae0a46;">
                            sales@ngenitltd.com
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size: 0.9em;">Kawsar Khan</td>
                        <td></td>
                        <td style="font-size: 0.9em;">+880 156845986</td>
                    </tr>
                    <tr>
                        <td style="font-size: 0.9em;">Manager, Business</td>
                        <td></td>
                        <td style="font-size: 0.9em;">+880 156845987</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <table style="width: 100%; border: 0; overflow-x: auto; background: #ae0a46;">
            <thead>
                <tr>
                    <th>
                        <p
                            style="font-size: 1em; font-weight: 600; margin-bottom: 0; color: #fff; padding: 20px;
                            text-align: center;
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

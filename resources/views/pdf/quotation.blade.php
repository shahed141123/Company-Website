<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quotation PDF</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap/bootstrap@5.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    {{-- <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    /> --}}

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
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        /* Flexbox for Logo Column */
        .logo-column {
            display: flex;
        }

        /* Text Column Styles */
        .text-column {
            color: white;
            text-align: end;
        }

        /* Responsive Image Styles */
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Quotation Header Styles */
        .quotation-header {
            background-color: #ae0a46;
            border: 0;
        }

        .quotation-header td {
            border: 0;
        }

        /* Brand Logo Styles */
        .brand-logo {
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .qutation-client-details {
            padding-bottom: 1.5rem;
            padding-left: 30px;
        }

        .qutation-client-details h2,
        .qutation-details h2 {
            color: #ae0a46;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .qutation-details {
            padding-bottom: 1.5rem;
            padding-right: 20px;
        }

        .qutation-details {
            text-align: end;
        }

        .quotation-info-table td {
            border: 0;
        }

        table {
            background-color: #eee;
        }

        .company-name {
            font-weight: 600;
            color: #ae0a46;
        }

        .table-border {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .table-border th {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .amount-container .sub-total {
            text-align: end;
        }

        .amount-container .special-discount {
            text-align: end;
        }
    </style>
</head>

<body>
    <div class="container px-0">
        <!-- Quotation Header Table -->
        <table width="100%" class="table-responsive border-0 quotation-header-table">
            <tr class="quotation-header">
                <!-- Logo Column -->
                <td class="logo-column">
                    <div class="brand-logo">
                        <!-- NGen IT Logo -->
                        <img src="https://i.ibb.co/GkjPXN7/Logo-NGen-IT-White.png" alt="NGen IT"
                            style="height: 51px" />
                    </div>
                </td>

                <!-- Text Column -->
                <td class="text-column" style="text-align: right;">
                    <div class="header-register" style="text-align: right;">
                        <!-- Company Details -->
                        <h2>NGEN IT LTD.</h2>
                        <p>REG-NO: 20437861K</p>
                    </div>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
        <!-- Qutation Info -->
        <table width="100%" class="table-responsive border-0 quotation-info-table">
            <tr class="">
                <!-- Logo Column -->
                <td class="qutation-client-details">
                    <div>
                        <h2>JICA-PEDACO</h2>
                        <p>Gulshan Point,P:23-26(14th Fl),R:90,Gulshan2,Dhaka1212</p>
                        <p class="company-name">Yojiro Fujiwara</p>
                        <p>
                            <span>admin@padeco.co.jp</span> | <span>+81 (3) 5733-0855</span>
                        </p>
                    </div>
                </td>

                <!-- Text Column -->
                <td class="" style="text-align: right;">
                    <div class="qutation-details" style="text-align: right;">
                        <!-- Company Details -->
                        <h2>PRICE QUOTATION</h2>
                        <p>Date : 19 February 2024</p>
                        <p>PQ#:# asdasdasd</p>
                        <p>PQR#: asdasdasd</p>
                    </div>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
        <!-- Qutation Main content Table -->
        <table width="100%" class="table-responsive table-border pricing-details-table">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Product Description</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Total (TK)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1 Year AMC Standard Support</td>
                    <td>1</td>
                    <td>TK 0.00</td>
                    <td>TK</td>
                </tr>
                <tr class="amount-container">
                    <td colspan="4" class="sub-total">Sub Total</td>
                    <td>TK</td>
                </tr>
                <tr class="amount-container">
                    <td colspan="4" class="special-discount">Special Discount - %</td>
                    <td>TK 0</td>
                </tr>
            </tbody>
            <!-- Add more rows as needed -->
        </table>
        <!-- Additional details or content can be added here -->
    </div>
</body>

</html>

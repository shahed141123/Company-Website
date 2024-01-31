<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFQ Notification</title>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        a {
            color: #3d3d3d;
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
</head>
<script src="https://kit.fontawesome.com/5d4a933115.js" crossorigin="anonymous"></script>

<body>

    <body class="clean-body u_body" style="padding:0 2rem;">
        <section style="margin-top: 0.5rem; margin-bottom: 0.5rem">
            <div
                style="background: white;margin: 0 auto;min-width: 320px;max-width: 70%;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                <div class="wrapper">
                    <!-- Email Header Start -->
                    <div style="overflow-x: auto">
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 70%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px">
                                <tr
                                    style="vertical-align: top;display: flex; justify-content: space-between; text-align: left; padding: 10px 30px; background-color: #ae0a46; ">
                                    <td>
                                        <a href="https://ngenitltd.com" target="_blank">
                                            <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT"
                                                title="Ngen IT"
                                                style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 110px;"
                                                width="60" />
                                        </a>
                                    </td>
                                    <td style="text-align: end;">
                                        <div style="text-align: end">
                                            <p style="font-size: 2.5em;color: #ffff;font-weight: 600;">
                                                NGEN IT LTD.
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="overflow-x: auto">
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px">
                                <tr>
                                    <div style="text-align: left;padding: 15px;">
                                        <h4 style="text-align: left; font-size: 22px;">Dear {{ $data['name'] }}</h4>
                                    </div>
                                </tr>
                                <tr>
                                    <div style="text-align: left;padding: 15px;">
                                        <p style="text-align: left; font-size: 18px;">
                                            We have received your query, Thank you for your interest! Our dedicated
                                            sales
                                            manager/consultant will contact you within two working days.
                                        </p>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="overflow-x: auto">
                        <table id="u_body"
                            style="border: 1px solid #eee;border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 70%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px">
                                <tr>
                                    <th
                                        style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:17px;text-align:left">
                                        Product Name</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                        &nbsp; {{ $data['product_name'] }}</td>
                                </tr>
                                @if (!empty($data['sku_code']))
                                    <tr>
                                        <th
                                            style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:17px;text-align:left">
                                            Product Sku</th>
                                        <td
                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                            &nbsp; {{ $data['sku_code'] }}</td>
                                    </tr>
                                @endif


                                <tr>
                                    <th
                                        style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;font-size:17px;text-align:left">
                                        Fullname</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                        &nbsp; {{ $data['name'] }}</td>
                                </tr>


                                @if (!empty($data['company_name']))
                                    <tr>
                                        <th
                                            style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;font-size:17px;text-align:left">
                                            Company</th>
                                        <td
                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                            &nbsp; {{ $data['company_name'] }}</td>
                                    </tr>
                                @endif


                                {{-- <tr>
                                    <th
                                        style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;font-size:17px;text-align:left">
                                        Address</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                        &nbsp; {{$data['address']}}</td>
                                </tr> --}}

                                @if (!empty($data['phone']))
                                    <tr>
                                        <th
                                            style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;font-size:17px;text-align:left">
                                            Telephone</th>
                                        <td
                                            style="width: 30%;padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                            &nbsp; {{ $data['phone'] }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th
                                        style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;font-size:17px;text-align:left">
                                        Email</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                        &nbsp; <a href="mailto:{{ $data['email'] }}"
                                            target="_blank">{{ $data['email'] }}</a></td>
                                </tr>


                                {{-- <tr>
                                    <th
                                        style="border-bottom:1px solid #e7e7e7;background-color:#f1f1f1;padding:10px 15px;font-size:17px;text-align:left">
                                        Prefered Contact Method</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                        &nbsp; Email</td>
                                </tr> --}}


                                <tr>
                                    <th
                                        style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;font-size:17px;text-align:left">
                                        Inquiry Details</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-bottom:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">

                                        {{ $data['message'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="overflow-x: auto">
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px">
                                <tr>
                                    <div style="text-align: center;padding: 15px;">
                                        <p style="text-align: center; font-size: 15px;">Any Questions ?</p>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="overflow-x: auto;">
                        <table id="u_body"
                            style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; vertical-align: top; min-width: 320px; margin: 0 auto; width: 100%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px;">
                                <tr
                                    style="padding: 15px; padding-left: 30px; padding-right: 30px; background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);">
                                    <td style="text-align: left;">
                                        <div style="text-align: start;">
                                            <p style="font-size: 17px; font-weight: 600; padding-bottom: 0.5rem;">
                                                Thank You</p>
                                            <p style="color: #ae0a46; font-size: 17px;">NGen IT Sales Team</p>
                                        </div>

                                    </td>
                                    <td style="text-align: left;">
                                        <div style="text-align: center;">
                                            <div style="display: flex; font-size: 17px; justify-content: end;">
                                                <p style="font-size: 17px; padding-bottom: 0.5rem; font-weight: 600;">
                                                    Contact</p>
                                            </div>
                                            <div style="display: flex; font-size: 17px; justify-content: end;">
                                                <p style="margin-right: 5px;">sales@ngenitltd.com <i
                                                        class="fa-solid fa-paper-plane" style="color: #ae0a46;"></i>
                                                </p>
                                            </div>
                                            <div style="display: flex; font-size: 17px; justify-content: end;">
                                            </div>
                                            <div
                                                style="display: flex; font-size: 17px; justify-content: end; align-items: center;">
                                                <p style="margin-right: 5px;"> +1 917-720-3055 <i
                                                        class="fa-brands fa-skype fa-fw" style="color: #ae0a46;"></i>
                                                </p>
                                            </div>
                                            <div
                                                style="display: flex; font-size: 17px; justify-content: end; align-items: center;">
                                                <p style="margin-right: 5px;">+880 1714243446 <i
                                                        class="fa-brands fa-whatsapp" style="color: #ae0a46;"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Email Footer -->
                    <div style="overflow-x: auto">
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px">
                                <tr>
                                    <div style="text-align: center;background-color: #ae0a46;padding: 15px;">
                                        <a class="" href="www.ngenitltd.com"
                                            style="color: #ffff;font-size: 14px;text-align: center;letter-spacing: 4px;">www.ngenitltd.com</a>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Email Footer End-->

    </body>

</html>

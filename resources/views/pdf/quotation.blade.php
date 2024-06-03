<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta readonly name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quotation PDF</title>

    <link href="{{ asset('frontend/css/bootstrap/bootstrap@5.min.css') }}" rel="stylesheet" type="text/css" />
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
    <div class="container-fluid px-0">
        <div class="qutatation-form"
            style="border-collapse: collapse;margin: 0 auto;background-color: #f4f4f4;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">

            <section
                style="margin-top: 0rem;margin-bottom: 0rem;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; height: 100vh;">
                <div class="wrapper" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px">
                    <div>
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;background-color: #ae0a46;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 20rem">
                                <tr class="d-flex"
                                    style="vertical-align: top;justify-content: space-between;align-items: center;padding: 15px;">
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
                    <div class="">
                        <table
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;overflow: hidden;">
                            <tbody style="min-width: 20rem;">
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
                                                        REG NO:
                                                        {{ $quotation->ngen_company_registration_number }}
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

                    
                </div>
            </section>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
</body>

</html>

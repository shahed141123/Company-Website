<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Price Quotation</title>
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

            @media print {
                body {
                    background: none;
                }
            }
        }
    </style>
</head>

<body class="clean-body u_body" style="margin: 0; padding: 0; background-color: #f4f4f4">
    <table cellpadding="0" cellspacing="0"
        style="
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        background-color: white;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      ">
        <tr>
            <td>
                <!-- Your email content goes here -->
                <section
                    style="margin-top: 0rem; margin-bottom: 0rem; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                    <!-- Email Header Start -->
                    <div class="wrapper" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <!-- Email Header Start -->
                        <div style="overflow-x: auto">
                            <table id="u_body"
                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;background-color: #ae0a46;"
                                cellpadding="0" cellspacing="0">
                                <tbody style="min-width: 320px">
                                    <tr style="vertical-align: top">
                                        <td style="padding-top: 15px; padding-left:15px;">
                                            <a href="https://ngenitltd.com" target="_blank">
                                                <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT"
                                                    title="Ngen IT"
                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 110px;" />
                                            </a>
                                        </td>
                                        <td
                                            style="padding-top: 15px; padding-right:15px; text-align:right; color:#fff;">
                                            <p
                                                style="
                            font-size: 18px;
                            font-weight: 600;
                            margin-bottom: 0px;">
                                                NGEN IT LTD.
                                            </p>
                                            <p style="font-size: 16px; margin-bottom: 3px">
                                                REG.NO. <span style="color: #eee">20437861K</span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Email Header End -->
                        <!-- Email User Info Start -->
                        <div style="overflow-x: auto">
                            <table
                                style="
                    border-collapse: collapse;
                    table-layout: fixed;
                    border-spacing: 0;
                    vertical-align: top;
                    min-width: 320px;
                    margin: 0 auto;
                    width: 100%;
                  ">
                                <tbody style="min-width: 320px">
                                    <tr style="vertical-align: top">
                                        <td class="text-left" width="60%" style="padding: 0px 5px; text-align: left">
                                            <div>
                                                <div style="padding-top: 5px; padding-bottom: 5px; padding-left: 0;">
                                                    <h3
                                                        style="
                                font-size: 18px;
                                font-family: 'Poppins', sans-serif;
                                color: #ae0a46;">
                                                        {{ $rfq->name }}
                                                    </h3>
                                                    <p style="font-size: 15px; color: #3d3d3d">
                                                        {{ $rfq->company_name }}
                                                    </p>
                                                    <p style="padding-bottom: 5px; font-size: 15px">
                                                        <a href="mailto:{{ $rfq->email }}"
                                                            style="
                                    color: #3d3d3d;
                                    text-decoration: none;">
                                                            <span>{{ $rfq->email }}</span>
                                                        </a>
                                                    </p>
                                                    <p style="padding-bottom: 5px; font-size: 15px">
                                                        <a href="tel:{{ $rfq->phone }}"
                                                            style="
                                    color: #3d3d3d;
                                    text-decoration: none; ">
                                                            <span> {{ $rfq->phone }}</span>
                                                        </a>
                                                    </p>
                                                    @if (!empty($rfq->address))
                                                        <p style="padding-bottom: 5px; font-size: 15px">
                                                            <a href="tel:{{ $rfq->phone }}"
                                                                style="
                                    color: #3d3d3d;
                                    text-decoration: none; ">
                                                                <span> {{ $rfq->address }}</span>
                                                            </a>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td
                        style="
                          width: 2px;
                          background: #eee;
                          padding: 0px;
                          height: 10rem;
                          margin: 0px;
                          position: relative;
                          right: -30px;
                        "
                      >
                        <p></p>
                      </td> --}}
                                        <td class="text-end float-end" width="40%" style="text-align: end">
                                            <div style="padding: 0 15px">
                                                <h3
                                                    style="
                              padding: 10px 5px;
                              color: #ae0a46;
                              text-align: end;
                              font-size: 24px;
                              margin-top: 5px;
                            ">
                                                    PRICE QUOTATION
                                                </h3>
                                                <p
                                                    style="
                              color: #3d3d3d;
                              padding-bottom: 5px;
                              font-size: 15px;
                            ">
                                                    Date : {{ \Carbon\Carbon::now()->format('d F Y') }}
                                                </p>
                                                <p
                                                    style="
                              color: #3d3d3d;
                              padding-bottom: 5px;
                              font-size: 15px;
                            ">
                                                    PQ#: {{ $pq_code }}
                                                </p>
                                                <p
                                                    style="
                              color: #3d3d3d;
                              padding-bottom: 5px;
                              font-size: 15px;
                            ">
                                                    PQR#: {{ $pqr_code_one }}
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Email User Info End -->
                        <!-- Main Content Start -->
                        <div
                            style="
                  overflow-x: auto;
                  padding-left: 10px;
                  padding-right: 10px;
                  padding-top: 8px;
                  padding-bottom: 8px;
                ">
                            <table
                                style="
                    border-collapse: collapse;
                    width: 100%;
                    border: 1px solid #eee;
                  ">
                                <!-- Table Header Start -->
                                <tr
                                    style="
                      background-color: #e5e5e5;
                      color: #3d3d3d;
                      border: 1px solid #eee;
                      font-size: 15px;
                    ">
                                    <th
                                        style="
                        text-align: center;
                        padding: 8px;
                        font-weight: 400;
                      ">
                                        Sl
                                    </th>
                                    <th
                                        style="
                        text-align: center;
                        padding: 8px;
                        font-weight: 400;
                      ">
                                        Product Description
                                    </th>
                                    <th
                                        style="
                        text-align: center;
                        padding: 8px;
                        font-weight: 400;
                      ">
                                        Qty
                                    </th>
                                    <th
                                        style="
                        text-align: center;
                        padding: 8px;
                        font-weight: 400;
                      ">
                                        Unit Price
                                    </th>
                                    <th
                                        style="
                        text-align: center;
                        padding: 8px;
                        font-weight: 400;
                      ">
                                        Total ({{ $currency === 'taka' ? 'TK' : '$' }})
                                    </th>
                                </tr>
                                <!-- Table Header End -->
                                @foreach ($products as $key => $item)
                                    <tr
                                        style="
                       text-align: start;
                       padding: 8px;
                       color: #3d3d3d;
                       font-size: 15px;
                       border: 1px solid #eee;
                     ">
                                        <td
                                            style="
                         border: 1px solid #eee;
                         padding: 8px;
                         text-align: center;
                       ">
                                            {{ ++$key }}
                                        </td>
                                        <td style="border: 1px solid #eee; padding: 8px">
                                            {{ $item->item_name }}
                                        </td>
                                        <td
                                            style="
                         border: 1px solid #eee;
                         padding: 8px;
                         text-align: center;
                       ">
                                            {{ $item->qty }}
                                        </td>
                                        <td
                                            style="
                         border: 1px solid #eee;
                         padding: 8px;
                         text-align: center;
                       ">
                                            {{ $currency === 'taka' ? 'TK' : '$' }}
                                            {{ number_format($item->sales_price / $item->qty, 2) }}
                                        </td>
                                        <td
                                            style="
                         border: 1px solid #eee;
                         padding: 8px;
                         text-align: center;
                       ">
                                            {{ $currency === 'taka' ? 'TK' : '$' }} {{ $item->sales_price }}
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                            <!--  -->
                            <div style="display: flex; justify-content: end">
                                <table
                                    style="
                      border-collapse: collapse;
                      width: 100%;
                      font-size: 15px;
                      border: 1px solid #eee;
                    ">
                                    <tr
                                        style="
                        text-align: end;
                        padding: 8px;
                        color: #3d3d3d;
                        font-size: 15px;
                      ">
                                        <th
                                            style="
                          width: 85%;
                          text-align: end;
                          padding: 8px;
                          color: #3d3d3d;
                          font-weight: 400;
                        ">
                                            Sub Total
                                        </th>
                                        <th
                                            style="
                          width: 15%;
                          text-align: end;
                          padding: 8px;
                          border-left: 1px solid #eee;
                          color: #3d3d3d;
                          text-align: end;
                          font-weight: 400;
                        ">
                                            {{ $currency === 'taka' ? 'TK' : '$' }} {{ $deal_sas->sub_total_sales }}
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <!--  -->
                            @if ($rfq->special == '1')
                                <div>
                                    <div style="display: flex; justify-content: end">
                                        <table
                                            style="
                          border-collapse: collapse;
                          width: 100%;
                          border: none;
                        ">
                                            <tr
                                                style="
                            text-align: end;
                            padding: 8px;
                            color: #3d3d3d;
                            font-size: 15px;
                            border: 1px solid #eee;
                          ">
                                                <td
                                                    style="
                              width: 85%;
                              text-align: right;
                              padding: 10px;
                              color: #3d3d3d;
                            ">
                                                    <p style="font-size:15px; text-align:end;">Special Discount -
                                                        {{ $deal_sas->special_discount }} %</p>
                                                </td>
                                                <td
                                                    style="width: 15%;text-align: end;padding: 8px;border-left: 1px solid #eee;color: #3d3d3d;">
                                                    {{ $currency === 'taka' ? 'TK' : '$' }}
                                                    {{ $deal_sas->sub_total_sales - $deal_sas->special_discounted_sales }}
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                            <!--  -->
                            <!--  -->
                            <div style="display: flex; justify-content: end">
                                <table
                                    style="
                      border: 1px solid #eee;
                      border-collapse: collapse;
                      background-color: #eee;
                      width: 100%;
                      font-size: 15px;
                    ">
                                    <tr
                                        style="
                        text-align: end;
                        padding: 8px;
                        border: 1px solid #eee;
                        color: #3d3d3d;
                        font-size: 15px;
                      ">
                                        <th
                                            style="
                          width: 85%;
                          text-align: end;
                          padding: 8px;
                          color: #3d3d3d;
                          border: none;
                        ">
                                            Grand Total
                                        </th>
                                        <th
                                            style="
                          width: 15%;
                          text-align: end;
                          padding: 8px;
                          color: #3d3d3d;
                          text-align: end;
                          border-left: 1px solid #eee;
                        ">
                                            {{ $currency === 'taka' ? 'TK' : '$' }} {{ $deal_sas->grand_total }}
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <!--  -->
                            @if ($rfq->tax_status == '1')
                                <div
                                    style="
                     display: flex;
                     justify-content: end;
                     margin-top: 1rem;
                     margin-bottom: 1rem;
                   ">
                                    <table
                                        style="
                       border-collapse: collapse;
                       width: 60%;
                       margin: auto;
                       font-size: 15px;
                       border: 1px solid #eee;
                     ">
                                        <tr
                                            style="
                         width: 6%;
                         text-align: end;
                         padding: 8px;
                         color: #3d3d3d;
                         font-size: 15px;
                         border-bottom: 1px solid #eee;
                       ">
                                            <th
                                                style="
                           text-align: center;
                           padding: 8px;
                           color: #3d3d3d;
                           font-weight: 400;
                         ">
                                                <span>
                                                    <strong>GST - 8%</strong> Not included. It may
                                                    apply.
                                                </span>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            @endif
                            <!--  -->
                            <div>
                                <div>
                                    <table
                                        style="
                        margin-top: 0.5rem;
                        border: 1px solid #eee;
                        border-collapse: collapse;
                        width: 100%;
                      ">
                                        <tr
                                            style="
                          text-align: start;
                          padding: 8px;
                          color: #3d3d3d;
                          font-size: 15px;
                          border: 1px solid #eee;
                        ">
                                            <th colspan="2"
                                                style="
                            text-align: center;
                            padding: 8px;
                            background-color: #e5e5e5;
                            color: #3d3d3d;
                            border: 1px solid #eee;
                          ">
                                                Terms & Conditions
                                            </th>
                                        </tr>
                                        @if (!empty($rfq->validity))
                                            <tr>
                                                <td
                                                    style="
                              padding: 5px 10px;
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;
                            ">
                                                    Validity :
                                                </td>
                                                <td
                                                    style="
                              padding: 5px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;
                            ">
                                                    {{ $rfq->validity }}
                                                </td>
                                            </tr>
                                        @endif
                                        @if (!empty($rfq->payment))
                                            <tr>
                                                <td
                                                    style="
                              padding: 5px 10px;
                              /* padding-left: 0px; */
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;
                            ">
                                                    Payment :
                                                </td>
                                                <td
                                                    style="
                              padding: 2px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;
                            ">
                                                    {{ $rfq->payment }}
                                                </td>
                                            </tr>
                                        @endif
                                        @if (!empty($rfq->validity))
                                            <tr>
                                                <td
                                                    style="
                              padding: 5px 10px;
                              /* padding-left: 0px; */
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;
                            ">
                                                    Payment Mode:
                                                </td>
                                                <td
                                                    style="
                              padding: 2px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;
                            ">
                                                    {{ $rfq->payment_mode }}
                                                </td>
                                            </tr>
                                        @endif
                                        @if (!empty($rfq->delivery))
                                            <tr>
                                                <td
                                                    style="
                              padding: 5px 10px;
                              /* padding-left: 0px; */
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;
                            ">
                                                    Delivery :
                                                </td>
                                                <td
                                                    style="
                              padding: 2px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;">
                                                    {{ $rfq->delivery }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($rfq->delivery_location))
                                            <tr>
                                                <td
                                                    style="
                              padding: 5px 10px;
                              /* padding-left: 0px; */
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;">
                                                    Delivery Location :
                                                </td>
                                                <td
                                                    style="
                              padding: 2px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;">
                                                    {{ $rfq->delivery_location }}
                                                </td>
                                        @endif
        </tr>
        @if (!empty($rfq->product_order))
            <tr>
                <td
                    style="
                              padding: 5px 10px;
                              /* padding-left: 0px; */
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;
                            ">
                    Product Order :
                </td>
                <td
                    style="
                              padding: 2px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;
                            ">
                    {{ $rfq->product_order }}
                </td>
            </tr>
        @endif
        @if (!empty($rfq->installation_support))
            <tr>
                <td
                    style="
                              padding: 5px 10px;
                              /* padding-left: 0px; */
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;
                            ">
                    Installation Support :
                </td>
                <td
                    style="
                              padding: 2px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;
                            ">
                    {{ $rfq->installation_support }}
                </td>
            </tr>
        @endif
        @if (!empty($rfq->pmt_condition))
            <tr>
                <td
                    style="
                              padding: 5px 10px;
                              /* padding-left: 0px; */
                              font-size: 13px;
                              color: #3d3d3d;
                              font-weight: 600;
                            ">
                    Pmt Condition :
                </td>
                <td
                    style="
                              padding: 2px 10px;
                              font-size: 13px;
                              font-family: 'Raleway', sans-serif;
                              color: #3d3d3d;">
                    {{ $rfq->pmt_condition }}
                </td>
            </tr>
        @endif
    </table>
    </div>
    </div>
    </div>
    <!-- Main Content End -->
    <!-- Column Area -->
    <div style="overflow-x: auto">
        <table id="u_body"
            style="
                    border-collapse: collapse;
                    table-layout: fixed;
                    border-spacing: 0;
                    vertical-align: top;
                    min-width: 320px;
                    margin: 0 auto;
                    width: 100%;"
            cellpadding="0" cellspacing="0">
            <tbody style="min-width: 320px">
                <tr>
                    <td style="padding: 0">
                        <table style="width: 100%; border-collapse: collapse">
                            <tbody>
                                <tr>
                                    <td
                                        style="
                                  padding: 5px;
                                  padding-left: 30px;
                                  padding-right: 30px;
                                  background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);
                                  background-size: cover;
                                ">
                                        <table
                                            style="
                                    width: 100%;
                                    border-collapse: collapse;
                                  ">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="
                                          text-align: start;
                                          color: #ffffff;
                                        ">
                                                        <p
                                                            style="
                                            font-size: 15px;
                                            font-weight: 600;
                                            padding-bottom: 5px;
                                            margin: 0;
                                            color: #000;
                                          ">
                                                            Thank You
                                                        </p>
                                                        <p style="color: #ae0a46; margin: 0">
                                                            NGen IT Sales Team
                                                        </p>
                                                        <p
                                                            style="
                                            color: #ae0a46;
                                            font-size: 15px;
                                            margin: 0;
                                          ">
                                                            Manager, Business
                                                        </p>
                                                    </td>
                                                    <td
                                                        style="
                                          text-align: end;
                                          color: #ffffff;
                                        ">
                                                        <div
                                                            style="
                                            font-size: 15px;
                                            margin-bottom: 5px;
                                          ">
                                                            <p style="margin: 0; color: #ae0a46">
                                                                sales@ngenitltd.com
                                                                <i class="fa-solid fa-paper-plane"></i>
                                                            </p>
                                                        </div>
                                                        <div
                                                            style="
                                            font-size: 15px;
                                            margin-bottom: 3px;
                                          ">
                                                            <p style="margin: 0; padding: 0; color: #ae0a46">
                                                                (skype) +1 917-720-3055
                                                            </p>
                                                        </div>
                                                        <div style="font-size: 15px">
                                                            <p style="margin: 0; padding: 0; color: #ae0a46">
                                                                (whats app) +880 1714 243446
                                                            </p>
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
    <div style="overflow-x: auto">
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
                          padding: 8px;
                        ">
                        <a class="" href="www.ngenitltd.com"
                            style="
                            color: #ffff;
                            font-size: 18px;
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
    <!-- ... -->
    </section>
    </td>
    </tr>
    </table>
</body>

</html>

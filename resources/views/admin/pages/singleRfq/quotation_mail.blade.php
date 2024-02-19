@extlefts('admin.master')
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
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        padding: 0;
        margin: 0;
      }

      p {
        font-family: "Poppins", sans-serif;
        padding: 0;
        margin: 0;
      }

      @media only screen and (min-width: 620px) {
        .u-row {
          width: 600px !important;
        }
        @media print {
          body {
            background: none;
          }
        }
      }
    </style>
  </head>
  <body class="clean-body u_body" style="margin: 0; padding: 0">
    <table
      cellpadding="0"
      cellspacing="0"
      style="
        border-collapse: collapse;
        width: 100%;
        max-width: 750px;
        margin: 0 auto;
        background-color: #f4f4f4;
      "
    >
      <tr>
        <td>
          <!-- Your email content goes here -->
          <section style="margin-top: 0rem; margin-bottom: 0rem">
            <!-- Email Header Start -->
            <div class="wrapper">
              <!-- Email Header Start -->
              <div style="overflow-x: auto">
                <table
                  id="u_body"
                  style="
                    border-collapse: collapse;
                    table-layout: fixed;
                    border-spacing: 0;
                    vertical-align: top;
                    min-width: 20rem;
                    margin: 0 auto;
                    width: 100%;
                    background-color: #ae0a46;
                  "
                  cellpadding="0"
                  cellspacing="0"
                >
                  <tbody style="min-width: 20rem">
                    <tr>
                      <td style="text-align: start; padding: 10px">
                        <div>
                          <a href="https://ngenitltd.com" target="_blank">
                            <img
                              src="https://i.ibb.co/qMMpQMj/Logo-White.png"
                              alt="Ngen IT"
                              title="Ngen IT"
                              style="
                                outline: none;
                                text-decoration: none;
                                -ms-interpolation-mode: bicubic;
                                clear: both;
                                display: inline-block !important;
                                border: none;
                                height: auto;
                                float: none;
                                width: 7.5rem;
                              "
                              width="60"
                            />
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="text-align: left; padding: 10px">
                          <p
                            style="
                              font-size: 1.125rem;
                              font-weight: 600;
                              margin-bottom: 0;
                              color: #fff;
                              margin: 0;
                              padding: 0;
                            "
                          >
                            NGEN IT PTE. LTD.
                          </p>
                          <p style="font-size: 16px;  margin: 0;
                          padding: 0;">
                            <span style="color: #eee">REG-NO: 20437861K</span>
                          </p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Email Header left -->
              <!-- Email User Info Start -->
              <div style="overflow-x: auto">
                <table
                  style="
                    border-collapse: collapse;
                    table-layout: fixed;
                    border-spacing: 0;
                    vertical-align: top;
                    min-width: 100%;
                    margin: 0 auto;
                    width: 100%;
                    overflow: hidden;
                  "
                >
                  <tbody style="min-width: 100%">
                    <tr style="vertical-align: top">
                      <td style="text-align: left">
                        <div>
                          <div style="padding-top: 1.25rem; padding-left: 0">
                            <h3
                              style="
                                color: #ae0a46;
                                text-align: left;
                                font-size: 0.925rem;
                                margin-top: 10px;
                                margin-bottom: 0;
                                text-align: start;
                              "
                            >
                            {{ $rfq->company_name }}
                            </h3>
                            @if (!empty($rfq->address))
                            <p
                              style="
                                font-size: 13px;
                                color: #3d3d3d;
                                padding: 0;
                                margin: 0;
                              "
                            >
                            {{ $rfq->address }}
                            </p>
                            @leftif
                            <p
                              style="
                                font-size: 13px;
                                color: #3d3d3d;
                                padding: 0;
                                margin: 0;
                              "
                            >
                              {{ $rfq->name }}
                            </p>
                            <div>
                              <p style="font-size: 13px; padding: 0; margin: 0">
                                <a
                                  href="mailto:{{ $rfq->email }}"
                                  style="color: #3d3d3d; text-decoration: none"
                                >
                                  <span>{{ $rfq->email }}</span> |
                                  <span>{{ $rfq->phone }}</span>
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </td>
                      <!-- <td
                        style="
                          width: 0.125rem;
                          background: #eee;
                          padding: 0px;
                          height: 8rem;
                          margin: 0px;
                          position: relative;
                          right: -30px;
                          top: 15px;
                        "
                      >
                        <p></p>
                      </td> -->
                      <td>
                        <div style="text-align: right">
                          <h3
                            style="
                              padding: 0.625rem;
                              color: #ae0a46;
                              text-align: right;
                              font-size: 1.125rem;
                              margin-top: 10px;
                              margin-bottom: 0;
                            "
                          >
                            Price Quotation
                          </h3>
                          <p
                            style="
                              color: #3d3d3d;
                              font-size: 13px;
                              padding: 0;
                              margin: 0;
                            "
                          >
                            Date :
                            <span
                              >{{ \Carbon\Carbon::now()->format('d F Y')
                              }}</span
                            >
                          </p>
                          <p
                            style="
                              color: #3d3d3d;
                              font-size: 13px;
                              padding: 0;
                              margin: 0;
                            "
                          >
                            PQ#: <span>{{ $pq_code }}</span>
                          </p>
                          <p
                            style="
                              color: #3d3d3d;
                              font-size: 13px;
                              padding: 0;
                              margin: 0;
                            "
                          >
                            PQR#: <span>{{ $pqr_code_one }}</span>
                          </p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Email User Info left -->
              <!-- Main Content Start -->
              <div
                style="
                  overflow-x: auto;
                  padding-left: 1.875rem;
                  padding-right: 1.875rem;
                  padding-top: 0.9375rem;
                  padding-bottom: 0.9375rem;
                "
              >
                <table
                  style="
                    border-collapse: collapse;
                    width: 100%;
                    border: 1px solid #eee;
                    margin-top: 3rem;
                  "
                >
                  <!-- Table Header Start -->
                  <tr
                    style="
                      background-color: #e5e5e5;
                      color: #3d3d3d;
                      border: 1px solid #eee;
                      font-size: 13px;
                    "
                  >
                    <th
                      style="
                        text-align: center;
                        padding: 0.5rem;
                        font-weight: 400;
                      "
                    >
                      Sl
                    </th>
                    <th
                      style="
                        text-align: center;
                        padding: 0.5rem;
                        font-weight: 400;
                      "
                    >
                      Product Description
                    </th>
                    <th
                      style="
                        text-align: center;
                        padding: 0.5rem;
                        font-weight: 400;
                      "
                    >
                      Qty
                    </th>
                    <th
                      style="
                        text-align: center;
                        padding: 0.5rem;
                        font-weight: 400;
                      "
                    >
                      Unit Price
                    </th>
                    <th
                      style="
                        text-align: center;
                        padding: 0.5rem;
                        font-weight: 400;
                      "
                    >
                      Total ({{ $currency === 'taka' ? 'TK' : '$' }})
                    </th>
                  </tr>
                  <!-- Table Header left -->

                  @foreach ($products as $key => $item)
                  <tr
                    style="
                      text-align: start;
                      padding: 0.5rem;
                      color: #3d3d3d;
                      font-size: 13px;
                      border: 1px solid #eee;
                    "
                  >
                    <td
                      style="
                        border: 1px solid #eee;
                        padding: 0.5rem;
                        text-align: center;
                      "
                    >
                      {{ ++$key }}
                    </td>
                    <td style="border: 1px solid #eee; padding: 8px">
                      {{ $item->item_name }}
                    </td>
                    <td
                      style="
                        border: 1px solid #eee;
                        padding: 0.5rem;
                        text-align: center;
                      "
                    >
                      {{ $item->qty }}
                    </td>
                    <td
                      style="
                        border: 1px solid #eee;
                        padding: 0.5rem;
                        text-align: center;
                      "
                    >
                      {{ $currency === 'taka' ? 'TK' : '$' }} {{
                      number_format($item->sales_price / $item->qty, 2) }}
                    </td>
                    <td
                      style="
                        border: 1px solid #eee;
                        padding: 0.5rem;
                        text-align: center;
                      "
                    >
                      <span
                        >{{ $currency === 'taka' ? 'TK' : '$' }} {{
                        $item->sales_price }}</span
                      >
                    </td>
                  </tr>
                  @leftforeach
                </table>
                <!--  -->
                <div style="display: flex; justify-content: left">
                  <table
                    style="
                      border-collapse: collapse;
                      width: 100%;
                      font-size: 13px;
                      border: 1px solid #eee;
                    "
                  >
                    <tr
                      style="
                        text-align: left;
                        padding: 0.5rem;
                        color: #3d3d3d;
                        font-size: 13px;
                      "
                    >
                      <th
                        style="
                          width: 85%;
                          text-align: left;
                          padding: 0.5rem;
                          color: #3d3d3d;
                          font-weight: 400;
                        "
                      >
                        Sub Total
                      </th>
                      <th
                        style="
                          width: 15%;
                          text-align: left;
                          padding: 0.5rem;
                          border-left: 1px solid #eee;
                          color: #3d3d3d;
                          text-align: left;
                          font-weight: 400;
                        "
                      >
                        <span
                          >{{ $currency === 'taka' ? 'TK' : '$' }} {{
                          $deal_sas->sub_total_sales }}</span
                        >
                      </th>
                    </tr>
                  </table>
                </div>
                <!--  -->
                @if ($rfq->special == '1')
                <div>
                  <div style="display: flex; justify-content: left">
                    <table
                      style="
                        border-collapse: collapse;
                        width: 100%;
                        border: none;
                      "
                    >
                      <tr
                        style="
                          text-align: left;
                          padding: 0.5rem;
                          color: #3d3d3d;
                          font-size: 13px;
                          border: 1px solid #eee;
                        "
                      >
                        <td
                          style="
                            width: 85%;
                            text-align: left;
                            padding: 10px;
                            color: #3d3d3d;
                          "
                        >
                          Special Discount - {{ $deal_sas->special_discount }}
                        </td>
                        <td
                          style="
                            width: 15%;
                            text-align: left;
                            padding: 0.5rem;
                            border-left: 1px solid #eee;
                            color: #3d3d3d;
                          "
                        >
                          {{ $currency === 'taka' ? 'TK' : '$' }} {{
                          $deal_sas->sub_total_sales -
                          $deal_sas->special_discounted_sales }}
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                @leftif
                <!--  -->
                <!--  -->
                <div style="display: flex; justify-content: left">
                  <table
                    style="
                      border: 1px solid #eee;
                      border-collapse: collapse;
                      background-color: #eee;
                      width: 100%;
                      font-size: 13px;
                    "
                  >
                    <tr
                      style="
                        text-align: left;
                        padding: 0.5rem;
                        border: 1px solid #eee;
                        color: #3d3d3d;
                        font-size: 13px;
                      "
                    >
                      <th
                        style="
                          width: 85%;
                          text-align: left;
                          padding: 0.5rem;
                          color: #3d3d3d;
                          border: none;
                        "
                      >
                        Grand Total
                      </th>
                      <th
                        style="
                          width: 15%;
                          text-align: left;
                          padding: 0.5rem;
                          color: #3d3d3d;
                          text-align: left;
                          border-left: 1px solid #eee;
                        "
                      >
                        <span
                          >{{ $currency === 'taka' ? 'TK' : '$' }} {{
                          $deal_sas->grand_total }}</span
                        >
                      </th>
                    </tr>
                  </table>
                </div>
                <!--  -->
                @if ($rfq->tax_status == '1')
                <div
                  style="
                    display: flex;
                    justify-content: left;
                    margin-top: 2rem;
                    margin-bottom: 1rem;
                  "
                >
                  <table
                    style="
                      border-collapse: collapse;
                      width: 60%;
                      margin: auto;
                      font-size: 13px;
                      border: 1px solid #eee;
                    "
                  >
                    <tr
                      style="
                        width: 6%;
                        text-align: left;
                        padding: 0.5rem;
                        color: #3d3d3d;
                        font-size: 13px;
                        border-bottom: 1px solid #eee;
                      "
                    >
                      <th
                        style="
                          text-align: center;
                          padding: 0.5rem;
                          color: #3d3d3d;
                          font-weight: 400;
                        "
                      >
                        <span>
                          <strong>GST - 8%</strong> Not included. It may apply.
                        </span>
                      </th>
                    </tr>
                  </table>
                </div>
                @leftif
                <!--  -->
                <div>
                  <div>
                    <table
                      style="
                        margin-top: 0.5rem;
                        border: 1px solid #eee;
                        border-collapse: collapse;
                        width: 100%;
                        margin-top: 3rem;
                      "
                    >
                      <tr
                        style="
                          text-align: start;
                          padding: 0.5rem;
                          color: #3d3d3d;
                          font-size: 13px;
                          border: 1px solid #eee;
                        "
                      >
                        <th
                          colspan="2"
                          style="
                            text-align: center;
                            padding: 0.5rem;
                            background-color: #e5e5e5;
                            color: #3d3d3d;
                            border: 1px solid #eee;
                          "
                        >
                          Terms & Conditions
                        </th>
                      </tr>

                      @if (!empty($rfq->validity))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Validity :
                        </td>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->validity }}
                        </td>
                      </tr>
                      @leftif @if (!empty($rfq->payment))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            /* padding-left: 0px; */
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Payment :
                        </td>
                        <td
                          style="
                            padding: 2px 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->payment }}
                        </td>
                      </tr>
                      @leftif @if (!empty($rfq->validity))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            /* padding-left: 0px; */
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Payment Mode:
                        </td>
                        <td
                          style="
                            padding: 2px 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->payment_mode }}
                        </td>
                      </tr>
                      @leftif @if (!empty($rfq->delivery))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            /* padding-left: 0px; */
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Delivery :
                        </td>
                        <td
                          style="
                            padding: 2px 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->delivery }}
                        </td>
                      </tr>
                      @leftif @if (!empty($rfq->delivery_location))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            /* padding-left: 0px; */
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Delivery Location :
                        </td>
                        <td
                          style="
                            padding: 2px 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->delivery_location }}
                        </td>
                      </tr>
                      @leftif @if (!empty($rfq->product_order))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            /* padding-left: 0px; */
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Product Order :
                        </td>
                        <td
                          style="
                            padding: 2px 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->product_order }}
                        </td>
                      </tr>
                      @leftif @if (!empty($rfq->installation_support))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            /* padding-left: 0px; */
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Install Support :
                        </td>
                        <td
                          style="
                            padding: 2px 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->installation_support }}
                        </td>
                      </tr>
                      @leftif @if (!empty($rfq->pmt_condition))
                      <tr>
                        <td
                          style="
                            padding: 0.3125rem 10px;
                            /* padding-left: 0px; */
                            font-size: 13px;
                            color: #3d3d3d;
                            font-weight: 600;
                          "
                        >
                          Pmt Condition :
                        </td>
                        <td
                          style="
                            padding: 2px 10px;
                            font-size: 13px;
                            font-family: 'Raleway', sans-serif;
                            color: #3d3d3d;
                          "
                        >
                          {{ $rfq->pmt_condition }}
                        </td>
                      </tr>
                      @leftif
                    </table>
                  </div>
                </div>
              </div>
              <!-- Main Content left -->
              <!-- Column Area -->
              <div style="overflow-x: auto">
                <table
                  id="u_body"
                  style="
                    border-collapse: collapse;
                    table-layout: fixed;
                    border-spacing: 0;
                    vertical-align: top;
                    min-width: 320px;
                    margin: 0 auto;
                    width: 100%;
                  "
                  cellpadding="0"
                  cellspacing="0"
                >
                  <tbody style="min-width: 320px">
                    <tr>
                      <td style="padding: 0">
                        <table
                          style="
                            width: 100%;
                            border-collapse: collapse;
                          "
                        >
                          <tbody>
                            <tr>
                              <td
                                style="
                                  padding: 0.9375rem;
                                  padding-left: 1.875rem;
                                  padding-right: 1.875rem;
                                  background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);
                                  background-size: cover;
                                "
                              >
                                <table
                                  style="width: 100%; border-collapse: collapse"
                                >
                                  <tbody>
                                    <tr>
                                      <td
                                        style="
                                          text-align: start;
                                          color: #ffffff;
                                        "
                                      >
                                        <p
                                          style="
                                            font-size: 13px;
                                            font-weight: 600;
                                            padding-bottom: 0.5rem;
                                            margin: 0;
                                            color: #000;
                                          "
                                        >
                                          Thank You
                                        </p>
                                        <p
                                          style="
                                            color: #ae0a46;
                                            padding: 0;
                                            margin: 0;
                                          "
                                        >
                                          NGen IT Sales Team
                                        </p>
                                        <p
                                          style="
                                            color: #ae0a46;
                                            font-size: 13px;
                                            padding: 0;
                                            margin: 0;
                                          "
                                        >
                                          Manager, Business
                                        </p>
                                      </td>
                                      <td
                                        style="text-align: left; color: #ffffff"
                                      >
                                        <div
                                          style="
                                            font-size: 13px;
                                            margin-bottom: 0.5rem;
                                          "
                                        >
                                          <p style="margin: 0; color: #ae0a46">
                                            sales@ngenitltd.com
                                            <i
                                              class="fa-solid fa-paper-plane"
                                            ></i>
                                          </p>
                                        </div>
                                        <div
                                          style="
                                            font-size: 13px;
                                            padding: 0;
                                            margin: 0;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              padding: 0;
                                              color: #ae0a46;
                                            "
                                          >
                                            (skype) +1 917-720-3055
                                          </p>
                                        </div>
                                        <div style="font-size: 0.9375rem">
                                          <p
                                            style="
                                              margin: 0;
                                              padding: 0;
                                              color: #ae0a46;
                                            "
                                          >
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
              <!-- Column Area left -->
              <!-- Email Footer -->
              <div style="overflow-x: auto">
                <table
                  id="u_body"
                  style="
                    border-collapse: collapse;
                    table-layout: fixed;
                    border-spacing: 0;
                    vertical-align: top;
                    min-width: 320px;
                    margin: 0 auto;
                    width: 100%;
                  "
                  cellpadding="0"
                  cellspacing="0"
                >
                  <tbody style="min-width: 320px">
                    <tr>
                      <div
                        style="
                          text-align: center;
                          background-color: #ae0a46;
                          padding: 0.9375rem;
                        "
                      >
                        <a
                          class=""
                          href="www.ngenitltd.com"
                          style="
                            color: #ffff;
                            font-size: 1.125rem;
                            text-align: center;
                            letter-spacing: 4px;
                            text-decoration: none;
                          "
                          >www.ngenitltd.com</a
                        >
                      </div>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Email Footer left-->
            </div>
            <!-- ... -->
          </section>
        </td>
      </tr>
    </table>
  </body>
</html>

    </section>
@leftsection
@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('thead').on('click', '.addRow', function() {

                    var tr = "<tr>" +
                        "<td class='text-center'> <a href='javascript:void(0)' class='removeRow'><i class='fa-solid fa-minus dash-icons' style='padding: 6px 7px 6px !important;color: #ae0a46;'></i></a></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='item_name[]' placeholder='Product Name' required></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='qty[]' placeholder='Quantity' required></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='unit_price[]' placeholder='Unit Price' ></td>" +
                        "<td class='p-0'> <input type='text' class='form-control' name='item_name[]' placeholder='Total' required></td></td>" +
                        "</tr>";

                    $('.repeater').appleft(tr);
                });

                $('tbody').on('click', '.removeRow', function() {
                    $(this).parent().parent().remove();
                });
            });
        </script>
    @leftpush
@leftonce

@extends('frontend.master')
@section('content')
    <style>
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            padding: 10px;
            border: 0px;
        }
    </style>
    <section class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="border-0 mx-auto">
                    <tr>
                        <td>
                            <!-- Your email content goes here -->
                            <section
                                style="margin-top: 0rem; margin-bottom: 0rem; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                <!-- Email Header Start -->
                                <div class="wrapper" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                    <!-- Email Header Start -->
                                    <div class="d-flex justify-content-between align-items-center px-5 py-2"
                                        style="background-color: #ae0a46;">
                                        <div>
                                            <a href="https://ngenitltd.com" target="_blank">
                                                <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT"
                                                    title="Ngen IT" style="text-decoration: none;" width="60" />
                                            </a>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-right text-white" style="font-size: 2rem;font-weight: 600;">
                                                NGEN IT LTD.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Email Header End -->
                                    <!-- Main Content Start -->
                                    <div style="overflow-x: auto">
                                        <table id="u_body"
                                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                                            cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <div style="text-align: left;padding: 15px;">
                                                        <h4 style="text-align: left; font-size: 18px; color: #141414;">Dear
                                                            {{ $name }}</h4>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div style="text-align: left;padding: 15px;">
                                                        <p style="text-align: left; font-size: 18px; color: #141414;">
                                                            We have received your query, Thank you for your interest! Our
                                                            dedicated
                                                            sales
                                                            manager/consultant will contact you soon.
                                                        </p>
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div style="overflow-x: auto; margin-bottom:10px;">
                                        <table id="u_body"
                                            style="border: 1px solid #eee;border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 90%;"
                                            cellpadding="0" cellspacing="0">
                                            <tbody style="min-width: 320px">
                                                @if (!empty($rq_products))
                                                    @foreach ($rq_products as $rq_product)
                                                        <tr>
                                                            <th width="14%"
                                                                style="border-bottom:1px solid #e7e7e7;background-color:#f1f1f1;">
                                                                Product Name</th>
                                                            <td width="70%"
                                                                style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;">
                                                                &nbsp; {{ $rq_product->product_name }}</td>
                                                            <th width="8%"
                                                                style="border-bottom:1px solid #e7e7e7;background-color:#f1f1f1;">
                                                                Quantity</th>
                                                            <td width="8%"
                                                                style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;">
                                                                &nbsp; {{ $rq_product->qty }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                {{-- @if (!empty($sku_code))
                                                    <tr>
                                                        <th
                                                            style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:17px;text-align:left">
                                                            Product Name</th>
                                                        <td
                                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                                            &nbsp; {{ $rq_product->product_name }}</td>
                                                        <th
                                                            style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:17px;text-align:left">
                                                            Quantity</th>
                                                        <td
                                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                                            &nbsp; {{ $rq_product->qty }}</td>
                                                    </tr>
                                                @endif --}}
                                                @if (!empty($sku_code))
                                                    <tr>
                                                        <th
                                                            style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:17px;text-align:left">
                                                            Product Sku</th>
                                                        <td
                                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:17px;text-align:left">
                                                            &nbsp; {{ $sku_code }}</td>
                                                    </tr>
                                                @endif

                                                @if (!empty($message))
                                                    <tr>
                                                        <th
                                                            style="border-bottom:1px solid #e7e7e7;width: 30%;background-color:#f1f1f1;">
                                                            Inquiry Details</th>
                                                        <td
                                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-bottom:1px solid #f1f1f1;border-right:1px solid #f1f1f1;">


                                                            {{ $message }}
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Main Content End -->
                                    <!-- Column Area -->
                                    <div style="overflow-x: auto">
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
                                                                        style="padding: 15px;padding-left: 30px;padding-right: 30px;background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);background-size: cover;">
                                                                        <table
                                                                            style="width: 100%;border-collapse: collapse;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td
                                                                                        style="text-align: start;color: #ffffff;">
                                                                                        <p
                                                                                            style="font-size: 15px;font-weight: 600;padding-bottom: 0.5rem;margin: 0;color: #000;">
                                                                                            Thank You
                                                                                        </p>
                                                                                        <p
                                                                                            style="color: #ae0a46; margin: 0">
                                                                                            NGEN IT SALES TEAM
                                                                                        </p>
                                                                                        <p
                                                                                            style="color: #ae0a46;font-size: 15px;margin: 0;">
                                                                                            Manager, Business
                                                                                        </p>
                                                                                    </td>
                                                                                    <td
                                                                                        style="text-align: end;color: #ffffff;">
                                                                                        <div
                                                                                            style="font-size: 15px;margin-bottom: 0.5rem;">
                                                                                            <p
                                                                                                style="margin: 0; color: #ae0a46">
                                                                                                sales@ngenitltd.com
                                                                                                <i
                                                                                                    class="fa-solid fa-paper-plane"></i>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            style="font-size: 15px;margin-bottom: 0.5rem;">
                                                                                            <p
                                                                                                style="margin: 0; padding: 0; color: #ae0a46">
                                                                                                (skype) +1 917-720-3055
                                                                                            </p>
                                                                                        </div>
                                                                                        <div style="font-size: 15px">
                                                                                            <p
                                                                                                style="margin: 0; padding: 0; color: #ae0a46">
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
                                </div>
                            </section>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </section>
@endsection

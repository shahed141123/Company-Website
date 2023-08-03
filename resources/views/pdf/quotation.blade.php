<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NGENIT-Quotation | NGenIT</title>
    <link rel="stylesheet" type="text/css" href="quoation-css.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <style type="text/css">
        .padding {
            padding: 0px;
        }

        .quotation-header {
            min-height: 60px;
            background: whitesmoke;
        }


        .quotation-header-banner h3 {
            line-height: 50px;
            font-size: 30px !important;
            text-align: center;
            color: #FD1C03;
        }

        .header-to-contact-area {
            min-height: 150px;
            background: whitesmoke;
        }

        .tableCustomice {
            width: 100%;
            height: auto;
        }

        .tableCustomice th,
        td {
            padding: 2px 5px;
            border: 1px solid #ddd;
            font-size: 13px;
        }

        .header-referencebar {
            min-height: 20px;
            background: #ccc;
            line-height: 20px;
            margin-top: 5px;
        }

        .header-referencebar p {
            padding: 0px 5px;
            font-size: 14px;
        }

        .product-details-area {
            min-height: 120px;
            background: #fff;
            margin-top: 10px;
        }

        .terms-contditions {
            margin-top: 10px;
        }

        .terms-contditions-area {
            min-height: 120px;
            background: whitesmoke;
        }

        .footer-quotation-left ul {
            list-style: none;
        }

        .footer-quotation-left ul li {
            width: 50%;
            height: 30px;
            float: left;
            list-style: decimal;
        }

        .footer-quotation-blow {
            min-height: 40px;
            background: #222222;
            line-height: 40px;

        }
    </style>
</head>


<body>

    <div class="container mt-5" style=" width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;margin-top: 1rem!important;">

        <table class="tableCustomice" style="padding: 5px; background: whitesmoke; width:90%; margin:auto; margin-top:15px;">
            <tr>
                <th width="45%" style="border: none; text-align:center;">
                    <img src="http://165.22.48.109/ngenit/upload/logoimage/1755708668937189.png"
                            class="img-responsive" style="height:50px;width: 120px;">
                </th>
                <th width="10%" style="border: none; text-align:center;"></th>
                <th width="45%" style="border: none; text-align:center;">
                    <h3 style="line-height: 50px; font-size: 30px!important; text-align: center; color: #FD1C03;"> Quotation </h3>
                </th>

            </tr>
        </table>
        {{-- <div class="card" style="display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: 0.25rem;">
            <div class="card-header" style="padding: 0.75rem 0.75rem;margin-bottom: 0;background-color: rgba(0,0,0,.03);border-bottom: 1px solid rgba(0,0,0,.125);">
                <div class="col-lg-12 float-left quotation-header-banner padding"
                    style="min-height: 40px; background: whitesmoke;">
                    <!-- <h3> NGenIT Quoation  </h3> -->

                    <div class="col-lg-6 " style="min-height: 1px;padding-right: 15px;padding-left: 15px;float:left;">
                        <img src="http://165.22.48.109/ngenit/upload/logoimage/1755708668937189.png"
                            class="img-responsive" style="height:50px;width: 120px;">
                    </div>

                    <div class="col-lg-6 float-left quotation-header-banner padding">
                        <h3 style="line-height: 50px; font-size: 30px!important; text-align: center; color: #FD1C03;"> Quotation </h3>
                    </div>

                </div>
            </div>
            <div class="card-body" style="width:90%; margin:auto;min-height:80px;">

                <div class="col-lg-6 float-left headerto padding" style="float: left;">

                    <div class="col-lg-12 padding">
                        <label style="font-size: 12px;"> <strong>To: {{ $rfq->name }}</strong> <br>
                            {{ $rfq->address }}
                        </label> <br>

                        <label style="font-size: 12px;"> <strong>{{ $rfq->company_name }}</strong> <br>
                            <strong> {{ $rfq->designation }}</strong>
                            {{ $rfq->email }} | {{ $rfq->phone }}

                        </label>
                    </div>




                </div>

                <div class="col-lg-2 float-left" style="float: left;"></div>

                <div class="col-lg-4 float-left headertocontact padding" style="float: right;">

                    <p style="font-size:12px; padding-left: 20px;">
                        <strong>Date &nbsp;:</strong> {{ \Carbon\Carbon::now() }} <br>
                        <span><strong>PQ &nbsp;&nbsp;&nbsp; : </strong> NG-ARCSW/230112_ADSK </span> <br>
	    	  	     	<span><strong>PQR &nbsp; :</strong> BD-C168(T10)-Mh(L1) </span>
                    </p>


                </div>


            </div>
        </div> --}}

        <div style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="regular" value="1" id="flexRadioDefault1"
                    {{ $rfq->regular == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Regular Discount
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="special" value="1" id="flexRadioDefault1"
                    {{ $rfq->special == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Special Discount
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tax_status" value="1" id="flexRadioDefault1"
                    {{ $rfq->tax_status == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Tax / VAT
                </label>
            </div>
        </div>



        <div class="col-lg-12 product-details-area float-left padding table-responsive"
            style="min-height: 120px;background: #fff;margin-top: 10px; width:90%; margin:auto;">

            <table class="tableCustomice" style="width: 100%;
             height: auto;">
                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                    <th style="padding: 2px 5px;
		        border: 1px solid #ddd;font-size: 13px;" width="5%">SL #
                    </th>
                    <th style="padding: 2px 5px;
		        border: 1px solid #ddd;font-size: 13px;" width="40%">Product
                        Description</th>
                    <th style="padding: 2px 5px;
		        border: 1px solid #ddd;font-size: 13px;" width="15%">Quantity
                    </th>

                        @if (($rfq->regular) == '1')
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none">Discount </th>
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none">Disc. Unit </th>
                        @else
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_unit">Unit Price </th>
                        @endif

                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="15%">Total
                    </th>
                </tr>

                @foreach ($products as $key => $item)
                    <tr>
                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;"> {{ ++$key }}
                        </td>

                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;">
                            {{ $item->item_name }}</td>
                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center">
                            {{ $item->qty }}</td>
                            @if (($rfq->regular) == '1')
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none">{{ $item->regular_discount }} % </th>
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none">{{ number_format($item->sales_price / $item->qty, 2) }}</th>
                        @else
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_unit">{{ number_format($item->sales_price / $item->qty, 2) }} </th>
                        @endif

                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center">$
                            {{ $item->sales_price }}</td>
                    </tr>
                @endforeach


                <tr>
                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;"> </th>

                    @if (($rfq->regular) == '1')
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none"></th>
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none"></th>
                        @else
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_unit"></th>
                        @endif
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" colspan="2"
                        class="text-center"> Sub Total </td>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center"> $
                        {{ $deal_sas->sub_total_sales }}</td>
                </tr>
                @if (($rfq->special) == '1')
                    <tr class="special_discount">
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;"> </th>
                        @if (($rfq->regular) == '1')
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none"></th>
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_discount d-none"></th>
                        @else
                        <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                        class="rg_unit"></th>
                        @endif
                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center">
                            Special discount </td>
                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center">
                            {{ $deal_sas->special_discount }} %</td>
                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center"> $
                            {{ $deal_sas->special_discounted_sales }}</td>
                    </tr>
                @endif



                <tr>
                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;"> </th>
                    @if (($rfq->regular) == '1')
                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                    class="rg_discount d-none"></th>
                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                    class="rg_discount d-none"></th>
                    @else
                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" width="10%"
                    class="rg_unit"></th>
                    @endif
                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" colspan="2"
                        class="text-center"> Total </th>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center">
                        {{ $deal_sas->grand_total - $deal_sas->tax_sales }}</td>
                </tr>

                <!-- <tr>
                <th colspan="2" width="40%"> In Words: </th> <th colspan="5" width="60%"> <small> <b> Thirty One Lac sixty Four Thousand and Four Hundred Twenty One Taka Only (w/o Tax / VAT) </b> </small> </th>
                </tr> -->


            </table>


            @if (($rfq->tax_status) == '1')
                <table class="tableCustomice mt-2 tax" style="margin-top:1.2rem;">
                    <tr style="background-color: rgba(0,0,0,.03);">
                        <th colspan="4" width="80%"> Tax / VAT</td>
                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center"
                            width="10%"> {{ $deal_sas->tax }}%</td>
                        <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" class="text-center"
                            width="10%"> $ {{ $deal_sas->tax_sales }}</td>
                    </tr>

                </table>
            @endif

        </div>


        <div class="col-lg-12 product-details-area float-left padding table-responsive"
        style="min-height: 120px;background: #fff;margin-top: 10px; width:90%; margin:auto;">

            <table class="tableCustomice">
                <tr style="background-color: rgba(0,0,0,.03);">
                    <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" colspan="2">Terms &
                        Conditions</th>
                </tr>

                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        Validity :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->validity }}

                    </td>
                </tr>
                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        Payment :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->payment }}

                    </td>
                </tr>
                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        Payment Mode :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->payment_mode }}

                    </td>
                </tr>
                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        Delivery :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->delivery }}

                    </td>
                </tr>
                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        Delivery Location :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->delivery_location }}

                    </td>
                </tr>
                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        Product & Order :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->product_order }}

                    </td>
                </tr>
                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        Installation & Local Support :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->installation_support }}

                    </td>
                </tr>

                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:40%">
                        PMT Condition :

                    </td>


                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" style="width:60%">
                        {{ $rfq->pmt_condition }}

                    </td>
                </tr>



                {{-- <tr>
 				  	  <th style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;"> Note:  </th>
                      <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;"> <b> This Price Quotation is Inclusive of Tax/Vat.</b> </td>

 				  </tr> --}}

                <tr>
                    <td style="padding: 2px 5px;border: 1px solid #ddd;font-size: 13px;" colspan="2">
                        <br><br>

                        <u> Authorized Signature </u> <br>
                        <label>
                            <strong> Name :
                                {{ App\Models\User::where('id', $rfq->sales_man_id_L1)->value('name') }}</strong> <br>

                            <strong> Position : Manager Sales, Partner & Business Development </strong>

                        </label>


                    </td>
                </tr>



            </table>

        </div>




            <table class="tableCustomice" style="padding: 5px; background: #222222; width:90%; margin:auto; margin-top:15px;">
                <tr>
                    <span class="text-white" style="font-size:12px; color:white;">
                        <center>NGen IT, 89/2 (11th FL), Haque Chamber, West Panthopath, Dhaka-1216, Bangladesh
                            Cell: +880 1714243446, 01971424221 e-mail: sales@ngenitltd.com, URL: www.ngenitltd.com
                        </center>
                    </span>
                </tr>
            </table>






    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        if ($("input[name='regular']").is(":checked")) {
            $(".rg_discount").removeClass("d-none");
            $(".rg_unit").addClass("d-none");
        } else {
            $(".rg_discount").addClass("d-none");
            $(".rg_unit").removeClass("d-none");
        }




        if ($("input[name='special']").is(":checked")) {
            $(".special_discount").removeClass("d-none");
        } else {
            $(".special_discount").addClass("d-none");
        }




        if ($("input[name='tax_status']").is(":checked")) {
            $(".tax").removeClass("d-none");
        } else {
            $(".tax").addClass("d-none");
        }
    </script>



</body>

</html>

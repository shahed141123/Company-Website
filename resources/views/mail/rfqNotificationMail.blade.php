<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFQ Notification</title>
</head>

<body>
    <!-- Main Area -->
    <div class="main" style="width:50vw; margin:0 auto;  padding: 5px 10px 10px 10px;">
        <table cellpadding="0" cellspacing="0" border="0"
            style="background:#fff;border-collapse:collapse;width:650px;margin:0px;border:1px solid rgb(224,224,224);padding:0px;color:#333;text-align:center;font-family:Arial,Helvetica,sans-serif;text-align:center">
            <tbody>
                <tr>
                    <td style="padding:5px 15px;border-bottom:1px solid #f1f1f1;text-align:left">
                        <a href="https://www.ngenitltd.com/" target="_blank"
                            data-saferedirecturl="https://www.google.com/url?q=https://www.ngenitltd.com/&amp;source=gmail&amp;ust=1683110822015000&amp;usg=AOvVaw1oh2knrZ8dutUp_6pTWSeQ">
                            <img src="http://165.22.48.109/ngenit/upload/logoimage/1764773615798059.png"
                              height="70px" width="130px"  alt="NgenIt" border="0" class="CToWUd" data-bit="iit">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px">
                        Dear {{$data['name']}}
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.5">
                        We have received your query, Thank you for your interest! Our dedicated sales
                        manager/consultant will contact you within two working day!
                    </td>
                </tr>
                <tr>
                    <td style="padding:0 15px">
                        <p>The following is your detailed enquiry:</p>

                        <table cellpadding="0" cellspacing="0" border="0" style="width:620px">

                            <tbody>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:200px;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        Product Name</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{$data['product_name']}}</td>
                                </tr>
                               @if (!empty($data['sku_code']))
                                 <tr>
                                     <th
                                         style="min-width:100px;max-width:200px;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                         Product Sku</th>
                                     <td
                                         style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                         &nbsp; {{$data['sku_code']}}</td>
                                 </tr>
                               @endif


                                <tr>
                                    <th
                                        style="min-width:100px;max-width:200px;background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Fullname</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{$data['name']}}</td>
                                </tr>


                                @if (!empty($data['company_name']))
                                    <tr>
                                        <th
                                            style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                            Company</th>
                                        <td
                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                            &nbsp; {{$data['company_name']}}</td>
                                    </tr>
                                @endif


                                {{-- <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Address</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{$data['address']}}</td>
                                </tr> --}}
                                @if (!empty($data['phone']))
                                    <tr>
                                        <th
                                            style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                            Telephone</th>
                                        <td
                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                            &nbsp; {{$data['phone']}}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Email</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; <a href="mailto:{{$data['email']}}"
                                            target="_blank">{{$data['email']}}</a></td>
                                </tr>


                                {{-- <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Prefered Contact Method</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; Email</td>
                                </tr> --}}


                                <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Inquiry Details</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-bottom:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">

                                            {{$data['message']}}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px;text-align:center;font-size:12px">
                        <div style="padding-bottom:5px"><strong>Any Questions?</strong></div>

                    </td>
                </tr>
                <tr>
                    <td style="padding:15px;text-align:left;font-size:12px">

                        <div style="padding-bottom:5px">
                            Call Us: &nbsp; &nbsp; (+88) 0258155838 &nbsp; &nbsp; &nbsp; &nbsp;
                            {{-- 852-30691898 (Hong Kong) --}}
                        </div>

                    </td>
                    <td style="padding:15px;font-size:12px">
                        <div>
                            Email: &nbsp; &nbsp; <a style="color:#256fab" href="mailto:sales@ngenitltd.com"
                                target="_blank">sales@ngenitltd.com</a>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td style="padding:15px 0;text-align:center;background-color:#eaeaea;font-size:14px">
                        Thank you, from <strong>ngenitltd.com</strong> sales team.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

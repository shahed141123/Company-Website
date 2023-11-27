<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Notification</title>
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
                            <img src="{{ asset('storage/' . $data['logo']) }}" height="70px" width="130px"
                                alt="NgenIt" border="0" class="CToWUd" data-bit="iit">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px">
                        Dear {{ $data['name'] }} ,
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.5">
                        We have received your message. Thank you for your interest. Your Case Code is : <a
                            href="ngenitltd.com/client/support-case/{{ $data['code'] }}" target="_blank"
                            rel="noopener noreferrer"><strong
                                style="color:#ae0a46; text-decoration: underline;">{{ $data['code'] }}</strong></a>.
                        Our dedicated Support Team/Consultant will contact with you soon!
                    </td>
                </tr>
                <tr>
                    <td style="padding:0 15px">
                        <p>The following is your support details:</p>

                        <table cellpadding="0" cellspacing="0" border="0" style="width:620px">

                            <tbody>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:300px;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        Case Code</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ $data['code'] }}</td>
                                </tr>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:300px;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        Support Category</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ ucfirst($data['msg_category']) }}</td>
                                </tr>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:300px;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        Support Type</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ ucfirst($data['msg_type']) }}</td>
                                </tr>



                                <tr>
                                    <th
                                        style="min-width:100px;max-width:300px;background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Subject</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ $data['subject'] }}</td>
                                </tr>


                                {{-- @if (!empty($data['company_name']))
                                    <tr>
                                        <th
                                            style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                            Company</th>
                                        <td
                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                            &nbsp; {{$data['company_name']}}</td>
                                    </tr>
                                @endif

                                @if (!empty($data['phone']))
                                    <tr>
                                        <th
                                            style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                            Telephone</th>
                                        <td
                                            style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                            &nbsp; {{$data['phone']}}</td>
                                    </tr>
                                @endif --}}
                                {{-- <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Email</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; <a href="mailto:{{$data['email']}}"
                                            target="_blank">{{$data['email']}}</a></td>
                                </tr> --}}

                                <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Support Message</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-bottom:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">

                                        {{ $data['message'] }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:2rem 1rem;text-align:left;font-size:12px;  ">
                        <a style="padding:1rem;background-color:#ae0a46;color:white;" target="_blank"
                            href="ngenitltd.com/client/support-case/{{ $data['code'] }}">
                            Explore From Support Section
                        </a>

                    </td>
                </tr>
                <tr>
                    <td style="padding:15px;text-align:left;font-size:10px">
                        *For Attachment Check the Support Section From Your NGen IT Profile.
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px;text-align:left;font-size:12px">

                        <div style="padding-bottom:5px">
                            Call Us: &nbsp; &nbsp; (+88) 0258155838 &nbsp; &nbsp; &nbsp; &nbsp;
                            {{-- 852-30691898 (Hong Kong) --}}
                        </div>
                        <div>
                            Email: &nbsp; &nbsp; <a style="color:#256fab" href="mailto:support@ngenitltd.com"
                                target="_blank">support@ngenitltd.com</a>
                        </div>

                    </td>
                    {{-- <td style="padding:15px;text-align:left;font-size:12px">

                    </td> --}}

                </tr>
                <tr>
                    <td style="padding:15px 20px;text-align:left;font-size:14px">
                        Thank you, from NGen IT Support Team.
                    </td>
                </tr>

                <tr>
                    <td style="padding:15px 0;text-align:center;background-color:#eaeaea;font-size:14px">
                        <a href="http://ngenitltd.com/"><strong>www.ngenitltd.com</strong></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

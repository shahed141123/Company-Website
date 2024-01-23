<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGEN IT HR Notice</title>
</head>

<body>
    <!-- Main Area -->
    <div class="main" style="width:50vw; margin:0 auto; padding: 0px; border:1px solid rgb(224,224,224)">

        <table cellpadding="0" cellspacing="0" border="0"
            style="background:#fff; border-collapse:collapse; width:100%; margin:0px;padding:0px;color:#333;text-align:center;font-family:Arial,Helvetica,sans-serif;text-align:center">
            <tbody>
                <tr style="background-color:#eaeaea;">
                    <td style="padding:5px 15px;border-bottom:1px solid #f1f1f1;text-align:left;">
                        <div>
                            <a href="https://www.ngenitltd.com/" target="_blank"
                                data-saferedirecturl="https://www.google.com/url?q=https://www.ngenitltd.com/&amp;source=gmail&amp;ust=1683110822015000&amp;usg=AOvVaw1oh2knrZ8dutUp_6pTWSeQ">
                                <img src="https://www.ngenitltd.com/upload/logoimage/1764773615798059.png"
                                    height="45px" width="110px" alt="NgenIt" border="0" class="CToWUd"
                                    data-bit="iit">
                            </a>
                        </div>
                    </td>
                    <td style="padding:5px 15px;border-bottom:1px solid #f1f1f1;text-align:right;">

                        <div>
                            <h3 style="margin: 0; color:#ae0a46; font-size:2em;">NGEN IT HR Notice</h3>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellpadding="0" cellspacing="0" border="0"
            style="background:#fff; border-collapse:collapse; width:100%; margin:0px;padding:0px;color:#333;text-align:center;font-family:Arial,Helvetica,sans-serif;text-align:center">
            <tbody>
                <tr>
                    <td style="text-align:left;padding:20px 20px 20px 20px;color:#666;line-height:1.3;font-size:15px">
                        <p>
                            Dear {{ $data['name'] }},
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:20px 20px 20px 20px;color:#666;line-height:1.3;font-size:15px">
                        We are delighted to inform you that your account at NGEN IT has been successfully approved!
                        Welcome to our platform.
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:20px 20px 20px 20px;color:#666;line-height:1.3;font-size:15px">
                        Your login credentials are as follows: <br>
                        - Username: {{ $data['email'] }} <br>
                        - Password: Password You have given during registration.
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:20px 20px 20px 20px;color:#666;line-height:1.3;font-size:15px">
                        You can change your password from your dashboard. If u have forgot your password, use forget
                        password option from the login page.
                    </td>
                </tr>

                @if ($data['user_type'] == 'job_seeker')
                    <tr>
                        <td
                            style="text-align:left;padding:20px 20px 20px 20px;color:#666;line-height:1.3;font-size:15px">
                            To access your account, click on the following link: <a
                                href="{{ route('job-applicant.login') }}"
                                style="color:#ae0a46;line-height:1.3;font-size:15px">Job Applicant Login -></a>
                        </td>
                    </tr>
                @elseif ($data['user_type'] == 'partner')
                    <tr>
                        <td
                            style="text-align:left;padding:20px 20px 20px 20px;color:#666;line-height:1.3;font-size:15px">
                            To access your account, click on the following link: <a href="{{ route('partner.login') }}"
                                style="color:#ae0a46;line-height:1.3;font-size:15px">Partner Login -></a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td
                            style="text-align:left;padding:20px 20px 20px 20px;color:#666;line-height:1.3;font-size:15px">
                            To access your account, click on the following link: <a href="{{ route('client.login') }}"
                                style="color:#ae0a46;line-height:1.3;font-size:15px">Client Login -></a>
                        </td>
                    </tr>
                @endif

                <tr>
                    <td
                        style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                        If you have any questions or encounter any issues, feel free to reach out to our support team at
                        <a href="mailto:support@ngenitltd.com"
                            style="color:#ae0a46;line-height:1.3;font-size:15px">support@ngenitltd.com</a>
                    </td>
                </tr>

                <tr>
                    <td
                        style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                        Thank you for being with us. We look forward to serving you.
                    </td>
                </tr>

                <tr>
                    <td
                        style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                        Thank You from NGEN IT @if ($data['user_type'] == 'job_seeker') HR Team. @else Support Team. @endif
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px;">
                        <div
                            style="padding:10px 0; text-align:center; background-color:#eaeaea; font-size:14px; font-family: sans-serif;">

                            <a href="https://www.ngenitltd.com" style="text-decoration:none;">
                                <strong style="color: #ae0a46;">NGen IT Ltd.</strong>
                            </a>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Message</title>
</head>

<body>
    <!-- Main Area -->
    <div class="main" style="width:50vw; margin:0 auto;  padding: 5px 10px 10px 10px;">
        <table cellpadding="0" cellspacing="0" border="0"
            style="background:#fff;border-collapse:collapse;width:650px;margin:0px;border:1px solid rgb(224,224,224);padding:0px;color:#333;text-align:center;font-family:Arial,Helvetica,sans-serif;text-align:center">
            <tbody>
                <tr>
                    <td style="padding:10px 20px;border-bottom:1px solid #f1f1f1;text-align:right;">
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
                        {!! nl2br($data['message']) !!}
                    </td>
                </tr>


                <tr>
                    <td style="padding:15px;text-align:left;font-size:10px">
                        *For Attachment and further details, Check the Support Section From Your NGen IT Profile.
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

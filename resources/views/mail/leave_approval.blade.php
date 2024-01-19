<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Notification</title>
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
                            <h3 style="margin: 0; color:#ae0a46; font-size:2em;">Leave Application</h3>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" border="0"
            style="background:#fff; border-collapse:collapse; width:100%; margin:0px;padding:0px;color:#333;text-align:center;font-family:Arial,Helvetica,sans-serif;text-align:center">
            <tbody>
                <tr style="background-color:#eaeaea;">
                    <th style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                        Employee Name</th>
                    <td
                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                        &nbsp; {{ $data['name'] }}</td>
                    <th style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                        Employee Designation</th>
                    <td
                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                        &nbsp; {{ $data['designation'] }}</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" border="0"
            style="background:#fff; border-collapse:collapse; width:100%; margin:0px;padding:0px;color:#333;text-align:center;font-family:Arial,Helvetica,sans-serif;text-align:center">
            <tbody>
                @if ($data['status'] == 'leave_approved')
                    <tr>
                        <td
                            style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                            The Leave Application of {{ $data['name'] }} has been approved.
                        </td>
                    </tr>
                @elseif ($data['status'] == 'leave_rejected')
                    <tr>
                        <td
                            style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                            The Leave Application of {{ $data['name'] }} has been rejected by {{ $data['rejected_by'] }}.
                        </td>
                    </tr>
                @else
                    <tr>
                        @if ($data['status'] == 'substitute_approval_pending')
                            <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px">
                                Dear {{ $data['substitute'] }},
                            </td>
                        @elseif ($data['status'] == 'supervisor_approval_pending')
                            <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px">
                                Dear {{ $data['supervisor'] }},
                            </td>
                        @elseif ($data['status'] == 'hr_approval_pending')
                        <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px">
                            Dear HR,
                        </td>
                        @else
                            <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px">
                                Dear Sir,
                            </td>
                        @endif
                    </tr>
                    <tr>
                        @if ($data['status'] == 'substitute_approval_pending')
                            <td
                                style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                                Hope, you are doing well. I am applying for a leave from {{ $data['leave_start_date'] }}
                                to
                                {{ $data['leave_end_date'] }}. I want you to serve as my substitute during this leave
                                period.

                            </td>
                        @elseif ($data['status'] == 'supervisor_approval_pending')
                            <td
                                style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                                Hope, you are doing well. I am applying for a leave from {{ $data['leave_start_date'] }}
                                to
                                {{ $data['leave_end_date'] }}. I want your permission as you are my supervisor.
                            </td>
                        @else
                            <td
                                style="text-align:left;padding:0 15px 15px 15px;font-size:12px;color:#666;line-height:1.3;font-size:15px">
                                Hope, you are doing well. I am applying for a leave from
                                {{ $data['leave_start_date'] }} to
                                {{ $data['leave_end_date'] }}. My Leave Details are attached below.

                            </td>
                        @endif
                    </tr>
                    <tr>
                        <td style="padding:0 15px">
                            <div
                                style="padding-bottom:5px;margin-bottom:10px;margin-top:15px;font-size:14px !important;">
                                <strong>
                                    <a href="{{ route('leave-application.edit', $data['leave_id']) }}"
                                        style="color: #FFF;
                                 border: 1px solid #ae0a46;
                                 background-color: #ae0a46;
                                 transition: all 0.8s ease-in-out;padding: 10px 40px;
                                 cursor: pointer; text-decoration: none;
                                 font-size: 18px;
                                 font-weight: 500;">
                                        Give Approval</a>
                                </strong>
                            </div>
                        </td>
                    </tr>
                    @if ($data['status'] == 'hr_approval_pending' | $data['status'] == 'ceo_approval_pending')
                        <tr>
                            <td style="padding:0 15px">
                                <p>The following is the leave details:</p>

                                <table cellpadding="0" cellspacing="0" border="0" style="width:100%">

                                    <tbody>

                                        <tr>
                                            <th
                                                style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                                Leave Type</th>
                                            <td
                                                style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                                &nbsp; {{ $data['type_of_leave'] }}</td>
                                        </tr>

                                        <tr>
                                            <th
                                                style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                                Leave Period</th>
                                            <td
                                                style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                                &nbsp; From {{ $data['leave_start_date'] }} To {{ $data['leave_end_date'] }}
                                            </td>
                                        </tr>


                                        <tr>
                                            <th
                                                style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                                Total Days</th>
                                            <td
                                                style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                                &nbsp; {{ $data['total_days'] }}
                                            </td>
                                        </tr>



                                        {{-- <tr>
                                            <th
                                                style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                                Leave Due as On</th>
                                            <td
                                                style="padding:10px 15px;border-top:1px solid #f1f1f1;border-bottom:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">

                                                {{ $data['message'] }}
                                            </td>
                                        </tr> --}}

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td style="padding:25px 20px 10px; text-align: left;font-size:15px">
                            I shall be reachable on {{ $data['leave_contact_no'] }} during the period. My person in
                            charge, {{ $data['substitute'] }} will be handling my tasks in my absence.
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:25px 20px 10px; text-align: left;font-size:15px">
                            I would be grateful if you can approve my leave request for the aforementioned period.
                            Hoping to
                            receive a positive response from you.
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:12px 20px 0px; text-align: left;font-size:17px">Yours Sincerely</td>
                    </tr>
                    <tr>
                        <td style="padding:3px 20px 15px; text-align: left;font-size:15px;">{{ $data['name'] }}</td>
                    </tr>
                @endif
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

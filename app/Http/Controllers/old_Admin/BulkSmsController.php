<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;

class BulkSmsController extends Controller
{
    public function bulksms()
    {
        return view('admin.pages.bulksms.bulksms');
    }
    public function sendSms(Request $request)
    {
        // dd($request->numbers);
        // Your Account SID and Auth Token from twilio.com/console
        $sid    = env('TWILIO_SID');
        $token  = env('TWILIO_TOKEN');
        $client = new Client($sid, $token);

        $validator = Validator::make($request->all(), [
            'numbers' => 'required',
            'message' => 'required'
        ]);

        if ($validator->passes()) {

            $numbers_in_arrays = explode(',', $request->numbers);

            $message = $request->input('message');
            $count = 0;

            foreach ($numbers_in_arrays as $number) {
                $count++;

                $client->messages->create(
                    $number,
                    [
                        'from' => env('TWILIO_FROM'),
                        'body' => $message,
                    ]
                );
            }

            return back()->with('success', $count . " messages sent!");
        } else {
            return back()->withErrors($validator);
        }

        // try {
        //     $account_sid = env('TWILIO_SID');
        //     $account_token = env('TWILIO_TOKEN');
        //     $number = env('TWILIO_FROM');

        //     $client = new Client($account_sid, $account_token);
        //     $client->messages->create('+8801958022215', [
        //         'from' => $number,
        //         'body' => $request->message,
        //     ]);
        //     return "Message sent successfully";
        // } catch (\Exception $exception) {
        //     return $exception->getMessage();
        // }
    }
}

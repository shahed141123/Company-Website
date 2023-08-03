<?php

namespace App\Http\Controllers\Marketing;

use App\Models\User;
use App\Mail\CustomMail;
use App\Jobs\SendBulkEmails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\NewsLetter;
use App\Models\Admin\Product;
use App\Models\Client\Client;
use App\Models\Partner\Partner;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BulkEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'partners'     => Partner::select('email', 'id')->get(),
            'partners'     => Partner::select('email', 'id')->get(),
            'clients'      => Client::select('email', 'id')->get(),
            'news_letters' => NewsLetter::select('email', 'id')->get(),
            'products'     => Product::select('name', 'id')->get(),
        ];
        return view('admin.pages.bulkemail.all', $data);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'recipients.*' => 'nullable|email',
                'subject'      => 'nullable|string',
                'message'      => 'nullable|string',
            ]

        );

        if ($validator->passes()) {
            $data = $request->all();
            // $recipients = $request->recipients;
            // $subject    = $request->subject;
            // $message    = $request->message;

            // Loop through each recipient and send them an email
            foreach ($data['recipients'] as $recipient) {
                Mail::to($recipient)->send(
                    new CustomMail(
                        $data['subject'],
                        $data['subject'],
                        'row_one_title',
                        'row_one_sub_title',
                        'date',
                        'row_one_btn',
                        'row_one_btn_link',
                        'banner_image_desc',
                        'product_title',
                        'product_sub_title',
                        'product_button_name',
                        'product_button_link',
                        'row_four_title',
                        'row_four_sub_title'
                    )
                );
            }
            Toastr::success('Mail Send Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    public function sendBulkEmail(Request $request)
    {
        $recipients     = $request->input('recipients');
        $subject        = $request->input('subject');
        $rowOneTitle    = $request->input('row-one-title');
        $rowOneSubTitle = $request->input('row-one-sub-title');
        $date           = $request->input('date');
        $rowOneBtn      = $request->input('row-one-btn');
        $rowOneBtnLink  = $request->input('row-one-btn-link');

        foreach ($recipients as $recipient) {
            Mail::send(
                'emails.bulk',
                [
                    'subject'        => $subject,
                    'rowOneTitle'    => $rowOneTitle,
                    'rowOneSubTitle' => $rowOneSubTitle,
                    'date'           => $date,
                    'rowOneBtn'      => $rowOneBtn,
                    'rowOneBtnLink'  => $rowOneBtnLink,
                ],
                function ($message) use ($recipient, $subject) {
                    $message->from('your-email@example.com', 'Your Name');
                    $message->to($recipient)->subject($subject);
                }
            );
        }

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
}

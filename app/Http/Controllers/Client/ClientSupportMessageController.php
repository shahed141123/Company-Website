<?php

namespace App\Http\Controllers\Client;

use Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Client\SupportCase;
use App\Http\Controllers\Controller;
use App\Models\Client\Client;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use App\Models\Client\MessageAttachment;
use Illuminate\Support\Facades\Validator;
use App\Models\Client\ClientSupportMessage;
use App\Models\Site;
use App\Models\User;
use Carbon\Carbon;

class ClientSupportMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'case_id'  => 'required|exists:support_cases,id',
                'name'       => 'required',
            ],
            [
                'required' => 'This :attribute must be required.',
                'exists'   => 'Support Case does not exist.',
            ],
        );

        $mail_cc = $request->mail_cc;
        if ($request->sender_type == 'admin') {
            if ($mail_cc) {
                $mail_cc = explode(',', $mail_cc);

            }
        }
        if ($request->sender_type == 'client') {
                $mail_cc = $mail_cc;

        }

        if ($validator->passes()) {
            $supportCaseId = ClientSupportMessage::insertGetId([
                'case_id'     => $request->case_id,
                'case_code'   => $request->case_code,
                'sender_id'   => $request->sender_id,
                'sender_type' => $request->sender_type,
                'receiver_id' => $request->receiver_id,
                'name'        => $request->name,
                'subject'     => $request->subject,
                'message'     => $request->message,
                'cc'          => json_encode($mail_cc),
                'created_at'  => Carbon::now(),
            ]);
            SupportCase::find($request->case_id)->update([
                'status' => 'on_going',
            ]);
            // if ($request->hasFile('attachment')) {
            //     $files = $request->file('attachment');

            //     foreach ($files as $file) {
            //         $filePath = 'caseMessage';
            //         $uploadedFile = Helper::multiAttachment($file, $filePath);
            //         // @dd($uploadedFile[0]);
            //         if ($uploadedFile['status'] == 1) {
            //             MessageAttachment::create([
            //                 'message_id' =>  $supportCaseId,
            //                 'attachment' => $uploadedFile['file_name'],
            //             ]);
            //         }
            //     }
            // }

            if ($request->hasFile('attachment')) {
                $files = $request->file('attachment');

                foreach ($files as $file) {
                    $filePath = 'caseMessage';

                    $uploadedFile = Helper::caseAttachment($file, $filePath);

                    if ($uploadedFile['status'] == 1) {
                        MessageAttachment::create([
                            'message_id' => $supportCaseId,
                            'attachment' => $uploadedFile['file_name'],
                        ]);
                    }
                }
            }

            if ($request->sender_type == 'admin') {
                $case = SupportCase::where('code', $request->case_code)->first();
                $client = Client::find($case->client_id);
                $client_emails = $client->email;
                $name= $client->name;
                // $client_emails = 'khandkershahed23@gmail.com';
            } else {
                $client_one = ['support@ngenitltd.com', 'ngenit@gmail.com'];
                $client_two = User::whereJsonContains('department', 'support')->pluck('email')->toArray();
                $client_emails = array_merge($client_one, $client_two);
                $name= $request->input('name');
            }

            $site = Site::latest('id')->first();

            $data = [
                'name' => $name,
                'subject' => $request->input('subject'), // changed to input('subject')
                'message' => $request->input('message'), // changed to input('message')
                'logo' => $site->logo,
                'code' => $request->case_code,
                'link' => route('support-case.show', $request->case_code),
            ];



            // Send the email
            Mail::send('mail.case_message', ['data' => $data], function ($message) use ($client_emails, $mail_cc, $request) {
                $message->from('support@ngenitltd.com', 'NGEN-Support');
                $message->to($client_emails);
                // $message->to('khandkershahed23@gmail.com');
                $message->subject($request->input('subject'));

                // CC recipients
                if ($request->sender_type == 'admin') {
                    if ($mail_cc) {
                        $message->cc($mail_cc);
                    }
                } elseif ($request->sender_type == 'client') {
                    $message->cc($mail_cc);
                }

                // Attachments
                if ($request->hasFile('attachment')) {
                    $files = $request->file('attachment');
                    foreach ($files as $file) {
                        // Get the original file name
                        $fileName = $file->getClientOriginalName();

                        // Determine the MIME type based on the file extension
                        $mimeType = $file->getMimeType();
                        if ($mimeType === 'application/octet-stream' && $file->getClientOriginalExtension() === 'apk') {
                            $mimeType = 'application/vnd.android.package-archive';
                        }

                        // Attach the file with the original file name and MIME type
                        $message->attach($file->getRealPath(), [
                            'as' => $fileName,
                            'mime' => $mimeType,
                        ]);
                    }
                }

            });

            Toastr::success('Message Sent Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

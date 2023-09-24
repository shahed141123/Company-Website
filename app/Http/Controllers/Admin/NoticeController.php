<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\User;
use App\Models\Admin\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['notices'] = Notice::latest()->get();
        $data['employees'] = User::latest()->get();
        return view('admin.pages.notice.index', $data);
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
                'title' => 'required|string',
                'content' => 'required|string',
                'publish_date' => 'required|date',
                'expiry_date' => 'required|date',
                'achievement_status' => 'required',
                'attachment_path' => 'nullable|file',
            ],
            [
                'required' => 'This :attribute field is needed.',
                'date' => 'The :attribute field must be a valid date.',
                'string' => 'The :attribute field must be a string.',
                'file' => 'The :attribute field must be a file.',
            ]
        );

        if ($validator->passes()) {
            $mainFile = $request->file('attachment_path');
            $filePath = storage_path('app/public/');
            if (!empty($mainFile)) {
                $globalFunAttachmentPath = Helper::customUpload($mainFile, $filePath);
            } else {
                $globalFunAttachmentPath = ['status' => 0];
            }
            Notice::create([
                'employee_id'              => $request->employee_id,
                'title'              => $request->title,
                'content'            => $request->content,
                'publish_date'       => date('Y-m-d H:i:s', strtotime($request->publish_date)),
                'expiry_date'        => date('Y-m-d H:i:s', strtotime($request->expiry_date)),
                'achievement_status' => $request->achievement_status,
                'attachment_path'    => $globalFunAttachmentPath['status'] == 1 ? $mainFile->hashName() : null,
            ]);
            Toastr::success('Data Inserted Successfully');
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
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string',
                'content' => 'required|string',
                'publish_date' => 'required|date',
                'expiry_date' => 'required|date',
                'achievement_status' => 'required',
                'attachment_path' => 'nullable|file',
            ],
            [
                'required' => 'This :attribute field is needed.',
                'date' => 'The :attribute field must be a valid date.',
                'string' => 'The :attribute field must be a string.',
                'file' => 'The :attribute field must be a file.',
            ]
        );

        if ($validator->passes()) {
            $notice = Notice::findOrFail($id);

            $mainFile = $request->file('attachment_path');
            $filePath = storage_path('app/public/');

            if (!empty($mainFile)) {
                $globalFunAttachmentPath = Helper::customUpload($mainFile, $filePath);

                $paths = [
                    storage_path("app/public/files/{$notice->attachment_path}")
                ];
                foreach ($paths as $path) {
                    if (File::exists($path)) {
                        File::delete($path);
                    }
                }
            } else {
                $globalFunAttachmentPath = ['status' => 0];
            }

            $notice->update([
                'employee_id'              => $request->employee_id,
                'title'              => $request->title,
                'content'            => $request->content,
                'publish_date'       => date('Y-m-d H:i:s', strtotime($request->publish_date)),
                'expiry_date'        => date('Y-m-d H:i:s', strtotime($request->expiry_date)),
                'achievement_status' => $request->achievement_status,
                'attachment_path'    => $globalFunAttachmentPath['status'] == 1 ? $mainFile->hashName() : $notice->attachment_path,
            ]);

            Toastr::success('Data has been updated');
            return redirect()->back();
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $paths = [
            storage_path('app/public/files/') . $notice->attachment_path
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $notice->forceDelete();
    }

    public function noticeboard()
    {
        $data['notices'] = Notice::latest()->get();
        $data['employees'] = User::latest()->get();
        return view('admin.pages.notice.notice_board', $data);
    }
}


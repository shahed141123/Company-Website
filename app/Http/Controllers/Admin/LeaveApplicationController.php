<?php

namespace App\Http\Controllers\Admin;

use Helper;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Admin\EmployeeCategory;
use App\Models\Admin\LeaveApplication;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Toastr as ToastrToastr;

class LeaveApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users' => User::latest('id', 'DESC')->get(),
        ];
        return view('admin.pages.leaveApplication.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function create()
    // {
    //     $data = [
    //         'users' => User::latest('id', 'DESC')->get(),
    //     ];
    //     return view('admin.pages.leaveApplication.add', $data);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'employee_id'             => 'nullable',
            'name'                    => 'nullable|string',
            'type_of_leave'           => 'nullable',
            'designation'             => 'nullable|string',
            'company'                 => 'nullable|string',
            'leave_start_date'        => 'nullable|date',
            'leave_end_date'          => 'nullable|date',
            'total_days'              => 'nullable|numeric',
            'job_status'              => 'nullable|string',
            'reporting_on'            => 'nullable|string',
            'leave_explanation'       => 'nullable|string',
            'substitute_during_leave' => 'nullable|string',
            'leave_address'           => 'nullable|string',
            'is_between_holidays'     => 'nullable|string',
            'leave_contact_no'        => 'nullable|string',
            'included_open_saturday'  => 'nullable|string',
            'leave_position'          => 'nullable|string',
            'leave_due_as_on'         => 'nullable|date',
            'leave_availed'           => 'nullable|numeric',
            'balance_due'             => 'nullable|numeric',
            'application_status'      => 'nullable|string',
            'substitute_signature'    => 'image|mimes:jpeg,png,jpg|max:2048',
            'applicant_signature'     => 'image|mimes:jpeg,png,jpg|max:2048',
            'checked_by'              => 'image|mimes:jpeg,png,jpg|max:2048',
            'recommended_by'          => 'image|mimes:jpeg,png,jpg|max:2048',
            'reviewed_by'             => 'image|mimes:jpeg,png,jpg|max:2048',
            'approved_by'             => 'image|mimes:jpeg,png,jpg|max:2048',
        ];

        // Custom error messages
        $messages = [
            'required' => 'The :attribute field is required.',
            'string'   => 'The :attribute field must be a string.',
            'date'     => 'The :attribute field must be a valid date.',
            'numeric'  => 'The :attribute field must be a number.',
            'image'    => 'The :attribute field must be an image file.',
            'mimes'    => 'The :attribute field must be a file of type: :values.',
            'max'      => 'The :attribute field must not exceed :max kilobytes in size.',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            // Handle image uploads and create the LeaveApplication model
            $imageFiles = [
                'substitute_signature', 'applicant_signature', 'checked_by', 'recommended_by', 'reviewed_by', 'approved_by',
            ];
            $filePath = storage_path('app/public/');
            $filePaths = [];

            foreach ($imageFiles as $file) {
                $uploadedFile = $request->file($file);
                $globalFunFile = !empty($uploadedFile) ? Helper::customUpload($uploadedFile, $filePath, 20, 20) : ['status' => 0];
                $filePaths[$file] = $globalFunFile['status'] == 1 ? $uploadedFile->hashName() : null;
            }

            LeaveApplication::create([
                'employee_id'             => Auth::user()->id,
                'name'                    => $request->name,
                'type_of_leave'           => $request->type_of_leave,
                'designation'             => $request->designation,
                'company'                 => $request->company,
                'leave_start_date'        => date('Y-m-d H:i:s', strtotime($request->leave_start_date)),  //date
                'leave_end_date'          => date('Y-m-d H:i:s', strtotime($request->leave_end_date)),  //date
                'total_days'              => $request->total_days,
                'job_status'              => $request->job_status,
                'reporting_on'            => date('Y-m-d H:i:s', strtotime($request->reporting_on)),  //date
                'leave_explanation'       => $request->leave_explanation,
                'substitute_during_leave' => $request->substitute_during_leave,
                'leave_address'           => $request->leave_address,
                'is_between_holidays'     => $request->is_between_holidays == "yes" ?? "no",
                'leave_contact_no'        => $request->leave_contact_no,
                'included_open_saturday'  => $request->included_open_saturday,
                'leave_position'          => $request->leave_position,
                'casual_leave_due_as_on'  => $request->casual_leave_due_as_on,
                'casual_leave_availed'    => $request->casual_leave_availed,
                'casual_balance_due'      => $request->casual_balance_due,
                'earned_leave_due_as_on'  => $request->earned_leave_due_as_on,
                'earned_leave_availed'    => $request->earned_leave_availed,
                'earned_balance_due'      => $request->earned_balance_due,
                'medical_leave_due_as_on' => $request->medical_leave_due_as_on,
                'medical_leave_availed'   => $request->medical_leave_availed,
                'medical_balance_due'     => $request->medical_balance_due,
                'application_status'      => 'pending',
            ] + $filePaths);

            Toastr::success('Your Leave Application has submitted for approval.');
            return redirect()->back();
        } else {
            // Validation failed, display error messages
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }

            return redirect()->back()->withErrors($validator)->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->id == $id) {
            $data = [
                'user' => User::where('id', $id)->first(),
            ];
            $data['employeeCategory'] = EmployeeCategory::whereId($data['user']->category_id)->first();
            return view('admin.pages.leaveApplication.all', $data);
        } else {
            Toastr::warning('You are not authorized to see this page');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $data = [
    //         'leaveApplication' => LeaveApplication::find($id),
    //         'user'             => User::latest('id', 'DESC')->get(),
    //     ];
    //     return view('admin.pages.leaveApplication.edit', $data);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'employee_id'             => 'nullable',
            'name'                    => 'nullable|string',
            'type_of_leave'           => 'nullable',
            'designation'             => 'nullable|string',
            'company'                 => 'nullable|string',
            'leave_start_date'        => 'nullable|date',
            'leave_end_date'          => 'nullable|date',
            'total_days'              => 'nullable|numeric',
            'job_status'              => 'nullable|string',
            'reporting_on'            => 'nullable|string',
            'leave_explanation'       => 'nullable|string',
            'substitute_during_leave' => 'nullable|string',
            'leave_address'           => 'nullable|string',
            'is_between_holidays'     => 'nullable|string',
            'leave_contact_no'        => 'nullable|string',
            'included_open_saturday'  => 'nullable|string',
            'leave_position'          => 'nullable|string',
            'leave_due_as_on'         => 'nullable|date',
            'leave_availed'           => 'nullable|numeric',
            'balance_due'             => 'nullable|numeric',
            'application_status'      => 'nullable|string',
            'substitute_signature'    => 'image|mimes:jpeg,png,jpg|max:2048',
            'applicant_signature'     => 'image|mimes:jpeg,png,jpg|max:2048',
            'checked_by'              => 'image|mimes:jpeg,png,jpg|max:2048',
            'recommended_by'          => 'image|mimes:jpeg,png,jpg|max:2048',
            'reviewed_by'             => 'image|mimes:jpeg,png,jpg|max:2048',
            'approved_by'             => 'image|mimes:jpeg,png,jpg|max:2048',
        ];

        // Custom error messages
        $messages = [
            'required' => 'The :attribute field is required.',
            'string'   => 'The :attribute field must be a string.',
            'date'     => 'The :attribute field must be a valid date.',
            'numeric'  => 'The :attribute field must be a number.',
            'image'    => 'The :attribute field must be an image file.',
            'mimes'    => 'The :attribute field must be a file of type: :values.',
            'max'      => 'The :attribute field must not exceed :max kilobytes in size.',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {

            $leaveApplication = LeaveApplication::findOrFail($id);

            $filePath = storage_path('app/public/');

            $imageFiles = [
                'substitute_signature', 'applicant_signature', 'checked_by', 'recommended_by', 'reviewed_by', 'approved_by',
            ];

            $imagePaths = [];
            foreach ($imageFiles as $file) {
                $uploadedImage = $request->file($file);
                if (!empty($uploadedImage)) {
                    $paths = [
                        storage_path("app/public/{$leaveApplication->$file}"),
                        storage_path("app/public/requestImg/{$leaveApplication->$file}")
                    ];
                    foreach ($paths as $path) {
                        if (File::exists($path)) {
                            File::delete($path);
                        }
                    }

                    $globalFunImage = Helper::customUpload($uploadedImage, $filePath, 20, 20);
                    if ($globalFunImage['status'] == 1) {
                        $imagePaths[$file] = $uploadedImage->hashName();
                    }
                }
            }

            $fileUpdates = $imagePaths;

            $leaveApplication->update(array_merge([
                'employee_id'             => $request->employee_id,
                'name'                    => $request->name,
                'type_of_leave'           => $request->type_of_leave,
                'designation'             => $request->designation,
                'company'                 => $request->company,
                'leave_start_date'        => date('Y-m-d H:i:s', strtotime($request->leave_start_date)),  //date
                'leave_end_date'          => date('Y-m-d H:i:s', strtotime($request->leave_end_date)),  //date
                'total_days'              => $request->total_days,
                'job_status'              => $request->job_status,
                'reporting_on'            => date('Y-m-d H:i:s', strtotime($request->reporting_on)),  //date
                'leave_explanation'       => $request->leave_explanation,
                'substitute_during_leave' => $request->substitute_during_leave,
                'leave_address'           => $request->leave_address,
                'is_between_holidays'     => $request->is_between_holidays,
                'leave_contact_no'        => $request->leave_contact_no,
                'included_open_saturday'  => $request->included_open_saturday,
                'leave_position'          => $request->leave_position,
                'leave_due_as_on'         => $request->leave_due_as_on,
                'leave_availed'           => $request->leave_availed,
                'balance_due'             => $request->balance_due,
                'application_status'      => $request->application_status,
            ], $fileUpdates));

            Toastr::success('Approval given.');
            return redirect()->back();
        } else {
            // Validation failed, display error messages
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
        $leaveApplication = LeaveApplication::find($id);

        $paths = [
            'storage/',
            'storage/requestImg/',
        ];

        $files = [
            $leaveApplication->substitute_signature,
            $leaveApplication->applicant_signature,
            $leaveApplication->checked_by,
            $leaveApplication->recommended_by,
            $leaveApplication->reviewed_by,
            $leaveApplication->approved_by,
        ];

        foreach ($files as $file) {
            foreach ($paths as $path) {
                $filePath = public_path($path . $file);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
        }

        $leaveApplication->delete();
    }

    public function leaveApplications()
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();

        $data['leaveApplications'] = LeaveApplication::whereDate('created_at', '>=', $yesterday)
            ->whereDate('created_at', '<=', $today)
            ->orderBy('id', 'desc')
            ->get();
        return view('admin.pages.leaveApplication.leaveApplications', $data);
    }
    public function leaveHistorys()
    {
        $data['leaveApplications'] = LeaveApplication::orderBy('id', 'desc')->get();
        return view('admin.pages.leaveApplication.leave_history', $data);
    }
    public function individualLeaves($id)
    {
        if (Auth::user()->id == $id) {
            $data['leaveApplications'] = LeaveApplication::where('employee_id', Auth::user()->id)->get();
            return view('admin.pages.leaveApplication.individual_leave_history', $data);
        } else {
            Toastr::warning('You are not authorized to see this page');
            return redirect()->back();
        }
    }
}

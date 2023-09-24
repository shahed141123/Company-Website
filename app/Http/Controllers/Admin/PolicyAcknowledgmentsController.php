<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\HrPolicy;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\PolicyAcknowledgments;

class PolicyAcknowledgmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::latest()->get();
        $data['hrPolicies'] = HrPolicy::latest()->get();
        $data['policyAcknowledgments'] = PolicyAcknowledgments::latest()->get();
        return view('admin.pages.policyAcknowledgment.index', $data);
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
                'sign' => 'nullable|string',
                'employee_id' => 'required|exists:users,id',
                'policy_id' => 'nullable|exists:hr_policies,id'
            ],
            [
                'required' => 'This :attribute field is needed.',
                'exists' => 'The selected :attribute is invalid.'
            ]
        );


        if ($validator->passes()) {
            PolicyAcknowledgments::create([
                'employee_id' => $request->employee_id,
                'policy_id'   => $request->policy_id,
                'sign'        => $request->sign,
                'status'      => $request->status,
                'acknowledged_at'      => $request->acknowledged_at,
            ]);
            Toastr::success('Data Insert Successfully.');
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
                'sign' => 'nullable|string',
                'employee_id' => 'required|exists:users,id',
                'policy_id' => 'nullable|exists:hr_policies,id'
            ],
            [
                'required' => 'This :attribute field is needed.',
                'exists' => 'The selected :attribute is invalid.'
            ]
        );

        if ($validator->passes()) {
            PolicyAcknowledgments::find($id)->update([
                'employee_id' => $request->employee_id,
                'policy_id'   => $request->policy_id,
                'sign'        => $request->sign,
                'status'      => $request->status,
                'acknowledged_at'      => $request->acknowledged_at,
            ]);
            Toastr::success('Data Updated Successfully.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PolicyAcknowledgments::find($id)->delete();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\HrPolicy;
use App\Http\Controllers\Controller;
use App\Models\Admin\PolicyCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class HrPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['policyCategories'] = PolicyCategory::latest()->get();
        $data['hrPolices'] = HrPolicy::latest()->get();
        return view('admin.pages.hrPolicy.index', $data);
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
                'title'     => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            HrPolicy::create([
                'policy_category_id' => $request->policy_category_id,
                'title'              => $request->title,
                'description'        => $request->description,
                'effective_date'     => date('Y-m-d H:i:s', strtotime($request->effective_date)),
                'expiration_date'    => date('Y-m-d H:i:s', strtotime($request->expiration_date)),
                'status'             => $request->status,
                'version'            => $request->version,
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
                'title'     => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            HrPolicy::find($id)->update([
                'policy_category_id' => $request->policy_category_id,
                'title'              => $request->title,
                'description'        => $request->description,
                'effective_date'     => date('Y-m-d H: i: s', strtotime($request->effective_date)),
                'expiration_date'    => date('Y-m-d H: i: s', strtotime($request->expiration_date)),
                'status'             => $request->status,
                'version'            => $request->version,
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
        HrPolicy::find($id)->delete();
    }
}


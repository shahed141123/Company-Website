<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\EmployeeCategory;
use Illuminate\Support\Facades\Validator;

class EmployeeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employeeCategories'] = EmployeeCategory::latest()->get();
        return view('admin.pages.employeeCategory.all', $data);
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
                'name'     => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            $monthly_earned_leave = $request->monthly_earned_leave;
            $monthly_casual_leave = $request->monthly_casual_leave;
            $monthly_medical_leave = $request->monthly_medical_leave;

            // Calculate yearly leave based on monthly leave
            $yearly_earned_leave = $monthly_earned_leave * 12;
            $yearly_casual_leave = $monthly_casual_leave * 12;
            $yearly_medical_leave = $monthly_medical_leave * 12;
            EmployeeCategory::create([
                'name'                  => $request->name,
                'slug'                  => Str::slug($request->name),
                'monthly_earned_leave'  => $monthly_earned_leave,
                'monthly_casual_leave'  => $monthly_casual_leave,
                'monthly_medical_leave' => $monthly_medical_leave,
                'yearly_earned_leave'   => $yearly_earned_leave,
                'yearly_casual_leave'   => $yearly_casual_leave,
                'yearly_medical_leave'  => $yearly_medical_leave,
                'evaluation_period'     => $request->evaluation_period,
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
                'name'     => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            $monthly_earned_leave = $request->monthly_earned_leave;
            $monthly_casual_leave = $request->monthly_casual_leave;
            $monthly_medical_leave = $request->monthly_medical_leave;

            // Calculate yearly leave based on monthly leave
            $yearly_earned_leave = $monthly_earned_leave * 12;
            $yearly_casual_leave = $monthly_casual_leave * 12;
            $yearly_medical_leave = $monthly_medical_leave * 12;

            EmployeeCategory::find($id)->update([
                'name'                  => $request->name,
                'slug'                  => Str::slug($request->name),
                'monthly_earned_leave'  => $monthly_earned_leave,
                'monthly_casual_leave'  => $monthly_casual_leave,
                'monthly_medical_leave' => $monthly_medical_leave,
                'yearly_earned_leave'   => $yearly_earned_leave,
                'yearly_casual_leave'   => $yearly_casual_leave,
                'yearly_medical_leave'  => $yearly_medical_leave,
                'evaluation_period'     => $request->evaluation_period,
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
        EmployeeCategory::find($id)->delete();
    }
}

<?php

namespace App\Http\Controllers\Salary;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\SalaryForm;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class SalaryFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['salaryForms'] =  SalaryForm::latest()->get();
        return view('admin.pages.salaryForm.all', $data);
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
                'category_id' => 'required|exists:employee_categories,id',
                'user_id' => 'required|exists:users,id',
                'monthly_salary' => 'required|numeric|min:0',
                'selected_attributes' => 'required|array',
            ],
            [
                'category_id.required' => 'Category ID is required.',
                'category_id.exists' => 'Invalid category ID.',
                'user_id.required' => 'User ID is required.',
                'user_id.exists' => 'Invalid user ID.',
                'monthly_salary.required' => 'Monthly salary is required.',
                'monthly_salary.numeric' => 'Monthly salary must be a numeric value.',
                'monthly_salary.min' => 'Monthly salary must be greater than or equal to 0.',
                'selected_attributes.required' => 'Selected attributes are required.',
                'selected_attributes.array' => 'Selected attributes must be an array.',
            ]
        );

        if ($validator->passes()) {
            SalaryForm::create([
                'category_id'         => $request->category_id,
                'user_id'             => $request->user_id,
                'monthly_salary'      => $request->monthly_salary,
                'selected_attributes' => json_encode($request->selected_attributes),
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
        $data['user'] = User::whereId($id)->first();
        return view('admin.pages.HrandAdmin.salary' , $data);
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
                'category_id' => 'required|exists:employee_categories,id',
                'user_id' => 'required|exists:users,id',
                'monthly_salary' => 'required|numeric|min:0',
                'selected_attributes' => 'required|array',
            ],
            [
                'category_id.required' => 'Category ID is required.',
                'category_id.exists' => 'Invalid category ID.',
                'user_id.required' => 'User ID is required.',
                'user_id.exists' => 'Invalid user ID.',
                'monthly_salary.required' => 'Monthly salary is required.',
                'monthly_salary.numeric' => 'Monthly salary must be a numeric value.',
                'monthly_salary.min' => 'Monthly salary must be greater than or equal to 0.',
                'selected_attributes.required' => 'Selected attributes are required.',
                'selected_attributes.array' => 'Selected attributes must be an array.',
            ]
        );

        if ($validator->passes()) {
            SalaryForm::find($id)->update([
                'category_id'         => $request->category_id,
                'user_id'             => $request->user_id,
                'monthly_salary'      => $request->monthly_salary,
                'selected_attributes' => json_encode($request->selected_attributes),
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
        SalaryForm::find($id)->delete();
    }
}


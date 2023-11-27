<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\ExpenseType;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\ExpenseCategory;
use Illuminate\Support\Facades\Validator;

class ExpenseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['expenseCategorys'] = ExpenseCategory::select('expense_categories.id', 'expense_categories.name')->get();
        $data['expenseTypes']     = ExpenseType::latest()->get();
        return view('admin.pages.expenseType.all', $data);
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
                'expense_category_id' => 'required|integer',
                'name'                => 'required|string',
                'status'              => 'required|string',
                'notes'               => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            ExpenseType::create([
                'expense_category_id' => $request->expense_category_id,
                'name'                => $request->name,
                'slug'                => Str::slug($request->name),
                'status'              => $request->status,
                'notes'               => $request->notes,
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
                'expense_category_id' => 'required|integer',
                'name'                => 'required|string',
                'status'              => 'required|string',
                'notes'               => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            ExpenseType::find($id)->update([
                'expense_category_id' => $request->expense_category_id,
                'name'                => $request->name,
                'slug'                => Str::slug($request->name),
                'status'              => $request->status,
                'notes'               => $request->notes,
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
        ExpenseType::find($id)->delete();
    }
}

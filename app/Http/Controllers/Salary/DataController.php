<?php

namespace App\Http\Controllers\Salary;

use App\Models\Admin\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['datas'] = Data::latest()->get();
        return view('admin.pages.data.all', $data);
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
                'name' => 'required|unique:data|max:255',
                'value' => 'required|max:255',
            ],
            [
                'name.required'  => 'The name field is required.',
                'name.unique'    => 'The name has already been taken.',
                'name.max'       => 'The name may not be greater than: max characters.',
                'value.required' => 'The value field is required.',
                'value.max'      => 'The value may not be greater than :max characters.',
            ]
        );

        if ($validator->passes()) {
            Data::create([
                'name'  => $request->name,
                'value' => $request->value,
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
                'name' => 'required|unique:data|max:255',
                'value' => 'required|max:255',
            ],
            [
                'name.required'  => 'The name field is required.',
                'name.unique'    => 'The name has already been taken.',
                'name.max'       => 'The name may not be greater than: max characters.',
                'value.required' => 'The value field is required.',
                'value.max'      => 'The value may not be greater than :max characters.',
            ]
        );

        if ($validator->passes()) {
            Data::find($id)->update([
                'name'  => $request->name,
                'value' => $request->value,
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
        Data::find($id)->delete();
    }
}

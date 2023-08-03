<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\RowWithCol;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class RowWithColController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rowWithColumns'] = RowWithCol::get();
        return view('admin.pages.rowWithCol.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.rowWithCol.add');
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
                'title' => 'required',
            ],
        );

        if ($validator->passes()) {
            RowWithCol::create([
                'title'            => $request->title,
                'col_one_title'    => $request->col_one_title,
                'col_one_des'      => $request->col_one_des,
                'col_one_btn_name' => $request->col_one_btn_name,
                'col_one_link'     => $request->col_one_link,
                'col_two_title'    => $request->col_two_title,
                'col_two_des'      => $request->col_two_des,
                'col_two_btn_name' => $request->col_two_btn_name,
                'col_two_link'     => $request->col_two_link,
            ]);
            Toastr::success('Data added successfully');
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
        $data['rowWithColumn'] = RowWithCol::findOrFail($id);
        return view('admin.pages.rowWithCol.edit', $data);
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
                'title' => 'required',
            ],
        );

        if ($validator->passes()) {
            RowWithCol::find($id)->update([
                'title'            => $request->title,
                'col_one_title'    => $request->col_one_title,
                'col_one_des'      => $request->col_one_des,
                'col_one_btn_name' => $request->col_one_btn_name,
                'col_one_link'     => $request->col_one_link,
                'col_two_title'    => $request->col_two_title,
                'col_two_des'      => $request->col_two_des,
                'col_two_btn_name' => $request->col_two_btn_name,
                'col_two_link'     => $request->col_two_link,
            ]);
            Toastr::success('Data added successfully');
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
        RowWithCol::find($id)->delete();
    }
}

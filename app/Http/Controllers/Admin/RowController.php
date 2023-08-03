<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Row;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class RowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Row::orderBy('id' , 'desc')->select('rows.title','rows.image','rows.id')->get();
        return view('admin.pages.row.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.row.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'image'   => 'image|mimes:png,jpg,jpeg|max:10000',
            ],

        );

        if ($validator->passes()) {
            $mainFile = $request->file('image');
            $imgPath = storage_path('app/public/');
            if (empty($mainFile)) {
                Row::create([
                    'title'       => $request->title,
                    'badge'       => $request->badge,
                    'short_des'   => $request->short_des,
                    'btn_name'    => $request->btn_name,
                    'link'        => $request->link,
                    'list_title'  => $request->list_title,
                    'list_one'    => $request->list_one,
                    'list_two'    => $request->list_two,
                    'list_three'  => $request->list_three,
                    'list_four'   => $request->list_four,
                    'description' => $request->description,
                ]);
            } else {
                $globalFunImg =  Helper::singleImageUpload($mainFile, $imgPath, 550, 343);
                if ($globalFunImg['status'] == 1) {
                    Row::create([
                        'title'       => $request->title,
                        'badge'       => $request->badge,
                        'short_des'   => $request->short_des,
                        'btn_name'    => $request->btn_name,
                        'link'        => $request->link,
                        'list_title'  => $request->list_title,
                        'list_one'    => $request->list_one,
                        'list_two'    => $request->list_two,
                        'list_three'  => $request->list_three,
                        'list_four'   => $request->list_four,
                        'description' => $request->description,
                        'image'       => $globalFunImg['file_name'],
                    ]);
                } else {
                    Toastr::warning('Image upload failed! plz try again.');
                }
            }
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
        $data['row'] = Row::find($id);
        return view('admin.pages.row.edit', $data);
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
        $row = Row::find($id);
        if (!empty($row)) {
            $validator =
                [
                    'title' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg|max:10000',
                ];
        } else {
            $validator =
                [
                    'title' => 'required',
                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $mainFile = $request->image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleImageUpload($mainFile, $uploadPath, 550, 343);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($row)) {
                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path($uploadPath . '/') . $row->image);
                    File::delete(public_path($uploadPath . '/thumb/') . $row->image);
                    File::delete(public_path($uploadPath . '/requestImg/') . $row->image);
                }

                $row->update([
                    'title'       => $request->title,
                    'badge'       => $request->badge,
                    'short_des'   => $request->short_des,
                    'btn_name'    => $request->btn_name,
                    'link'        => $request->link,
                    'list_title'  => $request->list_title,
                    'list_one'    => $request->list_one,
                    'list_two'    => $request->list_two,
                    'list_three'  => $request->list_three,
                    'list_four'   => $request->list_four,
                    'description' => $request->description,
                    'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $row->image,
                ]);
            }

            Toastr::success('Data has been updated');
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
        $row = Row::find($id);

        if (File::exists(public_path('storage/') . $row->image)) {
            File::delete(public_path('storage/') . $row->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $row->image)) {
            File::delete(public_path('storage/requestImg/') . $row->image);
        }
        if (File::exists(public_path('storage/thumb/') . $row->image)) {
            File::delete(public_path('storage/thumb/') . $row->image);
        }
        $row->delete();
    }
}

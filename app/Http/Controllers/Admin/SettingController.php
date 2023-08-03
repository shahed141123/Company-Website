<?php

namespace App\Http\Controllers\Admin;

use Image;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('admin.pages.setting.all', compact('setting'));
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

        $settings = Setting::first();
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'max:100',
                'logo'   => 'image|mimes:png,jpg,jpeg|max:10000',
                'favicon'   => 'image|mimes:png,jpg,jpeg|max:10000',

            ],
            [
                'mimes' => 'The :attribute must be a file of type: PNG - JPEG - JPG'
            ],

        );


        if ($validator->passes()) {
            $data = $request->all();
            if ($request->logo) {
                $destination = 'upload/logoimage/'.$settings->logo;
                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $image = $request->file('logo');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $path = public_path('upload/logoimage/'.$name_gen);
                Image::make($image)->resize(376,282)->save($path);
                $data['logo'] = $name_gen;
            }
            if ($request->favicon) {
                $destination = 'upload/faviconimage/'.$settings->favicon;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $image = $request->file('favicon');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $path = public_path('upload/faviconimage/'.$name_gen);
                Image::make($image)->resize(376,282)->save($path);
                $data['favicon'] = $name_gen;
            }

            $status = $settings->fill($data)->save();

            if ($status) {
                Toastr::success('Data Updated Successfully');
            } else {
                Toastr::warning('Sorry ! Please try again.');
            }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

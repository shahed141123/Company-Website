<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Country;
use App\Models\Admin\OfficeLocation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class OfficeLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['countrys'] = Country::get();
        $data['officeLocations'] = OfficeLocation::get();
        return view('admin.pages.officeLocation.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $data['countrys'] = Country::get();
    //     return view('admin.pages.officeLocation.add', $data);
    // }

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
                'name'            => 'nullable',
                'country_id'      => 'nullable',
                'address'         => 'nullable',
                'mobile_number'   => 'nullable',
                'whatsapp_number' => 'nullable',
                'zip_code'        => 'nullable',
            ],
        );
        $region_id = Country::where('id',$request->country_id)->value('region_id');

        if ($validator->passes()) {
            OfficeLocation::create([
                'region_id'       => $region_id,
                'country_id'      => $request->country_id,
                'name'            => $request->name,
                'address'         => $request->address,
                'mobile_number'   => $request->mobile_number,
                'whatsapp_number' => $request->whatsapp_number,
                'zip_code'        => $request->zip_code,
                'email_id'        => $request->email_id,
            ]);
            Toastr::success('Data Insert Successfully');
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
    // public function edit($id)
    // {
    //     $data['countrys'] = Country::get();
    //     $data['officeLocation'] = OfficeLocation::find($id);
    //     return view('admin.pages.officeLocation.edit', $data);
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
        $validator = Validator::make(
            $request->all(),
            [
                'name'            => 'nullable',
                'country_id'      => 'nullable',
                'address'         => 'nullable',
                'mobile_number'   => 'nullable',
                'whatsapp_number' => 'nullable',
                'zip_code'        => 'nullable',
            ],
        );
        $region_id = Country::where('id',$request->country_id)->value('region_id');
        if ($validator->passes()) {
            OfficeLocation::find($id)->update([
                'region_id'       => $region_id,
                'country_id'      => $request->country_id,
                'name'            => $request->name,
                'address'         => $request->address,
                'mobile_number'   => $request->mobile_number,
                'whatsapp_number' => $request->whatsapp_number,
                'zip_code'        => $request->zip_code,
                'email_id'        => $request->email_id,
            ]);
            Toastr::success('Data Updated Successfully');
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
        OfficeLocation::findOrFail($id)->delete();
    }
}

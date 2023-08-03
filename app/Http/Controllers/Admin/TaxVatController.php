<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Region;
use App\Models\Admin\TaxVat;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class TaxVatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['regions']   = Region::select('regions.id', 'regions.region_name')->get();
        $data['countries'] = Country::select('countries.id', 'countries.country_name')->get();
        $data['taxVats']   = TaxVat::latest()->get();
        return view('admin.pages.taxVat.all', $data);
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
                'region_id'    => 'nullable|integer',
                'country_id'   => 'nullable|integer',
                'name'         => 'nullable|string',
                'percentage'   => 'nullable|numeric',
                'type'         => 'nullable|string',
                'account_type' => 'nullable|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            TaxVat::create([
                'region_id'    => $request->region_id,
                'country_id'   => $request->country_id,
                'name'         => $request->name,
                'percentage'   => $request->percentage,
                'type'         => $request->type,
                'account_type' => $request->account_type,
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
                'region_id'    => 'nullable|integer',
                'country_id'   => 'nullable|integer',
                'name'         => 'nullable|string',
                'percentage'   => 'nullable|numeric',
                'type'         => 'nullable|string',
                'account_type' => 'nullable|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            TaxVat::find($id)->update([
                'region_id'    => $request->region_id,
                'country_id'   => $request->country_id,
                'name'         => $request->name,
                'percentage'   => $request->percentage,
                'type'         => $request->type,
                'account_type' => $request->account_type,
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
        TaxVat::find($id)->delete();
    }
}

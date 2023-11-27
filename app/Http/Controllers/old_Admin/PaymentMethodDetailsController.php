<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\PaymentMethodDetails;

class PaymentMethodDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['paymentMethodDetails'] = PaymentMethodDetails::get();
        return view('admin.pages.paymentMethodDetails.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['regions'] = Region::select('regions.id', 'regions.region_name')->get();
        return view('admin.pages.paymentMethodDetails.add', $data);
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
                'region_id'        => 'required',
            ],
        );

        if ($validator->passes()) {
            PaymentMethodDetails::create([
                'region_id'       => $request->region_id,
                'type'            => $request->type,
                'card_link'       => $request->card_link,
                'card_note'       => $request->card_note,
                'bank_name'       => $request->bank_name,
                'bank_address'    => $request->bank_address,
                'account_name'    => $request->account_name,
                'account_address' => $request->account_address,
                'account_type'    => $request->account_type,
                'branch'          => $request->branch,
                'routing'         => $request->routing,
                'check_address'   => $request->check_address,
                'check_note'      => $request->check_note,
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
    public function edit($id)
    {
        $data['paymentMethodDetail'] = PaymentMethodDetails::find($id);
        $data['regions'] = Region::select('regions.id', 'regions.region_name')->get();
        return view('admin.pages.paymentMethodDetails.edit', $data);
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
                'region_id'        => 'required',
            ],
        );

        if ($validator->passes()) {
            PaymentMethodDetails::find($id)->update([
                'region_id'       => $request->region_id,
                'type'            => $request->type,
                'card_link'       => $request->card_link,
                'card_note'       => $request->card_note,
                'bank_name'       => $request->bank_name,
                'bank_address'    => $request->bank_address,
                'account_name'    => $request->account_name,
                'account_address' => $request->account_address,
                'account_type'    => $request->account_type,
                'branch'          => $request->branch,
                'routing'         => $request->routing,
                'check_address'   => $request->check_address,
                'check_note'      => $request->check_note,
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
        PaymentMethodDetails::find($id)->delete();

    }
}

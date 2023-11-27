<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\AccountProfitLoss;
use Illuminate\Support\Facades\Validator;

class AccountProfitLossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.rfq_code', 'rfqs.name')->get();
        $data['AccountProfitLosses'] = AccountProfitLoss::get();
        return view('admin.pages.AccountProfitLoss.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        return view('admin.pages.AccountProfitLoss.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'rfq_id'                 => 'required',
                'sales_price'            => 'nullable',
                'cost_price'             => 'nullable',
                'gross_makup_percentage' => 'nullable',
                'gross_makup_ammount'    => 'nullable',
                'net_profit_percentage'  => 'nullable',
                'net_profit_ammount'     => 'nullable',
                'profit'                 => 'nullable',
                'loss'                   => 'nullable',
            ],
            [
                'required' => 'the :attribute is required',
            ]
        );

        if ($validator->passes()) {
            AccountProfitLoss::create([
                'rfq_id'                 => $request->rfq_id,
                'sales_price'            => $request->sales_price,
                'cost_price'             => $request->cost_price,
                'gross_makup_percentage' => $request->gross_makup_percentage,
                'gross_makup_ammount'    => $request->gross_makup_ammount,
                'net_profit_percentage'  => $request->net_profit_percentage,
                'net_profit_ammount'     => $request->net_profit_ammount,
                'profit'                 => $request->profit,
                'loss'                   => $request->loss,
            ]);
            Toastr::success('Data insert successfully.');
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
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        $data['AccountProfitLoss'] = AccountProfitLoss::find($id);
        return view('admin.pages.AccountProfitLoss.edit', $data);
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
                'rfq_id'                 => 'required',
                'sales_price'            => 'nullable',
                'cost_price'             => 'nullable',
                'gross_makup_percentage' => 'nullable',
                'gross_makup_ammount'    => 'nullable',
                'net_profit_percentage'  => 'nullable',
                'net_profit_ammount'     => 'nullable',
                'profit'                 => 'nullable',
                'loss'                   => 'nullable',

            ],
        );

        if ($validator->passes()) {
            AccountProfitLoss::find($id)->update([
                'rfq_id'                 => $request->rfq_id,
                'sales_price'            => $request->sales_price,
                'cost_price'             => $request->cost_price,
                'gross_makup_percentage' => $request->gross_makup_percentage,
                'gross_makup_ammount'    => $request->gross_makup_ammount,
                'net_profit_percentage'  => $request->net_profit_percentage,
                'net_profit_ammount'     => $request->net_profit_ammount,
                'profit'                 => $request->profit,
                'loss'                   => $request->loss,
            ]);
            Toastr::success('Data updated successfully.');
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
        AccountProfitLoss::find($id)->delete();
    }
}

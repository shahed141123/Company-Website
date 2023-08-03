<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Admin\DealSas;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\SalesProfitLoss;
use Illuminate\Support\Facades\Validator;

class SalesProfitLossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['dealSasWithRfqs'] = DealSas::join('rfqs', 'deal_sas.rfq_id', 'rfqs.id')->select(
            'rfqs.id  as rfqsId',
            'rfqs.create_date',
            'rfqs.name',
            'rfqs.rfq_code',
            'rfqs.client_type',
            'deal_sas.net_profit_percentage',
            'deal_sas.net_profit_amount',
            'deal_sas.gross_profit_subtotal',
            'deal_sas.gross_profit_amount',
            'deal_sas.sub_total_cost',
            'deal_sas.grand_total',
        )->where('rfq_type' , 'sales')->get();

        $data['grandTotalSum'] = $data['dealSasWithRfqs']->pluck('grand_total')->sum();
        $data['netProfitSum'] = $data['dealSasWithRfqs']->pluck('net_profit_amount')->sum();
        $data['netProfitPercentageSum'] = $data['dealSasWithRfqs']->pluck('net_profit_percentage')->sum();
        $data['salesProfitLosses'] = SalesProfitLoss::get();
        return view('admin.pages.SalesProfitLoss.all', $data);
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
                'rfq_id'                 => 'required',
                'client_type'            => 'nullable',
                'item_description'       => 'nullable',
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
            SalesProfitLoss::create([
                'rfq_id'                 => $request->rfq_id,
                'client_type'            => $request->client_type,
                'item_description'       => $request->item_description,
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
        $data['SalesProfitLoss'] = SalesProfitLoss::find($id);
        return view('admin.pages.SalesProfitLoss.edit', $data);
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
                'client_type'            => 'nullable',
                'item_description'       => 'nullable',
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
            SalesProfitLoss::find($id)->update([
                'rfq_id'                 => $request->rfq_id,
                'client_type'            => $request->client_type,
                'item_description'       => $request->item_description,
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
        SalesProfitLoss::find($id)->delete();
    }
}

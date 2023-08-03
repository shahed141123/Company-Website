<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\RfqOrderStatus;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class RfqOrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rfqOrderStatuss'] = RfqOrderStatus::latest()->get();
        return view('admin.pages.rfqOrderStatus.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rfqs'] = Rfq::latest()->get();
        return view('admin.pages.rfqOrderStatus.add', $data);
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
                'rfq_id'                    => 'nullable',
                'order_status'              => 'nullable',
                'processing_status'         => 'nullable',
                'delivery_status'           => 'nullable',
                'client_price_status'       => 'nullable',
                'client_price'              => 'nullable',
                'principles_name'           => 'nullable',
                'principles_price'          => 'nullable',
                'principles_payment_status' => 'nullable',
                'principles_payment'        => 'nullable',
            ],
        );

        if ($validator->passes()) {
            RfqOrderStatus::create([
                'rfq_id'                    => $request->rfq_id,
                'order_status'              => $request->order_status,
                'processing_status'         => $request->processing_status,
                'delivery_status'           => $request->delivery_status,
                'client_price'              => $request->client_price,
                'client_price_status'       => $request->client_price_status,
                'principles_name'           => $request->principles_name,
                'principles_price'          => $request->principles_price,
                'principles_payment'        => $request->principles_payment,
                'principles_payment_status' => $request->principles_payment_status,
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
        $data['rfqs'] = Rfq::get();
        $data['rfqOrderStatus'] = RfqOrderStatus::find($id);
        return view('admin.pages.rfqOrderStatus.edit', $data);
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
                'rfq_id'                    => 'nullable',
                'order_status'              => 'nullable',
                'processing_status'         => 'nullable',
                'delivery_status'           => 'nullable',
                'client_price_status'       => 'nullable',
                'client_price'              => 'nullable',
                'principles_name'           => 'nullable',
                'principles_price'          => 'nullable',
                'principles_payment_status' => 'nullable',
                'principles_payment'        => 'nullable',
            ],
        );

        if ($validator->passes()) {
            RfqOrderStatus::find($id)->update([
                'rfq_id'                    => $request->rfq_id,
                'order_status'              => $request->order_status,
                'processing_status'         => $request->processing_status,
                'delivery_status'           => $request->delivery_status,
                'client_price'              => $request->client_price,
                'client_price_status'       => $request->client_price_status,
                'principles_name'           => $request->principles_name,
                'principles_price'          => $request->principles_price,
                'principles_payment'        => $request->principles_payment,
                'principles_payment_status' => $request->principles_payment_status,
            ]);
            Toastr::success('Data Update Successfully');
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
        RfqOrderStatus::find($id)->delete();
    }
}

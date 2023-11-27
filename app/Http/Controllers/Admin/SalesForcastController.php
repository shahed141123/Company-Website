<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Admin\SalesForcast;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SalesForcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rfqs'] = Rfq::where('rfq_type' , 'sales')->get();
        $data['salesforcasts'] = SalesForcast::get();
        return view('admin.pages.salesforcast.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rfqs'] = Rfq::select('rfqs.id','rfqs.rfq_code', 'rfqs.name')->get();
        $data['users'] = User::get();
        return view('admin.pages.salesForcastUpdate.add', $data);
    }

    /**
     * Store a newly created resource in storage.files
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
                'title'          => 'nullable',
                'work_order_pdf' => 'nullable|file|mimes:pdf|max:5000',
                'client_po_pdf'  => 'nullable|file|mimes:pdf|max:5000',
            ]
        );
        if ($validator->passes()) {
            $mainFileWorkOrder = $request->file('work_order_pdf');
            $mainFileClientPo = $request->file('client_po_pdf');
            if (isset($mainFileWorkOrder)) {
                $globalFunWorkOrder =  Helper::singleFileUpload($mainFileWorkOrder);
            } else {
                $globalFunWorkOrder = ['status' => 0];
            }

            if (isset($mainFileClientPo)) {
                $globalFunClientPo = Helper::singleFileUpload($mainFileClientPo);
            } else {
                $globalFunClientPo = ['status' => 0];
            }

            SalesForcast::create([
                'rfq_id'                    => $request->rfq_id,
                'sales_man_id_l1'           => $request->sales_man_id_l1,
                'sales_man_id_t1'           => $request->sales_man_id_t1,
                'sales_man_id_t2'           => $request->sales_man_id_t2,
                'date'                      => date('Y-m-d H:i:s', strtotime($request->date)),
                'month'                     => $request->month,
                'quarter'                   => $request->quarter,
                'partner_type'              => $request->partner_type,
                'pq_reference'              => $request->pq_reference,
                'client_name'               => $request->client_name,
                'product_name'              => $request->product_name,
                'forcast_type'              => $request->forcast_type,
                'value'                     => $request->value,
                'order_status'              => $request->order_status,
                'client_price_status'       => $request->client_price_status,
                'principles_payment_status' => $request->principles_payment_status,
                'delivery_dead_line'        => date('Y-m-d H:i:s', strtotime($request->delivery_dead_line)),
                'final_status'              => $request->final_status,
                'work_order_number'         => $request->work_order_number,
                'client_po_number'          => $request->client_po_number,
                'contact_person'            => $request->contact_person,
                'contact_number'            => $request->contact_number,
                'probability_status'        => $request->probability_status,
                'quotation_status'          => $request->quotation_status,
                'probability_reason'        => $request->probability_reason,
                'quotation_action'          => $request->quotation_action,
                'lost_level_one'            => $request->lost_level_one,
                'lost_level_tow'            => $request->lost_level_tow,
                'work_order_pdf'           => $globalFunWorkOrder['status'] == 1 ? $globalFunWorkOrder['file_name'] : '',
                'client_po_pdf'          => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
            ]);

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
        $data['rfqs'] = Rfq::select('rfqs.id','rfqs.rfq_code', 'rfqs.name')->get();
        $data['users'] = User::get();
        $data['salesforcast'] = SalesForcast::find($id);
        return view('admin.pages.salesForcastUpdate.edit', $data);
    }

    /**
     * Update the specified resource in storage.files
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salesForcast = SalesForcast::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'title'          => 'nullable',
                'work_order_pdf' => 'nullable|file|mimes:pdf|max:5000',
                'client_po_pdf'  => 'nullable|file|mimes:pdf|max:5000',
            ]
        );
        if ($validator->passes()) {
            $mainFileWorkOrder = $request->file('work_order_pdf');
            $mainFileClientPo = $request->file('client_po_pdf');
            if (isset($mainFileWorkOrder)) {
                $globalFunWorkOrder =  Helper::singleFileUpload($mainFileWorkOrder);
            } else {
                $globalFunWorkOrder = ['status' => 0];
            }

            if (isset($mainFileClientPo)) {
                $globalFunClientPo = Helper::singleFileUpload($mainFileClientPo);
            } else {
                $globalFunClientPo = ['status' => 0];
            }
            if ($globalFunWorkOrder['status'] == 1) {
                File::delete(public_path('storage/files/') . $salesForcast->work_order_pdf);
            }
            if ($globalFunClientPo['status'] == 1) {
                File::delete(public_path('storage/files/') . $salesForcast->client_po_pdf);
            }
            $salesForcast->update([
                'rfq_id'                    => $request->rfq_id,
                'sales_man_id_l1'           => $request->sales_man_id_l1,
                'sales_man_id_t1'           => $request->sales_man_id_t1,
                'sales_man_id_t2'           => $request->sales_man_id_t2,
                'date'                      => date('Y-m-d H:i:s', strtotime($request->date)),
                'month'                     => $request->month,
                'quarter'                   => $request->quarter,
                'partner_type'              => $request->partner_type,
                'pq_reference'              => $request->pq_reference,
                'client_name'               => $request->client_name,
                'product_name'              => $request->product_name,
                'forcast_type'              => $request->forcast_type,
                'value'                     => $request->value,
                'order_status'              => $request->order_status,
                'client_price_status'       => $request->client_price_status,
                'principles_payment_status' => $request->principles_payment_status,
                'delivery_dead_line'        => date('Y-m-d H:i:s', strtotime($request->delivery_dead_line)),
                'final_status'              => $request->final_status,
                'work_order_number'         => $request->work_order_number,
                'client_po_number'          => $request->client_po_number,
                'contact_person'            => $request->contact_person,
                'contact_number'            => $request->contact_number,
                'probability_status'        => $request->probability_status,
                'quotation_status'          => $request->quotation_status,
                'probability_reason'        => $request->probability_reason,
                'quotation_action'          => $request->quotation_action,
                'lost_level_one'            => $request->lost_level_one,
                'lost_level_tow'            => $request->lost_level_tow,
                'work_order_pdf'           => $globalFunWorkOrder['status'] == 1 ? $globalFunWorkOrder['file_name'] : '',
                'client_po_pdf'          => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
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
     * Remove the specified resource from storage.files
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesForcast = SalesForcast::find($id);

        //work_order_pdf
        if (File::exists(public_path('storage/files/') . $salesForcast->work_order_pdf)) {
            File::delete(public_path('storage/files/') . $salesForcast->work_order_pdf);
        }

        //client_po_pdf
        if (File::exists(public_path('storage/files/') . $salesForcast->client_po_pdf)) {
            File::delete(public_path('storage/files/') . $salesForcast->client_po_pdf);
        }
        $salesForcast->delete();
    }
}

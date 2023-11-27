<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use App\Models\Admin\AccountsReceivable;
use Illuminate\Support\Facades\Validator;

class AccountsReceivableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        $data['accountsReceivables'] = AccountsReceivable::get();
        return view('admin.pages.AccountReceivable.all', $data);
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
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'rfq_id'       => 'required',
                'invoice'      => 'nullable|file|mimes:pdf|max:5000',
                'client_po' => 'nullable|file|mimes:pdf|max:5000',
            ],
            [
                'mimes' => 'the :attribute is must be type of pdf',
            ]
        );
        if ($validator->passes()) {
            $mainFileInvoice = $request->file('invoice');
            $mainFileClientPo = $request->file('client_po');
            if (isset($mainFileInvoice)) {
                $globalFunInvoice =  Helper::singleFileUpload($mainFileInvoice);
            } else {
                $globalFunInvoice = ['status' => 0];
            }

            if (isset($mainFileClientPo)) {
                $globalFunClientPo = Helper::singleFileUpload($mainFileClientPo);
            } else {
                $globalFunClientPo = ['status' => 0];
            }

            AccountsReceivable::create([
                'rfq_id'       => $request->rfq_id,
                'payment_type' => $request->payment_type,
                'po_date'     => date('Y-m-d H:i:s', strtotime($request->po_date)),
                'due_date'    => date('Y-m-d H:i:s', strtotime($request->due_date)),
                'client_po_number' => $request->client_po_number,
                'client_name'      => $request->client_name,
                'client_po'        => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
                'invoice'          => $globalFunInvoice['status']     == 1 ? $globalFunInvoice['file_name'] : '',
                'client_amount'         => $request->client_amount,
                'client_payment_status' => $request->client_payment_status,
                'client_payment_value'  => $request->client_payment_value,
                'client_money_receipt'  => $request->client_money_receipt,
                'credit_days'           => $request->credit_days,
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
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        $data['accountsReceivable'] = AccountsReceivable::find($id);
        return view('admin.pages.AccountReceivable.edit', $data);
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
        $accountsReceivable = AccountsReceivable::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'rfq_id'       => 'required',
                'invoice'      => 'nullable|file|mimes:pdf|max:5000',
                'client_po' => 'nullable|file|mimes:pdf|max:5000',
            ],
            [
                'mimes' => 'the :attribute is must be type of pdf',
            ]
        );
        if ($validator->passes()) {
            $mainFileInvoice = $request->file('invoice');
            $mainFileClientPo = $request->file('client_po');
            if (isset($mainFileInvoice)) {
                $globalFunInvoice =  Helper::singleFileUpload($mainFileInvoice);
            } else {
                $globalFunInvoice = ['status' => 0];
            }

            if (isset($mainFileClientPo)) {
                $globalFunClientPo = Helper::singleFileUpload($mainFileClientPo);
            } else {
                $globalFunClientPo = ['status' => 0];
            }
            if ($globalFunInvoice['status'] == 1) {
                File::delete(public_path('storage/files/') . $accountsReceivable->invoice);
                File::delete(public_path('storage/files/') . $accountsReceivable->invoice);
                File::delete(public_path('storage/files/') . $accountsReceivable->invoice);
            }
            if ($globalFunClientPo['status'] == 1) {
                File::delete(public_path('storage/files/') . $accountsReceivable->client_po);
                File::delete(public_path('storage/files/') . $accountsReceivable->client_po);
                File::delete(public_path('storage/files/') . $accountsReceivable->client_po);
            }
            $accountsReceivable->update([
                'rfq_id'       => $request->rfq_id,
                'payment_type' => $request->payment_type,
                'po_date'     => date('Y-m-d H:i:s', strtotime($request->po_date)),
                'due_date'    => date('Y-m-d H:i:s', strtotime($request->due_date)),
                'client_po_number' => $request->client_po_number,
                'client_name'      => $request->client_name,
                'client_po'        => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
                'invoice'          => $globalFunInvoice['status']     == 1 ? $globalFunInvoice['file_name'] : '',
                'client_amount'         => $request->client_amount,
                'client_payment_status' => $request->client_payment_status,
                'client_payment_value'  => $request->client_payment_value,
                'client_money_receipt'  => $request->client_money_receipt,
                'credit_days'           => $request->credit_days,
            ]);

            Toastr::success('Data Updaed Successfully');
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
        $accountsReceivable = AccountsReceivable::find($id);
        //invoice
        if (File::exists(public_path('storage/files/') . $accountsReceivable->invoice)) {
            File::delete(public_path('storage/files/') . $accountsReceivable->invoice);
        }
        if (File::exists(public_path('storage/files/') . $accountsReceivable->invoice)) {
            File::delete(public_path('storage/files/') . $accountsReceivable->invoice);
        }
        if (File::exists(public_path('storage/files/') . $accountsReceivable->invoice)) {
            File::delete(public_path('storage/files/') . $accountsReceivable->invoice);
        }

        //client_po
        if (File::exists(public_path('storage/files/') . $accountsReceivable->client_po)) {
            File::delete(public_path('storage/files/') . $accountsReceivable->client_po);
        }
        if (File::exists(public_path('storage/files/') . $accountsReceivable->client_po)) {
            File::delete(public_path('storage/files/') . $accountsReceivable->client_po);
        }
        if (File::exists(public_path('storage/files/') . $accountsReceivable->client_po)) {
            File::delete(public_path('storage/files/') . $accountsReceivable->client_po);
        }
        $accountsReceivable->delete();
    }
}

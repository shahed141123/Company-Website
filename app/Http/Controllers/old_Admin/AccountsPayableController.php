<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use App\Models\Admin\AccountsPayable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AccountsPayableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        $data['accountsPayables'] = AccountsPayable::get();
        return view('admin.pages.AccountPayable.all', $data);
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
                'principal_po' => 'nullable|file|mimes:pdf|max:5000',
            ],
            [
                'mimes' => 'the :attribute is must be type of pdf',
            ]
        );
        if ($validator->passes()) {
            $mainFileInvoice = $request->file('invoice');
            $mainFilePrincipalPo = $request->file('principal_po');
            if (isset($mainFileInvoice)) {
                $globalFunInvoice =  Helper::singleFileUpload($mainFileInvoice);
            } else {
                $globalFunInvoice = ['status' => 0];
            }

            if (isset($mainFilePrincipalPo)) {
                $globalFunPrincipalPo = Helper::singleFileUpload($mainFilePrincipalPo);
            } else {
                $globalFunPrincipalPo = ['status' => 0];
            }

            AccountsPayable::create([
                'rfq_id'       => $request->rfq_id,
                'payment_type' => $request->payment_type,
                'invoice'      => $globalFunInvoice['status']     == 1 ? $globalFunInvoice['file_name'] : '',
                'po_value'     => $request->po_value,
                'due_date'     => date('Y-m-d H:i:s', strtotime($request->due_date)),
                'principal_name'           => $request->principal_name,
                'principal_po'             => $globalFunPrincipalPo['status'] == 1 ? $globalFunPrincipalPo['file_name'] : '',
                'principal_po_number'      => $request->principal_po_number,
                'principal_amount'         => $request->principal_amount,
                'principal_payment_status' => $request->principal_payment_status,
                'principal_payment_value'  => $request->principal_payment_value,
                'delivery_date' => date('Y-m-d H:i:s', strtotime($request->delivery_date)),
                'credit_days'   =>  $request->credit_days,
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
        $data['accountsPayable'] = AccountsPayable::find($id);
        return view('admin.pages.AccountPayable.edit', $data);
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
        $accountsPayable = AccountsPayable::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'rfq_id'       => 'required',
                'invoice'      => 'nullable|file|mimes:pdf|max:5000',
                'principal_po' => 'nullable|file|mimes:pdf|max:5000',
            ],
            [
                'mimes' => 'the :attribute is must be type of pdf',
            ]
        );
        if ($validator->passes()) {
            $mainFileInvoice = $request->file('invoice');
            $mainFilePrincipalPo = $request->file('principal_po');
            if (isset($mainFileInvoice)) {
                $globalFunInvoice =  Helper::singleFileUpload($mainFileInvoice);
            } else {
                $globalFunInvoice = ['status' => 0];
            }

            if (isset($mainFilePrincipalPo)) {
                $globalFunPrincipalPo = Helper::singleFileUpload($mainFilePrincipalPo);
            } else {
                $globalFunPrincipalPo = ['status' => 0];
            }
            if ($globalFunInvoice['status'] == 1) {
                File::delete(public_path('storage/files/') . $accountsPayable->invoice);
                File::delete(public_path('storage/files/') . $accountsPayable->invoice);
                File::delete(public_path('storage/files/') . $accountsPayable->invoice);
            }
            if ($globalFunPrincipalPo['status'] == 1) {
                File::delete(public_path('storage/files/') . $accountsPayable->principal_po);
                File::delete(public_path('storage/files/') . $accountsPayable->principal_po);
                File::delete(public_path('storage/files/') . $accountsPayable->principal_po);
            }
            $accountsPayable->update([
                'rfq_id'       => $request->rfq_id,
                'payment_type' => $request->payment_type,
                'invoice'      => $globalFunInvoice['status']     == 1 ? $globalFunInvoice['file_name'] : '',
                'po_value'     => $request->po_value,
                'due_date'     => date('Y-m-d H:i:s', strtotime($request->due_date)),
                'principal_name'           => $request->principal_name,
                'principal_po'             => $globalFunPrincipalPo['status'] == 1 ? $globalFunPrincipalPo['file_name'] : '',
                'principal_po_number'      => $request->principal_po_number,
                'principal_amount'         => $request->principal_amount,
                'principal_payment_status' => $request->principal_payment_status,
                'principal_payment_value'  => $request->principal_payment_value,
                'delivery_date' => date('Y-m-d H:i:s', strtotime($request->delivery_date)),
                'credit_days'   =>  $request->credit_days,
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

        $accountsPayable = AccountsPayable::findOrFail($id);
        $filesToDelete = [$accountsPayable->invoice, $accountsPayable->principal_po];

        foreach ($filesToDelete as $file) {
            $path = 'storage/files/' . $file;
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
        }

        $accountsPayable->delete();
    }
}

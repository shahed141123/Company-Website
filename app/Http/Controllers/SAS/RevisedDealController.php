<?php

namespace App\Http\Controllers\SAS;

use Illuminate\Http\Request;
use App\Models\Admin\RevisedDeal;
use App\Http\Controllers\Controller;
use App\Models\Admin\Rfq;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class RevisedDealController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['revisedDeals'] = RevisedDeal::get();
        return view('admin.pages.revisedDeal.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        return view('admin.pages.revisedDeal.add', $data);
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
                'rfq_id'   => 'required',
                'rfq_code' => 'nullable',
                'rfq_type' => 'nullable',
                'message'  => 'nullable',
            ],
        );

        if ($validator->passes()) {
            RevisedDeal::create([
                'rfq_id'   => $request->rfq_id,
                'rfq_code' => $request->rfq_code,
                'rfq_type' => $request->rfq_type,
                'message'  => $request->message,
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
        $data['revisedDeal'] = RevisedDeal::find($id);
        return view('admin.pages.revisedDeal.edit', $data);
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
                'rfq_id'   => 'required',
                'rfq_code' => 'nullable',
                'rfq_type' => 'nullable',
                'message'  => 'nullable',
            ],
        );

        if ($validator->passes()) {
            RevisedDeal::find($id)->update([
                'rfq_id'   => $request->rfq_id,
                'rfq_code' => $request->rfq_code,
                'rfq_type' => $request->rfq_type,
                'message'  => $request->message,
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
        RevisedDeal::find($id)->delete();
    }
}

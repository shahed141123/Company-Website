<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\TierCalculation;
use Illuminate\Support\Facades\Validator;

class TierCalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tierCalculations']   = TierCalculation::latest()->get();
        return view('admin.pages.tierCalculation.all', $data);
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
                'point'    => 'nullable|min:1|max:15',
                'tier'     => 'nullable|min:1|max:15',
                'rebates'  => 'nullable|min:1|max:15',
                'benifits' => 'nullable|min:1|max:15',
                'amount'   => 'nullable|min:1|max:15',
                'value'    => 'nullable|min:1|max:15',
            ]
        );

        if ($validator->passes()) {
            TierCalculation::create([
                'point'    => $request->point,
                'tier'     => $request->tier,
                'rebates'  => $request->rebates,
                'benifits' => $request->benifits,
                'amount'   => $request->amount,
                'value'    => $request->value,
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
                'point'    => 'nullable|min:1|max:15',
                'tier'     => 'nullable|min:1|max:15',
                'rebates'  => 'nullable|min:1|max:15',
                'benifits' => 'nullable|min:1|max:15',
                'amount'   => 'nullable|min:1|max:15',
                'value'    => 'nullable|min:1|max:15',
            ]
        );

        if ($validator->passes()) {
            TierCalculation::find($id)->update([
                'point'    => $request->point,
                'tier'     => $request->tier,
                'rebates'  => $request->rebates,
                'benifits' => $request->benifits,
                'amount'   => $request->amount,
                'value'    => $request->value,
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
        TierCalculation::find($id)->delete();
    }
}

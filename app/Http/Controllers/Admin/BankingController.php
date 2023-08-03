<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Region;
use Illuminate\Http\Request;
use App\Models\Admin\Banking;
use App\Models\Admin\Country;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['regions']  = Region::select('regions.id', 'regions.region_name')->get();
        $data['countrys'] = Country::select('countries.id', 'countries.country_name')->get();
        $data['bankings'] = Banking::latest()->get();
        return view('admin.pages.banking.all', $data);
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
                'region_id'   => 'required',
                'country_id'  => 'required',
                'month'       => 'nullable',
                'date'        => 'nullable',
                'fiscal_year' => 'nullable',
                'bank_name'   => 'nullable',
                'deposit'     => 'nullable',
                'withdraw'    => 'nullable',
                'purpose'     => 'nullable',
                'document'    => 'sometimes|file|image|mimes:pdf,docx,png,jpg,jpeg|max:10000',
                'notes'       => 'nullable',
                'status'      => 'nullable',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: png - jpeg - jpg',
                'file' => 'The :attribute must be a file of type: pdf- docx ',
            ],
        );

        if ($validator->passes()) {
            $document = $request->document;
            $uploadPath = storage_path('app/public/');
            if (isset($document)) {
                $globalFunDocument = Helper::singleUpload($document, $uploadPath);
            } else {
                $globalFunDocument = ['status' => 0];
            }
            Banking::create([
                'region_id'   => $request->region_id,
                'country_id'  => $request->country_id,
                'month'       => $request->month,
                'date'        => $request->date,
                'fiscal_year' => $request->fiscal_year,
                'bank_name'   => $request->bank_name,
                'deposit'     => $request->deposit,
                'withdraw'    => $request->withdraw,
                'purpose'     => $request->purpose,
                'document'    => $globalFunDocument['status'] == 1 ? $globalFunDocument['file_name'] : '',
                'notes'       => $request->notes,
                'status'      => $request->status,
            ]);
            Toastr::success('Data has been created');
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
        $Banking = Banking::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'region_id'   => 'required',
                'country_id'  => 'required',
                'month'       => 'nullable',
                'date'        => 'nullable',
                'fiscal_year' => 'nullable',
                'bank_name'   => 'nullable',
                'deposit'     => 'nullable',
                'withdraw'    => 'nullable',
                'purpose'     => 'nullable',
                'document'    => 'nullable',
                'notes'       => 'nullable',
                'status'      => 'nullable',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: png - jpeg - jpg'
            ],
        );

        if ($validator->passes()) {
            $mainFile = $request->document;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleUpload($mainFile, $uploadPath);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($Banking)) {
                if ($globalFunImg['status'] == 1) {
                    if (File::exists(public_path('storage/') . $Banking->document)) {
                        File::delete(public_path('storage/') . $Banking->document);
                    }
                    if (File::exists(public_path('storage/requestImg/') . $Banking->document)) {
                        File::delete(public_path('storage/requestImg/') . $Banking->document);
                    }
                    if (File::exists(public_path('storage/thumb/') . $Banking->document)) {
                        File::delete(public_path('storage/thumb/') . $Banking->document);
                    }
                    if (File::exists(public_path('storage/files/') . $Banking->document)) {
                        File::delete(public_path('storage/files/') . $Banking->document);
                    }
                }

                $Banking->update([
                    'region_id'   => $request->region_id,
                    'country_id'  => $request->country_id,
                    'month'       => $request->month,
                    'date'        => $request->date,
                    'fiscal_year' => $request->fiscal_year,
                    'bank_name'   => $request->bank_name,
                    'deposit'     => $request->deposit,
                    'withdraw'    => $request->withdraw,
                    'purpose'     => $request->purpose,
                    'document'    => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $Banking->document,
                    'notes'       => $request->notes,
                    'status'      => $request->status,
                ]);
            }

            Toastr::success('Data has been updated');
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
        $banking = Banking::find($id);

        if (File::exists(public_path('storage/') . $banking->document)) {
            File::delete(public_path('storage/') . $banking->document);
        }
        if (File::exists(public_path('storage/requestImg/') . $banking->document)) {
            File::delete(public_path('storage/requestImg/') . $banking->document);
        }
        if (File::exists(public_path('storage/thumb/') . $banking->document)) {
            File::delete(public_path('storage/thumb/') . $banking->document);
        }
        if (File::exists(public_path('storage/files/') . $banking->document)) {
            File::delete(public_path('storage/files/') . $banking->document);
        }
        $banking->delete();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Admin\DealSas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Admin\CommercialDocument;
use App\Models\Admin\Country;
use App\Models\Admin\Region;
use App\Models\Admin\Rfqquotation;

class RFQManageController extends Controller
{

    public function index()
    {
        $data['users'] = User::whereJsonContains('department', 'business')->where('role', 'manager')->get(['id','name']);
        $data['rfqs'] = Rfq::with('rfqProducts')->where('rfq_type' , 'rfq')->orderBy('id', 'ASC')->get();
        return view('admin.pages.rfq-manage.rfq_index',$data);
    }

    public function dealList()
    {
        $data['users'] = User::whereJsonContains('department', 'business')->where('role', 'manager')->get(['id','name']);
        $data['deals'] = Rfq::with('rfqProducts')->where('rfq_type', '!=', 'rfq')->orderBy('rfqs.updated_at', 'desc')->get();
        return view('admin.pages.rfq-manage.deal_index',$data);
    }


    public function show($id)
    {
        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['rfq_details'] = Rfq::with('rfqProducts')->where('rfq_code',$id)->first();
        $data['deal_products'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->get();
        $data['commercial_document'] = CommercialDocument::where('rfq_id', $data['rfq_details']->id)->first();
        //dd($data['rfq_details']->rfq_code);
        $data['sourcing'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->first();
        return view('admin.pages.singleRfq.all',$data);
    }

    public function quotationMail($id)
    {
        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['rfq_details'] = Rfq::with('rfqProducts')->where('rfq_code',$id)->first();
        $data['countires'] = Country::all();
        $data['rfq_country'] = Country::where('country_name', 'LIKE', '%' . $data['rfq_details']->country . '%')->first();
        // dd($data['countires']);
        $data['deal_products'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->get();
        $data['commercial_document'] = CommercialDocument::where('rfq_id', $data['rfq_details']->id)->first();
        //dd($data['rfq_details']->rfq_code);
        $data['sourcing'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->first();
        return view('admin.pages.singleRfq.quotation_mail',$data);
    }


    public function store(Request $request)
    {
        Rfqquotation::create([
            
        ]);
    }




    public function destroy($id)
    {
        $rfq = RFQ::findOrFail($id);

        if (File::exists(public_path('storage/') . $rfq->image)) {
            File::delete(public_path('storage/') . $rfq->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $rfq->image)) {
            File::delete(public_path('storage/requestImg/') . $rfq->image);
        }
        if (File::exists(public_path('storage/thumb/') . $rfq->image)) {
            File::delete(public_path('storage/thumb/') . $rfq->image);
        }
        $rfq->delete();
    }
}

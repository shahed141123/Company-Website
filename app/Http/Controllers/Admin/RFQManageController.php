<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Rfq;
use App\Models\Admin\Region;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Models\Admin\DealSas;
use App\Models\Admin\RfqQuotation;
use App\Models\Admin\QuotationTerm;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use App\Models\Admin\QuotationProduct;
use App\Models\Admin\CommercialDocument;

class RFQManageController extends Controller
{

    public function index()
    {
        $data['users'] = User::whereJsonContains('department', 'business')->where('role', 'manager')->get(['id', 'name']);
        $data['rfqs'] = Rfq::with('rfqProducts')->where('rfq_type', 'rfq')->orderBy('id', 'ASC')->get();
        return view('admin.pages.rfq-manage.rfq_index', $data);
    }

    public function dealList()
    {
        $data['users'] = User::whereJsonContains('department', 'business')->where('role', 'manager')->get(['id', 'name']);
        $data['deals'] = Rfq::with('rfqProducts')->where('rfq_type', '!=', 'rfq')->orderBy('rfqs.updated_at', 'desc')->get();
        return view('admin.pages.rfq-manage.deal_index', $data);
    }


    public function show($id)
    {
        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['rfq_details'] = Rfq::with('rfqProducts')->where('rfq_code', $id)->first();
        $data['deal_products'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->get();
        $data['commercial_document'] = CommercialDocument::where('rfq_id', $data['rfq_details']->id)->first();
        //dd($data['rfq_details']->rfq_code);
        $data['sourcing'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->first();
        return view('admin.pages.singleRfq.all', $data);
    }

    public function quotationMail($id)
    {
        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['rfq_details'] = Rfq::with('rfqProducts')->where('rfq_code', $id)->first();
        $data['countires'] = Country::all();
        $data['rfq_country'] = Country::where('country_name', 'LIKE', '%' . $data['rfq_details']->country . '%')->first();
        // dd($data['countires']);
        $data['deal_products'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->get();
        $data['commercial_document'] = CommercialDocument::where('rfq_id', $data['rfq_details']->id)->first();
        //dd($data['rfq_details']->rfq_code);
        $data['sourcing'] = DealSas::where('rfq_code', $data['rfq_details']->rfq_code)->first();
        return view('admin.pages.singleRfq.quotation_mail', $data);
    }


    public function store(Request $request)
    {
        $rfq_id   = $request->rfq_id;
        $rfq_code = $request->rfq_code;
        $data = $request->all();
        dd($data);
        $data['terms_titles'] = $request->terms_title;
        $data['quotation_products'] = $request->product_name;

        $rfqQuotation = RfqQuotation::create([
            'rfq_id' => $data['rfq_id'] ?? null,
            'rfq_code' => $data['rfq_code'] ?? null,
            'quotation_title' => $data['quotation_title'] ?? null,
            'company_name' => $data['company_name'] ?? null,
            'name' => $data['name'] ?? null,
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'address' => $data['address'] ?? null,
            'ngen_company_name' => $data['ngen_company_name'] ?? null,
            'ngen_company_registration_number' => $data['ngen_company_registration_number'] ?? null,
            'quotation_date' => $data['quotation_date'] ?? null,
            'pq_code' => $data['pq_code'] ?? null,
            'pqr_code' => $data['pqr_code'] ?? null,
            'sub_total_final_total_price' => $data['sub_total_final_total_price'] ?? null,
            'special_discount_final_total_price' => $data['special_discount_final_total_price'] ?? null,
            'vat_final_total_price' => $data['vat_final_total_price'] ?? null,
            'total_final_total_price' => $data['total_final_total_price'] ?? null,
            'thank_you_text' => $data['thank_you_text'] ?? null,
            'sender_name' => $data['sender_name'] ?? null,
            'sender_designation' => $data['sender_designation'] ?? null,
            'ngen_email' => $data['ngen_email'] ?? null,
            'ngen_whatsapp_number' => $data['ngen_whatsapp_number'] ?? null,
            'ngen_number_two' => $data['ngen_number_two'] ?? null,
            'attachment' => $data['attachment'] ?? null,
            'office_cost_percentage' => $data['office_cost_percentage'] ?? null,
            'profit_percentage' => $data['profit_percentage'] ?? null,
            'others_cost_percentage' => $data['others_cost_percentage'] ?? null,
            'remittence_percentage' => $data['remittence_percentage'] ?? null,
            'packing_percentage' => $data['packing_percentage'] ?? null,
            'custom_percentage' => $data['custom_percentage'] ?? null,
            'tax_vat_percentage' => $data['tax_vat_percentage'] ?? null,
        ]);


        foreach ($data['terms_titles'] as $terms_title) {
            QuotationTerm::create([
                'rfq_id' => $rfq_id ?? null,
                'title' => $terms_title['terms_title'] ?? null,
                'description' => $terms_title['terms_description'] ?? null,
            ]);
        };
        foreach ($data['quotation_products'] as $product) {
            QuotationProduct::create([
                'rfq_id' => $rfq_id ?? null,
                'product_id' => $product['product_id'] ?? null,
                'product_name' => $product['product_name'] ?? null,
                'qty' => $product['qty'] ?? null,
                'principal_cost' => $product['principal_cost'] ?? null,
                'principal_unit_total_amount' => $product['principal_unit_total_amount'] ?? null,
                'unit_office_cost' => $product['unit_office_cost'] ?? null,
                'unit_profit' => $product['unit_profit'] ?? null,
                'unit_others_cost' => $product['unit_others_cost'] ?? null,
                'unit_remittence' => $product['unit_remittence'] ?? null,
                'unit_packing' => $product['unit_packing'] ?? null,
                'unit_customs' => $product['unit_customs'] ?? null,
                'unit_tax_vat' => $product['unit_tax_vat'] ?? null,
                'unit_subtotal' => $product['unit_subtotal'] ?? null,
                'unit_final_price' => $product['unit_final_price'] ?? null,
                'unit_final_total_price' => $product['unit_final_total_price'] ?? null,
                'sub_total_principal_amount' => $product['sub_total_principal_amount'] ?? null,
                'sub_total_office_cost' => $product['sub_total_office_cost'] ?? null,
                'sub_total_profit' => $product['sub_total_profit'] ?? null,
                'sub_total_others_cost' => $product['sub_total_others_cost'] ?? null,
                'sub_total_remittance' => $product['sub_total_remittance'] ?? null,
                'sub_total_packing' => $product['sub_total_packing'] ?? null,
                'sub_total_customs' => $product['sub_total_customs'] ?? null,
                'sub_total_tax' => $product['sub_total_tax'] ?? null,
                'sub_total_subtotal' => $product['sub_total_subtotal'] ?? null,
                'sub_total_final_total_price' => $product['sub_total_final_total_price'] ?? null,
                'special_discount_percentage' => $product['special_discount_percentage'] ?? null,
                'special_discount_principal_amount' => $product['special_discount_principal_amount'] ?? null,
                'special_discount_office_cost' => $product['special_discount_office_cost'] ?? null,
                'special_discount_profit' => $product['special_discount_profit'] ?? null,
                'special_discount_others_cost' => $product['special_discount_others_cost'] ?? null,
                'special_discount_remittance' => $product['special_discount_remittance'] ?? null,
                'special_discount_packing' => $product['special_discount_packing'] ?? null,
                'special_discount_customs' => $product['special_discount_customs'] ?? null,
                'special_discount_tax' => $product['special_discount_tax'] ?? null,
                'special_discount_subtotal' => $product['special_discount_subtotal'] ?? null,
                'special_discount_final_total_price' => $product['special_discount_final_total_price'] ?? null,
                'vat_percentage' => $product['vat_percentage'] ?? null,
                'vat_principal_amount' => $product['vat_principal_amount'] ?? null,
                'vat_office_cost' => $product['vat_office_cost'] ?? null,
                'vat_profit' => $product['vat_profit'] ?? null,
                'vat_others_cost' => $product['vat_others_cost'] ?? null,
                'vat_remittance' => $product['vat_remittance'] ?? null,
                'vat_packing' => $product['vat_packing'] ?? null,
                'vat_customs' => $product['vat_customs'] ?? null,
                'vat_tax' => $product['vat_tax'] ?? null,
                'vat_subtotal' => $product['vat_subtotal'] ?? null,
                'vat_final_total_price' => $product['vat_final_total_price'] ?? null,
                'total_principal_amount' => $product['total_principal_amount'] ?? null,
                'total_office_cost' => $product['total_office_cost'] ?? null,
                'total_profit' => $product['total_profit'] ?? null,
                'total_others_cost' => $product['total_others_cost'] ?? null,
                'total_remittance' => $product['total_remittance'] ?? null,
                'total_packing' => $product['total_packing'] ?? null,
                'total_customs' => $product['total_customs'] ?? null,
                'total_tax' => $product['total_tax'] ?? null,
                'total_subtotal' => $product['total_subtotal'] ?? null,
                'total_final_total_price' => $product['total_final_total_price'] ?? null,
            ]);
        };
        Toastr::success('Quotation Saved.');
        return redirect()->back();
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

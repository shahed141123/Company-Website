<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class RFQManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::whereJsonContains('department', 'business')->where('role', 'manager')->get(['id','name']);
        $data['rfqs'] = Rfq::where('rfq_type' , 'rfq')->orderBy('id', 'ASC')->get();
        return view('admin.pages.rfq-manage.rfq_index',$data);
    }
    public function dealList()
    {
        $data['users'] = User::whereJsonContains('department', 'business')->where('role', 'manager')->get(['id','name']);
        $data['deals'] = Rfq::where('rfq_type', '!=', 'rfq')->orderBy('rfqs.updated_at', 'desc')->get();
        return view('admin.pages.rfq-manage.deal_index',$data);
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

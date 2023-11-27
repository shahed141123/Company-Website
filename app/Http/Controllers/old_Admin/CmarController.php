<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Cmar;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class CmarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cmars']   = Cmar::latest()->get();
        return view('admin.pages.cmar.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users']   = User::select('users.id', 'users.name')->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['products'] = Product::select('products.id', 'products.name')->get();
        return view('admin.pages.cmar.add', $data);
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
                'marketing_manager_id.*' => 'nullable',
                'solution_id.*'          => 'nullable',
                'product_id.*'           => 'nullable',
                'year'                   => 'nullable',
                'quarter'                => 'nullable',
                'month'                  => 'nullable',
                'week'                   => 'nullable',
                'target'                 => 'nullable',
                'workorder'              => 'nullable',
                'revenue'                => 'nullable',
                'description'            => 'nullable',
                'sector_smb'             => 'nullable',
                'sector_epg'             => 'nullable',
                'sector_fmg'             => 'nullable',
                'sector_govt'            => 'nullable',
                'sector_edu'             => 'nullable',
                'email'                  => 'nullable',
                'email_links'            => 'nullable',
                'social'                 => 'nullable',
                'social_links'           => 'nullable',
                'call'                   => 'nullable',
                'call_links'             => 'nullable',
                'press'                  => 'nullable',
                'press_links'            => 'nullable',
                'presentation'           => 'nullable',
                'presentation_links'     => 'nullable',
                'boost'                  => 'nullable',
                'boost_links'            => 'nullable',
                'blog'                   => 'nullable',
                'blog_links'             => 'nullable',
                'negotiation'            => 'nullable',
                'negotiation_links'      => 'nullable',
                'deal_closing'           => 'nullable',
                'deal_closing_links'     => 'nullable',
                'followup'               => 'nullable',
                'followup_links'         => 'nullable',
                'quote'                  => 'nullable',
                'quote_links'            => 'nullable',
            ]
        );

        if ($validator->passes()) {
            Cmar::create([
                'marketing_manager_id' => json_encode($request->marketing_manager_id),
                'solution_id'          => json_encode($request->solution_id),
                'product_id'           => json_encode($request->product_id),
                'year'                 => $request->year,
                'quarter'              => $request->quarter,
                'month'                => $request->month,
                'week'                 => $request->week,
                'target'               => $request->target,
                'workorder'            => $request->workorder,
                'revenue'              => $request->revenue,
                'description'          => $request->description,
                'sector_smb'           => $request->sector_smb,
                'sector_epg'           => $request->sector_epg,
                'sector_fmg'           => $request->sector_fmg,
                'sector_govt'          => $request->sector_govt,
                'sector_edu'           => $request->sector_edu,
                'email'                => $request->email,
                'email_links'          => $request->email_links,
                'social'               => $request->social,
                'social_links'         => $request->social_links,
                'call'                 => $request->call,
                'call_links'           => $request->call_links,
                'press'                => $request->press,
                'press_links'          => $request->press_links,
                'presentation'         => $request->presentation,
                'presentation_links'   => $request->presentation_links,
                'boost'                => $request->boost,
                'boost_links'          => $request->boost_links,
                'blog'                 => $request->blog,
                'blog_links'           => $request->blog_links,
                'negotiation'          => $request->negotiation,
                'negotiation_links'    => $request->negotiation_links,
                'deal_closing'         => $request->deal_closing,
                'deal_closing_links'   => $request->deal_closing_links,
                'followup'             => $request->followup,
                'followup_links'       => $request->followup_links,
                'quote'                => $request->quote,
                'quote_links'          => $request->quote_links,
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
        $data['users']   = User::select('users.id', 'users.name')->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['products'] = Product::select('products.id', 'products.name')->get();
        $data['cmars']   = Cmar::find($id);
        return view('admin.pages.cmar.edit', $data);
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
                'marketing_manager_id.*' => 'nullable',
                'solution_id.*'          => 'nullable',
                'product_id.*'           => 'nullable',
                'year'                   => 'nullable',
                'quarter'                => 'nullable',
                'month'                  => 'nullable',
                'week'                   => 'nullable',
                'target'                 => 'nullable',
                'workorder'              => 'nullable',
                'revenue'                => 'nullable',
                'description'            => 'nullable',
                'sector_smb'             => 'nullable',
                'sector_epg'             => 'nullable',
                'sector_fmg'             => 'nullable',
                'sector_govt'            => 'nullable',
                'sector_edu'             => 'nullable',
                'email'                  => 'nullable',
                'email_links'            => 'nullable',
                'social'                 => 'nullable',
                'social_links'           => 'nullable',
                'call'                   => 'nullable',
                'call_links'             => 'nullable',
                'press'                  => 'nullable',
                'press_links'            => 'nullable',
                'presentation'           => 'nullable',
                'presentation_links'     => 'nullable',
                'boost'                  => 'nullable',
                'boost_links'            => 'nullable',
                'blog'                   => 'nullable',
                'blog_links'             => 'nullable',
                'negotiation'            => 'nullable',
                'negotiation_links'      => 'nullable',
                'deal_closing'           => 'nullable',
                'deal_closing_links'     => 'nullable',
                'followup'               => 'nullable',
                'followup_links'         => 'nullable',
                'quote'                  => 'nullable',
                'quote_links'            => 'nullable',
            ]
        );

        if ($validator->passes()) {
            Cmar::find($id)->update([
                'marketing_manager_id' => json_encode($request->marketing_manager_id),
                'solution_id'          => json_encode($request->solution_id),
                'product_id'           => json_encode($request->product_id),
                'year'                 => $request->year,
                'quarter'              => $request->quarter,
                'month'                => $request->month,
                'week'                 => $request->week,
                'target'               => $request->target,
                'workorder'            => $request->workorder,
                'revenue'              => $request->revenue,
                'description'          => $request->description,
                'sector_smb'           => $request->sector_smb,
                'sector_epg'           => $request->sector_epg,
                'sector_fmg'           => $request->sector_fmg,
                'sector_govt'          => $request->sector_govt,
                'sector_edu'           => $request->sector_edu,
                'email'                => $request->email,
                'email_links'          => $request->email_links,
                'social'               => $request->social,
                'social_links'         => $request->social_links,
                'call'                 => $request->call,
                'call_links'           => $request->call_links,
                'press'                => $request->press,
                'press_links'          => $request->press_links,
                'presentation'         => $request->presentation,
                'presentation_links'   => $request->presentation_links,
                'boost'                => $request->boost,
                'boost_links'          => $request->boost_links,
                'blog'                 => $request->blog,
                'blog_links'           => $request->blog_links,
                'negotiation'          => $request->negotiation,
                'negotiation_links'    => $request->negotiation_links,
                'deal_closing'         => $request->deal_closing,
                'deal_closing_links'   => $request->deal_closing_links,
                'followup'             => $request->followup,
                'followup_links'       => $request->followup_links,
                'quote'                => $request->quote,
                'quote_links'          => $request->quote_links,
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
        Cmar::find($id)->delete();
    }
}

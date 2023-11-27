<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\PortfolioPage;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class PortfolioPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['portfolioPages'] = PortfolioPage::latest()->get();
        return view('admin.pages.portfolioPage.all', $data);
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
        $validator = Validator::make(
            $request->all(),
            [
                'banner_title'         => 'nullable|string',
                'banner_short_desc'    => 'nullable|string',
                'banner_btn_name'      => 'nullable|string',
                'banner_btn_link'      => 'nullable|string',
                'choose_us_badge'      => 'nullable|string',
                'choose_us_title'      => 'nullable|string',
                'choose_us_short_desc' => 'nullable|string',
            ]
        );

        if ($validator->passes()) {
            PortfolioPage::create([
                'banner_title'         => $request->banner_title,
                'banner_short_desc'    => $request->banner_short_desc,
                'banner_btn_name'      => $request->banner_btn_name,
                'banner_btn_link'      => $request->banner_btn_link,
                'choose_us_badge'      => $request->choose_us_badge,
                'choose_us_title'      => $request->choose_us_title,
                'choose_us_short_desc' => $request->choose_us_short_desc,
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
        $data['portfolioPage'] = PortfolioPage::find($id);
        return view('admin.pages.portfolioPage.all', $data);
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
                'banner_title'         => 'nullable|string',
                'banner_short_desc'    => 'nullable|string',
                'banner_btn_name'      => 'nullable|string',
                'banner_btn_link'      => 'nullable|string',
                'choose_us_badge'      => 'nullable|string',
                'choose_us_title'      => 'nullable|string',
                'choose_us_short_desc' => 'nullable|string',
            ]
        );

        if ($validator->passes()) {
            PortfolioPage::find($id)->update([
                'banner_title'         => $request->banner_title,
                'banner_short_desc'    => $request->banner_short_desc,
                'banner_btn_name'      => $request->banner_btn_name,
                'banner_btn_link'      => $request->banner_btn_link,
                'choose_us_badge'      => $request->choose_us_badge,
                'choose_us_title'      => $request->choose_us_title,
                'choose_us_short_desc' => $request->choose_us_short_desc,
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
        PortfolioPage::find($id)->delete();
    }
}

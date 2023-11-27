<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Row;
use App\Models\Admin\Client;
use Illuminate\Http\Request;
use App\Models\Admin\Feature;
use App\Models\Admin\Industry;
use App\Models\Admin\Solution;
use App\Models\Admin\IndustryPage;
use App\Http\Controllers\Controller;
use App\Models\Admin\ClientStory;
use App\Models\Admin\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class IndustryPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['industryPages'] = IndustryPage::get();
        return view('admin.pages.industryPage.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['industries'] = Industry::select('industries.id', 'industries.title')->get();
        $data['rows'] = Row::whereNotNull('image')->select('rows.id', 'rows.title')->latest('id','DESC')->get();
        $data['row_with_cols'] = Row::whereNull('image')->select('rows.id', 'rows.title')->latest('id','DESC')->get();
        $data['clients'] = SolutionDetail::latest()->get();
        $data['clientstory'] = ClientStory::latest()->get();
        return view('admin.pages.industryPage.add', $data);
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
                'industry_id'     => 'required',
                'row_one_id'      => 'required',
                'row_three_id'    => 'required',
                'row_five_id'     => 'required',
                'client_story_id' => 'required',
            ],
        );

        if ($validator->passes()) {
            IndustryPage::create([
                'industry_id'             => $request->industry_id,
                'row_one_id'              => $request->row_one_id,
                'row_three_id'            => $request->row_three_id,
                'row_five_id'             => $request->row_five_id,
                'solution_one_id'         => $request->solution_one_id,
                'solution_two_id'         => $request->solution_two_id,
                'solution_three_id'       => $request->solution_three_id,
                'solution_four_id'        => $request->solution_four_id,
                'client_story_id'         => $request->client_story_id,
                'header'                  => $request->header,
                'btn_one_name'            => $request->btn_one_name,
                'btn_one_link'            => $request->btn_one_link,
                'row_four_title'          => $request->row_four_title,
                'row_four_header'         => $request->row_four_header,
                'row_four_col_one_title'  => $request->row_four_col_one_title,
                'row_four_col_one_header' => $request->row_four_col_one_header,
                'row_four_col_two_title'  => $request->row_four_col_two_title,
                'row_four_col_two_header' => $request->row_four_col_two_header,
                'footer_title'            => $request->footer_title,
                'footer_header'           => $request->footer_header,
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
        $data['industries'] = Industry::select('industries.id', 'industries.title')->get();
        $data['rows'] = Row::select('rows.id', 'rows.title')->get();
        // $data['solutions'] = Solution::select('solutions.id', 'solutions.title')->get();
        $data['clients'] = SolutionDetail::latest()->get();
        $data['clientstory'] = ClientStory::latest()->get();
        $data['industryPage'] = IndustryPage::findOrFail($id);
        return view('admin.pages.industryPage.edit', $data);
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
                'industry_id'     => 'required',
                'row_one_id'      => 'required',
                'row_three_id'    => 'required',
                'row_five_id'     => 'required',
                'client_story_id' => 'required',
            ],
        );

        if ($validator->passes()) {
            IndustryPage::findOrFail($id)->update([
                'industry_id'             => $request->industry_id,
                'row_one_id'              => $request->row_one_id,
                'row_three_id'            => $request->row_three_id,
                'row_five_id'             => $request->row_five_id,
                'solution_one_id'         => $request->solution_one_id,
                'solution_two_id'         => $request->solution_two_id,
                'solution_three_id'       => $request->solution_three_id,
                'solution_four_id'        => $request->solution_four_id,
                'client_story_id'         => $request->client_story_id,
                'header'                  => $request->header,
                'btn_one_name'            => $request->btn_one_name,
                'btn_one_link'            => $request->btn_one_link,
                'row_four_title'          => $request->row_four_title,
                'row_four_header'         => $request->row_four_header,
                'row_four_col_one_title'  => $request->row_four_col_one_title,
                'row_four_col_one_header' => $request->row_four_col_one_header,
                'row_four_col_two_title'  => $request->row_four_col_two_title,
                'row_four_col_two_header' => $request->row_four_col_two_header,
                'footer_title'            => $request->footer_title,
                'footer_header'           => $request->footer_header,
            ]);
            Toastr::success('Data Update Successfully.');
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
        IndustryPage::find($id)->delete();
    }
}

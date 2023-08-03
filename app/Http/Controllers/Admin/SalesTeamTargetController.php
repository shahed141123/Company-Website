<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Models\Admin\Product;
use App\Models\Client\Client;
use App\Models\Partner\Partner;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\SalesTeamTarget;
use Illuminate\Support\Facades\Validator;

class SalesTeamTargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['salesTeamTargets'] = SalesTeamTarget::get();
        return view('admin.pages.salesTeamTarget.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['country'] = Country::select('countries.id', 'countries.country_name')->get();
        $data['users'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        return view('admin.pages.salesTeamTarget.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = User::find($request->sales_man_id)->name;
        // dd($name);
        $validator = Validator::make(
            $request->all(),
            [
                'sales_man_id'         => 'nullable',
                'fiscal_year'          => 'nullable',
                'year_started'         => 'nullable',
                'year_target'          => 'nullable',
                'quarter_one_target'   => 'nullable',
                'quarter_two_target'   => 'nullable',
                'quarter_three_target' => 'nullable',
                'quarter_four_target'  => 'nullable',
            ],
        );
        if ($validator->passes()) {
            SalesTeamTarget::create([
                'name'                 => $name,
                'country_id'           => $request->country_id,
                'sales_man_id'         => $request->sales_man_id,
                'fiscal_year'          => $request->fiscal_year,
                'year_started'         => $request->year_started,
                'year_target'          => $request->year_target,
                'quarter_one_target'   => $request->quarter_one_target,
                'quarter_two_target'   => $request->quarter_two_target,
                'quarter_three_target' => $request->quarter_three_target,
                'quarter_four_target'  => $request->quarter_four_target,
            ]);
            Toastr::success('Data Insert Successfully');
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
        $data['salesTeamTarget'] = SalesTeamTarget::findOrfail($id);
        return view('admin.pages.salesTeamTarget.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['users'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        $data['salesTeamTarget'] = SalesTeamTarget::findOrfail($id);
        return view('admin.pages.salesTeamTarget.edit', $data);
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
                'sales_man_id'         => 'nullable',
                'fiscal_year'          => 'nullable',
                'year_started'         => 'nullable',
                'year_target'          => 'nullable',
                'quarter_one_target'   => 'nullable',
                'quarter_two_target'   => 'nullable',
                'quarter_three_target' => 'nullable',
                'quarter_four_target'  => 'nullable',
            ],
        );
        if ($validator->passes()) {
            SalesTeamTarget::find($id)->update([
                'sales_man_id'         => $request->sales_man_id,
                'fiscal_year'          => $request->fiscal_year,
                'year_started'         => $request->year_started,
                'year_target'          => $request->year_target,
                'quarter_one_target'   => $request->quarter_one_target,
                'quarter_two_target'   => $request->quarter_two_target,
                'quarter_three_target' => $request->quarter_three_target,
                'quarter_four_target'  => $request->quarter_four_target,
            ]);
            Toastr::success('Data Update Successfully');
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
        SalesTeamTarget::find($id)->delete();
    }
}

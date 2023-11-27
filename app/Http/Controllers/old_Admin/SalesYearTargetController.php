<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Http\Controllers\Controller;
use App\Models\Admin\SalesProfitLoss;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\SalesYearTarget;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class SalesYearTargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['salesYearTargets'] = SalesYearTarget::get();
        return view('admin.pages.salesYearTarget.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['country'] = Country::select('countries.id', 'countries.country_name')->get();
        return view('admin.pages.salesYearTarget.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'fiscal_year'  => 'required',
                'year_target'  => 'required',
                'year_started' => 'required',
            ],
        );
        if ($validator->passes()) {
            SalesYearTarget::create([
                'country_id'           => $request->country_id,
                'fiscal_year'          => $request->fiscal_year,
                'year_target'          => $request->year_target,
                'quarter_one_target'   => $request->quarter_one_target,
                'quarter_two_target'   => $request->quarter_two_target,
                'quarter_three_target' => $request->quarter_three_target,
                'quarter_four_target'  => $request->quarter_four_target,
                'year_started'         => $request->year_started,
                'january_target'       => $request->january_target,
                'february_target'      => $request->february_target,
                'march_target'         => $request->march_target,
                'april_target'         => $request->april_target,
                'may_target'           => $request->may_target,
                'june_target'          => $request->june_target,
                'july_target'          => $request->july_target,
                'august_target'        => $request->august_target,
                'september_target'     => $request->september_target,
                'october_target'       => $request->october_target,
                'november_target'      => $request->november_target,
                'december_target'      => $request->december_target,
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
        $data['salesYearTarget'] = SalesYearTarget::findOrfail($id);
        $data['country'] = Country::select('countries.id', 'countries.country_name')->get();
        return view('admin.pages.salesYearTarget.edit', $data);
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
                'fiscal_year'  => 'required',
                'year_target'  => 'required',
                'year_started' => 'required',
            ],
        );
        if ($validator->passes()) {
            SalesYearTarget::find($id)->update([
                'country_id'           => $request->country_id,
                'fiscal_year'          => $request->fiscal_year,
                'year_target'          => $request->year_target,
                'quarter_one_target'   => $request->quarter_one_target,
                'quarter_two_target'   => $request->quarter_two_target,
                'quarter_three_target' => $request->quarter_three_target,
                'quarter_four_target'  => $request->quarter_four_target,
                'year_started'         => $request->year_started,
                'january_target'       => $request->january_target,
                'february_target'      => $request->february_target,
                'march_target'         => $request->march_target,
                'april_target'         => $request->april_target,
                'may_target'           => $request->may_target,
                'june_target'          => $request->june_target,
                'july_target'          => $request->july_target,
                'august_target'        => $request->august_target,
                'september_target'     => $request->september_target,
                'october_target'       => $request->october_target,
                'november_target'      => $request->november_target,
                'december_target'      => $request->december_target,
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
        SalesYearTarget::find($id)->delete();
    }

    public function salesReportDashboard()
    {
        $data['salesYearTarget'] = SalesYearTarget::whereYear('created_at', date('Y'))->first();
        $data['sales_year'] = SalesProfitLoss::whereYear('created_at', date('Y'))->sum('sales_price');

        $data['sales_january'] = SalesProfitLoss::whereMonth('created_at', 1)->sum('sales_price');
        $data['sales_february'] = SalesProfitLoss::whereMonth('created_at', 2)->sum('sales_price');
        $data['sales_march'] = SalesProfitLoss::whereMonth('created_at', 3)->sum('sales_price');
        $data['sales_april'] = SalesProfitLoss::whereMonth('created_at', 4)->sum('sales_price');
        $data['sales_may'] = SalesProfitLoss::whereMonth('created_at', 5)->sum('sales_price');
        $data['sales_june'] = SalesProfitLoss::whereMonth('created_at', 6)->sum('sales_price');
        $data['sales_july'] = SalesProfitLoss::whereMonth('created_at', 7)->sum('sales_price');
        $data['sales_august'] = SalesProfitLoss::whereMonth('created_at', 8)->sum('sales_price');
        $data['sales_september'] = SalesProfitLoss::whereMonth('created_at', 9)->sum('sales_price');
        $data['sales_october'] = SalesProfitLoss::whereMonth('created_at', 10)->sum('sales_price');
        $data['sales_november'] = SalesProfitLoss::whereMonth('created_at', 11)->sum('sales_price');
        $data['sales_december'] = SalesProfitLoss::whereMonth('created_at', 12)->sum('sales_price');

        $data['salesman'] = User::where('role', 'sales')->count();

        return view('admin.pages.SalesReport.dashboard',$data);
    }
}

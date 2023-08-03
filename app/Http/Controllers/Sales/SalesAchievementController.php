<?php

namespace App\Http\Controllers\Sales;

use Helper;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Admin\DealSas;
use App\Models\Admin\EffortRating;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\DealTypeSetting;
use App\Models\Admin\SalesAchievement;
use App\Models\Admin\SalesTeamTarget;
use App\Models\Admin\SalesYearTarget;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class SalesAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sales_year_target']  = SalesYearTarget::where('fiscal_year' , date('Y'))->first();
        $data['sales_team_targets'] = SalesTeamTarget::where('fiscal_year' , date('Y'))->get();
        $data['sales_achievement']  = SalesAchievement::where('fiscal_year' , date('Y'))->get();

        if ($data['sales_achievement']){
            $data['q1_quoted_amount'] = SalesAchievement::where('quarter', 'q1')->sum('total_quoted_amount');
            $data['q2_quoted_amount'] = SalesAchievement::where('quarter', 'q2')->sum('total_quoted_amount');
            $data['q3_quoted_amount'] = SalesAchievement::where('quarter', 'q3')->sum('total_quoted_amount');
            $data['q4_quoted_amount'] = SalesAchievement::where('quarter', 'q4')->sum('total_quoted_amount');
        }else{
            $data['q1_quoted_amount'] = 0;
            $data['q2_quoted_amount'] = 0;
            $data['q3_quoted_amount'] = 0;
            $data['q4_quoted_amount'] = 0;
        }
        $data['total_quoted_amount'] = $data['q1_quoted_amount']+$data['q2_quoted_amount']+$data['q3_quoted_amount']+$data['q4_quoted_amount'];
        $data['sales_managers'] = User::where('role' , 'sales')->get();
        //dd($data['sales_team_targets']);
        return view('admin.pages.sales-achievement.summary',$data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['rfqs'] = Rfq::where('rfq_type' , 'deal')->orderBy('id', 'DESC')->get();
        return view('admin.pages.sales-achievement.all',$data);
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
        $validator = Validator::make($request->all(), [
            'rfq_id'          => 'required',
            'deal_type'       => 'required',
            'deal_type_value' => 'required',
            'month'           => 'required',
            'quarter'         => 'required',
        ],

    );


    if ($validator->passes()) {

             SalesAchievement::create([


                'rfq_id'                     => $request->rfq_id,
                'deal_type'                  => $request->deal_type,
                'deal_type_value'            => $request->deal_type_value,
                'month'                      => $request->month,
                'quarter'                    => $request->quarter ,
                'fiscal_year'                => $request->fiscal_year ,
                'sales_man_id_L1'            => $request->sales_man_id_L1  ,
                'total_quoted_amount'        => $request->total_quoted_amount  ,
                'shared_quote_percentage_L1' => $request->shared_quote_percentage_L1,
                'shared_quote_amount_L1'     => $request->shared_quote_amount_L1,
                'closed_ratio_L1'            => $request->closed_ratio_L1,
                'profit_margin_L1'           => $request->profit_margin_L1,
                'effort_L1'                  => $request->effort_L1,
                'perform_look_L1'            => $request->perform_look_L1,
                'rating_L1'                  => $request->rating_L1,
                'incentive_percentage_L1'    => $request->incentive_percentage_L1,
                'incentive_amount_L1'        => $request->incentive_amount_L1  ,
                'sales_man_id_T1'            => $request->sales_man_id_T1,
                'shared_quote_percentage_T1' => $request->shared_quote_percentage_T1,
                'shared_quote_amount_T1'     => $request->shared_quote_amount_T1,
                'closed_ratio_T1'            => $request->closed_ratio_T1,
                'profit_margin_T1'           => $request->profit_margin_T1,
                'effort_T1'                  => $request->effort_T1,
                'perform_look_T1'            => $request->perform_look_T1,
                'rating_T1'                  => $request->rating_T1,
                'incentive_percentage_T1'    => $request->incentive_percentage_T1,
                'incentive_amount_T1'        => $request->incentive_amount_T1,
                'sales_man_id_T2'            => $request->sales_man_id_T2,
                'shared_quote_percentage_T2' => $request->shared_quote_percentage_T2,
                'shared_quote_amount_T2'     => $request->shared_quote_amount_T2,
                'closed_ratio_T2'            => $request->closed_ratio_T2,
                'profit_margin_T2'           => $request->profit_margin_T2,
                'effort_T2'                  => $request->effort_T2,
                'perform_look_T2'            => $request->perform_look_T2,
                'rating_T2'                  => $request->rating_T2,
                'incentive_percentage_T2'    => $request->incentive_percentage_T2,
                'incentive_amount_T2'        => $request->incentive_amount_T2,

            ]);



                Toastr::success('Data Inserted Successfully');
            } else {

                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    Toastr::error($message, 'Failed', ['timeOut' => 30000]);
                }
            }
            return redirect()->route('sales-achievement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['rfq'] = Rfq::where('rfq_code', $id)->first();
        if ($data['rfq']->deal_type == 'new') {
            $data['deal_type_value'] = DealTypeSetting::where('deal_type', 'new')->value('value');
        } else {
            $data['deal_type_value'] = DealTypeSetting::where('deal_type', 'renew')->value('value');
        }

        $data['products'] = DealSas::where('rfq_id', $data['rfq']->id)->get();
        $data['efforts'] = EffortRating::latest()->get();
        $data['sourcing'] = DealSas::where('rfq_code' , $data['rfq']->rfq_code)->first();
        return view('admin.pages.sales-achievement.add',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




}

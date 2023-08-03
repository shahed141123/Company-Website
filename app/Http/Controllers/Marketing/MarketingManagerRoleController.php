<?php

namespace App\Http\Controllers\Marketing;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Marketing\MarketingManagerRole;

class MarketingManagerRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['marketingManagerRoles'] = MarketingManagerRole::latest()->get();
        return view('admin.pages.marketingManagerRole.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::where('role','sales')->select('users.id','users.name')->get();
        return view('admin.pages.marketingManagerRole.add', $data);
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
                'marketing_manager_id' => 'required',
                'dmar'                 => 'nullable',
                'cmar'                 => 'nullable',
                'emar'                 => 'nullable',
            ],
        );

        if ($validator->passes()) {
            MarketingManagerRole::create([
                'marketing_manager_id' => $request->marketing_manager_id,
                'dmar'                 => $request->dmar,
                'cmar'                 => $request->cmar,
                'emar'                 => $request->emar,
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
        $data['users'] = User::where('role','sales')->select('users.id','users.name')->get();
        $data['marketingManagerRole'] = MarketingManagerRole::find($id);
        return view('admin.pages.marketingManagerRole.edit', $data);
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
                'marketing_manager_id' => 'required',
                'dmar'                 => 'nullable',
                'cmar'                 => 'nullable',
                'emar'                 => 'nullable',
            ],
        );

        if ($validator->passes()) {
            MarketingManagerRole::find($id)->update([
                'marketing_manager_id' => $request->marketing_manager_id,
                'dmar'                 => $request->dmar,
                'cmar'                 => $request->cmar,
                'emar'                 => $request->emar,
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MarketingManagerRole::find($id)->delete();
    }
}

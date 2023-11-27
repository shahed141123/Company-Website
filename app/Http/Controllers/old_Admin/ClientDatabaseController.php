<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Client;
use Illuminate\Http\Request;
use App\Models\Admin\Industry;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class ClientDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['clientDatabases'] = Client::latest()->get();
        return view('admin.pages.clientDatabase.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['industrys'] = Industry::select('industries.id', 'industries.title')->get();
        return view('admin.pages.clientDatabase.add', $data);
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
                'client_type'    => 'nullable',
                'sector'         => 'nullable',
                'sub_sector'     => 'nullable',
                'area'           => 'nullable',
                'contact_person' => 'nullable',
                'designation'    => 'nullable',
                'department'     => 'nullable',
                'official_phone' => 'nullable',
                'client_status'  => 'nullable',
                'tier'           => 'nullable',
                'comments'       => 'nullable',
            ],
        );

        if ($validator->passes()) {
            Client::create([
                'client_type'    => 'corporate',
                'sector'         => $request->sector,
                'sub_sector'     => $request->sub_sector,
                'company_name'   => $request->company_name,
                'address'        => $request->address,
                'area'           => $request->area,
                'contact_person' => $request->contact_person,
                'designation'    => $request->designation,
                'department'     => $request->department,
                'official_phone' => $request->official_phone,
                'phone'          => $request->phone,
                'email'          => $request->email,
                'client_status'  => $request->client_status,
                'tier'           => $request->tier,
                'comments'       => $request->comments,

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
        $data['clientDatabase'] = Client::latest()->find($id);
        $data['industrys'] = Industry::select('industries.id', 'industries.title')->get();
        return view('admin.pages.clientDatabase.edit', $data);
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
                'client_type'    => 'nullable',
                'sector'         => 'nullable',
                'sub_sector'     => 'nullable',
                'area'           => 'nullable',
                'contact_person' => 'nullable',
                'designation'    => 'nullable',
                'department'     => 'nullable',
                'official_phone' => 'nullable',
                'client_status'  => 'nullable',
                'tier'           => 'nullable',
                'comments'       => 'nullable',
            ],
        );

        if ($validator->passes()) {
            Client::find($id)->update([
                'client_type'    => 'corporate',
                'sector'         => $request->sector,
                'sub_sector'     => $request->sub_sector,
                'company_name'   => $request->company_name,
                'address'        => $request->address,
                'area'           => $request->area,
                'contact_person' => $request->contact_person,
                'designation'    => $request->designation,
                'department'     => $request->department,
                'official_phone' => $request->official_phone,
                'phone'          => $request->phone,
                'email'          => $request->email,
                'client_status'  => $request->client_status,
                'tier'           => $request->tier,
                'comments'       => $request->comments,

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
        Client::find($id)->delete();
    }
}

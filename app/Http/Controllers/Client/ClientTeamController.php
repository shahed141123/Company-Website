<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Client\Client;
use App\Models\Client\ClientTeam;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class ClientTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'clients'     => Client::latest()->get(['id', 'name']),
            'clientTeams' => ClientTeam::latest()->get(),
        ];

        return view('admin.pages.clientTeam.all', $data);
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
                'client_id' => 'required|exists:clients,id',
                'name' => 'nullable|string|max:225',
                'email' => 'nullable|email|max:225',
                'designation' => 'nullable|string|max:225',
                'company_name' => 'nullable|string|max:225',
            ],
            [
                'client_id.required' => 'The client ID is required.',
                'client_id.exists' => 'The selected client is invalid.',
                'name.max' => 'The name field cannot exceed 225 characters.',
                'email.email' => 'Please enter a valid email address.',
                'email.max' => 'The email field cannot exceed 225 characters.',
                'designation.max' => 'The designation field cannot exceed 225 characters.',
                'company_name.max' => 'The company name field cannot exceed 225 characters.',
            ]
        );

        if ($validator->passes()) {
            ClientTeam::create([
                'client_id'    => $request->client_id,
                'name'         => $request->name,
                'email'        => $request->email,
                'designation'  => $request->designation,
                'company_name' => $request->company_name,
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
        $validator = Validator::make(
            $request->all(),
            [
                'client_id' => 'required|exists:clients,id',
                'name' => 'nullable|string|max:225',
                'email' => 'nullable|email|max:225',
                'designation' => 'nullable|string|max:225',
                'company_name' => 'nullable|string|max:225',
            ],
            [
                'client_id.required' => 'The client ID is required.',
                'client_id.exists' => 'The selected client is invalid.',
                'name.max' => 'The name field cannot exceed 225 characters.',
                'email.email' => 'Please enter a valid email address.',
                'email.max' => 'The email field cannot exceed 225 characters.',
                'designation.max' => 'The designation field cannot exceed 225 characters.',
                'company_name.max' => 'The company name field cannot exceed 225 characters.',
            ]
        );

        if ($validator->passes()) {
            ClientTeam::find($id)->update([
                'client_id'    => $request->client_id,
                'name'         => $request->name,
                'email'        => $request->email,
                'designation'  => $request->designation,
                'company_name' => $request->company_name,
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClientTeam::find($id)->delete();
    }
}

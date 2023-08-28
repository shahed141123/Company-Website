<?php

namespace App\Http\Controllers\Admin;

use App\Rules\Recaptcha;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contacts'] = Contact::where('type', '=', 'contact')->orderBy('id', 'DESC')->get();
        return view('admin.pages.contact.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.contact.add');
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
                'name' => 'required',
                'email' => 'required',
                'g-recaptcha-response' => ['required', new Recaptcha]
            ],
            [
                'required' => 'The :attribute field is required',
            ],
        );

        if ($request->type == 'contact') {
            $today = date('dmy');
            $lastCode = Contact::where('code', 'like', 'MSG-' . $today . '%')->where('type', 'contact')->orderBy('id', 'desc')->first();

            if ($lastCode) {
                $lastNumber = (int) explode('-', $lastCode->code)[2];
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1;
            }
            $code = 'MSG-' . $today . '-' . $newNumber;
        } else {
            $today = date('dmy');
            $lastCode = Contact::where('code', 'like', 'SPRT-' . $today . '%')->where('type', 'support')->orderBy('id', 'desc')->first();

            if ($lastCode) {
                $lastNumber = (int) explode('-', $lastCode->code)[2];
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1;
            }
            $code = 'SPRT-' . $today . '-' . $newNumber;
        }
        // dd($code);
        if ($validator->passes()) {
            Contact::create([
                'code'       => $code,
                'name'       => $request->name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'company'    => $request->company,
                'address'    => $request->address,
                'message'    => $request->message,
                'ip_address' => request()->ip(),
                'msg_type'   => $request->msg_type,
                'country'    => $request->country,
                'status'     => 'pending',
                'type'       => $request->type,
            ]);
            Toastr::success('Thank You. We have received your message. We will contact with you very soon.');
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
        $data['contact'] = Contact::find($id);
        return view('admin.pages.contact.edit', $data);
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
                'name'  => 'required|max: 70',
                'phone' => 'required|max: 70',
                'email' => 'required|max: 70',
            ],
        );

        if ($validator->passes()) {
            Contact::find($id)->update([
                'name'       => $request->name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'company'    => $request->company,
                'address'    => $request->address,
                'message'    => $request->message,
                'ip_address' => request()->ip(),
                'msg_type'   => $request->msg_type,
                'country'    => $request->country,
                'status'     => 'pending',
                'type'       => $request->type,
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
        Contact::find($id)->delete();
    }

    public function Support()
    {
        $data['contacts'] = Contact::where('type', '=', 'support')->orderBy('id', 'DESC')->get();
        return view('admin.pages.contact.support', $data);
    }
}

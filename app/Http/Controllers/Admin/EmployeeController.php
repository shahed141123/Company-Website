<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\EmployeeAdd as MailEmployeeAdd;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['id'] = Auth::user()->id;
        $data['countries'] = Country::orderBy('country_name', 'ASC')->get();
        // dd($user_emails);
        $data['employees'] = User::all();
        return view('admin.pages.employee.all', $data);
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
        $employee_name = $request->name;
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required',
                'role'      => 'required',
                'department' => 'required',
                'email'     => 'required|unique:users',
                'photo'     => 'image|mimes:png,jpg,jpeg|max:5000',
                // 'password'  => 'required|confirmed',
            ],
            [
                'photo'     => [
                    'mimes' => 'The :attribute must be a file of type: png - jpeg - jpg',
                    'max'   => 'The image field must be smaller than 5 MB.',
                ],
                'image'     => 'The file must be an image.',
                'unique'    => 'The Email has already been taken.',
                // 'confirmed' => 'The Confirmation Password is incorrect.',
                'mimes'     => 'The :attribute must be a file of type: PNG - JPEG - JPG',
                'required'  => 'The :attribute must be required',
            ]
        );
        if ($request->photo) {
            $destination = 'upload/Profile/Admin/' . $request->photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $path = public_path('upload/Profile/Admin/' . $name_gen);
            Image::make($image)->resize(176, 176)->save($path);
            $data['photo'] = $name_gen;
        } else {
            $data['photo'] = "";
        }
        if ($validator->passes()) {
            $employee = User::create([
                'name'        => $request->name,
                'email'       => $request->email,
                'phone'       => $request->phone,
                'designation' => $request->designation,
                'country'     => $request->country,
                'address'     => $request->address,
                'postal'      => $request->postal,
                'status'      => 'inactive',
                'role'        => $request->role,
                'department'  => json_encode($request->department),
                'photo'       => $data['photo'],
                'password'    => Hash::make($request->password),
            ]);



            $name = Auth::user()->name;
            $users = User::where(function ($query) {
                $query->whereJsonContains('department', 'admin')
                    ->orwhereJsonContains('department', 'business')
                    ->orwhereJsonContains('department', 'logistics');
            })->where('role', 'admin')->get();
            // $slug = $data['slug'];
            $user_emails = User::where(function ($query) {
                $query->whereJsonContains('department', 'admin');
            })->where('role', 'admin')->pluck('email')->toArray();
            //dd($user_emails);

            //Notification::send($users, new EmployeeAdd($name , $employee_name));
            if (!empty($user_emails)) {

            $data = [

                'added_by'    => $name,
                'name'        => $employee_name,
                'designation' => $request->designation,
                'department'  => json_encode($request->department),
                'email'       => $request->email,
                'photo'       => $data['photo'],


            ];
            $mail = Mail::to($user_emails);
            if ($mail) {
                $mail->send(new MailEmployeeAdd($data));



                Toastr::success('Employee has registered Successfully');
                return redirect()->back();
            } else {
                Toastr::error('Email Failed to send', ['timeOut' => 30000]);
                return redirect()->back();
            }
               
            }
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }
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
        $employee = User::findOrFail($id);

        if ($request->photo) {
            $destination = 'upload/Profile/Admin/' . $employee->photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $path = public_path('upload/Profile/Admin/' . $name_gen);
            Image::make($image)->resize(176, 176)->save($path);
            $data['photo'] = $name_gen;
        } else {
            $data['photo'] = $employee->photo;
        }
        $employee->update([
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'designation' => $request->designation,
            'country'     => $request->country,
            'address'     => $request->address,
            'postal'      => $request->postal,
            'role'        => $request->role,
            'department'  => json_encode($request->department),
            'photo'       => $data['photo'],
            'password'    => Hash::make($request->password),
        ]);

        $employee->roles()->detach();
        if ($request->roles) {
            $employee->assignRole($request->roles);
        }

        Toastr::success('Employee Information Updated Successfully');


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
        $user = User::findOrFail($id);
        $destination = 'upload/Profile/Admin/' . $user->photo;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        if (!is_null($user)) {
            $user->delete();
        }
        $user->delete();
    }


}

<?php

namespace App\Http\Controllers\Sales;

use Image;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Notifications\SalesManagerAdd;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class SalesAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['roles'] = Role::all();
        $data['countries'] = Country::orderBy('country_name' , 'ASC')->get();
        $data['salesmans'] = User::where('role' , 'sales')->orderBy('id','DESC')->get();
        return view('admin.pages.SalesAccount.all',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::all();
        $data['countries'] = Country::orderBy('country_name' , 'ASC')->get();
        return view('admin.pages.SalesAccount.add',$data);
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
        $user = User::all();
        $salesmanager_name = $request->name;
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required',
                'email'    => 'required|unique:users',
                'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                'password' => 'required|confirmed',
            ],
            [
                'image'   => [
                    'max' => 'The image field must be smaller than 4 MB.',
                ],
                'image'   => 'The file must be an image.',
                'unique'    => 'The Email has already been taken.',
                'confirmed' => 'The Confirmation Password is incorrect.',
                'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
            ]
        );
        if ($request->photo)
                {
                    $destination = 'upload/Profile/Admin/'.$request->photo;
                    if (File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $image = $request->file('photo');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    $path = public_path('upload/Profile/Admin/'.$name_gen);
                    Image::make($image)->resize(176,176)->save($path);
                    $data['photo'] = $name_gen;
                }
        else{
            $data['photo'] ="";
        }
        if ($validator->passes()) {
            $salesmanager = User::create([
                'name'        => $request->name,
                'email'       => $request->email,
                'phone'       => $request->phone,
                'designation' => $request->designation,
                'country'     => $request->country,
                'address'     => $request->address,
                'postal'      => $request->postal,
                'status'      => 'inactive',
                'role'        => 'sales',
                'photo'       => $data['photo'],
                'password'    => Hash::make($request->password),
            ]);

            // if ($request->roles) {
            //     $user->assignRole($request->roles);
            // }

            $name = Auth::user()->name;

            Notification::send($user, new SalesManagerAdd($name , $salesmanager_name));
            Toastr::success('Sales Manager have registered Successfully');
            return redirect()->route('sales-account.index');
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
        $data['countries'] = Country::orderBy('country_name' , 'ASC')->get();
        $data['user'] = User::findOrFail($id);
        $data['roles'] = Role::all();
        return view('admin.pages.SalesAccount.edit',$data);
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
        $user = User::findOrFail($id);
        $data = $request->all();
        //dd($data);
        $status = $user->fill($data)->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        Toastr::success('Sales Manager Account Updated Successfully');


        return redirect()->route('sales-account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = User::find($id);


        //image
        $destination = 'upload/Profile/Admin/'.$client->photo;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $client->delete();
    }

    public function SalesStatus(Request $request)
    {

        //dd($request->id);
        if ($request->mode == 'true') {
            DB::table('users')->where('id', $request->id)->update(['status' => 'inactive']);
        } else {


            DB::table('users')->where('id', $request->id)->update(['status' => 'active']);
        }
        return response()->json(['msg' => 'Successfully Updated Status', 'status' => true]);
    }

    public function assignSalesManagerRole(Request $request, $id)
    {
        //dd($request->all());
        $user = User::find($id);
        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        Toastr::success('Roles Have Successfully Updated');
        return redirect()->back();
    }
}

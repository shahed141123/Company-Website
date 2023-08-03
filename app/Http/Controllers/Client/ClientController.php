<?php

namespace App\Http\Controllers\Client;

use Image;
use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Client\Client;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Order;
use App\Notifications\ClientRegister;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class ClientController extends Controller
{

    public function ClientLogin()
    {
        if (Auth::guard('client')->check()) {
            $data['orders'] = Order::where('client_id', Auth::guard('client')->user()->id)->get();
            // $data['deals'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'deal')->get();
            $data['deals'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->get();
            $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'rfq')->get();
            return redirect()->route('client.dashboard', $data);
        } else {
            return view('client.auth.login');
        }
    } // End Mehtod

    public function clientLoginStore(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|max:70',
                'password' => 'required|max:70',
            ],
        );

        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            //dd($credentials);
            if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                //dd($credentials);
                Toastr::success('You have Successfully logged in.');
                return redirect()->route('client.dashboard');
                //
            } else {
                Toastr::error('Login details are not valid');
                return redirect("client/login");
            }
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect("client/login");
        }
    }

    public function clientRegisterStore(Request $request)
    {
        //dd($request->all());
        $user = User::where('role', 'admin')->get();

        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required',
                'email'    => 'required|unique:clients',
                'password' => 'required|confirmed',
            ],
            [
                'unique' => 'This Email ID has already been taken.',
            ],

        );
        if ($validator->passes()) {
            $client = Client::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'status'   => 'inactive',
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($client));
            Auth::guard('client')->login($client);
            Notification::send($user, new ClientRegister($request->name));
            Toastr::success('You have registered Successfully');
            return redirect()->route('client.dashboard');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect('client/login');
        }
    }

    public function ClientDashboard()
    {

        $data['client'] = Client::findorFail(Auth::guard('client')->user()->id);
        // dd($data['client']);
        $data['orders'] = Order::where('client_id', Auth::guard('client')->user()->id)->get();
        $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'deal')->get();

        return view('client.pages.dashboard.index', $data);
    }

    public function ClientProfile()
    {
        if (Auth::guard('client')->user()->id) {
            $data['data'] = Client::where('id', Auth::guard('client')->user()->id)->first();
            return view('client.pages.profile.profile', $data);
        } else {
            Toastr::error('Login first.');
            return redirect()->back();
        }
    }

    public function ClientTrack()
    {
        return view('client.pages.track');
    } // End Mehtod

    // public function ClientProfileUpdate()
    // {

    //     if (Auth::guard('client')->user()->id) {
    //         $data = Client::where('id', Auth::guard('client')->user()->id)->first();
    //         return view('client.pages.profile_update', compact('data'));
    //     } else {
    //         Toastr::error('Login first.');
    //         return redirect()->back();
    //     }
    // }

    public function ClientProfileStore(Request $request)
    {
        $data = $request->all();

        $check = Client::where('email', $data['email'])->first();

        if ($check) {
            $validator = Validator::make(

                $request->all(),
                //dd($request->all()),
                [
                    'name'    => 'required',
                    //'phone'   => 'numeric|digits:11',
                    'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 4 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    'name'    => 'required|',
                    //'phone'   => 'numeric|digits:11',
                    'email'   => 'required|email|unique:users,email',
                    'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 4 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        }



        if ($validator->passes()) {
            $id = Auth::guard('client')->user()->id;
            $profile = Client::find($id);


            //$data = $request->all();

            if (!empty($request->photo)) {
                $destination = 'upload/Profile/user/' . $profile->photo;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $image = $request->file('photo');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $path = public_path('upload/Profile/user/' . $name_gen);
                Image::make($image)->resize(176, 176)->save($path);
                $data['photo'] = $name_gen;
            } else {
                $data['photo'] = $profile->photo;
            }
            $employee = $profile->update([
                'username'    => $request->username,
                'name'        => $request->name,
                'phone'       => $request->phone,
                'country'     => $request->city,
                'address'     => $request->address,
                'postal'      => $request->postal,
                'photo'       => $data['photo'],
            ]);
            Toastr::success('Your Profile Updated Successfully');
            return redirect()->back();
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }
    } // End Mehtod

    public function ClientChangePassword()
    {
        return view('client.pages.profile.change_password');
    } // End Mehtod


    public function ClientUpdatePassword(Request $request)
    {
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, Auth::guard('client')->user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password
        Client::whereId(Auth::guard('client')->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        Toastr::success('Password Changed Successfully');
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/client/login');
    } // End Mehtod

    public function ClientProfileUpdate(Request $request , $id)
    {


        $check = Client::where('id', $id)->first();

        if ($check) {
            $validator = Validator::make(

                $request->all(),
                //dd($request->all()),
                [
                    'name'    => 'required',
                    //'phone'   => 'numeric|digits:11',
                    'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 4 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    'name'    => 'required|',
                    //'phone'   => 'numeric|digits:11',
                    'email'   => 'required|email|unique:users,email',
                    'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 4 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        }



        if ($validator->passes()) {
            $profile = Client::find($id);


            //$data = $request->all();

            if (!empty($request->photo)) {
                $destination = 'upload/Profile/user/' . $profile->photo;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $image = $request->file('photo');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $path = public_path('upload/Profile/user/' . $name_gen);
                Image::make($image)->resize(176, 176)->save($path);
                $data['photo'] = $name_gen;
            } else {
                $data['photo'] = $profile->photo;
            }
            $profile->update([
                'username'    => $request->username,
                'name'        => $request->name,
                'phone'       => $request->phone,
                'city'        => $request->city,
                'address'     => $request->address,
                'postal'      => $request->postal,
                'photo'       => $data['photo'],
            ]);
            Toastr::success('Your Profile Updated Successfully');
            return redirect()->back();
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }
    } // End Mehtod



    public function ClientDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/client/login');
    } // End Mehtod


    public function ClientOrders()
    {

        $data['orders'] = Order::where('client_id', Auth::guard('client')->user()->id)->get();
        return view('client.pages.order.user_order', $data);
    }


    public function ClientDeals()
    {

        $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'deal')->get();
        return view('client.pages.deal.index', $data);
    }
    public function ClientRfq()
    {

        $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'rfq')->get();
        return view('client.pages.rfq.index', $data);
    }

    public function rfqProductIndex()
    {
        $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('status', 'quoted')->get();
        return view('client.pages.rfq.index', $data);
    }
}

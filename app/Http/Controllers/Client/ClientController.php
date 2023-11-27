<?php

namespace App\Http\Controllers\Client;

use Image;
use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Client\Client;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Client\CaseAttachment;
use App\Models\Client\ClientSupport;
use App\Models\Client\ClientSupportMessage;
use App\Models\Client\ClientTeam;
use App\Models\Client\Project;
use App\Models\Client\ProjectPhase;
use App\Models\Client\SupportCase;
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
                'name'                     => $request->name,
                'username'                 => $request->username,
                'email'                    => $request->email,
                'client_id'                => $request->client_id,
                'about'                    => $request->about,
                'photo'                    => $request->photo,
                'support_tier'             => $request->support_tier,
                'support_tier_description' => $request->support_tier_description,
                'phone'                    => $request->phone,
                'address'                  => $request->address,
                'city'                     => $request->city,
                'country'                  => $request->country,
                'postal'                   => $request->postal,
                'last_seen'                => $request->last_seen,
                'company_name'             => $request->company_name,
                'status'                   => (!empty($request->status) ? $request->status : 'inactive'),
                'password'                 => Hash::make($request->password),
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
                'username' => $request->username,
                'name'     => $request->name,
                'phone'    => $request->phone,
                'city'     => $request->city,
                'country'  => $request->country,
                'address'  => $request->address,
                'postal'   => $request->postal,
                'photo'    => $data['photo'],
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

    public function ClientProfileUpdate(Request $request, $id)
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

    public function clientDashboard()
    {
        $clientId = json_encode(Auth::guard('client')->user()->id);

        $data = [
            'projects' => Project::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'client' => Auth::guard('client')->user(),
            'orders' => Order::where('client_id', $clientId)->get(),
            'rfqs' => Rfq::where('client_id', $clientId)
                ->where('rfq_type', 'deal')
                ->get(),
        ];
        // dd($data['projects']);

        return view('frontend.pages.client.dashboard', $data);
    }


    public function ClientProfile()
    {

        if (Auth::guard('client')->user()->id) {

            $data['data'] = Client::where('id', Auth::guard('client')->user()->id)->first();
            $requiredFields = [
                'name', 'username', 'phone', 'email', 'about', 'company_name', 'country', 'address', 'city', 'postal', 'photo',
            ];

            $completedFields = 0;

            foreach ($requiredFields as $field) {
                if (!empty($data['data']->$field)) {
                    $completedFields++;
                }
            }

            $data['completionPercentage'] = (round(($completedFields / count($requiredFields)) * 100));
            // dd($data['completionPercentage']);

            $data['teams'] = ClientTeam::where('client_id', Auth::guard('client')->user()->id)->get();
            return view('frontend.pages.client.profile', $data);
        } else {
            Toastr::error('Login first.');
            return redirect()->back();
        }
    }

    public function ClientTrack()
    {
        return view('client.pages.track');
    } // End Mehtod

    public function ClientOrders()
    {

        $data['orders'] = Order::where('client_id', Auth::guard('client')->user()->id)->get();
        // return view('client.pages.order.user_order', $data);
        return view('frontend.pages.client.profile', $data);
    }


    public function ClientDeals()
    {

        $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'deal')->get();
        return view('client.pages.deal.index', $data);
    }
    public function projectOverview()
    {
        $clientId = json_encode(Auth::guard('client')->user()->id);

        $data = [
            'projects' => Project::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'supports' => ClientSupport::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'cases' => SupportCase::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),
            'latest_case' => SupportCase::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->first(),
        ];

        return view('frontend.pages.client.project_overview', $data);
    }

    public function clientProject()
    {
        $clientId = json_encode(Auth::guard('client')->user()->id);
        $data = [
            'projects' => Project::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'supports' => ClientSupport::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'cases' => SupportCase::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),
        ];
        return view('frontend.pages.client.project', $data);
    }
    public function clientSupport()
    {
        $clientId = json_encode(Auth::guard('client')->user()->id);
        $data = [
            'projects' => Project::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'supports' => ClientSupport::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'cases' => SupportCase::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),
        ];
        return view('frontend.pages.client.support', $data);
    }
    public function clientCase()
    {
        $clientId = json_encode(Auth::guard('client')->user()->id);
        $data = [
            'projects' => Project::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'supports' => ClientSupport::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),

            'cases' => SupportCase::where('client_id', $clientId)
                ->orWhereJsonContains('team_id', $clientId)
                ->latest('id')
                ->get(),
        ];
        return view('frontend.pages.client.support_case', $data);
    }


    // public function projectDetails($id)
    // {
    //     $data['user'] = Auth::user();
    //     // Get all clients
    //     $data['clients'] = Client::all();
    //     $data['project'] = Project::where('slug', $id)->first();
    //     $data['phases'] = ProjectPhase::where('project_id', $data['project']->id)->latest('id')->get();
    //     $data['cases'] = SupportCase::where('project_id', $data['project']->id)->latest('id')->get();
    //     $data['supports'] = ClientSupport::with('cases')->where('project_id', $data['project']->id)->latest('id')->get();
    //     return view('frontend.pages.client.project_details', $data);
    // }

    // public function supportDetails($id)
    // {
    //     $data['user'] = Auth::user();
    //     // Get all clients
    //     $data['clients'] = Client::all();
    //     $data['support'] = ClientSupport::with('cases')->where('support_id', $id)->latest('id')->first();
    //     $data['project'] = Project::where('id', $data['support']->project_id)->first();
    //     $data['cases'] = SupportCase::where('project_id', $data['project']->id)->latest('id')->get();
    //     $data['supports'] = ClientSupport::with('cases')->where('project_id', $data['project']->id)->latest('id')->get();
    //     return view('frontend.pages.client.support_details', $data);
    // }
    // public function supportCase($id)
    // {
    //     $data['user'] = Auth::user();
    //     $user = $data['user'];
    //     // Get all clients
    //     $data['clients'] = Client::all();
    //     $data['case'] = SupportCase::where('code', $id)->first();
    //     // Fetch messages for the authenticated user
    //     $data['messages'] = ClientSupportMessage::where(function ($query) use ($user) {
    //         $query->where('sender_id', $user->id)->orWhere('receiver_id', $user->id);
    //     })->orderBy('created_at')->get();
    //     return view('frontend.pages.client.support_message', $data);
    // }
    public function projectDetails($id)
    {
        $data['project'] = Project::where('slug', $id)->firstOrFail();
        $data['supports'] = ClientSupport::with('cases')->where('project_id', $data['project']->id)->latest('id')->get();
        // $project = Project::with(['phases', 'cases', 'supports.cases'])->where('slug', $id)->firstOrFail();

        return view('frontend.pages.client.project_details', $data);
    }

    public function supportDetails($id)
    {
        $data = [
            'support' => ClientSupport::with(['cases', 'project'])->where('support_id', $id)->latest('id')->firstOrFail(),
        ];
        // $support = ClientSupport::with(['cases', 'project'])->where('support_id', $id)->latest('id')->firstOrFail();

        return view('frontend.pages.client.support_details', $data);
    }

    public function supportCase($id)
    {
        $user = Auth::guard('client')->user();
        $teams = ClientTeam::where('client_id', Auth::guard('client')->user()->id)->get();
        $case = SupportCase::where('code', $id)->firstOrFail();
        $attachments = CaseAttachment::where('case_id', $case->id)->get();
        $messages = ClientSupportMessage::with('attachments')->where('case_id', $case->id)->orderBy('created_at')->get();

        return view('frontend.pages.client.support_message', compact('case', 'user', 'messages','attachments','teams'));
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

<?php

namespace App\Http\Controllers\Client;

use Image;
use Helper;
use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Client\Client;
use App\Models\Client\Project;
use App\Models\Frontend\Order;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use App\Models\Client\ClientTeam;
use App\Models\Client\SupportCase;
use App\Models\Client\ProjectPhase;
use App\Http\Controllers\Controller;
use App\Models\Client\ClientSupport;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin\JobRegistration;
use App\Models\Client\CaseAttachment;
use App\Notifications\ClientRegister;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\Models\Client\ClientSupportMessage;
use Illuminate\Support\Facades\Notification;

class ClientController extends Controller
{

    public function clientLogin()
    {
        if (Auth::guard('client')->check()) {
            $data['orders'] = Order::where('client_id', Auth::guard('client')->user()->id)->get();
            $data['deals'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->get();
            $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'rfq')->get();
            return redirect()->route('client.dashboard', $data);
        } else {
            return view('client.auth.login');
        }
    } // End Mehtod

    public function partnerLogin()
    {
        if (Auth::guard('client')->check()) {
            $data['orders'] = Order::where('client_id', Auth::guard('client')->user()->id)->get();
            $data['deals'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->get();
            $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'rfq')->get();
            return redirect()->route('client.dashboard', $data);
        } else {
            return view('client.auth.partner_login');
        }
    } // End Mehtod

    public function jobApplicantLogin()
    {
        if (Auth::guard('client')->check()) {
            $data['orders'] = Order::where('client_id', Auth::guard('client')->user()->id)->get();
            $data['deals'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->get();
            $data['rfqs'] = Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'rfq')->get();
            return redirect()->route('client.dashboard', $data);
        } else {
            return view('client.auth.applicant_login');
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
                return redirect()->back();
            }
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }
    }


    public function clientRegisterStore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|email|unique:clients',
            'password' => 'required|confirmed',
        ], [
            'name.required'      => 'The Name field is required.',
            'email.required'     => 'The Email field is required.',
            'email.email'        => 'Please enter a valid Email address.',
            'email.unique'       => 'This Email address has already been taken.',
            'password.required'  => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        if ($validator->passes()) {
            $client = Client::create([
                'name'                     => $request->name,
                'username'                 => $request->username,
                'email'                    => $request->email,
                'city'                     => $request->city,
                'address'                  => $request->address,
                'client_id'                => $request->client_id,
                'client_type'              => $request->client_type,
                'user_type'                => $request->user_type,
                'phone'                    => $request->phone,
                'status'                   => $request->filled('status') ? $request->status : 'inactive',
                'password'                 => Hash::make($request->password),
            ]);

            if (!empty($request->file('resume'))) {
                $mainFileCV = $request->file(('resume'));
                $filePath = storage_path('app/public/CV');
                if (!empty($mainFileCV)) {
                    $mainFileCV_upload = Helper::customUpload($mainFileCV, $filePath);
                } else {
                    $mainFileCV_upload = ['status' => 0];
                }
                JobRegistration::create([
                    'client_id'               => $client->id,
                    'name'                    => $request->name,
                    'email'                   => $request->email,
                    'address'                 => $request->address,
                    'phone_number'            => $request->phone,
                    'district'                => $request->city,
                    'resume'                  => $mainFileCV_upload['status'] == 1 ? $mainFileCV_upload['file_name'] : NULL,
                ]);
            }

            $user = User::where('role', 'admin')->get();
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
            return redirect()->back();
        }
    }

    public function clientProfileStore(Request $request)
    {
        $profile = Client::findOrFail(Auth::guard('client')->user()->id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'phone' => 'nullable',
            // 'email' => [
            //     'required',
            //     'email',
            //     Rule::unique('users', 'email')->ignore($profile->id),
            // ],
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5000',
        ], [
            'name.required' => 'The name field is required.',
            'username.required' => 'The username field is required.',
            'email.required' => 'The email address field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'The email address has already been taken.',
            'image.max' => 'The image must be smaller than 5 MB.',
            'image.image' => 'Please upload an image file.',
            'image.mimes' => 'The image must be a file of type: PNG, JPEG, JPG.',
        ]);


        if ($validator->passes()) {

            if ($request->hasFile('photo')) {
                $destination = public_path('upload/Profile/user/' . $profile->photo);

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
                'username'     => $request->username,
                'name'         => $request->name,
                'phone'        => $request->phone,
                'city'         => $request->city,
                'country'      => $request->country,
                'company_name' => $request->company_name,
                'address'      => $request->address,
                'postal'       => $request->postal,
                'photo'        => $data['photo'],
            ]);

            Toastr::success('Your profile has been updated successfully.');
            return redirect()->back();
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }
    }












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

    // public function ClientProfileUpdate(Request $request, $id)
    // {


    //     $check = Client::where('id', $id)->first();

    //     if ($check) {
    //         $validator = Validator::make(

    //             $request->all(),
    //             //dd($request->all()),
    //             [
    //                 'name'    => 'required',
    //                 //'phone'   => 'numeric|digits:11',
    //                 'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
    //             ],
    //             [
    //                 'image'   => [
    //                     'max' => 'The image field must be smaller than 4 MB.',
    //                 ],
    //                 'image'   => 'The file must be an image.',
    //                 'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
    //             ]
    //         );
    //     } else {
    //         $validator = Validator::make(
    //             $request->all(),
    //             [
    //                 'name'    => 'required|',
    //                 //'phone'   => 'numeric|digits:11',
    //                 'email'   => 'required|email|unique:users,email',
    //                 'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
    //             ],
    //             [
    //                 'image'   => [
    //                     'max' => 'The image field must be smaller than 4 MB.',
    //                 ],
    //                 'image'   => 'The file must be an image.',
    //                 'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
    //             ]
    //         );
    //     }



    //     if ($validator->passes()) {
    //         $profile = Client::find($id);


    //         //$data = $request->all();

    //         if (!empty($request->photo)) {
    //             $destination = 'upload/Profile/user/' . $profile->photo;
    //             if (File::exists($destination)) {
    //                 File::delete($destination);
    //             }
    //             $image = $request->file('photo');
    //             $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    //             $path = public_path('upload/Profile/user/' . $name_gen);
    //             Image::make($image)->resize(176, 176)->save($path);
    //             $data['photo'] = $name_gen;
    //         } else {
    //             $data['photo'] = $profile->photo;
    //         }
    //         $profile->update([
    //             'username'    => $request->username,
    //             'name'        => $request->name,
    //             'phone'       => $request->phone,
    //             'city'        => $request->city,
    //             'address'     => $request->address,
    //             'postal'      => $request->postal,
    //             'photo'       => $data['photo'],
    //         ]);
    //         Toastr::success('Your Profile Updated Successfully');
    //         return redirect()->back();
    //     } else {
    //         $messages = $validator->messages();
    //         foreach ($messages->all() as $message) {
    //             Toastr::error($message, 'Failed', ['timeOut' => 30000]);
    //         }
    //         return redirect()->back();
    //     }
    // } // End Mehtod



    public function ClientDestroy(Request $request)
    {

        $user_type = Auth::guard('client')->user()->user_type;
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ( $user_type == 'partner') {
            return redirect()->route('partner.login');
        } elseif ( $user_type == 'job_seeker') {
            return redirect()->route('job-applicant.login');
        }else {
            return redirect('/client/login');
        }


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
        $data = [
            'data' => Client::where('id', Auth::guard('client')->user()->id)->first(),
            'orders' => Order::where('client_id', Auth::guard('client')->user()->id)->get(),
        ];
        return view('frontend.pages.client.order', $data);
    }
    public function ClientRfq()
    {
        $data = [
            'data' => Client::where('id', Auth::guard('client')->user()->id)->first(),
            'rfqs' => Rfq::with('quotationProducts')->where('client_id', Auth::guard('client')->user()->id)->get(),
        ];
        return view('frontend.pages.client.rfq', $data);
    }

    public function ClientDeals()
    {
        $data = [
            'data' => Client::where('id', Auth::guard('client')->user()->id)->first(),
            'rfqs' => Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'deal')->get(),
        ];
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

        return view('frontend.pages.client.support_message', compact('case', 'user', 'messages', 'attachments', 'teams'));
    }






    public function rfqProductIndex()
    {
        $data = [
            'data' => Client::where('id', Auth::guard('client')->user()->id)->first(),
            'rfqs' => Rfq::where('client_id', Auth::guard('client')->user()->id)->where('rfq_type', 'deal')->get(),
        ];
        return view('client.pages.rfq.index', $data);
    }
}

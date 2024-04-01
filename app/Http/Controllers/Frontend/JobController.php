<?php

namespace App\Http\Controllers\Frontend;

use Helper;
use App\Models\User;
use App\Models\Admin\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Admin\JobRegistration;
use App\Notifications\CvRegistration;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class JobController extends Controller
{
    public function JobOpenings()
    {
        $data['jobs'] = Job::latest()->get();
        return view('frontend.pages.job.job_post', $data);
    }

    public function JobDetails($id)
    {
        $data['job'] = Job::where('slug', $id)->first();
        return view('frontend.pages.job.job_details', $data);
    }

    public function JobRegistration()
    {
        if (Auth::guard('client')->check()) {
            return view('frontend.pages.job.job_registration');
        } else {
            Toastr::warning('You Need to Login First');
            return redirect()->route('job-applicant.login')->with('url.intended', route('job.registration'));
        }
    }


    public function jobRegisterUser()
    {
        $data['jobRegistrations'] = JobRegistration::get();
        return view('admin.pages.jobRegister.all', $data);
    }

    public function JobRegistrationStore(Request $request)
    {
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'resume'   => 'required|mimes:pdf,doc,docs|max:2000',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: PDF - DOCS - DOC'
            ],

        );

        if ($validator->passes()) {
            $mainFile = $request->file('resume');
            $globalFunFile =  Helper::singleFileUpload($mainFile);

            JobRegistration::create([
                'client_id'                     => Auth::guard('client')->user()->id,
                'name'                          => $request->name,
                'email'                         => $request->email,
                'address'                       => $request->address,
                'phone_number'                  => $request->phone_number,
                'district'                      => $request->district,
                'country'                       => $request->country,
                'training_one_institution'      => $request->training_one_institution,
                'training_one_topic'            => $request->training_one_topic,
                'training_two_institution'      => $request->training_two_institution,
                'training_two_topic'            => $request->training_two_topic,
                'training_three_institution'    => $request->training_three_institution,
                'training_three_topic'          => $request->training_three_topic,
                'professional_company_name_one' => $request->professional_company_name_one,
                'professional_depertment_one'   => $request->professional_depertment_one,
                'professional_start_date_one'   => $request->professional_start_date_one,
                'professional_end_date_one'     => $request->professional_end_date_one,
                'professional_company_name_two' => $request->professional_company_name_two,
                'professional_depertment_two'   => $request->professional_depertment_two,
                'professional_start_date_two'   => $request->professional_start_date_two,
                'professional_end_date_two'     => $request->professional_end_date_two,
                'academic_institution_one'      => $request->academic_institution_one,
                'academic_degree_one'           => $request->academic_degree_one,
                'academic_passing_one'          => $request->academic_passing_one,
                'academic_result_one'           => $request->academic_result_one,
                'academic_institution_two'      => $request->academic_institution_two,
                'academic_degree_two'           => $request->academic_degree_two,
                'academic_passing_two'          => $request->academic_passing_two,
                'academic_result_two'           => $request->academic_result_two,
                'skill_one'                     => $request->skill_one,
                'skill_two'                     => $request->skill_two,
                'skill_three'                   => $request->skill_three,
                'skill_four'                    => $request->skill_four,
                'skill_five'                    => $request->skill_five,
                'skill_six'                     => $request->skill_six,
                'activity_one'                  => $request->activity_one,
                'activity_two'                  => $request->activity_two,
                'activity_three'                => $request->activity_three,
                'activity_four'                 => $request->activity_four,
                'activity_five'                 => $request->activity_five,
                'activity_six'                  => $request->activity_six,
                'reference_name_one'            => $request->reference_name_one,
                'reference_organisation_one'    => $request->reference_organisation_one,
                'reference_email_one'           => $request->reference_email_one,
                'reference_phone_one'           => $request->reference_phone_one,
                'reference_name_two'            => $request->reference_name_two,
                'reference_organisation_two'    => $request->reference_organisation_two,
                'reference_email_two'           => $request->reference_email_two,
                'reference_phone_two'           => $request->reference_phone_two,
                'linkedin'                      => $request->linkedin,
                'resume'                        => $globalFunFile['status'] == 1 ? $globalFunFile['file_name'] : null,
            ]);
            $user = User::where('role', 'admin')->get();
            Notification::send($user, new CvRegistration($request->name));
            Toastr::success('Your Details have registered Successfully in our Website.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }


    public function jobRegisterUserShow($id)
    {
        $data['JobRegistration'] = JobRegistration::find($id);
        return view('admin.pages.jobRegister.edit', $data);
    }

    public function jobRegisterUserDestroy($id)
    {

        $jobRegistration = JobRegistration::find($id);

        if (File::exists(public_path('storage/files/') . $jobRegistration->resume)) {
            File::delete(public_path('storage/files/') . $jobRegistration->resume);
        }
        $jobRegistration->delete();
    }

    public function jobRegisterUserDownload($id)
    {
        $entry = JobRegistration::where('id', '=', $id)->firstOrFail();
        $pathToFile = storage_path() . "/app/public/files/" . $entry->resume;
        return response()->download($pathToFile);
    }
    public function jobApply()
    {

        Toastr::success('You have successfully Applied for this Job');
        return redirect()->route('job.openings');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Row;
use Illuminate\Http\Request;
use App\Models\Admin\AboutUs;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['aboutUses'] = AboutUs::latest()->get();
        return view('admin.pages.aboutUs.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rows'] = Row::select('rows.id', 'rows.title')->latest('id','desc')->whereNotNull('image')->get();
        return view('admin.pages.aboutUs.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'row_one_id'                  => 'required',
                'row_two_id'                  => 'required',
                'row_three_id'                => 'required',
                'banner_title'                => 'nullable',
                'banner_image'                => 'sometimes',
                'banner_short_description'    => 'nullable',
                'row_four_title'              => 'nullable',
                'video_row_title'             => 'nullable',
                'video_row_short_description' => 'nullable',
                'video_link'                  => 'nullable|url',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: png - jpeg - jpg'
            ],
        );

        if ($validator->passes()) {
            $banner_image = $request->banner_image;
            $uploadPath = storage_path('app/public/');
            if (isset($banner_image)) {
                $globalFunbanner_image = Helper::singleUpload($banner_image, $uploadPath);
            } else {
                $globalFunbanner_image = ['status' => 0];
            }
            AboutUs::create([
                'row_one_id'                  => $request->row_one_id,
                'row_two_id'                  => $request->row_two_id,
                'row_three_id'                => $request->row_three_id,
                'banner_title'                => $request->banner_title,
                'banner_image'                => $globalFunbanner_image['status'] == 1 ? $globalFunbanner_image['file_name'] : '',
                'banner_short_description'    => $request->banner_short_description,
                'row_four_title'              => $request->row_four_title,
                'video_row_title'             => $request->video_row_title,
                'video_row_short_description' => $request->video_row_short_description,
                'video_link'                  => $request->video_link,
            ]);
            Toastr::success('Data has been created');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['rows'] = Row::select('rows.id', 'rows.title')->latest('id','desc')->whereNotNull('image')->get();
        $data['aboutUs'] = AboutUs::find($id);
        return view('admin.pages.aboutUs.edit', $data);
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
        $aboutUs = AboutUs::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'row_one_id'                  => 'required',
                'row_two_id'                  => 'required',
                'row_three_id'                => 'required',
                'banner_title'                => 'nullable',
                'banner_image'                => 'sometimes',
                'banner_short_description'    => 'nullable',
                'row_four_title'              => 'nullable',
                'video_row_title'             => 'nullable',
                'video_row_short_description' => 'nullable',
                'video_link'                  => 'nullable|url',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: png - jpeg - jpg'
            ],
        );

        if ($validator->passes()) {
            $mainFile = $request->banner_image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunBannerImage = Helper::singleUpload($mainFile, $uploadPath);
            } else {
                $globalFunBannerImage['status'] = 0;
            }

            if (!empty($aboutUs)) {
                if ($globalFunBannerImage['status'] == 1) {
                    if (File::exists(public_path('storage/') . $aboutUs->banner_image)) {
                        File::delete(public_path('storage/') . $aboutUs->banner_image);
                    }
                    if (File::exists(public_path('storage/requestImg/') . $aboutUs->banner_image)) {
                        File::delete(public_path('storage/requestImg/') . $aboutUs->banner_image);
                    }
                    if (File::exists(public_path('storage/thumb/') . $aboutUs->banner_image)) {
                        File::delete(public_path('storage/thumb/') . $aboutUs->banner_image);
                    }
                }

                $aboutUs->update([
                    'row_one_id'                  => $request->row_one_id,
                    'row_two_id'                  => $request->row_two_id,
                    'row_three_id'                => $request->row_three_id,
                    'banner_title'                => $request->banner_title,
                    'banner_image'                => $globalFunBannerImage['status'] == 1 ? $globalFunBannerImage['file_name'] : $aboutUs->banner_image,
                    'banner_short_description'    => $request->banner_short_description,
                    'row_four_title'              => $request->row_four_title,
                    'video_row_title'             => $request->video_row_title,
                    'video_row_short_description' => $request->video_row_short_description,
                    'video_link'                  => $request->video_link,
                ]);
            }

            Toastr::success('Data has been updated');
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
        $aboutUs = AboutUs::find($id);

        if (File::exists(public_path('storage/') . $aboutUs->banner_image)) {
            File::delete(public_path('storage/') . $aboutUs->banner_image);
        }
        if (File::exists(public_path('storage/requestImg/') . $aboutUs->banner_image)) {
            File::delete(public_path('storage/requestImg/') . $aboutUs->banner_image);
        }
        if (File::exists(public_path('storage/thumb/') . $aboutUs->banner_image)) {
            File::delete(public_path('storage/thumb/') . $aboutUs->banner_image);
        }
        $aboutUs->delete();
    }
}

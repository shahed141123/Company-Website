<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Row;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use App\Models\Admin\HardwareInfoPage;
use Illuminate\Support\Facades\Validator;

class HardwareInfoPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hardwareInfoPages'] = HardwareInfoPage::orderBy('id','DESC')->select('id')->get();
        return view('admin.pages.hardwareInfoPage.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rows'] = Row::orderBy('id','DESC')->select('rows.id', 'rows.title')->whereNotNull('image')->get();
        return view('admin.pages.hardwareInfoPage.add', $data);
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
                'banner_image'   => 'sometimes|image|mimes:png,jpg,jpeg|max:10000',
                'row_six_image'   => 'sometimes|image|mimes:png,jpg,jpeg|max:10000',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: png - jpeg - jpg'
            ],
        );

        if ($validator->passes()) {
            $bannerImage = $request->banner_image;
            $rowSixImage = $request->row_six_image;
            $uploadPath = storage_path('app/public/');

            if (!empty($bannerImage)) {
                $globalFunBannerImage = Helper::customUpload($bannerImage, $uploadPath, 270, 320);
           } else {
                $globalFunBannerImage = ['status' => 0];
            }
            if (!empty($rowSixImage)) {
                $globalFunRowSixImage = Helper::customUpload($rowSixImage, $uploadPath, 270, 320);
            } else {
                $globalFunRowSixImage = ['status' => 0];
            }

            HardwareInfoPage::create([
                'row_five_tab_one_id'         => $request->row_five_tab_one_id,
                'row_five_tab_two_id'         => $request->row_five_tab_two_id,
                'row_five_tab_three_id'       => $request->row_five_tab_three_id,
                'row_five_tab_four_id'        => $request->row_five_tab_four_id,
                'banner_image'                => $globalFunBannerImage['status'] == 1 ? $bannerImage->hashName() : null,
                'banner_title'                => $request->banner_title,
                'banner_short_description'    => $request->banner_short_description,
                'banner_btn_name'             => $request->banner_btn_name,
                'banner_btn_link'             => $request->banner_btn_link,
                'row_two_title'               => $request->row_two_title,
                'row_two_short_description'   => $request->row_two_short_description,
                'row_four_title'              => $request->row_four_title,
                'row_four_sub_title'          => $request->row_four_sub_title,
                'row_four_short_description'  => $request->row_four_short_description,
                'row_four_video_link'         => $request->row_four_video_link,
                'row_four_btn_name'           => $request->row_four_btn_name,
                'row_four_btn_link'           => $request->row_four_btn_link,
                'row_five_title'              => $request->row_five_title,
                'row_five_short_description'  => $request->row_five_short_description,
                'row_six_title'               => $request->row_six_title,
                'row_six_short_description'   => $request->row_six_short_description,
                'row_six_btn_name'            => $request->row_six_btn_name,
                'row_six_btn_link'            => $request->row_six_btn_link,
                'row_six_image'               => $globalFunRowSixImage['status'] == 1 ? $rowSixImage->hashName() : null,
                'row_seven_title'             => $request->row_seven_title,
                'row_eight_title'             => $request->row_eight_title,
                'row_eight_short_description' => $request->row_eight_short_description,
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
        $data['hardwareInfoPage'] = HardwareInfoPage::find($id);
        $data['rows'] = Row::orderBy('id','DESC')->select('rows.id', 'rows.title')->whereNotNull('image')->get();
        return view('admin.pages.hardwareInfoPage.edit', $data);
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
                'banner_image'   => 'sometimes|nullable|image|mimes:png,jpg,jpeg|max:10000',
                'row_six_image'   => 'sometimes|nullable|image|mimes:png,jpg,jpeg|max:10000',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: png - jpeg - jpg'
            ],
        );
        $hardwareInfoPage = HardwareInfoPage::find($id);

        if ($validator->passes()) {
            $bannerImage = $request->banner_image;
            $rowSixImage = $request->row_six_image;
            $uploadPath = storage_path('app/public/');

            if (!empty($bannerImage)) {
                // Call external helper function which resizes and saves the image file in the designated folder
                $globalFunBannerImage = Helper::customUpload($bannerImage, $uploadPath, 380, 210);

                // Delete old logo files stored on disk
                $paths = [
                    storage_path("app/public/{$hardwareInfoPage->banner_image}"),
                    storage_path("app/public/requestImg/{$hardwareInfoPage->banner_image}")
                ];
                foreach ($paths as $path) {
                    if (File::exists($path)) {
                        File::delete($path);
                    }
                }
            } else {
                $globalFunBannerImage = ['status' => 0];
            }
            if (!empty($rowSixImage)) {
                $globalFunRowSixImage = Helper::customUpload($rowSixImage, $uploadPath, 380, 210);

                $paths = [
                    storage_path("app/public/{$hardwareInfoPage->row_six_image}"),
                    storage_path("app/public/requestImg/{$hardwareInfoPage->row_six_image}")
                ];
                foreach ($paths as $path) {
                    if (File::exists($path)) {
                        File::delete($path);
                    }
                }
            } else {
                // Set status of logo image to 0 if no image file was uploaded
                $globalFunRowSixImage = ['status' => 0];
            }

            $hardwareInfoPage->update([
                'row_five_tab_one_id'         => $request->row_five_tab_one_id,
                'row_five_tab_two_id'         => $request->row_five_tab_two_id,
                'row_five_tab_three_id'       => $request->row_five_tab_three_id,
                'row_five_tab_four_id'        => $request->row_five_tab_four_id,
                'banner_image'                => $globalFunBannerImage['status'] == 1 ? $bannerImage->hashName() : $hardwareInfoPage->banner_image,
                'banner_title'                => $request->banner_title,
                'banner_short_description'    => $request->banner_short_description,
                'banner_btn_name'             => $request->banner_btn_name,
                'banner_btn_link'             => $request->banner_btn_link,
                'row_two_title'               => $request->row_two_title,
                'row_two_short_description'   => $request->row_two_short_description,
                'row_four_title'              => $request->row_four_title,
                'row_four_sub_title'          => $request->row_four_sub_title,
                'row_four_short_description'  => $request->row_four_short_description,
                'row_four_video_link'         => $request->row_four_video_link,
                'row_four_btn_name'           => $request->row_four_btn_name,
                'row_four_btn_link'           => $request->row_four_btn_link,
                'row_five_title'              => $request->row_five_title,
                'row_five_short_description'  => $request->row_five_short_description,
                'row_six_title'               => $request->row_six_title,
                'row_six_short_description'   => $request->row_six_short_description,
                'row_six_btn_name'            => $request->row_six_btn_name,
                'row_six_btn_link'            => $request->row_six_btn_link,
                'row_six_image'               => $globalFunRowSixImage['status'] == 1 ? $rowSixImage->hashName() : $hardwareInfoPage->row_six_image,
                'row_seven_title'             => $request->row_seven_title,
                'row_eight_title'             => $request->row_eight_title,
                'row_eight_short_description' => $request->row_eight_short_description,
            ]);
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
        $hardwareInfoPage = HardwareInfoPage::find($id);

        //banner_image
        $paths = [
            storage_path('app/public/') . $hardwareInfoPage->banner_image,
            storage_path('app/public/requestImg/') . $hardwareInfoPage->banner_image
        ];

        // Delete any existing logo and requestImg images
        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $paths = [
            storage_path('app/public/') . $hardwareInfoPage->row_six_image,
            storage_path('app/public/requestImg/') . $hardwareInfoPage->row_six_image
        ];

        // Delete any existing logo and requestImg images
        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $hardwareInfoPage->delete();
    }
}

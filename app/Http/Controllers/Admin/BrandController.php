<?php

namespace App\Http\Controllers\Admin;

use Image;
use Helper;
use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['brands'] = Brand::latest()->get();
        return view('admin.pages.brand.all', $data);
    } // End Method


    public function create()
    {
        return view('admin.pages.brand.add');
    } // End Method


    public function store(Request $request)
    {
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|unique:brands',
                'image'   => 'required|image|mimes:png,jpg,jpeg|max:10000',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: PNG - JPEG - JPG',
                'unique' => 'This Brand has already been taken.',
            ],

        );

        if ($validator->passes()) {
            $mainFile = $request->file('image');
            $imgPath = storage_path('app/public/');
            $slug = Str::slug($request->title);
            $count = Brand::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }
            $data['slug'] = $slug;
            if (empty($mainFile)) {
                Brand::create([
                    'title'    => $request->title,
                    'slug' => $data['slug'],
                    'category' => $request->category,
                ]);
            } else {
                $globalFunImg =  Helper::singleImageUpload($mainFile, $imgPath, 380, 210);
                if ($globalFunImg['status'] == 1) {
                    Brand::create([
                        'title'    => $request->title,
                        'slug' => $data['slug'],
                        'image'    => $globalFunImg['file_name'],
                        'category' => $request->category,
                    ]);
                } else {
                    Toastr::warning('Image upload failed! plz try again.');
                }
            }
            Toastr::success('Data Inserted Successfully');
        } else {

            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    } // End Method


    public function edit($id)
    {
        $data['brand'] = Brand::findOrFail($id);
        return view('admin.pages.brand.edit', $data);
    } // End Method


    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        if (!empty($brand)) {
            $validator =
                [
                    'title' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                ];
        } else {
            $validator =
                [
                    'title' => 'required',
                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $mainFile = $request->image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleImageUpload($mainFile, $uploadPath, 380, 210);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($brand)) {
                if ($globalFunImg['status'] == 1) {
                    if (File::exists(public_path('storage/') . $brand->image)) {
                        File::delete(public_path('storage/') . $brand->image);
                    }
                    if (File::exists(public_path('storage/requestImg/') . $brand->image)) {
                        File::delete(public_path('storage/requestImg/') . $brand->image);
                    }
                    if (File::exists(public_path('storage/thumb/') . $brand->image)) {
                        File::delete(public_path('storage/thumb/') . $brand->image);
                    }
                }

                $brand->update([
                    'title' => $request->title,
                    'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $brand->image,
                    'category' => $request->category,
                ]);
            }

            Toastr::success('Data has been updated');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->route('brand.index');
    } // End Method


    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (File::exists(public_path('storage/') . $brand->image)) {
            File::delete(public_path('storage/') . $brand->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $brand->image)) {
            File::delete(public_path('storage/requestImg/') . $brand->image);
        }
        if (File::exists(public_path('storage/thumb/') . $brand->image)) {
            File::delete(public_path('storage/thumb/') . $brand->image);
        }
        $brand->delete();
    } // End Method
}

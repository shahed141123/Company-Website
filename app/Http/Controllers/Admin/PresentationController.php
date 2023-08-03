<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Industry;
use App\Models\Admin\Presentation;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::get(['title', 'id']);
        $data['industries'] = Industry::get(['title', 'id']);
        $data['brands']     = Brand::get(['title', 'id']);
        $data['presentations'] = Presentation::get();
        return view('admin.pages.presentation.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::pluck('title', 'id');
        $data['industries'] = Industry::pluck('title', 'id');
        $data['brands']     = Brand::pluck('title', 'id');
        return view('admin.pages.presentation.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'type'          => 'nullable|in:sales,technical',
            'category_id.*' => 'nullable|exists:categories,id',
            'industry_id.*' => 'nullable|exists:industries,id',
            'brand_id.*'    => 'nullable|exists:brands,id',
            'presentation'  => 'nullable|mimes:pdf,doc,docs|max:2000',
        ]);

        if ($validator->fails()) {
            Toastr::error($validator->errors(), 'Failed', ['timeOut' => 30000]);
            return redirect()->back();
        }

        $mainFile = $request->file('presentation');
        $data = [
            'type'         => $request->type,
            'category_id'  => json_encode($request->category_id),
            'industry_id'  => json_encode($request->industry_id),
            'brand_id'     => json_encode($request->brand_id),
            'presentation' => '',
        ];

        if (!empty($mainFile)) {
            $globalFunFile = Helper::singleFileUpload($mainFile);
            if ($globalFunFile['status'] !== 1) {
                Toastr::warning('File upload failed! plz try again.');
                return back();
            }
            $data['presentation'] = $globalFunFile['file_name'];
        }

        Presentation::create($data);
        Toastr::success('Data Inserted Successfully');
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
        return view('admin.pages.presentation.edit')->with([
            'presentation' => Presentation::find($id),
            'categories' => Category::pluck('title', 'id'),
            'industries' => Industry::pluck('title', 'id'),
            'brands' => Brand::pluck('title', 'id'),
        ]);
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
        $validator = Validator::make($request->all(), [
            'type'          => 'nullable|in:sales,technical',
            'category_id.*' => 'nullable|exists:categories,id',
            'industry_id.*' => 'nullable|exists:industries,id',
            'brand_id.*'    => 'nullable|exists:brands,id',
            'presentation'  => 'nullable|mimes:pdf,doc,docs|max:2000',
        ]);

        if ($validator->fails()) {
            Toastr::error($validator->errors(), 'Failed', ['timeOut' => 30000]);
            return redirect()->back();
        }

        $mainFile = $request->file('presentation');
        $data = [
            'type'         => $request->type,
            'category_id'  => json_encode($request->category_id),
            'industry_id'  => json_encode($request->industry_id),
            'brand_id'     => json_encode($request->brand_id),
            'presentation' => '',
        ];

        if (!empty($mainFile)) {
            $globalFunFile = Helper::singleFileUpload($mainFile);
            if ($globalFunFile['status'] !== 1) {
                Toastr::warning('File upload failed! plz try again.');
                return back();
            }
            $data['presentation'] = $globalFunFile['file_name'];
        }

        Presentation::find($id)->update($data);
        Toastr::success('Data Inserted Successfully');
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
        $presentation = Presentation::find($id);

        if ($presentation && File::exists(public_path('storage/files/' . $presentation->presentation))) {
            File::delete(public_path('storage/files/' . $presentation->presentation));
            $presentation->delete();
        }
    }
}

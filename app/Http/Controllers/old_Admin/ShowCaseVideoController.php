<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Industry;
use App\Models\Admin\ShowCaseVideo;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class ShowCaseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['showCaseVideos'] = ShowCaseVideo::get();
        return view('admin.pages.showCaseVideo.all', $data);
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
        return view('admin.pages.showCaseVideo.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'type'          => 'nullable|in:sales,technical',
            'category_id.*' => 'nullable|exists:categories,id',
            'industry_id.*' => 'nullable|exists:industries,id',
            'brand_id.*'    => 'nullable|exists:brands,id',
            'url'           => 'nullable|url',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                Toastr::error($error, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }

        ShowCaseVideo::create([
            'type'        => $request->type,
            'category_id' => json_encode($request->category_id),
            'industry_id' => json_encode($request->industry_id),
            'brand_id'    => json_encode($request->brand_id),
            'url'         => $request->url,
        ]);

        Toastr::success('Data Insert Successfully.');
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
        return view('admin.pages.showCaseVideo.edit')->with([
            'showCaseVideo' => ShowCaseVideo::find($id),
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
        $rules = [
            'type'          => 'nullable|in:sales,intechnical',
            'category_id.*' => 'nullable|exists:categories,id',
            'industry_id.*' => 'nullable|exists:industries,id',
            'brand_id.*'    => 'nullable|exists:brands,id',
            'url'           => 'nullable|url',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                Toastr::error($error, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }

        ShowCaseVideo::find($id)->update([
            'type'        => $request->type,
            'category_id' => json_encode($request->category_id),
            'industry_id' => json_encode($request->industry_id),
            'brand_id'    => json_encode($request->brand_id),
            'url'         => $request->url,
        ]);

        Toastr::success('Data Updated Successfully.');
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
        ShowCaseVideo::find($id)->delete();
    }
}

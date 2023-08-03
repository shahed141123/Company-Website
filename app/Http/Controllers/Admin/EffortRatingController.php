<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\EffortRating;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class EffortRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['effortRatings'] = EffortRating::latest()->get();
        return view('admin.pages.effortRating.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.effortRating.add');

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
                'effort' => 'required|unique:effort_ratings',
                'rating' => 'nullable',
                'value'  => 'nullable',
            ],
            [
                'required' => 'This effort field is needed.',
                'unique' => 'This rating is already taken.',
            ]
        );

        if ($validator->passes()) {
            EffortRating::create([
                'effort'       => $request->effort,
                'rating'       => $request->rating,
                'value'        => $request->value,
                'perform_look' => $request->perform_look,
            ]);
            Toastr::success('Data Insert Successfully.');
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
        $data['effortRating'] = EffortRating::find($id);
        return view('admin.pages.effortRating.edit', $data);
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
                'effort' => 'nullable',
                'rating' => 'nullable',
                'value'  => 'nullable',
            ],
        );

        if ($validator->passes()) {
            EffortRating::find($id)->update([
                'effort'       => $request->effort,
                'rating'       => $request->rating,
                'value'        => $request->value,
                'perform_look' => $request->perform_look,
            ]);
            Toastr::success('Data Updated Successfully.');
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
        EffortRating::find($id)->delete();
    }

    public function GetEffortRating($id)
    {
        $effort = EffortRating::where('effort', $id)->first();
        return json_encode($effort);
    }
}

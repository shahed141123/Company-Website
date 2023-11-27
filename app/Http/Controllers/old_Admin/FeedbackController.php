<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Feedback;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['feedbacks'] = Feedback::latest()->get();
        return view('admin.pages.feedback.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.feedback.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'product_details' => 'nullable',
                'articles'        => 'nullable',
                'purchasing'      => 'nullable',
                'pricing'         => 'nullable',
                'solutions'       => 'nullable',
                'search'          => 'nullable',
            ],
        );

        if ($validator->passes()) {
            Feedback::create([
                'product_details' => $request->product_details,
                'articles'        => $request->articles,
                'purchasing'      => $request->purchasing,
                'pricing'         => $request->pricing,
                'solutions'       => $request->solutions,
                'search'          => $request->search,
            ]);
            Toastr::success('Thank You For Your Feed Back.');
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
        Feedback::findOrFail($id)->delete();
    }
}

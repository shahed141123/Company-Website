<?php

namespace App\Http\Controllers\Event;

use App\Models\User;
use App\Models\Admin\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\EventCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();
        $data['events'] = Event::latest()->get();
        $data['event_categorys'] = EventCategory::latest()->get();
        return view('admin.pages.event.all', $data);
    }
    public function eventDashboard()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $data['events'] = Event::whereBetween('start_date', [$currentMonth, $endOfMonth])->get();
        $data['users'] = User::latest('id', 'DESC')->get();
        // $data['events'] = Event::latest()->get();
        $data['event_categorys'] = EventCategory::latest()->get();
        return view('admin.pages.event.dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'title' => 'required|unique:brands',
            ],
            [
                'required' => 'The :attribute must be required.',
                'unique' => 'This Brand has already been taken.',
            ],

        );

        if ($validator->passes()) {

            $slug = Str::slug($request->title);
            $count = Event::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }
            $data['slug'] = $slug;

            Event::create([
                'user_id'        => json_encode($request->user_id),
                'slug'           => $data['slug'],
                'department_id'  => $request->department_id,
                'event_category' => $request->event_category,
                'title'          => $request->title,
                'description'    => $request->description,
                'start_date'     => date('Y-m-d', strtotime($request->start_date)),
                'end_date'       => date('Y-m-d', strtotime($request->end_date)),
                'start_time'     => $request->start_time,
                'end_time'       => $request->end_time,
                'department'     => json_encode($request->department),
                'status'         => $request->status,
            ]);



            Toastr::success('Data Inserted Successfully');
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
        //
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
        $event = Event::find($id);
        $event->update([
            'user_id'        => json_encode($request->user_id),
            'department_id'  => $request->department_id,
            'event_category' => $request->event_category,
            'title'          => $request->title,
            'description'    => $request->description,
            'start_date'     => date('Y-m-d', strtotime($request->start_date)),
            'end_date'       => date('Y-m-d', strtotime($request->end_date)),
            'start_time'     => $request->start_time,
            'end_time'       => $request->end_time,
            'department'     => json_encode($request->department),
            'status'         => $request->status,
        ]);
        Toastr::success('Data has been updated');
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
        $event = Event::find($id);
        $event->delete();
    }

    public function filterEvents($id)
    {
        // dd($id);
        // $categoryId = $id;
        // $data['event_categorys'] = EventCategory::latest()->get();
        // $data['category_id'] = $categoryId;
        // $data['events'] = Event::with('category')
        //     ->when($categoryId, function ($query) use ($categoryId) {
        //         return $query->where('event_category_id', $categoryId);
        //     })
        //     ->get();
        $events = Event::where('event_category', $id)->get();
        // $data = [
        //     'event_categorys' => EventCategory::latest()->get(),
        //     'category_id' => $id,
        //     'events' => ,
        // ];
        return view('admin.pages.event.partial.event_table', compact('events'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class LeaveController extends Controller
{
    public function leaveDashboard()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $data['events'] = Event::whereBetween('start_date', [$currentMonth, $endOfMonth])->get();
        $data['users'] = User::latest('id', 'DESC')->get();

        return view('admin.pages.leave.dashboard', $data);
    }
}

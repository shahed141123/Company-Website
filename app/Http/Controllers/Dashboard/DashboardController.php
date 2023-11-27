<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use App\Models\Admin\EventCategory;
use App\Http\Controllers\Controller;
use Rats\Zkteco\Lib\ZKTeco;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
    public function device_ip()
    {
        if (session()->exists('dip')) {
            $deviceip = session('dip');
        } else {
            session()->put('dip', '192.168.1.201');
            $deviceip = '192.168.1.201';
        }
        return $deviceip;
    }

    public function device_setip(Request $request)
    {

        session()->put('dip', $request->deviceip);
        Toastr::success('IP has been set.');
        return redirect()->back();
    }
    public function siteContent()
    {
        return view('admin.pages.site-content.all');
    }

    public function siteSetting()
    {
        return view('admin.pages.siteSetting.all');
    }

    public function hrAdmin()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->enableDevice();

        $attendances = $zk->getAttendance();
        $users = $zk->getUser(); // Retrieve user data from the device
        $currentMonthAttendances = array_filter($attendances, function ($attendance) {
            return date('Y-m-d', strtotime($attendance['timestamp'])) === date('Y-m-d');
        });
        $userLookup = [];
        foreach ($users as $user) {
            $userLookup[$user['userid']] = $user['name'];
        }

        $attendanceData = [];

        foreach ($currentMonthAttendances as $attendance) {
            $userId = $attendance['id'];
            $date = date('Y-m-d', strtotime($attendance['timestamp']));
            $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

            $userName = $userLookup[$userId] ?? '';

            if (!isset($attendanceData[$userId])) {
                $attendanceData[$userId] = [
                    'user_id' => $userId,
                    'user_name' => $userName,
                    'check_in' => $checkTime,
                    'check_out' => $checkTime,
                ];
            } else {
                if (strtotime($checkTime) > strtotime($attendanceData[$userId]['check_out'])) {
                    $attendanceData[$userId]['check_out'] = $checkTime;
                }
            }
        }
        $currentMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $data['events'] = Event::whereBetween('start_date', [$currentMonth, $endOfMonth])->get();
        $data['event_categorys'] = EventCategory::latest()->get();
        $data['users'] = User::latest('id', 'DESC')->get();
        // return view('admin.pages.HrandAdmin.all', $data);
        return view('admin.pages.HrandAdmin.all', [
            'attendanceData' => $attendanceData,
            'users' => $users,
            'deviceip' => $deviceip,
            'events' => $data['events'],
            'users' => $data['users'],
            'event_categorys' => $data['event_categorys'],
        ]);
    }

    public function accountsFinance()
    {
        return view('admin.pages.accounts.all');
    }

    public function business()
    {
        return view('admin.pages.business.all');
    }
    public function salesDashboard()
    {
        return view('admin.pages.dashboard.sales');
    }
    public function marketingDashboard()
    {
        return view('admin.pages.dashboard.marketing');
    }
}

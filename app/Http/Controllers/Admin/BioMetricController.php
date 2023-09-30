<?php

namespace App\Http\Controllers\Admin;

use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class BioMetricController extends Controller
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
        return redirect()->back();
    }

    public function index()
    {
        $data['deviceip'] = $this->device_ip();
        return view('admin.pages.attendance.device', $data);
    }


    public function device_user_data()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);

        $zk->connect();
        $zk->disableDevice();

        $users = $zk->getUser();
        // dd($users);

        return view('admin.pages.attendance.device-user-data', ['users' => $users]);
    }


    public function device_attendance_data()
    {
        $deviceip = $this->device_ip();
        $zk       = new ZKTeco($deviceip, 4370);

        $zk->connect();
        $zk->disableDevice();

        $attendances = $zk->getAttendance();

        // Filter attendances for the current month
        $currentMonthAttendances = array_filter($attendances, function ($attendance) {
            return date('Y-m', strtotime($attendance['timestamp'])) === date('Y-m');
        });

        // Filter and process attendance data to keep only one entry per user within 24 hours
        $processedAttendances = [];
        $usersWithin24Hours   = [];

        foreach ($currentMonthAttendances as $attendance) {
            $empId    = $attendance['id'];
            $timestamp = strtotime($attendance['timestamp']);

            // Check if the user's entry is within 24 hours of the last entry H: 86400
            if (!isset($usersWithin24Hours[$empId]) || ($timestamp - $usersWithin24Hours[$empId]) >= 86400) {
                $processedAttendances[]     = $attendance;
                $usersWithin24Hours[$empId] = $timestamp;
            }
        }

        return view('admin.pages.attendance.device-attendance-data', ['attendances' => $processedAttendances]);
    }




    public function device_information()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);

        $zk->connect();
        $zk->disableDevice();

        $data = [
            'deviceip'           => $deviceip,
            'deviceVersion'      => $zk->version(),
            'deviceOSVersion'    => $zk->osVersion(),
            'devicePlatform'     => $zk->platform(),
            'devicefmVersion'    => $zk->fmVersion(),
            'deviceworkCode'     => $zk->workCode(),
            'devicessr'          => $zk->ssr(),
            'devicepinWidth'     => $zk->pinWidth(),
            'deviceserialNumber' => $zk->serialNumber(),
            'devicedeviceName'   => $zk->deviceName(),
            'devicegetTime'      => $zk->getTime()
        ];

        return view('admin.pages.attendance.device-information', $data);
    }


    public function device_adduser()
    {
        $deviceip = $this->device_ip();
        return view('admin.pages.attendance.device-adduser', compact('deviceip'));
    }

    public function device_setuser(Request $request)
    {
        $deviceip = $this->device_ip();
        $uid      = $request->uid;
        $userid   = $request->userid;
        $name     = $request->name;
        $role     = (int)$request->role;
        $password = $request->password;
        $cardno   = $request->cardno;
        $zk       = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->setUser($uid, $userid, $name, $role, $password, $cardno);

        Toastr::success('User added to device successfully.');
        return redirect()->back();
    }

    public function device_removeuser_single($uid)
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->removeUser($uid);

        Toastr::success('User removed from device successfully.');
        return redirect()->back();
    }

    public function device_viewuser_single(Request $request)
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);

        $zk->connect();
        $userfingerprints = $zk->getFingerprint($request->uid);

        $data = [
            'deviceip'         => $deviceip,
            'uid'              => $request->uid,
            'userid'           => $request->userid,
            'name'             => $request->name,
            'role'             => (int)$request->role,
            'password'         => $request->password,
            'cardno'           => $request->cardno,
            'userfingerprints' => $userfingerprints
        ];

        return view('admin.pages.attendance.device-information-user', $data);
    }


    public function device_data_clear_attendance()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->clearAttendance();

        Toastr::success('Attendance cleared successfully.');
        return redirect()->back();
    }

    public function device_restart()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->restart();

        Toastr::success('Device restart successfully.');
        return redirect()->back();
    }

    public function device_shutdown()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->shutdown();

        return redirect()->back();
    }
}

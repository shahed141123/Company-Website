<?php

namespace App\Http\Controllers\Attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laradevsbd\Zkteco\Http\Library\ZktecoLib;

class ZktecoController extends Controller
{
    public function index()
    {
        return view('admin.pages.attendance.userAttendance');
    }


}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
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
        return view('admin.pages.HrandAdmin.all');
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

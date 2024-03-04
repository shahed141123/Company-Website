@extends('admin.master')
@section('content')
<style>
    .border-bottom-link{
        cursor: pointer;
    }
</style>
    <div class="content-wrapper">
        <div class="content p-0">
            <!-- Page header -->
            <div class="shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Page Destination/ BreadCrumb --}}
                    <div class="page-header-content d-lg-flex ">
                        <div class="d-flex px-2">
                            <div class="breadcrumb py-2">
                                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                <a href="{{ route('hr-and-admin.index') }}" class="breadcrumb-item"><span
                                        class="breadcrumb-item active">Hr and Admin</span></a>
                            </div>
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                    {{-- Inner Page Tab --}}

                    <!-- Basic tabs -->
                    <div class="px-3">
                        <a href="#" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Tasks</span>
                            </div>
                        </a>
                        <a href="{{ route('notice.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Notice</span>
                            </div>
                        </a>
                        <a href="{{ route('employee.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Employe</span>
                            </div>
                        </a>
                        <a href="{{ route('leaveApplications') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Leave</span>
                            </div>
                        </a>
                        <a href="{{ route('job.regiserUser') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Jobs</span>
                            </div>
                        </a>

                    </div>
                </div>
                <!-- /page header -->
            </div>
            <!-- Sales Chain Page -->
            <div class="content pt-2">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <h3 class="text-center w-50 mx-auto" style="color: #247297;">Welcome to HR</h3>
                        </div>
                    </div>
                    <!-- Row End -->
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="m-0 p-1 text-center card-main-title">Attendance Details</h6>
                            <a href="{{ route('employee.index') }}">
                                <div class="card rounded-0" style="height: 175px; overflow-x: hidden;">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="emplpyee-card">
                                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                                        <h6 class="m-0"><i
                                                                class="fa-solid fa-user-group badge-icons me-3"></i>
                                                        </h6>
                                                        <h6 class="main_color m-0 ammount rounded-1">
                                                            {{ App\Models\User::count() }}
                                                        </h6>
                                                    </div>
                                                    <div class="">
                                                        <h6 class="text-muted m-0 text-center pt-3">Total Employees</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="emplpyee-card">
                                                    <div class="mb-4">
                                                        <div class="d-flex justify-content-between align-items-center pb-1">
                                                            <h6 class="m-0"><i
                                                                    class="fa-solid fa-user-check badge-icons me-2"></i>
                                                            </h6>
                                                            <h6 class="text-muted m-0">Present Employees</h6>
                                                            <h6 class="main_color m-0 ammount rounded-1">
                                                                {{ count($attendanceData) }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h6 class="m-0"><i
                                                                    class="fa-solid fa-user-slash badge-icons me-2"></i>
                                                            </h6>
                                                            <h6 class="text-muted m-0">Absent Employees</h6>
                                                            <h6 class="main_color m-0 ammount rounded-1">
                                                                {{ App\Models\User::count() - count($attendanceData) - 1 }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="m-0 p-1 text-center card-main-title">Today's Attendance</h6>
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="emplpyee-card">
                                                <table
                                                    class="table datatable-scroll-y data_user mt-2 mb-4 border text-center"
                                                    width="100%">
                                                    <tr>
                                                        <th>User Name</th>
                                                        <th>Check-In Time</th>
                                                        <th>Check-Out Time</th>
                                                    </tr>
                                                    @foreach ($attendanceData as $userId => $times)
                                                        <tr class="text-center" class="clickable-row"
                                                            onclick="window.location='{{ route('attendance.single', $userId) }}'">
                                                            {{-- <td><span class="border-bottom-link">{{ $userId }}</span></td> --}}
                                                            <td>
                                                                <a href="{{ route('attendance.single', $userId) }}" class="border-bottom-link">{{ $times['user_name'] }}</a>
                                                            </td>
                                                            <td onclick="window.location='{{ route('attendance.single', $userId) }}'">
                                                                @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('09:05:00'))
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <p class="text-danger me-1 m-0 p-0">
                                                                            {{ $times['check_in'] }}</p>
                                                                        @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                                                Carbon\Carbon::parse($times['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                                            <p class="text-danger m-0 p-0">L</p>
                                                                        @endif

                                                                        @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                                            <p class="text-danger m-0 p-0">Half Day
                                                                                (LL)
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                @else
                                                                    <a href="{{ route('attendance.single', $userId) }}"
                                                                        class="border-bottom-link">{{ $times['check_in'] }}</a>
                                                                @endif

                                                            </td>
                                                            <td><a href="{{ route('attendance.single', $userId) }}"
                                                                    class="border-bottom-link">{{ $times['check_out'] }}</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="m-0 p-1 text-center card-main-title">All Notification
                            </h6>
                            <div class="card rounded-0" style="height: 22.2rem; overflow: auto;">
                                <div class="card-body">
                                    <div class="">

                                        @if ($leave_applications->count() > 0)
                                            @foreach ($leave_applications as $leave_application)
                                                @if ($leave_application->status === 'pending')
                                                    <p class="mb-2 p-0">
                                                        <a
                                                            href="{{ route('leave-application.edit', $leave_application->id) }}">
                                                            <i
                                                                class="fa-solid fa-bell ammount rounded-1 pe-2 me-2"></i>{{ $leave_application->name }}
                                                            has applied for a leave.
                                                        </a>
                                                    </p>
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="row">
                                                <h5 class="text-center mb-0 fs-6">No Leave Application</h5>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mt-3">
                            <h6 class="m-0 p-1 text-center card-main-title">
                                <div class="d-flex justify-content-between align-items-center px-3">
                                    <p class="p-0 m-0">Evulation & KPI</p>
                                    <div class="dropdown dropstart border-0 nav nav-tabs" id="myTab" role="tablist">
                                        <a href="javascript:void()" class="text-white" id="triggerId"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu border-0" aria-labelledby="triggerId">
                                            <button class="dropdown-item" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Probation</button>
                                            <button class="dropdown-item" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Permanent</button>
                                        </div>
                                    </div>
                                </div>
                            </h6>
                            <div class="card rounded-0" style="height: 22.2rem; overflow: auto;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div
                                                style=" border-left: 1px !important;  border-top: 0; border-style: dashed;border-color: #247297;border-bottom: 0;">
                                                <div class="pb-2">
                                                    <a href="" class="btn navigation_btn w-100">KPI Details</a>
                                                </div>
                                                <a href="{{ route('employee.index') }}">
                                                    <ul class="ms-0 ps-0" style="list-style-type: none">
                                                        <li class="d-flex align-items-center">
                                                            <div class="pe-3">
                                                                {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                                <i class="fa-solid fa-user-tie badge-icons"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
                                                                    Sazeduzzaman </h6>
                                                                <p class="p-0 m-0"
                                                                    style="font-size: 12px; font-weight: 600; color: #888ea8">
                                                                    <i
                                                                        class="fa-solid fa-arrow-trend-up text-success pe-2"></i>
                                                                    4,447 <i
                                                                        class="fa-solid fa-bangladeshi-taka-sign ps-2"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li style="padding-left: 14px">|</li>
                                                        <li class="d-flex align-items-center">
                                                            <div class="pe-3">
                                                                <i class="fa-solid fa-user-tie badge-icons"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
                                                                    Sazeduzzaman </h6>
                                                                <p class="p-0 m-0"
                                                                    style="font-size: 12px; font-weight: 600; color: #888ea8">
                                                                    <i
                                                                        class="fa-solid fa-arrow-trend-down text-danger pe-2"></i>
                                                                    4,447 <i
                                                                        class="fa-solid fa-bangladeshi-taka-sign ps-2"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li style="padding-left: 14px">|</li>
                                                        <li class="d-flex align-items-center">
                                                            <div class="pe-3">
                                                                <i class="fa-solid fa-user-tie badge-icons"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
                                                                    Nahid Molla </h6>
                                                                <p class="p-0 m-0"
                                                                    style="font-size: 12px; font-weight: 600; color: #888ea8">
                                                                    <i
                                                                        class="fa-solid fa-arrow-trend-down text-danger pe-2"></i>
                                                                    4,447 <i
                                                                        class="fa-solid fa-bangladeshi-taka-sign ps-2"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li style="padding-left: 14px">|</li>
                                                        <li class="d-flex align-items-center">
                                                            <div class="pe-3">
                                                                <i class="fa-solid fa-user-tie badge-icons"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
                                                                    Sagor Hassan </h6>
                                                                <p class="p-0 m-0"
                                                                    style="font-size: 12px; font-weight: 600; color: #888ea8">
                                                                    <i
                                                                        class="fa-solid fa-arrow-trend-up text-success pe-2"></i>
                                                                    4,447 <i
                                                                        class="fa-solid fa-bangladeshi-taka-sign ps-2"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="pb-2">
                                                <a href="" class="btn navigation_btn w-100">Pending Evulation</a>
                                            </div>
                                            <a href="{{ route('employee.index') }}">
                                                <ul class="ms-0 ps-0" style="list-style-type: none">
                                                    <li class="d-flex align-items-center">
                                                        <div class="pe-3">
                                                            {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                            <img class="rounded-circle"
                                                                src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg"
                                                                width="30px" height="30px" alt="">
                                                        </div>
                                                        <div>
                                                            <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                                Sazeduzzaman </h6>
                                                            <p class="p-0 m-0"
                                                                style="font-size: 12px;
                                                        font-weight: 600;
                                                        color: #888ea8">
                                                                07 May, 2022</p>
                                                        </div>
                                                    </li>
                                                    <li style="padding-left: 14px">|</li>
                                                    <li class="d-flex align-items-center">
                                                        <div class="pe-3">
                                                            <img class="rounded-circle"
                                                                src="https://a.storyblok.com/f/191576/1200x800/faa88c639f/round_profil_picture_before_.webp"
                                                                width="30px" height="30px" alt="">
                                                        </div>
                                                        <div>
                                                            <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                                Sazeduzzaman </h6>
                                                            <p class="p-0 m-0"
                                                                style="font-size: 12px;
                                                        font-weight: 600;
                                                        color: #888ea8">
                                                                07 May, 2022</p>
                                                        </div>
                                                    </li>
                                                    <li style="padding-left: 14px">|</li>
                                                    <li class="d-flex align-items-center">
                                                        <div class="pe-3">
                                                            <img class="rounded-circle"
                                                                src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg"
                                                                width="30px" height="30px" alt="">
                                                        </div>
                                                        <div>
                                                            <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                                Nahid Molla </h6>
                                                            <p class="p-0 m-0"
                                                                style="font-size: 12px;
                                                        font-weight: 600;
                                                        color: #888ea8">
                                                                07 May, 2022</p>
                                                        </div>
                                                    </li>
                                                    <li style="padding-left: 14px">|</li>
                                                    <li class="d-flex align-items-center">
                                                        <div class="pe-3">
                                                            <img class="rounded-circle"
                                                                src="https://a.storyblok.com/f/191576/1200x800/faa88c639f/round_profil_picture_before_.webp"
                                                                width="30px" height="30px" alt="">
                                                        </div>
                                                        <div>
                                                            <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                                Sagor Hassan </h6>
                                                            <p class="p-0 m-0"
                                                                style="font-size: 12px;
                                                        font-weight: 600;
                                                        color: #888ea8">
                                                                07 May, 2022</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-3">
                            <h6 class="m-0 p-1 text-center card-main-title">All Tasks
                            </h6>
                            <div class="card rounded-0" style="height: 22.2rem; overflow: auto;">
                                <div class="card-body">
                                    <ul class="ms-0 ps-0" style="list-style-type: none">
                                        <li class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                    <i class="fa-solid fa-check badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                        New project created : <a href="#">[NGen IT Admin]</a> </h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        07 May, 2022</p>
                                                </div>
                                            </div>
                                            <div class="pe-3">
                                                {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                <i class="fa-solid fa-check dash-icons"></i>
                                                <i class="fa-solid fa-tower-observation dash-icons"></i>
                                            </div>
                                        </li>
                                        <li style="padding-left: 14px">|</li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                    <i class="fa-solid fa-check badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                        Mail sent to HR and Admin</h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        07 May, 2022</p>
                                                </div>
                                            </div>
                                            <div class="pe-3">
                                                {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                <i class="fa-solid fa-check dash-icons"></i>
                                                <i class="fa-solid fa-tower-observation dash-icons"></i>
                                            </div>
                                        </li>
                                        <li style="padding-left: 14px">|</li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                    <i class="fa-solid fa-check badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                        Mail sent to HR and Admin</h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        07 May, 2022</p>
                                                </div>
                                            </div>
                                            <div class="pe-3">
                                                {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                <i class="fa-solid fa-check dash-icons"></i>
                                                <i class="fa-solid fa-tower-observation dash-icons"></i>
                                            </div>
                                        </li>
                                        <li style="padding-left: 14px">|</li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                    <i class="fa-solid fa-check badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                        Mail sent to HR and Admin</h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        07 May, 2022</p>
                                                </div>
                                            </div>
                                            <div class="pe-3">
                                                {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                <i class="fa-solid fa-check dash-icons"></i>
                                                <i class="fa-solid fa-tower-observation dash-icons"></i>
                                            </div>
                                        </li>
                                        <li style="padding-left: 14px">|</li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                    <i class="fa-solid fa-check badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                        Mail sent to HR and Admin</h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        07 May, 2022</p>
                                                </div>
                                            </div>
                                            <div class="pe-3">
                                                {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                <i class="fa-solid fa-check dash-icons"></i>
                                                <i class="fa-solid fa-tower-observation dash-icons"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <h6 class="m-0 p-1 text-center card-main-title">All Events Of This Month</h6>
                            <div class="card rounded-0" style="height: 175px; overflow-x: hidden;">
                                <div class="card-body p-0">
                                    <div class="row align-items-center text-center">
                                        <div class="col-lg-6">
                                            <div class="form-group d-flex align-items-center ps-2 pt-2">
                                                <label for="category_filter">Category:</label>
                                                <select class="form-control select category_filter" id="category_filter">
                                                    <option value="">All</option>
                                                    @foreach ($event_categorys as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#eventAdd" class="btn btn-info text-white px-2 py-1 mt-2">
                                                <i class="fa-solid fa-plus pe-2"></i>Add</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="table-responsive col-lg-12">
                                                <table
                                                    class="table datatable-scroll-y data_event mt-2 mb-4 border pt-2 events_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Category</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($events as $event)
                                                            <tr>
                                                                <td>{{ $event->title }}</td>
                                                                <td>{{ $event->start_date }}</td>
                                                                <td>{{ $event->start_time }}</td>
                                                                <td>{{ $event->eventCategory->name ?? 'No Category' }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h6 class="m-0 p-1 text-center card-main-title">
                                        Employee In Probation
                                    </h6>
                                    <div class="card rounded-0">
                                        <div class="card-body p-1">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover text-center"
                                                    style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Start</th>
                                                            <th scope="col">End</th>
                                                            <th scope="col">Next Evulation</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                            <td scope="row">Sazeduzaman</td>
                                                            <td>01 March 2023</td>
                                                            <td>01 August 2023</td>
                                                            <td>01 December 2023</td>
                                                            <td>Probation</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h6 class="m-0 p-1 text-center card-main-title">All
                                        Employee In Parmanent
                                    </h6>
                                    <div class="card rounded-0">
                                        <div class="card-body p-1">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover text-center"
                                                    style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Start</th>
                                                            <th scope="col">End</th>
                                                            <th scope="col">Next Evulation</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                            <td scope="row">Sazeduzaman</td>
                                                            <td>01 March 2023</td>
                                                            <td>01 August 2023</td>
                                                            <td>01 December 2023</td>
                                                            <td>Probation</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <h6 class="m-0 p-1 text-center card-main-title">Leave Info</h6>
                            <a href="{{ route('employee.index') }}">
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="emplpyee-card">
                                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                                        <h6 class="m-0"><i
                                                                class="fa-solid fa-right-from-bracket badge-icons"></i>
                                                        </h6>
                                                        <h6 class="main_color m-0 ammount rounded-1">14</h6>
                                                    </div>
                                                    <div class="pt-4">
                                                        <h6 class="text-muted m-0 text-center">Pending Monthly Leave</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="emplpyee-card">
                                                    <div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center pb-1">
                                                            <p class="m-0"><i
                                                                    class="fa-solid fa-bed-pulse badge-icons me-1"></i>
                                                            </p>
                                                            <p class="text-muted m-0">Sick Leave</p>
                                                            <p class="main_color m-0 ammount rounded-1">
                                                                {{ count($attendanceData) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center pb-1">
                                                            <p class="m-0">
                                                                <i
                                                                    class="fa-solid fa-right-from-bracket badge-icons me-1"></i>
                                                            </p>
                                                            <p class="text-muted m-0">Earned Leave</p>
                                                            <p class="main_color m-0 ammount rounded-1">
                                                                {{ 11 - count($attendanceData) }}</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center ">
                                                            <p class="m-0"><i
                                                                    class="fa-solid fa-right-from-bracket badge-icons me-1"></i>
                                                            </p>
                                                            <p class="text-muted m-0">Casual Leave</p>
                                                            <p class="main_color m-0 ammount rounded-1">
                                                                {{ 11 - count($attendanceData) }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chain Page -->
            @include('admin.pages.event.partial.modals')
        </div>
    @endsection
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
            var data = {
                labels: ['Present', 'Absent'],
                datasets: [{
                    data: [15, 5], // Example data for "Present" and "Absent" in the current month
                    backgroundColor: ['#805dca',
                        '#13a6d2'
                    ], // Pie slice colors for "Present" and "Absent"
                    borderWidth: 1
                }]
            };

            // Chart configuration
            var config = {
                type: 'pie', // Change chart type to 'pie'
                data: data,
                options: {
                    responsive: true,
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            padding: 20
                        },
                    }
                }
            };

            // Chart initialization code using Chart.js
            document.addEventListener('DOMContentLoaded', function() {
                var chartContainers = document.getElementsByClassName('chartjs-pie-chart');

                for (var i = 0; i < chartContainers.length; i++) {
                    var ctx = chartContainers[i].getContext('2d');
                    new Chart(ctx, config);
                }
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('.employee').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 5,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 3],
                    }, ],
                });
                $('.attendance').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 5,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2],
                    }, ],
                });
            });
        </script>
        <script>
            // public/js/events.js
            $(document).ready(function() {
                $('#category_filter').change(function() {
                    var categoryId = $(this).val();
                    $.ajax({
                        url: '/filter-events',
                        type: 'GET',
                        data: {
                            category_id: categoryId
                        },
                        success: function(data) {
                            $('#events-table').html(data);
                        }
                    });
                });
            });
        </script>
    @endpush

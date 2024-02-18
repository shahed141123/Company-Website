@extends('admin.master')
@section('content')
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

                <!-- Sales Chain Page -->
                <div class="content pt-2">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <h3 class="text-center w-50 mx-auto" style="color: #247297;"> Welcome to HR</h3>
                            </div>
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="m-0 p-1 text-center card-main-title">Attendance Details</h6>
                                <a href="{{ route('employee.index') }}">
                                    <div class="card rounded-0" style="height: 175px; overflow-x: hidden;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="emplpyee-card">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h6 class="m-0"><i
                                                                    class="fa-solid fa-user-group badge-icons me-3"></i>
                                                            </h6>
                                                            <h6 class="main_color m-0 ammount">
                                                                {{ App\Models\User::count() }}
                                                            </h6>
                                                        </div>
                                                        <div class="pt-3">
                                                            <h6 class="text-muted m-0 text-center">Total Employees</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="emplpyee-card">
                                                        <div class="mb-1">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center pb-1">
                                                                <h6 class="m-0"><i
                                                                        class="fa-solid fa-user-check badge-icons me-2"></i>
                                                                </h6>
                                                                <h6 class="text-muted m-0">Present Employees</h6>
                                                                <h6 class="main_color m-0 ammount">
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
                                                                <h6 class="main_color m-0 ammount">
                                                                    {{ 11 - count($attendanceData) }}</h6>
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
                                <h6 class="m-0 p-1 text-center card-main-title">Leave Info
                                </h6>
                                <a href="{{ route('employee.index') }}">
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-lg-4">
                                                    <div class="emplpyee-card">
                                                        <div class="d-flex justify-content-between align-items-center pb-3">
                                                            <h6 class="m-0"><i
                                                                    class="fa-solid fa-right-from-bracket badge-icons"></i>
                                                            </h6>
                                                            <h6 class="main_color m-0 ammount">14</h6>
                                                        </div>
                                                        <div class="pt-4">
                                                            <h6 class="text-muted m-0 text-center">Total Yearly Leave</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="emplpyee-card">
                                                        <div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center pb-1">
                                                                <p class="m-0"><i
                                                                        class="fa-solid fa-bed-pulse badge-icons me-1"></i>
                                                                </p>
                                                                <p class="text-muted m-0">Sick Leave</p>
                                                                <p class="main_color m-0 ammount">
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
                                                                <p class="main_color m-0 ammount">
                                                                    {{ 11 - count($attendanceData) }}</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center ">
                                                                <p class="m-0"><i
                                                                        class="fa-solid fa-right-from-bracket badge-icons me-1"></i>
                                                                </p>
                                                                <p class="text-muted m-0">Casual Leave</p>
                                                                <p class="main_color m-0 ammount">
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
                            <div class="col-lg-4">
                                <h6 class="m-0 p-1 text-center card-main-title">All Events
                                    Of This Month
                                </h6>
                                <div class="card rounded-0" style="height: 175px; overflow-x: hidden;">
                                    <div class="card-body p-0">
                                        <div class="row align-items-center text-center">
                                            <div class="col-lg-6">
                                                <div class="form-group d-flex align-items-center ps-2 pt-2">
                                                    <label for="category_filter">Category:</label>
                                                    <select class="form-control select category_filter"
                                                        id="category_filter">
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
                                                    data-bs-target="#eventAdd"
                                                    class="btn btn-info text-white px-2 py-1 mt-2">
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

                            <div class="col-lg-3">
                                <h6 class="m-0 p-1 text-center card-main-title">
                                    <div class="d-flex justify-content-between align-items-center px-3">
                                        <p class="p-0 m-0">Evulation</p>
                                        <div class="dropdown dropstart border-0 nav nav-tabs" id="myTab"
                                            role="tablist">
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
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="{{ route('employee.index') }}">
                                                    <p><span class="text-info">Upcomming</span></p>
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
                                                                    style="font-size: 12px;
                                                            font-weight: 600;
                                                            color: #888ea8">
                                                                    07 May, 2022</p>
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
                                                                    style="font-size: 12px;
                                                            font-weight: 600;
                                                            color: #888ea8">
                                                                    07 May, 2022</p>
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
                                                                    style="font-size: 12px;
                                                            font-weight: 600;
                                                            color: #888ea8">
                                                                    07 May, 2022</p>
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
                                                                    Sagor Hasan</h6>
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
                                            <div class="col-lg-6">
                                                <a href="{{ route('employee.index') }}">
                                                    <p><span class="text-info">Pending</span></p>
                                                    <ul class="ms-0 ps-0" style="list-style-type: none">
                                                        <li class="d-flex align-items-center">
                                                            <div class="pe-3">
                                                                {{-- <i class="fa-solid fa-award main_color "></i> --}}
                                                                <i class="fa-solid fa-user-tie badge-icons-pending"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
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
                                                                <i class="fa-solid fa-user-tie badge-icons-pending"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
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
                                                                <i class="fa-solid fa-user-tie badge-icons-pending"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
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
                                                                <i class="fa-solid fa-user-tie badge-icons-pending"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="p-0 m-0"
                                                                    style="font-size: 14px;color: #3b3f5c">
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
                            <div class="col-lg-3">
                                <h6 class="m-0 p-1 text-center card-main-title"> Present &
                                    Absent Percentage
                                </h6>
                                <div class="card rounded-0">
                                    <div class="card-body d-flex justify-content-center align-items-center py-5">
                                        <div id="canvas-holder" class="mt-0" style="width: 50%">
                                            <canvas class="chartjs-pie-chart" width="300" height="200"></canvas>
                                        </div>
                                        <div id="chartjs-tooltip"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="m-0 p-1 text-center card-main-title">KPI Details
                                </h6>
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Pending</p>
                                                <p>50%</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Pending</p>
                                                <p>50%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="m-0 p-1 text-center card-main-title">All Tasks
                                </h6>
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <ul class="ms-0 ps-0" style="list-style-type: none">
                                            <li class="d-flex align-items-center">
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
                                            </li>
                                            <li style="padding-left: 14px">|</li>
                                            <li class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    <i class="fa-regular fa-envelope badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                        Mail sent to HR and Admin </h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        06 May, 2022</p>
                                                </div>
                                            </li>
                                            <li style="padding-left: 14px">|</li>
                                            <li class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    <i class="fa-solid fa-check badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">Server Logs
                                                        Updated </h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        30 Apr, 2022</p>
                                                </div>
                                            </li>
                                            <li style="padding-left: 14px">|</li>
                                            <li class="d-flex align-items-center">
                                                <div class="pe-3">
                                                    <i class="fa-solid fa-check badge-icons"></i>
                                                </div>
                                                <div>
                                                    <h6 class="p-0 m-0" style="font-size: 14px;color: #3b3f5c">
                                                        Documents Submitted from Sara</h6>
                                                    <p class="p-0 m-0"
                                                        style="font-size: 12px;
                                                font-weight: 600;
                                                color: #888ea8">
                                                        25 Apr, 2022</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
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

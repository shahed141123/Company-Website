@extends('admin.master')
@section('content')
    <style>
        .user-dash-bg {
            background-color: #f2f3ff;
            height: 18rem;
        }

        .user-name {
            font-family: "Bebas Neue", sans-serif;
            font-weight: 300;
            font-size: 45px;
            color: #ae0a46;
        }

        .para-text {
            padding-top: 5px;
            font-size: 16px;
            font-weight: 500;
        }

        .user-counter {
            font-family: "Bebas Neue", sans-serif;
            font-weight: 300;
        }

        .user-name {
            font-family: "Bebas Neue", sans-serif;
            font-weight: 300;
        }

        .user-dash-icons {
            background-color: #ae0a46;
            padding: 10px 5px;
            color: white;
            font-size: 20px;
            border-radius: 5px;
        }

        .amout-count {
            background-color: #ae0a46;
            color: white;
            padding: 2px 7px;
            border-radius: 50%;
        }

        .buttons-html5,
        .buttons-print {
            border-radius: 0px !important;
        }

        .datatable-scroll-wrap {
            margin-top: -15px;
        }

        .approved-btn {
            background-color: #ae0a46;
            color: white;
            padding: 6px 6px;
            font-size: 14px;
        }

        .user-color {
            color: #ae0a46;
        }

        .assigned-task .cbx {
            -webkit-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            cursor: pointer;
        }

        .assigned-task .cbx span {
            display: inline-block;
            vertical-align: middle;
            transform: translate3d(0, 0, 0);
        }

        .assigned-task .cbx span:first-child {
            position: relative;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            transform: scale(1);
            vertical-align: middle;
            border: 1px solid #B9B8C3;
            transition: all 0.2s ease;
        }

        .assigned-task .cbx span:first-child svg {
            position: absolute;
            z-index: 1;
            top: 8px;
            left: 6px;
            fill: none;
            stroke: white;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 16px;
            stroke-dashoffset: 16px;
            transition: all 0.3s ease;
            transition-delay: 0.1s;
            transform: translate3d(0, 0, 0);
        }

        .assigned-task .cbx span:first-child:before {
            content: "";
            width: 100%;
            height: 100%;
            background: #506EEC;
            display: block;
            transform: scale(0);
            opacity: 1;
            border-radius: 50%;
            transition-delay: 0.2s;
        }

        .assigned-task .cbx span:last-child {
            margin-left: 8px;
        }

        .assigned-task .cbx span:last-child:after {
            content: "";
            position: absolute;
            top: 8px;
            left: 0;
            height: 1px;
            width: 100%;
            background: #B9B8C3;
            transform-origin: 0 0;
            transform: scaleX(0);
        }

        .assigned-task .cbx:hover span:first-child {
            border-color: #3c53c7;
        }

        .assigned-task .inp-cbx:checked+.cbx span:first-child {
            border-color: #3c53c7;
            background: #3c53c7;
            animation: check-15 0.6s ease;
        }

        .assigned-task .inp-cbx:checked+.cbx span:first-child svg {
            stroke-dashoffset: 0;
        }

        .assigned-task .inp-cbx:checked+.cbx span:first-child:before {
            transform: scale(2.2);
            opacity: 0;
            transition: all 0.6s ease;
        }

        .assigned-task .inp-cbx:checked+.cbx span:last-child {
            color: #B9B8C3;
            transition: all 0.3s ease;
        }

        .assigned-task .inp-cbx:checked+.cbx span:last-child:after {
            transform: scaleX(1);
            transition: all 0.3s ease;
        }

        @keyframes check-15 {
            50% {
                transform: scale(1.2);
            }
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-lg-4">
                    {{-- Profile Card --}}
                    <div class="card user-dash-bg">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="m-0 p-0">Welcome Back</h4>
                                <h1 class="m-0 p-0 user-name">Sazeduzzaman Saju</h1>
                                <p class="m-0 p-0">Frontend Developer</p>
                            </div>
                            <div>
                                <img class="rounded-1" width="250px" src="https://i.ibb.co/N1SpwX5/Woman-with-laptop.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- Attendance Info --}}
                    <div class="card user-dash-bg">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card w-50 me-2" style="height: 7rem;">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        {{-- Icons Info --}}
                                        <div>
                                            <i class="fa-solid fa-building-circle-check user-dash-icons"></i>
                                            <p class="para-text m-0">Check In</p>
                                        </div>
                                        <div>
                                            <h1 class="user-counter mb-0">10:50 Am</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-50" style="height: 7rem;">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        {{-- Icons Info --}}
                                        <div>
                                            <i class="fa-solid fa-building-circle-xmark user-dash-icons"></i>
                                            <p class="para-text m-0">Check Out</p>
                                        </div>
                                        <div>
                                            <h1 class="user-counter mb-0">10:50 Am</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card w-50 me-2" style="height: 7rem;">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        {{-- Icons Info --}}
                                        <div>
                                            <i class="fa-solid fa-building-circle-arrow-right user-dash-icons"></i>
                                            <p class="para-text m-0">Movement</p>
                                        </div>
                                        <div>
                                            <h1 class="user-counter mb-0">10:50 Am</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card me-2" style="width: 30%; height: 7rem;">
                                    <div class="card-body">
                                        {{-- Icons Info --}}
                                        <div class="d-flex justify-content-between align-items-center pt-1 px-2">
                                            <h5 class="user-counter mb-0">EL</h5>
                                            <h5 class="user-counter mb-0">A</h5>
                                            <h5 class="user-counter mb-0">L</h5>
                                            <h5 class="user-counter mb-0">LL</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pt-2">
                                            <h5 class="user-counter amout-count mb-0">05</h5>
                                            <h5 class="user-counter amout-count mb-0">01</h5>
                                            <h5 class="user-counter amout-count mb-0">02</h5>
                                            <h5 class="user-counter amout-count mb-0">03</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 20%; height: 7rem;" id="myTab" role="tablist">
                                    <div class="card-body d-flex justify-content-between align-items-center ps-1">
                                        {{-- Icons Info --}}
                                        <a href="javascript:void();" id="show-attendance">
                                            <div>
                                                <h4 class="user-counter mb-0 text-muted" style="line-height: 1">Monthly
                                                    Attendance</h4>
                                                <img width="50px"src="https://i.ibb.co/F0vQD5f/png-clipart-drawing-long-arrow-angle-arrow-thumbnail-removebg-preview.png"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- Achivement Info --}}
                    <div class="card user-dash-bg">
                        <div class="card-body">
                            <h3>Today's Achievement</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card me-2 user-inner-card" style="height: 12rem; width: 25%">
                                    <div class="card-body align-items-center">
                                        <p class="para-text m-0">Achieve</p>
                                        <div class="d-flex justify-content-between align-items-center pt-3">
                                            <div>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-regular fa-star-half-stroke text-yellow"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-solid fa-star text-yellow"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card me-2" style="height: 12rem; width: 25%">
                                    <div class="card-body user-inner-card">
                                        <p class="para-text m-0">Perform</p>
                                        <div>
                                            This Meter is Under Construction
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="height: 12rem; width: 50%">
                                    <div class="card-body user-inner-card">
                                        <p class="para-text m-0">Others</p>
                                        <div>
                                            <ol class="">
                                                <li>Lorem ipsum dolor.</li>
                                                <li>Lorem ipsum dolor.</li>
                                                <li>Lorem ipsum dolor.</li>
                                                <li>Lorem ipsum dolor.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mx-auto">
                    <div class="attendance-content" style="display: none;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs w-50 mx-auto d-flex justify-content-center align-items-center"
                            id="myTab" role="tablist">
                            <li class="nav-item mb-0" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">
                                    Current Month
                                </button>
                            </li>
                            <li class="nav-item mb-0" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    Last Month
                                </button>
                            </li>
                            <li class="nav-item mb-0" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                    data-bs-target="#messages" type="button" role="tab" aria-controls="messages"
                                    aria-selected="false">
                                    Total Late
                                </button>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card rounded-0 shadow-sm">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table
                                                class="table currentMonthDT table-striped table-bordered table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>User ID</th>
                                                        <th>User Name</th>
                                                        <th>Date</th>
                                                        <th>Check-In</th>
                                                        <th>Check-Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card rounded-0 shadow-sm">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table
                                                class="table currentMonthDT table-striped table-bordered table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>User ID</th>
                                                        <th>User Name</th>
                                                        <th>Date</th>
                                                        <th>Check-In</th>
                                                        <th>Check-Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                <div class="card rounded-0 shadow-sm">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table
                                                class="table currentMonthDT table-striped table-bordered table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>User ID</th>
                                                        <th>User Name</th>
                                                        <th>Date</th>
                                                        <th>Check-In</th>
                                                        <th>Check-Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sazeduzzaman</td>
                                                        <td>02 Feb 2024</td>
                                                        <td>08:42 AM</td>
                                                        <td>06:00 PM</td>
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
            <div class="row">
                <div class="col-lg-4">
                    {{-- Profile Card --}}
                    <div class="card user-dash-bg">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="m-0 p-0">Congratulation</h4>
                                <div class="pt-2">
                                    <h6 class="m-0 p-0">Next Evulation</h6>
                                    <h1 class="m-0 p-0 user-name">20 Feb 2024</h1>
                                </div>
                                <p class="m-0 p-0 w-75">Youv'e made excellent progress, completing 80% of the task
                                    assigned.</p>
                            </div>
                            <div>
                                <img class="rounded-1" width="150px" src="https://i.ibb.co/ZSsTVgP/Rating.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- Attendance Info --}}
                    <div class="card user-dash-bg">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card w-50 me-2" style="height: 7rem;">
                                    <div class="card-body d-flex justify-content-between align-items-center px-4">
                                        {{-- Icons Info --}}
                                        <div>
                                            <h1 class="user-counter w-75 mb-0" style="line-height: 1">Leave Application
                                            </h1>
                                        </div>
                                        <div>
                                            <p class="approved-btn mb-0 shadow-sm rounded-1">Approved</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-50" style="height: 7rem;">
                                    <div class="card-body d-flex justify-content-between align-items-center px-4">
                                        {{-- Icons Info --}}
                                        <div>
                                            <h1 class="user-counter w-75 mb-0" style="line-height: 1">Leave Availed</h1>
                                        </div>
                                        <div>
                                            <h1 class="user-counter mb-0">03</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card w-100" style="height: 7rem;">
                                    <div class="card-body d-flex justify-content-between align-items-center px-4">
                                        {{-- Icons Info --}}
                                        <div>
                                            <p class="para-text m-0">Sick Leave</p>
                                            <h1 class="user-counter mb-0 text-center user-color">02</h1>
                                        </div>
                                        <div>
                                            <p class="para-text m-0">Casual Leave</p>
                                            <h1 class="user-counter mb-0 text-center user-color">02</h1>
                                        </div>
                                        <div>
                                            <p class="para-text m-0">Earned Leave</p>
                                            <h1 class="user-counter mb-0 text-center user-color">02</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- Profile Card --}}
                    <div class="card user-dash-bg">
                        <div class="card-body">
                            <h3>Key Performance Indicator (KPI)</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card me-2" style="height: 7rem;width: 33.3%">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        {{-- Icons Info --}}
                                        <div>
                                            <h5 class="m-0">Task</h5>
                                            {{-- <i class="fa-solid fa-building-circle-check user-dash-icons"></i> --}}
                                            <i class="fa-solid fa-arrow-trend-up fs-3 text-success pt-2"></i>
                                        </div>
                                        <div>
                                            <h1 class="user-counter mb-0 user-color">50%</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card me-2" style="height: 7rem;width: 33.3%">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        {{-- Icons Info --}}
                                        <div>
                                            <h5 class="m-0">Project</h5>
                                            {{-- <i class="fa-solid fa-building-circle-check user-dash-icons"></i> --}}
                                            <i class="fa-solid fa-arrow-trend-down fs-3 text-danger pt-2"></i>
                                        </div>
                                        <div>
                                            <h1 class="user-counter mb-0 user-color">50%</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="height: 7rem;width: 33.3%">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        {{-- Icons Info --}}
                                        <div>
                                            <h5 class="m-0">HR</h5>
                                            {{-- <i class="fa-solid fa-building-circle-check user-dash-icons"></i> --}}
                                            <i class="fa-solid fa-arrow-trend-up fs-3 text-success pt-2"></i>
                                        </div>
                                        <div>
                                            <h1 class="user-counter mb-0 user-color">50%</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Showing All Your Key Performance Indicator (KPI) <br> Details Here.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card rounded-0">
                        <div class="card-header p-1 rounded-0" style="background-color: #f2f3ff">
                            <h4 class="m-0 text-center">Assigned Task</h4>
                        </div>
                        <div class="card-body">
                            <div class="assigned-task">
                                <input class="inp-cbx" id="cbx-15" type="checkbox" style="display: none;" />
                                <label class="cbx" for="cbx-15">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>Complete The Whole Design On This Week</span>
                                </label>
                            </div>
                            <div class="assigned-task">
                                <input class="inp-cbx" id="cbx-16" type="checkbox" style="display: none;" />
                                <label class="cbx" for="cbx-16">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>Complete The Whole Design On This Week</span>
                                </label>
                            </div>
                            <div class="assigned-task">
                                <input class="inp-cbx" id="cbx-17" type="checkbox" style="display: none;" />
                                <label class="cbx" for="cbx-17">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>Complete The Whole Design On This Week</span>
                                </label>
                            </div>
                            <div class="assigned-task">
                                <input class="inp-cbx" id="cbx-18" type="checkbox" style="display: none;" />
                                <label class="cbx" for="cbx-18">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>Complete The Whole Design On This Week</span>
                                </label>
                            </div>
                            <div class="assigned-task">
                                <input class="inp-cbx" id="cbx-19" type="checkbox" style="display: none;" />
                                <label class="cbx" for="cbx-19">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>Complete The Whole Design On This Week</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card rounded-0">
                        <div class="card-header p-1 rounded-0" style="background-color: #f2f3ff">
                            <h4 class="m-0 text-center">Notice</h4>
                        </div>
                        <div class="card-body">
                            <div>
                                <ol>
                                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, quos?</li>
                                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, quos?</li>
                                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, quos?</li>
                                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, quos?</li>
                                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, quos?</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $('.currentMonthDT').DataTable({
            // dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            dom: '<"datatable-header justify-content-start"f<"ms-sm-auto"l><"ms-sm-3"B>><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            "iDisplayLength": 5,
            "lengthMenu": [5, 10, 31],
            columnDefs: [{
                orderable: false,
                targets: [4],
            }]
        });
    </script>
    <script>
        var dial = $(".dial .inner");
        var gauge_value = $(".gauge .value");

        function rotateDial() {
            var deg = 0;
            var value = Math.round(Math.random() * 100);
            deg = (value * 177.5) / 100;

            gauge_value.html(value + "%");

            dial.css({
                'transform': 'rotate(' + deg + 'deg)'
            });
            dial.css({
                '-ms-transform': 'rotate(' + deg + 'deg)'
            });
            dial.css({
                '-moz-transform': 'rotate(' + deg + 'deg)'
            });
            dial.css({
                '-o-transform': 'rotate(' + deg + 'deg)'
            });
            dial.css({
                '-webkit-transform': 'rotate(' + deg + 'deg)'
            });
        }

        setInterval(rotateDial, 2000);
    </script>
    <script>
        // jQuery toggler
        $(document).ready(function() {
            $("#show-attendance").click(function() {
                $(".attendance-content").toggle();
            });
        });
    </script>
@endpush

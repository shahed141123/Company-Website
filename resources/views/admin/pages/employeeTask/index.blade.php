@extends('admin.master')
@section('content')
    <style>
        .user-dash-bg {
            background-color: #f2f3ff;
            height: 20rem;
        }

        .user-name {
            font-family: "Bebas Neue", sans-serif;
            font-weight: 300;
            font-size: 56px;
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

        .go-icon {
            padding: 6px;
            border-radius: 15px;
        }

        .go-icon:hover {
            padding: 6px;
            border-radius: 15px;
            background-color: #ae0a46;
            color: white;
        }

        .notification .circle-check {
            display: none;
        }

        .notification.clicked .envelope {
            display: none;
        }

        .notification.clicked .circle-check {
            display: inline-block;
            /* or any other desired display property */
        }

        .tasks-bar {
            background: white;
            padding: 0px 1px;
            border-radius: 20px;
        }

        .badge-icons {
            background: transparent;
            border-radius: 50%;
            padding: 9px 13px;
            margin-right: 11px;
            display: flex;
            height: 32px;
            justify-content: center;
            width: 32px;
            background-color: #ae0a46;
            box-shadow: 0 10px 20px -8px #ae0a46;
            color: white;
        }

        .time-left-count {
            background-color: #ae0a46;
            color: white;
            padding: 3px 7px;
            margin-left: 5px;
            border-radius: 5px;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-bottom: 1px solid #eee;
        }

        .task-icons {
            background: transparent;
            font-size: 18px;
            border-radius: 50%;
            padding: 7px;
            margin-right: 10px;
            display: flex;
            height: 25px;
            justify-content: center;
            width: 25px;
            /* background-color: #ae0a46; */
            /* box-shadow: 0 10px 20px -8px #ae0a46; */
            color: #ae0a46;
        }

        .task-calander {
            color: #ae0a46;
        }

        .time-left-count {
            background-color: #ae0a461c;
            color: #ae0a46;
            font-weight: bold;
        }

        thead {
            background-color: transparent !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="" class="breadcrumb-item">Employee Task Dashboard</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                {{-- Inner Page Tab --}}
                <div>
                    <a href="{{ route('employee-task.create') }}"class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>Add Task</span>
                        </div>
                    </a>
                    <a href="{{ route('employee-task.create') }}"class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>Add Project</span>
                        </div>
                    </a>
                    <a href="{{ route('employee-task.create') }}"class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>Add HR</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="container-fluid">
                <div class="row pt-3">
                    <div class="col-lg-4">
                        {{-- Profile Card --}}
                        <div class="card user-dash-bg">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h1 class="m-0 p-0 user-name">Total KPI</h1>
                                    <h1 class="m-0 p-0 user-name text-muted">63 %</h1>
                                </div>
                                <div>
                                    <img class="rounded-1" width="250px"
                                        src="https://i.ibb.co/xzpPT9Y/KPI-Illustration.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        {{-- Attendance Info --}}
                        <div class="card user-dash-bg">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card w-50 me-2" style="height: 8rem;">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <div>
                                                <!-- Nav tabs -->
                                                <h5 class="mb-0 pb-0">My KPI Lists</h5>
                                                <ul class="nav nav-tabs border-0 pt-3" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                            data-bs-target="#home" type="button" role="tab"
                                                            aria-controls="home" aria-selected="true">
                                                            Task
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                            data-bs-target="#profile" type="button" role="tab"
                                                            aria-controls="profile" aria-selected="false">
                                                            Project
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                                            data-bs-target="#messages" type="button" role="tab"
                                                            aria-controls="messages" aria-selected="false">
                                                            HR
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card w-50" style="height: 8rem;">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            {{-- Icons Info --}}
                                            <div>
                                                <i class="fa-solid fa-building-circle-xmark user-dash-icons"></i>
                                                <p class="para-text m-0 ps-0">Total Task</p>
                                            </div>
                                            <div>
                                                <h1 class="user-counter mb-0">
                                                    12
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card w-50 me-2" style="height: 8rem;">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            {{-- Icons Info --}}
                                            <div>
                                                <i class="fa-solid fa-building-circle-check user-dash-icons"></i>
                                                <p class="para-text m-0 ps-0">Pending Task</p>
                                            </div>
                                            <div>
                                                <h1 class="user-counter mb-0">
                                                    05
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card w-50" style="height: 8rem;">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            {{-- Icons Info --}}
                                            <div>
                                                <i class="fa-solid fa-building-circle-xmark user-dash-icons"></i>
                                                <p class="para-text m-0 ps-0">Completed Task</p>
                                            </div>
                                            <div>
                                                <h1 class="user-counter mb-0">
                                                    12
                                                </h1>
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
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fa-solid fa-building-circle-xmark user-dash-icons"></i>
                                            </div>
                                            <div>
                                                <p class="para-text m-0 ps-0">Cruicial</p>
                                            </div>
                                            <div>
                                                <h1 class="user-counter mb-0">
                                                    04
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fa-solid fa-building-circle-xmark user-dash-icons"></i>
                                            </div>
                                            <div>
                                                <p class="para-text m-0 ps-0">Review</p>
                                            </div>
                                            <div>
                                                <h1 class="user-counter mb-0">
                                                    03
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fa-solid fa-building-circle-xmark user-dash-icons"></i>
                                            </div>
                                            <div>
                                                <p class="para-text m-0 ps-0">Time Extend</p>
                                            </div>
                                            <div>
                                                <h1 class="user-counter mb-0">
                                                    02
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <h3 class="text-center">Task List</h3>
                                    <div class="col-lg-12">
                                        <div class="card border-0 shadow-sm">
                                            <div class="card-body p-0">
                                                <div class="table-responsive d-flex justify-content-center">
                                                    <table class="table mb-0 border-0 table-border table-striped"
                                                        style="background-color: #f2f3ff !important ;border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th class="text-start">Task Name</th>
                                                                <th class="">Duration</th>
                                                                <th class="">Total Time</th>
                                                                <th class="">Time Left</th>
                                                                <th class="">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="align-items-center">
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 d-flex align-items-center ps-3">
                                                                        <span><i
                                                                                class="fa-solid fa-people-arrows task-icons"></i></span>
                                                                        Complete The User Dashboard Under 3 Days
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        <p
                                                                            class="text-white mb-0 d-flex justify-content-center align-items-center">
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                            <span class="text-muted ps-1 pe-1"> - </span>
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 text-center">
                                                                        <span class="">23D: 2H: 30M</span>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">14</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">10</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">25</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a href=""><i
                                                                                class="fa-solid fa-clipboard-check task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-ranking-star task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-business-time task-icons"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 d-flex align-items-center ps-3">
                                                                        <span><i
                                                                                class="fa-solid fa-check task-icons"></i></span>
                                                                        Complete The User Dashboard Under 3 Days
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        <p
                                                                            class="text-white mb-0 d-flex justify-content-center align-items-center">
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                            <span class="text-black ps-1 pe-1">
                                                                                -
                                                                            </span>
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 text-center">
                                                                        <span class="">23D: 2H: 30M</span>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">14</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">10</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">25</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a href=""><i
                                                                                class="fa-solid fa-clipboard-check task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-ranking-star task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-business-time task-icons"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <h3 class="text-center">Project List</h3>
                                    <div class="col-lg-12">
                                        <div class="card border-0 shadow-sm">
                                            <div class="card-body p-0">
                                                <div class="table-responsive d-flex justify-content-center">
                                                    <table class="table mb-0 border-0 table-border table-striped"
                                                        style="background-color: #f2f3ff !important ;border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th class="text-start">Task Name</th>
                                                                <th class="">Duration</th>
                                                                <th class="">Total Time</th>
                                                                <th class="">Time Left</th>
                                                                <th class="">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="align-items-center">
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 d-flex align-items-center ps-3">
                                                                        <span><i
                                                                                class="fa-solid fa-people-arrows task-icons"></i></span>
                                                                        Complete The User Dashboard Under 3 Days
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        <p
                                                                            class="text-white mb-0 d-flex justify-content-center align-items-center">
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                            <span class="text-muted ps-1 pe-1"> - </span>
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 text-center">
                                                                        <span class="">23D: 2H: 30M</span>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">14</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">10</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">25</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a href=""><i
                                                                                class="fa-solid fa-clipboard-check task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-ranking-star task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-business-time task-icons"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 d-flex align-items-center ps-3">
                                                                        <span><i
                                                                                class="fa-solid fa-check task-icons"></i></span>
                                                                        Complete The User Dashboard Under 3 Days
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        <p
                                                                            class="text-white mb-0 d-flex justify-content-center align-items-center">
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                            <span class="text-black ps-1 pe-1">
                                                                                -
                                                                            </span>
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 text-center">
                                                                        <span class="">23D: 2H: 30M</span>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">14</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">10</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">25</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a href=""><i
                                                                                class="fa-solid fa-clipboard-check task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-ranking-star task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-business-time task-icons"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                <div class="row">
                                    <h3 class="text-center">HR List</h3>
                                    <div class="col-lg-12">
                                        <div class="card border-0 shadow-sm">
                                            <div class="card-body p-0">
                                                <div class="table-responsive d-flex justify-content-center">
                                                    <table class="table mb-0 border-0 table-border table-striped"
                                                        style="background-color: #f2f3ff !important ;border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th class="text-start">Task Name</th>
                                                                <th class="">Duration</th>
                                                                <th class="">Total Time</th>
                                                                <th class="">Time Left</th>
                                                                <th class="">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="align-items-center">
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 d-flex align-items-center ps-3">
                                                                        <span><i
                                                                                class="fa-solid fa-people-arrows task-icons"></i></span>
                                                                        Complete The User Dashboard Under 3 Days
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        <p
                                                                            class="text-white mb-0 d-flex justify-content-center align-items-center">
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                            <span class="text-muted ps-1 pe-1"> - </span>
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 text-center">
                                                                        <span class="">23D: 2H: 30M</span>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">14</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">10</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">25</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a href=""><i
                                                                                class="fa-solid fa-clipboard-check task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-ranking-star task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-business-time task-icons"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 d-flex align-items-center ps-3">
                                                                        <span><i
                                                                                class="fa-solid fa-check task-icons"></i></span>
                                                                        Complete The User Dashboard Under 3 Days
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        <p
                                                                            class="text-white mb-0 d-flex justify-content-center align-items-center">
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                            <span class="text-black ps-1 pe-1">
                                                                                -
                                                                            </span>
                                                                            <span class="task-calander p-1 px-2 rounded-1">
                                                                                <i
                                                                                    class="fa-solid fa-calendar-days pe-2"></i>
                                                                                25/02/2024
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 text-center">
                                                                        <span class="">23D: 2H: 30M</span>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">14</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">10</p>
                                                                            <p class="mb-0 ps-1">:</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="mb-0 time-left-count">25</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a href=""><i
                                                                                class="fa-solid fa-clipboard-check task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-ranking-star task-icons"></i></a>
                                                                        <a href=""><i
                                                                                class="fa-solid fa-business-time task-icons"></i></a>
                                                                    </div>
                                                                </td>
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
        </div>
        <!-- /content area End-->
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.employeeCategoryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
        </script>
    @endpush
@endonce

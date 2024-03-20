@extends('admin.master')
@section('content')
    <style>
        .task-tabs .task-tab-link {
            background-color: transparent !important;
            color: #ae0a46 !important;
            border: 1px solid #ae0a46 !important;
            padding: 10px 50px;
            border-radius: 4px;
        }

        .task-tabs .nav-link.active {
            background-color: #ae0a46 !important;
            color: #fff !important;
            border: 1px solid #ae0a46 !important;
            border-color: transparent !important;
            border-radius: 4px;

        }

        .nav-tabs .nav-link:hover {
            color: #ae0a46 !important;
            background-color: #fff !important;
            border: 1px solid #ae0a46 !important;
            border-radius: 4px;
        }

        .custom-cards {
            background-color: #f2f3ff;
            height: 10rem;
        }

        thead {
            background-color: transparent !important;
        }

        .time-left-count {
            padding: 5px;
            background: white;
            border-radius: 4px;
        }

        .expensive-font {
            font-family: "Bebas Neue", sans-serif;
            font-weight: 400;
            font-size: 45px;
        }

        .expensive-font-number {
            font-family: 'Bebas Neue';
            font-size: 50px;
            font-weight: 400;
        }

        .custom-btn-project {
            background-color: #ae0a46;
            color: #fff;
        }

        .counted-number {
            font-family: 'Bebas Neue';
            font-weight: 400;
            font-size: 50px;
            color: #ae0a46;
        }

        .title-text {
            font-family: 'Bebas Neue';
            font-weight: 400;
            font-size: 25px;
        }

        .time-count {
            background-color: #ae0a4675;
            padding: 5px;
            border-radius: 3px;
            color: white;
        }

        .hr-leave-select {
            width: 50%;
            margin: auto;
        }

        /* .td-gap{
                border-top: 3px solid white !important;
            } */
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i><span
                                class="ps-1">Home</span></a>
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
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 mx-auto">
                        <div>
                            <ul class="nav nav-tabs task-tabs d-flex justify-content-center border-0" id="myTab"
                                role="tablist">
                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link task-tab-link active" id="task-tab" data-bs-toggle="tab"
                                        data-bs-target="#task" type="button" role="tab" aria-controls="task"
                                        aria-selected="true">
                                        <i class="fa-solid fa-clipboard-list pe-2"></i> Task
                                    </button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link task-tab-link" id="project-tab" data-bs-toggle="tab"
                                        data-bs-target="#project" type="button" role="tab" aria-controls="project"
                                        aria-selected="false">
                                        <i class="fa-solid fa-clipboard-list pe-2"></i> Project
                                    </button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link task-tab-link" id="hr-tab" data-bs-toggle="tab"
                                        data-bs-target="#hr" type="button" role="tab" aria-controls="hr"
                                        aria-selected="false">
                                        <i class="fa-solid fa-clipboard-list pe-2"></i> HR
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 mx-auto">
                        <div class="tab-content mt-3">
                            <div class="tab-pane active" id="task" role="tabpanel" aria-labelledby="task-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card custom-cards">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h1 class="mb-0" style="font-size: 30px;">MY</h1>
                                                        <h1 class="mb-0 main_color" style="font-size: 45px;">KPI</h1>
                                                    </div>
                                                    <div>
                                                        <img class="" width="150px"
                                                            src="https://i.ibb.co/xzpPT9Y/KPI-Illustration.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <a href="">
                                                        <i class="fa-solid fa-arrow-up-right-from-square main_color"></i>
                                                    </a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-2">
                                                    <div>
                                                        <h1>Total KPI</h1>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0 pb-0 pe-3">Rating</p>
                                                            <div class="d-flex">
                                                                <i class="fa-solid fa-star pe-1 text-yellow"></i>
                                                                <i class="fa-solid fa-star pe-1 text-yellow"></i>
                                                                <i class="fa-solid fa-star pe-1 text-yellow"></i>
                                                                <i class="fa-solid fa-star pe-1 text-yellow"></i>
                                                                <i class="fa-regular fa-star text-yellow"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h1 class="mb-0 main_color expensive-font">80%</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards">
                                            <div class="card-body">
                                                <div class="row pt-2">
                                                    <div class="col-lg-4">
                                                        <div class="card text-center mb-0 py-0">
                                                            <p class="mb-0 pt-1">Total</p>
                                                            <h1 class="pb-0 mb-0 main_color expensive-font-number">05</h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card text-center mb-0 py-0">
                                                            <p class="mb-0 pt-1">Pending</p>
                                                            <h1 class="pb-0 mb-0 main_color expensive-font-number">08</h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card text-center mb-0 py-0">
                                                            <p class="mb-0 pt-1">Completed</p>
                                                            <h1 class="pb-0 mb-0 main_color expensive-font-number">04</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards">
                                            <div class="card-body">
                                                <div class="row pt-2">
                                                    <div class="col-lg-4">
                                                        <div class="card text-center mb-0 py-0">
                                                            <p class="mb-0 pt-1">Cruisial</p>
                                                            <h1 class="pb-0 mb-0 expensive-font-number main_color">01</h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card text-center mb-0 py-0">
                                                            <p class="mb-0 pt-1">Review</p>
                                                            <h1 class="pb-0 mb-0 expensive-font-number main_color">06</h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card text-center mb-0 py-0">
                                                            <p class="mb-0 pt-1">Extend</p>
                                                            <h1 class="pb-0 mb-0 expensive-font-number main_color">00</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card border-0 shadow-sm">
                                                    <div class="card-body p-0">
                                                        <div
                                                            class="table-responsive d-flex justify-content-center rounded-2">
                                                            <table class="table mb-0 border-0 table-border table-striped"
                                                                style="background-color: #f2f3ff !important;">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th class="text-start">Task Name</th>
                                                                        <th class="">Duration</th>
                                                                        <th class="">Total Time</th>
                                                                        <th class="">Time Left</th>
                                                                        <th class="">Status</th>
                                                                        <th class="">Rating</th>
                                                                        <th class="">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="align-items-center">
                                                                    <tr>
                                                                        <td>
                                                                            <p class="mb-0 d-flex align-items-center ps-3">
                                                                                <span>
                                                                                    <i
                                                                                        class="fa-solid fa-people-arrows task-icons pe-2 main_color"></i>
                                                                                </span>
                                                                                Complete The User Dashboard Under 3 Days
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex justify-content-center align-items-center">
                                                                                <p
                                                                                    class="mb-0 d-flex justify-content-center align-items-center main_color">
                                                                                    <span
                                                                                        class="task-calander p-1 px-2 rounded-1">
                                                                                        <i
                                                                                            class="fa-solid fa-calendar-days pe-2"></i>
                                                                                        25/02/2024
                                                                                    </span>
                                                                                    <span class="text-muted ps-1 pe-1"> -
                                                                                    </span>
                                                                                    <span
                                                                                        class="task-calander p-1 px-2 rounded-1">
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
                                                                                    <p class="mb-0 ps-1 pe-1">:</p>
                                                                                </div>
                                                                                <div class="d-flex align-items-center">
                                                                                    <p class="mb-0 time-left-count">10</p>
                                                                                    <p class="mb-0 ps-1 pe-1">:</p>
                                                                                </div>
                                                                                <div class="d-flex align-items-center">
                                                                                    <p class="mb-0 time-left-count">25</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-0 text-center">
                                                                                <span class="">Process</span>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-0 text-center">
                                                                                <i
                                                                                    class="fa-solid fa-star text-yellow"></i>
                                                                                <i
                                                                                    class="fa-solid fa-star text-yellow"></i>
                                                                                <i
                                                                                    class="fa-regular fa-star text-yellow"></i>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex justify-content-center">
                                                                                <a href=""><i
                                                                                        class="fa-solid fa-clipboard-check task-icons pe-2 main_color"></i></a>
                                                                                <a href=""><i
                                                                                        class="fa-solid fa-ranking-star task-icons pe-2 main_color"></i></a>
                                                                                <a href=""><i
                                                                                        class="fa-solid fa-business-time task-icons main_color"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <p class="mb-0 d-flex align-items-center ps-3">
                                                                                <span><i
                                                                                        class="fa-solid fa-check task-icons pe-2 main_color"></i></span>
                                                                                Complete The User Dashboard Under 3 Days
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex justify-content-center align-items-center">
                                                                                <p
                                                                                    class="mb-0 d-flex justify-content-center align-items-center main_color">
                                                                                    <span
                                                                                        class="task-calander p-1 px-2 rounded-1">
                                                                                        <i
                                                                                            class="fa-solid fa-calendar-days pe-2"></i>
                                                                                        25/02/2024
                                                                                    </span>
                                                                                    <span class="text-black ps-1 pe-1">
                                                                                        -
                                                                                    </span>
                                                                                    <span
                                                                                        class="task-calander p-1 px-2 rounded-1">
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
                                                                                    <p class="mb-0 ps-1 pe-1">:</p>
                                                                                </div>
                                                                                <div class="d-flex align-items-center">
                                                                                    <p class="mb-0 time-left-count">10</p>
                                                                                    <p class="mb-0 ps-1 pe-1">:</p>
                                                                                </div>
                                                                                <div class="d-flex align-items-center">
                                                                                    <p class="mb-0 time-left-count">25</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-0 text-center">
                                                                                <span class="">Done</span>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-0 text-center">
                                                                                <i
                                                                                    class="fa-solid fa-star text-yellow"></i>
                                                                                <i
                                                                                    class="fa-solid fa-star text-yellow"></i>
                                                                                <i
                                                                                    class="fa-regular fa-star text-yellow"></i>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex justify-content-center">
                                                                                <a href=""><i
                                                                                        class="fa-solid fa-clipboard-check task-icons pe-2 main_color"></i></a>
                                                                                <a href=""><i
                                                                                        class="fa-solid fa-ranking-star task-icons pe-2 main_color"></i></a>
                                                                                <a href=""><i
                                                                                        class="fa-solid fa-business-time task-icons main_color"></i></a>
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
                            <div class="tab-pane" id="project" role="tabpanel" aria-labelledby="project-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-3">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div>
                                                        <h2 class="mb-0 title-text">Month <span class="main_color">Wise
                                                                <br>
                                                                Project</span> Data</h2>
                                                        <div class="dropdown pt-1">
                                                            <button class="btn custom-btn-project dropdown-toggle"
                                                                type="button" id="dropdownMenuButton1"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Select Months
                                                            </button>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#">January</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">February</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">March</a></li>
                                                                <li><a class="dropdown-item" href="#">April</a></li>
                                                                <li><a class="dropdown-item" href="#">May</a></li>
                                                                <li><a class="dropdown-item" href="#">June</a></li>
                                                                <li><a class="dropdown-item" href="#">July</a></li>
                                                                <li><a class="dropdown-item" href="#">August</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">September</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">October</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">November</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">December</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div>
                                                        <img class="img-fluid"
                                                            src="https://i.ibb.co/xJ8znC4/Project-data-illustration.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h2 class="mb-0 title-text">Total Project</h2>
                                                <div>
                                                    <div class="card mb-0">
                                                        <div class="card-body mb-0">
                                                            <h1 class="mb-0 counted-number"> 12</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h2 class="mb-0 title-text">Pending Project</h2>
                                                <div>
                                                    <div class="card mb-0">
                                                        <div class="card-body mb-0">
                                                            <h1 class="mb-0 counted-number"> 12</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h2 class="mb-0 title-text">Completed Project</h2>
                                                <div>
                                                    <div class="card mb-0">
                                                        <div class="card-body mb-0">
                                                            <h1 class="mb-0 counted-number"> 12</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="pt-4">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs task-tabs d-flex justify-content-center border-0"
                                                id="myTab" role="tablist">
                                                <li class="nav-item me-2" role="presentation">
                                                    <button class="nav-link task-tab-link active" id="operations-tab"
                                                        data-bs-toggle="tab" data-bs-target="#operations" type="button"
                                                        role="tab" aria-controls="operations" aria-selected="true">
                                                        Operations
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link task-tab-link" id="business-tab"
                                                        data-bs-toggle="tab" data-bs-target="#business" type="button"
                                                        role="tab" aria-controls="business" aria-selected="false">
                                                        Business
                                                    </button>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="operations" role="tabpanel"
                                                    aria-labelledby="operations-tab">
                                                    <div class="row">
                                                        <div class="col-lg-12 pt-3">
                                                            <h3 class="text-center pt-4">Operations</h3>
                                                            <div class="table-responsive">
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderd table-striped">
                                                                        <thead
                                                                            style="background-color: #f2f3ff !important;">
                                                                            <tr class="text-center">
                                                                                <th scope="col">Sl</th>
                                                                                <th scope="col">Project Name</th>
                                                                                <th scope="col">Description</th>
                                                                                <th scope="col">Duration</th>
                                                                                <th scope="col">Total Time</th>
                                                                                <th scope="col">Total Left</th>
                                                                                <th scope="col">Status</th>
                                                                                <th scope="col">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="text-center">
                                                                                <td>1</td>
                                                                                <td>Complete Dashboard</td>
                                                                                <td>Lorem ipsum dolor sit amet.</td>
                                                                                <td>11/05/2024-23/06/2024</td>
                                                                                <td>23D:2H:23M</td>
                                                                                <td>
                                                                                    <div>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">05</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>Done</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-clipboard-check task-icons pe-2 main_color"></i></a>
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-ranking-star task-icons pe-2 main_color"></i></a>
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-business-time task-icons main_color"></i></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="text-center">
                                                                                <td>2</td>
                                                                                <td>Complete Dashboard</td>
                                                                                <td>Lorem ipsum dolor sit amet.</td>
                                                                                <td>11/05/2024-23/06/2024</td>
                                                                                <td>23D:2H:23M</td>
                                                                                <td>
                                                                                    <div>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">05</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>Done</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-clipboard-check task-icons pe-2 main_color"></i></a>
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-ranking-star task-icons pe-2 main_color"></i></a>
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-business-time task-icons main_color"></i></a>
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
                                                <div class="tab-pane" id="business" role="tabpanel"
                                                    aria-labelledby="business-tab">
                                                    <div class="row">
                                                        <div class="col-lg-12 pt-3">
                                                            <h3 class="text-center pt-4">Business</h3>
                                                            <div class="table-responsive">
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderd table-striped">
                                                                        <thead
                                                                            style="background-color: #f2f3ff !important;">
                                                                            <tr class="text-center">
                                                                                <th scope="col">Sl</th>
                                                                                <th scope="col">Project Name</th>
                                                                                <th scope="col">Description</th>
                                                                                <th scope="col">Duration</th>
                                                                                <th scope="col">Total Time</th>
                                                                                <th scope="col">Total Left</th>
                                                                                <th scope="col">Status</th>
                                                                                <th scope="col">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="text-center">
                                                                                <td>1</td>
                                                                                <td>Complete Dashboard</td>
                                                                                <td>Lorem ipsum dolor sit amet.</td>
                                                                                <td>11/05/2024-23/06/2024</td>
                                                                                <td>23D:2H:23M</td>
                                                                                <td>
                                                                                    <div>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">05</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>Done</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-clipboard-check task-icons pe-2 main_color"></i></a>
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-ranking-star task-icons pe-2 main_color"></i></a>
                                                                                        <a href=""><i
                                                                                                class="fa-solid fa-business-time task-icons main_color"></i></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="text-center">
                                                                                <td>1</td>
                                                                                <td>Complete Dashboard</td>
                                                                                <td>Lorem ipsum dolor sit amet.</td>
                                                                                <td>11/05/2024-23/06/2024</td>
                                                                                <td>23D:2H:23M</td>
                                                                                <td>
                                                                                    <div>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">07</span>
                                                                                        <span>:</span>
                                                                                        <span class="time-count">05</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>Done</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <a href="">
                                                                                            <i
                                                                                                class="fa-solid fa-clipboard-check task-icons pe-2 main_color"></i></a>
                                                                                        <a href="">
                                                                                            <i
                                                                                                class="fa-solid fa-ranking-star task-icons pe-2 main_color"></i></a>
                                                                                        <a href="">
                                                                                            <i
                                                                                                class="fa-solid fa-business-time task-icons main_color"></i></a>
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
                            <div class="tab-pane" id="hr" role="tabpanel" aria-labelledby="hr-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-4 px-5">
                                            <div class="row align-items-center">
                                                <div class="col-lg-8">
                                                    <div>
                                                        <h2 class="mb-0 title-text" style="font-size: 70px">
                                                            HR <span class="main_color">KPI</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div>
                                                        <img width="95px"
                                                            src="https://i.ibb.co/yhTLGdJ/Asset-2-5x-8.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-4 px-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="pt-4">
                                                    <h2 class="mb-0 title-text" style="line-height: 0">TOTAL HR KPI</h2>
                                                    <h1 class="mb-0 counted-number">50%</h1>
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-arrow-trend-up text-info pt-2"
                                                        style="font-size: 85px;font-weight: 300;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-4 px-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="pt-4">
                                                    <h2 class="mb-0 title-text" style="line-height: 0">ATTENDENCE</h2>
                                                    <h1 class="mb-0 counted-number">20%</h1>
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-arrow-trend-up text-danger pt-2"
                                                        style="font-size: 85px;font-weight: 300;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card custom-cards p-4 px-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="pt-4">
                                                    <h2 class="mb-0 title-text" style="line-height: 0">LEAVE</h2>
                                                    <h1 class="mb-0 counted-number">30%</h1>
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-arrow-trend-up text-success pt-2"
                                                        style="font-size: 85px;font-weight: 300;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card border-0 shadow-sm">
                                                    <div class="card-body p-0">
                                                        <div
                                                            class="table-responsive d-flex justify-content-center rounded-2">
                                                            <table class="table mb-0 border-0 table-border table-striped"
                                                                style="background-color: #f2f3ff !important;">
                                                                <thead style="background-color: #eee !important;">
                                                                    <tr class="text-center">
                                                                        <th class="text-start">Attendence</th>
                                                                        <th class="">January</th>
                                                                        <th class="">February</th>
                                                                        <th class="">March</th>
                                                                        <th class="">April</th>
                                                                        <th class="">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="align-items-center">
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Daily Attendence</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Unauthorized</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Too Late</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Late Attendance</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot style=" background: #eee;">
                                                                    <tr class="text-center">
                                                                        <th class="text-start">Out Of 100%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="main_color">0.00%</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card border-0 shadow-sm">
                                                    <div class="card-body p-0">
                                                        <div
                                                            class="table-responsive d-flex justify-content-center rounded-2">
                                                            <table class="table mb-0 border-0 table-border table-striped"
                                                                style="background-color: #f2f3ff !important;">
                                                                <thead style="background-color: #eee !important;">
                                                                    <tr class="text-center">
                                                                        <th class="text-start">Leave</th>
                                                                        <th class="">January</th>
                                                                        <th class="">February</th>
                                                                        <th class="">March</th>
                                                                        <th class="">April</th>
                                                                        <th class="">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="align-items-center">
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Daily Leave</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Unauthorized</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Too Late</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-gap">
                                                                            <p class="mb-0 ps-2">Late Attendance</p>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <select
                                                                                class="form-select border-0 hr-leave-select"
                                                                                aria-label="Default select example">
                                                                                <option selected>0</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="td-gap">
                                                                            <p class="text-center mb-0">100%</p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot style=" background: #eee;">
                                                                    <tr class="text-center">
                                                                        <th class="text-start">Out Of 100%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="">0.00%</th>
                                                                        <th class="main_color">0.00%</th>
                                                                    </tr>
                                                                </tfoot>
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

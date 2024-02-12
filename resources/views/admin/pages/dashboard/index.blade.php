@extends('admin.master')
@section('content')
    <style>
        td {
            font-size: 12px;
        }
    </style>
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">
            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="d-flex justify-content-between align-items-center">

                    {{-- Page Destination/ BreadCrumb --}}
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex px-2">
                            <div class="breadcrumb py-2">
                                <!-- Home breadcrumb link -->
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            </div>
                            <!-- Collapsible breadcrumb for smaller screens -->
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>

                    {{-- Inner Page Tab --}}
                    <div>
                        <!-- Leave Dashboard link -->
                        <a href="{{ route('leave-application.show', Auth::user()->id) }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Leave Dashboard</span>
                            </div>
                        </a>

                        <!-- Notice Board link -->
                        <a href="{{ route('noticeboard') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Notice Board</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>


            <!-- page header -->
            <!-- Content area -->
            <div class="content pt-2">
                <div class="row">
                    <!-- User Info Card -->
                    <div class="col-lg-3">
                        <div class="card rounded-1 border-0"
                            style="background: url(https://i.ibb.co/0rmmhtP/Asset-2-5x-8.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <!-- User Greeting and Name -->
                                    <p class="m-0 p-0 text-white">Hello</p>
                                    <h5 class="m-0 p-0 text-white">{{ Auth::user()->name }}</h5>
                                    <h5 class="m-0 p-0 text-white">
                                        {{ !empty($attendanceToday['user_name']) ? $attendanceToday['user_name'] : 'Not Defined' }}
                                    </h5>
                                </div>
                                <div>
                                    <!-- User Avatar -->
                                    <img width="50px" height="50px" class="img-fluid"
                                        src="https://i.ibb.co/kxxT0LC/4450752.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Today's In Office Card -->
                    <div class="col-lg-3">
                        <div class="card rounded-1 border-0"
                            style="background: url(https://i.ibb.co/BtLj7TV/Asset-6-5x-8.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="m-0 p-0 text-white">Today's In Office</p>
                                    <i class="fa-solid fa-clock badge-icons"></i>
                                </div>
                                <div>
                                    <!-- Live Clock -->
                                    <h5 class="text-white fw-bold mb-0 pb-2" id="live-clock" style="font-size: 24px">
                                        <span id="live-clock-hours">0</span> H:
                                        <span id="live-clock-minutes">0</span> M:
                                        <span id="live-clock-seconds">0</span> S
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Today's Check In Card -->
                    <div class="col-lg-3">
                        <div class="card rounded-1 border-0"
                            style="background: url(https://i.ibb.co/WNCWFh1/Asset-3-5x-8.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="m-0 p-0 text-white">Today's Check In</p>
                                    <i class="fa-solid fa-building-circle-check badge-icons"></i>
                                </div>
                                <div>
                                    <!-- Check In Time -->
                                    <h5 class="text-white mb-0 pb-2" style="font-size: 24px">
                                        {{ !empty($attendanceToday['check_in']) ? $attendanceToday['check_in'] : 'Absent' }}
                                        AM</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Today's Check Out Card -->
                    <div class="col-lg-3">
                        <div class="card rounded-1 border-0"
                            style="background: url(https://i.ibb.co/jG5kKSf/Asset-5-5x-8.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="m-0 p-0 text-white">Today's Check Out</p>
                                    <i class="fa-solid fa-house-circle-xmark badge-icons"></i>
                                </div>
                                <div>
                                    <!-- Check Out Time -->
                                    <h5 class="text-white mb-0 pb-2" style="font-size: 24px">
                                        {{ !empty($attendanceToday['check_out']) ? $attendanceToday['check_out'] : 'Absent' }}
                                        PM</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">
                                    Running Month
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    Total Late Entry
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                                    type="button" role="tab" aria-controls="messages" aria-selected="false">
                                    Last Month
                                </button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card rounded-0">
                                    <div class="card-body p-1">
                                        <div class="table-responsive">
                                            <table class="table employee table-striped table-hover text-center"
                                                style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Check In</th>
                                                        <th scope="col">Check Out</th>
                                                        <th scope="col">Comments</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($attendanceThisMonths)
                                                        @foreach ($attendanceThisMonths as $attendanceThisMonth)
                                                            <tr>
                                                                <td>{{ $attendanceThisMonth['date'] }}</td>
                                                                @if ($attendanceThisMonth['check_in'] === 'N/A' && isset($attendanceThisMonth['absent_note']))
                                                                    <td colspan="3">
                                                                        @if ($attendanceThisMonth['absent_note'] === 'Friday')
                                                                            <span class="text-warning fw-bold">
                                                                                {{ $attendanceThisMonth['absent_note'] }}
                                                                            </span>
                                                                        @else
                                                                            <span class="text-danger fw-bold">
                                                                                {{ $attendanceThisMonth['absent_note'] }}
                                                                            </span>
                                                                        @endif
                                                                    </td>
                                                                @else
                                                                    <td>{{ $attendanceThisMonth['check_in'] !== 'N/A' ? $attendanceThisMonth['check_in'] : 'N/A' }}
                                                                    </td>
                                                                    <td>{{ $attendanceThisMonth['check_out'] !== 'N/A' ? $attendanceThisMonth['check_out'] : 'N/A' }}
                                                                    </td>
                                                                    <td>
                                                                        @if (isset($attendanceThisMonth['check_in']) && $attendanceThisMonth['check_in'] !== 'N/A')
                                                                            @if (Carbon\Carbon::parse($attendanceThisMonth['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                                                    Carbon\Carbon::parse($attendanceThisMonth['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                                                <span class="text-danger fw-bold">Late
                                                                                    (L)
                                                                                </span>
                                                                            @elseif (Carbon\Carbon::parse($attendanceThisMonth['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                                                <span class="text-danger fw-bold">Half Day
                                                                                    (LL)</span>
                                                                            @endif
                                                                        @endif
                                                                    </td>
                                                                @endif
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="m-0 p-1 d-flex justify-content-between align-items-center w-100 px-3"
                                        style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">
                                        <span>Total Late Entry</span>
                                        <span>{{ !empty(count($lateCounts)) ? count($lateCounts) : 0 }}</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table employee table-striped table-hover text-center">
                                        <thead class="table_header_bg">
                                            <!--begin::Table row-->
                                            <tr class="text-center">
                                                <th width="20%">Date</th>
                                                <th width="20%">Check In</th>
                                                <th width="20%">Check Out</th>
                                                <th width="20%">Comments</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <tbody class="text-center">
                                            @if ($lateCounts)
                                                @foreach ($lateCounts as $lateCount)
                                                    <tr class="odd">
                                                        <td>{{ $lateCount['date'] }}</td>
                                                        <td>{{ $lateCount['check_in'] }}</td>
                                                        <td>{{ $lateCount['check_out'] }}</td>
                                                        <td>
                                                            @if (Carbon\Carbon::parse($lateCount['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                                    Carbon\Carbon::parse($lateCount['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                                <span class="mb-0 text-danger fw-bold">Late (L)</span>
                                                            @endif

                                                            @if (Carbon\Carbon::parse($lateCount['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                                <span class="mb-0 text-danger fw-bold">Half Day (LL)</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                <div class="table-responsive">
                                    <table class="table employee table-striped table-hover text-center">
                                        <thead class="table_header_bg">
                                            <!--begin::Table row-->
                                            <tr class="text-center">
                                                <th width="20%">Date</th>
                                                <th width="20%">Check In</th>
                                                <th width="20%">Check Out</th>
                                                <th width="20%">Comments</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <tbody class="text-center">
                                            @if ($attendanceLastMonths)
                                                @foreach ($attendanceLastMonths as $attendanceLastMonth)
                                                    <tr class="odd">
                                                        <td>{{ $attendanceLastMonth['date'] }}</td>
                                                        <td>{{ $attendanceLastMonth['check_in'] }}</td>
                                                        <td>{{ $attendanceLastMonth['check_out'] }}</td>
                                                        <td>
                                                            @if (Carbon\Carbon::parse($attendanceLastMonth['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                                    Carbon\Carbon::parse($attendanceLastMonth['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                                <span class="text-danger fw-bold">L</span>
                                                            @endif

                                                            @if (Carbon\Carbon::parse($attendanceLastMonth['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                                <span class="text-danger fw-bold">Half Day (LL)</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @include('admin.partials.leave_modal')
            @include('admin.partials.attendance_modals') --}}
            <!-- content area -->
        </div>
        <!-- inner content -->
    </div>
    <!-- content wrapper area -->
@endsection

@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.running-month').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 5,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2],
                    }],
                });
            });
        </script>
        <script>
            // Assuming $attendanceToday['check_in'] is a string in the format "HH:mm:ss"
            let checkInTimeString = "{{ isset($attendanceToday['check_in']) ? $attendanceToday['check_in'] : '' }}";
            if (checkInTimeString !== '') {
                let [hours, minutes, seconds] = checkInTimeString.split(':');

                let checkInTime = new Date();
                checkInTime.setHours(parseInt(hours, 10));
                checkInTime.setMinutes(parseInt(minutes, 10));
                checkInTime.setSeconds(parseInt(seconds, 10));

                function updateLiveClock() {
                    let currentTime = new Date();
                    let timeDifference = currentTime - checkInTime;

                    let hours = Math.floor(timeDifference / (1000 * 60 * 60));
                    let minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    // alert(hours);
                    document.getElementById('live-clock-hours').innerText = hours;
                    document.getElementById('live-clock-minutes').innerText = minutes;
                    document.getElementById('live-clock-seconds').innerText = seconds;
                }

                setInterval(updateLiveClock, 1000);
            } else {
                // Display "Absent Today" message when check_in is null
                document.getElementById('live-clock').innerText = 'Absent Today';
            }
        </script>
    @endpush
@endonce

@extends('admin.master')
@section('content')
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
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            </div>
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                    {{-- Inner Page Tab --}}
                    <div>
                        <a href="{{ route('leave-application.show', Auth::user()->id) }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Leave Dashboard</span>
                            </div>
                        </a>
                        <a href="{{ route('noticeboard') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Notice Board</span>
                            </div>
                        </a>
                        {{-- <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                <span>Attendance</span>
                            </div>
                        </a> --}}
                    </div>
                    <!-- Basic tabs -->
                </div>
            </div>

            <!-- /page header -->
            <!-- Content area -->
            <div class="content pt-2">
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header py-2">
                                <h5 class="text-center mb-0">Hello, <span
                                        class="main_color fw-bold">{{ Auth::user()->name }}</span></h5>
                            </div>
                            <div class="card-body px-1 py-1">
                                <div class="mb-3">
                                    <div class="row row-tile g-0">
                                        <div class="col">
                                            <button type="button"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-top-start py-2 h-125px">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <i class="fa-solid fa-clock fs-1 text-primary me-3"></i>
                                                    </div>
                                                    <div>
                                                        <span class="text-gray-700 fw-bolder d-block fs-5 lh-1 ls-n1 mb-1">
                                                            <div id="live-clock">
                                                                <span id="live-clock-hours">0</span> hours
                                                                <span id="live-clock-minutes">0</span> minutes
                                                                <span id="live-clock-seconds">0</span> seconds
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                Today in Office
                                            </button>

                                            <button type="button" data-bs-toggle="modal" data-bs-target="#lateCount"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-start py-2 h-125px">
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                                        <div class="symbol symbol-30px">
                                                            <span class="symbol-label">
                                                                <img class="h-25px w-25px"
                                                                    src="{{ asset('backend/images/Late Time.png') }}"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="#"
                                                                class="card-title fw-bolder text-danger text-hover-primary fs-7"
                                                                data-bs-toggle="modal" data-bs-target="#lateCount">
                                                                <span
                                                                    class="text-danger fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">
                                                                    {{ !empty(count($lateCounts)) ? count($lateCounts) : 0 }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="m-0">
                                                        <a href="#"
                                                            class="card-title fw-bolder text-danger text-hover-primary fs-7"
                                                            data-bs-toggle="modal" data-bs-target="#lateCount">
                                                            <span class="text-gray-500 fw-semibold fs-7">Late Count(This
                                                                Month)</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div class="col">
                                            <button type="button"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-top-end py-2 h-125px">
                                                @if (!empty($attendanceToday['check_in']))
                                                
                                                    <div class="m-0 mb-1">
                                                        <span
                                                            class="text-success fw-bold d-block fs-1 lh-1 ls-n1 mb-1">{{ !empty($attendanceToday['check_in']) ? $attendanceToday['check_in'] : 'Absent' }}</span>

                                                        <span class="text-success fw-semibold fs-5">Entry Time</span>
                                                    </div>
                                                    <div class="m-0">
                                                        <span
                                                            class="text-gray-500 fw-bold d-block fs-6 lh-1 ls-n1 mb-1">{{ !empty($attendanceToday['check_out']) ? $attendanceToday['check_out'] : 'Absent' }}</span>

                                                        <span class="text-gray-500 fw-semibold fs-8">Check-Out</span>
                                                    </div>
                                                @else
                                                <div class="m-0 mb-1">
                                                    <span
                                                        class="text-danger fw-bolder d-block fs-1 lh-1 ls-n1 mb-1">Absent Today</span>
                                                </div>
                                                @endif
                                            </button>

                                            <button type="button"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-end py-2 h-125px">
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <div class="symbol symbol-30px me-5 mb-0">
                                                        <div>
                                                            <a href="#"
                                                                class="card-title fw-bolder main_color text-hover-primary fs-8"
                                                                data-bs-toggle="modal" data-bs-target="#thisMonth">
                                                                <span class="text-start">This Month</span> <span
                                                                    class="ms-3"><i class="fas fa-arrow-right"></i></span>
                                                            </a>
                                                        </div>
                                                        <a href="#"
                                                            class="card-title fw-bolder main_color text-hover-primary fs-8"
                                                            data-bs-toggle="modal" data-bs-target="#lastMonth">
                                                            <span class="">Last Month</span> <span class="ms-3"><i
                                                                    class="fas fa-arrow-right"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="m-0">
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"></span>

                                                        <span class="text-gray-500 fw-semibold fs-6">Attendance List</span>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.partials.leave_modal')
            @include('admin.partials.attendance_modals')
            <!-- /content area -->
        </div>
        <!-- /inner content -->
    </div>
    <!-- /content wrapper area -->
@endsection

@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                $("#accordion").click(function() {
                    $('.expandable').toggle("slide");
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

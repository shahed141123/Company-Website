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
                                <span>Leave Application</span>
                            </div>
                        </a>
                        <a href="{{ route('noticeboard') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Notice Board</span>
                            </div>
                        </a>
                        <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                <span>Attendance</span>
                            </div>
                        </a>
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
                                <h5 class="text-center mb-0">Hello, <span class="main_color fw-bold">{{Auth::user()->name}}</span></h5>
                            </div>
                            <div class="card-body px-1 py-1">
                                <div class="mb-3">
                                    <div class="row row-tile g-0">
                                        <div class="col">
                                            <button type="button"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-top-start py-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                Today in Office
                                            </button>

                                            <button type="button"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-start py-2">
                                                <i class="ph-twitter-logo text-info ph-2x mb-1"></i>
                                                Twitter
                                            </button>
                                        </div>

                                        <div class="col">
                                            <button type="button"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-top-end py-2">
                                                <i class="ph-dribbble-logo text-pink ph-2x mb-1"></i>
                                                Dribbble
                                            </button>

                                            <button type="button"
                                                class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-end py-2">
                                                <i class="ph-spotify-logo text-success ph-2x mb-1"></i>
                                                Spotify
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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

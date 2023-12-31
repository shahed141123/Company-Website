@extends('admin.master')
@section('content')
    <style>
        .accordion {
            --accordion-border-width: 0px !important;
        }

        .section-border {
            border-bottom: 0.5px solid #24739763;
        }
    </style>
    <div class="content-wrapper">
        <div class="content p-0">


            <!-- Page header -->
            <section class="shadow-sm">
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
                        <a href="{{ route('employee.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Employees</span>
                            </div>

                        </a>
                        <a href="{{ route('leaveApplications') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Leave Applications</span>
                            </div>

                        </a>
                        <a href="{{ route('job.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Job Post</span>
                            </div>

                        </a>
                        <a href="{{ route('job.regiserUser') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Job Applier's List</span>
                            </div>

                        </a>
                        {{-- <a href="{{ route('marketing-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                                    <span> Business</span>
                                </div>
                            </a> --}}
                    </div>
            </section>
            <!-- /page header -->

            <!-- Sales Chain Page -->
            <div class="content pt-2">
                <div class="container-fluid ">
                    <div class="col-lg-12">
                        <h4 class="mb-3 text-center page_titles w-25">Welcome to HRM [Admin]
                        </h4>
                    </div>
                    <!-- Row End -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-body p-4 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="ph-users-three ph-2x text-success me-3"></i>

                                    <a href="{{ route('employee.index') }}">
                                        <div class="flex-fill text-end">
                                            <h1 class="mb-0 main_color">{{ App\Models\User::count() }}</h1>
                                            <span class="fw-bold">Total Employees</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-body p-4 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="ph-users-three ph-2x text-success me-3"></i>

                                    <a href="{{ route('employee.index') }}">
                                        <div class="flex-fill text-end">
                                            <h1 class="mb-0 main_color">{{ count($attendanceData) }}</h1>
                                            <span class="fw-bold">Total Present Today</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 border-0 shadow-lg p-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="p-0 m-0 fw-bold main_color">Employees </p>
                                        <p class="p-0 m-0">
                                            <a href="" class="btn btn-info text-white">Add</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12 pt-2">
                                        <table class="table datatable-scroll-y data_event mt-2 mb-4 border pt-2"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th width="35%">Name</th>
                                                    <th width="20%">Job Status</th>
                                                    <th width="30%">Department</th>
                                                    <th width="15%">Form</th>
                                                    {{-- <th>Comment</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $employee)
                                                    <tr>
                                                        <td>
                                                            {{ $employee->name }}
                                                        </td>
                                                        <td> Not Yet</td>
                                                        <td>
                                                            @if (is_array(json_decode($employee->department)))
                                                                @foreach (json_decode($employee->department) as $department)
                                                                    <span
                                                                        class="badge bg-success">{{ ucfirst($department) }}</span>
                                                                @endforeach
                                                            @else
                                                                <span
                                                                    class="badge bg-success">{{ ucfirst($employee->department) }}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a class="" href="{{ route('employeement.create') }}">
                                                                <i class="site_color icon-plus-circle2 mt-1"></i>
                                                            </a>
                                                            <a class=""
                                                                href="{{ route('salary-form.show', $employee->id) }}"
                                                                title="Salary Form">
                                                                <i class="site_color ph-notepad mt-1"></i>
                                                            </a>
                                                            <a class=""
                                                                href="{{ route('evaluation.show', $employee->id) }}"
                                                                title="Evaluation Form">
                                                                <i class="site_color icon-pencil mt-1"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 border-0 shadow-lg p-2">
                                    <p class="p-0 m-0 fw-bold main_color">Today's Attendance</p>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row my-2">
                                                <div class="col-lg-4 col-sm-12">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center content-info p-1">
                                                        <div class="select-mark-primary"></div>
                                                        <div class="select-titles text-start">Present</div>
                                                        <div class="mark-ammount">{{ count($attendanceData) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center content-info p-1">
                                                        <div class="select-mark-danger"></div>
                                                        <div class="select-titles text-start">Absent</div>
                                                        <div class="mark-ammount">{{ 11 - count($attendanceData) }}</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <table class="table datatable-scroll-y data_user mt-2 mb-4 border text-center"
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
                                                        <td><span
                                                                class="border-bottom-link">{{ $times['user_name'] }}</span>
                                                        </td>
                                                        <td>
                                                            @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('09:05:00'))
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    <h5 class="text-danger fw-bold me-3">
                                                                        {{ $times['check_in'] }}</h5>
                                                                    @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                                            Carbon\Carbon::parse($times['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                                        <h5 class="text-danger fw-bold">L</h5>
                                                                    @endif

                                                                    @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                                        <h5 class="text-danger fw-bold">Half Day (LL)</h5>
                                                                    @endif
                                                                </div>
                                                            @else
                                                                <span
                                                                    class="border-bottom-link">{{ $times['check_in'] }}</span>
                                                            @endif

                                                        </td>
                                                        <td><span
                                                                class="border-bottom-link">{{ $times['check_out'] }}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 border-0 shadow-lg p-2">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <h5 class="p-0 m-0 fw-bold main_color">All Events of this Month</h5>
                                        <p class="p-0 m-0">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#eventAdd"
                                                class="btn btn-info text-white px-2 py-1">Add</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-lg-5">
                                            <label for="category_filter">Filter by Category:</label>
                                            <select class="form-control select category_filter" id="category_filter">
                                                <option value="">All</option>
                                                @foreach ($event_categorys as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
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
                                                            <td>{{ $event->eventCategory->name ?? 'No Category' }}</td>
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

                </div>
            </div>
            <!-- Sales Chain Page -->

            @include('admin.pages.event.partial.modals')


        </div>
    </div>
@endsection
@push('scripts')
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

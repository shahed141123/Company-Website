@extends('admin.master')
@section('content')
    <style>
        .emplpyee-card {
            border: 1px;
            border-style: dashed;
            border-color: #247297;
            padding: 10px;
        }

        .bell-icon {
            padding: 10px;
            background-color: #247297;
            color: white;
        }

        .action-icons {
            padding: 5px;
            background-color: #247297;
            color: white;
            border-radius: 50%
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
                    </div>
            </section>
            <!-- /page header -->

            <!-- Sales Chain Page -->
            <div class="content pt-2">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <h3 class="text-center w-50 mx-auto" style="color: #247297;"> Welcome to HRM [Admin]</h3>
                        </div>
                    </div>
                    <!-- Row End -->
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="m-0 p-1 text-center"
                                style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Employee Info
                            </h6>
                            <a href="{{ route('employee.index') }}">
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            {{-- Total Employee --}}
                                            <div class="emplpyee-card">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0"><i
                                                            class="fa-solid fa-user-group fs-1 main_color me-3"></i></h6>
                                                    <h6 class="main_color m-0">{{ App\Models\User::count() }}</h6>
                                                </div>
                                                <div class="pt-3">
                                                    <h6 class="text-muted m-0">Total Employees</h6>
                                                </div>
                                            </div>
                                            {{-- Total Employee Prosent --}}
                                            <div class="emplpyee-card">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0"><i
                                                            class="fa-solid fa-user-check fs-1 main_color me-3"></i></h6>
                                                    <h6 class="main_color m-0">{{ count($attendanceData) }}</h6>
                                                </div>
                                                <div class="pt-3">
                                                    <h6 class="text-muted m-0">Present Employees</h6>
                                                </div>
                                            </div>
                                            <div class="emplpyee-card">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0"><i
                                                            class="fa-solid fa-user-slash fs-1 main_color me-3"></i></h6>
                                                    <h6 class="main_color m-0">{{ 11 - count($attendanceData) }}</h6>
                                                </div>
                                                <div class="pt-3">
                                                    <h6 class="text-muted m-0">Absent Employees</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="m-0 p-1 text-center"
                                style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Leave
                                Notifications </h6>
                            <div class="card rounded-0">
                                <div class="card-body" style="height: 136px; overflow-x: hidden;">
                                    @if ($leave_applications->count() > 0)
                                        @foreach ($leave_applications as $leave_application)
                                            @if ($leave_application->status === 'pending')
                                                <div class="mb-2">
                                                    <a
                                                        href="{{ route('leave-application.edit', $leave_application->id) }}">
                                                        <div class="d-flex align-items-center">
                                                            <div><i class="fa-regular fa-bell me-2 bell-icon"></i></div>
                                                            <div>
                                                                <p class="mb-0 fs-7">{{ $leave_application->name }}
                                                                    <span class="text-black"> has applied for a
                                                                        leave.</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
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
                        <div class="col-lg-4">
                            <h6 class="m-0 p-1 text-center"
                                style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">All Events Of
                                This Month
                            </h6>
                            <div class="card rounded-0" style="height: 136px; overflow-x: hidden;">
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
                                                data-bs-target="#eventAdd" class="btn btn-info text-white px-2 py-1"><i
                                                    class="fa-solid fa-plus pe-2"></i>Add</a>
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
                        <div class="col-lg-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="todas-attendance-tab" data-bs-toggle="tab"
                                        data-bs-target="#todas-attendance" type="button" role="tab"
                                        aria-controls="todas-attendance" aria-selected="false">
                                        Today's Attendance
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="employee-tab" data-bs-toggle="tab"
                                        data-bs-target="#employee" type="button" role="tab"
                                        aria-controls="employee" aria-selected="false">
                                        Employees
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="all-events-tab" data-bs-toggle="tab"
                                        data-bs-target="#all-events" type="button" role="tab"
                                        aria-controls="all-events" aria-selected="true">
                                        All Events
                                    </button>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="todas-attendance" role="tabpanel"
                                    aria-labelledby="todas-attendance-tab">
                                    <div class="col-lg-6">
                                        <div class="card rounded-0">
                                            <div class="card-body p-0">
                                                <table class="table attendance table-striped table-hover" width="100%">
                                                    <thead class="text-center">
                                                        <td>User ID</td>
                                                        <td>User Name</td>
                                                        <td>Check-In Time</td>
                                                        <td>Check-Out Time</td>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($attendanceData as $userId => $times)
                                                            <tr class="text-center" class="clickable-row" onclick="window.location='{{ route('attendance.single', $userId) }}'">
                                                                <td><span class="">{{ $userId }}</span></td>
                                                                <td><span class="">{{ $times['user_name'] }}</span></td>
                                                                <td class="text-center">
                                                                    @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('09:05:00'))
                                                                        <div class="">
                                                                            <span class="text-danger">{{ $times['check_in'] }}</span>

                                                                            @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                                                    Carbon\Carbon::parse($times['check_in']) <Carbon\Carbon::parse('10:05:00'))
                                                                                <span class="text-danger"><i class="fa-regular fa-circle-xmark px-1"></i><span class="">(L)</span></span>
                                                                            @endif

                                                                            @if (Carbon\Carbon::parse($times['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                                                <span class="text-danger"><i class="fa-regular fa-circle-xmark px-1"></i>(LL)</span>
                                                                            @endif
                                                                        </div>
                                                                    @else
                                                                        <span class="">{{ $times['check_in'] }} <i class="fa-regular fa-circle-check ps-1"></i></span>
                                                                    @endif

                                                                </td>
                                                                <td><span class="text-info">{{ $times['check_out'] }} <i class="fa-regular fa-clock ps-1"></i></span></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="employee" role="tabpanel" aria-labelledby="employee-tab">
                                    <div class="col-lg-12">
                                        <div class="card rounded-0 px-0">
                                            <div class="card-body p-0">
                                                <table class="table employee table-striped table-hover" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="25%">Name</th>
                                                            <th width="15%">Job Status</th>
                                                            <th width="50%">Department</th>
                                                            <th width="15%" class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($users as $employee)
                                                            <tr>
                                                                <td class="ps-2">
                                                                    {{ $employee->name }}
                                                                </td>
                                                                <td class="ps-2"> Not Yet</td>
                                                                <td class="ps-2">
                                                                    @if (is_array(json_decode($employee->department)))
                                                                        @foreach (json_decode($employee->department) as $department)
                                                                            <span
                                                                                class="text-info">{{ ucfirst($department) }},</span>
                                                                        @endforeach
                                                                    @else
                                                                        <span
                                                                            class="text-info">{{ ucfirst($employee->department) }},</span>
                                                                    @endif
                                                                </td>
                                                                <td class="text-center">
                                                                    <a class=""
                                                                        href="{{ route('employeement.create') }}">
                                                                        <i
                                                                            class="fa-solid fa-plus dash-icons main_color"></i>
                                                                    </a>
                                                                    <a class=""
                                                                        href="{{ route('salary-form.show', $employee->id) }}"
                                                                        title="Salary Form">
                                                                        <i
                                                                            class="fa-regular fa-rectangle-list dash-icons main_color"></i>
                                                                    </a>
                                                                    <a class=""
                                                                        href="{{ route('evaluation.show', $employee->id) }}"
                                                                        title="Evaluation Form">
                                                                        <i
                                                                            class="fa-solid fa-pen-to-square dash-icons main_color"></i>
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
                                <div class="tab-pane" id="all-events" role="tabpanel" aria-labelledby="all-events-tab">
                                    <div class="card rounded-0" style="height: 136px; overflow-x: hidden;">
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
                                                        class="btn btn-info text-white px-2 py-1"><i
                                                            class="fa-solid fa-plus pe-2"></i>Add</a>
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

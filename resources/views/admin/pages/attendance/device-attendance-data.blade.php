@extends('admin.master')
@section('content')
<style>
    .page_titles {
            background-color: #307a9d;
            width: 30%;
            border-radius: 20px;
            color: white;
            margin: auto;
        }
</style>
    <div class="content-wrapper">
        <div class="d-flex justify-content-between align-items-center shadow-sm">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex px-2">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Device</span>
                        <span class="breadcrumb-item active">Employee Attendance</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
            <!-- Basic tabs -->
            <div>
                <a href="{{ route('machine.home') }}" class="btn navigation_btn">
                    <div class="d-flex align-items-center ">
                        <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                        <span>Back To Dashboard</span>
                    </div>
                </a>
                <a href="{{ route('machine.deviceattendancedata') }}" class="btn navigation_btn">
                    <div class="d-flex align-items-center ">
                        <i class="fa-solid fa-arrow-rotate-right me-1" style="font-size: 10px;"></i>
                        <span>Reload Device</span>
                    </div>
                </a>
                <a href="{{ route('machine.devicedata.clear.attendance') }}" class="btn navigation_btn">
                    <div class="d-flex align-items-center ">
                        <i class="fa-solid fa-arrow-rotate-right me-1" style="font-size: 10px;"></i>
                        <span>Clear Attendance</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="my-3 text-center page_titles">All Data From Device : <span> Attendance</span>
                    </h4>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <table class="table attendance table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Checkin => 0</th>
                                    <th scope="col">Checkout => 1</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sl = 1;
                                @endphp

                                @foreach ($attendances as $attendace)
                                    <tr>
                                        <th scope="row">{{ $sl++ }}</th>
                                        <td>{{ $attendace['id'] }}</td>
                                        <td>{{ $attendace['name'] }}</td>
                                        <td>{{ $attendace['type'] }}</td>
                                        <td>{{ $attendace['timestamp'] }}</td>
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
@endsection


@once
    @push('scripts')
        <script type="text/javascript">
            $('.attendance').DataTable({
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

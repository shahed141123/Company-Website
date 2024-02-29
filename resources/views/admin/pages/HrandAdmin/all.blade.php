@extends('admin.master')
@section('content')
    <style>
        .user-main-dash {
            background-color: #f7e5e9;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-title {
            color: #fe616f;
        }

        .main-user-img {
            width: 250px;
        }

        .u-dash-icons {
            background-color: #fe616f;
            padding: 10px 7px;
            border-radius: 5px;
            color: white;
        }
    </style>
    <div class="content-wrapper">
        <div class="content-inner">
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
            <!-- Content area -->
            <div class="content">
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card rounded-2 border-0 shadow-sm">
                                <div class="card-body user-main-dash py-0">
                                    <div>
                                        <h1 class="user-title">Welcome Back Sazeduzzaman</h1>
                                        <p>
                                            You've made excellent progress, <br> completing 80% of the tasks
                                            assigned for this week.
                                        </p>
                                    </div>
                                    <div>
                                        <img class="main-user-img"
                                            src="https://i.ibb.co/56zzVFf/4882404-removebg-preview.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card mb-1" style="background-color: #ecedff;">
                                        <div class="card-body py-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="fa-solid fa-building-circle-check u-dash-icons"></i>
                                                    <p class="mb-0 pb-0">In Office</p>
                                                </div>
                                                <h4 class="mb-0">10:45 AM</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card mb-1" style="background-color: #ecedff;">
                                        <div class="card-body py-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="fa-solid fa-building-circle-arrow-right u-dash-icons"></i>
                                                    <p class="mb-0 pb-0">Check In</p>
                                                </div>
                                                <h4 class="mb-0">10:45 AM</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card mb-1" style="background-color: #ecedff;">
                                        <div class="card-body py-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="fa-solid fa-building-circle-xmark u-dash-icons"></i>
                                                    <p class="mb-0 pb-0">Check Out</p>
                                                </div>

                                                <h4 class="mb-0">10:45 AM</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card mb-1" style="background-color: #ecedff;">
                                        <div class="card-body py-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="fa-solid fa-building-circle-xmark u-dash-icons"></i>
                                                    <p class="mb-0 pb-0">Check Out</p>
                                                </div>

                                                <h4 class="mb-0">10:45 AM</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow-sm">
                                <div class="card-header p-0 border-0 px-3" style="background-color: #f7e5e9;">
                                    <h1 class="user-title mb-0 text-center">Your All Task</h1>
                                </div>
                                <div class="card-body py-0 rounded-0" style="background-color: #f7e5e9;">
                                    <div class="d-flex  align-items-center">
                                        <i class="fa-solid fa-building-circle-xmark u-dash-icons"></i>
                                        <p class="mb-0 pb-0">Complete The Whole Design Of User Dashboard</p>
                                    </div>
                                    <div class="d-flex  align-items-center">
                                        <i class="fa-solid fa-building-circle-xmark u-dash-icons"></i>
                                        <p class="mb-0 pb-0">Complete The Whole Design Of User Dashboard</p>
                                    </div>
                                    <div class="d-flex  align-items-center">
                                        <i class="fa-solid fa-building-circle-xmark u-dash-icons"></i>
                                        <p class="mb-0 pb-0">Complete The Whole Design Of User Dashboard</p>
                                    </div>
                                    <div class="d-flex  align-items-center">
                                        <i class="fa-solid fa-building-circle-xmark u-dash-icons"></i>
                                        <p class="mb-0 pb-0">Complete The Whole Design Of User Dashboard</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
    @endpush
@endonce

@extends('admin.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <style>
        .accordion {
           --accordion-border-width: 0px !important;
        }
        .section-border{
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
                                    <a href="{{route('hr-and-admin.index')}}" class="breadcrumb-item"><span
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
                <div class="content">
                    <div class="container-fluid ">
                        <div class="row">


                        </div>
                    </div>
                </div>
                <!-- Sales Chain Page -->



        </div>
    </div>
@endsection

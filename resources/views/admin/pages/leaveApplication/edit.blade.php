@extends('admin.master')
@section('content')

    <div class="content-wrapper">
        <div class="content-inner">
            <div class="page-header page-header-light">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Page Destination/ BreadCrumb --}}
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex px-2">
                            <div class="breadcrumb py-2">
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                <span class="breadcrumb-item active">Leave Dashboard</span>
                            </div>
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                    {{-- Inner Page Tab --}}
                    {{-- <div>
                        <a href="javascript:void(0)" class="btn navigation_btn" data-bs-toggle="modal"
                            data-bs-target="#makeleave">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 14px;"></i>
                                <span>Make A Leave</span>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
            <div class="content mt-2">
                <div class="card">
                    <div class="card-header">Leave Application of {{$leave->name}}</div>
                    <div class="card-body"></div>
                </div>
            </div>


        </div>
    </div>
@endsection

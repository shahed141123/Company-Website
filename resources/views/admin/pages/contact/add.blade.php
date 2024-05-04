@extends('admin.master')
@section('content')
    <style>
        .label_style {
            width: 151px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('knowledge.index') }}" class="breadcrumb-item">Contact Management</a>
                        <a href="" class="breadcrumb-item">Add</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                <div>
                    <a href="http://127.0.0.1:3000/admin/blog" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                            <span>Contact List</span>
                        </div>
                    </a>

                    <a href="#" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                            <span>Site Content</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content pt-2">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-12 col-sm-12 d-flex justify-content-between align-items-center">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('contact.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                            <p class="text-white p-0 m-0 fw-bold"> Add Contact Form </p>
                        </div>
                    </div>
                    <div class="card rounded-0">
                        <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!--Banner Section-->
                            <div class="container">
                                <div class="row mb-1 g-2 p-1">
                                    <div class="col">
                                        <div class="px-2 py-2 rounded bg-light mt-2">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>First Name</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="fname" class="form-control form-control-sm"
                                                        maxlength="100" required placeholder="Your Fist Name" />
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Last Name </span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="lname" class="form-control form-control-sm"
                                                        maxlength="100" required  placeholder="Your last Name"/>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Phone</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="phone" class="form-control form-control-sm"
                                                        maxlength="100" required  placeholder="Your Phone Number"/>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>State</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="state" class="form-control form-control-sm"
                                                        maxlength="100" required  placeholder="Your State"/>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Country</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="country" class="form-control form-control-sm"
                                                        maxlength="100" required placeholder="Your Country" />
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Email</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="email" name="email" class="form-control form-control-sm"
                                                        maxlength="100" required  placeholder="Your Email Address"/>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Message Type</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <select name="msg_type" class="form-control select"
                                                        data-placeholder="Chose msg_type ">
                                                        <option></option>
                                                        <option value="Account creation problem">Account creation problem
                                                        </option>
                                                        <option value="Cannot login">Cannot login</option>
                                                        <option value="Client feedback entry">Client feedback entry</option>
                                                        <option value="General web issue">General web issue</option>
                                                        <option value="Order return request">Order return request</option>
                                                        <option value="Order tracking/history">Order tracking/history</option>
                                                        <option value="Product information request">Product information request
                                                        </option>
                                                        <option value="Update my account/email information">Update my
                                                            account/email information</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Message</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <textarea name="message" id="" class="form-control" cols="30" rows="2" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-end mb-2 mx-2">
                                    <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection

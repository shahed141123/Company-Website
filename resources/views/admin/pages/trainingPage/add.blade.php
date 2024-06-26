@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('site-content.index') }}" class="breadcrumb-item">Site Content</a>
                        <a href="{{ route('training-page.index') }}" class="breadcrumb-item">Sofware Info Page</a>
                        <a href="" class="breadcrumb-item">Add</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1 "></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content pt-2 w-75 mx-auto">
            <div class="text-start">
                <div class="d-flex align-items-center justify-content-start main_bg py-1">
                    <div class="ms-2">
                        <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                            href="{{ route('training-page.index') }}">
                            <i class="fa-solid fa-arrow-left main_color"></i>
                        </a>
                    </div>
                    <div class="me-2" style="margin-left: 23rem;">
                        <p class="text-white p-0 m-0 fw-bold"> Add Sofware Info Page Form</p>
                    </div>
                </div>
            </div>
            <form method="post" action="{{ route('training-page.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <!--Banner Section-->
                    <div class="container">
                        <div class="row g-2 p-1">
                            <div class="col-12">
                                <span class="mt-1 fw-bold text-info">Banner Area</span>
                                <div class="px-2 py-2 rounded bg-light mb-3">
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner
                                            Image </label>
                                        <div class="input-group">
                                            <input name="banner_image" type="file" class="form-control form-control-sm"
                                                placeholder="Enter Banner Image">
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row One </label>
                                        <select name="row_one_id" class="form-control select"
                                            data-placeholder="Chose Row One" data-allow-clear="true">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option value="{{ $row->id }}">{{ $row->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <span class="mt-1 fw-bold text-info">Row Two </span>
                                <div class="px-2 py-2 rounded bg-light mb-4">

                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Title</label>
                                        <div class="input-group">
                                            <input name="row_two_title" type="text" maxlength="250"
                                                class="form-control form-control-sm" placeholder="Enter Row Two Title"
                                                required>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Short Description</label>
                                        <textarea name="row_two_short_description" class="form-control form-control-sm" rows="4"></textarea>

                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Btn Name</label>
                                        <div class="input-group">
                                            <input name="row_two_btn_name" type="text"
                                                class="form-control form-control-sm" placeholder="Enter Row Two Btn Name"
                                                required>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Btn Link</label>
                                        <div class="input-group">
                                            <input name="row_two_btn_link" type="url"
                                                class="form-control form-control-sm" placeholder="Enter Row Two Btn Link"
                                                required>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Image</label>
                                        <div class="input-group">
                                            <input name="row_two_image" type="file" class="form-control form-control-sm"
                                                placeholder="Enter Row Two Image">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Tab One</label>
                                        <select name="row_two_tab_one_id" class="form-control select"
                                            data-placeholder="Chose Row Two Tab One" data-allow-clear="true">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option value="{{ $row->id }}">{{ $row->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Tab Two</label>
                                        <select name="row_two_tab_two_id" class="form-control select"
                                            data-placeholder="Chose Row Two Tab Two" data-allow-clear="true">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option value="{{ $row->id }}">{{ $row->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Tab Three</label>
                                        <select name="row_two_tab_three_id" class="form-control select"
                                            data-placeholder="Chose row two tab Three " data-allow-clear="true">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option value="{{ $row->id }}">{{ $row->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Two Tab Four</label>
                                        <select name="row_two_tab_four_id" class="form-control select"
                                            data-placeholder="Chose row two tab Four " data-allow-clear="true">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option value="{{ $row->id }}">{{ $row->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--  --}}

                                </div>
                                <span class="mt-1 fw-bold text-info">Background Image Area</span>
                                <div class="px-2 py-2 rounded bg-light mb-4">
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Background
                                            Image </label>
                                        <div class="input-group">
                                            <input name="background_image" type="file"
                                                class="form-control form-control-sm" placeholder="Enter Background Image">
                                        </div>
                                    </div>
                                </div>
                                <span class="mt-1 fw-bold text-info">Row Five Area</span>
                                <div class="px-2 py-2 rounded bg-light mb-4">
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row Five </label>
                                        <select name="row_five_id" class="form-control select"
                                            data-placeholder="Chose Row Five" data-allow-clear="true">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option value="{{ $row->id }}">{{ $row->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <span class="mt-1 fw-bold text-info">Row Six Area</span>
                                <div class="px-2 py-2 rounded bg-light mb-4">
                                    <div class="d-flex align-items-center pt-3">
                                        <label class="col-form-label col-lg-3 p-0 text-start text-black">Row
                                            Six Title</label>
                                        <div class="input-group">
                                            <input name="row_seven_title" type="text" maxlength="250"
                                                class="form-control form-control-sm" placeholder="Enter Row Six Title"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-2">
                        <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 4px 9px;">Submit</button>
                    </div>
            </form>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

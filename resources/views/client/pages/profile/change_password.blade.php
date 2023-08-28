@extends('client.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('homepage') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('client.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Client Privacy Setting</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card p-2">
                        <div class="card-body p-2">
                            <form id="myform" method="post" action="{{ route('client.update.password') }}">
                                @csrf
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{session('status')}}
                                </div>
                                @elseif(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('error')}}
                                </div>
                                @endif

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Old Password</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        <input type="password" name="old_password"
                                            class="form-control @error('old_password') is-invalid @enderror"
                                            id="current_password" placeholder="Old Password" />

                                        @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">New Password</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        <input type="password" name="new_password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="new_password" placeholder="New Password" />

                                        @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Confirm New Password</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        <input type="password" name="new_password_confirmation" class="form-control"
                                            id="new_password_confirmation" placeholder="Confirm New Password" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-6 text-center text-secondary">
                                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                            class="ph-paper-plane-tilt ms-2"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection

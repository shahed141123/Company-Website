@extends('admin.master')
@section('content')

<div class="content-wrapper">

     <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Admin Manage</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->

    <div class="content">
        <div class="card">
            <div class="card-header py-1">
                <h5 class="text-center p-0 m-0">Edit Admin</h5>
                <a href="{{ route('all.admin') }}" type="button"
                    class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                        <i class="icon-eye"></i>
                    </span>
                    All Admins
                </a>
            </div>
            <div class="card-body">

                <form method="post" action="{{ route('update.admin',$user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-sm-9 basic-form">
                                <label class="form-label">Country</label>
                                <select name="country" class="form-control select"
                                    data-placeholder="Chose Country" required>
                                    <option></option>
                                    @foreach ($countries as $item)
                                        <option value="{{$item->country_name}}" {{$item->country_name == $user->country ? 'selected' : '' }}>{{$item->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Designation</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="designation" class="form-control" value="{{ $user->designation }}" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Phone </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" />
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="address" class="form-control" value="{{ $user->address }}" />
                            </div>
                        </div>



                        <div class="col-lg-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Assign Roles </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="roles" class="form-select mb-3" aria-label="Default select example">

                                    <option></option>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }} >{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                        <div class="col-lg-4">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection

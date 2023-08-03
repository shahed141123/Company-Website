@extends('client.master')
@section('content')
<style>
    .form-label{
        font-size: 11px !important;
    }
    .form-control{
        padding: 2px !important;
    }
</style>
<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('homepage') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('client.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">My Profile</span>
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
            <div class="row p-3">

                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ (!empty($data->photo)) ? url('upload/Profile/user/'.$data->photo):url('upload/no_image.jpg') }}" alt="{{ $data->name }}" class="rounded-circle p-1 bg-primary" width="150" height="150">
                                <div class="mt-3">
                                    <h4>{{ $data->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $data->username }}</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card px-2">
                        <div class="card-header py-1">
                            <h5 class="text-center p-0 m-0">Your Account Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="row border">
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">Full Name: </div>
                                        <div class="col-sm-12">{{ $data->name }}</div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-sm-12">Phone : </div>
                                        <div class="col-sm-12">{{ $data->phone }}</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">Email : </div>
                                        <div class="col-sm-12">{{ $data->email }}</div>
                                    </div>
                                    <div class="col-lg-1">
                                        <button class="btn"><i class="ph-pencil editProfile"></i></button>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-sm-12">Address :</div>
                                        <div class="col-sm-12">{{ $data->address }}</div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-sm-12">City :</div>
                                        <div class="col-sm-12">{{ $data->city }}</div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-sm-12">Zip Code :</div>
                                        <div class="col-sm-12">{{ $data->postal }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="card p-2" id="profileDetails" style="display: none;">
                            <div class="card-header py-1">
                                <h5 class="text-center p-0 m-0">Update Your Account</h5>
                            </div>
                            <div class="card-body py-0">
                                <form id="myform" method="post" action="{{ route('client.profile.store') }}" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Full Name</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="name" value="{{ $data->name }}"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                                <input type="text" class="form-control" id="basicpill-phoneno-input" name="phone" value="{{ $data->phone }}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-email-input">Email</label>
                                                <input type="email" class="form-control" id="basicpill-email-input" name="email" value="{{ $data->email }}"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Profile Picture</label>
                                                <input id="image" type="file" class="form-control" id="basicpill-firstname-input" name="photo" />
                                            </div>
                                            <div class="col-sm-12 text-secondary">
                                                <img id="showImage" src="{{ (!empty($data->photo)) ? url('upload/Profile/user/'.$data->photo):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"/>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-address-input">Address</label>
                                                <textarea id="basicpill-address-input" class="form-control" rows="2" name="address">{{ $data->address }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">City</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="city" value="{{ $data->city }}"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Postal</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="postal" value="{{ $data->postal }}"/>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-1 mb-1">
                                        <div class="col-lg-12 text-center">
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
@once
@push('scripts')

    <script>

        $('.editProfile').click(function() {

            $("#profileDetails").toggle('left');

        });

</script>
@endpush
@endonce

@extends('admin.master')
@section('content')

<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
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
            <div class="row">

                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ (!empty($data->photo)) ? url('upload/Profile/user/'.$data->photo):url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="150">
                                <div class="mt-3">
                                    <h4>{{ $data->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $data->designation }}</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header py-1">
                            <h5 class="text-center p-0 m-0">Your Account Details</h5>
                        </div>
                        <div class="card-body py-0">
                            <form id="myform" method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" >
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
                                            <label class="form-label" for="basicpill-email-input">Designation</label>
                                            <input type="text" class="form-control" id="basicpill-email-input" name="designation" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                            <input type="text" class="form-control" id="basicpill-phoneno-input" name="phone" value="{{ $data->phone }}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control" id="basicpill-email-input" name="email" value="{{ $data->email }}"/>
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

                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Profile Picture</label>
                                            <input id="image" type="file" class="form-control" id="basicpill-firstname-input" name="photo" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                         <img id="showImage" src="{{ (!empty($data->photo)) ? url('upload/Profile/admin/'.$data->photo):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"/>
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

{{-- @push('script')

@endpush


<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script> --}}





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
                        <span class="breadcrumb-item active">Admin Manage</span>
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
                <div class="col-lg-1"></div>

                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header py-1">

                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="text-center p-0 m-0">Admin Details</h5>
                                </div>

                                <div class="col-lg-4">
                                    <a href="{{ route('all.admin') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        All Admins
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <form id="myform" method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data" >
                                @csrf

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Full Name</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="name" />
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                            <input type="text" class="form-control" id="basicpill-phoneno-input" name="phone"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control" id="basicpill-email-input" name="email" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-address-input">Address</label>
                                            <textarea id="basicpill-address-input" class="form-control" rows="2" name="address"></textarea>
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
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">City</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="city"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Postal</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="postal"/>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Profile Picture</label>
                                            <input id="image" type="file" class="form-control" id="basicpill-firstname-input" name="photo" />
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Password</label>
                                            <input type="password" name="password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="new_password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                            id="new_password_confirmation" placeholder="Confirm New Password" />
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





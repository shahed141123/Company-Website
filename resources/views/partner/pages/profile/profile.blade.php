@extends('partner.master')
@section('content')
    <style>
        .form-label {
            font-size: 11px !important;
        }

        .form-control {
            padding: 2px !important;
        }

        .accordion-button {
            padding: 5px 16px;
        }

        .form-control-feedback-icon {
            display: none;
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
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">My Profile</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        {{-- <div class="content">
            <div class="row p-3">
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ !empty($data->photo) ? url('upload/Profile/user/' . $data->photo) : url('upload/no_image.jpg') }}"
                                    alt="{{ $data->name }}" class="rounded-circle p-1 bg-primary" width="150"
                                    height="150">
                                <div class="mt-3">
                                    <h4>{{ $data->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $data->username }}</p>
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
                                        <button class="btn text-success"><i class="ph-pencil editProfile"></i></button>
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
                    <div class="card" id="profileDetails" style="display: none;">
                        <div class="card-header py-1">
                            <h5 class="text-center p-0 m-0">Update Your Account</h5>
                        </div>
                        <div class="card-body py-0">
                            <form id="myform" method="post" action="{{ route('partner.profile.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="name">name</label>
                                            <input type="text" class="form-control" id="name"
                                                name="name" value="{{ $data->name }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_name">company_name</label>
                                            <input type="text" class="form-control" id="company_name"
                                                name="company_name" value="{{ $data->company_name }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_site_name">company_site_name</label>
                                            <input type="text" class="form-control" id="company_site_name"
                                                name="company_site_name" value="{{ $data->company_site_name }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_address">company_address</label>
                                            <input type="text" class="form-control" id="company_address"
                                                name="company_address" value="{{ $data->company_address }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_email_address">company_email_address</label>
                                            <input type="text" class="form-control" id="company_email_address"
                                                name="company_email_address" value="{{ $data->company_email_address }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="primary_email_address">primary_email_address</label>
                                            <input type="text" class="form-control" id="primary_email_address"
                                                name="primary_email_address" value="{{ $data->primary_email_address }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="phone_number">phone_number</label>
                                            <input type="text" class="form-control" id="phone_number"
                                                name="phone_number" value="{{ $data->phone_number }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_number">company_number</label>
                                            <input type="text" class="form-control" id="company_number"
                                                name="company_number" value="{{ $data->company_number }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_trade_license">company_trade_license</label>
                                            <input type="text" class="form-control" id="company_trade_license"
                                                name="company_trade_license" value="{{ $data->company_trade_license }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_tin_number">company_tin_number</label>
                                            <input type="text" class="form-control" id="company_tin_number"
                                                name="company_tin_number" value="{{ $data->company_tin_number }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="company_vat">company_vat</label>
                                            <input type="text" class="form-control" id="company_vat"
                                                name="company_vat" value="{{ $data->company_vat }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="business_type">business_type</label>
                                            <input type="text" class="form-control" id="business_type"
                                                name="business_type" value="{{ $data->business_type }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="business_since">business_since</label>
                                            <input type="text" class="form-control" id="business_since"
                                                name="business_since" value="{{ $data->business_since }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="city">city</label>
                                            <input type="text" class="form-control" id="city"
                                                name="city" value="{{ $data->city }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="country">country</label>
                                            <input type="text" class="form-control" id="country"
                                                name="country" value="{{ $data->country }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="postal">postal</label>
                                            <input type="text" class="form-control" id="postal"
                                                name="postal" value="{{ $data->postal }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="logo">logo
                                                </label>
                                            <input id="image" type="file" class="form-control"
                                                name="photo" />
                                        </div>
                                        <div class="col-sm-12 text-secondary">
                                            <img id="showImage"
                                                src="{{ !empty($data->logo) ? url('upload/Profile/user/' . $data->logo) : url('upload/no_image.jpg') }}"
                                                alt="Admin" style="width:100px; height: 100px;" />
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
        </div> --}}
        <div class="content">

            <div class="card">
                <!-- <div class="card-header">

                        </div> -->

                <div class="card-body">


                    <div class="accordion" id="accordion_collapsed">
                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- Contact Details -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" style="background-color: #ae0a46!important; ">
                                    <button style="color: #fff;" class="accordion-button fw-semibold collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item1">
                                        Contact Details
                                    </button>
                                </h2>
                                <div id="collapsed_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_collapsed">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control form-control-sm mb-3 "
                                                    name="name" maxlength="10" placeholder="Name" required>
                                            </div>


                                            <div class="col-lg-3">
                                                <input type="text" class="form-control form-control-sm mb-3 maxlength"
                                                    name="phone" maxlength="15" placeholder="Phone" required>
                                            </div>


                                            <div class="col-lg-3">
                                                <input type="email" class="form-control form-control-sm mb-3"
                                                    name="email" maxlength="30" placeholder="Email" required>
                                            </div>

                                            <div class="col-lg-3">
                                                <input type="file" class="form-control form-control-sm mb-3"
                                                    name="image" placeholder="Name" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <textarea rows="1" cols="3" class="form-control mb-3" name="address" maxlength="10" placeholder="Address"
                                                    required></textarea>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control form-control-sm mb-3"
                                                    name="city" maxlength="10" placeholder="City" required>
                                            </div>


                                            <div class="col-lg-3">
                                                <select data-placeholder="Select a Country..."
                                                    class="form-control mb-3 form-control-sm select" required
                                                    data-container-css-class="select-sm" name="country">
                                                    <option value="AZ">Select a Country</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>

                                                </select>
                                            </div>

                                            <div class="col-lg-3">
                                                <input type="number" class="form-control form-control-sm mb-3"
                                                    name="postal" maxlength="5" placeholder="Postal Code" required>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>



                            <!-- Company Details -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" style="background-color: #ae0a46!important; ">
                                    <button style="color: #fff;" class="accordion-button fw-semibold collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item2">
                                        Company Details
                                    </button>
                                </h2>
                                <div id="collapsed_item2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_collapsed">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control form-control-sm mb-3"
                                                    name="company_name" maxlength="50" placeholder="Name" required>
                                            </div>


                                            <div class="col-lg-3">
                                                <input type="number" class="form-control form-control-sm mb-3"
                                                    name="company_phone_number" maxlength="15" placeholder="Phone Number"
                                                    required>
                                            </div>


                                            <div class="col-lg-3">
                                                <input type="file" class="form-control form-control-sm mb-3"
                                                    name="company_logo" placeholder="Logo" required>
                                            </div>

                                            <div class="col-lg-3">
                                                <input type="text" class="form-control form-control-sm mb-3"
                                                    name="company_url" maxlength="50" placeholder="link" required>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-6">
                                                <input type="date" class="form-control form-control-sm mb-3"
                                                    name="company_established_date" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <textarea rows="1" cols="3" class="form-control mb-3" name="company_address" maxlength="150"
                                                    placeholder="Address" required></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control form-control-sm mb-3"
                                                    name="vat_number" maxlength="40" placeholder="Vat Number" required>
                                            </div>


                                            <div class="col-lg-3">
                                                <input type="number" class="form-control form-control-sm mb-3"
                                                    name="tax_number" maxlength="40" placeholder="Tax Number" required>
                                            </div>


                                            <div class="col-lg-3">
                                                <input type="number" class="form-control form-control-sm mb-3"
                                                    name="trade_license_number" maxlength="40"
                                                    placeholder="Trade license Number" required>
                                            </div>

                                            <div class="col-lg-3">
                                                <input type="number" class="form-control form-control-sm mb-3"
                                                    name="tin_number" maxlength="40" placeholder="TIN Number" required>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                            <!-- Legal Documents -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" style="background-color: #ae0a46!important; ">
                                    <button style="color: #fff;" class="accordion-button fw-semibold collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item3">
                                        Legal Documents
                                    </button>
                                </h2>
                                <div id="collapsed_item3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_collapsed">
                                    <div class="accordion-body">

                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">TIN</label>
                                            <div class="col-lg-3">
                                                <input type="file" class="form-control form-control-sm mb-3"
                                                    name="tin" required>
                                            </div>

                                            <label class="col-form-label col-lg-3">BIN Certificate</label>
                                            <div class="col-lg-3">
                                                <input type="file" class="form-control form-control-sm"
                                                    name="bin_certificate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Trade License</label>
                                            <div class="col-lg-3">
                                                <input type="file" class="form-control form-control-sm mb-3"
                                                    name="trade_license" required>
                                            </div>

                                            <label class="col-form-label col-lg-3">Audit Paper</label>
                                            <div class="col-lg-3">
                                                <input type="file" class="form-control form-control-sm"
                                                    name="audit_paper" required>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                            <!-- Industry Details -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" style="background-color: #ae0a46!important; ">
                                    <button style="color: #fff;" class="accordion-button fw-semibold collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item4">
                                        Industry Details
                                    </button>
                                </h2>
                                <div id="collapsed_item4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_collapsed">
                                    <div class="accordion-body">


                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <select class="form-control form-control-sm multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Select Industries You work..."
                                                        data-include-select-all-option="true" data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true"
                                                        name="industry_id_percentage" required>
                                                        @foreach ($industries as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">

                                                    <select class="form-control form-control-sm multiselect"
                                                        multiple="multiple" data-placeholder="Select Products You work..."
                                                        data-include-select-all-option="true" data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true" name="product"
                                                        required>
                                                        @foreach ($products as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">

                                                    <select class="form-control form-control-sm multiselect"
                                                        multiple="multiple"
                                                        data-placeholder="Select Solutions You work..."
                                                        data-include-select-all-option="true" data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true" name="solution"
                                                        required>
                                                        @foreach ($solutions as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">

                                                    <select class="form-control form-control-sm multiselect"
                                                        multiple="multiple" data-placeholder="Select Countries You work..."
                                                        data-include-select-all-option="true" data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true" name="working_country" required>
                                                        @foreach ($countries as $item)
                                                            <option value="{{ $item->id }}">{{ $item->country_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <select data-placeholder="Select a Country..."
                                                        class="form-control mb-3 select"
                                                        data-container-css-class="select-sm" name="yearly_revenue"
                                                        required>
                                                        <option value="AZ">Yearly Revenue</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="WY">Wyoming</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>






                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end align-items-end">
                                <button type="reset" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn btn-primary ms-3">Submit <i
                                        class="ph-paper-plane-tilt ms-2"></i></button>
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
@once
    @push('scripts')
        <script>
            $('.editProfile').click(function() {
                $("#profileDetails").toggle('left');
            });
        </script>
    @endpush
@endonce

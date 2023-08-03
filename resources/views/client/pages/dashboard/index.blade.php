@extends('client.master')
@section('content')
    <!-- Inner content -->
    <div class="content-inner">
        <!-- Content area -->
        <div class="content">
            <!-- Inner container -->
            <div class="d-lg-flex align-items-lg-start">
                <!-- Left sidebar component -->
                <!-- /left sidebar component -->


                <!-- Right content -->
                <div class="tab-content flex-fill ms-2">
                    <div class="tab-pane fade active show" id="profile">
                        <!-- Profile info -->
                        <div class="card border-0 rounded-0 shadow-none mb-1">
                            <div class="card-header border-0">
                                <h5 class="mb-0 text-start" style="color: #ae0a46; border-bottom: 1px solid #ae0a46">
                                    <span class="text-white p-1" style="background-color: #ae0a46;">Profile
                                        information</span>
                                </h5>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('client.profile.update', $client->id) }}" class="p-3 pt-1"
                                    method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Username</span>
                                                    <input type="text" value="{{ $client->username }}" name="username"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Full name</span>
                                                    <input type="text" value="{{ $client->name }}" name="name"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Email</span>
                                                    <input type="text" readonly="readonly" value="{{ $client->email }}"
                                                        name="email" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Address line</span>
                                                    <input type="text" value="{{ $client->address }}" name="address"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                        <div class="col-lg-4">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">City</span>
                                                    <input type="text" value="{{ $client->city }}" name="city"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                        <div class="col-lg-4">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">ZIP code</span>
                                                    <input type="text" value="{{ $client->postal }}" name="postal"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-lg-4">
                                            <div class="row mb-1">
                                                <div class="col-sm-12">
                                                    <span class="fw-normal">Phone #</span>
                                                    <input type="text" value="{{ $client->phone }}" name="phone"
                                                        class="form-control form-control-sm">
                                                    <div class="form-text text-muted">+99-99-9999-9999
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="row mb-3 gx-0">
                                                <div class="col-sm-11">
                                                    <span class="fw-normal">Profile image</span>
                                                    <input type="file" class="form-control form-control-sm"
                                                        name="photo"
                                                        style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;">
                                                    <div class="form-text text-muted">Accepted formats:
                                                        gif, png, jpg.</div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <span class="fw-normal"> <br></span>
                                                    <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                                        width="50px" height="34px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-end">
                                                <button type="submit" class="common_button effect01">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- /profile info -->
                        <!-- Account settings -->

                        <!-- /account settings -->

                    </div>

                    <div class="tab-pane fade ms-2" id="schedule">

                        <!-- Available hours -->
                        <div class="card border-0 rounded-0 shadow-none">
                            <div class="card-header">
                                <h5 class="mb-0">Available hours</h5>
                            </div>

                            <div class="card-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="available_hours"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /available hours -->


                        <!-- Schedule -->
                        <div class="card border-0 rounded-0 shadow-none">
                            <div class="card-header">
                                <h5 class="mb-0">My schedule</h5>
                            </div>

                            <div class="card-body">
                                <div class="my-schedule"></div>
                            </div>
                        </div>
                        <!-- /schedule -->

                    </div>


                    <div class="tab-pane fade ms-2" id="offerPrice">
                        <div class="row">
                            <div class="content bg-white">
                                <h3 class="text-center">Your Offer Price Info</h3>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Id</th>
                                            <th width="15%">Rfq Code</th>
                                            <th width="40%">Product Name</th>
                                            <th width="15%">Rfq Status</th>
                                            <th class="text-center" width="20%">Work order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>afasf</td>
                                            <td>asfa
                                            </td>
                                            <td>asfa</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="text-primary mx-2"
                                                    data-bs-toggle="modal" title="Upload Work order" data-bs-target="">
                                                    <i class="icon-file-plus2"></i>
                                                </a>
                                                <!---Category Update modal--->
                                            </td>
                                        </tr>

                                </table>
                            </div>

                        </div>

                    </div>
                    
                    <div class="tab-pane fade " id="offerPrice">
                        <div class="content bg-white">
                            <h3 class="text-center">Your Offer Price</h3>
                            <div class="table-responsive">
                                <table class="brandDT table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-white">
                                            <th width="20%">Order Number</th>
                                            <th width="20%">Order Date</th>
                                            <th width="15%">Total Amount</th>
                                            <th width="15%">Payment Method</th>
                                            <th width="15%">Status</th>
                                            <th width="15%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td class="text-center" colspan="6">No Data Available <span
                                                class="ms-1 text-warning"><i class="ph ph-smiley-sad"></i></span></td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade " id="productDraft">
                        <div class="content bg-white">
                            <h3 class="text-center">Your Product Draft</h3>
                            <div class="table-responsive">
                                <table class="brandDT table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-white">
                                            <th width="20%">Order Number</th>
                                            <th width="20%">Order Date</th>
                                            <th width="15%">Total Amount</th>
                                            <th width="15%">Payment Method</th>
                                            <th width="15%">Status</th>
                                            <th width="15%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td class="text-center" colspan="6">No Data Available <span
                                                class="ms-1 text-warning"><i class="ph ph-smiley-sad"></i></span></td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>









    <!-- /inner content -->
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.contactDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 3, 4],
                }, ],
            });
        </script>
    @endpush
@endonce

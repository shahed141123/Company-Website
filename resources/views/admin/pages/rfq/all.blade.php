@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">RFQ Management</span>
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
        <div class="content">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item col-6">
                                        <a href="#js-tab1" class="py-1 nav-link active cat-tab1" data-bs-toggle="tab">
                                            <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                                RFQs</p>
                                        </a>
                                    </li>

                                    <li class="nav-item col-6">
                                        <a href="#js-tab2" class="py-1 nav-link cat-tab2" data-bs-toggle="tab">
                                            <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                                Assigned RFQs</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-center">
                                <h2 class="mb-0 saved_title">RFQ List</h2>
                                <h2 class="mb-0 completed_title d-none">Assigned RFQs Pending For Deal Registration</h2>
                            </div>

                            <div class="col-lg-3">
                                {{-- <a href="{{route('product-sourcing.create')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="icon-plus2"></i>
                                    </span>
                                    Source New Product
                                </a> --}}
                            </div>
                        </div>
                    </div>


                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="js-tab1">
                            <div id="table1" class="card-body">
                                <table class="rfqDT1 table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="15">Sl No:</th>
                                            <th width="25">RFQ Code</th>
                                            <th width="15">Create Date</th>
                                            <th width="15">Client Type</th>
                                            <th width="15">Status</th>
                                            <th width="15" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($rfqs)
                                            @foreach ($rfqs as $key => $rfq)
                                                <tr>
                                                    <td>{{ $loop->iteration() }}</td>
                                                    <td>{{ ucfirst($rfq->rfq_code) }}</td>
                                                    <td>{{ ucfirst($rfq->create_date) }}</td>
                                                    <td>{{ ucfirst($rfq->client_type) }}</td>
                                                    <td>{{ ucfirst($rfq->status) }}</td>
                                                    <td class="text-center">
                                                        {{-- <a href="{{ route('rfq.edit', [$rfq->id]) }}"
                                                            class="text-primary">
                                                            <i class="icon-pencil"></i>
                                                        </a> --}}
                                                        <a href="{{ route('rfq.destroy', [$rfq->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal" title="View & Assign Sales Manager"
                                                            data-bs-target="#update_category_{{ $rfq->rfq_code }}">
                                                            <i class="ph-user-circle-plus"></i>
                                                        </a>
                                                        <!---Category Update modal--->
                                                        <div id="update_category_{{ $rfq->rfq_code }}" class="modal fade"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        @php
                                                                            $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq->rfq_code)->first();
                                                                        @endphp
                                                                        <h5 class="modal-title">Assign Sales Manager For RFQ
                                                                            No : {{ $rfq_details->rfq_code }}</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">

                                                                        <form method="post"
                                                                            action="{{ route('assign.salesman', $rfq_details->rfq_code) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="card">
                                                                                    <div class="row">
                                                                                        <table
                                                                                            class="table table-bordered table-striped p-1">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>
                                                                                                        Client Type :
                                                                                                        {{ ucfirst($rfq_details->client_type) }}
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Name :
                                                                                                        {{ ucfirst($rfq_details->name) }}
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Company Name :
                                                                                                        {{ ucfirst($rfq_details->company_name) }}
                                                                                                    </th>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th colspan="3"
                                                                                                        style="background: #7e7d7c">
                                                                                                        <p
                                                                                                            class="text-center pt-1 text-white">
                                                                                                            Product Name :
                                                                                                            {{ App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name') }}
                                                                                                        </p>
                                                                                                    </th>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th>Asking Quantity :
                                                                                                        {{ $rfq_details->qty }}
                                                                                                    </th>
                                                                                                    <th>Phone Number :
                                                                                                        {{ $rfq_details->phone }}
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        @if ($rfq_details->call == 1)
                                                                                                            Need To be
                                                                                                            Called.
                                                                                                        @else
                                                                                                        @endif
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </div>
                                                                                    <div class="row p-2">
                                                                                        <div class="col-12">
                                                                                            Assign Sales Manager :
                                                                                            <a class="p-1 editRfquser"
                                                                                                href="javascript:void(0);">
                                                                                                <i class="ph-note-pencil"
                                                                                                    aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="col-12 Rfquser"
                                                                                            style="display:none">
                                                                                            <div
                                                                                                class="row mb-3 p-2 border">
                                                                                                <div class="col-12">
                                                                                                    <h5 class="text-center">
                                                                                                        Assigned Sales
                                                                                                        Manager</h5>
                                                                                                </div>

                                                                                                <div class="col-lg-4">
                                                                                                    <div class="col-sm-12">
                                                                                                        <p class="mb-0">
                                                                                                            Sales Manager
                                                                                                            Name (Leader -
                                                                                                            L1) <span
                                                                                                                class="text-danger">*</span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group text-secondary col-sm-12">
                                                                                                        <select
                                                                                                            name="sales_man_id_L1"
                                                                                                            class="form-control select"
                                                                                                            data-minimum-results-for-search="Infinity"
                                                                                                            data-placeholder="Choose  ">
                                                                                                            <option>
                                                                                                            </option>
                                                                                                            @foreach ($users as $user)
                                                                                                                <option
                                                                                                                    value="{{ $user->id }}">
                                                                                                                    {{ $user->name }}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="col-sm-12">
                                                                                                        <p class="mb-0">
                                                                                                            Sales Manager
                                                                                                            Name (Team - T1)
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group text-secondary col-sm-12">
                                                                                                        <select
                                                                                                            name="sales_man_id_T1"
                                                                                                            class="form-control select"
                                                                                                            data-minimum-results-for-search="Infinity"
                                                                                                            data-placeholder="Choose  ">
                                                                                                            <option>
                                                                                                            </option>
                                                                                                            @foreach ($users as $user)
                                                                                                                <option
                                                                                                                    value="{{ $user->id }}">
                                                                                                                    {{ $user->name }}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-lg-4">
                                                                                                    <div class="col-sm-12">
                                                                                                        <p class="mb-0">
                                                                                                            Sales Manager
                                                                                                            Name (Team - T2)
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group text-secondary col-sm-12">
                                                                                                        <select
                                                                                                            name="sales_man_id_T2"
                                                                                                            class="form-control select"
                                                                                                            data-minimum-results-for-search="Infinity"
                                                                                                            data-placeholder="Choose ">
                                                                                                            <option>
                                                                                                            </option>
                                                                                                            @foreach ($users as $user)
                                                                                                                <option
                                                                                                                    value="{{ $user->id }}">
                                                                                                                    {{ $user->name }}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>




                                                                            <div class="row">
                                                                                <div class="col-sm-3"></div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Submit</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Category Update modal--->

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade" id="js-tab2">
                            <div class="card-body">
                                <table class="rfqDT2 table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl No:</th>
                                            <th>RFQ Code</th>
                                            <th>Assigned Sales Manager</th>
                                            <th>Create Date</th>
                                            <th>Client Type</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($deals)
                                            @foreach ($deals as $key => $deal)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ ucfirst($deal->rfq_code) }}</td>
                                                    <td>L1 :
                                                        {{ App\Models\User::where('id', $deal->sales_man_id_L1)->value('name') }}
                                                        ,
                                                        T1 :
                                                        {{ App\Models\User::where('id', $deal->sales_man_id_T1)->value('name') }}
                                                        ,
                                                        T2 :
                                                        {{ App\Models\User::where('id', $deal->sales_man_id_T2)->value('name') }}
                                                    </td>
                                                    <td>{{ ucfirst($deal->create_date) }}</td>
                                                    <td>{{ ucfirst($deal->client_type) }}</td>
                                                    <td>{{ ucfirst($deal->status) }}</td>
                                                    <td class="text-center">
                                                        {{-- <a href="{{ route('rfq.edit', [$deal->id]) }}"
                                                            class="text-primary">
                                                            <i class="icon-pencil"></i>
                                                        </a> --}}
                                                        <a href="{{ route('rfq.destroy', [$deal->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>
                                                        <a href="{{ route('deal.convert', [$deal->id]) }}"
                                                            class="text-success" title="Convert To Deal">
                                                            <i class="icon-pen-plus icon-1x"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('.rfqDT1').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [5],
                    }, ],
                });
                $('.rfqDT2').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [1, 2, 3, 4, 6],
                    }, ],
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $('.editRfquser').click(function() {
                    $(".Rfquser").toggle(this.checked);
                });
            });
        </script>
    @endpush
@endonce

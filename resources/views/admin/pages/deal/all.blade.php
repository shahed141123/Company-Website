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
                        <span class="breadcrumb-item active">RFQ Managements</span>
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
                <div class="card-header p-1 bg-gray">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs mx-auto d-flex justify-content-center"
                                style="width: 30%; border-bottom: 1px solid #247297;">
                                <li class="nav-item">
                                    <a href="#js-tab1" class="p-1 nav-link active cat-tab1" data-bs-toggle="tab">
                                        <p
                                            style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;padding:5px;">
                                            Deal Created</p>
                                    </a>
                                </li>

                                <li class="nav-item ml-1">
                                    <a href="#js-tab2" class="p-1 nav-link cat-tab2" data-bs-toggle="tab">
                                        <p
                                            style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;padding:5px;">
                                            SAS Created</p>
                                    </a>
                                </li>
                                <li class="nav-item ml-1">
                                    <a href="#js-tab3" class="p-1 nav-link cat-tab3" data-bs-toggle="tab">
                                        <p
                                            style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;padding:5px;">
                                            SAS Approved</p>
                                    </a>
                                </li>
                                <li class="nav-item ml-1">
                                    <a href="#js-tab4" class="p-1 nav-link cat-tab4" data-bs-toggle="tab">
                                        <p
                                            style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;padding:5px;">
                                            Quoted</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="tab-content">
                    <div class="tab-pane fade show active" id="js-tab1">
                        <div id="table1" class="card-body">
                            {{-- Add Details Start --}}
                            <div class="text-success nav-link cat-tab3"
                                style="position: relative;
            z-index: 999;
            margin-bottom: -40px;">
                                {{-- <a href="{{ route('knowledge.create') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add Solution Details">
                                            <i class="ph-plus icons_design"></i> </span>
                                        <span class="ms-1" style="color: #247297;">Add</span>
                                    </div>
                                </a> --}}
                                <div class="text-center" style="margin-left: 590px;">
                                    <h5 class="ms-1 " style="color: #247297;">Deal Created</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                            <table class="rfqDT1 table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>RFQ Code</th>
                                        <th>Create Date</th>
                                        <th>Client Type</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($rfqs)
                                        @foreach ($rfqs as $key => $rfq)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ ucfirst($rfq->rfq_code) }}</td>
                                                <td>{{ ucfirst($rfq->create_date) }}</td>
                                                <td>{{ ucfirst($rfq->client_type) }}</td>
                                                <td>{{ ucfirst($rfq->status) }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('deal.edit', [$rfq->id]) }}" class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('deal-sas.show', $rfq->rfq_code) }}"
                                                        class="text-success" title="Create SAS">
                                                        <i class="ph-file-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info mx-2" title="Show Deal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#update_category_{{ $rfq->rfq_code }}">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                    <a href="{{ route('deal.destroy', [$rfq->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                    <!---Category Update modal--->
                                                    <div id="update_category_{{ $rfq->rfq_code }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    @php
                                                                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq->rfq_code)->first();
                                                                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq->rfq_code)->get();
                                                                    @endphp
                                                                    <h5 class="modal-title">Deal Details :
                                                                        {{ $rfq_details->rfq_code }}</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <div class="modal-body border br-7">


                                                                    <div class="row mb-3">
                                                                        <div class="card">
                                                                            <div class="row">
                                                                                <table
                                                                                    class="table table-bordered table-striped p-1">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th> Product Name</th>
                                                                                            <th> Quantity </th>
                                                                                            <th> Sale Price </th>
                                                                                        </tr>

                                                                                        @foreach ($deal_products as $item)
                                                                                            <tr class="bg-gray text-white">
                                                                                                <th>{{ $item->item_name }}
                                                                                                </th>
                                                                                                <th>{{ $item->qty }}
                                                                                                </th>
                                                                                                <th>{{ $item->sub_total_cost }}
                                                                                                </th>
                                                                                            </tr>
                                                                                        @endforeach



                                                                                    </thead>
                                                                                </table>
                                                                            </div>
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
                                                                                            <th>Asking Quantity :
                                                                                                {{ $rfq_details->qty }}
                                                                                            </th>
                                                                                            <th>Phone Number :
                                                                                                {{ $rfq_details->phone }}
                                                                                            </th>
                                                                                            <th>
                                                                                                @if ($rfq_details->call == 1)
                                                                                                    Need To be Called.
                                                                                                @else
                                                                                                @endif
                                                                                            </th>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Assigned Sales Manager (L1)
                                                                                                :
                                                                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                                                                <br>
                                                                                                @if ($rfq_details->sales_man_id_T1)
                                                                                                    Assigned Sales Manager
                                                                                                    (T1)
                                                                                                    :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                                                    <br>
                                                                                                @endif
                                                                                                @if ($rfq_details->sales_man_id_T2)
                                                                                                    Assigned Sales Manager
                                                                                                    (T2) :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                                                                @endif

                                                                                            </th>
                                                                                            <th>
                                                                                                Status : <span
                                                                                                    class="rounded-pill bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                                                            </th>
                                                                                            <th></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>

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
                    <div class="tab-pane fade show" id="js-tab2">
                        <div id="table2" class="card-body">
                            {{-- Add Details Start --}}
                            <div class="text-success nav-link cat-tab3"
                                style="position: relative; z-index: 999; margin-bottom: -40px;">
                                {{-- <a href="{{ route('knowledge.create') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add Solution Details">
                                            <i class="ph-plus icons_design"></i> </span>
                                        <span class="ms-1" style="color: #247297;">Add</span>
                                    </div>
                                </a> --}}
                                <div class="text-center" style="margin-left: 590px;">
                                    <h5 class="ms-1 " style="color: #247297;">
                                        SAS Created</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                            <table class="rfqDT2 table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>RFQ Code</th>
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
                                                <td>{{ ucfirst($deal->create_date) }}</td>
                                                <td>{{ ucfirst($deal->client_type) }}</td>
                                                <td>{{ ucfirst($deal->status) }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('deal.edit', [$deal->id]) }}" class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info mx-2"
                                                        title="Show Deal" data-bs-toggle="modal"
                                                        data-bs-target="#update_category_{{ $deal->rfq_code }}">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                    <a href="{{ route('deal.destroy', [$deal->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                    <!---Category Update modal--->
                                                    <div id="update_category_{{ $deal->rfq_code }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    @php
                                                                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $deal->rfq_code)->first();
                                                                    @endphp
                                                                    <h5 class="modal-title">Deal Details :
                                                                        {{ $rfq_details->rfq_code }}</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <div class="modal-body border br-7">


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
                                                                                                    Need To be Called.
                                                                                                @else
                                                                                                @endif
                                                                                            </th>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Assigned Sales Manager (L1)
                                                                                                :
                                                                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                                                                <br>
                                                                                                @if ($rfq_details->sales_man_id_T1)
                                                                                                    Assigned Sales Manager
                                                                                                    (T1)
                                                                                                    :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                                                    <br>
                                                                                                @endif
                                                                                                @if ($rfq_details->sales_man_id_T2)
                                                                                                    Assigned Sales Manager
                                                                                                    (T2) :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                                                                @endif

                                                                                            </th>
                                                                                            <th>
                                                                                                Status : <span
                                                                                                    class="rounded-pill bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                                                            </th>
                                                                                            <th></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>

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
                    <div class="tab-pane fade" id="js-tab3">
                        <div id="table3" class="card-body">
                            {{-- Add Details Start --}}
                            <div class="text-success nav-link cat-tab3"
                                style="position: relative;
            z-index: 999;
            margin-bottom: -40px;">
                                {{-- <a href="{{ route('knowledge.create') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add Solution Details">
                                            <i class="ph-plus icons_design"></i> </span>
                                        <span class="ms-1" style="color: #247297;">Add</span>
                                    </div>
                                </a> --}}
                                <div class="text-center" style="margin-left: 590px;">
                                    <h5 class="ms-1 " style="color: #247297;">SSAS Approved</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                            <table class="rfqDT3 table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>RFQ Code</th>
                                        <th>Create Date</th>
                                        <th>Client Type</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($approved_sas)
                                        @foreach ($approved_sas as $key => $item)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ ucfirst($item->rfq_code) }}</td>
                                                <td>{{ ucfirst($item->create_date) }}</td>
                                                <td>{{ ucfirst($item->client_type) }}</td>
                                                <td>{{ ucfirst($item->status) }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('deal.edit', [$item->id]) }}" class="text-success"
                                                        title="Edit Deal">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('rfq.destroy', [$item->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-primary"
                                                        data-bs-toggle="modal" title="Send Quotation"
                                                        data-bs-target="#quotation_send_{{ $item->rfq_code }}">
                                                        <i class="icon-paperplane"></i>
                                                    </a>
                                                    <!---Category Update modal--->
                                                    <div id="quotation_send_{{ $item->rfq_code }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    @php
                                                                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $item->rfq_code)->first();
                                                                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $item->rfq_code)->get();
                                                                    @endphp
                                                                    <h5 class="modal-title">Send Quotation :
                                                                        {{ $rfq_details->rfq_code }}</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <div class="modal-body border br-7">

                                                                    <form method="post"
                                                                        action="{{ route('quotation.send', $rfq_details->rfq_code) }}"
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
                                                                                                <th> Product Name</th>
                                                                                                <th> Quantity </th>
                                                                                                <th> Sale Price </th>
                                                                                            </tr>

                                                                                            @if ($deal_products)
                                                                                                @foreach ($deal_products as $item)
                                                                                                    <tr
                                                                                                        class="bg-gray text-white">
                                                                                                        <th>{{ $item->item_name }}
                                                                                                        </th>
                                                                                                        <th>{{ $item->qty }}
                                                                                                        </th>
                                                                                                        <th>{{ $item->sub_total_cost }}
                                                                                                        </th>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                            @endif



                                                                                        </thead>
                                                                                    </table>
                                                                                </div>
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
                                                                                            {{-- <tr>
                                                                                                <th colspan="3" style="background: #7e7d7c">
                                                                                                    <p class="text-center pt-1 text-white">Product Name : {{App\Models\Admin\DealSas::where('id' , $rfq_details->product_id)->value('name')}}</p>
                                                                                                </th>
                                                                                            </tr> --}}
                                                                                            <tr>
                                                                                                <th>Asking Quantity :
                                                                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                                                                </th>
                                                                                                <th>Phone Number :
                                                                                                    {{ $rfq_details->phone }}
                                                                                                </th>
                                                                                                <th>
                                                                                                    Total Price : $
                                                                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                                                                </th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>
                                                                                                    Assigned Sales Manager
                                                                                                    (L1)
                                                                                                    :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                                                                    <br>
                                                                                                    @if ($rfq_details->sales_man_id_T1)
                                                                                                        Assigned Sales
                                                                                                        Manager (T1) :
                                                                                                        {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                                                        <br>
                                                                                                    @endif
                                                                                                    @if ($rfq_details->sales_man_id_T2)
                                                                                                        Assigned Sales
                                                                                                        Manager (T2) :
                                                                                                        {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                                                                    @endif

                                                                                                </th>
                                                                                                <th>
                                                                                                    Status : <span
                                                                                                        class="rounded-pill bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                                                                </th>
                                                                                                <th></th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th colspan="3"
                                                                                                    style="background: #7e7d7c">
                                                                                                    <p
                                                                                                        class="text-center pt-1 text-white">
                                                                                                        Send Quotation To :
                                                                                                        <input
                                                                                                            type="email"
                                                                                                            name="email"
                                                                                                            id=""
                                                                                                            value="{{ $rfq_details->email }}">
                                                                                                    </p>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                    </table>
                                                                                </div>

                                                                            </div>
                                                                        </div>




                                                                        <div class="row">
                                                                            <div class="col-sm-3"></div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Send Quotation
                                                                                    <i
                                                                                        class="icon-paperplane ml-2"></i></button>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---Category Update modal--->
                                                    <a href="javascript:void(0);" class="text-info mx-2"
                                                        title="Show Deal" data-bs-toggle="modal"
                                                        data-bs-target="#update_category_{{ $item->rfq_code }}">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                    <!---Category Update modal--->
                                                    <div id="update_category_{{ $item->rfq_code }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    @php
                                                                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $item->rfq_code)->first();
                                                                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $item->rfq_code)->get();
                                                                    @endphp
                                                                    <h5 class="modal-title">Deal Details :
                                                                        {{ $rfq_details->rfq_code }}</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <div class="modal-body border br-7">


                                                                    <div class="row mb-3">
                                                                        <div class="card">
                                                                            <div class="row">
                                                                                <table
                                                                                    class="table table-bordered table-striped p-1">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th> Product Name</th>
                                                                                            <th> Quantity </th>
                                                                                            <th> Sale Price </th>
                                                                                        </tr>

                                                                                        @if ($deal_products)
                                                                                            @foreach ($deal_products as $item)
                                                                                                <tr
                                                                                                    class="bg-gray text-white">
                                                                                                    <th>{{ $item->item_name }}
                                                                                                    </th>
                                                                                                    <th>{{ $item->qty }}
                                                                                                    </th>
                                                                                                    <th>{{ $item->sub_total_cost }}
                                                                                                    </th>
                                                                                                </tr>
                                                                                            @endforeach
                                                                                        @endif



                                                                                    </thead>
                                                                                </table>
                                                                            </div>
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
                                                                                            <th>Asking Quantity :
                                                                                                {{ $rfq_details->qty }}
                                                                                            </th>
                                                                                            <th>Phone Number :
                                                                                                {{ $rfq_details->phone }}
                                                                                            </th>
                                                                                            <th>
                                                                                                @if ($rfq_details->call == 1)
                                                                                                    Need To be Called.
                                                                                                @else
                                                                                                @endif
                                                                                            </th>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Assigned Sales Manager (L1)
                                                                                                :
                                                                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                                                                <br>
                                                                                                @if ($rfq_details->sales_man_id_T1)
                                                                                                    Assigned Sales Manager
                                                                                                    (T1) :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                                                    <br>
                                                                                                @endif
                                                                                                @if ($rfq_details->sales_man_id_T2)
                                                                                                    Assigned Sales Manager
                                                                                                    (T2) :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                                                                @endif

                                                                                            </th>
                                                                                            <th>
                                                                                                Status : <span
                                                                                                    class="rounded-pill bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                                                            </th>
                                                                                            <th></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>

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
                    <div class="tab-pane fade" id="js-tab4">
                        <div id="table4" class="card-body">
                            {{-- Add Details Start --}}
                            <div class="text-success nav-link cat-tab3"
                                style="position: relative; z-index: 999; margin-bottom: -40px;">
                                {{-- <a href="{{ route('knowledge.create') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add Solution Details">
                                            <i class="ph-plus icons_design"></i> </span>
                                        <span class="ms-1" style="color: #247297;">Add</span>
                                    </div>
                                </a> --}}
                                <div class="text-center" style="margin-left: 590px;">
                                    <h5 class="ms-1 " style="color: #247297;">Quoted</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                            <table class="rfqDT4 table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>RFQ Code</th>
                                        <th>Create Date</th>
                                        <th>Client Type</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($quoted)
                                        @foreach ($quoted as $key => $deal)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ ucfirst($deal->rfq_code) }}</td>
                                                <td>{{ ucfirst($deal->create_date) }}</td>
                                                <td>{{ ucfirst($deal->client_type) }}</td>
                                                <td>{{ ucfirst($deal->status) }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('deal.edit', [$deal->id]) }}" class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('rfq.destroy', [$deal->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-info mx-2"
                                                        title="Show Deal" data-bs-toggle="modal"
                                                        data-bs-target="#update_category_{{ $deal->rfq_code }}">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                    <!---Category Update modal--->
                                                    <div id="update_category_{{ $deal->rfq_code }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    @php
                                                                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $deal->rfq_code)->first();
                                                                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $deal->rfq_code)->get();
                                                                    @endphp
                                                                    <h5 class="modal-title">Deal Details :
                                                                        {{ $rfq_details->rfq_code }}</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <div class="modal-body border br-7">


                                                                    <div class="row mb-3">
                                                                        <div class="card">
                                                                            <div class="row">
                                                                                <table
                                                                                    class="table table-bordered table-striped p-1">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th> Product Name</th>
                                                                                            <th> Quantity </th>
                                                                                            <th> Sale Price </th>
                                                                                        </tr>

                                                                                        @if ($deal_products)
                                                                                            @foreach ($deal_products as $item)
                                                                                                <tr
                                                                                                    class="bg-gray text-white">
                                                                                                    <th>{{ $item->item_name }}
                                                                                                    </th>
                                                                                                    <th>{{ $item->qty }}
                                                                                                    </th>
                                                                                                    <th>{{ $item->sub_total_cost }}
                                                                                                    </th>
                                                                                                </tr>
                                                                                            @endforeach
                                                                                        @endif



                                                                                    </thead>
                                                                                </table>
                                                                            </div>
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
                                                                                            <th>Asking Quantity :
                                                                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                                                            </th>
                                                                                            <th>Phone Number :
                                                                                                {{ $rfq_details->phone }}
                                                                                            </th>
                                                                                            <th>
                                                                                                Total Price : $
                                                                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                                                            </th>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Assigned Sales Manager (L1)
                                                                                                :
                                                                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                                                                <br>
                                                                                                @if ($rfq_details->sales_man_id_T1)
                                                                                                    Assigned Sales Manager
                                                                                                    (T1)
                                                                                                    :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                                                    <br>
                                                                                                @endif
                                                                                                @if ($rfq_details->sales_man_id_T2)
                                                                                                    Assigned Sales Manager
                                                                                                    (T2) :
                                                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                                                                @endif

                                                                                            </th>
                                                                                            <th>
                                                                                                Status : <span
                                                                                                    class="rounded-pill bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                                                            </th>
                                                                                            <th></th>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th colspan="3"
                                                                                                style="background: #7e7d7c">
                                                                                                <p
                                                                                                    class="text-center pt-1 text-white">
                                                                                                    Send Quotation To :
                                                                                                    <input type="email"
                                                                                                        name="email"
                                                                                                        id=""
                                                                                                        value="{{ $rfq_details->email }}">
                                                                                                </p>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>

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
                    targets: [5],
                }, ],
            });
            $('.rfqDT3').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
            $('.rfqDT4').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    // $("#cat-tab2").addClass('d-none');
                    // $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".quotation_title").addClass('d-none');
                    $(".quoted_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    // $("#cat-tab1").addClass('d-none');
                    // $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                    $(".quotation_title").addClass('d-none');
                    $(".quoted_title").addClass('d-none');
                });
                $(".cat-tab3").click(function() {
                    // $("#cat-tab1").addClass('d-none');
                    // $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".quotation_title").removeClass('d-none');
                    $(".quoted_title").addClass('d-none');
                });
                $(".cat-tab4").click(function() {
                    // $("#cat-tab1").addClass('d-none');
                    // $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".quotation_title").addClass('d-none');
                    $(".quoted_title").removeClass('d-none');
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

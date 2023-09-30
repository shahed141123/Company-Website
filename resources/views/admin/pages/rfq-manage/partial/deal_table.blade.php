<style>
    .devider-text {
        position: relative;
        bottom: -10px;
        background: #247297;
        z-index: 9;
        width: 15%;
        color: white;
        border-radius: 10px;
        left: 25px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
</style>
<table class="rfqDT2 table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th width="20%">RFQ Code</th>
            <th width="15%">Create Date</th>
            <th width="7%">Details</th>
            <th style="width:20px !important;">Status</th>
            <th width="25%" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @if ($deals)
            @foreach ($deals as $key => $deal)
                <tr class="text-center">
                    <td>{{ ucfirst($deal->rfq_code) }}</td>
                    <td>{{ ucfirst($deal->create_date) }}</td>
                    <td>
                        <a href="javascript:void(0);" class="text-info mx-2" title="Show Deal" data-bs-toggle="modal"
                            data-bs-target="#show-deals-{{ $deal->rfq_code }}">
                            <i class="icon-eye"></i>
                        </a>

                        <!---Category Update modal--->
                        <div id="show-deals-{{ $deal->rfq_code }}" class="modal fade" tabindex="-1"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg rounded-0">
                                <div class="modal-content rounded-0">
                                    <div class="modal-header rounded-0">
                                        @php
                                            $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $deal->rfq_code)->first();
                                            $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                                        @endphp
                                        <h5 class="modal-title">Deal Details : {{ $rfq_details->rfq_code }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>


                                    <div class="modal-body border br-7">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="devider-text mb-0 p-1">Client Detils</p>
                                                <div class="border card rounded-0">
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12 d-flex justify-content-between">
                                                            <p class="p-2 m-0">
                                                                <strong>Client Type :</strong>
                                                                {{ ucfirst($rfq_details->client_type) }}
                                                            </p>
                                                            <p class="p-2 m-0">
                                                                <strong>Name :</strong>
                                                                {{ ucfirst($rfq_details->name) }}
                                                            </p>
                                                            <p class="p-2 m-0">
                                                                <strong>Company Name :</strong>
                                                                {{ ucfirst($rfq_details->company_name) }}
                                                            </p>
                                                            <p class="p-2 m-0">
                                                                <strong>Phone Number : </strong>
                                                                {{ $rfq_details->phone }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="devider-text mb-0 p-1">RFQ Details</p>
                                                <div class="border card rounded-0">
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive p-2">
                                                                <table class="table table-bordered table-striped p-1">
                                                                    <thead
                                                                        style="background-color: #2472979e !important;color: white !important;">
                                                                        @if (count($deal_products) > 0)
                                                                            <tr>
                                                                                <th class="p-0"> Product Name</th>
                                                                                <th class="p-0"> Quantity </th>
                                                                                <th class="p-0"> Sale Price </th>
                                                                            </tr>

                                                                            @foreach ($deal_products as $item)
                                                                                <tr class="text-black bg-white">
                                                                                    <td>{{ $item->item_name }}</td>
                                                                                    <td>{{ $item->qty }}</td>
                                                                                    <td>{{ $item->sub_total_cost }}
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @else
                                                                        @endif
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                            <div class="row py-3">
                                                                <div class="col-lg-4 align-items-center">
                                                                    <strong>Asking Quantity : </strong>
                                                                    @if (App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') > 0)
                                                                        {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                                    @else
                                                                        {{ $rfq_details->qty }}
                                                                    @endif
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <strong> Total Price : $ </strong>
                                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <strong>Status : </strong>
                                                                    <span
                                                                        class="badge bg-success p-1">{{ ucfirst($rfq_details->status) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row pb-2">
                                                                <div class="col-lg-4">
                                                                    <strong>Assigned Sales Manager (L1) :</strong> <br>
                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}


                                                                </div>
                                                                <div class="col-lg-4">
                                                                    @if ($rfq_details->sales_man_id_T1)
                                                                        <strong>Assigned Sales Manager (T1) :</strong>
                                                                        <br>
                                                                        {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                    @endif
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    @if ($rfq_details->sales_man_id_T2)
                                                                        <strong> Assigned Sales Manager (T2) :</strong>
                                                                        <br>
                                                                        {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <span class="badge bg-success">{{ ucfirst($deal->status) }}</span>
                    </td>

                    <td class="text-center">

                        <a href="{{ route('single-rfq.show', $deal->rfq_code) }}" class="text-success mx-3 float-start"
                            title="Go to Details">
                            <i class="mi-airplay mi-1x"></i>
                        </a>
                        <a href="{{ route('deal.edit', $deal->id) }}" class="text-success mx-3 float-start"
                            title="Deal Edit">
                            <i class="icon-pen mi-1x"></i>
                        </a>
                        @if ($deal->status == 'rfq_created')
                            <a href="javascript:void(0);" class="text-primary mx-3" data-bs-toggle="modal"
                                title="View & Assign Sales Manager"
                                data-bs-target="#assign-manager-{{ $deal->rfq_code }}">
                                <i class="ph-user-circle-plus"></i>
                            </a>
                        @endif

                        @if ($deal->status == 'assigned')
                            <a href="{{ route('deal.convert', [$deal->id]) }}" class="text-success mx-3"
                                title="Convert To Deal">
                                <i class="icon-pen-plus icon-1x"></i>
                            </a>
                        @endif
                        @if ($deal->status == 'deal_created')
                            <a href="{{ route('deal-sas.show', $deal->rfq_code) }}" class="text-success mx-3"
                                title="Create SAS">
                                <i class="ph-file-plus"></i>
                            </a>
                        @endif
                        @if ($deal->status == 'sas_created')
                            <a href="{{ route('deal-sas.edit', $deal->rfq_code) }}" class="text-info mx-2">
                                <i class="icon-pencil"></i>
                            </a>
                            <a href="{{ route('dealsasapprove', $deal->rfq_code) }}" class="text-warning mx-3">
                                <i class="mi-check-circle"></i>
                            </a>
                        @endif
                        @if ($deal->status == 'sas_approved')
                            <a href="javascript:void(0);" class="text-primary mx-3" data-bs-toggle="modal"
                                title="Send Quotation" data-bs-target="#quotation-send-{{ $deal->rfq_code }}">
                                <i class="icon-paperplane"></i>
                            </a>
                        @endif
                        <a href="{{ route('rfq.destroy', [$deal->id]) }}" class="text-danger delete mx-2 float-end">
                            <i class="delete icon-trash"></i>
                        </a>

                        <!---Assign Manager modal--->
                        <div id="assign-manager-{{ $deal->rfq_code }}" class="modal fade" tabindex="-1"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        @php
                                            $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $deal->rfq_code)->first();
                                        @endphp
                                        <h5 class="modal-title">Assign Sales Manager For RFQ No :
                                            {{ $rfq_details->rfq_code }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
                                                        <table class="table table-bordered table-striped p-1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Client Type :
                                                                        {{ ucfirst($rfq_details->client_type) }}
                                                                    </th>
                                                                    <th>
                                                                        Name : {{ ucfirst($rfq_details->name) }}
                                                                    </th>
                                                                    <th>
                                                                        Company Name :
                                                                        {{ ucfirst($rfq_details->company_name) }}
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="3" style="background: #7e7d7c">
                                                                        <p class="text-center pt-1 text-white">Product
                                                                            Name :
                                                                            {{ App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name') }}
                                                                        </p>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Asking Quantity : {{ $rfq_details->qty }}</th>
                                                                    <th>Phone Number : {{ $rfq_details->phone }}</th>
                                                                    <th>
                                                                        @if ($rfq_details->call == 1)
                                                                            Need To be Called.
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
                                                            <a class="p-1 editRfquser" href="javascript:void(0);">
                                                                <i class="ph-note-pencil" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-12 Rfquser" style="display:none">
                                                            <div class="row mb-3 p-2 border">
                                                                <div class="col-12">
                                                                    <h5 class="text-center">Assigned Sales Manager</h5>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="col-sm-12">
                                                                        <p class="mb-0">Sales Manager Name (Leader -
                                                                            L1) <span class="text-danger">*</span></p>
                                                                    </div>
                                                                    <div class="form-group text-secondary col-sm-12">
                                                                        <select name="sales_man_id_L1"
                                                                            class="form-control select"
                                                                            data-minimum-results-for-search="Infinity"
                                                                            data-placeholder="Choose  ">
                                                                            <option></option>
                                                                            @foreach ($users as $user)
                                                                                <option value="{{ $user->id }}">
                                                                                    {{ $user->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="col-sm-12">
                                                                        <p class="mb-0">Sales Manager Name (Team -
                                                                            T1)</p>
                                                                    </div>
                                                                    <div class="form-group text-secondary col-sm-12">
                                                                        <select name="sales_man_id_T1"
                                                                            class="form-control select"
                                                                            data-minimum-results-for-search="Infinity"
                                                                            data-placeholder="Choose  ">
                                                                            <option></option>
                                                                            @foreach ($users as $user)
                                                                                <option value="{{ $user->id }}">
                                                                                    {{ $user->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="col-sm-12">
                                                                        <p class="mb-0">Sales Manager Name (Team -
                                                                            T2)</p>
                                                                    </div>
                                                                    <div class="form-group text-secondary col-sm-12">
                                                                        <select name="sales_man_id_T2"
                                                                            class="form-control select"
                                                                            data-minimum-results-for-search="Infinity"
                                                                            data-placeholder="Choose ">
                                                                            <option></option>
                                                                            @foreach ($users as $user)
                                                                                <option value="{{ $user->id }}">
                                                                                    {{ $user->name }}</option>
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
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!---Assign Manager modal--->
                        <!---Send Quotation modal--->
                        <div id="quotation-send-{{ $deal->rfq_code }}" class="modal fade" tabindex="-1"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        @php
                                            $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $deal->rfq_code)->first();
                                            $deal_products = App\Models\Admin\DealSas::where('rfq_code', $deal->rfq_code)->get();
                                        @endphp
                                        <h5 class="modal-title">Send Quotation : {{ $rfq_details->rfq_code }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
                                                        <table class="table table-bordered table-striped p-1">
                                                            <thead>
                                                                <tr>
                                                                    <th> Product Name</th>
                                                                    <th> Quantity </th>
                                                                    <th> Sale Price </th>
                                                                </tr>

                                                                @if ($deal_products)
                                                                    @foreach ($deal_products as $item)
                                                                        <tr class="bg-gray text-white">
                                                                            <th>{{ $item->item_name }}</th>
                                                                            <th>{{ $item->qty }}</th>
                                                                            <th>{{ $item->sub_total_cost }}</th>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif



                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="row">
                                                        <table class="table table-bordered table-striped p-1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Client Type :
                                                                        {{ ucfirst($rfq_details->client_type) }}
                                                                    </th>
                                                                    <th>
                                                                        Name : {{ ucfirst($rfq_details->name) }}
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
                                                                    <th>Phone Number : {{ $rfq_details->phone }}</th>
                                                                    <th>
                                                                        Total Price : $
                                                                        {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Assigned Sales Manager (L1) :
                                                                        {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                                        <br>
                                                                        @if ($rfq_details->sales_man_id_T1)
                                                                            Assigned Sales Manager (T1) :
                                                                            {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                            <br>
                                                                        @endif
                                                                        @if ($rfq_details->sales_man_id_T2)
                                                                            Assigned Sales Manager (T2) :
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
                                                                    <th colspan="3" style="background: #7e7d7c">
                                                                        <p class="text-center pt-1 text-white">Send
                                                                            Quotation To : <input type="email"
                                                                                name="email" id=""
                                                                                value="{{ $rfq_details->email }}"></p>
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
                                                    <button type="submit" class="btn btn-primary">Send Quotation <i
                                                            class="icon-paperplane ml-2"></i></button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!---Send Quotation modal--->

                    </td>

                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<table class="rfqDT1 table table-bordered table-hover">
    <thead>
        <tr class="text-center">
            <th width="10%">RFQ Code</th>
            <th width="12%">Created At</th>
            <th width="18%">Client Name</th>
            <th width="20%">Client Email</th>
            <th width="8%">Status</th>
            <th width="5%">Details</th>
            <th width="15%" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @if ($rfqs)
            @foreach ($rfqs as $key => $rfq)
                <tr class="text-center">
                    <td>{{ ucfirst($rfq->rfq_code) }}</td>
                    <td>{{ ucfirst($rfq->create_date) }}</td>
                    <td>{{ ucfirst($rfq->name) }}</td>
                    <td style="text-transform: lowercase;">{{ ucfirst($rfq->email) }}</td>
                    <td><span class="text-muted p-1">{{ ucfirst($rfq->status) }}</span></td>
                    <td>
                        <!-- Show RFQ Details Modal Trigger -->
                        <a href="javascript:void(0);" class="text-info mx-2" title="Show RFQ Details"
                            data-bs-toggle="modal" data-bs-target="#assign-manager-{{ $rfq->rfq_code }}">
                            <i class="fa-regular fa-eye dash-icons"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <!-- Go to Details Link -->
                        <a href="{{ route('single-rfq.show', $rfq->rfq_code) }}" class="text-success"
                            title="Go to Details">
                            <i class="fa-solid fa-display dash-icons me-3"></i>
                        </a>

                        @if ($rfq->status == 'rfq_created')
                            <!-- View & Assign Sales Manager Modal Trigger -->
                            <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                title="View & Assign Sales Manager"
                                data-bs-target="#assign-manager-{{ $rfq->rfq_code }}">
                                <i class="fa-solid fa-user-tie dash-icons me-3"></i>
                            </a>
                        @endif

                        @if ($rfq->status == 'assigned')
                            <!-- Convert To Deal Link -->
                            <a href="{{ route('deal.convert', [$rfq->id]) }}" class="text-success"
                                title="Convert To Deal">
                                <i class="icon-pen-plus dash-icons me-3"></i>
                            </a>
                        @endif

                        <!-- Delete Deal Link -->
                        <a href="{{ route('rfq.destroy', [$rfq->id]) }}" class="text-danger delete" title="Delete Deal">
                            <i class="delete fa-solid fa-trash dash-icons me-3"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

{{-- Modals --}}
@foreach ($rfqs as $rfq)
    <div id="show-deals-{{ $deal->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg rounded-0 modal-dialog-centered">
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
                                        <p class="p-2 m-0 text-start">
                                            <span class="text-secondary">Client Type :</span> <br>
                                            {{ ucfirst($rfq_details->client_type) }}
                                        </p>
                                        <p class="p-2 m-0 text-start">
                                            <span class="text-secondary">Name :</span> <br>
                                            {{ ucfirst($rfq_details->name) }}
                                        </p>
                                        <p class="p-2 m-0 text-start">
                                            <span class="text-secondary">Company Name :</span> <br>
                                            {{ ucfirst($rfq_details->company_name) }}
                                        </p>
                                        <p class="p-2 m-0 text-start">
                                            <span class="text-secondary">Phone Number : </span> <br>
                                            {{ $rfq_details->phone }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p class="devider-text mb-0 p-1">RFQ Details</p>
                            <div class="border card rounded-0">
                                <div class="row mt-1 px-0 pt-2">
                                    <div class="col-lg-12">
                                        <div class="table-responsive p-2">
                                            <table class="table table-bordered table-striped p-1">
                                                <thead
                                                    style="background-color: #2472979e !important;color: white !important;">
                                                    @if (count($deal_products) > 0)
                                                        <tr>
                                                            <th class="p-1"> Product Name</th>
                                                            <th class="p-1"> Quantity </th>
                                                            <th class="p-1"> Sale Price </th>
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
                                        <div class="row py-3 px-3">
                                            <div class="col-lg-4 text-start">
                                                <p class="p-0 m-0 text-secondary">Asking Quantity : </p> bt
                                                @if (App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') > 0)
                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                @else
                                                    {{ $rfq_details->qty }}
                                                @endif
                                            </div>
                                            <div class="col-lg-4 text-start">
                                                <p class="p-0 m-0 text-secondary"> Total Price : $ </p>
                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                            </div>
                                            <div class="col-lg-4 text-start">
                                                <p class="p-0 m-0 text-secondary">Status : </p>
                                                <span
                                                    class="text-success p-1">{{ ucfirst($rfq_details->status) }}</span>
                                            </div>
                                        </div>
                                        <div class="row pb-3 px-3">
                                            <div class="col-lg-4 text-start">
                                                <p class="p-0 m-0 text-secondary">Assigned Sales Manager (L1) :</p>
                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}


                                            </div>
                                            <div class="col-lg-4 text-start">
                                                @if ($rfq_details->sales_man_id_T1)
                                                    <p class="p-0 m-0 text-secondary">Assigned Sales Manager (T1) :</p>
                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                @endif
                                            </div>
                                            <div class="col-lg-4 text-start">
                                                @if ($rfq_details->sales_man_id_T2)
                                                    <p class="p-0 m-0 text-secondary"> Assigned Sales Manager (T2) :</p>
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
    <div id="assign-manager-{{ $rfq->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Assign Sales Manager For RFQ No : {{ $rfq->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">
                    <form method="post" action="{{ route('assign.salesman', $rfq->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <p class="devider-text mb-0 p-1">Client Detils</p>
                                        <div class="border card rounded-0">
                                            <div class="row mt-1">
                                                <div class="col-lg-12 d-flex justify-content-between">
                                                    <p class="p-2 m-0 text-start">
                                                        <span class="text-secondary">Client Type :</span> <br>
                                                        {{ !empty($rfq->client_type) ? ucfirst($rfq->client_type) : 'Anonymous' }}
                                                    </p>
                                                    <p class="p-2 m-0 text-start">
                                                        <span class="text-secondary">Name :</span> <br>
                                                        {{ ucfirst($rfq->name) }}
                                                    </p>
                                                    <p class="p-2 m-0 text-start">
                                                        <span class="text-secondary">Company Name :</span> <br>
                                                        {{ ucfirst($rfq->company_name) }}
                                                    </p>
                                                    <p class="p-2 m-0 text-start">
                                                        <span class="text-secondary">Phone Number : </span> <br>
                                                        {{ $rfq->phone }}
                                                    </p>
                                                    @if ($rfq->call == 1)
                                                        <p class="p-2 m-0 text-start">
                                                            <span class="badge bg-success">Call Required</span>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <p class="devider-text mb-0 p-1">RFQ Details</p>
                                        <div class="border card rounded-0">
                                            <div class="row mt-1 px-0 pt-2">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive p-2">
                                                        <table class="table table-bordered table-striped p-1">
                                                            <thead
                                                                style="background-color: #2472979e !important;color: white !important;">
                                                                @if (count($rfq->rfqProducts) > 0)
                                                                    <tr>
                                                                        <th class="p-1"> Product Name</th>
                                                                        <th class="p-1"> Quantity </th>
                                                                    </tr>

                                                                    @foreach ($rfq->rfqProducts as $product)
                                                                        <tr class="text-black bg-white">
                                                                            <td>{{ $product->product_name }}</td>
                                                                            <td>{{ $product->qty }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                @endif
                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="row pb-3 px-3">
                                                        <div class="col-lg-4 text-start">
                                                            <p class="p-0 m-0 text-secondary">Assigned Sales Manager
                                                                (L1) :</p>
                                                            {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}


                                                        </div>
                                                        <div class="col-lg-4 text-start">
                                                            @if ($rfq_details->sales_man_id_T1)
                                                                <p class="p-0 m-0 text-secondary">Assigned Sales
                                                                    Manager (T1) :</p>
                                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                            @endif
                                                        </div>
                                                        <div class="col-lg-4 text-start">
                                                            @if ($rfq_details->sales_man_id_T2)
                                                                <p class="p-0 m-0 text-secondary"> Assigned Sales
                                                                    Manager (T2) :</p>
                                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="table border p-1">
                                    <tbody>
                                        
                                        <tr>
                                            <td colspan="2">
                                                Assigned Sales Manager (L1) :
                                                {{ App\Models\User::where('id', $rfq->sales_man_id_L1)->value('name') }}
                                                <br>
                                                @if ($rfq->sales_man_id_T1)
                                                    Assigned Sales Manager (T1) :
                                                    {{ App\Models\User::where('id', $rfq->sales_man_id_T1)->value('name') }}
                                                    <br>
                                                @endif
                                                @if ($rfq->sales_man_id_T2)
                                                    Assigned Sales Manager (T2) :
                                                    {{ App\Models\User::where('id', $rfq->sales_man_id_T2)->value('name') }}
                                                @endif
                                            </td>
                                            <td>
                                                Status :
                                                <span class="badge bg-success p-1">{{ ucfirst($rfq->status) }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row p-2">
                                    <div class="col-12 text-center">
                                        <strong>Assign Sales Manager :</strong>
                                        <a class="p-1 editRfquser" href="javascript:void(0);">
                                            <i class="ph-note-pencil text-success" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 Rfquser" style="display:none">
                                        <div class="row mb-1 p-2 border">
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <p class="mb-0">Sales Manager Name (Leader - L1)
                                                        <span class="text-danger">*</span>
                                                    </p>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_L1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose Sales Manager">
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
                                                    <p class="mb-0">Sales Manager Name (Team - T1)</p>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose Sales Manager">
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
                                                    <p class="mb-0">Sales Manager Name (Team - T2)</p>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T2" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose Sales Manager">
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
                </div>
                <div class="modal-footer border p-1 Rfquser" style="display:none">
                    <div class="row">
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

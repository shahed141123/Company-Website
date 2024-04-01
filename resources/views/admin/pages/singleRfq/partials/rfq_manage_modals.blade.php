<!-------Modals----->

<!---Deal Show modal--->
<div id="show-deals-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header py-1">
                @php
                    $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                    $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                @endphp
                <h5 class="modal-title">Deal Details : {{ $rfq_details->rfq_code }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border br-7 p-1 m-0">


                <div class="row mb-3">
                    <div class="card">

                        <div class="row">
                            <table class="table table-bordered table-striped p-1">
                                <thead>
                                    <tr>
                                        <th>
                                            Client Type : {{ ucfirst($rfq_details->client_type) }}
                                        </th>
                                        <th>
                                            Name : {{ ucfirst($rfq_details->name) }}
                                        </th>
                                        <th>
                                            Company Name : {{ ucfirst($rfq_details->company_name) }}
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Asking Quantity : @if (App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') > 0)
                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                            @else
                                                {{ $rfq_details->qty }}
                                            @endif
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
                                                class="badge bg-success p-1">{{ ucfirst($rfq_details->status) }}</span>


                                        </th>
                                        <th></th>
                                    </tr>

                                </thead>
                            </table>
                        </div>
                        <div class="row">
                            <table class="table table-bordered table-striped p-1">
                                <thead>
                                    @if (count($deal_products) > 0)
                                        <tr>
                                            <th> Product Name</th>
                                            <th> Quantity </th>
                                            <th> Sale Price </th>
                                        </tr>

                                        @foreach ($deal_products as $item)
                                            <tr class="bg-gray text-white">
                                                <th>{{ $item->item_name }}</th>
                                                <th>{{ $item->qty }}</th>
                                                <th>{{ $item->sub_total_cost }}</th>
                                            </tr>
                                        @endforeach
                                    @else
                                    @endif
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
<!---Deal Show modal--->

<!---Assign Manager modal--->
<div id="assign-manager-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header py-1">
                @php
                    $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                @endphp
                <h5 class="modal-title">Assign Sales Manager new-3 For RFQ No : {{ $rfq_details->rfq_code }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border br-7 px-3  m-0">

                <form method="post" action="{{ route('assign.salesman', $rfq_details->rfq_code) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <span class="text-info fw-bold">Client Details</span>
                            <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="text-info"> Client Type</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        @if (!empty($rfq_details->client_type))
                                            :{{ ucfirst($rfq_details->client_type) }}
                                        @else
                                            : Online
                                        @endif
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="text-info"> Name </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        : {{ ucfirst($rfq_details->name) }}
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="text-info"> Company </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        : {{ ucfirst($rfq_details->company_name) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <span class="text-info fw-bold">Client Details Part 2</span>
                            <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">

                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="text-info">Quantity </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        : {{ $rfq_details->qty }}
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="text-info">Phone </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        : {{ $rfq_details->phone }}
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="text-info">Called </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <span class="">:</span>
                                        @if ($rfq_details->call == 1)
                                            Need To be Called.
                                        @else
                                        @endif
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <span class="text-info fw-bold">Assigne Sales Manager</span>
                            <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="text-info"> Product </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        :
                                        {{ App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name') }}
                                    </div>
                                </div>
                                <div class="row  d-flex align-items-center justify-content-center">
                                    <div class="col-lg-4">
                                        <span>Assigne </span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span class="me-2">:</span><a href="javascript:void(0);"
                                            class="btn navigation_btn editRfquser">
                                            <div class="d-flex align-items-center ">
                                                <i class="ph-note-pencil me-1" style="font-size: 10px;"></i>
                                                <span>Now </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                {{--  --}}


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 Rfquser mt-2" style="display:none">
                            <span class="text-info fw-bold">Sales Manager</span>
                            <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">
                                <div class="row  p-2 ">
                                    <div class="col-lg-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-sm-6">
                                                <span>Leader - L1</span>
                                            </div>
                                            <div class="form-group text-secondary col-sm-6">
                                                <select name="sales_man_id_L1" class="form-control select"
                                                    data-placeholder="Choose  ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-sm-6">
                                                <span>Team - T1</span>
                                            </div>
                                            <div class="form-group text-secondary col-sm-6">
                                                <select name="sales_man_id_T1" class="form-control select"
                                                    data-placeholder="Choose  ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-sm-6">
                                                <span>Team - T2</span>
                                            </div>
                                            <div class="form-group text-secondary col-sm-6">
                                                <select name="sales_man_id_T2"
                                                    class="form-control form-select-sm select"
                                                    data-container-css-class="select-sm" data-placeholder="Chose Type"
                                                    required>
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
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
                    <div class="modal-footer border-0 pb-2 pe-3">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 4px 9px;">Submit</button>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>
<!---Assign Manager modal--->

<!---Send Quotation modal--->
<div id="quotation-send-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header py-1">
                @php
                    $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                    $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                @endphp
                <h5 class="modal-title">Send Quotation : {{ $rfq_details->rfq_code }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form method="post" action="{{ route('quotation.send', $rfq_details->rfq_code) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="container">
                        <div class="row mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th> Product Name</th>
                                                    <th> Quantity </th>
                                                    <th> Sale Price </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($deal_products)
                                                    @foreach ($deal_products as $item)
                                                        <tr class="text-black">
                                                            <td>{{ $item->item_name }}</td>
                                                            <td>{{ $item->qty }}</td>
                                                            <td>{{ $item->sub_total_cost }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Client Type : {{ ucfirst($rfq_details->client_type) }}
                                                    </td>
                                                    <td>
                                                        Name : {{ ucfirst($rfq_details->name) }}
                                                    </td>
                                                    <td>
                                                        Company Name : {{ ucfirst($rfq_details->company_name) }}
                                                    </td>
                                                </tr>
                                                {{-- <tr>
                                                                <td colspan="3" style="background: #7e7d7c">
                                                                    <p class="text-center pt-1 text-white">Product Name : {{App\Models\Admin\DealSas::where('id' , $rfq_details->product_id)->value('name')}}</p>
                                                                </td>
                                                            </tr> --}}
                                                <tr>
                                                    <td>Asking Quantity :
                                                        {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                    </td>
                                                    <td>Phone Number : {{ $rfq_details->phone }}</td>
                                                    <td>
                                                        Total Price : $
                                                        {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
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

                                                    </td>
                                                    <td>
                                                        Status : <span
                                                            class="badge bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="background: #7e7d7c">
                                                        <p class="text-center pt-1 text-white">PQ NO:
                                                            <input class="form-control form-control-sm" type="text"
                                                                name="pq_code" placeholder="NG-BD/Genexis/RV/231021">
                                                        </p>
                                                    </td>
                                                    <td style="background: #7e7d7c">
                                                        <p class="text-center pt-1 text-white">PQR NO:
                                                            <input class="form-control form-control-sm" type="text"
                                                                name="pqr_code_one" placeholder="MEO-P021(T10)-W(L1)">
                                                        </p>
                                                    </td>
                                                    <td style="background: #7e7d7c">
                                                        <p class="text-center pt-1 text-white">Currency:
                                                            <select name="currency"
                                                                class="form-control form-control-sm select"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Chose Currency" required>
                                                                <option value="taka">
                                                                    Taka
                                                                </option>
                                                                <option value="dollar">
                                                                    Dollar</option>
                                                                {{-- <option value="Others">
                                                                    Others</option> --}}
                                                            </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="background: #7e7d7c">
                                                        <p class="text-center pt-1 text-white">Send Quotation To :
                                                            <input class="form-control form-control-sm" type="email"
                                                                name="email" value="{{ $rfq_details->email }}">
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-6"></div>
                        <div class="col-lg-4 col-6 text-secondary text-right">
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


<!---Send Invoice modal--->
<div id="invoice-send-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-1">
                @php
                    $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                    $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                @endphp
                <h5 class="modal-title">Send Invoice For {{ $rfq_details->rfq_code }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border">
                <form method="post" action="{{ route('invoice.send', $rfq_details->rfq_code) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row mb-3">
                            <div class="card">
                                <div class="card-body table-responsive">

                                    @if (!empty($sourcing->grand_total))
                                        <table class="table table-bordered" style="width: 100%;height: auto;">


                                            <tbody>
                                                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                    <th width="40%">Product Description</th>
                                                    <th width="14%">Quantity</th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">Discount </th>
                                                        <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">Unit Price </th>
                                                    @endif

                                                    <th width="15%">Unit Total</th>
                                                </tr>

                                                @foreach ($deal_products as $key => $item)
                                                    <tr>
                                                        <td>
                                                            <a class="text-black"
                                                                title="{{ $item->item_name }}">{{ Str::limit($item->item_name, 28) }}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $item->qty }}</td>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ $item->regular_discount }} % </th>
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @else
                                                            <th width="10%" class="rg_unit">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @endif

                                                        <td class="text-center">$
                                                            {{ $item->sales_price }}</td>
                                                    </tr>
                                                @endforeach


                                                <tr>
                                                    <th> </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td class="text-center"> Sub Total </td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->sub_total_sales }}</td>
                                                </tr>
                                                @if ($rfq_details->special == '1')
                                                    <tr class="special_discount">
                                                        <th> </th>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                        @else
                                                            <th width="10%" class="rg_unit"></th>
                                                        @endif
                                                        <td class="text-center">
                                                            Special discount </td>
                                                        <td class="text-center">
                                                            {{ $sourcing->special_discount }} %</td>
                                                        <td class="text-center"> $
                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                    </tr>
                                                @endif



                                                <tr>
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <th class="text-center"> Total </th>
                                                    <td class="text-center">
                                                        $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                                </tr>
                                            </tbody>



                                        </table>

                                        @if ($rfq_details->tax_status == '1')
                                            <table class="table table-bordered mt-2 expand-div1 d-none">
                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}
                                                </td>
                                                </tr>

                                            </table>
                                        @endif

                                    @endif
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header m-0 p-0" style="background: black;">
                                    <h6 class="mb-0 text-center p-0 text-white">Send Invoice</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="m-0 text-center">Work Order No </h6>
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="work_order_no"
                                                    value="{{ $rfq_details->work_order_no }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="m-0 text-center">Email Id to Send Invoice</h6>
                                            </div>
                                            <div class="col-sm-12 m-auto" style="width:60%;">
                                                <input type="text" class="form-control" name="email"
                                                    value="{{ $rfq_details->email }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 col-6"></div>
                            <div class="col-lg-4 col-6 text-secondary text-right">
                                <button type="submit" class="btn btn-primary">Send Invoice <i
                                        class="icon-paperplane ms-2"></i></button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>
<!---Send Invoice modal--->

<!---Show SAS modal--->
@if ($sourcing != null)
    <div id="show-sas" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header py-1">

                    <h5 class="modal-title">SAS Details : {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7 p-1 m-0">
                    <div class="content">

                        <div class="center d-none">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="regular" value="1"
                                    id="flexRadioDefault1" {{ $rfq_details->regular == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Regular Discount
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="special" value="1"
                                    id="flexRadioDefault1" {{ $rfq_details->special == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Special Discount
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tax_status" value="1"
                                    id="flexRadioDefault1" {{ $rfq_details->tax_status == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Tax / VAT
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="m-auto" style="width:80%;">
                                        <div class="bg-dark mb-2">
                                            <table class="text-center table table-hover br-7">
                                                <thead>
                                                    <tr class="br-7">
                                                        <th class="text-white">RFQ Code :
                                                            {{ $rfq_details->rfq_code }}
                                                            <input type="hidden" name="rfq_code"
                                                                value="{{ $rfq_details->rfq_code }}">
                                                            <input type="hidden" name="rfq_id"
                                                                value="{{ $rfq_details->id }}">
                                                        </th>
                                                        <th class="text-white">SAS Create Date :
                                                            {{ $rfq_details->create_date }}

                                                        </th>
                                                        <th class="text-white text-center">
                                                            This Deal is for our @if ($rfq_details->client_type == 'partner')
                                                                Partner
                                                            @else
                                                                Client
                                                            @endif
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="table-responsive">


                                        <div class="mb-2">
                                            <table class="text-center table table-bordered table-hover mb-3">
                                                <thead>
                                                    <tr class="bg-gray">
                                                        <th width="40%">Item Name</th>
                                                        <th width="10%">Quantity</th>
                                                        <th width="10%">Unit Price</th>
                                                        <th width="10%">Cost (Cog Price)</th>
                                                        <th width="10%" class="rg_discount d-none">Regular Discount
                                                        </th>
                                                        <th width="10%" class="rg_discount d-none">Discounted Sales
                                                            Price</th>
                                                        <th width="10%">Unit Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($deal_products as $item)
                                                        <tr class="thd">
                                                            <td class="border-none">
                                                                {{ $item->item_name }}
                                                            </td>

                                                            <td class="border-none">
                                                                {{ $item->qty }}
                                                            </td>
                                                            <td class="border-none">
                                                                {{ $item->unit_price }}
                                                            </td>
                                                            <td class="border-none">
                                                                {{ $item->cog_price }}
                                                            </td>
                                                            <td class="rg_discount d-none border-none">
                                                                {{ $item->regular_discount }}
                                                            </td>

                                                            <td class="rg_discount d-none border-none">
                                                                {{ $item->discounted_sales }}
                                                            </td>
                                                            <td class="border-none">
                                                                {{ $item->sales_price }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>


                                                        <td class="border-none" width="45%" colspan="3">Sub
                                                            Total</td>

                                                        <td class="border-none">
                                                            {{ $sourcing->sub_total_cost }}
                                                        </td>
                                                        <td class="rg_discount d-none border-none"></td>
                                                        <td class="rg_discount d-none border-none">
                                                            {{ $sourcing->sub_total_discounted_sales }}</td>

                                                        <td class="border-none">{{ $sourcing->sub_total_sales }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table class="text-center table table-bordered table-hover">
                                                <thead>
                                                    <tr class="special_discount d-none">
                                                        <th class="border-none" colspan="5" width="67%">Special
                                                            Discount</th>
                                                        <th class="border-none">{{ $sourcing->special_discount }} %
                                                        </th>
                                                        <th class="border-none">
                                                            {{ $sourcing->special_discounted_sales }}</th>
                                                    </tr>
                                                    <tr class="tax d-none">

                                                        <th class="border-none" colspan="5" width="67%">Tax/VAT
                                                        </th>
                                                        <th class="border-none">{{ $sourcing->tax }} %</th>
                                                        <th class="border-none">{{ $sourcing->tax_sales }}</th>
                                                    </tr>
                                                    <tr>

                                                        <th class="border-none" colspan="5" width="67%">Grand
                                                            Total (With Everything)</th>
                                                        <th class="border-none" width="18%"></th>

                                                        <th class="border-none" width="15%">
                                                            {{ $sourcing->grand_total }}</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>

                                        <div class="m-auto" style="width:60%;">
                                            <table class="text-center table table-bordered table-hover">
                                                <tbody class="tb accordion padding text-center"
                                                    id="accordion_expanded">
                                                    <tr class="bg-dark accordion_expense">
                                                        <td class="text-white" colspan="3">
                                                            <i class="ph-arrow-down"></i>&nbsp;&nbsp; Expenses
                                                        </td>
                                                    </tr>

                                                    <tr class="body_expense" style="display: none;">
                                                        <td class="border-none">Bank & Remittance Charge - (1.5%)</td>
                                                        <td class="border-none">{{ $sourcing->bank_charge }}%
                                                        </td>

                                                    </tr>

                                                    <tr class="body_expense" style="display: none;">
                                                        <td class="border-none">Customs & Duty - (5.0%)</td>
                                                        <td class="border-none">{{ $sourcing->customs }} %
                                                        </td>

                                                    </tr>

                                                    <tr class="body_expense" style="display: none;">
                                                        <td class="border-none">HR , Office & Utility Cost- (5.0%)</td>
                                                        <td class="border-none">{{ $sourcing->utility_cost }} %
                                                        </td>

                                                    </tr>

                                                    <tr class="body_expense" style="display: none;">
                                                        <td class="border-none">Shipping & Handling Cost- (5.0%)</td>
                                                        <td class="border-none">{{ $sourcing->shiping_cost }} %
                                                    </tr>

                                                    <tr class="body_expense" style="display: none;">
                                                        <td class="border-none">Sales / Consultancy Comission - (5.0%)
                                                        </td>
                                                        <td class="border-none">{{ $sourcing->sales_comission }} %
                                                        </td>
                                                    </tr>

                                                    <tr class="body_expense" style="display: none;">
                                                        <td class="border-none">Bank Loan / Liability / Debt - (5.0%)
                                                        </td>
                                                        <td class="border-none">{{ $sourcing->liability }} %
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-dark accordion_offer">
                                                        <td class="border-none text-white" colspan="3">
                                                            <i class="ph-arrow-down"></i>&nbsp;&nbsp;
                                                            Offering Value Adding
                                                        </td>
                                                    </tr>

                                                    <tr class="body_offer" style="display: none;">
                                                        <td class="border-none">Deal Closing / Rebates</td>
                                                        <td class="border-none">{{ $sourcing->rebates }} %
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-dark accordion_other">
                                                        <td class="border-none text-white" colspan="3">
                                                            <i class="ph-arrow-down"></i>&nbsp;&nbsp;
                                                            Other Income
                                                        </td>
                                                    </tr>

                                                    <tr class="body_other" style="display: none;">
                                                        <td class="border-none">Loan / Capital / Partner Share - (5%)
                                                        </td>
                                                        <td class="border-none">{{ $sourcing->capital_share }} %</td>
                                                    </tr>

                                                    <tr class="body_other" style="display: none;">
                                                        <td class="border-none">Management Cost - (5%)</td>
                                                        <td class="border-none">{{ $sourcing->management_cost }} %
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="border-none">Gross Profit (%) between Sales and Cost
                                                        </td>
                                                        <td class="border-none">
                                                            {{ $sourcing->gross_profit_subtotal }} %</td>
                                                        <td class="border-none">$
                                                            {{ $sourcing->gross_profit_amount }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-none">Net Profit - (5%)</td>
                                                        <td class="border-none">
                                                            {{ $sourcing->net_profit_percentage }} %
                                                        </td>
                                                        <td class="border-none">$ {{ $sourcing->net_profit_amount }}
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endif
<!---Show SAS modal--->

<!---Work Order Upload modal--->
@if ($sourcing)
    <div id="Work-order-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header py-1">
                    @php
                        $rfq = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                        $sourcing = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->first();
                    @endphp
                    <h5 class="modal-title">Upload Your Work Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7 p-1 m-0">

                    <form method="post" action="{{ route('work-order.upload', $rfq_details->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-bordered"
                                            style="width: 100%;
                                                        height: auto;">
                                            <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                <th>SL #
                                                </th>
                                                <th>Product
                                                    Description</th>
                                                <th>Quantity
                                                </th>

                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none">Discount </th>
                                                    <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                @else
                                                    <th width="10%" class="rg_unit">Unit Price </th>
                                                @endif

                                                <th width="15%">Total
                                                </th>
                                            </tr>

                                            @foreach ($deal_products as $key => $item)
                                                <tr>
                                                    <td> {{ ++$key }}
                                                    </td>

                                                    <td>
                                                        {{ $item->item_name }}</td>
                                                    <td class="text-center">
                                                        {{ $item->qty }}</td>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">
                                                            {{ $item->regular_discount }} % </th>
                                                        <th width="10%" class="rg_discount d-none">
                                                            {{ number_format($item->sales_price / $item->qty, 2) }}
                                                        </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">
                                                            {{ number_format($item->sales_price / $item->qty, 2) }}
                                                        </th>
                                                    @endif

                                                    <td class="text-center">$
                                                        {{ $item->sales_price }}</td>
                                                </tr>
                                            @endforeach


                                            <tr>
                                                <th> </th>

                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                @else
                                                    <th width="10%" class="rg_unit"></th>
                                                @endif
                                                <td colspan="2" class="text-center"> Sub Total </td>
                                                <td class="text-center"> $
                                                    {{ $sourcing->sub_total_sales }}</td>
                                            </tr>
                                            @if ($rfq_details->special == '1')
                                                <tr class="special_discount">
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td class="text-center">
                                                        Special discount </td>
                                                    <td class="text-center">
                                                        {{ $sourcing->special_discount }} %</td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->special_discounted_sales }}</td>
                                                </tr>
                                            @endif



                                            <tr>
                                                <th> </th>
                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                @else
                                                    <th width="10%" class="rg_unit"></th>
                                                @endif
                                                <th colspan="2" class="text-center"> Total </th>
                                                <td class="text-center">
                                                    $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                            </tr>

                                            <!-- <tr>
                                                        <th colspan="2" width="40%"> In Words: </th> <th colspan="5" width="60%"> <small> <b> Thirty One Lac sixty Four Thousand and Four Hundred Twenty One Taka Only (w/o Tax / VAT) </b> </small> </th>
                                                    </tr> -->


                                        </table>


                                        @if ($rfq_details->tax_status == '1')
                                            <table class="table table-bordered mt-2">
                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                <td class="text-center" width="10%"> $
                                                    {{ $sourcing->tax_sales }}
                                                </td>
                                                </tr>

                                            </table>
                                        @endif
                                    </div>

                                </div>

                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-bordered"
                                            style="background: offset; width:60%; margin:auto;">

                                            <thead>
                                                <tr class="border-none">
                                                    <th class="border-none" colspan="3"
                                                        style="background: offset; width:60%; margin:auto;">
                                                        <label for="clientPO" style="font-size:16px;">Work Order
                                                            (Pdf)</label>
                                                        <input class="form-control" type="file" name="client_po"
                                                            id="clientPO">
                                                        <span class="text-info">
                                                            * Accepts PDF only</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button type="submit" class="btn btn-primary">Upload <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
@endif
<!---Work Order Upload modal--->

<!---Proof of Payment modal--->
<div id="proofpayment-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-1">
                @php
                    $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                    $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                @endphp
                <h5 class="modal-title">Proof of Payment For {{ $rfq_details->rfq_code }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border br-7 p-1 m-0">
                <form method="post" action="{{ route('payment-proof.upload', $rfq_details->rfq_code) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="card">
                            <div class="table-responsive">

                                @if (!empty($sourcing->grand_total))
                                    <table class="table table-bordered" style="width: 100%;height: auto;">


                                        <tbody>
                                            <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                <th width="40%">Product Description</th>
                                                <th width="14%">Quantity</th>

                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none">Discount </th>
                                                    <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                @else
                                                    <th width="10%" class="rg_unit">Unit Price </th>
                                                @endif

                                                <th width="15%">Unit Total</th>
                                            </tr>

                                            @foreach ($deal_products as $key => $item)
                                                <tr>
                                                    <td>
                                                        <a class="text-black"
                                                            title="{{ $item->item_name }}">{{ Str::limit($item->item_name, 28) }}</a>
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $item->qty }}</td>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">
                                                            {{ $item->regular_discount }} % </th>
                                                        <th width="10%" class="rg_discount d-none">
                                                            {{ number_format($item->sales_price / $item->qty, 2) }}
                                                        </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">
                                                            {{ number_format($item->sales_price / $item->qty, 2) }}
                                                        </th>
                                                    @endif

                                                    <td class="text-center">$
                                                        {{ $item->sales_price }}</td>
                                                </tr>
                                            @endforeach


                                            <tr>
                                                <th> </th>

                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                @else
                                                    <th width="10%" class="rg_unit"></th>
                                                @endif
                                                <td class="text-center"> Sub Total </td>
                                                <td class="text-center"> $
                                                    {{ $sourcing->sub_total_sales }}</td>
                                            </tr>
                                            @if ($rfq_details->special == '1')
                                                <tr class="special_discount">
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td class="text-center">
                                                        Special discount </td>
                                                    <td class="text-center">
                                                        {{ $sourcing->special_discount }} %</td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->special_discounted_sales }}</td>
                                                </tr>
                                            @endif



                                            <tr>
                                                <th> </th>
                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                @else
                                                    <th width="10%" class="rg_unit"></th>
                                                @endif
                                                <th class="text-center"> Total </th>
                                                <td class="text-center">
                                                    $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                            </tr>
                                        </tbody>



                                    </table>

                                    @if ($rfq_details->tax_status == '1')
                                        <table class="table table-bordered mt-2 expand-div1 d-none">
                                            <th colspan="3" width="80%"> Tax / VAT</td>
                                            <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                            <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}
                                            </td>
                                            </tr>

                                        </table>
                                    @endif

                                @endif
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header m-0 p-0" style="background: black;">
                                <h6 class="mb-0 text-center p-0 text-white">Upload Proof of Payment</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-sm-12">
                                            <h6 class="m-0 text-center">Payment Slip (PDF) </h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="file" class="form-control" name="client_po_pdf">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary text-center">
                            <button type="submit" class="btn btn-primary">Upload <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>
<!---Proof of Payment modal--->

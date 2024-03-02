@extends('frontend.master')
@section('content')
    <style>
        .page-wrapper {
            height: 100vh;
        }
    </style>
    <!--=========Content Wrapper=============-->
    <section class="content_wrapper">
        <div class="page-wrapper chiller-theme toggled">
            @include('frontend.pages.client.partials.sidebar')
            <main class="page-content">
                <div class="content_wrapper">
                    <div class="container dashboard-container">
                        <div class="section_wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 border-0 shadow-sm">
                                        <div class="card-header rounded-0 border-0 p-2 card_main_support">
                                            <div class="px-3 p-2 d-flex justify-content-between">
                                                <h5 class="m-0 text-center text-white px-3 py-1 upper_title">MY RFQs / Deals
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-lg-12 p-0">
                                                <div class="table-responsive px-3">
                                                    <table class="table text-center" id="example">
                                                        <thead style="background-color:#24729759 !important">
                                                            <tr>
                                                                <th width="10%">Id</th>
                                                                <th width="15%">Rfq Code</th>
                                                                <th width="40%">Product Name</th>
                                                                <th width="15%">Rfq Status</th>
                                                                <th class="text-center" width="20%">Work order</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @if ($rfqs)
                                                                @foreach ($rfqs as $key => $rfq)
                                                                    <tr>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td>{{ $rfq->rfq_code }}</td>
                                                                        <td>{{ App\Models\Admin\Product::where('id', $rfq->product_id)->value('name') }}
                                                                        </td>
                                                                        <td>{{ ucfirst($rfq->status) }}</td>
                                                                        <td class="text-center">
                                                                            <a href="javascript:void(0);"
                                                                                class="text-primary mx-2"
                                                                                data-bs-toggle="modal"
                                                                                title="Upload Work order"
                                                                                data-bs-target="#Work-order-{{ $rfq->rfq_code }}">
                                                                                <i class="fas fa-upload"></i>
                                                                            </a>
                                                                            <!---Category Update modal--->
                                                                            <div id="Work-order-{{ $rfq->rfq_code }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                style="display: none;" aria-hidden="true">
                                                                                <div
                                                                                    class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            @php
                                                                                                $rfq = App\Models\Admin\Rfq::where('rfq_code', $rfq->rfq_code)->first();
                                                                                                $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq->rfq_code)->get();
                                                                                                $deal_sas = App\Models\Admin\DealSas::where('rfq_code', $rfq->rfq_code)->first();
                                                                                            @endphp
                                                                                            <h5 class="modal-title">Upload
                                                                                                Your Work Order</h5>
                                                                                            <button type="button"
                                                                                                class="btn-close"
                                                                                                data-bs-dismiss="modal"></button>
                                                                                        </div>

                                                                                        <div class="modal-body border br-7">

                                                                                            <form method="post"
                                                                                                action="{{ route('work-order.upload', $rfq->rfq_code) }}"
                                                                                                enctype="multipart/form-data">
                                                                                                @csrf
                                                                                                @method('PUT')
                                                                                                <div class="row mb-3">
                                                                                                    <div class="card">
                                                                                                        <div
                                                                                                            class="card-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <table
                                                                                                                    class="table table-bordered"
                                                                                                                    style="width: 100%;
                                                                                                                        height: auto;">
                                                                                                                    <tr class="text-center"
                                                                                                                        style="background-color: rgba(0,0,0,.03);">
                                                                                                                        <th>SL
                                                                                                                            #
                                                                                                                        </th>
                                                                                                                        <th>Product
                                                                                                                            Description
                                                                                                                        </th>
                                                                                                                        <th>Quantity
                                                                                                                        </th>

                                                                                                                        @if ($rfq->regular == '1')
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_discount d-none">
                                                                                                                                Discount
                                                                                                                            </th>
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_discount d-none">
                                                                                                                                Disc.
                                                                                                                                Unit
                                                                                                                            </th>
                                                                                                                        @else
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_unit">
                                                                                                                                Unit
                                                                                                                                Price
                                                                                                                            </th>
                                                                                                                        @endif

                                                                                                                        <th
                                                                                                                            width="15%">
                                                                                                                            Total
                                                                                                                        </th>
                                                                                                                    </tr>

                                                                                                                    @foreach ($deal_products as $key => $item)
                                                                                                                        <tr>
                                                                                                                            <td> {{ ++$key }}
                                                                                                                            </td>

                                                                                                                            <td>
                                                                                                                                {{ $item->item_name }}
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="text-center">
                                                                                                                                {{ $item->qty }}
                                                                                                                            </td>
                                                                                                                            @if ($rfq->regular == '1')
                                                                                                                                <th width="10%"
                                                                                                                                    class="rg_discount d-none">
                                                                                                                                    {{ $item->regular_discount }}
                                                                                                                                    %
                                                                                                                                </th>
                                                                                                                                <th width="10%"
                                                                                                                                    class="rg_discount d-none">
                                                                                                                                    {{ number_format($item->sales_price / $item->qty, 2) }}
                                                                                                                                </th>
                                                                                                                            @else
                                                                                                                                <th width="10%"
                                                                                                                                    class="rg_unit">
                                                                                                                                    {{ number_format($item->sales_price / $item->qty, 2) }}
                                                                                                                                </th>
                                                                                                                            @endif

                                                                                                                            <td
                                                                                                                                class="text-center">
                                                                                                                                $
                                                                                                                                {{ $item->sales_price }}
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    @endforeach


                                                                                                                    <tr>
                                                                                                                        <th>
                                                                                                                        </th>

                                                                                                                        @if ($rfq->regular == '1')
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_discount d-none">
                                                                                                                            </th>
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_discount d-none">
                                                                                                                            </th>
                                                                                                                        @else
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_unit">
                                                                                                                            </th>
                                                                                                                        @endif
                                                                                                                        <td colspan="2"
                                                                                                                            class="text-center">
                                                                                                                            Sub
                                                                                                                            Total
                                                                                                                        </td>
                                                                                                                        <td
                                                                                                                            class="text-center">
                                                                                                                            $
                                                                                                                            {{ $deal_sas->sub_total_sales }}
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    @if ($rfq->special == '1')
                                                                                                                        <tr
                                                                                                                            class="special_discount">
                                                                                                                            <th>
                                                                                                                            </th>
                                                                                                                            @if ($rfq->regular == '1')
                                                                                                                                <th width="10%"
                                                                                                                                    class="rg_discount d-none">
                                                                                                                                </th>
                                                                                                                                <th width="10%"
                                                                                                                                    class="rg_discount d-none">
                                                                                                                                </th>
                                                                                                                            @else
                                                                                                                                <th width="10%"
                                                                                                                                    class="rg_unit">
                                                                                                                                </th>
                                                                                                                            @endif
                                                                                                                            <td
                                                                                                                                class="text-center">
                                                                                                                                Special
                                                                                                                                discount
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="text-center">
                                                                                                                                {{ $deal_sas->special_discount }}
                                                                                                                                %
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="text-center">
                                                                                                                                $
                                                                                                                                {{ $deal_sas->special_discounted_sales }}
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    @endif



                                                                                                                    <tr>
                                                                                                                        <th>
                                                                                                                        </th>
                                                                                                                        @if ($rfq->regular == '1')
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_discount d-none">
                                                                                                                            </th>
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_discount d-none">
                                                                                                                            </th>
                                                                                                                        @else
                                                                                                                            <th width="10%"
                                                                                                                                class="rg_unit">
                                                                                                                            </th>
                                                                                                                        @endif
                                                                                                                        <th colspan="2"
                                                                                                                            class="text-center">
                                                                                                                            Total
                                                                                                                        </th>
                                                                                                                        <td
                                                                                                                            class="text-center">
                                                                                                                            $
                                                                                                                            {{ $deal_sas->grand_total - $deal_sas->tax_sales }}
                                                                                                                        </td>
                                                                                                                    </tr>

                                                                                                                    <!-- <tr>
                                                                                                                                    <th colspan="2" width="40%"> In Words: </th> <th colspan="5" width="60%"> <small> <b> Thirty One Lac sixty Four Thousand and Four Hundred Twenty One Taka Only (w/o Tax / VAT) </b> </small> </th>
                                                                                                                                    </tr> -->


                                                                                                                </table>


                                                                                                                @if ($rfq->tax_status == '1')
                                                                                                                    <table
                                                                                                                        class="table table-bordered mt-2">
                                                                                                                        <th colspan="3"
                                                                                                                            width="80%">
                                                                                                                            Tax
                                                                                                                            /
                                                                                                                            VAT
                                                                        </td>
                                                                        <td class="text-center" width="10%">
                                                                            {{ $deal_sas->tax }}%</td>
                                                                        <td class="text-center" width="10%"> $
                                                                            {{ $deal_sas->tax_sales }}</td>
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
                                                        <tbody>
                                                            <tr class="border-none">
                                                                <th class="border-none" colspan="3"
                                                                    style="background: offset; width:60%; margin:auto;">
                                                                    <label for="clientPO" style="font-size:16px;">Work
                                                                        Order (Pdf)</label>
                                                                    <input class="form-control" type="file"
                                                                        name="client_po" id="clientPO">
                                                                    <span class="text-info">
                                                                        * Accepts PDF only</span>
                                                                </th>
                                                            </tr>
                                                        </tbody>
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
                    <!---Category Update modal--->
                    <a href="javascript:void(0);" class="text-primary mx-2" data-bs-toggle="modal"
                        title="Upload Proof of Payment" data-bs-target="#Proof-payment-{{ $rfq->rfq_code }}">
                        <i class="icon-cash3"></i>
                    </a>
                    <!---Category Update modal--->
                    <div id="Proof-payment-{{ $rfq->rfq_code }}" class="modal fade" tabindex="-1"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    @php
                                        $rfq = App\Models\Admin\Rfq::where('rfq_code', $rfq->rfq_code)->first();
                                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq->rfq_code)->get();
                                        $deal_sas = App\Models\Admin\DealSas::where('rfq_code', $rfq->rfq_code)->first();
                                    @endphp
                                    <h5 class="modal-title">Upload Proof of Payment for this Deal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body border br-7">

                                    <form method="post" action="{{ route('payment-proof.upload', $rfq->rfq_code) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <table class="table table-bordered"
                                                            style="width: 100%; height: auto;">
                                                            <tr class="text-center"
                                                                style="background-color: rgba(0,0,0,.03);">
                                                                <th>SL #</th>
                                                                <th>Product Description</th>
                                                                <th>Quantity</th>

                                                                @if ($rfq->regular == '1')
                                                                    <th width="10%" class="rg_discount d-none">Discount
                                                                    </th>
                                                                    <th width="10%" class="rg_discount d-none">Disc.
                                                                        Unit </th>
                                                                @else
                                                                    <th width="10%" class="rg_unit">Unit Price </th>
                                                                @endif

                                                                <th width="15%">Total</th>
                                                            </tr>

                                                            @foreach ($deal_products as $key => $item)
                                                                <tr>
                                                                    <td> {{ ++$key }}</td>

                                                                    <td>
                                                                        {{ $item->item_name }}</td>
                                                                    <td class="text-center">
                                                                        {{ $item->qty }}</td>
                                                                    @if ($rfq->regular == '1')
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

                                                                @if ($rfq->regular == '1')
                                                                    <th width="10%" class="rg_discount d-none"></th>
                                                                    <th width="10%" class="rg_discount d-none"></th>
                                                                @else
                                                                    <th width="10%" class="rg_unit"></th>
                                                                @endif
                                                                <td colspan="2" class="text-center"> Sub Total </td>
                                                                <td class="text-center"> $
                                                                    {{ $deal_sas->sub_total_sales }}</td>
                                                            </tr>
                                                            @if ($rfq->special == '1')
                                                                <tr class="special_discount">
                                                                    <th> </th>
                                                                    @if ($rfq->regular == '1')
                                                                        <th width="10%" class="rg_discount d-none">
                                                                        </th>
                                                                        <th width="10%" class="rg_discount d-none">
                                                                        </th>
                                                                    @else
                                                                        <th width="10%" class="rg_unit"></th>
                                                                    @endif
                                                                    <td class="text-center">
                                                                        Special discount </td>
                                                                    <td class="text-center">
                                                                        {{ $deal_sas->special_discount }} %</td>
                                                                    <td class="text-center"> $
                                                                        {{ $deal_sas->special_discounted_sales }}</td>
                                                                </tr>
                                                            @endif



                                                            <tr>
                                                                <th> </th>
                                                                @if ($rfq->regular == '1')
                                                                    <th width="10%" class="rg_discount d-none"></th>
                                                                    <th width="10%" class="rg_discount d-none"></th>
                                                                @else
                                                                    <th width="10%" class="rg_unit"></th>
                                                                @endif
                                                                <th colspan="2" class="text-center"> Total </th>
                                                                <td class="text-center">
                                                                    $ {{ $deal_sas->grand_total - $deal_sas->tax_sales }}
                                                                </td>
                                                            </tr>

                                                            <!-- <tr>
                                                                                                                                    <th colspan="2" width="40%"> In Words: </th> <th colspan="5" width="60%"> <small> <b> Thirty One Lac sixty Four Thousand and Four Hundred Twenty One Taka Only (w/o Tax / VAT) </b> </small> </th>
                                                                                                                                    </tr> -->


                                                        </table>


                                                        @if ($rfq->tax_status == '1')
                                                            <table class="table table-bordered mt-2">
                                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                                <td class="text-center" width="10%">
                                                                    {{ $deal_sas->tax }}%</td>
                                                                <td class="text-center" width="10%"> $
                                                                    {{ $deal_sas->tax_sales }}</td>
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
                                                                        <label for="clientPO"
                                                                            style="font-size:16px;">Payment Slip
                                                                            (Pdf)
                                                                        </label>
                                                                        <input class="form-control" type="file"
                                                                            name="client_po" id="clientPO">
                                                                        <span class="text-info">
                                                                            * Accepts PDF only</span>
                                                                    </th>
                                                                    {{-- <th  class="border-none" colspan="3" style="background: offset; width:60%; margin:auto;">
                                                                                                                                    <label for="clientPO" style="font-size:16px;">Transaction ID</label>
                                                                                                                                    <input class="form-control" type="file" name="client_po" id="clientPO">
                                                                                                                                    <span class="text-info">
                                                                                                                                        * Accepts PDF only</span>
                                                                                                                                </th> --}}
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
        </div>
        </div>
        </div>
        </main>
        <!-- Modal -->
        </div>
        <!-- page-wrapper" -->
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection

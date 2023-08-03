<form action="{{ route('account-profit-loss.store') }}" class="form-validate-jquery-profit-loss" method="post"
enctype="multiple/form-data">
@csrf
<div id="modal_account_profitLoss" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Account Profit and Loss </h5>
                &nbsp;&nbsp;&nbsp;<button type="button" class="btn navigation_btn"
                    data-bs-toggle="modal" data-bs-target="#modalSAS-Show"> <i class="ph-pen"></i> SAS
                </button>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-2">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="py-2 px-2 bg-light rounded">
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>RFQ ID</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <select name="rfq_id" id="RFQID"
                                                class="form-control form-control-sm" required>
                                                <option>--select--</option>
                                                @foreach ($rfqs as $rfq)
                                                    <option value="{{ $rfq->id }}">RFQ Code :
                                                        {{ $rfq->rfq_code }};
                                                        Client
                                                        Name : {{ $rfq->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>Client Type</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <select name="clientType" id="clientType"
                                                class="form-control form-control-sm" required>
                                                <option value="">--select--</option>
                                                <option value="client"> Client </option>
                                                <option value="partner"> Partner </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>Item Description</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="text" name="itemDescription" id="itemDescription"
                                                placeholder="Item Description" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>Sales Price</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="number" name="sales_price" id="sales_price"
                                                placeholder="00.00" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>Markup Persentage</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="number" name="gross_makup_ammount" id="grossMarkupAmount"
                                                placeholder="00" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="py-2 px-2 bg-light rounded">
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span> Net profit Persentage</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="number" name="net_profit_percentage"
                                                id="netProfitPersentage" placeholder="00"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span> Net profit Amount</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="number" name="net_profit_ammount" id="NetprofitAmount"
                                                placeholder="00" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>Profit</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="number" name="profit" id="profit" placeholder="00"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>Loss</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="number" name="loss" id="loss" placeholder="00"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1 d-flex align-items-center">
                                        <div class="col-lg-4 col-sm-4">
                                            <span>Cost Price</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <input type="number" name="cost_price" id="cost_price" placeholder="00.00"
                                        class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-end">
                    <div class="pb-2 px-2">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 5px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

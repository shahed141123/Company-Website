@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content area -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Commercial Document Records </span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content ">
            <div class="row">
                <h3 class="text-center" style="color: #247297;"> Commercial Document Records</h3>
            </div>
            <!-- SALES DOCUMENT RECORDS -->
            <div class="container-fluid  shadow-lg">
                <div class="row">
                    <table class="table-salecocument-customice">
                        <tr class="table_bg" style="background-color: #247297;">
                            <th colspan="3" class="text-center text-white">Orders
                            </th>
                            <th colspan="8" class="text-center text-white">Client
                            </th>
                            <th colspan="6" class="text-center text-white">
                                Principal
                            </th>
                        </tr>
                        <tr class="text-center">
                            <th width="5%">Date</th>
                            <th width="6%">Client </th>
                            <th width="6%">Amount</th>
                            <th width="6%">PQ</th>
                            <th width="6%">PO</th>
                            <th width="6%">Invoice</th>
                            <th width="6%">Challan</th>
                            <th width="6%">Payment</th>
                            <th width="6%">Mushok 6.3</th>
                            <th width="6%">Govt. Chalan</th>
                            <th width="6%">SAS</th>
                            <th width="6%">PQ</th>
                            <th width="6%">PO</th>
                            <th width="6%">Invoice</th>
                            <th width="6%">Challan</th>
                            <th width="6%">Payment</th>
                            <th width="6%">Received</th>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="padding">
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#salesDocument">
                            <table width="100%">
                                <tr>
                                    <th width="5%" class="text-info"> <i class="icon-plus2 icon-1x"></i> Jan </th>
                                    <td width="6%" class="text-info"> Sub Total </td>
                                    <td width="6%" class="text-info"> 00.00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                    <td width="6%" class="text-info"> 00</td>
                                </tr>
                            </table>
                        </a>
                        <div id="salesDocument" class="accordion-collapse collapse show" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <table width="100%">
                                    <tr>
                                        <td width="5%"> 2-Jan-22 </td>
                                        <td width="6%"> </td>
                                        <td width="6%"> 99,850.00 </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myPQselect" id="myPQselect">
                                                <option value="No"> No </option>
                                                <option value="Yes"> Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_PQ" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client PQ
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">PQ File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="client_pq_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <!-- PQ end  -->
                                        <!-- PO Start  -->
                                        <td width="6%">
                                            <select class="PQ-select" name="myClientPOselect" id="myClientPOselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_ClientPO" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client PO
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">PO File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="po_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <!-- PO End -->
                                        <td width="6%">
                                            <select class="PQ-select" name="janPO" id="myInvoiceselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_Invoice" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client Invoice
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Client Invoice
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="client_invoice_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myClientChallanselect"
                                                id="myClientChallanselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_ClientChallan" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client Challan
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Client Challan
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="client_challan_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myClientPaymentselect"
                                                id="myClientPaymentselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_ClientPayment" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client Payment
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Client Payment
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="client_Payment_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myClientMushokselect" id="myClientMushokselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_ClientMushok" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client Mushok
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Client Mushok
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="client_Mushok_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myClientGovtChalanselect"
                                                id="myClientGovtChalanselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_ClientGovtChalan" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client GovtChalan
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Client Govt. Chalan
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="client_ClientGovtChalan_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myClientSASselect" id="myClientSASselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_ClientSAS" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Client SAS
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Client SAS
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="client_SAS_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myPrincipalPQselect" id="myPrincipalPQselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_myPrincipalPQ" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Principal PQ
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Principal PQ
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="PrincipalPQ_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myPrincipalPOselect" id="myPrincipalPOselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_myPrincipalPO" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Principal PO
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Principal PO
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="PrincipalPO_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myPrincipalInvoiceselect"
                                                id="myPrincipalInvoiceselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_myPrincipalInvoice" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Principal Invoice
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Principal Invoice
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="PrincipalInvoice_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myPrincipalChallanselect"
                                                id="myPrincipalChallanselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_myPrincipalChallan" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Principal Challan
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Principal Challan
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="PrincipalChallan_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myPrincipalPaymentselect"
                                                id="myPrincipalPaymentselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_myPrincipalPayment" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Principal Payment
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Principal Payment
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="PrincipalPayment_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td width="6%">
                                            <select class="PQ-select" name="myPrincipalReceivedselect"
                                                id="myPrincipalReceivedselect">
                                                <option value="No"> No </option>
                                                <option value="Yes">Yes </option>
                                            </select>
                                            <form action="{{ route('commercial-document.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div id="modal_myPrincipalReceived" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Principal Received
                                                                    Information </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="rfq_id">RFQ ID</label>
                                                                    <select name="rfq_id" class="form-control form-select-sm"
                                                                        id="rfq_id">
                                                                        <option value="">--select--
                                                                        </option>
                                                                        @foreach ($rfqs as $rfq)
                                                                            <option value="{{ $rfq->id }}">
                                                                                {{ $rfq->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rfq_id">Principal Received
                                                                        File</label>
                                                                    <input type="file" class="form-control form-control-sm"
                                                                        name="PrincipalReceived_file">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="submit" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Submit<i
                                                                        class="ph-check ph-1x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- <i class="icon-plus2 icon-1x"></i> -->
@push('scripts')
    <script type="text/javascript">
        $('#myPQselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_PQ').modal("show");
            }
        });
        $('#myClientPOselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_ClientPO').modal("show");
            }
        });
        $('#myInvoiceselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_Invoice').modal("show");
            }
        });
        $('#myClientChallanselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_ClientChallan').modal("show");
            }
        });
        $('#myClientPaymentselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_ClientPayment').modal("show");
            }
        });
        $('#myClientMushokselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_ClientMushok').modal("show");
            }
        });
        $('#myClientGovtChalanselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_ClientGovtChalan').modal("show");
            }
        });
        $('#myClientSASselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_ClientSAS').modal("show");
            }
        });
        // Principal
        $('#myPrincipalPQselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_myPrincipalPQ').modal("show");
            }
        });
        $('#myPrincipalPOselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_myPrincipalPO').modal("show");
            }
        });
        $('#myPrincipalInvoiceselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_myPrincipalInvoice').modal("show");
            }
        });
        $('#myPrincipalChallanselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_myPrincipalChallan').modal("show");
            }
        });
        $('#myPrincipalPaymentselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_myPrincipalPayment').modal("show");
            }
        });
        $('#myPrincipalReceivedselect').change(function() {
            var opval = $(this).val();
            if (opval == "Yes") {
                $('#modal_myPrincipalReceived').modal("show");
            }
        });
    </script>
@endpush

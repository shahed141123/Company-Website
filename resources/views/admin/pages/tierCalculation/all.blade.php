@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="#" class="breadcrumb-item">Tier Calculation</a>
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
        <div class="content pt-0">
            <!-- Highlighting rows and columns -->
            <div class="d-flex justify-content-start align-items-center py-2">
                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                    data-bs-target="#tier_calculation"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Expense">
                        <i class="ph-plus icons_design"></i>
                    </span>
                    <span class="ms-1">Add</span>
                </a>
            </div>
            <div>
                <!-- Title Area End -->
                <table class="table tierDT table-bordered table-hover datatable-highlight text-center ">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="15%">Point</th>
                            <th width="20%">Tier</th>
                            <th width="20%">Rebates</th>
                            <th width="10%">Benifites</th>
                            <th width="10%">Amount</th>
                            <th width="10%">Value</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($tierCalculations)
                            @foreach ($tierCalculations as $key => $tierCalculation)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ $tierCalculation->point }}</td>
                                    <td>{{ $tierCalculation->tier }}</td>
                                    <td>{{ $tierCalculation->rebates }}</td>
                                    <td>{{ $tierCalculation->benifits }}</td>
                                    <td>{{ $tierCalculation->amount }}</td>
                                    <td class="text-center">{{ $tierCalculation->value }}</td>
                                    <td>
                                        <a href="#" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editTierCalculation_{{ $tierCalculation->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
                                            {{-- Edit Expense Modal --}}
                                            <div id="editTierCalculation_{{ $tierCalculation->id }}" class="modal fade"
                                                tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title text-white">Edit Tier Calculation</h6>
                                                            <a type="button" data-bs-dismiss="modal">
                                                                <i class="ph ph-x text-white"
                                                                    style="font-weight: 800;font-size: 10px;"></i>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body p-0 px-2">

                                                            <form
                                                                action="{{ route('tier-calculation.update', $tierCalculation->id) }}"
                                                                method="post"
                                                                class="pt-2 form-validate-tier-calculation-update from-prevent-multiple-submits ">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Point</label>
                                                                        <div class="input-group">
                                                                            <input pattern="[0-9]+" maxlength="10"
                                                                                name="point"
                                                                                value="{{ $tierCalculation->point }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Point" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Tier</label>
                                                                        <div class="input-group">
                                                                            <input pattern="[0-9]+" maxlength="10"
                                                                                name="tier"
                                                                                value="{{ $tierCalculation->tier }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Tier" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Rebates</label>
                                                                        <div class="input-group">
                                                                            <input pattern="[0-9]+" maxlength="10"
                                                                                name="rebates"
                                                                                value="{{ $tierCalculation->rebates }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Rebates" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Benifits</label>
                                                                        <div class="input-group">
                                                                            <input pattern="[0-9]+" maxlength="10"
                                                                                name="benifits"
                                                                                value="{{ $tierCalculation->benifits }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Benifites"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Amount</label>
                                                                        <div class="input-group">
                                                                            <input pattern="[0-9]+" maxlength="10"
                                                                                name="amount"
                                                                                value="{{ $tierCalculation->amount }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Amount" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Value</label>
                                                                        <div class="input-group">
                                                                            <input pattern="[0-9]+" maxlength="10"
                                                                                name="value"
                                                                                value="{{ $tierCalculation->value }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Value" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                    <button type="button" class="submit_close_btn "
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="submit_btn from-prevent-multiple-submits"
                                                                        style="padding: 4px 9px;">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('tier-calculation.destroy',$tierCalculation->id ) }}" class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Expense Modal --}}
        <div id="tier_calculation" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header  text-white" style="background-color: #247297">
                        <h5 class="modal-title">Add Tier Calculation</h5>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="{{ route('tier-calculation.store') }}" method="post"
                            class="pt-2 form-validate-tier-calculation-update from-prevent-multiple-submits ">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Point</label>
                                    <div class="input-group">
                                        <input pattern="[0-9]+" maxlength="10" name="point" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Point" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Tier</label>
                                    <div class="input-group">
                                        <input pattern="[0-9]+" maxlength="10" name="tier" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Tier" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Rebates</label>
                                    <div class="input-group">
                                        <input pattern="[0-9]+" maxlength="10" name="rebates" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Rebates"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Benifites</label>
                                    <div class="input-group">
                                        <input pattern="[0-9]+" maxlength="10" name="benifits" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Benifites"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Amount</label>
                                    <div class="input-group">
                                        <input pattern="[0-9]+" maxlength="10" name="amount" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Amount" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Value</label>
                                    <div class="input-group">
                                        <input pattern="[0-9]+" maxlength="10" name="value" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Value" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Expense Modal End --}}
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.tierDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });
            Initialize
            const validator = $('.form-validate-tier-calculation-store, .form-validate-tier-calculation-update').validate({
                ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
                rules: {
                    point: {
                        number: true
                    },
                    tier: {
                        number: true
                    },
                    rebates: {
                        number: true
                    },
                    benifites: {
                        number: true
                    },
                    amount: {
                        number: true
                    },
                    value: {
                        number: true
                    },
                },
            });
        </script>
    @endpush
@endonce

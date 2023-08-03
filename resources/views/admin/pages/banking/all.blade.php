@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="" class="breadcrumb-item">Banking</a>
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
        <div class="content pt-0">
            <!-- Highlighting rows and columns -->
            <div class="d-flex justify-content-start align-items-center py-2">
                {{-- Add Tax Vat Modal --}}
                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                    data-bs-target="#bankingAdd" style="position: relative; z-index: 999; margin-bottom: -40px;">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Expense">
                        <i class="ph-plus icons_design"></i>
                    </span>
                    <div class="d-flex justify-content-between">
                        <span class="ms-1">Add</span>
                    </div>
                    <div class="d-flex justify-content-between hide_mobile">
                        <h6 class="mb-0 text-black text-center" style="margin-left: 15rem !important;">CAR Details</h6>
                    </div>
                </a>
                {{-- <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                    data-bs-target="#bankingAdd"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Expense">
                        <i class="ph-plus icons_design"></i>
                    </span>
                    <span class="ms-1">Add</span>
                </a> --}}

            </div>
            <div>
                <table class="table bankingDT table-bordered table-hover text-center ">
                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th width="11%">Region Name</th>
                            <th width="11%">Country Name</th>
                            <th width="8%">Month</th>
                            <th width="8%">Date</th>
                            <th width="9%">Fiscal Year</th>
                            <th width="18%">Bank Name</th>
                            <th width="10%">Deposit</th>
                            <th width="10%">Withdraw</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($bankings)
                            @foreach ($bankings as $key => $banking)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ app\Models\Admin\Region::where('id', $banking->region_id)->value('region_name') }}
                                    </td>
                                    <td>{{ app\Models\Admin\Country::where('id', $banking->country_id)->value('country_name') }}
                                    </td>
                                    <td>{{ $banking->month }}</td>
                                    <td>{{ $banking->date }}</td>
                                    <td>{{ $banking->fiscal_year }}</td>
                                    <td>{{ $banking->bank_name }}</td>
                                    <td>{{ $banking->deposit }}</td>
                                    <td>{{ $banking->withdraw }}</td>

                                    <td>
                                        <a href="#" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#bankingedit_{{ $banking->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                            {{-- Edit Expense Modal --}}
                                            <div id="bankingedit_{{ $banking->id }}" class="modal fade" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header  text-white"
                                                            style="background-color: #247297">
                                                            <h5 class="modal-title text-white">Edit Banking</h5>
                                                            <a type="button" data-bs-dismiss="modal"> <i
                                                                    class="ph ph-x text-white"
                                                                    style="font-weight: 800;font-size: 10px;"></i></a>
                                                        </div>
                                                        <div class="modal-body p-0 px-2">
                                                            <form action="{{ route('banking.update', $banking->id) }}"
                                                                method="post"
                                                                class="from-prevent-multiple-submits form-validate-banking-update pt-2"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row mt-2">
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Region
                                                                            Name</label>
                                                                        <select name="region_id"
                                                                            class="form-control form-select-sm select"
                                                                            data-container-css-class="select-sm"
                                                                            data-minimum-results-for-search="Infinity"
                                                                            data-placeholder="Chose  Region Id" required>
                                                                            <option></option>
                                                                            @foreach ($regions as $key => $region)
                                                                                <option @selected($region->id == $banking->region_id)
                                                                                    value="{{ $region->id }}">
                                                                                    {{ $region->region_name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Country
                                                                            Name</label>
                                                                        <select name="country_id"
                                                                            class="form-control form-select-sm select"
                                                                            data-container-css-class="select-sm"
                                                                            data-placeholder="Chose  Country Name" required>
                                                                            <option></option>
                                                                            @foreach ($countrys as $key => $country)
                                                                                <option @selected($country->id == $banking->country_id)
                                                                                    value="{{ $country->id }}">
                                                                                    {{ $country->country_name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        @php
                                                                            for ($m = 1; $m <= 12; $m++) {
                                                                                $months[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                                                            }
                                                                        @endphp
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Month</label>
                                                                        <select name="month" class="form-control select"
                                                                            data-placeholder="Chose month ">
                                                                            <option></option>
                                                                            @foreach ($months as $month)
                                                                                <option @selected(Str::lower($month) == $banking->month)
                                                                                    value="{{ Str::lower($month) }}">
                                                                                    {{ $month }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Date</label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->date }}"
                                                                                name="date" type="date" maxlength="50"
                                                                                class="form-control form-control-sm"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Fiscal
                                                                            Year</label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->fiscal_year }}"
                                                                                name="fiscal_year" type="text"
                                                                                class="form-control form-control-sm yearselect"
                                                                                id="datepicker" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Bank
                                                                            Name</label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->bank_name }}"
                                                                                name="bank_name" type="text"
                                                                                maxlength="50"
                                                                                class="form-control form-control-sm"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Deposit</label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->deposit }}"
                                                                                name="deposit" type="text"
                                                                                maxlength="50"
                                                                                class="form-control form-control-sm"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->withdraw }}"
                                                                                name="withdraw" type="text"
                                                                                maxlength="50"
                                                                                class="form-control form-control-sm"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Purpose</label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->purpose }}"
                                                                                name="purpose" type="text"
                                                                                maxlength="50"
                                                                                class="form-control form-control-sm"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Document</label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->document }}"
                                                                                name="document" type="file"
                                                                                class="form-control form-control-sm"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Notes</label>
                                                                        <div class="input-group">
                                                                            <input value="{{ $banking->notes }}"
                                                                                name="notes" type="text"
                                                                                maxlength="150"
                                                                                class="form-control form-control-sm"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-3 p-0 text-start text-black">Status</label>
                                                                        <select name="status"
                                                                            class="form-control form-select-sm select"
                                                                            data-container-css-class="select-sm"
                                                                            data-minimum-results-for-search="Infinity"
                                                                            data-placeholder="Chose status" required>
                                                                            <option></option>
                                                                            <option @selected($banking->status == 'active')
                                                                                value="active">Active</option>
                                                                            <option @selected($banking->status == 'in_active')
                                                                                value="in_active">In Active</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                    <button type="button" class="submit_close_btn "
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="submit_btn from-prevent-multiple-submits"
                                                                        style="padding: 5px;">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Edit Tax Modal End --}}
                                        </a>
                                        <a href="{{ route('banking.destroy', $banking->id) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /highlighting rows and columns -->
        </div>
        <!-- /content area End-->
        {{-- add Tax Modal Content --}}
        <div id="bankingAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header  text-white" style="background-color: #247297">
                        <h5 class="modal-title">Add Banking</h5>
                        <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                style="font-weight: 800;font-size: 10px;"></i></a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="{{ route('banking.store') }}" method="post"
                            class="from-prevent-multiple-submits form-validate-banking-store pt-2"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Region
                                        Name</label>
                                    <select name="region_id" class="form-control form-select-sm select"
                                        data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                        data-placeholder="Chose  Region Name" required>
                                        <option></option>
                                        @foreach ($regions as $key => $region)
                                            <option value="{{ $region->id }}">{{ $region->region_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Country
                                        Name</label>
                                    <select name="country_id" class="form-control form-select-sm select"
                                        data-container-css-class="select-sm"
                                        data-placeholder="Chose  Country Name" required>
                                        <option></option>
                                        @foreach ($countrys as $key => $country)
                                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    @php
                                        for ($m = 1; $m <= 12; $m++) {
                                            $months[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                        }
                                    @endphp
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Month</label>
                                    <select name="month" class="form-control select" data-placeholder="Chose month ">
                                        <option></option>
                                        @foreach ($months as $month)
                                            <option value="{{ Str::lower($month) }}">
                                                {{ $month }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Date</label>
                                    <div class="input-group">
                                        <input name="date" type="date" maxlength="50"
                                            class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Fiscal
                                        Year</label>
                                    <div class="input-group">
                                        <input name="fiscal_year" type="text"
                                            class="form-control form-control-sm yearselect" id="datepicker" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Bank
                                        Name</label>
                                    <div class="input-group">
                                        <input name="bank_name" type="text" maxlength="50"
                                            class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Deposit</label>
                                    <div class="input-group">
                                        <input name="deposit" type="text" maxlength="50"
                                            class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Withdraw</label>
                                    <div class="input-group">
                                        <input name="withdraw" type="text" maxlength="50"
                                            class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Purpose</label>
                                    <div class="input-group">
                                        <input name="purpose" type="text" maxlength="50"
                                            class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Document</label>
                                    <div class="input-group">
                                        <input name="document" type="file" class="form-control form-control-sm"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Notes</label>
                                    <div class="input-group">
                                        <input name="notes" type="text" maxlength="150"
                                            class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Status</label>
                                    <select name="status" class="form-control form-select-sm select"
                                        data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                        data-placeholder="Chose status" required>
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="in_active">In Active</option>
                                    </select>
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
            $('.bankingDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [12],
                }, ],
            });

            $('.yearselect').yearselect({
                start: 2019,
                end: 2040
            });

            Initialize
            const validator = $('.form-validate-banking-store, .form-validate-banking-update').validate({
                ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
                rules: {
                    deposit: {
                        number: true
                    },
                    withdraw: {
                        number: true
                    },
                },
            });
        </script>
    @endpush
@endonce

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
                        <a href="{{ route('tax-vat.index') }}" class="breadcrumb-item">Tax Vat</a>
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
                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal" data-bs-target="#myModal">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Expense">
                        <i class="ph-plus icons_design"></i>
                    </span>
                    <span class="ms-1">Add</span>
                </a>
            </div>
            <div class="card shadow-lg">
                <table class="table taxVatDT table-bordered table-hover datatable-highlight text-center ">
                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th width="15%">Name</th>
                            <th width="10%">Region Id</th>
                            <th width="10%">Country Id</th>
                            <th width="10%">Percentage</th>
                            <th width="20%">Type</th>
                            <th width="20%">Account Type</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($taxVats)
                            @foreach ($taxVats as $key => $taxVat)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>Joy Lobo Jhon</td>
                                    <td>R550</td>
                                    <td>C8865</td>
                                    <td class="text-center"><span class=" badge rounded-pill bg-success">10%</span>
                                    </td>
                                    <td>No Comments</td>
                                    <td>To Day</td>
                                    <td>
                                        <a href="{{ route('tax-vat.edit', $taxVat->id) }}" class="text-primary"
                                            data-bs-toggle="modal" data-bs-target="#tax_vat_edit">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                style="background: #247297;"></i>
                                        </a>
                                        <a href="{{ route('tax-vat.destroy', $taxVat->id) }}" class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                style="background: #247297;"></i>
                                        </a>
                                        {{-- Edit Expense Modal --}}
                                        <div id="tax_vat_edit" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header  text-white" style="background-color: #247297">
                                                        <h5 class="modal-title text-white">Edit Tax Vat</h5>
                                                        <a type="button" data-bs-dismiss="modal"> <i
                                                                class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i></a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form method="post" id="tax-vat-form"
                                                            action="{{ route('tax-vat.update', $taxVat->id) }}"
                                                            class="from-prevent-multiple-submits form-validate-jquery-tax-vat-update pt-2">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="col-lg-12 d-flex pt-1">
                                                                <label
                                                                    class="col-form-label col-lg-2 p-0 text-start text-black">Region
                                                                    Name</label>
                                                                <select name="region_id"
                                                                    class="form-control form-select-sm select"
                                                                    data-container-css-class="select-sm"
                                                                    data-minimum-results-for-search="Infinity"
                                                                    data-placeholder="Chose Region Name" required>
                                                                    <option value="">Choose Type</option>
                                                                    @foreach ($regions as $region)
                                                                        <option @selected($region->id == $taxVat->region_id)
                                                                            value="{{ $region->id }}">
                                                                            {{ $region->region_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12 d-flex pt-1">
                                                                <label
                                                                    class="col-form-label col-lg-2 p-0 text-start text-black">Country
                                                                    Name</label>
                                                                <select name="country_id"
                                                                    class="form-control form-select-sm select"
                                                                    data-container-css-class="select-sm"
                                                                    data-placeholder="Chose Country Name" required>
                                                                    <option value="">Choose Type</option>
                                                                    @foreach ($countries as $countrie)
                                                                        <option @selected($countrie->id == $taxVat->country_id)
                                                                            value="{{ $countrie->id }}">
                                                                            {{ $countrie->country_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-12 d-flex pt-1">
                                                                    <label
                                                                        class="col-form-label col-lg-2 p-0 text-start text-black">Name</label>
                                                                    <div class="input-group">
                                                                        <input value="{{ $taxVat->name }}" name="name"
                                                                            maxlength="50" type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Your Name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 d-flex pt-1">
                                                                    <label
                                                                        class="col-form-label col-lg-2 p-0 text-start text-black">Percentage</label>
                                                                    <div class="input-group">
                                                                        <input value="{{ $taxVat->percentage }}"
                                                                            name="percentage" maxlength="10"
                                                                            type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Percentage" required
                                                                            pattern="[0-9]+"
                                                                            title="Please enter numbers only.">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 d-flex pt-1">
                                                                    <label
                                                                        class="col-form-label col-lg-2 p-0 text-start text-black">Type</label>
                                                                    <select name="type"
                                                                        class="form-control form-select-sm select"
                                                                        data-container-css-class="select-sm"
                                                                        data-minimum-results-for-search="Infinity"
                                                                        data-placeholder="Choose Type" required>
                                                                        <option value="">Choose Type</option>
                                                                        <option @selected($taxVat->type == 'active')
                                                                            value="active">Active</option>
                                                                        <option @selected($taxVat->type == 'in_active')
                                                                            value="in_active">In Active</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-lg-12 d-flex pt-1">
                                                                    <label
                                                                        class="col-form-label col-lg-2 p-0 text-start text-black">Account
                                                                        Type</label>
                                                                    <select name="account_type"
                                                                        class="form-control form-select-sm select"
                                                                        data-container-css-class="select-sm"
                                                                        data-minimum-results-for-search="Infinity"
                                                                        data-placeholder="Chose Account Type" required>
                                                                        <option value="">Choose Type</option>
                                                                        <option @selected($taxVat->account_type == 'property_ship')
                                                                            value="property_ship">Property Ship</option>
                                                                        <option @selected($taxVat->account_type == 'limited')
                                                                            value="limited">Limited</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                <button type="button" class="submit_close_btn "
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="submit_btn from-prevent-multiple-submits">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Tax Modal End --}}
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
    </div>

    {{-- add Tax Modal Content --}}
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header  text-white" style="background-color: #247297">
                    <h5 class="modal-title">Add Tax Vat</h5>
                    <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                            style="font-weight: 800;font-size: 10px;"></i></a>
                </div>
                <div class="modal-body p-0 px-2">
                    <form action="{{ route('tax-vat.store') }}" method="post"
                        class="from-prevent-multiple-submits form-validate-jquery-tax-vat-store pt-2">
                        @csrf
                        <div class="col-lg-12 d-flex pt-1">
                            <label class="col-form-label col-lg-2 p-0 text-start text-black">Region Name</label>
                            <select name="region_id" class="form-control form-select-sm select"
                                data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                data-placeholder="Chose Region Name" required>
                                <option value="">Choose Type</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->region_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 d-flex pt-1">
                            <label class="col-form-label col-lg-2 p-0 text-start text-black">Country
                                Name</label>
                            <select name="country_id" class="form-control form-select-sm select"
                                data-container-css-class="select-sm" data-placeholder="Chose Country Name" required>
                                <option value="">Choose Type</option>
                                @foreach ($countries as $countrie)
                                    <option value="{{ $countrie->id }}">{{ $countrie->country_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 d-flex pt-1">
                                <label class="col-form-label col-lg-2 p-0 text-start text-black">Name</label>
                                <div class="input-group">
                                    <input name="name" maxlength="50" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Your Name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex pt-1">
                                <label class="col-form-label col-lg-2 p-0 text-start text-black">Percentage</label>
                                <div class="input-group">
                                    <input name="percentage" maxlength="10" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Percentage" required
                                        pattern="[0-9]+" title="Please enter numbers only.">
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex pt-1">
                                <label class="col-form-label col-lg-2 p-0 text-start text-black">Type</label>
                                <select name="type" class="form-control form-select-sm select"
                                    data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                    data-placeholder="Choose Type" required>
                                    <option value="">Choose Type</option>
                                    <option value="active">Active</option>
                                    <option value="in_active">In Active</option>
                                </select>
                            </div>

                            <div class="col-lg-12 d-flex pt-1">
                                <label class="col-form-label col-lg-2 p-0 text-start text-black">Account
                                    Type</label>
                                <select name="account_type" class="form-control form-select-sm select"
                                    data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                    data-placeholder="Chose Account Type" required>
                                    <option value="">Choose Type</option>
                                    <option value="property_ship">Property Ship</option>
                                    <option value="limited">Limited</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                            <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="submit_btn from-prevent-multiple-submits">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Expense Modal End --}}
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.taxVatDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });

            Initialize
            const validator = $('.form-validate-jquery-tax-vat-store, .form-validate-jquery-tax-vat-update').validate({
                ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
                rules: {
                    percentage: {
                        number: true
                    },
                },
            });
        </script>
    @endpush
@endonce

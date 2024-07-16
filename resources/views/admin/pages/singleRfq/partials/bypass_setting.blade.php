<div class="fade-setting show" id="setting-show">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-7 mb-2">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <tbody>
                            <tr>
                                <td width="18%">
                                    <select class="form-select" id="country_select" name="country" data-allow-clear="true"
                                        data-placeholder="Select Country" onchange="countryFunction()">
                                        <option value="">Select Country</option>
                                        @foreach ($countires as $country)
                                            <option value="{{ $country->country_code }}" @selected(optional($quotation)->country == $country->country_code)>
                                                {{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td width="18%">
                                    <select class="form-select" id="region_select" name="region"
                                        data-allow-clear="true" data-placeholder="Select Region"
                                        onchange="regionFunction()">
                                        <option value="">Select Region</option>
                                        <option value="bangladesh" @selected(optional($quotation)->region == 'bangladesh')>Bangladesh</option>
                                        <option value="singapore" @selected(optional($quotation)->region == 'singapore')>Singapore</option>
                                        <option value="middle_east" @selected(optional($quotation)->region == 'middle_east')>Middle East</option>
                                        <option value="portugal" @selected(optional($quotation)->region == 'portugal')>Portugal</option>
                                    </select>
                                </td>
                                <td width="14%">
                                    <select class="form-select" id="currency_select" name="currency"
                                        onchange="currencyFunction()">
                                        <option value="">Select Currency</option>
                                        <option value="taka" @selected(optional($quotation)->currency == 'taka')>Taka(Tk)</option>
                                        <option value="euro" @selected(optional($quotation)->currency == 'euro')>Euro(&euro;)</option>
                                        <option value="dollar" @selected(optional($quotation)->currency == 'dollar')>Dollar($)</option>
                                        <option value="pound" @selected(optional($quotation)->currency == 'pound')>Pound(&pound;)</option>
                                    </select>
                                </td>
                                <td width="12%">
                                    <input type="number" step="0.01"
                                        value="{{ optional($quotation)->currency_rate ?? 1 }}"
                                        class="form-control form-control-sm form-setting border" name="currency_rate"
                                        placeholder="Cur. Rate">
                                </td>
                                {{-- <td width="9%">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" {{ optional($quotation)->individual_tax == '1' ? 'checked' : '' }} value="1" id="individual_tax" name="individual_tax">
                                        <label class="form-check-label" for="individual_tax">
                                            Tax
                                        </label>
                                    </div>
                                </td> --}}
                                <td width="12%">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            {{ optional($quotation)->vat_display == '1' ? 'checked' : '' }}
                                            value="1" id="vat_display" name="vat_display">
                                        <label class="form-check-label" for="vat_display">
                                            VAT / GST
                                        </label>
                                    </div>
                                </td>
                                <td width="16%">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            {{ optional($quotation)->special_discount_display == '1' ? 'checked' : '' }}
                                            value="1" id="special_discount_display"
                                            name="special_discount_display">
                                        <label class="form-check-label" for="special_discount_display">
                                            Special Discount
                                        </label>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td width="18%">
                                    Client Type: {{ ucfirst($rfq_details->client_type) }}
                                </td>
                                <td width="18%">
                                    <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                        title="View & Assign Sales Manager"
                                        data-bs-target="#create-account-{{ $rfq_details->rfq_code }}">
                                        <i class="fa-solid fa-user-tie dash-icons me-3"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="create-account-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Register this Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body br-7">
                    <div class="card">
                        <div class="card-header">
                            <p class="devider-text mb-0 p-2 pt-0">Register Client</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="John" value="{{ $rfq_details->name }}" />
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle-plus text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="examle@example.com" value="{{ $rfq_details->email }}" />
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle-plus text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control" name="phone"
                                                placeholder="Phone" value="{{ $rfq_details->phone }}" />
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle-plus text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Company name</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control" name="company_name"
                                                placeholder="Company Name"
                                                value="{{ $rfq_details->company_name }}" />
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle-plus text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="devider-text mb-0 p-2 pt-0">Register Client</p>
                            <div class="border card rounded-0">
                                <div class="row mt-1">

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Create password</label>
                                            <div class="form-control-feedback form-control-feedback-start">
                                                <input type="password" class="form-control"
                                                    placeholder="•••••••••••" />
                                                <div class="form-control-feedback-icon">
                                                    <i class="ph-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Repeat password</label>
                                            <div class="form-control-feedback form-control-feedback-start">
                                                <input type="password" class="form-control"
                                                    placeholder="•••••••••••" />
                                                <div class="form-control-feedback-icon">
                                                    <i class="ph-lock text-muted"></i>
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
    </div>
    <div class="modal-footer border p-1">
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

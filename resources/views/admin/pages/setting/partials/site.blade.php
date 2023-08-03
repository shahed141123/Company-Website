<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12 card px-2 py-2">
                <form method="post" action="{{ route('site.setting') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card border border-secondary">
                        <div class="card-header bg-secondary text-white p-2">
                            <h6 class="mb-0">Site Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Site Name</label>
                                        <input type="text" id="site_name" name="site_name"
                                            value="{{ optional($site)->site_name }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="200"
                                            placeholder="Enter Site Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Company Name </label>
                                        <input type="text" id="company_name" name="company_name"
                                            value="{{ optional($site)->company_name }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Company Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Site Slogan</label>
                                        <input type="text" id="site_slogan" name="site_slogan"
                                            value="{{ optional($site)->site_slogan }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Product Site Slogan">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Favicon </label>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <input name="favicon" id="image" accept="image/*" type="file"
                                                    class="form-control form-control-sm"
                                                    placeholder="Enter Favicon Image">
                                            </div>
                                            <div class="col-lg-3">
                                                <img class="img-fluid rounded-circle" id="showImage"
                                                    src="{{ isset(optional($site)->favicon) ? asset('storage/' . optional($site)->favicon) : url('upload/no_image.jpg') }}" alt=""
                                                    style="width: 30px;
                                                    height: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Phone One</label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Enter your Phone" name="phone_one"
                                            value="{{ optional($site)->phone_one }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Phone Two</label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Enter your Phone" name="phone_two"
                                            value="{{ optional($site)->phone_two }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Whatsapp Number</label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Enter Your Whatsapp Number" name="whatsapp_number"
                                            value="{{ optional($site)->whatsapp_number }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Logo </label>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <input name="logo" id="image1" accept="image/*" type="file"
                                                    class="form-control form-control-sm"
                                                    placeholder="Enter logo Image">
                                            </div>
                                            <div class="col-lg-3">
                                                <img class="img-fluid rounded-circle" id="showImage1"
                                                    src="{{ isset(optional($site)->logo) ? asset('storage/' . optional($site)->logo) : url('upload/no_image.jpg') }}" alt=""
                                                    style="width: 30px;
                                                    height: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Currency</label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Enter currency" id="mask_currency" name="currency"
                                            value="{{ optional($site)->currency }}">
                                        <span class="form-text"></span>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label class="form-label">Country Name</label>
                                        <select name="country_id" data-placeholder="Select a country..."
                                            class="form-control form-control-sm select select-country-add"
                                            data-container-css-class="select-sm">
                                            <option></option>
                                            @foreach ($countries as $countrie)
                                                <option value="{{ $countrie->id }}">
                                                    {{ $countrie->country_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Service Time</label>
                                        <input type="time" id="service_time" name="service_time"
                                            value="{{ optional($site)->service_time }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Service Time">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Service Days</label>
                                        <input type="text" id="service_days" name="service_days"
                                            value="{{ optional($site)->service_days }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Service Days">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Default Language</label>
                                        <input type="text" id="default_language" name="default_language"
                                            value="{{ optional($site)->default_language }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Default Language">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Contact Email</label>
                                        <input type="email" id="contact_email" name="contact_email"
                                            value="{{ optional($site)->contact_email }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Contact Email">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Support Email</label>
                                        <input type="email" id="support_email" name="support_email"
                                            value="{{ optional($site)->support_email }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Support Email">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Info Email</label>
                                        <input type="email" id="info_email" name="info_email"
                                            value="{{ optional($site)->info_email }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Info Email">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Sales Email</label>
                                        <input type="email" id="sales_email" name="sales_email"
                                            value="{{ optional($site)->sales_email }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Sales Email">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Service </label>
                                        <input type="text" id="service_days" name="service_days"
                                            value="{{ optional($site)->service_days }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Service URL">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Address</label>
                                        <textarea rows="1" cols="1" class="form-control form-control-sm" name="address"
                                            value="{{ optional($site)->address }}" placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-secondary">
                        <div class="card-header bg-secondary text-white p-2">
                            <h6 class="mb-0">Social Link</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Facebook </label>
                                        <input type="url" id="facebook_url" name="facebook_url"
                                            value="{{ optional($site)->facebook_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="200"
                                            placeholder="Enter Facebook Url">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Twitter </label>
                                        <input type="url" id="twitter_url" name="twitter_url"
                                            value="{{ optional($site)->twitter_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Twitter Url">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Instagram </label>
                                        <input type="url" id="instagram_url" name="instagram_url"
                                            value="{{ optional($site)->instagram_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Instagram URL">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Youtube </label>
                                        <input type="url" id="youtube_url" name="youtube_url"
                                            value="{{ optional($site)->youtube_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Youtube URL">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Linkedin </label>
                                        <input type="url" id="linkedin_url" name="linkedin_url"
                                            value="{{ optional($site)->linkedin_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Linkedin URL">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Github </label>
                                        <input type="url" id="github_url" name="github_url"
                                            value="{{ optional($site)->github_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Github URL">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Portfolio </label>
                                        <input type="url" id="portfolio_url" name="portfolio_url"
                                            value="{{ optional($site)->portfolio_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Portfolio URL">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Fiver </label>
                                        <input type="url" id="fiver_url" name="fiver_url"
                                            value="{{ optional($site)->fiver_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Fiver URL">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Upwork </label>
                                        <input type="url" id="upwork_url" name="upwork_url"
                                            value="{{ optional($site)->upwork_url }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Upwork URL">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form Submit Button Start-->
                    <div class="text-end mb-3 mx-3">
                        <button type="submit" class="btn btn-primary">Submit
                            <i class="ph-paper-plane-tilt ms-2"></i>
                        </button>
                    </div>
                    <!-- Form Submit Button End-->
                </form>
            </div>
        </div>
    </div>
</div>

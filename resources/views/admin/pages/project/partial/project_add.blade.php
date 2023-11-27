<div class="col-md-12">
    <!-- Form Field Start -->
    <div class="row gx-2">
        <!-- Primary Information Area Here -->
        <div class="col-lg-12 mb-4">
            <div class="primary_info section_border border-dashed-section p-2">
                <p class="p-0 m-0 main_bg-title w-25 text-center text-white rounded-pill border-title">
                    Primary Information
                </p>
                <div class="row gx-1">
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <div class="control-label d-flex align-items-center main_color fw-bold label_size">
                                <p class="p-0 m-0">Select Client</p>
                                <a class="ms-3 text-danger">Or</a>
                                <a href="javascript:void(0)" class="p-0 m-0 text-end ps-2" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Create
                                    Client</a>
                            </div>
                            <select name="client_id" class="form-select w-100 select-wizard"
                                data-allow-clear="true" data-placeholder="Select Client">
                                <option></option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">
                                        {{ $client->name }} <input type="hidden" name="client_name" value="{{ $client->name }}"> </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Country</label>
                            <select name="country_id" class="form-select w-100 select-wizard"
                                data-allow-clear="true" data-placeholder="Select Country">
                                <option></option>
                                @foreach ($countrys as $country)
                                    <option value="{{ $country->id }}"> {{ $country->country_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Client
                                Code</label>
                            <input maxlength="100" type="text" name="client_code" class="form-control"
                                placeholder="Enter Client Code" id="client_code"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Status
                                <span class="text-danger"> * </span></label>
                            <select class="form-select w-100 select-wizard" data-allow-clear="true"
                                data-placeholder="Select Status" name="status" required>
                                <option></option>
                                <option value="pending">Pending</option>
                                <option value="on_going">On Going</option>
                                <option value="completed">Completed</option>
                                <option value="delaying">Delaying</option>
                                <option value="partially_deployed">
                                    Partially Deployed
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Information Area Here -->
        <div class="col-lg-12 mb-4">
            <div class="primary_info section_border border-dashed-section p-2">
                <p class="p-0 m-0 main_bg-title w-25 text-center text-white rounded-pill border-title">
                    Project Information
                </p>
                <div class="row gx-1">
                    <div class="col-lg-2 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Industry Name
                                <span class="text-danger"> * </span></label>
                            <select class="form-select w-100 select-wizard" data-allow-clear="true"
                                data-placeholder="Select Industry" name="sector_id" required>
                                <option></option>
                                @foreach ($industrys as $industry)
                                    <option value="{{ $industry->id }}"> {{ $industry->title }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Project
                                ID (PID)</label>
                            <input maxlength="100" type="text" name="project_code" class="form-control"
                                placeholder="Enter Project Code" id="project_code"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Project
                                Start Date
                                <span class="text-danger"> * </span></label>
                            <input type="date" name="create_time" class="form-control"
                                placeholder="Enter Start Time" id="create_time" required
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Project
                                Close Date</label>
                            <input type="date" name="closed_time" class="form-control"
                                placeholder="Enter Close Time" id="closed_time"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Project
                                Duration</label>
                            <input maxlength="100" type="text" name="project_duration" class="form-control allow_decimal"
                                placeholder="Enter Duration" id="firstName"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Project
                                Name
                                <span class="text-danger"> * </span></label>
                            <input maxlength="100" type="text" name="project_title" class="form-control"
                                placeholder="Enter Your Project Name" id="project_title" required
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Project
                                Description</label>
                            <textarea class="form-control" id="project_description" rows="1" name="project_description"
                                placeholder="Enter project Description"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Team
                                Member</label>
                            <input maxlength="100" type="number" name="team_member" class="form-control"
                                placeholder="Enter Team Members Number" id="team_member"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="d-flex justify-content-center align-items-center  mb-2 mt-3 pt-1">
                            <div class="form-group">
                                <div class="checkbox-wrapper-65">
                                    <label for="cbk1-678">
                                        <input id="cbk1-678" type="checkbox" name="amc_support"
                                            class="checkbox-toggle" data-target="#amc_support_row"
                                            style="height: 26px !important;font-size: 12px !important;" />
                                        <span class="cbx">
                                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                                <polyline points="1 6.29411765 4.5 10 11 1">
                                                </polyline>
                                            </svg>
                                        </span>
                                        <span>Phase</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group ms-2">
                                <div class="checkbox-wrapper-65">
                                    <label for="cbk1-677">
                                        <input id="cbk1-677" type="checkbox" name="amc_support"
                                            class="checkbox-toggle" data-target="#amc_support_row"
                                            style="height: 26px !important;font-size: 12px !important;" />
                                        <span class="cbx">
                                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                                <polyline points="1 6.29411765 4.5 10 11 1">
                                                </polyline>
                                            </svg>
                                        </span>
                                        <span>Support</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Order Information Area Here -->
        <div class="col-lg-12 mb-4">
            <div class="primary_info section_border border-dashed-section p-2">
                <p class="p-0 m-0 main_bg-title w-25 text-center text-white rounded-pill border-title">
                    Order Information
                </p>
                <div class="row gx-1">
                    <div class="col-lg-2 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Order
                                Number</label>
                            <input maxlength="100" type="text" name="order_id" class="form-control"
                                placeholder="Enter Order Number" id="order_id"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Order
                                Date
                                <span class="text-danger"> * </span></label>
                            <input maxlength="100" type="date" name="order_date" class="form-control"
                                placeholder="Enter Start Time" id="order_date" required
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Contact
                                Agreement</label>
                            <input maxlength="100" type="file" name="contact_agreement" class="form-control form-control-sm"
                                placeholder="Enter Contact Agreement" id="contact_agreement"
                                />
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Partner
                                Name</label>
                            <input maxlength="100" type="text" name="partner_name" class="form-control"
                                value="NGEN IT" placeholder="Enter Project Code" id="partner_name"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Status
                                Description</label>
                            <textarea class="form-control" id="status_description" rows="1" name="status_description"
                                placeholder="Enter Status Description"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Client
                                Primary Contact</label>
                            <input maxlength="100" type="text" name="client_primary_contact" class="form-control"
                                placeholder="Enter Client Primary Contact" id="client_primary_contact"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Client
                                Secondary Contact</label>
                            <input maxlength="100" type="text" name="client_secondary_contact"
                                class="form-control" placeholder="Enter Client Secondary Contact"
                                id="client_secondary_contact"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Partner
                                Primary Contact</label>
                            <input maxlength="100" type="text" name="partner_primary_contact"
                                class="form-control" placeholder="Enter Project Code" id="partner_primary_contact"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group mb-2">
                            <label class="control-label main_color fw-bold label_size">Partner
                                Secondary Contact</label>
                            <input maxlength="100" type="text" name="partner_secondary_contact"
                                class="form-control" placeholder="Enter Partner Secondary Contact"
                                id="partner_secondary_contact"
                                style="height: 26px !important;font-size: 12px !important;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Field Start -->
    <div class="d-flex justify-content-end">
        <button class="btn btn-next nextBtn pull-right mt-3 d-none" type="button">
            Next
        </button>
        {{-- <button class="btn btn-finish pull-right mt-3" type="submit">
            Save
        </button> --}}
        <button class="btn btn-finish pull-right mt-3" type="submit">
            Submit
        </button>
    </div>
</div>

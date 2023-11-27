<div class="col-md-12 border p-3">
    <h5 class="main_color pb-2">Support Details</h5>
    <div class="row gx-2">
        <div class="col-lg-4 col-sm-6">
            <div class="form-group mb-2">
                <div class="checkbox-wrapper-65">
                    <label for="cbk1-67">
                        <input id="cbk1-67" type="checkbox" name="amc_support" value="1"
                            class="checkbox-toggle2" data-target="#amc_support_row"
                            style="height: 26px !important;font-size: 12px !important;" />
                        <span class="cbx">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1">
                                </polyline>
                            </svg>
                        </span>
                        <span>AMC Support</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="form-group mb-2">
                <div class="checkbox-wrapper-65">
                    <label for="cbk1-66">
                        <input id="cbk1-66" type="checkbox" name="implementation_support" value="1"
                            class="checkbox-toggle2" data-target="#implementation_support_row"
                            style="height: 26px !important;font-size: 12px !important;" />
                        <span class="cbx">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1">
                                </polyline>
                            </svg>
                        </span>
                        <span>Implementation</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="form-group mb-2">
                <div class="checkbox-wrapper-65">
                    <label for="cbk1-68">
                        <input id="cbk1-68" type="checkbox" name="other_support" value="1"
                            class="checkbox-toggle2" data-target="#others_support_row"
                            style="height: 26px !important;font-size: 12px !important;" />
                        <span class="cbx">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1">
                                </polyline>
                            </svg>
                        </span>
                        <span>Other Support</span>
                    </label>
                </div>
            </div>
        </div>
        <!-- For AMC Support -->
        <div class="d-none" id="amc_support_row">
            <div class="border row m-2 p-3">
                <h6>AMC Support</h6>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Name</label>
                        <input maxlength="100" type="text" name="amc_support_title" class="form-control"
                            placeholder="Enter Support Title" id="support_title"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Id (SID)</label>
                        <input maxlength="100" type="text" name="amc_support_id" class="form-control"
                            placeholder="Enter Support Id" id="support_id"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Order
                            Id</label>
                        <input maxlength="100" type="text" name="amc_order_id" class="form-control"
                            placeholder="Enter Order Id" id="order_id"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Duration</label>
                        <input maxlength="100" type="text" name="amc_support_duration" class="form-control"
                            placeholder="Enter Support Duration" id="support_duration"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Hour</label>
                        <input maxlength="100" type="text" name="amc_support_hour" class="form-control"
                            placeholder="Enter Support Hour" id="support_hour"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Description</label>
                        <textarea class="form-control" id="description" rows="1" name="amc_description" placeholder="Enter "></textarea>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Scope
                            Of Work</label>
                        <textarea class="form-control" id="scope_work" rows="1" name="amc_scope_work"
                            placeholder="Enter Status Scope Of Work"></textarea>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Tier</label>
                        <select class="form-select w-100 select-wizard clientID" data-allow-clear="true"
                            data-placeholder="Select Support Tier" name="amc_support_tier">
                            <option></option>
                            <option value="basic">Basic</option>
                            <option value="standard">Standard</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Tier Description</label>
                        <textarea class="form-control" id="support_tier_description" rows="1" name="amc_support_tier_description"
                            placeholder="Enter Support Tier Description"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Status</label>
                        <select class="form-select w-100 select-wizard" data-allow-clear="true"
                            data-placeholder="Select Support Status" name="amc_status">
                            <option></option>
                            <option value="pending">Pending</option>
                            <option value="on_going">On Going</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Status
                            Description</label>
                        <textarea class="form-control" id="status_description" rows="1" name="amc_status_description"
                            placeholder="Enter Status Description"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Attachment</label>
                        <input maxlength="100" type="file" name="amc_support_attachment"
                            class="form-control form-control-sm" placeholder="Enter Attachment" id="attachment"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
            </div>
        </div>
        <!-- For Implementation -->
        <div class="d-none" id="implementation_support_row">
            <div class="border row m-2 p-3">
                <h6>Implementation</h6>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Name</label>
                        <input maxlength="100" type="text" name="implement_support_title" class="form-control"
                            placeholder="Enter Support Title" id="support_title"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Id (SID)</label>
                        <input maxlength="100" type="text" name="implement_support_id" class="form-control"
                            placeholder="Enter Support Id" id="support_id"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Order
                            Id</label>
                        <input maxlength="100" type="text" name="implement_order_id" class="form-control"
                            placeholder="Enter Order Id" id="order_id"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Duration</label>
                        <input maxlength="100" type="text" name="implement_support_duration" class="form-control"
                            placeholder="Enter Support Duration" id="support_duration"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Hour</label>
                        <input maxlength="100" type="text" name="implement_support_hour" class="form-control"
                            placeholder="Enter Support Hour" id="support_hour"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Description</label>
                        <textarea class="form-control" id="description" rows="1" name="implement_description" placeholder="Enter "></textarea>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Scope
                            Of Work</label>
                        <textarea class="form-control" id="scope_work" rows="1" name="implement_scope_work"
                            placeholder="Enter Status Scope Of Work"></textarea>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Tier</label>
                        <select class="form-select w-100 select-wizard" data-allow-clear="true"
                            data-placeholder="Select Support Tier" name="implement_support_tier">
                            <option></option>
                            <option value="basic">Basic</option>
                            <option value="standard">Standard</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Tier Description</label>
                        <textarea class="form-control" id="support_tier_description" rows="1" name="implement_support_tier_description"
                            placeholder="Enter Support Tier Description"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Status</label>
                        <select class="form-select w-100 select-wizard" data-allow-clear="true"
                            data-placeholder="Select Support Status" name="implement_status">
                            <option></option>
                            <option value="pending">Pending</option>
                            <option value="on_going">On Going</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Status
                            Description</label>
                        <textarea class="form-control" id="status_description" rows="1" name="implement_status_description"
                            placeholder="Enter Status Description"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Attachment</label>
                        <input maxlength="100" type="file" name="implement_support_attachment"
                            class="form-control form-control-sm" placeholder="Enter Attachment" id="attachment"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
            </div>
        </div>
        <!-- For Other Support -->
        <div class="d-none" id="others_support_row">
            <div class="border row m-2 p-3">
                <h6>Other Support</h6>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Name</label>
                        <input maxlength="100" type="text" name="other_support_title" class="form-control"
                            placeholder="Enter Support Title" id="support_title"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Id (SID)</label>
                        <input maxlength="100" type="text" name="other_support_id" class="form-control"
                            placeholder="Enter Support Id" id="support_id"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Order
                            Id</label>
                        <input maxlength="100" type="text" name="other_order_id" class="form-control"
                            placeholder="Enter Order Id" id="order_id"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Duration</label>
                        <input maxlength="100" type="text" name="other_support_duration" class="form-control"
                            placeholder="Enter Support Duration" id="support_duration"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Hour</label>
                        <input maxlength="100" type="text" name="other_support_hour" class="form-control"
                            placeholder="Enter Support Hour" id="support_hour"
                            style="height: 26px !important;font-size: 12px !important;" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Description</label>
                        <textarea class="form-control" id="description" rows="1" name="other_description" placeholder="Enter "></textarea>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Scope
                            Of Work</label>
                        <textarea class="form-control" id="scope_work" rows="1" name="other_scope_work"
                            placeholder="Enter Status Scope Of Work"></textarea>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Tier</label>
                        <div class="col-lg-3 col-sm-6">
                            <div class="form-group mb-2">
                                <label class="control-label main_color fw-bold label_size">Support
                                    Tier</label>
                                <select class="form-select w-100 select-wizard clientID" data-allow-clear="true"
                                    data-placeholder="Select Support Tier" name="other_support_tier">
                                    <option></option>
                                    <option value="basic">Basic</option>
                                    <option value="standard">Standard</option>
                                    <option value="premium">Premium</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Tier Description</label>
                        <textarea class="form-control" id="support_tier_description" rows="1" name="other_support_tier_description"
                            placeholder="Enter Support Tier Description"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Status</label>
                        <select class="form-select w-100 select-wizard" data-allow-clear="true"
                            data-placeholder="Select Support Status" name="other_status">
                            <option></option>
                            <option value="pending">Pending</option>
                            <option value="on_going">On Going</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Status
                            Description</label>
                        <textarea class="form-control" id="status_description" rows="1" name="other_status_description"
                            placeholder="Enter Status Description"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-2">
                        <label class="control-label main_color fw-bold label_size">Support
                            Attachment</label>
                        <input maxlength="100" type="file" name="other_support_attachment"
                            class="form-control form-control-sm" placeholder="Enter Attachment" id="attachment" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-3">
        <button class="btn btn-finish pull-right" type="submit">
            Submit
        </button>
    </div>
</div>
